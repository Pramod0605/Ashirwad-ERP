<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lessonplan extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('Customlib');
        $this->load->helper('general');
        $this->sch_current_session = $this->setting_model->getCurrentSession();
        $this->staff_id            = $this->customlib->getStaffID();
        $this->load->library("datatables");
    }
    
    public function getByLesson()
    {
        // $class_id   = $this->input->get('class_id');
        // $section_id = $this->input->get('section_id');
        $subject_id = $this->input->get('subject_id');
        
        $data     = $this->lessonplan_model->getLessonBySubject($class_id = NULL, $section_id = NULL, $subject_id);
        echo json_encode($data);
    }

    public function index()
    {
        if (!($this->rbac->hasPrivilege('manage_syllabus_status', 'can_view'))) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'lessonplan');
        $this->session->set_userdata('sub_menu', 'admin/lessonplan');
        $data                     = array();
        $class                    = $this->class_model->get();
        $data['classlist']        = $class;
        $data['class_id']         = "";
        $data['section_id']       = "";
        $data['subject_group_id'] = "";
        $data['subject_id']       = "";
        $data['subject_name']     = "";
        $data['lessons']          = array();
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_id', $this->lang->line('subject'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {

        } else {
            $data['class_id']               = $_POST['class_id'];
            $data['section_id']             = $_POST['section_id'];
            $data['subject_group_id']       = $_POST['subject_group_id'];
            $data['subject_id']             = $_POST['subject_id'];
            $subject_details                = $this->lessonplan_model->get_subjectNameBySubjectGroupSubjectId($_POST['subject_id']);
            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
            $data['subject_name']           = $subject_details['name'] . " (" . $subject_details['code'] . ")";
            $lessonlist                     = $this->lessonplan_model->getlessonBysubjectid($_POST['subject_id'], $subject_group_class_sectionsId['id']);

            foreach ($lessonlist as $key => $value) {

                $data['lessons'][$value['id']] = $value;
                $topics                        = $this->lessonplan_model->gettopicBylessonid($value['id'], $this->sch_current_session);
                foreach ($topics as $topic_key => $topic_value) {
                    $data['lessons'][$value['id']]['topic'][] = $topic_value;
                }
            }
        }

        $data['status'] = array('1' => '<span class="label " style="background:#0e0e0e">' . $this->lang->line('complete') . '</span>', '0' => '<span class="label " style="background:#b3b3b3">' . $this->lang->line('incomplete') . '</span>');
        $this->load->view('layout/header');
        $this->load->view('admin/lessonplan/index', $data);
        $this->load->view('layout/footer');
    }

    public function copylesson()
    {
        if (!($this->rbac->hasPrivilege('copy_old_lesson', 'can_view'))) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'lessonplan');
        $this->session->set_userdata('sub_menu', 'admin/lessonplan');
        $data                    = array();
        $data['current_session'] = $this->sch_current_session;

        $data['no_record']        = '0';
        $session_result           = $this->session_model->get();
        $data['sessionlist']      = $session_result;
        $class                    = $this->class_model->get();
        $data['classlist']        = $class;
        $data['class_id']         = "";
        $data['section_id']       = "";
        $data['subject_group_id'] = "";
        $data['subject_id']       = "";
        $data['subject_name']     = "";
        $data['lessons']          = array();
         

        $this->form_validation->set_rules('old_session_id', $this->lang->line('session'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('old_class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('old_section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('old_subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('old_subject_id', $this->lang->line('subject'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == true) {

      
            $old_session_id             = $this->input->post('old_session_id');
            $old_class_id               = $this->input->post('old_class_id');
            $old_section_id             = $this->input->post('old_section_id');
            $old_subject_group_id       = $this->input->post('old_subject_group_id');
            $old_subject_id             = $this->input->post('old_subject_id');
            $subject_details                = $this->lessonplan_model->get_subjectNameBySubjectGroupSubjectId($old_subject_id);
            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($old_class_id, $old_section_id, $old_subject_group_id,$old_session_id);
            if ($subject_details['code'] == '') {
                $data['subject_name'] = $subject_details['name'];
            } else {
                $data['subject_name'] = $subject_details['name'] . " (" . $subject_details['code'] . ")";
            }
            $lessonlist        = $this->lessonplan_model->getlessonBysubjectid($old_subject_id, $subject_group_class_sectionsId['id']);
          
            $data['no_record'] = '1';
            foreach ($lessonlist as $key => $value) {
                $data['no_record']             = '2';
                $data['lessons'][$value['id']] = $value;
                $topics                        = $this->lessonplan_model->gettopicBylessonid($value['id'], $old_session_id );
                foreach ($topics as $topic_key => $topic_value) {
                    $data['lessons'][$value['id']]['topic'][] = $topic_value;
                }
            }
        }

        $data['status'] = array('1' => '<span class="label " style="background:#0e0e0e">' . $this->lang->line('completed') . '</span>', '0' => '<span class="label " style="background:#b3b3b3">' . $this->lang->line('incomplete') . '</span>');
        $this->load->view('layout/header');
        $this->load->view('admin/lessonplan/copylesson', $data);
        $this->load->view('layout/footer');
    }

    public function lesson()
    {
        if (!($this->rbac->hasPrivilege('lesson', 'can_view'))) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'lessonplan');
        $this->session->set_userdata('sub_menu', 'admin/lessonplan/lesson');
        $class = $this->class_model->get();

        $data['classlist'] = $class;
        foreach ($class as $class_key => $class_value) {
            $data['class_array'][] = $class_value['id'];
        }
        $carray                   = array();
        $data['class_id']         = "";
        $data['section_id']       = "";
        $data['subject_group_id'] = "";
        $data['subject_id']       = "";
        $userdata                 = $this->customlib->getUserData();
        $role_id                  = $userdata["role_id"];
        $staff_id                 = $userdata["id"];

        $this->load->view('layout/header');
        $this->load->view('admin/lessonplan/lesson', $data);
        $this->load->view('layout/footer');
    }

    public function createlesson()
    {
        $data['title'] = 'Add Library';
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_id', $this->lang->line('subject'), 'trim|required|xss_clean');

        $validate   = 1;
        $isManual   = 1;
        if (!empty($_POST['lessons'])) {
            foreach ($_POST['lessons'] as $lessonkey => $lessonvalue) {
                if ($lessonvalue == '') {
                    $validate = 0;
                    $validate = 0;
                    $isManual = 0;
                }
            }
        } else {
            $validate = 0;
            $isManual = 0;
        }
        
        if (isset($_FILES["lt_file"]) && !empty($_FILES['lt_file']['name']) && $_FILES["lt_file"]["size"] > 0) {
            $validate = 1;
        }

        if ($this->form_validation->run() == false) {
            $msg = array(
                'class_id'         => form_error('class_id'),
                'section_id'       => form_error('section_id'),
                'subject_group_id' => form_error('subject_group_id'),
                'subject_id'       => form_error('subject_id'),
            );
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } elseif ($validate == 0) {
            $msg   = array('lesson' => $this->lang->line('lesson_name_field_is_required'));
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } else {
            if ($isManual == 1) {
                
                $basesubInfo   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$_POST['subject_id']."' ")->row();
                
                $allClsSecSubGroupGroups = groupByClassSectionSubjectGroup($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
                if (!empty($allClsSecSubGroupGroups)) {
                    foreach ($allClsSecSubGroupGroups as $cssggroup) {
                        $gInfos = groupInfo($cssggroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($gInfo->class_id, $gInfo->section_id, $gInfo->subject_group_id);
                            $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$_POST['subject_id']."' ")->row();
                            $sgsInfo2   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$sgsInfo1->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            foreach ($_POST['lessons'] as $key => $value) {
                            $sLsnExst   = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$sgsInfo2->id."' AND subject_group_class_sections_id = '".$subject_group_class_sectionsId['id']."' AND name = '".$value."' ")->row();
                            if (empty($sLsnExst)) {
                            $data = array(
                                'subject_group_subject_id'        => $sgsInfo2->id,
                                'name'                            => $value,
                                'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                                'session_id'                      => $this->sch_current_session,
                            );
                            $this->lessonplan_model->add_lesson($data);
                            }
                            }
                        }
                    }
                }
                
                $allClsSecSubGroupSubjectGroups = groupByClassSectionSubjectGroupSubject($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id'], $basesubInfo->subject_id);
                if (!empty($allClsSecSubGroupSubjectGroups)) {
                    foreach ($allClsSecSubGroupSubjectGroups as $cssgsgroup) {
                        $gInfos = groupInfo($cssgsgroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($gInfo->class_id, $gInfo->section_id, $gInfo->subject_group_id);
                            $sgsInfo2   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$gInfo->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            foreach ($_POST['lessons'] as $key => $value) {
                            $sLsnExst   = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$sgsInfo2->id."' AND subject_group_class_sections_id = '".$subject_group_class_sectionsId['id']."' AND name = '".$value."' ")->row();
                            if (empty($sLsnExst)) {
                            $data = array(
                                'subject_group_subject_id'        => $sgsInfo2->id,
                                'name'                            => $value,
                                'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                                'session_id'                      => $this->sch_current_session,
                            );
                            $this->lessonplan_model->add_lesson($data);
                            }
                            }
                        }
                    }
                } 
                
                
                if (empty($allClsSecSubGroupGroups) && empty($allClsSecSubGroupSubjectGroups)) {
                    $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
                    foreach ($_POST['lessons'] as $key => $value) {
                        $sLsnExst   = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$_POST['subject_id']."' AND subject_group_class_sections_id = '".$subject_group_class_sectionsId['id']."' AND name = '".$value."' ")->row();
                        if (empty($sLsnExst)) {
                        $data = array(
                            'subject_group_subject_id'        => $_POST['subject_id'],
                            'name'                            => $value,
                            'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                            'session_id'                      => $this->sch_current_session,
                        );
                        $this->lessonplan_model->add_lesson($data);
                        }
                    }
                }
            } else {
                
                $basesubInfo   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$_POST['subject_id']."' ")->row();
                
                $allClsSecSubGroupGroups = groupByClassSectionSubjectGroup($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
                if (!empty($allClsSecSubGroupGroups)) {
                    foreach ($allClsSecSubGroupGroups as $cssggroup) {
                        $gInfos = groupInfo($cssggroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($gInfo->class_id, $gInfo->section_id, $gInfo->subject_group_id);
                            $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$_POST['subject_id']."' ")->row();
                            $sgsInfo2   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$sgsInfo1->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            
                            $fileName   = $_FILES["lt_file"]["tmp_name"];
                            $file       = fopen($fileName, "r");
                            $flag       = true;
                            while (($column = fgetcsv($file, 10000, ",")) !== false) {
                                if ($flag) {
                                    $flag = false;
                                    continue;
                                }
                                $lesson_name    = $column['0'];
                                $topic_name     = $column['1'];
                                
                                $linfo = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$sgsInfo2->id."' AND subject_group_class_sections_id = '".$subject_group_class_sectionsId['id']."' AND session_id = '".$this->sch_current_session."' AND name LIKE '".$lesson_name."' ")->row();
                                if (empty($linfo)) {
                                $ldata = array(
                                    'subject_group_subject_id'        => $sgsInfo2->id,
                                    'name'                            => $lesson_name,
                                    'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                                    'session_id'                      => $this->sch_current_session,
                                );
                                $lessonId = $this->lessonplan_model->add_lesson($ldata);
                                $tdata = array(
                                    'lesson_id'  => $lessonId,
                                    'name'       => $topic_name,
                                    'session_id' => $this->sch_current_session,
                                    'complete_date' => NULL,
                                );
                                $this->lessonplan_model->add_topic($tdata);
                                }
                            }
                        }
                    }
                }
                
                $allClsSecSubGroupSubjectGroups = groupByClassSectionSubjectGroupSubject($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id'], $basesubInfo->subject_id);
                if (!empty($allClsSecSubGroupSubjectGroups)) {
                    foreach ($allClsSecSubGroupSubjectGroups as $cssgsgroup) {
                        $gInfos = groupInfo($cssgsgroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($gInfo->class_id, $gInfo->section_id, $gInfo->subject_group_id);
                            $sgsInfo2   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$gInfo->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            
                            $fileName   = $_FILES["lt_file"]["tmp_name"];
                            $file       = fopen($fileName, "r");
                            $flag       = true;
                            while (($column = fgetcsv($file, 10000, ",")) !== false) {
                                if ($flag) {
                                    $flag = false;
                                    continue;
                                }
                                $lesson_name    = $column['0'];
                                $topic_name     = $column['1'];
                                
                                $linfo = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$sgsInfo2->id."' AND subject_group_class_sections_id = '".$subject_group_class_sectionsId['id']."' AND session_id = '".$this->sch_current_session."' AND name LIKE '".$lesson_name."' ")->row();
                                if (empty($linfo)) {
                                $ldata = array(
                                    'subject_group_subject_id'        => $sgsInfo2->id,
                                    'name'                            => $lesson_name,
                                    'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                                    'session_id'                      => $this->sch_current_session,
                                );
                                $lessonId = $this->lessonplan_model->add_lesson($ldata);
                                $tdata = array(
                                    'lesson_id'  => $lessonId,
                                    'name'       => $topic_name,
                                    'session_id' => $this->sch_current_session,
                                    'complete_date' => NULL,
                                );
                                $this->lessonplan_model->add_topic($tdata);
                                }
                            }
                            
                        }
                    }
                } 
                
                if (empty($allClsSecSubGroupGroups) && empty($allClsSecSubGroupSubjectGroups)) {
                    $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
                    $fileName   = $_FILES["lt_file"]["tmp_name"];
                    $file       = fopen($fileName, "r");
                    $flag       = true;
                    while (($column = fgetcsv($file, 10000, ",")) !== false) {
                        if ($flag) {
                            $flag = false;
                            continue;
                        }
                        $lesson_name    = $column['0'];
                        $topic_name     = $column['1'];
                        $linfo = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$_POST['subject_id']."' AND subject_group_class_sections_id = '".$subject_group_class_sectionsId['id']."' AND session_id = '".$this->sch_current_session."' AND name LIKE '".$lesson_name."' ")->row();
                        if (empty($linfo)) {
                        $ldata = array(
                            'subject_group_subject_id'        => $_POST['subject_id'],
                            'name'                            => $lesson_name,
                            'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                            'session_id'                      => $this->sch_current_session,
                        );
                        $lessonId = $this->lessonplan_model->add_lesson($ldata);
                        $tdata = array(
                            'lesson_id'  => $lessonId,
                            'name'       => $topic_name,
                            'session_id' => $this->sch_current_session,
                            'complete_date' => NULL,
                        );
                        $this->lessonplan_model->add_topic($tdata);
                        }
                    }
                }
            }
            $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        echo json_encode($array);
    }

    public function deletelesson($id)
    {
        if (!($this->rbac->hasPrivilege('lesson', 'can_delete'))) {
            access_denied();
        }
        $this->lessonplan_model->deletelesson($id, $this->sch_current_session);
        redirect('admin/lessonplan/lesson');
    }

    public function deletelessonbulk($id, $subject_group_subject_id)
    {
        if (!($this->rbac->hasPrivilege('lesson', 'can_delete'))) {
            access_denied();
        }
        $this->lessonplan_model->deletelessonbulk($id, $this->sch_current_session, $subject_group_subject_id);
        $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('delete_message'));
        echo json_encode($array);
    }

    public function editlesson($id, $subject_group_subject_id)
    {
        if (!($this->rbac->hasPrivilege('lesson', 'can_edit'))) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'lessonplan');
        $this->session->set_userdata('sub_menu', 'admin/lessonplan/lesson');
        $class             = $this->class_model->get();
        $data['classlist'] = $class;

        foreach ($class as $class_key => $class_value) {
            $data['class_array'][] = $class_value['id'];
        }

        $carray = array();
        $result = $this->lessonplan_model->get($this->sch_current_session, '');
        if (!empty($result)) {
            foreach ($result as $key => $value) {
                $lesson = $this->lessonplan_model->getlesson($value["subject_group_subject_id"], $value["subject_group_class_sections_id"], $this->sch_current_session);
                if ($lesson != '') {
                    $lessonname[$key] = $lesson;
                }
            }
        }
        $data['result'] = $result;
        if (!empty($lessonname)) {
            $data['lessonname'] = $lessonname;
        }

        $editresult = $this->lessonplan_model->get($this->sch_current_session, $id, $subject_group_subject_id);
        $editlesson = $this->lessonplan_model->getlesson($editresult["subject_group_subject_id"], $editresult["subject_group_class_sections_id"], $this->sch_current_session);

        $data['editlessonname']                 = $editlesson;
        $data['class_id']                       = $editresult['classid'];
        $data['section_id']                     = $editresult['sectionid'];
        $data['subject_group_id']               = $editresult['subjectgroupsid'];
        $data['subject_id']                     = $editresult['subjectid'];
        $data['lesson_subject_group_subjectid'] = $editresult['subject_group_subject_id'];

        $this->load->view('layout/header');
        $this->load->view('admin/lessonplan/editlesson', $data);
        $this->load->view('layout/footer');
    }

    public function saveCopyLesson()
    {

        $data['title'] = 'Add Library';
        $this->form_validation->set_rules('topic_id[]', $this->lang->line('topic'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');

        $this->form_validation->set_rules('subject_group_subject_id', $this->lang->line('subject'), 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {
            $msg = array(
                'topic_id'                 => form_error('topic_id[]'),
                'class_id'                 => form_error('class_id'),
                'section_id'               => form_error('section_id'),
                'subject_group_subject_id' => form_error('subject_group_id'),
                'subject_id'               => form_error('subject_group_subject_id'),
            );
            $array = array('status' => 0, 'error' => $msg, 'message' => '');
        } else {

            $topic                    = $this->input->post('topic_id');
            $class_id                 = $this->input->post('class_id');
            $section_id               = $this->input->post('section_id');
            $subject_group_id         = $this->input->post('subject_group_id');
            $subject_group_subject_id = $this->input->post('subject_group_subject_id');
            
            
                $basesubInfo   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$_POST['subject_group_subject_id']."' ")->row();
                
                $allClsSecSubGroupGroups = groupByClassSectionSubjectGroup($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
                if (!empty($allClsSecSubGroupGroups)) {
                    foreach ($allClsSecSubGroupGroups as $cssggroup) {
                        $gInfos = groupInfo($cssggroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($gInfo->class_id, $gInfo->section_id, $gInfo->subject_group_id);
                            $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$_POST['subject_id']."' ")->row();
                            $sgsInfo2   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$sgsInfo1->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            
                            foreach ($topic as $topic_key => $topic_value) {
                                $lesson_array = [];
                                $topic_array  = [];
                                $topic_data   = $this->lessonplan_model->gettopicByID($topic_value);
                                $lesson_name  = ($topic_data->lessonname);

                                $lesson_array = array(
                                    'subject_group_subject_id'        => $sgsInfo2->id,
                                    'name'                            => $lesson_name,
                                    'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                                    'session_id'                      => $this->sch_current_session,
                                );
                                $topic_array = array(
                                    'status'     => 0,
                                    'name'       => $topic_data->name,
                                    'lesson_id'  => 0,
                                    'session_id' => $this->sch_current_session,
                                );
                                $insert_id = $this->lessonplan_model->add_copy_lesson($lesson_array,$topic_array);

                            }   
                        }
                    }
                }
                
                $allClsSecSubGroupSubjectGroups = groupByClassSectionSubjectGroupSubject($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id'], $basesubInfo->subject_id);
                if (!empty($allClsSecSubGroupSubjectGroups)) {
                    foreach ($allClsSecSubGroupSubjectGroups as $cssgsgroup) {
                        $gInfos = groupInfo($cssgsgroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($gInfo->class_id, $gInfo->section_id, $gInfo->subject_group_id);
                            $sgsInfo2   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$gInfo->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            
                            foreach ($topic as $topic_key => $topic_value) {
                                $lesson_array = [];
                                $topic_array  = [];
                                $topic_data   = $this->lessonplan_model->gettopicByID($topic_value);
                                $lesson_name  = ($topic_data->lessonname);

                                $lesson_array = array(
                                    'subject_group_subject_id'        => $sgsInfo2->id,
                                    'name'                            => $lesson_name,
                                    'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                                    'session_id'                      => $this->sch_current_session,
                                );
                                $topic_array = array(
                                    'status'     => 0,
                                    'name'       => $topic_data->name,
                                    'lesson_id'  => 0,
                                    'session_id' => $this->sch_current_session,
                                );
                                $insert_id = $this->lessonplan_model->add_copy_lesson($lesson_array,$topic_array);

                            }
                            
                        }
                    }
                } else {
                    $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($class_id, $section_id, $subject_group_id);
                    foreach ($topic as $topic_key => $topic_value) {
                        $lesson_array = [];
                        $topic_array  = [];
                        $topic_data   = $this->lessonplan_model->gettopicByID($topic_value);
                        $lesson_name  = ($topic_data->lessonname);

                        $lesson_array = array(
                            'subject_group_subject_id'        => $subject_group_subject_id,
                            'name'                            => $lesson_name,
                            'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                            'session_id'                      => $this->sch_current_session,
                        );

                        $topic_array = array(
                            'status'     => 0,
                            'name'       => $topic_data->name,
                            'lesson_id'  => 0,
                            'session_id' => $this->sch_current_session,
                        );
                        $insert_id = $this->lessonplan_model->add_copy_lesson($lesson_array,$topic_array);
                    }
                }
                
            $array = array('status' => 1, 'error' => '', 'message' => $this->lang->line('success_message'),'redirect_url'=>site_url('admin/lessonplan/lesson'));
        }
        echo json_encode($array);
    }

    public function updatelesson()
    {
        $can_edit      = 1;
        $data['title'] = 'Add Library';
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_id', $this->lang->line('subject'), 'trim|required|xss_clean');

        $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
        $all_lessons                    = $this->lessonplan_model->getlessonBysubjectid($_POST['subject_id'], $subject_group_class_sectionsId['id']);
        $userdata                       = $this->customlib->getUserData();

        $role_id = $userdata["role_id"];
        if (isset($role_id) && ($userdata["role_id"] == 2) && ($userdata["class_teacher"] == "yes")) {
            $class_section = $this->lessonplan_model->ifclassteacher($_POST['class_id'], $_POST['section_id'], $userdata['id'], $_POST['subject_group_id'], $_POST['subject_id']);

            $can_edit = $class_section;
        }

        $validate = 1;
        foreach ($all_lessons as $lessonkey => $lessonvalue) {
            if (!empty($_POST['lesson_delete'])) {
                if (in_array($lessonvalue['id'], $_POST['lesson_delete'])) {
                    $validate = 1;
                }
            } elseif ($_POST['lessons_' . $lessonvalue['id']] == '') {
                $validate = 0;
            }
        }

        if (isset($_POST['lessons'])) {
            foreach ($_POST['lessons'] as $lessonkey => $lessonvalue) {
                if ($lessonvalue == '') {
                    $validate = 0;
                }
            }
        }
        if (!empty($_POST['lesson_delete'])) {
            if (count($all_lessons) == count($_POST['lesson_delete'])) {
                if (empty($_POST['topic'])) {
                    $validate = 0;
                }
            }
        }

        if ($this->form_validation->run() == false) {
            $msg = array(
                'class_id'         => form_error('class_id'),
                'section_id'       => form_error('section_id'),
                'subject_group_id' => form_error('subject_group_id'),
                'subject_id'       => form_error('subject_id'),
            );
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } elseif ($validate == 0) {
            $msg   = array('lesson' => $this->lang->line('lesson_name_field_is_required'));
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } elseif ($can_edit == 0) {
            $msg   = array('lesson' => $this->lang->line('you_are_not_authorised_to_update_lessons'));
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } else {

            if (isset($_POST['lesson_delete'])) {
                foreach ($_POST['lesson_delete'] as $delete_key => $delete_value) {
                    $this->lessonplan_model->deletelesson($delete_value, $this->sch_current_session);
                }
            }

            $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
            $all_lessons                    = $this->lessonplan_model->getlessonBysubjectid($_POST['subject_id'], $subject_group_class_sectionsId['id']);

            foreach ($all_lessons as $lessonkey => $lessonvalue) {
                if (isset($_POST['lessons_' . $lessonvalue['id']])) {
                    $data = array(
                        'subject_group_subject_id'        => $_POST['subject_id'],
                        'name'                            => $_POST['lessons_' . $lessonvalue['id']],
                        'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                        'session_id'                      => $this->sch_current_session,
                        'id'                              => $lessonvalue['id'],
                    );

                    $this->lessonplan_model->add_lesson($data);
                }
            }

            if (isset($_POST['lessons'])) {
                foreach ($_POST['lessons'] as $key => $value) {
                    $data = array(
                        'subject_group_subject_id'        => $_POST['subject_id'],
                        'name'                            => $value,
                        'subject_group_class_sections_id' => $subject_group_class_sectionsId['id'],
                        'session_id'                      => $this->sch_current_session,
                    );

                    $this->lessonplan_model->add_lesson($data);
                }
            }
            $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        echo json_encode($array);
    }

    //==================================Topic Start===============================
    public function topic()
    {
        if (!($this->rbac->hasPrivilege('topic', 'can_view'))) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'lessonplan');
        $this->session->set_userdata('sub_menu', 'admin/lessonplan/topic');
        $class             = $this->class_model->get();
        $data['classlist'] = $class;
        foreach ($class as $class_key => $class_value) {
            $data['class_array'][] = $class_value['id'];
        }
        $carray                   = array();
        $data['class_id']         = "";
        $data['section_id']       = "";
        $data['subject_group_id'] = "";
        $data['subject_id']       = "";
        $this->load->view('layout/header');
        $this->load->view('admin/lessonplan/topic', $data);
        $this->load->view('layout/footer');
    }

    public function getlessonBysubjectid($sub_id)
    {
        $subject_group_class_sectionsId = $this->lessonplan_model->getsubject_group_class_sectionsId($_POST['class_id'], $_POST['section_id'], $_POST['subject_group_id']);
        $data                           = $this->lessonplan_model->getlessonBysubjectid($sub_id, $subject_group_class_sectionsId['id']);

        echo json_encode($data);
    }

    public function getlessonBylessonid($lesson_id)
    {
        $data = $this->lessonplan_model->getlessonBylessonid($lesson_id);
        echo json_encode($data);
    }

    public function getlessonBysubjectidedit($sub_id)
    {
        $subject_group_class_sections_id = $_POST['subject_group_class_sections_id'];
        $data                            = $this->lessonplan_model->getlessonBysubjectidedit($sub_id, $subject_group_class_sections_id);
        echo json_encode($data);
    }
    
    public function getlessonBysubjectideditexport($sub_id, $subject_group_class_sections_id, $staff_id){
        $filename = 'lp_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
        
        
        $header                 = array("lId"); 
        $header[]               = "tId";
        $header[]               = "sId";
        $header[]               = "Lesson";
        $header[]               = "Topic";
        $header[]               = "SubTopic";
        $header[]               = "Date";
        $header[]               = "TimeFrom";
        $header[]               = "TimeTo";
        $file                   = fopen('php://output', 'w');
        fputcsv($file, $header);
        $row                    = array();
        $sgInfo             = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$sub_id."' ")->row();
        $sgcsInfo           = $this->db->query("SELECT * FROM `subject_group_class_sections` WHERE id = '".$subject_group_class_sections_id."' ")->row();
        $csInfo             = $this->db->query("SELECT * FROM `class_sections` WHERE id = '".$sgcsInfo->class_section_id."' ")->row();
        
        $class_id           = $csInfo->class_id;
        $section_id         = $csInfo->section_id;
        $subject_id         = $sgInfo->subject_id;
        $subject_group_id   = $sgInfo->subject_group_id;
        
        
                
                $allClsSecSubGroupGroups = groupByClassSectionSubjectGroup($class_id, $section_id, $subject_group_id);
                if (!empty($allClsSecSubGroupGroups)) {
                    foreach ($allClsSecSubGroupGroups as $cssggroup) {
                        $gInfos = groupInfo($cssggroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            $sgcsInfo2  = $this->db->query("SELECT * FROM `subject_group_class_sections` WHERE class_section_id = '".$gInfo->class_section_id."' AND subject_group_id = '".$gInfo->subject_group_id."' ")->row();
                            
                            $lessons    = $this->db->select('*')->from('lesson')->where('subject_group_subject_id', $sgsInfo2->id)->where('subject_group_class_sections_id', $sgcsInfo2->id)->get()->result();
                            foreach ($lessons as $lesson) {
                                $topics     = $this->db->select('*')->from('topic')->where('lesson_id', $lesson->id)->get()->result();
                                foreach ($topics as $topic) {
                                    $row[]          = $lesson->id;
                                    $row[]          = $topic->id;
                                    $row[]          = $staff_id;
                                    $row[]          = $lesson->name;
                                    $row[]          = $topic->name;
                                    $row[]          = '';
                                    $row[]          = '';
                                    $row[]          = '';
                                    $row[]          = '';
                                }
                            } 
                        }
                    }
                }
                
                $allClsSecSubGroupSubjectGroups = groupByClassSectionSubjectGroupSubject($class_id, $section_id, $subject_group_id, $subject_id);
                if (!empty($allClsSecSubGroupSubjectGroups)) {
                    foreach ($allClsSecSubGroupSubjectGroups as $cssgsgroup) {
                        $gInfos = groupInfo($cssgsgroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$gInfo->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            $sgcsInfo2  = $this->db->query("SELECT * FROM `subject_group_class_sections` WHERE class_section_id = '".$gInfo->class_section_id."' AND subject_group_id = '".$gInfo->subject_group_id."' ")->row();
                            
                            $lessons    = $this->db->select('*')->from('lesson')->where('subject_group_subject_id', $sgsInfo2->id)->where('subject_group_class_sections_id', $sgcsInfo2->id)->get()->result();
                            foreach ($lessons as $lesson) {
                                $topics     = $this->db->select('*')->from('topic')->where('lesson_id', $lesson->id)->get()->result();
                                foreach ($topics as $topic) {
                                    $row[]          = $lesson->id;
                                    $row[]          = $topic->id;
                                    $row[]          = $staff_id;
                                    $row[]          = $lesson->name;
                                    $row[]          = $topic->name;
                                    $row[]          = '';
                                    $row[]          = '';
                                    $row[]          = '';
                                    $row[]          = '';
                                }
                            }
                        }
                    }
                }
                
        $lessons    = $this->db->select('*')->from('lesson')->where('subject_group_subject_id', $sub_id)->where('subject_group_class_sections_id', $subject_group_class_sections_id)->get()->result();
        foreach ($lessons as $lesson) {
            $topics     = $this->db->select('*')->from('topic')->where('lesson_id', $lesson->id)->get()->result();
            foreach ($topics as $topic) {
                $row[]          = $lesson->id;
                $row[]          = $topic->id;
                $row[]          = $staff_id;
                $row[]          = $lesson->name;
                $row[]          = $topic->name;
                $row[]          = '';
                $row[]          = '';
                $row[]          = '';
                $row[]          = '';
            }
        }
        fputcsv($file, $row);
        fclose($file); 
        exit; 
        
    }

    public function createtopic()
    {
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_id', $this->lang->line('subject'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('lesson_id', $this->lang->line('lesson'), 'trim|required|xss_clean');

        $validate = 1;
        if (!empty($_POST['topic'])) {
            foreach ($_POST['topic'] as $topickey => $topicvalue) {
                if ($topicvalue == '') {
                    $validate = 0;
                }
            }
        } else {
            $validate = 0;
        }
        if ($this->form_validation->run() == false) {

            $msg = array(
                'class_id'         => form_error('class_id'),
                'section_id'       => form_error('section_id'),
                'subject_group_id' => form_error('subject_group_id'),
                'subject_id'       => form_error('subject_id'),
                'lesson_id'        => form_error('lesson_id'),
            );

            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } elseif ($validate == 0) {
            $msg   = array('topic' => $this->lang->line('topic_name_field_is_required'));
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } else {

            foreach ($_POST['topic'] as $key => $value) {
                
                
                
                
                $data = array(
                    'lesson_id'  => $_POST['lesson_id'],
                    'name'       => $value,
                    'session_id' => $this->sch_current_session,
                    'complete_date' => NULL,
                );
                
                
                $lsnInfo    = $this->db->query("SELECT * FROM `lesson` WHERE id = '".$_POST['lesson_id']."' ")->row();
                $sgsInfo    = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE id = '".$lsnInfo->subject_group_subject_id."' ")->row();
                $sgcsInfo   = $this->db->query("SELECT * FROM `subject_group_class_sections` WHERE id = '".$lsnInfo->subject_group_class_sections_id."' ")->row();
                $csInfo     = $this->db->query("SELECT * FROM `class_sections` WHERE id = '".$sgcsInfo->class_section_id."' ")->row();
                
                $allClsSecSubGroupGroups        = groupByClassSectionSubjectGroup($csInfo->class_id, $csInfo->section_id, $sgsInfo->subject_group_id);
                $allClsSecSubGroupSubjectGroups = groupByClassSectionSubjectGroupSubject($csInfo->class_id, $csInfo->section_id, $sgsInfo->subject_group_id, $sgsInfo->subject_id);
                if (empty($allClsSecSubGroupGroups) && empty($allClsSecSubGroupSubjectGroups)) {
                    $this->lessonplan_model->add_topic($data);
                }
                
                if (!empty($allClsSecSubGroupGroups)) {
                    foreach ($allClsSecSubGroupGroups as $cssggroup) {
                        $gInfos = groupInfo($cssggroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            
                            $csInfo2        = $this->db->query("SELECT * FROM `class_sections` WHERE class_id = '".$gInfo->class_id."' AND section_id = '".$gInfo->section_id."' ")->row();
                            $sgcsInfo2      = $this->db->query("SELECT * FROM `subject_group_class_sections` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND class_section_id = '".$csInfo2->id."'  AND session_id = '".$this->sch_current_session."' ")->row();
                            $sgsInfo2       = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$sgsInfo->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            $lsnInfo2       = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$sgsInfo2->id."' AND subject_group_class_sections_id = '".$sgcsInfo2->id."' AND name LIKE '".$lsnInfo->name."' AND session_id = '".$this->sch_current_session."' ")->row();
                            
                            $data = array(
                                'lesson_id'  => $lsnInfo2->id,
                                'name'       => $value,
                                'session_id' => $this->sch_current_session,
                                'complete_date' => NULL,
                            );
                            $this->lessonplan_model->add_topic($data);
                        }
                    }
                }
                
                
                if (!empty($allClsSecSubGroupSubjectGroups)) {
                    foreach ($allClsSecSubGroupSubjectGroups as $cssgsgroup) {
                        $gInfos = groupInfo($cssgsgroup->group_id);
                        foreach ($gInfos as $gInfo) {
                            $csInfo2        = $this->db->query("SELECT * FROM `class_sections` WHERE class_id = '".$gInfo->class_id."' AND section_id = '".$gInfo->section_id."' ")->row();
                            $sgcsInfo2      = $this->db->query("SELECT * FROM `subject_group_class_sections` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND class_section_id = '".$csInfo2->id."'  AND session_id = '".$this->sch_current_session."' ")->row();
                            $sgsInfo2       = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$gInfo->subject_id."' AND session_id = '".$this->sch_current_session."' ")->row();
                            $lsnInfo2       = $this->db->query("SELECT * FROM `lesson` WHERE subject_group_subject_id = '".$sgsInfo2->id."' AND subject_group_class_sections_id = '".$sgcsInfo2->id."' AND name LIKE '".$lsnInfo->name."' AND session_id = '".$this->sch_current_session."' ")->row();
                            print_r($csInfo2);
                            $data = array(
                                'lesson_id'  => $lsnInfo2->id,
                                'name'       => $value,
                                'session_id' => $this->sch_current_session,
                                'complete_date' => NULL,
                            );
                            $this->lessonplan_model->add_topic($data);
                        }
                    }
                }
            }
            
            
            $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        echo json_encode($array);
    }

    public function deletetopicbulk($id)
    {
        if (!($this->rbac->hasPrivilege('topic', 'can_delete'))) {
            access_denied();
        }
        $this->lessonplan_model->deletetopicbulk($id, $this->sch_current_session);
        redirect('admin/lessonplan/topic');
    }

    public function edittopic($id)
    {
        if (!($this->rbac->hasPrivilege('topic', 'can_edit'))) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'lessonplan');
        $this->session->set_userdata('sub_menu', 'admin/lessonplan/topic');
        $class             = $this->class_model->get();
        $data['classlist'] = $class;
        foreach ($class as $class_key => $class_value) {
            $data['class_array'][] = $class_value['id'];
        }
        $carray = array();

        $result = $this->lessonplan_model->gettopic($this->sch_current_session, '');

        if (!empty($result)) {
            foreach ($result as $key => $value) {
                $topic             = $this->lessonplan_model->gettopicBylessonid($value["lesson_id"], $this->sch_current_session);
                $topicresult[$key] = $topic;
            }
        }

        $data['result'] = $result;
        if (!empty($topicresult)) {
            $data['topicresult'] = $topicresult;
        }

        $editresult                              = $this->lessonplan_model->gettopic($this->sch_current_session, $id);
        $edittopic                               = $this->lessonplan_model->gettopicBylessonid($editresult["lesson_id"], $this->sch_current_session);
        $data['lesson_id']                       = $editresult["lesson_id"];
        $data['topic_lesson_id']                 = $id;
        $data['edittopicname']                   = $edittopic;
        $data['class_id']                        = $editresult['classid'];
        $data['section_id']                      = $editresult['sectionid'];
        $data['subject_group_id']                = $editresult['subjectgroupsid'];
        $data['subject_id']                      = $editresult['subjectid'];
        $data['lesson_subject_group_subjectid']  = $editresult['subject_group_subject_id'];
        $data['subject_group_class_sections_id'] = $editresult['subject_group_class_sections_id'];

        $this->load->view('layout/header');
        $this->load->view('admin/lessonplan/edittopic', $data);
        $this->load->view('layout/footer');
    }

    public function updatetopic()
    {
        $can_edit = 1;
        $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('section_id', $this->lang->line('section'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_group_id', $this->lang->line('subject_group'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject_id', $this->lang->line('subject'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('lesson_id', $this->lang->line('lesson'), 'trim|required|xss_clean');

        $validate = 1;

        $alltopic = $this->lessonplan_model->gettopicBylessonid($_POST['lesson_id'], $this->sch_current_session);
        $userdata = $this->customlib->getUserData();
        $role_id  = $userdata["role_id"];
        if (isset($role_id) && ($userdata["role_id"] == 2) && ($userdata["class_teacher"] == "yes")) {
            $class_section = $this->lessonplan_model->ifclassteacher($_POST['class_id'], $_POST['section_id'], $this->staff_id, $_POST['subject_group_id'], $_POST['subject_id']);

            $can_edit = $class_section;
        }

        foreach ($alltopic as $topickey => $topicvalue) {
            if (!empty($_POST['topic_delete'])) {
                if (in_array($topicvalue['id'], $_POST['topic_delete'])) {
                    $validate = 1;
                }
            } elseif ($_POST['topic_' . $topicvalue['id']] == '') {
                $validate = 0;
            }
        }

        if (!empty($_POST['topic'])) {
            foreach ($_POST['topic'] as $topickey => $topicvalue) {
                if ($topicvalue == '') {
                    $validate = 0;
                }
            }
        }

        if (!empty($_POST['topic_delete'])) {
            if (count($alltopic) == count($_POST['topic_delete'])) {
                if (empty($_POST['topic'])) {
                    $validate = 0;
                }
            }
        }

        if ($this->form_validation->run() == false) {
            $msg = array(
                'class_id'         => form_error('class_id'),
                'section_id'       => form_error('section_id'),
                'subject_group_id' => form_error('subject_group_id'),
                'subject_id'       => form_error('subject_id'),
                'lesson_id'        => form_error('lesson_id'),
            );
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } elseif ($validate == 0) {
            $msg   = array('topic' => $this->lang->line('topic_name_field_is_required'));
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } elseif ($can_edit == 0) {
            $msg   = array('topic' => $this->lang->line('you_are_not_authorised_to_update_topics'));
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } else {

            if (isset($_POST['topic_delete'])) {
                foreach ($_POST['topic_delete'] as $delete_key => $delete_value) {
                    $this->lessonplan_model->deletetopic($delete_value, $this->sch_current_session);
                }
            }

            $alltopic = $this->lessonplan_model->gettopicBylessonid($_POST['lesson_id'], $this->sch_current_session);

            foreach ($alltopic as $topickey => $topicvalue) {
                if (isset($_POST['topic_' . $topicvalue['id']])) {
                    $data = array(
                        'lesson_id'  => $_POST['lesson_id'],
                        'name'       => $_POST['topic_' . $topicvalue['id']],
                        'session_id' => $this->sch_current_session,
                        'id'         => $topicvalue['id'],
                    );

                    $this->lessonplan_model->add_topic($data);
                }
            }
            if (isset($_POST['topic'])) {
                foreach ($_POST['topic'] as $key => $value) {
                    $data = array(
                        'lesson_id'  => $_POST['lesson_id'],
                        'name'       => $value,
                        'session_id' => $this->sch_current_session,
                    );

                    $this->lessonplan_model->add_topic($data);
                }
            }
            $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        echo json_encode($array);
    }

    public function changeTopicStatus()
    {
        $id     = $this->input->post('id');
        $status = $this->input->post('status');
        $data   = array('id' => $id, 'complete_date' => '0000-00-00', 'status' => $status);
        $result = $this->lessonplan_model->changeTopicStatus($data);

        if ($result) {
            $response = array('status' => 1, 'msg' => $this->lang->line('success_message'));
            echo json_encode($response);
        }
    }

    public function topic_completedate()
    {
        $this->form_validation->set_rules('date', $this->lang->line('date'), 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {

            $msg = array(
                'date' => form_error('date'),
            );

            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } else {

            $data = array(
                'complete_date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('date'))),
                'status'        => 1,
                'id'            => $_POST['id'],
            );

            $this->lessonplan_model->changeTopicStatus($data);
            $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        echo json_encode($array);
    }

    //==========================================Syllabus-Assign=========================

    public function gettopicBylessonid($lessonid)
    {
        $data = $this->lessonplan_model->gettopicBylessonid($lessonid, $this->sch_current_session);
        echo json_encode($data);
    }

    public function get_topicbyid()
    {
        $this->lessonplan_model->gettopic($this->sch_current_session, '');
    }

    public function gettopiclist()
    {
        $class             = $this->class_model->get();
        $data['classlist'] = $class;
        foreach ($class as $class_key => $class_value) {

            $class_array[] = $class_value['id'];
        }
        $carray                   = array();
        $data['class_id']         = "";
        $data['section_id']       = "";
        $data['subject_group_id'] = "";
        $data['subject_id']       = "";
        $result                   = $this->lessonplan_model->gettopiclist($this->sch_current_session);
        $m                        = json_decode($result);
        $currency_symbol          = $this->customlib->getSchoolCurrencyFormat();
        $dt_data                  = array();
        if (!empty($m->data)) {
            foreach ($m->data as $key => $value) {
                $topic1    = '';
                $topic     = "";
                $lesson_id = $key;
                $topic     = $this->lessonplan_model->gettopicBylessonid($value->lesson_id, $this->sch_current_session);
                if ($this->rbac->hasPrivilege('topic', 'can_edit')) {
                    $editbtn = "<a href='" . base_url() . "admin/lessonplan/edittopic/" . $value->lesson_id . "'   class='btn btn-default btn-xs'  data-toggle='tooltip'  title='" . $this->lang->line('edit') . "'><i class='fa fa-pencil'></i></a>";
                } else {
                    $editbtn = '';
                }
                if ($this->rbac->hasPrivilege('topic', 'can_delete')) {
                    $deletebtn = "<a href='" . base_url() . "admin/lessonplan/deletetopicbulk/" . $value->lesson_id . "' onclick='return confirm(" . '"' . $this->lang->line('delete_confirm') . '"' . ");'  class='btn btn-default btn-xs'  title='" . $this->lang->line('delete') . "' data-toggle='tooltip'><i class='fa fa-trash'></i></a>";
                } else {
                    $deletebtn = '';
                }

                foreach ($topic as $rl_value) {
                    $topic = $rl_value['name'] . '<br>';
                    $topic1 .= $topic;
                }
                
                $code = '';
                if($value->subjects_code){
                    $code = ' ('.$value->subjects_code.')';
                }

                if (in_array($value->classid, $class_array)) {
                    $lesson_id = $key;
                    $row       = array();
                    $row[]     = $value->cname;
                    $row[]     = $value->sname;
                    $row[]     = $value->sgname;
                    $row[]     = $value->subname .''. $code;
                    $row[]     = $value->lessonname;
                    $row[]     = $topic1;
                    $row[]     = $editbtn . ' ' . $deletebtn;
                    $dt_data[] = $row;
                }
            }
        }

        $json_data = array(
            "draw"            => intval($m->draw),
            "recordsTotal"    => intval($m->recordsTotal),
            "recordsFiltered" => intval($m->recordsFiltered),
            "data"            => $dt_data,
        );
        echo json_encode($json_data);
    }

    public function getlessonlist()
    {
        $class = $this->class_model->get();
        foreach ($class as $class_key => $class_value) {
            $class_array[] = $class_value['id'];
        }
        $result  = $this->lessonplan_model->getlessonlist($this->sch_current_session, '');
        $m       = json_decode($result);
        $dt_data = array();
        if (!empty($m->data)) {
            foreach ($m->data as $key => $value) {

                $topic       = "";
                $lesson_id   = $key;
                $lesson_name = "";
                $lesson      = $this->lessonplan_model->getlesson($value->subject_group_subject_id, $value->subject_group_class_sections_id, $this->sch_current_session);

                if ($this->rbac->hasPrivilege('lesson', 'can_edit')) {
                    $editbtn = "<a href='" . base_url() . "admin/lessonplan/editlesson/" . $value->subject_group_class_sections_id . "/" . $value->subject_group_subject_id . "'   class='btn btn-default btn-xs'  data-toggle='tooltip'  title='" . $this->lang->line('edit') . "'><i class='fa fa-pencil'></i></a>";
                } else { $editbtn = '';}

                if ($this->rbac->hasPrivilege('lesson', 'can_delete')) {
                    $deletebtn = "<a onclick='deletelessonbulk(" . '"' . $value->subject_group_class_sections_id . '"' . ',' . '"' . $value->subject_group_subject_id . '"' . "  )'  class='btn btn-default btn-xs'  title='" . $this->lang->line('delete') . "' data-toggle='tooltip'><i class='fa fa-remove'></i></a>";
                } else {
                    $deletebtn = '';
                }

                if (in_array($value->classid, $class_array)) {

                    foreach ($lesson as $rl_value) {
                        $lesson_name .= $rl_value['name'] . '<br>';
                    };
                    
                    $code ='';
                    if($value->subjects_code){
                        $code = ' ('.$value->subjects_code.')';
                    }
                    $row       = array();
                    $row[]     = $value->cname;
                    $row[]     = $value->sname;
                    $row[]     = $value->sgname;
                    $row[]     = $value->subname.' '.$code;
                    $row[]     = $lesson_name;
                    $row[]     = $editbtn . ' ' . $deletebtn;
                    $dt_data[] = $row;
                }
            }
        }

        $json_data = array(
            "draw"            => intval($m->draw),
            "recordsTotal"    => intval($m->recordsTotal),
            "recordsFiltered" => intval($m->recordsFiltered),
            "data"            => $dt_data,
        );
        echo json_encode($json_data);
    }
}
