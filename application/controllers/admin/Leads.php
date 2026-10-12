<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Leads extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('leads_model', 'leads_model');
    }

    public function index()
    {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/index');
        $data['title']      = 'Leads';
        $all_leads_info     = $this->leads_model->all_leads_info();
        $data['leads_info'] = $all_leads_info;
            
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/all_leads', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function followup_status($id = null, $type = null) {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/campaign');
        $data['title']              = 'Campaign';
        $all_followup_status_info   = $this->leads_model->all_followup_status_info();
        $data['followup_status']    = $all_followup_status_info;
        
        
        $all_followup_content_info  = $this->leads_model->all_followup_content_info();
        $data['followup_content']   = $all_followup_content_info;
        
        
        
        $stafflist              = $this->staff_model->get();
        $data["stafflist"]      = $stafflist;
        $data["type"]           = $type;
        
        if ($data["type"] == 'content') {
            $data["fwc_id"]             = $id;
            $data['followUpContentInfo']= $this->leads_model->followup_content_info($id);
        } else {
            $data["fws_id"]             = $id;
            $data['followUpStatusInfo'] = $this->leads_model->followup_status_info($id);
        }
        
        if ($this->input->post('submit')) {
            $fws_id         = $this->input->post('fws_id', TRUE);
            $title          = $this->input->post('title', TRUE);
            $data = array(
                'title'     => $this->input->post('title'),
            );
            if (!empty($title)) {
                if (empty($fws_id)) {
                    $this->db->insert('cyc_leads_followup_status', $data);
                } else {
                    $this->db->where('fws_id', $fws_id);
                    $this->db->update('cyc_leads_followup_status', $data);
                }
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
                redirect('admin/leads/followup_status');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-left">Mandatory data is missing</div>');
                redirect('admin/leads/followup_status');
            }
            
        }
        
        if ($this->input->post('submit_content')) {
            $fwc_id         = $this->input->post('fwc_id', TRUE);
            $content        = $this->input->post('content', TRUE);
            $data = array(
                'content'   => $this->input->post('content'),
            );
            if (!empty($content)) {
                if (empty($fwc_id)) {
                    $this->db->insert('cyc_leads_followup_content', $data);
                } else {
                    $this->db->where('fwc_id', $fwc_id);
                    $this->db->update('cyc_leads_followup_content', $data);
                }
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
                redirect('admin/leads/followup_status');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-left">Mandatory data is missing</div>');
                redirect('admin/leads/followup_status');
            }
            
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/followup_status', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function promoters($id = null) {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/campaign_type');
        $data['title']              = 'Promoters';
        $all_promoters_info         = $this->leads_model->all_promoters_info();
        $data['all_promoters']      = $all_promoters_info;
        $data['promoter']           = $this->leads_model->all_promoters_info($id);
        
        $data["cp_id"]              = $id;
        
        if ($this->input->post('submit')) {
            $cp_id                  = $this->input->post('cp_id', TRUE);
            $promoter_name          = $this->input->post('promoter_name', TRUE);
            $promoter_institute     = $this->input->post('promoter_institute', TRUE);
            $promoter_designation   = $this->input->post('promoter_designation', TRUE);
            $promoter_contact_no    = $this->input->post('promoter_contact_no', TRUE);
            $promoter_alternate_contact_no  = $this->input->post('promoter_alternate_contact_no', TRUE);
            $promoter_address       = $this->input->post('promoter_address', TRUE);
            $promoter_commission    = $this->input->post('promoter_commission', TRUE);
            $promoter_status        = $this->input->post('promoter_status', TRUE);
            
            if (empty($promoter_status)) {
                $promoter_status  = 1;
            }
            $sstatus        = $this->db->query("SELECT * FROM `cyc_leads_promoters` WHERE promoter_name LIKE '".$promoter_name."' AND promoter_contact_no = '".$promoter_contact_no."'  ")->row();
            $data = array(
                'promoter_name'                 => $this->input->post('promoter_name'),
                'promoter_institute'            => $this->input->post('promoter_institute'),
                'promoter_designation'          => $this->input->post('promoter_designation'),
                'promoter_contact_no'           => $this->input->post('promoter_contact_no'),
                'promoter_alternate_contact_no' => $this->input->post('promoter_alternate_contact_no'),
                'promoter_address'              => $this->input->post('promoter_address'),
                'promoter_status'               => $this->input->post('promoter_status'),
                'promoter_commission'           => $this->input->post('promoter_commission'),
            );
            if (!empty($promoter_name) && !empty($promoter_institute) && !empty($promoter_designation) && !empty($promoter_contact_no) && !empty($promoter_address) && empty($sstatus)) {
                if (empty($cp_id)) {
                    $this->db->insert('cyc_leads_promoters', $data);
                    $insert_id = $this->db->insert_id();
                    
                } else {
                    $this->db->where('cp_id', $cp_id);
                    $this->db->update('cyc_leads_promoters', $data);
                }
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
                redirect('admin/leads/promoters');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-left">Mandatory data is missing</div>');
                redirect('admin/leads/promoters');
            }
            
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/promoters', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function campaign_type($id = null) {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/campaign_type');
        $data['title']              = 'Campaign Type';
        $all_campaign_type_info     = $this->leads_model->all_campaign_type_info();
        $data['campaign_type_info'] = $all_campaign_type_info;
        $data['campTypeInfo']       = $this->leads_model->all_campaign_type_info($id);
        
        
        
        $stafflist          = $this->staff_model->getAll();
        $data["stafflist"]  = $stafflist;
        $data["ct_id"]      = $id;
        
        if ($this->input->post('submit')) {
            $ct_id          = $this->input->post('c_id', TRUE);
            $ct_title       = $this->input->post('ct_title', TRUE);
            $ct_description = $this->input->post('ct_description', TRUE);
            $ct_status      = $this->input->post('ct_status', TRUE);
            
            if (empty($ct_status)) {
                $ct_status  = 1;
            }
            $sstatus        = $this->db->query("SELECT * FROM `cyc_campaign_type` WHERE ct_title LIKE '".$ct_title."'  ")->row();
            $data = array(
                'ct_title'          => $this->input->post('ct_title'),
                'ct_description'    => $this->input->post('ct_description'),
                'ct_status'         => $this->input->post('ct_status'),
            );
            if (!empty($ct_title) && !empty($ct_description) && empty($sstatus)) {
                if (empty($ct_id)) {
                    $this->db->insert('cyc_campaign_type', $data);
                    $insert_id = $this->db->insert_id();
                    
                } else {
                    $this->db->where('ct_id', $ct_id);
                    $this->db->update('cyc_campaign_type', $data);
                }
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
                redirect('admin/leads/campaign_type');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-left">Mandatory data is missing</div>');
                redirect('admin/leads/campaign_type');
            }
            
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/campaign_type', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function campaign($id = null) {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/campaign');
        $data['title']          = 'Campaign';
        $all_campaign_info      = $this->leads_model->all_campaign_info();
        $data['campaign_info']  = $all_campaign_info;
        $data['campInfo']       = $this->leads_model->campaign_info($id);
        
        $all_campaign_type_info     = $this->leads_model->all_campaign_type_info();
        $data['campaign_type_info'] = $all_campaign_type_info;
        
        $all_promoters_info         = $this->leads_model->all_promoters_info();
        $data['all_promoters']      = $all_promoters_info;
        
        $all_sources                = $this->leads_model->all_sources_info();
        $data['all_sources']        = $all_sources;
        
        
        $stafflist              = $this->staff_model->getAll();
        $data["stafflist"]      = $stafflist;
        $data["c_id"]           = $id;
        
        if ($this->input->post('submit')) {
            $c_id           = $this->input->post('c_id', TRUE);
            $ct_id          = $this->input->post('ct_id', TRUE);
            $cp_id          = $this->input->post('cp_id', TRUE);
            $c_title        = $this->input->post('c_title', TRUE);
            $c_description  = $this->input->post('c_description', TRUE);
            $c_counsellors  = $this->input->post('c_counsellor', TRUE);
            $c_counsellors2 = $this->input->post('c_counsellor_l2', TRUE);
            $sstatus        = $this->db->query("SELECT * FROM `cyc_campaign` WHERE c_title LIKE '".$c_title."'  ")->row();
            $data = array(
                'ct_id'         => $this->input->post('ct_id'),
                'cp_id'         => $this->input->post('cp_id'),
                'c_title'       => $this->input->post('c_title'),
                'c_description' => $this->input->post('c_description'),
                'c_date'        => date("Y-m-d"),
                'c_manager'     => $this->input->post('c_manager'),
                'c_status'      => $this->input->post('c_status'),
                'default_share_message' => $this->input->post('default_share_message'),
            );
            if (!empty($ct_id) && !empty($c_title) && !empty($c_description) && empty($sstatus)) {
                if (empty($c_id)) {
                    $this->db->insert('cyc_campaign', $data);
                    $insert_id = $this->db->insert_id();
                    foreach ($c_counsellors as $c_counsellor) {
                    $lsinfo = $this->db->query("SELECT lc_id as lcid FROM cyc_leads_counsellor WHERE c_id = '".$insert_id."' AND staff_id = '".$c_counsellor."' ")->row();
                    $cdata = array(
                        'c_id'      => $insert_id,
                        'staff_id'  => $c_counsellor,
                        'level'     => 1,
                    );
                    if (empty($lsinfo->lcid)) {
                        $this->db->insert('cyc_leads_counsellor', $cdata);
                    }
                    }
                    
                    foreach ($c_counsellors2 as $c_counsellor2) {
                    $lsinfo = $this->db->query("SELECT lc_id as lcid FROM cyc_leads_counsellor WHERE c_id = '".$insert_id."' AND staff_id = '".$c_counsellor2."' ")->row();
                    $cdata = array(
                        'c_id'      => $insert_id,
                        'staff_id'  => $c_counsellor2,
                        'level'     => 2,
                    );
                    if (empty($lsinfo->lcid)) {
                        $this->db->insert('cyc_leads_counsellor', $cdata);
                    }
                    }
                    
                } else {
                    $this->db->where('c_id', $c_id);
                    $this->db->update('cyc_campaign', $data);
                    
                    foreach ($c_counsellors as $c_counsellor) {
                    $lsinfo = $this->db->query("SELECT lc_id as lcid FROM cyc_leads_counsellor WHERE c_id = '".$c_id."' AND staff_id = '".$c_counsellor."' ")->row();
                    $cdata = array(
                        'c_id'      => $c_id,
                        'staff_id'  => $c_counsellor,
                        'level'     => 1,
                    );
                    if (empty($lsinfo->lcid)) {
                        $this->db->insert('cyc_leads_counsellor', $cdata);
                    }
                    }
                    
                    foreach ($c_counsellors2 as $c_counsellor2) {
                    $lsinfo = $this->db->query("SELECT lc_id as lcid FROM cyc_leads_counsellor WHERE c_id = '".$c_id."' AND staff_id = '".$c_counsellor2."' ")->row();
                    $cdata = array(
                        'c_id'      => $c_id,
                        'staff_id'  => $c_counsellor2,
                        'level'     => 2,
                    );
                    if (empty($lsinfo->lcid)) {
                        $this->db->insert('cyc_leads_counsellor', $cdata);
                    }
                    }
                }
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
                redirect('admin/leads/campaign');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-left">Mandatory data is missing</div>');
                redirect('admin/leads/campaign');
            }
            
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/campaign', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function save_campaign_lead() {
        $data                   = [];
        $data['title']          = 'Add Leads';
        $l_id                   = $this->input->post('l_id');
        $c_id                   = $this->input->post('c_id');
        $l_name                 = $this->input->post('l_name');
        $l_father_name          = $this->input->post('l_father_name');
        $l_mother_name          = $this->input->post('l_mother_name');
        $l_class                = $this->input->post('l_class');
        $l_qualification        = $this->input->post('l_qualification');
        $l_address              = $this->input->post('l_address');
        $l_location             = $this->input->post('l_location');
        $l_phone_number         = $this->input->post('l_phone_number');
        $l_alternative_phone    = $this->input->post('l_alternative_phone');
        $l_email                = $this->input->post('l_email');
        $l_source               = $this->input->post('l_source');
        $l_resources            = $this->input->post('l_resources');
        
        if (empty($l_id)) {
        $leadData = array(
            'c_id'                  => $this->input->post('c_id'),
			'l_name'                => $this->input->post('l_name'),
			'l_gender'              => $this->input->post('l_gender'),
			'l_dob'                 => $this->input->post('l_dob'),
			'l_caste'               => $this->input->post('l_caste'),
			'l_sub_caste'           => $this->input->post('l_sub_caste'),
			'l_aadhar_no'           => $this->input->post('l_aadhar_no'),
			'l_blood_group'         => $this->input->post('l_blood_group'),
			'l_religion'            => $this->input->post('l_religion'),
			'l_mother_tongue'       => $this->input->post('l_mother_tongue'),
			'l_father_name'         => $this->input->post('l_father_name'),
			'l_father_phone'        => $this->input->post('l_father_phone'),
			'l_father_qualification'=> $this->input->post('l_father_qualification'),
			'l_mother_name'         => $this->input->post('l_mother_name'),
			'l_mother_phone'        => $this->input->post('l_mother_phone'),
			'l_mother_qualification'=> $this->input->post('l_mother_qualification'),
			'l_guradian_name'       => $this->input->post('l_guradian_name'),
			'l_guardian_phone'      => $this->input->post('l_guardian_phone'),
			'l_class'               => $this->input->post('l_class'),
			'l_enrolled_course'     => $this->input->post('l_enrolled_course'),
			'l_elective_subjects'   => $this->input->post('l_elective_subjects'),
			'l_address'             => $this->input->post('l_address'),
			'l_location'            => $this->input->post('l_location'),
			'l_phone_number'        => $this->input->post('l_phone_number'),
			'l_alternative_phone'   => $this->input->post('l_alternative_phone'),
			'l_emergency_contact_no'=> $this->input->post('l_emergency_contact_no'),
			'l_email'               => $this->input->post('l_email'),
			'l_source'              => $this->input->post('l_source'),
			'l_resources'           => $this->input->post('l_resources'),
            'lead_lat'              => $this->input->post('lat'),
            'lead_lng'              => $this->input->post('lng'),
		);
		if (!empty($c_id) && !empty($l_name) && !empty($l_address) && !empty($l_class) && !empty($l_phone_number)) {
            $this->db->insert('cyc_leads', $leadData);
            
            $smsinfo = $this->db->query("SELECT * FROM `notification_setting` WHERE type = 'add_lead' ")->row();
            $this->load->helper('general');
            //sendSms($l_phone_number, $smsinfo->template_id, $smsinfo->template);
                        
            $data['status']     = 'success';
            $data['message']    = 'Successfully saved!';
            echo json_encode($data);
        }
        else {
            $data['status']     = 'error';
            $data['message']    = 'Mandatory data is missing!';
            echo json_encode($data);
        }
        } else {
        $leadData = array(
			'l_name'                => $this->input->post('l_name'),
			'l_gender'              => $this->input->post('l_gender'),
			'l_dob'                 => $this->input->post('l_dob'),
			'l_caste'               => $this->input->post('l_caste'),
			'l_sub_caste'           => $this->input->post('l_sub_caste'),
			'l_aadhar_no'           => $this->input->post('l_aadhar_no'),
			'l_blood_group'         => $this->input->post('l_blood_group'),
			'l_religion'            => $this->input->post('l_religion'),
			'l_mother_tongue'       => $this->input->post('l_mother_tongue'),
			'l_father_name'         => $this->input->post('l_father_name'),
			'l_father_phone'        => $this->input->post('l_father_phone'),
			'l_father_qualification'=> $this->input->post('l_father_qualification'),
			'l_mother_name'         => $this->input->post('l_mother_name'),
			'l_mother_phone'        => $this->input->post('l_mother_phone'),
			'l_mother_qualification'=> $this->input->post('l_mother_qualification'),
			'l_guradian_name'       => $this->input->post('l_guradian_name'),
			'l_guardian_phone'      => $this->input->post('l_guardian_phone'),
			'l_class'               => $this->input->post('l_class'),
			'l_enrolled_course'     => $this->input->post('l_enrolled_course'),
			'l_elective_subjects'   => $this->input->post('l_elective_subjects'),
			'l_address'             => $this->input->post('l_address'),
			'l_location'            => $this->input->post('l_location'),
			'l_phone_number'        => $this->input->post('l_phone_number'),
			'l_alternative_phone'   => $this->input->post('l_alternative_phone'),
			'l_emergency_contact_no'=> $this->input->post('l_emergency_contact_no'),
			'l_email'               => $this->input->post('l_email'),
			'l_source'              => $this->input->post('l_source'),
			'l_resources'           => $this->input->post('l_resources'),
            'lead_lat'              => $this->input->post('lat'),
            'lead_lng'              => $this->input->post('lng'),
		);
		if (!empty($l_id) && !empty($l_name) && !empty($l_address) && !empty($l_class) && !empty($l_phone_number)) {
            $this->db->insert('cyc_leads', $leadData);
            
            $smsinfo = $this->db->query("SELECT * FROM `notification_setting` WHERE type = 'add_lead' ")->row();
            $this->load->helper('general');
            //sendSms($l_phone_number, $smsinfo->template_id, $smsinfo->template);
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully saved!';
            echo json_encode($data);
        }
        else {
            $data['status']     = 'error';
            $data['message']    = 'Mandatory data is missing!';
            echo json_encode($data);
        }
        }
    }
    
    public function view_campaign($id) {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/campaign');
        $data['title']          = 'Campaign Info';
        $data["c_id"]           = $id;
        $data['campInfo']       = $this->leads_model->campaign_info($id);
        $data['leadsInfo']      = $this->leads_model->all_leads_by_camp_info($id);
        $data['followUpInfo']   = $this->leads_model->all_followup_by_camp_info($id);
        $data['counsellorInfo'] = $this->leads_model->campaign_counsellor_info($id);
        $all_sources            = $this->leads_model->all_sources_info();
        $data['all_sources']    = $all_sources;
        $all_campaign_info      = $this->leads_model->all_campaign_info();
        $data['all_campaigns']  = $all_campaign_info;
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/view_campaign', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function remove_counsellor($lcid, $cid) {
        $this->db->query("DELETE FROM cyc_leads_counsellor WHERE lc_id = '".$lcid."' ");
        
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
        redirect('admin/leads/view_campaign/'.$cid);
    }

    public function import_leads() {
        if (isset($_FILES["file"]) && !empty($_FILES['file']['name'])) {
            $fileName = $_FILES["file"]["tmp_name"];
            if (isset($_FILES["file"]) && !empty($_FILES['file']['name']) && $_FILES["file"]["size"] > 0) {
                $cid    = $this->input->post('cid', TRUE);
                $is_sms = $this->input->post('is_sms', TRUE);
                $file   = fopen($fileName, "r");
                $flag   = true;
                while (($column = fgetcsv($file, 100000, ",")) !== false) {
                    if ($flag) {
                        $header1    = $column['0'];
                        $header2    = $column['1'];
                        $header3    = $column['2'];
                        $header4    = $column['3'];
                        $header5    = $column['4'];
                        $header6    = $column['5'];
                        $header7    = $column['6'];
                        $header8    = $column['7'];
                        $header9    = $column['8'];
                        $header10   = $column['9'];
                        $header11   = $column['10'];
                        $header12   = $column['11'];
                        $header13   = $column['12'];
                        $header14   = $column['13'];
                        $header15   = $column['14'];
                        $header16   = $column['15'];
                        $header17   = $column['16'];
                        $header18   = $column['17'];
                        $header19   = $column['18'];
                        $header20   = $column['19'];
                        $header21   = $column['20'];
                        $header22   = $column['21'];
                        $header23   = $column['22'];
                        $header24   = $column['23'];
                        $header25   = $column['24'];
                        $header26   = $column['25'];
                        $header27   = $column['26'];
                        $header28   = $column['27'];
                        $header29   = $column['28'];
                        $header30   = $column['29'];
                        $header31   = $column['30'];
                        $flag       = false;
                        continue;
                    }
                    $data1 = array(
                        'c_id'                  => $cid,
                        'l_name'                => $column['0'],
                        'l_gender'              => $column['1'],
                        'l_dob'                 => $column['2'],
                        'l_aadhar_no'           => $column['3'],
                        'l_blood_group'         => $column['4'],
                        'l_father_name'         => $column['5'],
                        'l_father_phone'        => $column['6'],
                        'l_father_email'        => $column['7'],
                        'l_father_qualification'=> $column['8'],
                        'l_mother_name'         => $column['9'],
                        'l_mother_phone'        => $column['10'],
                        'l_mother_email'        => $column['11'],
                        'l_mother_qualification'=> $column['12'],
                        'l_guradian_name'       => $column['13'],
                        'l_guardian_phone'      => $column['14'],
                        'l_guardian_email'      => $column['15'],
                        'l_phone_number'        => $column['16'],
                        'l_alternative_phone'   => $column['17'],
                        'l_primary_email_id'    => $column['18'],
                        'l_emergency_contact_no'=> $column['19'],
                        'l_email'               => $column['20'],
                        'l_nationality'         => $column['21'],
                        'l_address'             => $column['22'],
                        'l_religion'            => $column['23'],
                        'l_caste'               => $column['24'],
                        'l_sub_caste'           => $column['25'],
                        'l_mother_tongue'       => $column['26'],
                        'l_qualification'       => $column['27'],
                        'l_class'               => $column['28'],
                        'l_enrolled_course'     => $column['29'],
                        'l_elective_subjects'   => $column['30'],
                        'l_date'                => date("Y-m-d"),
                    );
                    $this->db->insert('cyc_leads', $data1);
                    
                    if ($is_sms) {
                        $smsinfo = $this->db->query("SELECT * FROM `notification_setting` WHERE type = 'add_lead' ")->row();
                        $this->load->helper('general');
                        //sendSms($column['16'], $smsinfo->template_id, $smsinfo->template);
                    }
                }
            }
            $message = 'success';
            echo json_encode($message);
            return true;
        }
    }
    
    public function all_leads() {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/all_leads');
        $data['title']          = 'All Leads';
        $data['campaign_info']  = $this->leads_model->all_campaign_info();
        $all_promoters_info     = $this->leads_model->all_promoters_info();
        $data['all_promoters']  = $all_promoters_info;
        $all_campaign_type_info = $this->leads_model->all_campaign_type_info();
        $data['all_campaign_type']  = $all_campaign_type_info;
        $data["stafflist"]          = $this->staff_model->getAll();
        if ($this->input->post('submit')) {
            $data['cpid']       = $this->input->post('cpid', TRUE);
            $data['ctid']       = $this->input->post('ctid', TRUE);
            $data['cid']        = $this->input->post('cid', TRUE);
            $data['fdate']      = $this->input->post('fdate', TRUE);
            $data['tdate']      = $this->input->post('tdate', TRUE);
            $data['llevel']     = $this->input->post('llevel', TRUE);
            $data['lstatus']    = $this->input->post('lstatus', TRUE);
            $data['taken_by']   = $this->input->post('taken_by', TRUE);
            $data['handler']    = $this->input->post('handler', TRUE);
            
            $data['all_leads_info'] = $this->leads_model->all_leads_info($data['cpid'], $data['ctid'], $data['cid'], $data['fdate'], $data['tdate'], $data['lstatus'], $data['llevel'], $data['taken_by'], $data['handler']);
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/all_leads', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function leads_follow_up() {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/all_leads');
        $data['title']              = 'All Followup';
        $data['campaign_info']      = $this->leads_model->all_campaign_info();
        $all_promoters_info         = $this->leads_model->all_promoters_info();
        $data['all_promoters']      = $all_promoters_info;
        $all_campaign_type_info     = $this->leads_model->all_campaign_type_info();
        $data['all_campaign_type']  = $all_campaign_type_info;
        
        $data['followup_status']    = $this->leads_model->all_followup_status_info();
        $data["stafflist"]          = $this->staff_model->getAll();
        if ($this->input->post('submit')) {
            $data['cpid']       = $this->input->post('cpid', TRUE);
            $data['ctid']       = $this->input->post('ctid', TRUE);
            $data['cid']        = $this->input->post('cid', TRUE);
            $data['cs']         = $this->input->post('cs', TRUE);
            $data['by']         = $this->input->post('by', TRUE);
            $data['lid']        = $this->input->post('lid', TRUE);
            $data['fdate']      = $this->input->post('fdate', TRUE);
            $data['tdate']      = $this->input->post('tdate', TRUE);
            $data['ismissed']   = $this->input->post('ismissed', TRUE);
            
          
            
            $data['all_followup_info']          = $this->leads_model->all_followup_info($data['cpid'], $data['ctid'], $data['cid'], $data['lid'], $data['fdate'], $data['tdate'], $data['cs'], $data['by']);
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/leads_follow_up', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function promoter_commission_report() {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/promoter_commission_report');
        $data['title']          = 'All Leads';
        $all_promoters_info     = $this->leads_model->all_promoters_info();
        $data['all_promoters']  = $all_promoters_info;
        if ($this->input->post('submit')) {
            $data['cpid']       = $this->input->post('cpid', TRUE);
            $data['fdate']      = $this->input->post('fdate', TRUE);
            $data['tdate']      = $this->input->post('tdate', TRUE);
            $data['lstatus']    = $this->input->post('lstatus', TRUE);
            $data['pInfo']      = $this->leads_model->all_promoters_info($data['cpid']);
            $data['all_leads_info'] = $this->leads_model->all_leads_by_promoter_info($data['cid'], $data['fdate'], $data['tdate'], 'Converted');
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/promoter_commission_report', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function brief_reports() {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/brief_reports');
        $data['title']          = 'All Leads';
        $data['campaign_info']  = $this->leads_model->all_campaign_info();
        $all_promoters_info     = $this->leads_model->all_promoters_info();
        $data['all_promoters']  = $all_promoters_info;
        $all_campaign_type_info     = $this->leads_model->all_campaign_type_info();
        $data['all_campaign_type'] = $all_campaign_type_info;
        
        if ($this->input->post('submit')) {
            $data['cpid']       = $this->input->post('cpid', TRUE);
            $data['ctid']       = $this->input->post('ctid', TRUE);
            $data['cid']        = $this->input->post('cid', TRUE);
            $data['linterval']  = $this->input->post('linterval', TRUE);
            $data['fdate']      = '';
            $data['tdate']      = '';
            $current_date       = date('Y-m-d');
            
            if ($data['linterval'] == 'Daily') {
                $data['fdate']      = $current_date;
                $data['tdate']      = $current_date;
            } elseif ($data['linterval'] == 'Weekly') {
                $week_start_date    = date('Y-m-d', strtotime('monday this week'));
                $week_end_date      = date('Y-m-d', strtotime('sunday this week'));
                $data['fdate']      = $week_start_date;
                $data['tdate']      = $week_end_date;
            } elseif ($data['linterval'] == 'Monthly') {
                $month_start_date   = date('Y-m-01');
                $month_end_date     = date('Y-m-t');
                $data['fdate']      = $month_start_date;
                $data['tdate']      = $month_end_date;
            }
            $fdate                  = $data['fdate'];
            $tdate                  = $data['tdate'];
            
            $data['all_leads_info']     = $this->leads_model->all_leads_info();
            $data['new_leads_info']     = $this->leads_model->all_leads_info($data['cpid'], $data['ctid'], $data['cid'], $data['fdate'], $data['tdate']);
            $data['all_followup_info']  = $this->leads_model->all_followup_info($data['cpid'], $data['ctid'], $data['cid'], $data['lid'], $data['fdate'], $data['tdate']);
            
            $c_followup                 = 0;
            $m_followup                 = 0;
            $c_leads                    = 0;
            $i_leads                    = 0;
            foreach ($data['all_followup_info'] as $allf) {
                $next_followup          = $this->db->query("SELECT * FROM cyc_leads_followup WHERE l_id = '".$allf->l_id."' AND followup_date >= '".$allf->next_followup_date."' AND followup_time >= '".$allf->next_followup_time."'  ")->row();
                if (!empty($next_followup)) {
                    $c_followup         += 1;
                } else {
                    $m_followup         += 1;
                }
                if ($allf->call_status == 'Converted') {
                    $c_leads            += 1;
                }
                if ($allf->call_status == 'Wrong-number') {
                    $i_leads            += 1;
                }
            }
            
            $ci = 0;
            $ct = 0;
            foreach ($data['all_leads_info'] as $al) {
                $clinfo                 = $this->db->query("SELECT * FROM cyc_campaign_time WHERE l_id = '".$al->l_id."' AND date >= '".$fdate."' AND date <= '".$tdate."'  ")->row();
                if (!empty($clinfo)) {
                    $ci += 1; 
                    if ($clinfo->duration > 0.5) {
                        $ct += $clinfo->duration-0.5;
                    }
                }
            }
            if ($ci > 0 && $ct > 0) {
                $average_time = $ct / $ci;
            } else {
                $average_time = 0;
            }
            $data['all_leads']      = count($data['all_leads_info']);
            $data['new_leads']      = count($data['new_leads_info']);
            $data['a_followup']     = count($data['all_followup_info']);
            $data['c_followup']     = $c_followup;
            $data['m_followup']     = $m_followup;
            $data['c_leads']        = $c_leads;
            $data['i_leads']        = $i_leads;
            $data['ci']             = $ci;
            $data['ct']             = $average_time.' Min | Total Minutes : '.$ct;
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/brief_reports', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function call_reports() {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/all_leads');
        $data['title']          = 'Call Reports';
        $data['campaign_info']  = $this->leads_model->all_campaign_info();
        $all_promoters_info     = $this->leads_model->all_promoters_info();
        $data['all_promoters']  = $all_promoters_info;
        $all_campaign_type_info     = $this->leads_model->all_campaign_type_info();
        $data['all_campaign_type'] = $all_campaign_type_info;
        
        if ($this->input->post('submit')) {
            $data['cpid']       = $this->input->post('cpid', TRUE);
            $data['ctid']       = $this->input->post('ctid', TRUE);
            $data['cid']        = $this->input->post('cid', TRUE);
            $data['fdate']      = $this->input->post('fdate', TRUE);
            $data['tdate']      = $this->input->post('tdate', TRUE);
            $data['llevel']     = $this->input->post('llevel', TRUE);
            $data['lstatus']    = $this->input->post('lstatus', TRUE);
            
            $data['all_leads_info'] = $this->leads_model->calls_initiated_info($data['cpid'], $data['ctid'], $data['cid'], $data['fdate'], $data['tdate'], $data['lstatus'], $data['llevel']);
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/call_reports', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function travel_reports() {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/all_leads');
        $data['title']              = 'Travel Reports';
        $data["stafflist"]          = $this->leads_model->all_counsellors_info();
        
        if ($this->input->post('submit')) {
            $data['staff_id']       = $this->input->post('by', TRUE);
            $data['fdate']          = $this->input->post('fdate', TRUE);
            $data['tdate']          = $this->input->post('tdate', TRUE);
            $datatrp                = $this->db->query("SELECT * FROM positions WHERE staff_id = '".$data['staff_id']."' AND date(time) >= '".$data['fdate']."' AND date(time) <= '".$data['tdate']."' ")->result_array();
            $distancefrom           = reset($datatrp);
            $distanceto             = end($datatrp);
            $totaldist              = $this->totaldistance($distancefrom,$distanceto);
            $returndata             = array('status'=>1,'data'=>$datatrp,'totaldist'=>$totaldist,'message'=>'data');
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/travel_reports', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function positions() {
        $fdate              = $this->input->post('fdate', TRUE);
        $tdate              = $this->input->post('tdate', TRUE);
        $staff_id           = $this->input->post('by', TRUE);
        $data['staff_id']   = $this->input->post('by', TRUE);
        
        $data           = $this->db->query("SELECT * FROM positions WHERE staff_id = '".$staff_id."' AND date(time) >= '".$fdate."' AND date(time) <= '".$tdate."' ")->result_array();
        $distancefrom   = reset($data);
        $distanceto     = end($data);
        $totaldist      = $this->totaldistance($distancefrom,$distanceto);
        $returndata     = array('status'=>1,'data'=>$data,'totaldist'=>$totaldist,'message'=>'data');
        echo json_encode($returndata);
    }
    
    public function totaldistance($distancefrom,$distanceto,$earthRadius = 6371000) {
        $latFrom = deg2rad($distancefrom['latitude']);
        $lonFrom = deg2rad($distancefrom['longitude']);
        $latTo = deg2rad($distanceto['latitude']);
        $lonTo = deg2rad($distanceto['longitude']);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }
    
    public function view_lead($id) {
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/campaign');
        $data['title']          = 'Lead Info';
        $data["l_id"]           = $id;
        $data['leadInfo']       = $this->leads_model->leads_info($id);
        $data['followUpInfo']   = $this->leads_model->all_followup_by_lead_info($id);
        $data['campInfo']       = $this->leads_model->campaign_info($data['leadInfo']->c_id);
        $data["c_id"]           = $data['leadInfo']->c_id;
        
        $data['followup_status']    = $this->leads_model->all_followup_status_info();
        $data['followup_content']   = $this->leads_model->all_followup_content_info();
        
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/view_lead', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function saveStudentScore() {
        $lead   = $this->input->post('score_lead_id');
        $score  = $this->input->post('score');
    
        if (empty($lead) || empty($score)) {
            echo json_encode(['success' => false]);
            return;
        }

        $data = [
            'l_test_score'          => $score,
            'l_test_score_remark'   => $this->input->post('remark')
        ];
        $this->db->where('l_id', $lead);
        $this->db->update('cyc_leads', $data);
        
        if ($this->db->affected_rows() > 0) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }
    
    public function print_lead($lid){
        $this->session->set_userdata('top_menu', 'Leads Manager');
        $this->session->set_userdata('sub_menu', 'leads/print_lead');
        $data['title']          = 'Student Form Print';
        $data['sch_setting']    = $this->sch_setting_detail;
        $data['linfo']          = $this->db->query("SELECT * FROM `cyc_leads` WHERE l_id = '".$lid."' ")->row(); 
        $data['sinfo']          = $this->db->query("SELECT * FROM `online_admissions` WHERE reference_no = '".$data['linfo']->reference_no."' ")->row(); 
        $this->load->view('layout/header', $data);
        $this->load->view('admin/leads/print_lead', $data);
        $this->load->view('layout/footer', $data);
    }

}
