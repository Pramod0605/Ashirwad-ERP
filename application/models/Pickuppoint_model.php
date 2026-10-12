<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pickuppoint_model extends MY_Model
{
    private $has_route_pickup_point_session_id = null;

    public function __construct()
    {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
    }

    private function hasRoutePickupPointSessionId()
    {
        if ($this->has_route_pickup_point_session_id === null) {
            $this->has_route_pickup_point_session_id = $this->db->field_exists('session_id', 'route_pickup_point');
        }

        return $this->has_route_pickup_point_session_id;
    }

    /**
     * Stage 1 parity: until session-scoped rows exist, reads use legacy rows (session_id IS NULL).
     */
    private function currentSessionHasRoutePickupRows()
    {
        if (!isset($this->current_session_has_route_pickup_rows)) {
            $this->current_session_has_route_pickup_rows = false;
            if ($this->hasRoutePickupPointSessionId()) {
                // Use standalone SQL — count_all_results() resets the active query builder
                // and breaks route_pickup_point() when called mid-build.
                $q = $this->db->query(
                    'SELECT 1 FROM route_pickup_point WHERE session_id = ? LIMIT 1',
                    array((int) $this->current_session)
                );
                $this->current_session_has_route_pickup_rows = ($q && $q->num_rows() > 0);
            }
        }

        return $this->current_session_has_route_pickup_rows;
    }

    private function applyRoutePickupSessionScopeToQueryBuilder($alias = 'route_pickup_point')
    {
        if (!$this->hasRoutePickupPointSessionId()) {
            return;
        }

        if ($this->currentSessionHasRoutePickupRows()) {
            $this->db->where($alias . '.session_id', $this->current_session);
        } else {
            $this->db->where($alias . '.session_id IS NULL', null, false);
        }
    }

    private function routePickupSessionScopeSql($alias = 'route_pickup_point')
    {
        if (!$this->hasRoutePickupPointSessionId()) {
            return '';
        }

        $this->currentSessionHasRoutePickupRows();

        if ($this->currentSessionHasRoutePickupRows()) {
            return ' AND ' . $alias . '.session_id=' . $this->db->escape($this->current_session);
        }

        return ' AND ' . $alias . '.session_id IS NULL';
    }

    private function clearRoutePickupSessionCache()
    {
        unset($this->current_session_has_route_pickup_rows);
    }

    private function findSessionRoutePickupRow($transport_route_id, $pickup_point_id, $session_id)
    {
        return $this->db->select('id')
            ->from('route_pickup_point')
            ->where('transport_route_id', (int) $transport_route_id)
            ->where('pickup_point_id', (int) $pickup_point_id)
            ->where('session_id', (int) $session_id)
            ->limit(1)
            ->get()
            ->row();
    }

    private function prepareRoutePickupSaveData($data)
    {
        $save = $data;
        unset($save['id']);
        return $save;
    }

    public function get($id = null)
    {
        $this->db->select()->from('pickup_point');
        if ($id != null) {
            $this->db->where('pickup_point.id', $id);
        } else {
            $this->db->order_by('pickup_point.id');
        }
        $query = $this->db->get();
        if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    }

    public function remove($id, $session_id = null)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('transport_route_id', $id);
        if ($session_id !== null && $this->hasRoutePickupPointSessionId()) {
            $this->db->where('session_id', $session_id);
        }
        $this->db->delete('route_pickup_point');
        $message   = DELETE_RECORD_CONSTANT . " On transport route id " . $id;
        $action    = "Delete";
        $record_id = $id;
        $this->log($message, $record_id, $action);
        //======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /* Optional */
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
            //return $return_value;
        }
    }

    public function remove_point($id)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('pickup_point');
        $message   = DELETE_RECORD_CONSTANT . " On transport route id " . $id;
        $action    = "Delete";
        $record_id = $id;
        $this->log($message, $record_id, $action);
        //======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /* Optional */
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
            //return $return_value;
        }
    }

    public function remove_pickupfromroute($id)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('route_pickup_point');
        $message   = DELETE_RECORD_CONSTANT . " On transport route id " . $id;
        $action    = "Delete";
        $record_id = $id;
        $this->log($message, $record_id, $action);
        //======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /* Optional */
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
            //return $return_value;
        }
    }

    public function add($data)
    {
        $this->db->trans_start();
        $this->db->trans_strict(false);

        $has_session_col     = $this->hasRoutePickupPointSessionId();
        $target_session_id   = ($has_session_col && !empty($data['session_id'])) ? (int) $data['session_id'] : null;
        $row_id              = !empty($data['id']) ? (int) $data['id'] : 0;
        $insert_id           = false;
        $action              = 'Insert';
        $record_id           = 0;

        if (!$has_session_col && isset($data['session_id'])) {
            unset($data['session_id']);
        }

        if ($row_id > 0) {
            $existing = $this->db->from('route_pickup_point')->where('id', $row_id)->limit(1)->get()->row();

            if ($existing && $has_session_col && $target_session_id
                && isset($data['transport_route_id'], $data['pickup_point_id'])) {

                $save = $this->prepareRoutePickupSaveData($data);

                if ($existing->session_id === null) {
                    // Never UPDATE legacy rows when saving session fees — insert or update session copy.
                    $save['session_id'] = $target_session_id;
                    if (!isset($save['order_number']) || $save['order_number'] === '') {
                        $save['order_number'] = $existing->order_number;
                    }

                    $session_row = $this->findSessionRoutePickupRow(
                        $data['transport_route_id'],
                        $data['pickup_point_id'],
                        $target_session_id
                    );

                    if ($session_row) {
                        $this->db->where('id', $session_row->id);
                        $this->db->update('route_pickup_point', $save);
                        $insert_id = $session_row->id;
                        $action    = 'Update';
                    } else {
                        $this->db->insert('route_pickup_point', $save);
                        $insert_id = $this->db->insert_id();
                    }
                } elseif ((int) $existing->session_id === $target_session_id) {
                    $this->db->where('id', $row_id);
                    $this->db->where('session_id', $target_session_id);
                    $this->db->update('route_pickup_point', $save);
                    $insert_id = $row_id;
                    $action    = 'Update';
                }
            } else {
                $save = $this->prepareRoutePickupSaveData($data);
                $this->db->where('id', $row_id);
                $this->db->update('route_pickup_point', $save);
                $insert_id = $row_id;
                $action    = 'Update';
            }

            $record_id = $insert_id ? $insert_id : $row_id;
        } else {
            $save = $data;
            if ($has_session_col && $target_session_id) {
                $save['session_id'] = $target_session_id;
            }
            unset($save['id']);

            $session_row = null;
            if ($has_session_col && $target_session_id
                && isset($data['transport_route_id'], $data['pickup_point_id'])) {
                $session_row = $this->findSessionRoutePickupRow(
                    $data['transport_route_id'],
                    $data['pickup_point_id'],
                    $target_session_id
                );
            }

            if ($session_row) {
                // uq_route_pickup_session allows one row per route + pickup point + session.
                unset($save['order_number']);
                $this->db->where('id', $session_row->id);
                $this->db->update('route_pickup_point', $save);
                $insert_id = $session_row->id;
                $action    = 'Update';
            } else {
                $this->db->insert('route_pickup_point', $save);
                $insert_id = $this->db->insert_id();
            }
            $record_id = $insert_id;
        }

        $this->clearRoutePickupSessionCache();

        if ($insert_id) {
            $message = ($action === 'Update' ? UPDATE_RECORD_CONSTANT : INSERT_RECORD_CONSTANT)
                . ' On transport route pickup id ' . $record_id;
            $this->log($message, $record_id, $action);
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        }

        return $insert_id;
    }

    public function listpickup_point()
    {
        $this->datatables->select('*')->from('pickup_point')->searchable('name,latitude,longitude,id')
            ->orderable('name,latitude,longitude,id');
        return $this->datatables->generate('json');
    }

    public function dropdownpickup_point()
    {
        return $this->db->select('*')->from('pickup_point')->get()->result_array();
    }

    public function getpickup_pointbyid($id)
    {
        $this->db->select('*')->from('route_pickup_point')->where('route_pickup_point.id', $id);
        $getpickup_pointbyid = $this->db->get();
        return $getpickup_pointbyid->row_array();
    }

    public function route_pickup_point()
    {
        $this->db->select('rpp_legacy.transport_route_id,pickup_point.name as pickup_point,transport_route.route_title')
            ->from('route_pickup_point rpp_legacy')
            ->join('transport_route', 'rpp_legacy.transport_route_id=transport_route.id')
            ->join('pickup_point', 'pickup_point.id=rpp_legacy.pickup_point_id');

        if ($this->hasRoutePickupPointSessionId()) {
            $this->db->where('(rpp_legacy.session_id IS NULL OR rpp_legacy.session_id = ' . (int) $this->current_session . ')', null, false);
        }

        $route_pickup_point = $this->db->group_by('rpp_legacy.transport_route_id')->get();

        $result = $route_pickup_point->result_array();
        foreach ($result as $key => $value) {
            $result[$key]['point_list'] = $this->getPickupPointByRouteID($value['transport_route_id']);
        }

        return $result;
    }

    public function get_routelist()
    {
        $route_list = $this->db->select('transport_route.id as routes_id,transport_route.route_title')->from('transport_route')->get()->result_array();

        return $route_list;
    } 

    public function getPickupPointByRouteID($id)
    {
        $id = (int) $id;

        if (!$this->hasRoutePickupPointSessionId()) {
            $this->db->select('route_pickup_point.*,pickup_point.name as pickup_point,transport_route.route_title')
                ->from('route_pickup_point')
                ->join('transport_route', 'route_pickup_point.transport_route_id=transport_route.id')
                ->join('pickup_point', 'pickup_point.id=route_pickup_point.pickup_point_id')
                ->where('route_pickup_point.transport_route_id', $id)
                ->order_by('order_number', 'asc');

            return $this->db->get()->result_array();
        }

        $session_id = (int) $this->current_session;
        $sql        = "SELECT
                COALESCE(rpp_session.id, rpp_legacy.id) AS id,
                rpp_legacy.transport_route_id,
                rpp_legacy.pickup_point_id,
                COALESCE(rpp_session.fees, rpp_legacy.fees) AS fees,
                COALESCE(rpp_session.fees_type, rpp_legacy.fees_type) AS fees_type,
                COALESCE(rpp_session.destination_distance, rpp_legacy.destination_distance) AS destination_distance,
                COALESCE(rpp_session.pickup_time, rpp_legacy.pickup_time) AS pickup_time,
                COALESCE(rpp_session.order_number, rpp_legacy.order_number) AS order_number,
                COALESCE(rpp_session.session_id, rpp_legacy.session_id) AS session_id,
                pickup_point.name AS pickup_point,
                transport_route.route_title
            FROM route_pickup_point rpp_legacy
            INNER JOIN pickup_point ON pickup_point.id = rpp_legacy.pickup_point_id
            INNER JOIN transport_route ON transport_route.id = rpp_legacy.transport_route_id
            LEFT JOIN route_pickup_point rpp_session
                ON rpp_session.transport_route_id = rpp_legacy.transport_route_id
                AND rpp_session.pickup_point_id = rpp_legacy.pickup_point_id
                AND rpp_session.session_id = ?
            WHERE rpp_legacy.transport_route_id = ?
              AND rpp_legacy.session_id IS NULL
            UNION ALL
            SELECT
                rpp_only.id,
                rpp_only.transport_route_id,
                rpp_only.pickup_point_id,
                rpp_only.fees,
                rpp_only.fees_type,
                rpp_only.destination_distance,
                rpp_only.pickup_time,
                rpp_only.order_number,
                rpp_only.session_id,
                pickup_point.name AS pickup_point,
                transport_route.route_title
            FROM route_pickup_point rpp_only
            INNER JOIN pickup_point ON pickup_point.id = rpp_only.pickup_point_id
            INNER JOIN transport_route ON transport_route.id = rpp_only.transport_route_id
            WHERE rpp_only.transport_route_id = ?
              AND rpp_only.session_id = ?
              AND NOT EXISTS (
                  SELECT 1 FROM route_pickup_point rpp_l
                  WHERE rpp_l.transport_route_id = rpp_only.transport_route_id
                    AND rpp_l.pickup_point_id = rpp_only.pickup_point_id
                    AND rpp_l.session_id IS NULL
              )
            ORDER BY order_number ASC";

        return $this->db->query($sql, array($session_id, $id, $id, $session_id))->result_array();
    }

    public function routeExistsInSession($route_id, $session_id)
    {
        if ($this->hasRoutePickupPointSessionId()) {
            $q = $this->db->query(
                'SELECT 1 FROM route_pickup_point WHERE transport_route_id = ? AND (session_id = ? OR session_id IS NULL) LIMIT 1',
                array((int) $route_id, (int) $session_id)
            );

            return ($q && $q->num_rows() > 0);
        }

        $q = $this->db->query(
            'SELECT 1 FROM route_pickup_point WHERE transport_route_id = ? LIMIT 1',
            array((int) $route_id)
        );

        return ($q && $q->num_rows() > 0);
    }

    public function add_pickup_point($data)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['id']) && !empty($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('pickup_point', $data);
            $message   = UPDATE_RECORD_CONSTANT . " On  transport route id " . $data['id'];
            $action    = "Update";
            $record_id = $data['id'];
            $this->log($message, $record_id, $action);
            //======================Code End==============================

            $this->db->trans_complete(); # Completing transaction
            /* Optional */

            if ($this->db->trans_status() === false) {
                # Something went wrong.
                $this->db->trans_rollback();
                return false;
            } else {
                //return $return_value;
            }
        } else {
            $this->db->insert('pickup_point', $data);
            $insert_id = $this->db->insert_id();
            $message   = INSERT_RECORD_CONSTANT . " On transport route id " . $insert_id;
            $action    = "Insert";
            $record_id = $insert_id;
            $this->log($message, $record_id, $action);
            //======================Code End==============================

            $this->db->trans_complete(); # Completing transaction
            /* Optional */

            if ($this->db->trans_status() === false) {
                # Something went wrong.
                $this->db->trans_rollback();
                return false;
            } else {
                //return $return_value;
            }
            return $insert_id;
        }
    }

    public function reorder($id)
    {
        $sn = 1;
        foreach ($id as $key => $value) {
            $order['id']           = $value;
            $order['order_number'] = $sn;
            $this->add($order);
            $sn++;
        }
        return $this->getpickup_pointbyid($id['0']);

    } 
 
    public function getPickupPointsByvehrouteId($vehroute_id)
    {
        $vehroute_id = (int) $vehroute_id;

        if (!$this->hasRoutePickupPointSessionId()) {
            $sql = "SELECT vehicle_routes.*,transport_route.route_title,transport_route.id as `transport_route_id`,"
                . "route_pickup_point.id as `route_pickup_point_id`,route_pickup_point.fees,route_pickup_point.destination_distance,pickup_point.name "
                . "FROM `vehicle_routes` INNER JOIN transport_route on transport_route.id=vehicle_routes.route_id "
                . "INNER JOIN route_pickup_point on route_pickup_point.transport_route_id=transport_route.id "
                . "INNER JOIN pickup_point on pickup_point.id= route_pickup_point.pickup_point_id "
                . "WHERE vehicle_routes.id=" . $this->db->escape($vehroute_id)
                . " ORDER by route_pickup_point.order_number asc";

            return $this->db->query($sql)->result();
        }

        $session_id = (int) $this->current_session;
        $sql        = "SELECT vehicle_routes.*, transport_route.route_title, transport_route.id AS transport_route_id,
                COALESCE(rpp_session.id, rpp_legacy.id) AS route_pickup_point_id,
                COALESCE(rpp_session.fees, rpp_legacy.fees) AS fees,
                COALESCE(rpp_session.destination_distance, rpp_legacy.destination_distance) AS destination_distance,
                pickup_point.name,
                COALESCE(rpp_session.order_number, rpp_legacy.order_number) AS rpp_sort_order
            FROM vehicle_routes
            INNER JOIN transport_route ON transport_route.id = vehicle_routes.route_id
            INNER JOIN route_pickup_point rpp_legacy ON rpp_legacy.transport_route_id = transport_route.id AND rpp_legacy.session_id IS NULL
            INNER JOIN pickup_point ON pickup_point.id = rpp_legacy.pickup_point_id
            LEFT JOIN route_pickup_point rpp_session
                ON rpp_session.transport_route_id = rpp_legacy.transport_route_id
                AND rpp_session.pickup_point_id = rpp_legacy.pickup_point_id
                AND rpp_session.session_id = ?
            WHERE vehicle_routes.id = ?
            UNION ALL
            SELECT vehicle_routes.*, transport_route.route_title, transport_route.id AS transport_route_id,
                rpp_only.id AS route_pickup_point_id,
                rpp_only.fees,
                rpp_only.destination_distance,
                pickup_point.name,
                rpp_only.order_number AS rpp_sort_order
            FROM vehicle_routes
            INNER JOIN transport_route ON transport_route.id = vehicle_routes.route_id
            INNER JOIN route_pickup_point rpp_only ON rpp_only.transport_route_id = transport_route.id AND rpp_only.session_id = ?
            INNER JOIN pickup_point ON pickup_point.id = rpp_only.pickup_point_id
            WHERE vehicle_routes.id = ?
              AND NOT EXISTS (
                  SELECT 1 FROM route_pickup_point rpp_l
                  WHERE rpp_l.transport_route_id = rpp_only.transport_route_id
                    AND rpp_l.pickup_point_id = rpp_only.pickup_point_id
                    AND rpp_l.session_id IS NULL
              )
            ORDER BY rpp_sort_order ASC";

        return $this->db->query($sql, array($session_id, $vehroute_id, $session_id, $vehroute_id))->result();
    }

    public function reorder_pickup_point($route_id)
    {
        $rows = $this->getPickupPointByRouteID($route_id);
        $out  = array();

        foreach ($rows as $row) {
            $obj                    = (object) $row;
            $obj->pickup_point_name = $row['pickup_point'];
            $out[]                  = $obj;
        }

        return $out;
    }

}
