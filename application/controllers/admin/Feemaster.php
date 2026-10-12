<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Feemaster extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->sch_setting_detail = $this->setting_model->getSetting();
    }

    public function index()
    {

        $this->session->set_userdata('top_menu', 'Fees Collection');
        $this->session->set_userdata('sub_menu', 'admin/feemaster');
		
        $data['title']        = $this->lang->line('fees_master_list');
        $feegroup             = $this->feegroup_model->get();
        $data['feegroupList'] = $feegroup;
        $feetype              = $this->feetype_model->get();
        $data['feetypeList']  = $feetype;
        $feegroup_result       = $this->feesessiongroup_model->getFeesByGroup(null,0);
        $data['feemasterList'] = $feegroup_result;
        
        $class                   = $this->class_model->get();
        $data['classlist']       = $class;

        $this->form_validation->set_rules('feetype_id', $this->lang->line('fee_type'), 'required');
        $this->form_validation->set_rules('amount', $this->lang->line('amount'), 'required|numeric');

        $this->form_validation->set_rules(
            'fee_groups_id', $this->lang->line('fee_group'), array(
                'required',
                array('check_exists', array($this->feesessiongroup_model, 'valid_check_exists')),
            )
        );

        if (isset($_POST['account_type']) && $_POST['account_type'] == 'fix') {
            $this->form_validation->set_rules('fine_amount', $this->lang->line('fix_amount'), 'required|numeric');
            $this->form_validation->set_rules('due_date', $this->lang->line('due_date'), 'trim|required|xss_clean');

        } elseif (isset($_POST['account_type']) && ($_POST['account_type'] == 'percentage')) {
            $this->form_validation->set_rules('fine_percentage', $this->lang->line('percentage'), 'required|numeric');
            $this->form_validation->set_rules('fine_amount', $this->lang->line('fix_amount'), 'required|numeric');
            $this->form_validation->set_rules('due_date', $this->lang->line('due_date'), 'trim|required|xss_clean');
        }

        if ($this->form_validation->run() == false) {

        } else {
            $colType = $this->input->post('collection_type', TRUE);
            $colAmnt = $this->input->post('amount', TRUE);
            $colDate = $this->customlib->dateFormatToYYYYMMDD($this->input->post('due_date', TRUE));
            
            if($this->input->post('fine_amount')){
                $fine_amount    =   convertCurrencyFormatToBaseAmount($this->input->post('fine_amount'));
            }else{
                $fine_amount    = '';
            }
            
            $classes = $this->input->post('class_id', TRUE);
            
            if (!empty($classes)) {
            
            foreach ($classes as $class) {
            if ($colType > 0) {
            $insert_array = array(
                'fee_groups_id'   => $this->input->post('fee_groups_id'),
                'feetype_id'      => $this->input->post('feetype_id'),
                'class_id'        => $class,
                'amount'          => 0,
                'due_date'        => $this->customlib->dateFormatToYYYYMMDD($this->input->post('due_date')),
                'session_id'      => $this->setting_model->getCurrentSession(),
                'fine_type'       => $this->input->post('account_type'),
                'fine_percentage' => $this->input->post('fine_percentage'),
                'fine_amount'     => 0,
                'collection_type' => $this->input->post('collection_type'),
            );
            } else {
            $insert_array = array(
                'fee_groups_id'   => $this->input->post('fee_groups_id'),
                'feetype_id'      => $this->input->post('feetype_id'),
                'class_id'        => $class,
                'amount'          => convertCurrencyFormatToBaseAmount($this->input->post('amount')),
                'due_date'        => $this->customlib->dateFormatToYYYYMMDD($this->input->post('due_date')),
                'session_id'      => $this->setting_model->getCurrentSession(),
                'fine_type'       => $this->input->post('account_type'),
                'fine_percentage' => $this->input->post('fine_percentage'),
                'fine_amount'     => $fine_amount,
                'collection_type' => $this->input->post('collection_type'),
            );    
            }

            $feegroup_result = $this->feesessiongroup_model->add($insert_array);
            
            if ($colType > 0) {
                $feeAmnt = $colAmnt / $colType;
                for ($x = 1; $x <= $colType; $x++) {
                    if ($x == 1) {
                        $ncolDate = $colDate;
                    } else {
                        $monthDif = (((12/$colType)*$x) - (12/$colType));
                        $ncolDate = date('Y-m-d', strtotime('+'.$monthDif.' months', strtotime($colDate)));
                    }
                    $insert_f_array = array(
                        'parent_id'       => $feegroup_result,
                        'fee_groups_id'   => $this->input->post('fee_groups_id'),
                        'feetype_id'      => $this->input->post('feetype_id'),
                        'class_id'        => $class,
                        'amount'          => convertCurrencyFormatToBaseAmount($feeAmnt),
                        'due_date'        => $ncolDate,
                        'session_id'      => $this->setting_model->getCurrentSession(),
                        'fine_type'       => $this->input->post('account_type'),
                        'fine_percentage' => $this->input->post('fine_percentage'),
                        'fine_amount'     => $fine_amount,
                        'collection_type' => $this->input->post('collection_type'),
                    );
                    $feegroup_result = $this->feesessiongroup_model->add($insert_f_array);
                }
            }
            
            }
            } else {
            if ($colType > 0) {
            $insert_array = array(
                'fee_groups_id'   => $this->input->post('fee_groups_id'),
                'feetype_id'      => $this->input->post('feetype_id'),
                'amount'          => 0,
                'due_date'        => $this->customlib->dateFormatToYYYYMMDD($this->input->post('due_date')),
                'session_id'      => $this->setting_model->getCurrentSession(),
                'fine_type'       => $this->input->post('account_type'),
                'fine_percentage' => $this->input->post('fine_percentage'),
                'fine_amount'     => 0,
                'collection_type' => $this->input->post('collection_type'),
            );
            } else {
            $insert_array = array(
                'fee_groups_id'   => $this->input->post('fee_groups_id'),
                'feetype_id'      => $this->input->post('feetype_id'),
                'amount'          => convertCurrencyFormatToBaseAmount($this->input->post('amount')),
                'due_date'        => $this->customlib->dateFormatToYYYYMMDD($this->input->post('due_date')),
                'session_id'      => $this->setting_model->getCurrentSession(),
                'fine_type'       => $this->input->post('account_type'),
                'fine_percentage' => $this->input->post('fine_percentage'),
                'fine_amount'     => $fine_amount,
                'collection_type' => $this->input->post('collection_type'),
            );    
            }

            $id = $this->feesessiongroup_model->add($insert_array);
            
            if ($colType > 0) {
                $feeAmnt = $colAmnt / $colType;
                for ($x = 1; $x <= $colType; $x++) {
                    if ($x == 1) {
                        $ncolDate = $colDate;
                    } else {
                        $monthDif = (((12/$colType)*$x) - (12/$colType));
                        $ncolDate = date('Y-m-d', strtotime('+'.$monthDif.' months', strtotime($colDate)));
                    }
                    $insert_f_array = array(
                        'parent_id'       => $id,
                        'fee_groups_id'   => $this->input->post('fee_groups_id'),
                        'feetype_id'      => $this->input->post('feetype_id'),
                        'amount'          => convertCurrencyFormatToBaseAmount($feeAmnt),
                        'due_date'        => $ncolDate,
                        'session_id'      => $this->setting_model->getCurrentSession(),
                        'fine_type'       => $this->input->post('account_type'),
                        'fine_percentage' => $this->input->post('fine_percentage'),
                        'fine_amount'     => $fine_amount,
                        'collection_type' => $this->input->post('collection_type'),
                    );
                    $this->feesessiongroup_model->add($insert_f_array);
                }
            }
            
            }
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
            redirect('admin/feemaster/index');
        }

        $this->load->view('layout/header', $data);
        $this->load->view('admin/feemaster/feemasterList', $data);
        $this->load->view('layout/footer', $data);
    }

    public function delete($id)
    {
        if (!$this->rbac->hasPrivilege('fees_master', 'can_delete')) {
            access_denied();
        }
        $data['title'] = $this->lang->line('fees_master_list');
        $this->feegrouptype_model->remove($id);
        redirect('admin/feemaster/index');
    }

    public function deletegrp($id)
    {
        $data['title'] = $this->lang->line('fees_master_list');
        $this->feesessiongroup_model->remove($id);
        redirect('admin/feemaster');
    }

    public function edit($id)
    {
        if (!$this->rbac->hasPrivilege('fees_master', 'can_edit')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Fees Collection');
        $this->session->set_userdata('sub_menu', 'admin/feemaster');
        $data['id']            = $id;
        $feegroup_type         = $this->feegrouptype_model->get($id);
        $data['feegroup_type'] = $feegroup_type;
        $feegroup              = $this->feegroup_model->get();
        $data['feegroupList']  = $feegroup;
        $feetype               = $this->feetype_model->get();
        $data['feetypeList']   = $feetype;
        $feegroup_result       = $this->feesessiongroup_model->getFeesByGroup(null,0);
        
        $class                   = $this->class_model->get();
        $data['classlist']       = $class;
        
        $data['feemasterList'] = $feegroup_result;
        $this->form_validation->set_rules('feetype_id', $this->lang->line('fee_type'), 'required');
        $this->form_validation->set_rules('amount', $this->lang->line('amount'), 'required|numeric');
        $this->form_validation->set_rules(
            'fee_groups_id', $this->lang->line('fee_group'), array(
                'required',
                array('check_exists', array($this->feesessiongroup_model, 'valid_check_exists')),
            )
        );

        if (isset($_POST['account_type']) && $_POST['account_type'] == 'fix') {
            $this->form_validation->set_rules('fine_amount', $this->lang->line('fix_amount'), 'required|numeric');
            $this->form_validation->set_rules('due_date', $this->lang->line('due_date'), 'trim|required|xss_clean');
        } elseif (isset($_POST['account_type']) && ($_POST['account_type'] == 'percentage')) {
            $this->form_validation->set_rules('fine_percentage', $this->lang->line('percentage'), 'required|numeric');
            $this->form_validation->set_rules('fine_amount', $this->lang->line('fix_amount'), 'required|numeric');
            $this->form_validation->set_rules('due_date', $this->lang->line('due_date'), 'trim|required|xss_clean');
        }
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('admin/feemaster/feemasterEdit', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $colType = $this->input->post('collection_type', TRUE);
            if($this->input->post('fine_amount')){
                $fine_amount    =   convertCurrencyFormatToBaseAmount($this->input->post('fine_amount'));
            }else{
                $fine_amount    = '';
            }
            
            $insert_array = array(
                'id'              => $this->input->post('id'),
                'feetype_id'      => $this->input->post('feetype_id'),
                'class_id'      => $this->input->post('class_id'),
                'due_date'        => $this->customlib->dateFormatToYYYYMMDD($this->input->post('due_date')),
                'amount'          => convertCurrencyFormatToBaseAmount($this->input->post('amount')),
                'fine_type'       => $this->input->post('account_type'),
                'fine_percentage' => $this->input->post('fine_percentage'),
                'fine_amount'     => $fine_amount,
                'collection_type' => $this->input->post('collection_type'),
            );

            $feegroup_result = $this->feegrouptype_model->add($insert_array);
            
            // if ($colType > 0) {
            //     for ($x = 1; $x <= $colType; $x++) {
            //         $insert_array = array(
            //             'parent_id'       => $feegroup_result,
            //             'id'              => $this->input->post('id'),
            //             'feetype_id'      => $this->input->post('feetype_id'),
            //             'class_id'        => $this->input->post('class_id'),
            //             'due_date'        => $this->customlib->dateFormatToYYYYMMDD($this->input->post('due_date')),
            //             'amount'          => convertCurrencyFormatToBaseAmount($this->input->post('amount')),
            //             'fine_type'       => $this->input->post('account_type'),
            //             'fine_percentage' => $this->input->post('fine_percentage'),
            //             'fine_amount'     => $fine_amount,
            //             'collection_type' => $this->input->post('collection_type'),
            //         );
            //         $feegroup_result = $this->feesessiongroup_model->add($insert_array);
            //     }
            // }

            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('update_message') . '</div>');
            redirect('admin/feemaster/index');
        }
    }

    public function assign($id)
    {
        if (!$this->rbac->hasPrivilege('fees_group_assign', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Fees Collection');
        $this->session->set_userdata('sub_menu', 'admin/feemaster');
        $data['id']              = $id;
        $data['title']           = $this->lang->line('student_fees');
        $class                   = $this->class_model->get();
        $data['classlist']       = $class;
        $feegroup_result         = $this->feesessiongroup_model->getFeesByGroup($id);
        $data['feegroupList']    = $feegroup_result;
        $data['adm_auto_insert'] = $this->sch_setting_detail->adm_auto_insert;
        $data['sch_setting']     = $this->sch_setting_detail;
        $genderList            = $this->customlib->getGender();
        $data['genderList']    = $genderList;
        $RTEstatusList         = $this->customlib->getRteStatus();
        $data['RTEstatusList'] = $RTEstatusList;

        $category             = $this->category_model->get();
        $data['categorylist'] = $category;

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $data['category_id'] = $this->input->post('category_id');
            $data['gender']      = $this->input->post('gender');
            $data['rte_status']  = $this->input->post('rte');
            $data['class_id']    = $this->input->post('class_id');
            $data['section_id']  = $this->input->post('section_id');

            $resultlist         = $this->studentfeemaster_model->searchAssignFeeByClassSection($data['class_id'], $data['section_id'], $id, $data['category_id'], $data['gender'], $data['rte_status']);
            $data['resultlist'] = $resultlist;
        }

        $this->load->view('layout/header', $data);
        $this->load->view('admin/feemaster/assign', $data);
        $this->load->view('layout/footer', $data);
    }
//========================== SCHEME & SCHOLARSHIP ============================//
    
    public function scheme_and_scholarship() {
		$data['title'] = 'Scheme / Scholarship';
		
		$class                  = $this->class_model->get();
		$data['classes']        = $class;
		$data['feeTypes']       = $this->feemaster_model->all_feetype_info($this->setting_model->getCurrentSession());
		$data['scholarships']   = $this->feemaster_model->all_scheme_and_scholarship_info();
		
		$this->load->view('layout/header', $data);
		$this->load->view('admin/feemaster/scheme_scholarship/scheme_and_scholarship', $data);
        $this->load->view('layout/footer', $data); 
	}
	
	public function save_scheme_and_scholarship() {                    
        $ss_name            = $this->input->post('ss_name', TRUE);
        $ss_type            = $this->input->post('ss_type', TRUE);
        $ss_applicable_on   = $this->input->post('ss_applicable_on', TRUE);
        $ss_status          = $this->input->post('ss_status', TRUE);
        
        $data = array(
            "ss_name"           => $ss_name,
            "ss_type"           => $ss_type,
            "ss_applicable_on"  => $ss_applicable_on,
            "ss_status"         => $ss_status,
        );
        $this->db->insert('cyc_scheme_and_scholarship', $data);
        $response['status']  = 'success';
        $response['message'] = 'SAVED SUFFESSFULLY';
        $this->output->set_output(json_encode($response));
    }
    
    public function update_scheme_and_scholarship() {                    
        $ss_id              = $this->input->post('ss_id', TRUE);
        $ss_name            = $this->input->post('ss_name', TRUE);
        $ss_type            = $this->input->post('ss_type', TRUE);
        $ss_applicable_on   = $this->input->post('ss_applicable_on', TRUE);
        $ss_status          = $this->input->post('ss_status', TRUE);
        
        $data = array(
            "ss_name"           => $ss_name,
            "ss_type"           => $ss_type,
            "ss_status"         => $ss_status,
        );
        $this->db->where('ss_id', $ss_id);
		$this->db->update('cyc_scheme_and_scholarship', $data);
		
        $response['status']  = 'success';
        $response['message'] = 'SAVED SUFFESSFULLY';
        $this->output->set_output(json_encode($response));
    }
    
    public function get_scheme_and_scholarship_info($id) {
        $scheme_and_scholarship_info = $this->feemaster_model->scheme_and_scholarship_info($id);
        $response = $scheme_and_scholarship_info;
        $this->output->set_output(json_encode($response));
    }
    
    public function save_scheme_and_scholarship_value() {                    
        $ss_id                  = $this->input->post('ss_id', TRUE);
        $fee_concession_type    = $this->input->post('fee_concession_type', TRUE);
        $fee_concession         = $this->input->post('fee_concession', TRUE);
        $all_class              = $this->input->post('all_class', TRUE);
        $class_id               = $this->input->post('class_id', TRUE);
        
        if (!empty($all_class)) {
        
            $data = array(
                "ss_id"                 => $ss_id,
                "fee_concession_type"   => $fee_concession_type,
                "fee_concession"        => $fee_concession,
            );
            $this->db->insert('cyc_scheme_and_scholarship_value', $data);
        
        } else {
            foreach ($class_id as $cid) {
            $data = array(
                "ss_id"                 => $ss_id,
                "fee_concession_type"   => $fee_concession_type,
                "fee_concession"        => $fee_concession,
                "applicable_class"      => $cid
            );
            $this->db->insert('cyc_scheme_and_scholarship_value', $data);
            }
            
        }
        $response['status']  = 'success';
        $response['message'] = 'SAVED SUFFESSFULLY';
        $this->output->set_output(json_encode($response));
    }
    
    public function delete_scheme_and_scholarship_value($id) {
        $this->db->query("UPDATE cyc_scheme_and_scholarship_value SET ssv_status = '0' WHERE ssv_id = '".$id."' ");
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('update_message') . '</div>');
        redirect('admin/feemaster/scheme_and_scholarship');
    }
    
    public function save_scheme_and_scholarship_value_feetype() {                    
        $ss_id                  = $this->input->post('ss_id', TRUE);
        $fee_type               = $this->input->post('fee_type', TRUE);
        
        foreach ($fee_type as $ft) {
            $data = array(
                "ss_id"                 => $ss_id,
                "feetype_id"            => $ft,
            );
            $this->db->insert('cyc_scheme_and_scholarship_feetype', $data);
        }
        $response['status']  = 'success';
        $response['message'] = 'SAVED SUFFESSFULLY';
        $this->output->set_output(json_encode($response));
    }
    
    public function delete_scheme_and_scholarship_feetype($id) {
        $this->db->query("UPDATE cyc_scheme_and_scholarship_feetype SET ssvft_status = '0' WHERE ssvft_id = '".$id."' ");
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('update_message') . '</div>');
        redirect('admin/feemaster/scheme_and_scholarship');
    }
    
    public function apply_scheme_scholarship() {
		$data['title'] = 'Apply Scheme / Scholarship';
		
		$this->session->set_userdata('top_menu', 'Fees Collection');
        $this->session->set_userdata('sub_menu', 'admin/feemaster/apply_scheme_scholarship');
        
		$class                      = $this->class_model->get();
		$data['classes']            = $class;
		$data['scholarships']       = $this->feemaster_model->all_scheme_and_scholarship_info();
		
		if ($this->input->post("search")) {
		    $data['ss_id']              = $this->input->post("ss_id");
		    $data['applied_status']     = $this->input->post("applied_status");
		    $data['applied_students']   = $this->feemaster_model->all_applied_scheme_and_scholarship_info($data['ss_id'], $data['applied_status']);
		} else {
		    $data['applied_students']   = $this->feemaster_model->all_applied_scheme_and_scholarship_info();
		}
		
		$this->load->view('layout/header', $data);
		$this->load->view('admin/feemaster/scheme_scholarship/apply_scheme_scholarship', $data);
        $this->load->view('layout/footer', $data); 
	}
	
	public function getClassSection($id) {
        $allClsSecInfo = $this->feemaster_model->all_class_section_info($id);
        echo json_encode($allClsSecInfo);
    }
    
    public function getClassSectionStudent($cid, $sid) {
        $students = $this->feemaster_model->all_student_info($cid, $sid, $this->setting_model->getCurrentSession());
        echo json_encode($students);
    }
    
    public function save_applied_scheme_scholarship() {                    
        $ss_id                  = $this->input->post('ss_id', TRUE);
        $student_id             = $this->input->post('student_id', TRUE);
        $userdata               = $this->customlib->getUserData();
        $staffid                = $userdata['id'];
        $data = array(
            "ss_id"             => $ss_id,
            "student_id"        => $student_id,
            "applied_on"        => date("Y-m-d"),
            "applied_by"        => $staffid,
        );
        $this->db->insert('cyc_scheme_and_scholarship_student', $data);
            
        $response['status']  = 'success';
        $response['message'] = 'SAVED SUFFESSFULLY';
        $this->output->set_output(json_encode($response));
    }
    
    public function approve_stu_ss($id) {
        $this->db->query("UPDATE cyc_scheme_and_scholarship_student SET applied_status = '1' WHERE sss_id = '".$id."' AND applied_status = '0' ");
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('update_message') . '</div>');
        redirect('admin/feemaster/apply_scheme_scholarship');
    }
    
    public function reject_stu_ss($id) {
        $this->db->query("UPDATE cyc_scheme_and_scholarship_student SET applied_status = '2' WHERE sss_id = '".$id."' ");
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('update_message') . '</div>');
        redirect('admin/feemaster/apply_scheme_scholarship');
    }
    
    public function positive_fee_adjustment() {
		$data['title'] = 'Positive Adjustment';
		
		$this->session->set_userdata('top_menu', 'Fees Collection');
        $this->session->set_userdata('sub_menu', 'admin/feemaster/apply_scheme_scholarship');
        
		$class                      = $this->class_model->get();
		$data['classes']            = $class;
		$data['fdate']              = '';
        $data['tdate']              = '';
        $data['systemFees']         = $this->db->query("SELECT * FROM fee_groups WHERE is_system = '1' ")->result();
		
		if ($this->input->post("search")) {
		    $data['fdate']              = $this->input->post("fdate");
		    $data['tdate']              = $this->input->post("tdate");
		    $data['applied_students']   = $this->feemaster_model->all_addon_fee_adjustment_info($data['fdate'], $data['tdate']);
		} else {
		    $data['applied_students']   = $this->feemaster_model->all_addon_fee_adjustment_info();
		}
		
		$this->load->view('layout/header', $data);
		$this->load->view('admin/feemaster/scheme_scholarship/positive_fee_adjustment', $data);
        $this->load->view('layout/footer', $data); 
	}
	
	public function save_positive_fee_adjustment() {                 
	    $fee_name               = $this->input->post('fee_name', TRUE);
        $amount                 = $this->input->post('amount', TRUE);
        $student_id             = $this->input->post('student_id', TRUE);
        $remark                 = $this->input->post('remark', TRUE);
        $userdata               = $this->customlib->getUserData();
        $staffid                = $userdata['id'];
        
        $fee_group_exists = $this->feegroup_model->checkGroupExistsByName('Addon Fee');
        $fee_type_exists  = $this->feetype_model->checkFeetypeByName('Other Addon Fee');
        $fee_group_id     = 0;
        $fee_type_id      = 0;
        if (!$fee_group_exists) {
            $this->db->insert('fee_groups', array('name' => $fee_name, 'is_system' => 1));
            $fee_group_id = $this->db->insert_id();
        } else {
            $fee_group_id = $fee_group_exists->id;
        }

        if (!$fee_type_exists) {
            $this->db->insert('feetype', array('type' => 'Other Addon Fee', 'code' => 'Other Addon Fee', 'is_system' => 1));
            $fee_type_id = $this->db->insert_id();
        } else {
            $fee_type_id = $fee_type_exists->id;
        }
        $to_be_insert = array(
            'session_id'           => $this->setting_model->getCurrentSession(),
            'fee_groups_id'        => $fee_group_id,
            'feetype_id'           => $fee_type_id,
            'fee_session_group_id' => 0,
            'due_date'             => $due_date,
        );
        $parentid = $this->feesessiongroup_model->group_exists($to_be_insert['fee_groups_id']);

        $to_be_insert['fee_session_group_id'] = $parentid;

        $session_group_exists = $this->feesessiongroup_model->checkExists($to_be_insert);
        if (!$session_group_exists) {
            $this->db->insert('fee_groups_feetype', $to_be_insert);
        } else {
            $this->db->where('id', $session_group_exists);
            $this->db->update('fee_groups_feetype', $to_be_insert);
        }
        
        
        
        $data = array(
            "student_id"        => $student_id,
            "amount"            => $amount,
            "remark"            => $remark,
            "date"              => date("Y-m-d"),
            "entry_by"          => $staffid,
        );
        $this->db->insert('cyc_student_addon_fee', $data);
        
        $datas = array(
            "is_system"             => 1,
            "student_session_id"    => $student_id,
            "fee_session_group_id"  => $parentid,
            "amount"                => $amount,
        );
        $this->db->insert('student_fees_master', $datas);
            
        $response['status']  = 'success';
        $response['message'] = 'SAVED SUFFESSFULLY';
        $this->output->set_output(json_encode($response));
    }
}
