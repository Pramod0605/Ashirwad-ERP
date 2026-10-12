<?php

class Department extends Admin_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper('file');
        $this->config->load("payroll");
        $this->load->model('department_model');
        $this->load->model('staff_model');
    }

    function department() {

        $this->session->set_userdata('top_menu', 'HR');
        $this->session->set_userdata('sub_menu', 'admin/department/department');
        
        $data['staff']  = $this->db->where("is_active", '1')->get('staff')->result();
        
        $departmenttypeid = $this->input->post("departmenttypeid");
        $DepartmentTypes = $this->department_model->getDepartmentType();
        $data["departmenttype"] = $DepartmentTypes;
        $this->form_validation->set_rules(
                'type', $this->lang->line('name'), array('required',
            array('check_exists', array($this->department_model, 'valid_department'))
                )
        );
        $data["title"] = $this->lang->line('add_department');
        if ($this->form_validation->run()) {

            $type = $this->input->post("type");
            
            $head = $this->input->post("department_head");
            if (empty($head)) {
                $head = null;
            }
            
            $departmenttypeid = $this->input->post("departmenttypeid");
            $status = $this->input->post("status");
            if (empty($departmenttypeid)) {

                if (!$this->rbac->hasPrivilege('department', 'can_add')) {
                    access_denied();
                }
            } else {

                if (!$this->rbac->hasPrivilege('department', 'can_edit')) {
                    access_denied();
                }
            }
            $data = array(
                'department_name'   => $type,
                'department_head'   => $head,
                'is_active'         => 'yes'
            );
            if (!empty($departmenttypeid)) {
                $data['id']         = $departmenttypeid;
                $insert_id          = $this->department_model->addDepartmentType($data);
                $hdepinfo           = $this->db->where('linked_department_id', $departmenttypeid)->get('cyc_hedu_department')->row();
                $linked_dep_id      = $departmenttypeid;
            } else {
                $insert_id          = $this->department_model->addDepartmentType($data);
                $hdepinfo           = null;
                $linked_dep_id      = $insert_id;
            }
            
            $params = array(
                'linked_department_id'  => $linked_dep_id,
                'department_name'       => $type,
                'department_head'       => $head,
            );
            if ($hdepinfo) {
                $this->db->where('department_id', $hdepinfo->department_id);
                $this->db->update('cyc_hedu_department', $params);
            } else {
                $this->db->insert('cyc_hedu_department', $params);
            }
            
            $this->session->set_flashdata('msg', '<div class="alert alert-success">' . $this->lang->line('success_message') . '</div>');
            redirect("admin/department/department");
        } else {

            $this->load->view("layout/header");
            $this->load->view("admin/staff/departmentType", $data);
            $this->load->view("layout/footer");
        }
    }

    function departmentedit($id) {
        
        $data['staff']  = $this->db->where("is_active", '1')->get('staff')->result();
        $result = $this->department_model->getDepartmentType($id);
        
        $data["result"] = $result;
        $data["title"] = $this->lang->line('edit_department');
        $departmentTypes = $this->department_model->getDepartmentType();
        $data["departmenttype"] = $departmentTypes;
        $this->load->view("layout/header");
        $this->load->view("admin/staff/departmentType", $data);
        $this->load->view("layout/footer");
    }

    function departmentdelete($id) {

        $this->department_model->deleteDepartment($id);
        redirect('admin/department/department');
    }

}

?>