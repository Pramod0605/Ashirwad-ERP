<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Vehicle_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
    }

    public function get($id = null)
    {
        $this->db->select()->from('vehicles');
        if ($id != null) {
            $this->db->where('vehicles.id', $id);
        } else {
            $this->db->order_by('vehicles.id','desc');
        }
        $query = $this->db->get();
        if ($id != null) {
            return $query->row();
        } else {
            return $query->result_array();
        }
    }

    public function remove($id)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('vehicles');
        
        $this->db->where('vehicle_id', $id);
        $this->db->delete('vehicle_routes');
        
        $message   = DELETE_RECORD_CONSTANT . " On vehicles id " . $id;
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
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('vehicles', $data);
            $message   = UPDATE_RECORD_CONSTANT . " On  vehicles id " . $data['id'];
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
            $this->db->insert('vehicles', $data);
            $insert_id = $this->db->insert_id();
            $message   = INSERT_RECORD_CONSTANT . " On vehicles id " . $insert_id;
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

    public function vehicleListByarray($array)
    {
        $this->db->select('*');
        $this->db->from('vehicles');
        $this->db->where_in('vehicles.id', $array);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function vehicleRouteInfo($id)
    {
        $this->db->select('vehicle_routes.*');
        $this->db->select('transport_route.*');
        $this->db->from('vehicle_routes');
        $this->db->join('transport_route', 'transport_route.id = vehicle_routes.route_id');
        $this->db->where('vehicle_routes.vehicle_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function routeStudentInfo($route, $ses)
    {
        $this->db->select('student_session.*');
        $this->db->select('student_session.id as ssid');
        $this->db->select('students.*');
        $this->db->from('student_session');
        $this->db->join('students', 'students.id = student_session.student_id', 'left');
        $this->db->where('student_session.vehroute_id', $route);
        $this->db->where('student_session.session_id', $ses);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function routeStudentFeeInfo($ssid, $fdate, $edate)
    {
        $this->db->select('student_transport_fees.*');
        $this->db->select('transport_feemaster.*');
        $this->db->select('route_pickup_point.*');
        $this->db->from('student_transport_fees');
        $this->db->join('transport_feemaster', 'transport_feemaster.id = student_transport_fees.transport_feemaster_id', 'left');
        $this->db->join('route_pickup_point', 'route_pickup_point.id = student_transport_fees.route_pickup_point_id', 'left');
        $this->db->where('student_transport_fees.student_session_id', $ssid);
        $this->db->where('transport_feemaster.due_date >=', $fdate);
        $this->db->where('transport_feemaster.due_date <=', $edate);
        $query = $this->db->get();
        return $query->result();
    }

}
