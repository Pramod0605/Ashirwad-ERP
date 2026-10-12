<?php

class Schoolhouse_model extends MY_model {

    public function get($id = null) {

        if (!empty($id)) {

            $query = $this->db->where("id", $id)->get("school_houses");

            return $query->row_array();
        } else {

            $query = $this->db->get("school_houses");
            return $query->result_array();
        }
    }

    public function add($data) {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data["id"])) {
            $this->db->where("id", $data["id"])->update("school_houses", $data);
            $message = UPDATE_RECORD_CONSTANT . " On  school houses id " . $data["id"];
            $action = "Update";
            $record_id = $data["id"];
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
            $this->db->insert("school_houses", $data);
            $id = $this->db->insert_id();
            $message = INSERT_RECORD_CONSTANT . " On school houses id " . $id;
            $action = "Insert";
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
    }
    
    public function getHouseInfo($id)
    {

        $this->db->select("school_houses.*");
        $this->db->select("staff.*");
        $this->db->from('school_houses');
        $this->db->join('staff', "staff.employee_id = school_houses.house_incharge", "left");
            $this->db->where('school_houses.id', $id);
            $query = $this->db->get();
            return $query->row();
    }
    
    public function getHouseInchargeInfo($eid)
    {

        $this->db->select("staff.*,staff_designation.designation,department.department_name as department, roles.id as role_id, roles.name as role");
        $this->db->from('staff');
        $this->db->join('staff_designation', "staff_designation.id = staff.designation", "left");
        $this->db->join('staff_roles', "staff_roles.staff_id = staff.id", "left");
        $this->db->join('roles', "roles.id = staff_roles.role_id", "left");
        $this->db->join('department', "department.id = staff.department", "left");
            $this->db->where('staff.employee_id', $eid);
            $query = $this->db->get();
            return $query->row_array();
    }

    public function delete($id) {
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where("id", $id)->delete("school_houses");
        $message = DELETE_RECORD_CONSTANT . " On school houses id " . $id;
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

}

?>