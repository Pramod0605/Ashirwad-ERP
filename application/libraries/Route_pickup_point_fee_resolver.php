<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Resolves transport pickup fees: session-specific row when available, else legacy (session_id IS NULL).
 * Pre-schema: behaves as legacy-only (rpp_legacy.fees) when session_id column is absent.
 */
class Route_pickup_point_fee_resolver
{
    /** @var bool|null */
    private $has_session_column = null;

    /** @var array */
    private $base_fee_cache = array();

    /**
     * @return bool
     */
    public function hasSessionColumn()
    {
        if ($this->has_session_column === null) {
            $CI = &get_instance();
            $CI->load->database();
            $this->has_session_column = $CI->db->field_exists('session_id', 'route_pickup_point');
        }

        return $this->has_session_column;
    }

    /**
     * SQL fragment for effective annual/monthly base fee (no alias).
     *
     * @param string $legacyAlias
     * @param string $sessionAlias
     * @return string
     */
    public function getEffectiveFeesBaseSql($legacyAlias = 'rpp_legacy', $sessionAlias = 'rpp_session')
    {
        if ($this->hasSessionColumn()) {
            return "COALESCE({$sessionAlias}.fees, {$legacyAlias}.fees)";
        }

        return "{$legacyAlias}.fees";
    }

    /**
     * @param string $legacyAlias
     * @param string $sessionAlias
     * @param string $alias
     * @return string
     */
    public function getEffectiveFeesSqlExpression($legacyAlias = 'rpp_legacy', $sessionAlias = 'rpp_session', $alias = 'effective_route_fees')
    {
        return $this->getEffectiveFeesBaseSql($legacyAlias, $sessionAlias) . ' AS ' . $alias;
    }

    /**
     * Join legacy anchor + student_session + optional session override row.
     *
     * @param string $legacyAlias
     * @param string $sessionAlias
     * @param string $studentSessionAlias Alias for student_session in query (ss or student_session)
     * @param bool   $includeStudentSessionJoin False when student_session is already joined under $studentSessionAlias
     * @return string
     */
    public function getEffectiveRoutePickupJoinSql(
        $legacyAlias = 'rpp_legacy',
        $sessionAlias = 'rpp_session',
        $studentSessionAlias = 'ss',
        $includeStudentSessionJoin = true
    ) {
        $joins = " INNER JOIN route_pickup_point {$legacyAlias} ON {$legacyAlias}.id = student_transport_fees.route_pickup_point_id ";

        if ($includeStudentSessionJoin) {
            $joins .= " INNER JOIN student_session {$studentSessionAlias} ON {$studentSessionAlias}.id = student_transport_fees.student_session_id ";
        }

        if ($this->hasSessionColumn()) {
            $joins .= " LEFT JOIN route_pickup_point {$sessionAlias} ON {$sessionAlias}.transport_route_id = {$legacyAlias}.transport_route_id "
                . " AND {$sessionAlias}.pickup_point_id = {$legacyAlias}.pickup_point_id "
                . " AND {$sessionAlias}.session_id = {$studentSessionAlias}.session_id ";
        }

        return $joins;
    }

    /**
     * Apply effective route_pickup_point joins on active query builder (from student_transport_fees).
     *
     * @param bool   $includeStudentSessionJoin
     * @param string $studentSessionAlias
     */
    public function applyQueryBuilderJoins($includeStudentSessionJoin = true, $studentSessionAlias = 'ss')
    {
        $CI = &get_instance();

        $CI->db->join(
            'route_pickup_point rpp_legacy',
            'rpp_legacy.id = student_transport_fees.route_pickup_point_id',
            'inner'
        );

        if ($includeStudentSessionJoin) {
            $CI->db->join(
                'student_session ' . $studentSessionAlias,
                $studentSessionAlias . '.id = student_transport_fees.student_session_id',
                'inner'
            );
        }

        if ($this->hasSessionColumn()) {
            $CI->db->join(
                'route_pickup_point rpp_session',
                'rpp_session.transport_route_id = rpp_legacy.transport_route_id'
                . ' AND rpp_session.pickup_point_id = rpp_legacy.pickup_point_id'
                . ' AND rpp_session.session_id = ' . $studentSessionAlias . '.session_id',
                'left'
            );
        }
    }

