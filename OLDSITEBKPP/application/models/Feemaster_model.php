<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Feemaster_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
    }

    /**
     * This funtion takes id as a parameter and will fetch the record.
     * If id is not provided, then it will fetch all the records form the table.
     * @param int $id
     * @return mixed
     */
    public function get($id = null)
    {
        $this->db->select('feemasters.feetype_id,feemasters.id,feemasters.class_id,feemasters.session_id,feemasters.amount,feemasters.description,classes.class,feetype.type,feetype.feecategory_id')->from('feemasters');
        $this->db->join('classes', 'feemasters.class_id = classes.id');
        $this->db->join('feetype', 'feemasters.feetype_id = feetype.id');
        $this->db->where('feemasters.session_id', $this->current_session);
        if ($id != null) {
            $this->db->where('feemasters.id', $id);
        } else {
            $this->db->order_by('feemasters.id');
        }
        $query = $this->db->get();
        if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    }

    /**
     * This function will delete the record based on the id
     * @param $id
     */
    public function remove($id)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('feemasters');
        $message   = DELETE_RECORD_CONSTANT . " On  fee master  id " . $id;
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
             
        }
    }

    /**
     * This function will take the post data passed from the controller
     * If id is present, then it will do an update
     * else an insert. One function doing both add and edit.
     * @param $data
     */
    public function add($data)
    {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('feemasters', $data);
            $message   = UPDATE_RECORD_CONSTANT . " On  fee master  id " . $data['id'];
            $action    = "Update";
            $record_id = $data['id'];
            $this->log($message, $record_id, $action);
        } else {
            $data['session_id'] = $this->current_session;
            $this->db->insert('feemasters', $data);
            $id        = $this->db->insert_id();
            $message   = INSERT_RECORD_CONSTANT . " On fee master id " . $id;
            $action    = "Insert";
            $record_id = $id;
            $this->log($message, $record_id, $action);
        }

        //======================Code End==============================

        $this->db->trans_complete(); # Completing transaction
        /* Optional */

        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
            return $id;
        }
    }

    public function check_Exits_group($data)
    {
        $this->db->select('*');
        $this->db->from('feemasters');
        $this->db->where('session_id', $this->current_session);
        $this->db->where('feetype_id', $data['feetype_id']);
        $this->db->where('class_id', $data['class_id']);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return false;
        } else {
            return true;
        }
    }

    public function getTypeByFeecategory($type, $class_id)
    {
        $this->db->select('feemasters.id,feemasters.session_id,feemasters.amount,feemasters.description,classes.class,feetype.type')->from('feemasters');
        $this->db->join('classes', 'feemasters.class_id = classes.id');
        $this->db->join('feetype', 'feemasters.feetype_id = feetype.id');
        $this->db->where('feemasters.class_id', $class_id);
        $this->db->where('feemasters.feetype_id', $type);
        $this->db->where('feemasters.session_id', $this->current_session);
        $this->db->order_by('feemasters.id');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getByClass($class_id)
    {
        $this->db->select('feemasters.id,feemasters.session_id,feemasters.amount,feemasters.description,classes.class,feetype.type')->from('feemasters');
        $this->db->join('classes', 'feemasters.class_id = classes.id');
        $this->db->join('feetype', 'feemasters.feetype_id = feetype.id');
        $this->db->where('feemasters.class_id', $class_id);
        $this->db->where('feemasters.session_id', $this->current_session);
        $this->db->order_by('feemasters.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
//=============================== SCHOLARSHIP ================================//
    
    public function all_scheme_and_scholarship_info() {
        $this->db->select('cyc_scheme_and_scholarship.*', FALSE);
        $this->db->from('cyc_scheme_and_scholarship');
        $this->db->where('cyc_scheme_and_scholarship.ss_status', '1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function scheme_and_scholarship_info($id) {
        $this->db->select('cyc_scheme_and_scholarship.*', FALSE);
        $this->db->from('cyc_scheme_and_scholarship');
        $this->db->where('cyc_scheme_and_scholarship.ss_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
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
    
    public function all_scheme_and_scholarship_value_info($id) {
        $this->db->select('cyc_scheme_and_scholarship_value.*', FALSE);
        $this->db->select('classes.*', FALSE);
        $this->db->from('cyc_scheme_and_scholarship_value');
        $this->db->join('classes', 'classes.id = cyc_scheme_and_scholarship_value.applicable_class', 'left');
        $this->db->where('cyc_scheme_and_scholarship_value.ss_id', $id);
        $this->db->where('cyc_scheme_and_scholarship_value.ssv_status', '1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function all_scheme_and_scholarship_feetype_info($id) {
        $this->db->select('cyc_scheme_and_scholarship_feetype.*', FALSE);
        $this->db->select('fee_groups_feetype.*', FALSE);
        $this->db->select('feetype.*', FALSE);
        $this->db->from('cyc_scheme_and_scholarship_feetype');
        $this->db->join('fee_groups_feetype', 'fee_groups_feetype.id = cyc_scheme_and_scholarship_feetype.feetype_id', 'left');
        $this->db->join('feetype', 'feetype.id = fee_groups_feetype.feetype_id', 'left');
        $this->db->where('cyc_scheme_and_scholarship_feetype.ss_id', $id);
        $this->db->where('cyc_scheme_and_scholarship_feetype.ssvft_status', '1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function all_class_section_info($cls){
        $this->db->select('sections.*', FALSE);
        $this->db->select('class_sections.*', FALSE);
        $this->db->from('sections');
        $this->db->join('class_sections', 'class_sections.section_id = sections.id', 'left');
        $this->db->where('class_sections.class_id', $cls);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	
	public function all_student_info($cls, $sec, $ses){
        $this->db->select('student_session.*', FALSE);
        $this->db->select('student_session.id as ssid');
        $this->db->select('students.*', FALSE);
        $this->db->from('student_session');
        $this->db->join('students', 'students.id = student_session.student_id', 'left');
        $this->db->where('student_session.class_id', $cls);
        $this->db->where('student_session.section_id', $sec);
        $this->db->where('student_session.session_id', $ses);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	
	public function all_applied_scheme_and_scholarship_info($ssid = null, $status = null){
	    $this->db->select('cyc_scheme_and_scholarship_student.*', FALSE);
        $this->db->select('student_session.*', FALSE);
        $this->db->select('student_session.id as ssid');
        $this->db->select('students.*', FALSE);
        $this->db->select('classes.*', FALSE);
        $this->db->select('cyc_scheme_and_scholarship.*', FALSE);
        $this->db->from('cyc_scheme_and_scholarship_student');
        $this->db->join('student_session', 'student_session.id = cyc_scheme_and_scholarship_student.student_id', 'left');
        $this->db->join('students', 'students.id = student_session.student_id', 'left');
        $this->db->join('classes', 'classes.id = student_session.class_id', 'left');
        $this->db->join('cyc_scheme_and_scholarship', 'cyc_scheme_and_scholarship.ss_id = cyc_scheme_and_scholarship_student.ss_id', 'left');
        if (!empty($ssid)) {
            $this->db->where('cyc_scheme_and_scholarship_student.ss_id', $ssid);
        }
        if (!empty($status)) {
            $this->db->where('cyc_scheme_and_scholarship_student.applied_status', $status);
        }
        
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	
	
	public function student_scheme_info($ssid, $fgftid){
	    $this->db->select('cyc_scheme_and_scholarship_student.*', FALSE);
        $this->db->select('cyc_scheme_and_scholarship_feetype.*', FALSE);
        $this->db->select('cyc_scheme_and_scholarship_value.*', FALSE);
        $this->db->select('cyc_scheme_and_scholarship.*', FALSE);
        $this->db->from('cyc_scheme_and_scholarship_student');
        $this->db->join('cyc_scheme_and_scholarship_feetype', 'cyc_scheme_and_scholarship_feetype.ss_id = cyc_scheme_and_scholarship_student.ss_id', 'left');
        $this->db->join('cyc_scheme_and_scholarship_value', 'cyc_scheme_and_scholarship_value.ss_id = cyc_scheme_and_scholarship_student.ss_id', 'left');
        $this->db->join('cyc_scheme_and_scholarship', 'cyc_scheme_and_scholarship.ss_id = cyc_scheme_and_scholarship_student.ss_id', 'left');
        $this->db->where('cyc_scheme_and_scholarship_student.student_id', $ssid);
        $this->db->where('cyc_scheme_and_scholarship_feetype.feetype_id', $fgftid);
        $this->db->where('cyc_scheme_and_scholarship.ss_status', '1');
        $this->db->where('cyc_scheme_and_scholarship_value.ssv_status', '1');
        $this->db->where('cyc_scheme_and_scholarship_feetype.ssvft_status', '1');
        $this->db->where('cyc_scheme_and_scholarship_student.applied_status', '1');
        $this->db->group_by('cyc_scheme_and_scholarship_feetype.feetype_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	
	public function all_addon_fee_adjustment_info($fdate = null, $tdate = null){
	    $this->db->select('cyc_student_addon_fee.*', FALSE);
        $this->db->select('student_session.*', FALSE);
        $this->db->select('student_session.id as ssid');
        $this->db->select('students.*', FALSE);
        $this->db->select('classes.*', FALSE);
        $this->db->from('cyc_student_addon_fee');
        $this->db->join('student_session', 'student_session.id = cyc_student_addon_fee.student_id', 'left');
        $this->db->join('students', 'students.id = student_session.student_id', 'left');
        $this->db->join('classes', 'classes.id = student_session.class_id', 'left');
        if (!empty($fdate)) {
            $this->db->where('cyc_student_addon_fee.date >=', $fdate);
        }
        if (!empty($tdate)) {
            $this->db->where('cyc_student_addon_fee.date <=', $tdate);
        }
        
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
}
