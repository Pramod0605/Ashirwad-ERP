<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Hostelroom extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('Customlib');
        $this->load->model("classteacher_model");
        $this->sch_setting_detail = $this->setting_model->getSetting();
    }

    public function index()
    {
        if (!$this->rbac->hasPrivilege('hostel_rooms', 'can_view')) {
            access_denied();
        }
        $roomtypelist         = $this->roomtype_model->get();
        $data['roomtypelist'] = $roomtypelist;
        $hostellist           = $this->hostel_model->get();
        $data['hostellist']   = $hostellist;
        $this->session->set_userdata('top_menu', 'Hostel');
        $this->session->set_userdata('sub_menu', 'hostelroom/index');
        $hostelroomlist         = $this->hostelroom_model->lists();
        $data['hostelroomlist'] = $hostelroomlist;
        $this->load->view('layout/header');
        $this->load->view('admin/hostelroom/create', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        if (!$this->rbac->hasPrivilege('hostel_rooms', 'can_add')) {
            access_denied();
        }
        $roomtypelist           = $this->roomtype_model->get();
        $data['roomtypelist']   = $roomtypelist;
        $hostellist             = $this->hostel_model->get();
        $data['hostellist']     = $hostellist;
        $data['title']          = 'Add Library';
        $hostelroomlist         = $this->hostelroom_model->lists();
        $data['hostelroomlist'] = $hostelroomlist;
        $this->form_validation->set_rules('hostel_id', $this->lang->line('hostel'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('room_type_id', $this->lang->line('room_type'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('room_no', $this->lang->line('room_number_name'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('no_of_bed', $this->lang->line('number_of_bed'), 'trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost_per_bed', $this->lang->line('cost_per_bed'), 'trim|required|numeric|xss_clean');
        $hostellist           = $this->hostel_model->get();
        $data['hostellist']   = $hostellist;
        $roomtypelist         = $this->roomtype_model->get();
        $data['roomtypelist'] = $roomtypelist;
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('admin/hostelroom/create', $data);
            $this->load->view('layout/footer');
        } else {
            $data = array(
                'hostel_id'    => $this->input->post('hostel_id'),
                'room_type_id' => $this->input->post('room_type_id'),
                'room_no'      => $this->input->post('room_no'),
                'no_of_bed'    => $this->input->post('no_of_bed'),
                'cost_per_bed' => convertCurrencyFormatToBaseAmount($this->input->post('cost_per_bed')),
                'cost_term'    => $this->input->post('cost_term'),
                'description'  => $this->input->post('description'),
                'fee_title'    => 'HostelFee'.$this->input->post('cost_per_bed'),
            );
            $hrid = $this->hostelroom_model->add($data);
            
            $costTrm = $this->input->post('cost_term', TRUE);
            $hfName  = 'HostelFee'.$this->input->post('cost_per_bed', TRUE);
            $hf1Info = $this->db->query("SELECT * FROM feetype WHERE type = '".$hfName."' ")->row();
            
            if (empty($hf1Info->id)) {
            
            $datahf1 = array(
                'type'      => 'HostelFee'.$this->input->post('cost_per_bed'),
                'code'      => 'HF'.$this->input->post('cost_per_bed'),
                'is_active' => 'no',
            );
            $this->db->insert('feetype', $datahf1);
            $feeTypeId = $this->db->insert_id();
            
            $datahf2 = array(
                'name'          => 'HostelFee'.$this->input->post('cost_per_bed'),
                'description'   => 'HF'.$this->input->post('cost_per_bed'),
                'is_active'     => 'no',
            );
            $this->db->insert('fee_groups', $datahf2);
            $feeGroupId = $this->db->insert_id();
            
            $sesInfo = $this->db->query("SELECT session_id as sesId FROM sch_settings WHERE id = '1' ")->row();
            $datahf3 = array(
                'fee_groups_id '=> $feeGroupId,
                'session_id'    => $sesInfo->sesId,
                'is_active'     => 'no',
            );
            $this->db->insert('fee_session_groups', $datahf3);
            $feeSesGrpId = $this->db->insert_id();
            
            if ($costTrm == 'Annually') {
            $datahf4 = array(
                'fee_session_group_id'  => $feeSesGrpId,
                'fee_groups_id'         => $feeGroupId,
                'feetype_id'            => $feeTypeId,
                'session_id'            => $sesInfo->sesId,
                'amount'                => convertCurrencyFormatToBaseAmount($this->input->post('cost_per_bed')),
                'due_date'              => date("Y-04-10"),
                'is_active'             => 'no',
            );
            $this->db->insert('fee_groups_feetype', $datahf4);
            $fGrpFtypId = $this->db->insert_id();
            } else {
                
                $datahf4 = array(
                    'fee_session_group_id'  => $feeSesGrpId,
                    'fee_groups_id'         => $feeGroupId,
                    'feetype_id'            => $feeTypeId,
                    'session_id'            => $sesInfo->sesId,
                    'amount'                => 0,
                    'due_date'              => $ncolDate,
                    'is_active'             => 'no',
                    'collection_type'       => '12',
                );
                $this->db->insert('fee_groups_feetype', $datahf4);
                $fGrpFtypId = $this->db->insert_id();
                
                $feeAmnt = convertCurrencyFormatToBaseAmount($this->input->post('cost_per_bed'));
                $colDate = date("Y-04-10");
                for ($x = 1; $x <= 12; $x++) {
                    if ($x == 1) {
                        $ncolDate = date("Y-04-10");
                    } else {
                        $ncolDate = date('Y-m-d', strtotime('+1 months', strtotime($colDate)));
                    }
                    $datahf5= array(
                        'parent_id'             => $fGrpFtypId,
                        'fee_session_group_id'  => $feeSesGrpId,
                        'fee_groups_id'         => $feeGroupId,
                        'feetype_id'            => $feeTypeId,
                        'session_id'            => $sesInfo->sesId,
                        'amount'                => $feeAmnt,
                        'due_date'              => $ncolDate,
                        'is_active'             => 'no',
                    );
                    $this->db->insert('fee_groups_feetype', $datahf5);
                }
                
            }
            
            }
            
            
            $bed_codes = $this->input->post('bed_code', TRUE);
            if (!empty($bed_codes)) {
                foreach ($bed_codes as $bed_code) {
                    $databn = array(
                    'hostel_id'     => $this->input->post('hostel_id'),
                    'room_id'       => $hrid,
                    'room_number'   => $this->input->post('room_no'),
                    'bed_code'      => $bed_code,
                );
                if (!empty($bed_code)) {
                    $this->db->insert('cyc_hostel_room_bed', $databn);
                }
                }
            }
            
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('success_message') . '</div>');
            redirect('admin/hostelroom/index');
        }
    }

    public function getRoom()
    {
        $hosel_id = $this->input->get('hostel_id');
        $data     = $this->hostelroom_model->getRoomByHoselID($hosel_id);
        echo json_encode($data);
    }
    
    public function getRoomBed()
    {
        $hosel_id = $this->input->get('hostel_id');
        $room_id  = $this->input->get('hostel_room_id');
        $data     = $this->hostelroom_model->getBedByByHoselRoomID($hosel_id, $room_id);
        echo json_encode($data);
    }

    public function edit($id)
    {
        if (!$this->rbac->hasPrivilege('hostel_rooms', 'can_edit')) {
            access_denied();
        }
        $data['title']          = 'Add Hostel';
        $data['id']             = $id;
        $hostellist             = $this->hostel_model->get();
        $data['hostellist']     = $hostellist;
        $roomtypelist           = $this->roomtype_model->get();
        $data['roomtypelist']   = $roomtypelist;
        $hostelroom             = $this->hostelroom_model->get($id);
        $data['hostelroom']     = $hostelroom;
        $hostelroomlist         = $this->hostelroom_model->lists();
        $data['hostelroomlist'] = $hostelroomlist;
        $this->form_validation->set_rules('hostel_id', $this->lang->line('hostel'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('room_type_id', $this->lang->line('room_type'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('room_no', $this->lang->line('room_number_name'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('no_of_bed', $this->lang->line('number_of_bed'), 'trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost_per_bed', $this->lang->line('cost_per_bed'), 'trim|required|numeric|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('admin/hostelroom/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $data = array(
                'id'           => $this->input->post('id'),
                'hostel_id'    => $this->input->post('hostel_id'),
                'room_type_id' => $this->input->post('room_type_id'),
                'room_no'      => $this->input->post('room_no'),
                'no_of_bed'    => $this->input->post('no_of_bed'),
                'cost_per_bed' => convertCurrencyFormatToBaseAmount($this->input->post('cost_per_bed')),
                'cost_term'    => $this->input->post('cost_term'),
                'description'  => $this->input->post('description'),
            );
            $this->hostelroom_model->add($data);
            
            $bed_codes = $this->input->post('bed_code', TRUE);
            $bed_ids = $this->input->post('bed_id');
            $hId = $this->input->post('hostel_id', TRUE);
            $rId = $this->input->post('id', TRUE);
            
            if (!empty($bed_codes)) {
                foreach ($bed_codes as $key => $bed_code) {
                    $bed_id = $bed_ids[$key]; 
                    
                    echo $bed_id;
                    
                    if (!empty($bed_id) && empty($bed_code)) {
                        $this->db->query("UPDATE cyc_hostel_room_bed SET status = '0' WHERE id = '".$bed_id."' ");
                    } else {
                        $this->db->query("UPDATE cyc_hostel_room_bed SET bed_code = '$bed_code' WHERE id = '".$bed_id."' ");
                    }
                    
                    $databn = array(
                        'hostel_id'     => $this->input->post('hostel_id'),
                        'room_id'       => $this->input->post('id'),
                        'room_number'   => $this->input->post('room_no'),
                        'bed_code'      => $bed_code,
                    );
                    if (empty($bed_id) && !empty($bed_code)) {
                        $this->db->insert('cyc_hostel_room_bed', $databn);
                    }
                }
            }
            
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">' . $this->lang->line('update_message') . '</div>');
            redirect('admin/hostelroom/index');
        }
    }

    public function delete($id)
    {
        if (!$this->rbac->hasPrivilege('hostel_rooms', 'can_delete')) {
            access_denied();
        }
        $data['title'] = 'Fees Master List';
        $this->hostelroom_model->remove($id);
        redirect('admin/hostelroom/index');
    }

    public function studenthosteldetails()
    {

        $this->session->set_userdata('top_menu', 'Reports');
        $this->session->set_userdata('sub_menu', 'reports/studenthosteldetails');
        $data['title']       = 'Student Hostel Details';
        $class               = $this->class_model->get();
        $data['classlist']   = $class;
        $userdata            = $this->customlib->getUserData();
        $data['sch_setting'] = $this->sch_setting_detail;
        $data['hostellist']  = $this->hostel_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/hostelroom/studenthosteldetails", $data);
        $this->load->view("layout/footer", $data);
    }

    //datatable function to check search parameter validation
    public function searchvalidation()
    {
        $class_id    = $this->input->post('class_id');
        $section_id  = $this->input->post('section_id');
        $hostel_name = $this->input->post('hostel_name');

        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == true) {

            $params = array('class_id' => $class_id, 'section_id' => $section_id, 'hostel_name' => $hostel_name);
            $array  = array('status' => 1, 'error' => '', 'params' => $params);
            echo json_encode($array);

        } else {

            $error               = array();
            $error['class_id']   = form_error('class_id');
            $error['section_id'] = form_error('section_id');
            $array               = array('status' => 0, 'error' => $error);
            echo json_encode($array);
        }
    }

    public function dthostellist()
    {
        $class       = $this->class_model->get();
        $classlist   = $class;
        $userdata    = $this->customlib->getUserData();
        $sch_setting = $this->sch_setting_detail;
        $carray      = array();

        if (!empty($classlist)) {
            foreach ($classlist as $ckey => $cvalue) {

                $carray[] = $cvalue["id"];
            }
        }

        $currency_symbol = $this->customlib->getSchoolCurrencyFormat();
        $class_id        = $this->input->post('class_id');
        $section_id      = $this->input->post('section_id');
        $hostel_name     = $this->input->post('hostel_name');

        $sch_setting = $this->sch_setting_detail;

        $resultlist = $this->hostelroom_model->searchHostelDetails($section_id, $class_id, $hostel_name);
        $resultlist = json_decode($resultlist);
        $dt_data    = array();
        if (!empty($resultlist->data)) {
            foreach ($resultlist->data as $resultlist_key => $student) {

                $viewbtn = "<a  href='" . base_url() . "student/view/" . $student->sid . "'>" . $this->customlib->getFullName($student->firstname, $student->middlename, $student->lastname, $sch_setting->middlename, $sch_setting->lastname) . "</a>";

                $row       = array();
                $row[]     = $student->class . " - " . $student->section;
                $row[]     = $student->admission_no;
                $row[]     = $viewbtn;
                $row[]     = $student->mobileno;
                $row[]     = $student->guardian_phone;
                $row[]     = $student->hostel_name;
                $row[]     = $student->room_no;
                $row[]     = $student->room_type;
                $row[]     = amountFormat($student->cost_per_bed);
                $dt_data[] = $row;
            }

        }
        $json_data = array(
            "draw"            => intval($resultlist->draw),
            "recordsTotal"    => intval($resultlist->recordsTotal),
            "recordsFiltered" => intval($resultlist->recordsFiltered),
            "data"            => $dt_data,
        );
        echo json_encode($json_data);

    }

}