    /**
     * Monthly/yearly transport amount CASE (same logic as legacy, on effective base fee).
     *
     * @param string $alias
     * @param string $legacyAlias
     * @param string $sessionAlias
     * @return string
     */
    public function getTransportMonthlyAmountExpression($alias = 'fees', $legacyAlias = 'rpp_legacy', $sessionAlias = 'rpp_session')
    {
        $base = $this->getEffectiveFeesBaseSql($legacyAlias, $sessionAlias);

        return "CASE "
            . "WHEN LOWER(transport_feemaster.month)='yearly' THEN {$base} "
            . "WHEN ("
            . "(SELECT COUNT(*) "
            . "FROM student_transport_fees stf_yearly "
            . "JOIN transport_feemaster tf_yearly ON tf_yearly.id = stf_yearly.transport_feemaster_id "
            . "WHERE stf_yearly.student_session_id = student_transport_fees.student_session_id "
            . "AND stf_yearly.route_pickup_point_id = student_transport_fees.route_pickup_point_id "
            . "AND LOWER(tf_yearly.month)='yearly') "
            . "= 0 "
            . ") AND (SELECT COUNT(*) FROM student_transport_fees stf_count "
            . "WHERE stf_count.student_session_id = student_transport_fees.student_session_id "
            . "AND stf_count.route_pickup_point_id = student_transport_fees.route_pickup_point_id) = 12 "
            . "AND student_transport_fees.transport_feemaster_id = "
            . "(SELECT MAX(stf_last.transport_feemaster_id) FROM student_transport_fees stf_last "
            . "WHERE stf_last.student_session_id = student_transport_fees.student_session_id "
            . "AND stf_last.route_pickup_point_id = student_transport_fees.route_pickup_point_id) "
            . "THEN ROUND({$base} - (ROUND({$base} / 10, 2) * 11), 2) "
            . "ELSE ROUND({$base} / 10, 2) "
            . "END AS {$alias}";
    }

    /**
     * @param int $route_pickup_point_id
     * @param int $student_session_id
     * @return float
     */
    public function resolveEffectiveBaseFee($route_pickup_point_id, $student_session_id)
    {
        $route_pickup_point_id = (int) $route_pickup_point_id;
        $student_session_id    = (int) $student_session_id;
        $cache_key             = $route_pickup_point_id . ':' . $student_session_id;

        if (isset($this->base_fee_cache[$cache_key])) {
            return $this->base_fee_cache[$cache_key];
        }

        $CI = &get_instance();
        $CI->load->database();

        $legacy = $CI->db->select('id, transport_route_id, pickup_point_id, fees')
            ->from('route_pickup_point')
            ->where('id', $route_pickup_point_id)
            ->limit(1)
            ->get()
            ->row();

        if (!$legacy) {
            $this->base_fee_cache[$cache_key] = 0.0;
            return 0.0;
        }

        if (!$this->hasSessionColumn() || $student_session_id <= 0) {
            $this->base_fee_cache[$cache_key] = (float) $legacy->fees;
            return $this->base_fee_cache[$cache_key];
        }

        $session_row = $CI->db->select('session_id')
            ->from('student_session')
            ->where('id', $student_session_id)
            ->limit(1)
            ->get()
            ->row();

        if (!$session_row || empty($session_row->session_id)) {
            $this->base_fee_cache[$cache_key] = (float) $legacy->fees;
            return $this->base_fee_cache[$cache_key];
        }

        $override = $CI->db->select('fees')
            ->from('route_pickup_point')
            ->where('transport_route_id', $legacy->transport_route_id)
            ->where('pickup_point_id', $legacy->pickup_point_id)
            ->where('session_id', $session_row->session_id)
            ->limit(1)
            ->get()
            ->row();

        $this->base_fee_cache[$cache_key] = (float) ($override ? $override->fees : $legacy->fees);
        return $this->base_fee_cache[$cache_key];
    }
}
