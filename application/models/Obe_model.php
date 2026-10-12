<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Obe_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
    }
    
    public function all_feetype_info($ses) {
        $this->db->select('fee_groups_feetype.*', FALSE);
        $this->db->select('fee_groups_feetype.id as fgftid');
        $this->db->select('feetype.*', FALSE);
        $this->db->from('fee_groups_feetype');
        $this->db->join('feetype', 'feetype.id = fee_groups_feetype.feetype_id', 'left');
        $this->db->where('fee_groups_feetype.session_id', $ses);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}