<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Timetable extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('general');
        $this->load->model("staff_model");
        $this->load->model("classteacher_model");
    }

    public function index()
    {

        if (!$this->rbac->hasPrivilege('class_time_table', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'Academics/timetable');
        $session            = $this->setting_model->getCurrentSession();
        $data['title']      = 'Exam Marks';
        $data['exam_id']    = "";
        $data['class_id']   = "";
        $data['section_id'] = "";

        $class             = $this->class_model->get();
        $data['classlist'] = $class;

        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('admin/timetable/timetableList', $data);
            $this->load->view('layout/footer', $data);
        } else {

            $class_id           = $this->input->post('class_id');
            $section_id         = $this->input->post('section_id');
            $section_id         = $this->input->post('group_id');
            $data['class_id']   = $class_id;
            $data['section_id'] = $section_id;
            $result_subjects    = $this->teachersubject_model->getSubjectByClsandSection($class_id, $section_id);

            $getDaysnameList         = $this->customlib->getDaysname();
            $data['getDaysnameList'] = $getDaysnameList;
            $final_array             = array();
            if (!empty($result_subjects)) {
                foreach ($result_subjects as $subject_k => $subject_v) {
                    $result_array = array();
                    foreach ($getDaysnameList as $day_key => $day_value) {
                        $where_array = array(
                            'teacher_subject_id' => $subject_v['id'],
                            'day_name'           => $day_value,
                        );
                        $result = $this->timetable_model->get($where_array);
                        if (!empty($result)) {
                            $obj                      = new stdClass();
                            $obj->status              = "Yes";
                            $obj->start_time          = $result[0]['start_time'];
                            $obj->end_time            = $result[0]['end_time'];
                            $obj->room_no             = $result[0]['room_no'];
                            $result_array[$day_value] = $obj;
                        } else {
                            $obj                      = new stdClass();
                            $obj->status              = "No";
                            $obj->start_time          = "N/A";
                            $obj->end_time            = "N/A";
                            $obj->room_no             = "N/A";
                            $result_array[$day_value] = $obj;
                        }
                    }
                    $final_array[$subject_v['name']] = $result_array;
                }
            }

            $data['result_array'] = $final_array;
            $this->load->view('layout/header', $data);
            $this->load->view('admin/timetable/timetableList', $data);
            $this->load->view('layout/footer', $data);
        }
    }

    public function mytimetable()
    {
        if (!$this->rbac->hasPrivilege('teachers_time_table', 'can_view')) {
            access_denied();
        }

        $data['title'] = 'My Timetable';
        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'Academics/timetable/mytimetable');
        $my_role  = $this->customlib->getStaffRole();
        $role     = json_decode($my_role);
        $is_admin = false;

        if ($role->id != "2") {
            $staff_list         = $this->staff_model->getEmployee('2');
            $data['staff_list'] = $staff_list;
            $is_admin           = true;
        }

        $staff_id          = $this->customlib->getStaffID();
        $data['timetable'] = array();
        $days              = $this->customlib->getDaysname();

        foreach ($days as $day_key => $day_value) {
            $data['timetable'][$day_value] = $this->subjecttimetable_model->getByStaffandDay($staff_id, $day_key);
        }

        $this->load->view('layout/header', $data);
        if ($is_admin) {
            $this->load->view('admin/timetable/admintimetable', $data);
        } else {
            $data['staff_id']=$staff_id;
            $this->load->view('admin/timetable/mytimetable', $data);
        }
        $this->load->view('layout/footer', $data);
    }

    public function view($id)
    {
        if (!$this->rbac->hasPrivilege('class_timetable', 'can_view')) {
            access_denied();
        }
        $data['title'] = $this->lang->line('mark_list');
        $mark          = $this->mark_model->get($id);
        $data['mark']  = $mark;
        $this->load->view('layout/header', $data);
        $this->load->view('admin/timetable/timetableShow', $data);
        $this->load->view('layout/footer', $data);
    }

    public function delete($id)
    {
        $data['title'] = 'Mark List';
        $this->mark_model->remove($id);
        redirect('admin/timetable/index');
    }

    public function create()
    {
        if (!$this->rbac->hasPrivilege('class_timetable', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'Academics/timetable');

        $session            = $this->setting_model->getCurrentSession();
        $data['title']      = 'Exam Schedule';
        $data['subject_id'] = "";
        $data['class_id']   = "";
        $data['section_id'] = "";
        $exam               = $this->exam_model->get();
        $class              = $this->class_model->get('', $classteacher = 'yes');
        $data['examlist']   = $exam;
        $data['classlist']  = $class;
        $userdata           = $this->customlib->getUserData();
        $staff                   = $this->staff_model->getStaffbyrole(2);
        $data['staff']           = $staff;
        $data['subject']         = array();
        // $feecategory             = $this->feecategory_model->get();
        // $data['feecategorylist'] = $feecategory;
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        $class_id         = $this->input->post('class_id');
        $section_id       = $this->input->post('section_id');
        $subject_group_id = $this->input->post('subject_group_id');

        $data['class_id']         = $class_id;
        $data['section_id']       = $section_id;
        $data['subject_group_id'] = $subject_group_id;

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('admin/timetable/timetableCreate', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $getDaysnameList         = $this->customlib->getDaysname();
            $data['getDaysnameList'] = $getDaysnameList;
            $subject                 = $this->subjectgroup_model->getGroupsubjects($subject_group_id);
            $data['subject']         = $subject;
            $this->load->view('layout/header', $data);
            $this->load->view('admin/timetable/timetableCreate', $data);
            $this->load->view('layout/footer', $data);
        }
    }

    public function classreport()
    {
        if (!$this->rbac->hasPrivilege('class_timetable', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'Academics');
        $this->session->set_userdata('sub_menu', 'Academics/timetable');
        $session                 = $this->setting_model->getCurrentSession();
        $data['title']           = 'Exam Schedule';
        $data['subject_id']      = "";
        $data['class_id']        = "";
        $data['section_id']      = "";
        $exam                    = $this->exam_model->get();
        $class                   = $this->class_model->get('', $classteacher = 'yes');
        $data['examlist']        = $exam;
        $data['classlist']       = $class;
        $userdata                = $this->customlib->getUserData();
        $staff                   = $this->staff_model->getStaffbyrole(2);
        $data['staff']           = $staff;
        $data['subject']         = array();
        // $feecategory             = $this->feecategory_model->get();
        // $data['feecategorylist'] = $feecategory;
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == true) {
            if (isset($_POST['search'])) {

                $class_id    = $this->input->post('class_id');
                $section_id  = $this->input->post('section_id');
                $days        = $this->customlib->getDaysname();
                $days_record = array();
                foreach ($days as $day_key => $day_value) {
                    $class_id              = $this->input->post('class_id');
                    $section_id            = $this->input->post('section_id');
                    $days_record[$day_key] = $this->subjecttimetable_model->getSubjectByClassandSectionDayGrouped($class_id, $section_id, $day_key);
                }

                $data['timetable'] = $days_record;
            }
        }

        $this->load->view('layout/header', $data);
        $this->load->view('admin/timetable/classreport', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($id)
    {
        if (!$this->rbac->hasPrivilege('class_timetable', 'can_edit')) {
            access_denied();
        }
        $data['title'] = $this->lang->line('edit_mark');
        $data['id']    = $id;
        $mark          = $this->mark_model->get($id);
        $data['mark']  = $mark;
        $this->form_validation->set_rules('name', $this->lang->line('mark'), 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('admin/timetable/timetableEdit', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $data = array(
                'id'   => $id,
                'name' => $this->input->post('name'),
                'note' => $this->input->post('note'),
            );
            $this->mark_model->add($data);
            $this->session->set_flashdata('msg', '<div mark="alert alert-success text-center">' . $this->lang->line('success_message') . '</div>');
            redirect('admin/timetable/index');
        }
    }

    public function getBydategroupclasssection()
    {
        $data                = array();
        $data['total_count'] = 1;
        $day                 = $this->input->post('day');
        $class_id            = $this->input->post('class_id');
        $section_id          = $this->input->post('section_id');
        $subject_group_id    = $this->input->post('subject_group_id');
        $subject             = $this->subjectgroup_model->getGroupsubjects($subject_group_id);

        $prev_record = $this->subjecttimetable_model->getBySubjectGroupDayClassSection($subject_group_id, $day, $class_id, $section_id);

        $staff         = $this->staff_model->getStaffbyrole();
        $data['staff'] = $staff;
        if (empty($prev_record)) {
            $data['prev_record'] = array();
        } else {
            $data['total_count'] = count($prev_record);
            $data['prev_record'] = $prev_record;
        }
        $data['subject']          = $subject;
        $data['day']              = $day;
        $data['class_id']         = $class_id;
        $data['section_id']       = $section_id;
        $data['subject_group_id'] = $subject_group_id;
        
        $class              = $this->class_model->get('', $classteacher = 'yes');
        $data['classlist']  = $class;
        
        $data['html'] = $this->load->view('admin/timetable/addrow', $data, true);
        echo json_encode($data);
    }

    public function savegroup()
    {
        $json = array();
    $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required');
        $this->form_validation->set_rules('day', $this->lang->line('day'), 'trim|required');
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required');
        $total_rows=$this->input->post('total_row');
        if(!isset($total_rows)){
            $this->form_validation->set_rules('rows', 'class_timetable', 'trim|required',array('required' => $this->lang->line('you_have_not_selected_any_row')));
        }
        if(isset($total_rows) && !empty($total_rows)){

        foreach ($this->input->post('total_row') as $key => $value) {
            $this->form_validation->set_rules('subject_' . $value, 'Subject', 'trim|required');
            $this->form_validation->set_rules('staff_' . $value, 'Staff', 'trim|required');
            $this->form_validation->set_rules('time_from_' . $value, 'Time From', 'trim|required');
            $this->form_validation->set_rules('time_to_' . $value, 'Time To', 'trim|required');
        }
        }

        if (!$this->form_validation->run()) {
            $json = array(
                'subject_group_id' => form_error('subject_group_id', '<li>', '</li>'),
                'day'              => form_error('day', '<li>', '</li>'),
                'class_id'         => form_error('class_id', '<li>', '</li>'),
                'section_id'       => form_error('section_id', '<li>', '</li>'),
                'rows'       => form_error('rows', '<li>', '</li>'),
            );
if(isset($total_rows) && !empty($total_rows)){
            foreach ($this->input->post('total_row') as $key => $value) {
                $json['subject_' . $value]   = form_error('subject_' . $value, '<li>', '</li>');
                $json['staff_' . $value]     = form_error('staff_' . $value, '<li>', '</li>');
                $json['time_from_' . $value] = form_error('time_from_' . $value, '<li>', '</li>');
                $json['time_to_' . $value]   = form_error('time_to_' . $value, '<li>', '</li>');
            }
        }

            $json_array = array('status' => '0', 'error' => $json);
        } else {
            $day              = $this->input->post('day');
            $class_id         = $this->input->post('class_id');
            $section_id       = $this->input->post('section_id');
            $subject_group_id = $this->input->post('subject_group_id');
            $total_row        = $this->input->post('total_row');
            $session          = $this->setting_model->getCurrentSession();
            //$insert_array     = array();
            //$update_array     = array();
            //$old_input        = array();
            $prev_array       = $this->input->post('prev_array');
            if (isset($prev_array)) {
                foreach ($prev_array as $prev_arr_key => $prev_arr_value) {
                    $old_input[] = $prev_arr_value;
                }
            }
            $preserve_array = array();
            if (isset($total_row)) {
                $error_period = array();
$base_sgi           = $this->input->post('subject_group_id');                
$allClsSecGroups    = groupByClassSection($class_id, $section_id);
$mergedGInfos       = [];
if (!empty($allClsSecGroups)) {
    foreach ($allClsSecGroups as $csgroup) {
        $gInfos         = groupInfo($csgroup->group_id);
        $mergedGInfos = array_merge($mergedGInfos, $gInfos);
    }
}
$allClsSecSubGroupGroups = groupByClassSectionSubjectGroup($class_id, $section_id, $subject_group_id);
if (!empty($allClsSecSubGroupGroups)) {
    foreach ($allClsSecSubGroupGroups as $cssggroup) {
        $gInfos         = groupInfo($cssggroup->group_id);
        $mergedGInfos   = array_merge($mergedGInfos, $gInfos);
    }
}

                $error_period[] = '<div class="row">';
                if (!empty($mergedGInfos)) { foreach ($mergedGInfos as $mergedG) {
                
                if (!empty($mergedG->subject_group_id)) {
                    $subject_group_id = $mergedG->subject_group_id;
                } elseif (empty($mergedG->subject_group_id)) {
                    $sgcsInfo = $this->db->query("SELECT * FROM `subject_group_class_sections` WHERE class_section_id = '".$mergedG->class_section_id."' AND session_id = '".$mergedG->session_id."' ORDER BY id DESC LIMIT 1 ")->row();
                    $subject_group_id = $sgcsInfo->subject_group_id;
                } else {
                    $subject_group_id = null;
                }
                
                $class_id   = $mergedG->class_id;
                $section_id = $mergedG->section_id;
                
                if (!empty($subject_group_id)) {
                foreach ($total_row as $total_key => $total_value) {
                    $prev_id = $this->input->post('prev_id_' . $total_value);
                    
                    $stfId      = $this->input->post('staff_' . $total_value);
                    $stTim      = $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true);
                    $enTim      = $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true);
                    $stInfo     = $this->db->query("SELECT * FROM `subject_timetable` WHERE day = '".$day."' AND staff_id = '".$stfId."' AND start_time >= '".$stTim."'  AND end_time <= '".$enTim."'  ")->row();
                    $ctInfo     = $this->db->query("SELECT * FROM `subject_timetable` WHERE day = '".$day."' AND class_id = '".$class_id."' AND section_id = '".$section_id."' AND subject_group_id = '".$subject_group_id."' AND start_time >= '".$stTim."'  AND end_time <= '".$enTim."'  ")->row();
                    $sgsi       = $this->input->post('subject_' . $total_value);
                    
                    $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$sgsi."' ")->row();
                    $sgsInfo2   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$subject_group_id."' AND subject_id = '".$sgsInfo1->subject_id."' AND session_id = '".$session."' ")->row();
                    
                    if (!empty($sgsInfo2->id)) {
                        $sgsi = $sgsInfo2->id;
                    }
                    
                    if ($prev_id == 0) {
                        $insert_array = array(
                            'day'                      => $day,
                            'class_id'                 => $class_id,
                            'section_id'               => $section_id,
                            'subject_group_id'         => $subject_group_id,
                            'subject_group_subject_id' => $sgsi,
                            'staff_id'                 => $this->input->post('staff_' . $total_value),
                            'time_from'                => $this->input->post('time_from_' . $total_value),
                            'time_to'                  => $this->input->post('time_to_' . $total_value),
                            'start_time'               => $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true),
                            'end_time'                 => $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true),
                            'room_no'                  => $this->input->post('room_no_' . $total_value),
                            'session_id'               => $session,
                        );
                        
                        if (empty($stInfo->id)) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id == $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id == $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id != $stInfo->class_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (empty($stInfo->id) && !empty($ctInfo->id)) {
                            $this->db->where('id', $ctInfo->id); 
                            $this->db->update('subject_timetable', $insert_array);
                        } else {
                            $stfInfo    = $this->db->query("SELECT * FROM `staff` WHERE id = '".$stfId."' ")->row();
                                $error_period[] = '<div class="col-6">'.$stfInfo->employee_id.' - '.$stfInfo->name.'</div>';
                                $error_period[] = '<div class="col-6">'.$stTim.' TO '.$enTim.'</div><hr>';
                        }
                        
                    } else {
                            $insert_array = array(
                                'day'                      => $day,
                                'class_id'                 => $class_id,
                                'section_id'               => $section_id,
                                'subject_group_id'         => $subject_group_id,
                                'subject_group_subject_id' => $this->input->post('subject_' . $total_value),
                                'staff_id'                 => $this->input->post('staff_' . $total_value),
                                'time_from'                => $this->input->post('time_from_' . $total_value),
                                'time_to'                  => $this->input->post('time_to_' . $total_value),
                                'start_time'               => $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true),
                                'end_time'                 => $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true),
                                'room_no'                  => $this->input->post('room_no_' . $total_value),
                                'session_id'               => $session,
                            );
                            if (empty($stInfo->id)) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id == $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id == $stInfo->subject_group_id) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (!empty($stInfo->id) && $class_id != $stInfo->class_id) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (empty($stInfo->id) && !empty($ctInfo->id)) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } else {
                                //$stfInfo    = $this->db->query("SELECT * FROM `staff` WHERE id = '".$stfId."' ")->row();
                                //$error_period[] = '<div class="col-6">'.$stfInfo->employee_id.' - '.$stfInfo->name.'</div>';
                                //$error_period[] = '<div class="col-6">'.$stTim.' TO '.$enTim.'</div><hr>';
                            }
                    }
                    $error_period[] = '</div>';
                    
                    
                    
                    //else {
                        $preserve_array[] = $prev_id;
                    //     $update_array[]   = array(
                    //         'id'                       => $prev_id,
                    //         'day'                      => $day,
                    //         'class_id'                 => $class_id,
                    //         'section_id'               => $section_id,
                    //         'subject_group_id'         => $subject_group_id,
                    //         'subject_group_subject_id' => $this->input->post('subject_' . $total_value),
                    //         'staff_id'                 => $this->input->post('staff_' . $total_value),
                    //         'time_from'                => $this->input->post('time_from_' . $total_value),
                    //         'time_to'                  => $this->input->post('time_to_' . $total_value),

                    //         'start_time'               => $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true),
                    //         'end_time'                 => $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true),
                    //         'room_no'                  => $this->input->post('room_no_' . $total_value),
                    //         'session_id'               => $session,
                    //     );
                    // }
                    
                    
                } } } } else {
                    
                    foreach ($total_row as $total_key => $total_value) {
                    $prev_id = $this->input->post('prev_id_' . $total_value);
                    
                    $stfId      = $this->input->post('staff_' . $total_value);
                    $stTim      = $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true);
                    $enTim      = $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true);
                    $stInfo     = $this->db->query("SELECT * FROM `subject_timetable` WHERE day = '".$day."' AND staff_id = '".$stfId."' AND start_time >= '".$stTim."'  AND end_time <= '".$enTim."'  ")->row();
                    $ctInfo     = $this->db->query("SELECT * FROM `subject_timetable` WHERE day = '".$day."' AND class_id = '".$class_id."' AND section_id = '".$section_id."' AND subject_group_id = '".$subject_group_id."' AND start_time >= '".$stTim."'  AND end_time <= '".$enTim."'  ")->row();
                    
                    $sgsid      = $this->input->post('subject_' . $total_value);
                    $sgsinfi    = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$sgsid."' ")->row();
                    
                    if (!empty($allClsSecSubGroupGroups)) {
                        foreach ($allClsSecSubGroupGroups as $cssggroup) {
                            $gInfos         = groupInfo($cssggroup->group_id);
                            $mergedGInfos   = array_merge($mergedGInfos, $gInfos);
                        }
                    }
                    
                    $canSave = false;
                    foreach ($mergedGInfos as $groupInfo) {
                        if ($groupInfo->class_id == $stInfo->class_id && $groupInfo->section_id == $stInfo->section_id && $groupInfo->subject_group_id == $stInfo->subject_group_id) {
                            $canSave = true;
                            break;
                        }
                    }

                    if ($prev_id == 0) {
                        $insert_array = array(
                            'day'                      => $day,
                            'class_id'                 => $class_id,
                            'section_id'               => $section_id,
                            'subject_group_id'         => $subject_group_id,
                            'subject_group_subject_id' => $this->input->post('subject_' . $total_value),
                            'staff_id'                 => $this->input->post('staff_' . $total_value),
                            'time_from'                => $this->input->post('time_from_' . $total_value),
                            'time_to'                  => $this->input->post('time_to_' . $total_value),
                            'start_time'               => $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true),
                            'end_time'                 => $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true),
                            'room_no'                  => $this->input->post('room_no_' . $total_value),
                            'session_id'               => $session,
                        );
                        
                        if (empty($stInfo->id)) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id == $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id == $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $class_id != $stInfo->class_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (empty($stInfo->id) && !empty($ctInfo->id)) {
                            $this->db->where('id', $ctInfo->id); 
                            $this->db->update('subject_timetable', $insert_array);
                        } else {
                            $stfInfo    = $this->db->query("SELECT * FROM `staff` WHERE id = '".$stfId."' ")->row();
                                $error_period[] = '<div class="col-6">'.$stfInfo->employee_id.' - '.$stfInfo->name.'</div>';
                                $error_period[] = '<div class="col-6">'.$stTim.' TO '.$enTim.'</div><hr>';
                        }
                        
                    } else {
                            $insert_array = array(
                                'day'                      => $day,
                                'class_id'                 => $class_id,
                                'section_id'               => $section_id,
                                'subject_group_id'         => $subject_group_id,
                                'subject_group_subject_id' => $this->input->post('subject_' . $total_value),
                                'staff_id'                 => $this->input->post('staff_' . $total_value),
                                'time_from'                => $this->input->post('time_from_' . $total_value),
                                'time_to'                  => $this->input->post('time_to_' . $total_value),
                                'start_time'               => $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true),
                                'end_time'                 => $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true),
                                'room_no'                  => $this->input->post('room_no_' . $total_value),
                                'session_id'               => $session,
                            );
                            if (empty($stInfo->id)) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id == $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id == $stInfo->subject_group_id) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (!empty($stInfo->id) && $class_id == $stInfo->class_id && $section_id != $stInfo->section_id && $subject_group_id != $stInfo->subject_group_id ) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } elseif (empty($stInfo->id) && !empty($ctInfo->id)) {
                                $this->db->where('id', $prev_id);
                                $this->db->update('subject_timetable', $insert_array);
                            } else {
                                //$stfInfo    = $this->db->query("SELECT * FROM `staff` WHERE id = '".$stfId."' ")->row();
                                //$error_period[] = '<div class="col-6">'.$stfInfo->employee_id.' - '.$stfInfo->name.'</div>';
                                //$error_period[] = '<div class="col-6">'.$stTim.' TO '.$enTim.'</div><hr>';
                            }
                    }
                    $error_period[] = '</div>';
                    
                    
                    
                    //else {
                        $preserve_array[] = $prev_id;
                    //     $update_array[]   = array(
                    //         'id'                       => $prev_id,
                    //         'day'                      => $day,
                    //         'class_id'                 => $class_id,
                    //         'section_id'               => $section_id,
                    //         'subject_group_id'         => $subject_group_id,
                    //         'subject_group_subject_id' => $this->input->post('subject_' . $total_value),
                    //         'staff_id'                 => $this->input->post('staff_' . $total_value),
                    //         'time_from'                => $this->input->post('time_from_' . $total_value),
                    //         'time_to'                  => $this->input->post('time_to_' . $total_value),

                    //         'start_time'               => $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true),
                    //         'end_time'                 => $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true),
                    //         'room_no'                  => $this->input->post('room_no_' . $total_value),
                    //         'session_id'               => $session,
                    //     );
                    // }
                    
                    
                }
                    
                }
            }

            //$delete_array = array_diff($old_input, $preserve_array);
            //$result       = $this->subjecttimetable_model->add($delete_array, $insert_array, $update_array);
            
            if ($result) {
                //$json_array = array('status' => '1', 'error' => '', 'message' => $this->lang->line('success_message'));
            } else {
                //$json_array = array('status' => '2', 'error' => '', 'message' => $this->lang->line('something_went_wrong'));
            }
            
            $json_array = array('status' => '1', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        
        if (!empty($error_period)) {
            $json_array['message']  = $error_period;
        }

       $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json_array));
    }
     public function deleterow()
    {
		$prev_id = $this->input->post('prev_id');
		 
		 $this->db->where('id', $prev_id);
		 $this->db->delete('subject_timetable');
	}
    public function copygroup()
    {
        $json = array();
        $this->form_validation->set_rules('c_subject_group_id', $this->lang->line('subject_group'), 'trim|required');
        $this->form_validation->set_rules('day', $this->lang->line('day'), 'trim|required');
        $this->form_validation->set_rules('c_class_id', $this->lang->line('class'), 'trim|required');
        $this->form_validation->set_rules('c_section_id', $this->lang->line('section'), 'trim|required');
        $total_rows=$this->input->post('total_row');
        if(!isset($total_rows)){
            $this->form_validation->set_rules('rows', 'class_timetable', 'trim|required',array('required' => $this->lang->line('you_have_not_selected_any_row')));
        }
        if(isset($total_rows) && !empty($total_rows)){

        foreach ($this->input->post('total_row') as $key => $value) {
            $this->form_validation->set_rules('subject_' . $value, 'Subject', 'trim|required');
            $this->form_validation->set_rules('staff_' . $value, 'Staff', 'trim|required');
            $this->form_validation->set_rules('time_from_' . $value, 'Time From', 'trim|required');
            $this->form_validation->set_rules('time_to_' . $value, 'Time To', 'trim|required');
        }
        }

        if (!$this->form_validation->run()) {
            $json = array(
                'subject_group_id' => form_error('c_subject_group_id', '<li>', '</li>'),
                'day'              => form_error('day', '<li>', '</li>'),
                'class_id'         => form_error('c_class_id', '<li>', '</li>'),
                'section_id'       => form_error('c_section_id', '<li>', '</li>'),
                'rows'       => form_error('rows', '<li>', '</li>'),
            );
if(isset($total_rows) && !empty($total_rows)){
            foreach ($this->input->post('total_row') as $key => $value) {
                $json['subject_' . $value]   = form_error('subject_' . $value, '<li>', '</li>');
                $json['staff_' . $value]     = form_error('staff_' . $value, '<li>', '</li>');
                $json['time_from_' . $value] = form_error('time_from_' . $value, '<li>', '</li>');
                $json['time_to_' . $value]   = form_error('time_to_' . $value, '<li>', '</li>');
            }
        }

            $json_array = array('status' => '0', 'error' => $json);
        } else {
            
        $schStngInfo        = $this->db->query("SELECT * FROM `sch_settings` WHERE id = '1'  ")->row();
        $getDaysnameList         = $this->customlib->getDaysname();
        foreach ($getDaysnameList as $days_key => $day) {
            $o_class_id         = $this->input->post('class_id');
            $o_section_id       = $this->input->post('section_id');
            $o_subject_group_id = $this->input->post('subject_group_id');
            $copy_type          = $this->input->post('copy_type');
            
            
            if ($copy_type == 1) {
            
            $class_id         = $this->input->post('c_class_id');
            $section_id       = $this->input->post('c_section_id');
            $subject_group_id = $this->input->post('c_subject_group_id');
            $total_row        = $this->input->post('total_row');
            $session          = $this->setting_model->getCurrentSession();
            $prev_array       = $this->input->post('prev_array');
            if (isset($prev_array)) {
                foreach ($prev_array as $prev_arr_key => $prev_arr_value) {
                    $old_input[] = $prev_arr_value;
                }
            }
            $preserve_array = array();
            if (isset($total_row)) {
                foreach ($total_row as $total_key => $total_value) {
                    
                    $prev_id = $this->input->post('prev_id_' . $total_value);
                    
                    $stfId      = $this->input->post('staff_' . $total_value);
                    $stTim      = $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true);
                    $enTim      = $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true);
                    $stInfo     = $this->db->query("SELECT * FROM `subject_timetable` WHERE day = '".$day."' AND staff_id = '".$stfId."' AND start_time >= '".$stTim."'  AND end_time <= '".$enTim."' AND class_id = '".$class_id."' AND section_id = '".$section_id."'  AND subject_group_id = '".$subject_group_id."' AND session_id = '".$session."' ")->row();
                    
                    $sgsid      = $this->input->post('subject_' . $total_value);
                    $sgInfo     = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$sgsid."' AND session_id = '".$session."' ")->row();
                    
                    if ($sgInfo->subject_group_id != $subject_group_id) {
                        $csgInfo    = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$subject_group_id."' AND session_id = '".$session."' AND subject_id = '".$sgInfo->subject_id."' ")->row();
                        $sgsid      = $csgInfo->id;
                    }
                      
                        $insert_array = array(
                            'day'                      => $day,
                            'class_id'                 => $class_id,
                            'section_id'               => $section_id,
                            'subject_group_id'         => $subject_group_id,
                            'subject_group_subject_id' => $sgsid,
                            'staff_id'                 => $this->input->post('staff_' . $total_value),
                            'time_from'                => $this->input->post('time_from_' . $total_value),
                            'time_to'                  => $this->input->post('time_to_' . $total_value),
                            'start_time'               => $this->customlib->timeFormat($this->input->post('time_from_' . $total_value), true),
                            'end_time'                 => $this->customlib->timeFormat($this->input->post('time_to_' . $total_value), true),
                            'room_no'                  => $this->input->post('room_no_' . $total_value),
                            'session_id'               => $session,
                        );
                        if (empty($stInfo->id)) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $stInfo->class_id == $class_id && $stInfo->section_id == $section_id && $subject_group_id != $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } else {
                            $this->db->where('id', $stInfo->tid);
                            $this->db->update('subject_timetable', $insert_array);
                        }
                }
            }
        } else {
            $session          = $this->setting_model->getCurrentSession();
            $prev_record      = $this->db->query("SELECT * FROM `subject_timetable` WHERE day = '".$day."' AND class_id = '".$o_class_id."' AND section_id = '".$o_section_id."'  AND subject_group_id = '".$o_subject_group_id."' AND session_id = '".$session."'  ")->result();
            $class_id         = $this->input->post('c_class_id');
            $section_id       = $this->input->post('c_section_id');
            $subject_group_id = $this->input->post('c_subject_group_id');
            $total_row        = $this->input->post('total_row');
            
            
            
            if (!empty($prev_record)) {
                foreach ($prev_record as $total_key => $pr) {
                    
                    $stInfo     = $this->db->query("SELECT * FROM `subject_timetable` WHERE day = '".$day."' AND staff_id = '".$pr->staff_id."' AND start_time >= '".$pr->start_time."'  AND end_time <= '".$pr->end_time."' AND class_id = '".$class_id."' AND section_id = '".$section_id."'  AND subject_group_id = '".$subject_group_id."' AND session_id = '".$session."' ")->row();
                        
                    $sgsid      = $pr->subject_group_subject_id;
                    $sgInfo     = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$sgsid."' AND session_id = '".$session."' ")->row();
                    
                    if ($sgInfo->subject_group_id != $subject_group_id) {
                        $csgInfo    = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$subject_group_id."' AND session_id = '".$session."' AND subject_id = '".$sgInfo->subject_id."' ")->row();
                        $sgsid      = $csgInfo->id;
                    }
                        
                        $insert_array = array(
                            'day'                      => $day,
                            'class_id'                 => $class_id,
                            'section_id'               => $section_id,
                            'subject_group_id'         => $subject_group_id,
                            'subject_group_subject_id' => $sgsid,
                            'staff_id'                 => $pr->staff_id,
                            'time_from'                => $pr->time_from,
                            'time_to'                  => $pr->time_to,
                            'start_time'               => $pr->start_time,
                            'end_time'                 => $pr->end_time, 
                            'room_no'                  => $pr->room_no,
                            'session_id'               => $session,
                        );
                        if (empty($stInfo->id)) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } elseif (!empty($stInfo->id) && $stInfo->class_id == $class_id && $stInfo->section_id == $section_id && $subject_group_id != $stInfo->subject_group_id) {
                            $this->db->insert('subject_timetable', $insert_array);
                        } else {
                            $this->db->where('id', $stInfo->id);
                            $this->db->update('subject_timetable', $insert_array);
                        }
                }
            }
            
        }
        
        }
            
        $json_array = array('status' => '1', 'error' => '', 'message' => $this->lang->line('success_message'));
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json_array));
    }

    public function getteachertimetable()
    {
        $json = array();
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('teacher', $this->lang->line('teacher'), 'trim|required');

        if (!$this->form_validation->run()) {
            $json = array(
                'teacher' => form_error('teacher'),
            );

            $json_array = array('status' => '0', 'error' => $json);
        } else {
            $staff_id          = $this->input->post('teacher');
            $data['staff_id']          = $this->input->post('teacher');
            $data['timetable'] = array();
            $days              = $this->customlib->getDaysname();

            foreach ($days as $day_key => $day_value) {
                $data['timetable'][$day_value] = $this->subjecttimetable_model->getByStaffandDay($staff_id, $day_key);
            }

            $timetable_page = $this->load->view('admin/timetable/_partialgetteachertimetable', $data, true);
            $json_array = array('status' => '1', 'error' => '', 'message' => $timetable_page);
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json_array));
    }
    
    public function printclasstimetable()
    {


        $class_id    = $this->input->post('class_id');
        $section_id  = $this->input->post('section_id');
        $days        = $this->customlib->getDaysname();
        $class_section=$this->section_model->getClassAndSectionNameByClassIDSectionID($class_id, $section_id);
        $data['class_section']=$class_section;
        $days_record = array();
        foreach ($days as $day_key => $day_value) {

            $days_record[$day_key] = $this->subjecttimetable_model->getSubjectByClassandSectionDay($class_id, $section_id, $day_key);
        }
        $data['timetable']=$days_record;
        $timetable_page = $this->load->view('admin/timetable/_printclasstimetable', $data, true);
        $json_array = array('status' => '1', 'error' => '', 'page' => $timetable_page);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json_array));
    }
    
    public function printteachertimetable()
    {

        $staff_id          = $this->input->post('staff_id');
        $staff = $this->staff_model->get($staff_id);
        $data['staff'] = $staff;
        $data['timetable'] = array();
        $days              = $this->customlib->getDaysname();

        foreach ($days as $day_key => $day_value) {
            $data['timetable'][$day_value] = $this->subjecttimetable_model->getByStaffandDay($staff_id, $day_key);
        }

        $timetable_page = $this->load->view('admin/timetable/_printteachertimetable', $data, true);
        $json_array = array('status' => '1', 'error' => '', 'page' => $timetable_page);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json_array));
    }

}
