<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cbseexam_term_model extends MY_Model {

	public function add($data) {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['id']) && !empty($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('cbse_terms', $data);
            $message = UPDATE_RECORD_CONSTANT . " On cbse terms id " . $data['id'];
            $action = "Update";
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
            $this->db->insert('cbse_terms', $data);
            $insert_id = $this->db->insert_id();
            $message = INSERT_RECORD_CONSTANT . " On cbse terms id " . $insert_id;
            $action = "Insert";
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
    
    public function add_group($data) {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['exam_group_id']) && !empty($data['exam_group_id'])) {
            $this->db->where('exam_group_id', $data['exam_group_id']);
            $this->db->update('cyc_advance_exam_group', $data);
            $message = UPDATE_RECORD_CONSTANT . " On cbse terms group id " . $data['exam_group_id'];
            $action = "Update";
            $record_id = $data['exam_group_id'];
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
            $this->db->insert('cyc_advance_exam_group', $data);
            $insert_id = $this->db->insert_id();
            $message = INSERT_RECORD_CONSTANT . " On cbse terms group id " . $insert_id;
            $action = "Insert";
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

    public function add_class_section($data){
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        
        $this->db->insert('cbse_term_class_sections',$data);
        
        $insert_id = $this->db->insert_id();
        $message = INSERT_RECORD_CONSTANT . " On cbse term class sections id " . $insert_id;
        $action = "Insert";
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
            return $insert_id;
        }        
    }

    public function delete_class_section($id){
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('cbse_term_id',$id);
        $this->db->delete('cbse_term_class_sections');
        
        $message = DELETE_RECORD_CONSTANT . " On cbse term class sections id " . $id;
        $action = "Delete";
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
            return $id;
        }

    }

    public function gettermlist()
    {
         $this->datatables
            ->select('cbse_terms.*')
            ->searchable('cbse_terms.name,cbse_terms.term_code,cbse_terms.description')
            ->orderable('cbse_terms.name,cbse_terms.term_code,cbse_terms.description')         
            ->sort('cbse_terms.id', 'desc')
            ->from('cbse_terms');
        return $this->datatables->generate('json');
    }

    public function get($id = null) {
        $this->db->select('cbse_terms.*')->from('cbse_terms');
        if ($id != null) {
            $this->db->where('cbse_terms.id', $id);
        } else {
            $this->db->order_by('cbse_terms.id');
        }
        $query = $this->db->get();
        if ($id != null) {
            return $query->row();
        } else {
            return $query->result();
        }
    }

    public function _delete_getClassSectionByTermId($term_id){
       $cbse_term_class_section= $this->db->select('class_section_id')->from('cbse_term_class_sections')->where('cbse_term_id',$term_id)->get()->result_array();
       foreach ($cbse_term_class_section as $key => $value) {
           $cbse_term_class_sections[] = $value['class_section_id'];
       }
       return $cbse_term_class_sections;
    }

    public function remove($id)
    {    	
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id',$id);
        $this->db->delete('cbse_terms');
        $message = DELETE_RECORD_CONSTANT . " On cbse terms id " . $id;
        $action = "Delete";
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
    
    public function remove_group($id)
    {    	
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('exam_group_id',$id);
        $this->db->delete('cyc_advance_exam_group');
        $message = DELETE_RECORD_CONSTANT . " On cbse terms group id " . $id;
        $action = "Delete";
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
    
    public function check_check_duplicate_code($term_code, $id)
    {
        $this->db->where('term_code', $term_code);
        $this->db->where('id !=', $id);
        $query = $this->db->get('cbse_terms');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function all_exam_term_info(){
	    $this->db->select('cbse_terms.*', FALSE);
        $this->db->from('cbse_terms');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	
    public function all_exam_group_info(){
	    $this->db->select('cyc_advance_exam_group.*', FALSE);
        $this->db->select('cbse_terms.*', FALSE);
        $this->db->from('cyc_advance_exam_group');
        $this->db->join('cbse_terms', 'cbse_terms.id = cyc_advance_exam_group.group_term', 'left');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	
	public function exam_group_info($id){
	    $this->db->select('cyc_advance_exam_group.*', FALSE);
        $this->db->select('cbse_terms.*', FALSE);
        $this->db->from('cyc_advance_exam_group');
        $this->db->join('cbse_terms', 'cbse_terms.id = cyc_advance_exam_group.group_term', 'left');
        $this->db->where('cyc_advance_exam_group.exam_group_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
	}

}