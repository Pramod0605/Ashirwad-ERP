<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Classes extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!$this->rbac->hasPrivilege('class', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'classes/index');
        $data['title']      = 'Add Class';
        $data['title_list'] = 'Class List';

        $this->form_validation->set_rules(
            'class', $this->lang->line('class'), array(
                'required',
                array('class_exists', array($this->class_model, 'class_exists')),
            )
        );
        $this->form_validation->set_rules('sections[]', $this->lang->line('section'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {

        } else {
            $class       = $this->input->post('class');
            $class_array = array(
                'class' => $this->input->post('class'),
                'is_hedu_program' => $this->input->post('is_hedu_program'),
            );
            $sections = $this->input->post('sections');
            $this->classsection_model->add($class_array, $sections);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
            redirect('classes');
        }
        $vehicle_result       = $this->section_model->get();
        $data['vehiclelist']  = $vehicle_result;
        $vehroute_result      = $this->classsection_model->getByID();
        $data['vehroutelist'] = $vehroute_result;
        $this->load->view('layout/header', $data);
        $this->load->view('class/classList', $data);
        $this->load->view('layout/footer', $data);
    }

    public function delete($id)
    {
        if (!$this->rbac->hasPrivilege('class', 'can_delete')) {
            access_denied();
        }
        $data['title'] = 'Fees Master List';
        $this->class_model->remove($id);

        $student_delete=$this->student_model->getUndefinedStudent();
        if(!empty($student_delete)){
            $delte_student_array=array();
            foreach ($student_delete as $student_key => $student_value) {

                $delte_student_array[]=$student_value->id;
            }
            $this->student_model->bulkdelete($delte_student_array);
        }

     
        redirect('classes');
    }

    public function edit($id)
    {
        if (!$this->rbac->hasPrivilege('class', 'can_edit')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'classes/index');
        $data['title']      = 'Edit Class';
        $data['id']         = $id;
        $vehroute           = $this->classsection_model->getByID($id);
        $data['vehroute']   = $vehroute;
        $data['title_list'] = 'Fees Master List';

        $this->form_validation->set_rules(
            'class', $this->lang->line('class'), array(
                'required',
                array('class_exists', array($this->class_model, 'class_exists')),
            )
        );
        $this->form_validation->set_rules('sections[]', $this->lang->line('sections'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {
            $vehicle_result       = $this->section_model->get();
            $data['vehiclelist']  = $vehicle_result;
            $routeList            = $this->route_model->get();
            $data['routelist']    = $routeList;
            $vehroute_result      = $this->classsection_model->getByID();
            $data['vehroutelist'] = $vehroute_result;
            $this->load->view('layout/header', $data);
            $this->load->view('class/classEdit', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $sections      = $this->input->post('sections');
            $prev_sections = $this->input->post('prev_sections');
            $route_id      = $this->input->post('route_id');
            $class_id      = $this->input->post('pre_class_id');
            if (!isset($prev_sections)) {
                $prev_sections = array();
            }
            $add_result    = array_diff($sections, $prev_sections);
            $delete_result = array_diff($prev_sections, $sections);
            if (!empty($add_result)) {
                $vehicle_batch_array = array();
                $class_array         = array(
                    'id'    => $class_id,
                    'class' => $this->input->post('class'),
                    'is_hedu_program' => $this->input->post('is_hedu_program'),
                );
                foreach ($add_result as $vec_add_key => $vec_add_value) {
                    $vehicle_batch_array[] = $vec_add_value;
                }
                $this->classsection_model->add($class_array, $vehicle_batch_array);
            } else {
                $class_array = array(
                    'id'    => $class_id,
                    'class' => $this->input->post('class'),
                );
                $this->classsection_model->update($class_array);
            }

            if (!empty($delete_result)) {
                $classsection_delete_array = array();
                foreach ($delete_result as $vec_delete_key => $vec_delete_value) {
                    $classsection_delete_array[] = $vec_delete_value;
                }

                $this->classsection_model->remove($class_id, $classsection_delete_array);
            }

            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('update_message') . '</div>');
            redirect('classes/index');
        }
    }

    public function get_section($id)
    {
        $data['sections'] = $this->class_model->get_section($id);
        $this->load->view('class/_section_list', $data);
    }
    
    public function getSubjectGroupBySection() {
        $section_id = $this->input->get('section_id');
        $data     = $this->class_model->getSubjectGroupBySection($section_id, $this->setting_model->getCurrentSession());
        echo json_encode($data);
    }
    
    public function getSubjectBysubjectGroupId() {
        $subject_group_id   = $this->input->get('subject_group_id');
        $data               = $this->class_model->getSubjectBysubjectGroupId($subject_group_id, $this->setting_model->getCurrentSession());
        echo json_encode($data);
    }
    
    public function grouping() {
        if (!$this->rbac->hasPrivilege('class', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'classes/grouping');
        $data['title']      = 'Grouping';
        $data['title_list'] = 'Grouping List';

        $data['classlist']       = $this->class_model->getAll();
        
        $this->load->view('layout/header', $data);
        $this->load->view('class/grouping', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function saveGrouping() {
        $jsonData       = $this->input->post('data');
        $data           = json_decode($jsonData, true);
        $groupingData   = [];
        
        $count          = count($data['class_sections']);
        $uniqueId       = $this->generateUniqueId();
        for ($i = 0; $i < $count; $i++) {
            $groupingData[] = array(
                'group_id'          => $uniqueId,
                'class_id'          => $data['classes'][$i],
                'section_id'        => !empty($data['sections'][$i]) ? $data['sections'][$i] : null,
                'class_section_id'  => !empty($data['class_sections'][$i]) ? $data['class_sections'][$i] : null,
                'subject_group_id'  => !empty($data['subject_groups'][$i]) ? $data['subject_groups'][$i] : null,
                'subject_id'        => !empty($data['subjects'][$i]) ? $data['subjects'][$i] : null,
                'session_id'        => $this->setting_model->getCurrentSession()
            );
        }
        if (!empty($groupingData)) {
            $this->db->insert_batch('cyc_classes_grouping', $groupingData);
        }
        echo json_encode(['status' => 'success']);
    }

    function generateUniqueId() {
        $prefix     = "GRP";
        $maxDigits  = 10;
        $uniqueId   = null;
        
        do {
            $randomNumber   = mt_rand(1, str_repeat('9', $maxDigits)); // Maximum 10 digits
            $uniqueId       = $prefix . str_pad($randomNumber, $maxDigits, '0', STR_PAD_LEFT);
        } while (!$this->isUniqueId($uniqueId));
        return $uniqueId;
    }
    function isUniqueId($uniqueId) {
        $query = $this->db->get_where('cyc_classes_grouping', ['group_id' => $uniqueId]);
        return $query->num_rows() === 0;
    }

    public function deleteGroup($cgid) {
        $gid = $this->db->query("SELECT * FROM `cyc_classes_grouping` WHERE cg_id = '".$cgid."' ")->row();
        $this->db->query("DELETE FROM `cyc_classes_grouping` WHERE group_id = '".$gid->group_id."' ");
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
        redirect('classes/grouping');
    }

}
