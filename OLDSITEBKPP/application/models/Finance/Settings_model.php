<?php 
Class Settings_model extends CI_Model
{
    public function getTagNameByID($id)
    {
        $q = $this->db->get_where('cyc_tags', array('id'=>$id));
        if ($q->num_rows() > 0) {
            return $q->row()->title;
        }
        return 'No Tag';
    }
    
    public function allFeeType($id = null) {
        $this->db->select('feetype.*', FALSE);
        $this->db->from('feetype');
        if ($id != null) {
            $this->db->where('feetype.id', $id);		
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        return $result;
    }
    
    public function allIncomeType($id = null) {
        $this->db->select('income_head.*', FALSE);
        $this->db->from('income_head');
        if ($id != null) {
            $this->db->where('income_head.id', $id);		
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        return $result;
    }
    
    public function allExpType($id = null) {
        $this->db->select('expense_head.*', FALSE);
        $this->db->from('expense_head');
        if ($id != null) {
            $this->db->where('expense_head.id', $id);		
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        return $result;
    }
}
?>