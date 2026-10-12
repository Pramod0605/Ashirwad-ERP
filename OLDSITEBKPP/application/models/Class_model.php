<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Class_model extends MY_Model
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
    public function getAll($id = null)
    {
        $this->db->select()->from('classes');
        if ($id != null) {
            $this->db->where('id', $id);
        } else {
            $this->db->order_by('id');
        }
        $query = $this->db->get();
        if ($id != null) {
            $classlist = $query->row_array();
        } else {
            $classlist = $query->result_array();
        }

        return $classlist;
    }

    public function get($id = null, $classteacher = null)
    {
        $userdata = $this->customlib->getUserData();
        $role_id  = $userdata["role_id"];
        $carray   = array();
        $isTeacher= false;
        if (isset($role_id) && ($userdata["role_id"] == 2) && ($userdata["class_teacher"] == "yes") && $userdata['coordinator'] == false) {
            if ($userdata["class_teacher"] == 'yes') {
                $isTeacher = true;
                $classlist = $this->teacher_model->get_teacherrestricted_mode($userdata["id"]);
            }
        } elseif (isset($role_id) && ($userdata["role_id"] == 2) && ($userdata["class_teacher"] == "yes") && $userdata['coordinator'] == true) {
            if ($userdata["class_teacher"] == 'yes') {
                $isTeacher = true;
                $classlista = $this->teacher_model->get_teacherrestricted_mode($userdata["id"]);
                $classlistb = $this->all_coordinator_classes($userdata["id"]);
                $classlist  = array_merge($classlista, $classlistb);
            }
        } elseif($userdata['coordinator'] == true && $isTeacher == false) {
            $classlist = $this->all_coordinator_classes($userdata["id"]);
        } else {
         
            $this->db->select()->from('classes');
            if ($id != null) {
                $this->db->where('id', $id);
            } else {
                $this->db->order_by('id');
            }
            $query = $this->db->get();
            if ($id != null) {
                $classlist = $query->row_array();
            } else {
                $classlist = $query->result_array();
            }
        }

        return $classlist;
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
        $this->db->delete('classes'); //class record delete.
        $this->db->where('class_id', $id);
        $this->db->delete('class_sections'); //class_sections record delete.
        $message   = DELETE_RECORD_CONSTANT . " On classes id " . $id;
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

    /**
     * This function will take the post data passed from the controller
     * If id is present, then it will do an update
     * else an insert. One function doing both add and edit.
     * @param $data
     */
    public function add($data)
    {
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('classes', $data);
        } else {
            $this->db->insert('classes', $data);
        }
    }

    public function check_data_exists($data)
    {
        $this->db->where('class', $data);

        $query = $this->db->get('classes');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function class_exists($str)
    {
        $class = $this->security->xss_clean($str);
        $res   = $this->check_data_exists($class);

        if ($res) {
            $pre_class_id = $this->input->post('pre_class_id');
            if (isset($pre_class_id)) {
                if ($res->id == $pre_class_id) {
                    return true;
                }
            }
            $this->form_validation->set_message('class_exists', 'Record already exists');
            return false;
        } else {
            return true;
        }
    }

    public function check_classteacher_exists($class, $section, $teacher)
    {
        $this->db->where(array('class_id' => $class, 'section_id' => $section, 'session_id' => $this->current_session));

        $query = $this->db->get('class_teacher');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function class_teacher_exists($str)
    {
        $class    = $this->input->post('class');
        $section  = $this->input->post('section');
        $teachers = $this->input->post('teachers');

        $res = $this->check_classteacher_exists($class, $section, $teachers);

        if ($res) {
            $prev_class_id   = $this->input->post('prev_class_id');
            $prev_section_id = $this->input->post('prev_section_id');
            if (isset($prev_class_id) && isset($prev_section_id)) {
                if ($prev_class_id == $class && $prev_section_id == $section) {
                    return true;
                }
            }
            $this->form_validation->set_message('class_exists', 'Record already exists');
            return false;
        } else {
            return true;
        }
    }

    public function getClassTeacher()
    {
        $query = $this->db->query('SELECT class_teacher.*,classes.class,sections.section FROM `class_teacher` INNER JOIN classes on classes.id=class_teacher.class_id INNER JOIN sections on sections.id=class_teacher.section_id where class_teacher.session_id="' . $this->current_session . '" GROUP BY class_teacher.class_id , class_teacher.section_id ORDER by length(classes.class), classes.class');
        $result = $query->result_array();
        return $result;
    }

    public function get_section($id)
    {
        return $this->db->select('sections.id,sections.section')->from('class_sections')->join('sections', 'class_sections.section_id=sections.id')->where('class_id', $id)->get()->result_array();
    } 
    
    public function getClassAdditionalTeacher()
    {
        $query = $this->db->query('SELECT cyc_additional_section_teacher.*,classes.class,sections.section FROM `cyc_additional_section_teacher` INNER JOIN classes on classes.id=cyc_additional_section_teacher.class_id INNER JOIN sections on sections.id=cyc_additional_section_teacher.section_id where cyc_additional_section_teacher.session_id="' . $this->current_session . '" GROUP BY cyc_additional_section_teacher.class_id , cyc_additional_section_teacher.section_id ORDER by length(classes.class), classes.class');
        $result = $query->result_array();
        return $result;
    }
    
    public function all_class_coordinator_group() {
        $this->db->select('cyc_class_coordinator.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->from('cyc_class_coordinator');
        $this->db->join('staff', 'staff.id = cyc_class_coordinator.staff_id', 'left');
        $this->db->group_by('cyc_class_coordinator.staff_id');
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_class_coordinator_classes($sid) {
        $this->db->select('cyc_class_coordinator.*', FALSE);
        $this->db->select('classes.*', FALSE);
        $this->db->from('cyc_class_coordinator');
        $this->db->join('classes', 'classes.id = cyc_class_coordinator.class_id', 'left');
        $this->db->where('cyc_class_coordinator.staff_id', $sid);
        $this->db->group_by('cyc_class_coordinator.class_id');
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_coordinator_classes($sid) {
        $this->db->select('cyc_class_coordinator.*', FALSE);
        $this->db->select('classes.*', FALSE);
        $this->db->from('cyc_class_coordinator');
        $this->db->join('classes', 'classes.id = cyc_class_coordinator.class_id', 'left');
        $this->db->where('cyc_class_coordinator.staff_id', $sid);
        $this->db->group_by('cyc_class_coordinator.class_id');
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        return $result;
    }
    
    public function getSubjectGroupBySection($section_id, $session_id) {
        $this->db->select('subject_group_class_sections.*', FALSE);
        $this->db->select('subject_group_class_sections.id AS sgcs_id');
        $this->db->select('subject_groups.*', FALSE);
        $this->db->select('subject_groups.id AS sg_id');
        $this->db->from('subject_group_class_sections');
        $this->db->join('subject_groups', 'subject_groups.id = subject_group_class_sections.subject_group_id', 'left');
        $this->db->where('subject_group_class_sections.class_section_id', $section_id);
        $this->db->where('subject_group_class_sections.session_id', $session_id);
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        return $result;
    }
    
    public function getSubjectBysubjectGroupId($subject_group_id, $session_id) {
        $this->db->select('subject_group_subjects.*', FALSE);
        $this->db->select('subjects.*', FALSE);
        $this->db->from('subject_group_subjects');
        $this->db->join('subjects', 'subjects.id = subject_group_subjects.subject_id', 'left');
        $this->db->where('subject_group_subjects.subject_group_id', $subject_group_id);
        $this->db->where('subject_group_subjects.session_id', $session_id);
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        return $result;
    }
    
    public function getGroupList() {
        $this->db->select('cyc_classes_grouping.*', FALSE);
        $this->db->from('cyc_classes_grouping');
        $this->db->group_by('cyc_classes_grouping.group_id');
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        return $result;
    }
    
    public function getGroupDetailsList($grp_id) {
        $this->db->select('cyc_classes_grouping.*', FALSE);
        $this->db->select('classes.*', FALSE);
        $this->db->select('sections.*', FALSE);
        $this->db->select('subject_groups.*', FALSE);
        $this->db->select('subjects.*', FALSE);
        $this->db->select('subject_groups.name as grp_name');
        $this->db->select('subjects.name as sub_name');
        $this->db->from('cyc_classes_grouping');
        $this->db->join('classes', 'classes.id = cyc_classes_grouping.class_id', 'left');
        $this->db->join('sections', 'sections.id = cyc_classes_grouping.section_id', 'left');
        $this->db->join('subject_groups', 'subject_groups.id = cyc_classes_grouping.subject_group_id', 'left');
        $this->db->join('subjects', 'subjects.id = cyc_classes_grouping.subject_id', 'left');
        $this->db->where('cyc_classes_grouping.group_id', $grp_id);
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        return $result;
    }
}
