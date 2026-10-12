<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model{
	
	public function add_postion($postarray) { 
		return	$this->db->insert('positions',$postarray);
	} 
    public function checkgps_auth($v_id) { 
        $this->db->where('registration_number', $v_id);
        $query = $this->db->get("vehicles");
		if ($query->num_rows() >= 1) {
			return $query->result_array();
		} 
	} 
	
	public function staffgps_auth($s_id) { 
        $this->db->where('employee_id', $s_id);
        $query = $this->db->get("staff");
		if ($query->num_rows() >= 1) {
			return $query->result_array();
		} 
	} 


} 