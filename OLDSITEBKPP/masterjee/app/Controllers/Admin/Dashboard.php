<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\Admin\StaffModel;

class Dashboard extends AdminController
{
    public function __construct() {
        $this->StaffModel = new StaffModel();
    }

    public function index() {
        $data                   = [];
        $data['uri1']           = $this->request->uri->getSegment(1);
        $data['title'] 		    = 'Home';
        $user_id                = session('userid');
        $class_id               = session('class_id');
        $section_id             = session('section_id');
        $session_id             = site_info()['active_session'];
        
        $data['clsInfo']        = $this->StaffModel->class_info(session('class_id'));
        $data['secInfo']        = $this->StaffModel->section_info(session('section_id'));
        
        if (session('isAdmin') == true) {
            $data['allClsInfo'] =  $this->StaffModel->all_class_info();
        } elseif (session('isTechr') == true && session('isCoord') == false) {
            $data['allClsInfo'] = $this->StaffModel->all_teachers_class_info($user_id, $session_id);
        } elseif (session('isTechr') == false && session('isCoord') == true) {
            $data['allClsInfo'] = $this->StaffModel->all_coordinator_class_info($user_id);
        } elseif (session('isTechr') == true && session('isCoord') == true) {
            $data['allClsInfoa'] = $this->StaffModel->all_coordinator_class_info($user_id);
            $data['allClsInfob'] = $this->StaffModel->all_teachers_class_info($user_id, $session_id);
            $data['allClsInfo'] = array_merge($data['allClsInfoa'], $data['allClsInfob']);
        } else {
            $data['allClsInfo'] = [];
        }
            
        $data['pinfo']  = $this->db->query("SELECT COUNT(id) as t_periods FROM subject_timetable WHERE class_id = '".$class_id."' AND section_id = '".$section_id."' AND session_id = '".$session_id."' AND staff_id = '".session('userid')."' AND day = '".date('l')."' ")->getRow();
        $data['sinfo']  = $this->db->query("SELECT COUNT(id) as t_student FROM student_session WHERE class_id = '".$class_id."' AND section_id = '".$section_id."' AND session_id = '".$session_id."' ")->getRow();
        
        $data['todays_timetable_info']      = $this->StaffModel->teachers_todays_timetable_info(session('class_id'), session('section_id'), site_info()['active_session'], session('userid'));
        
		$data['main_content']	= 'admin/dashboard';
		echo view('admin/include/template_main', $data);
    }
    
    public function getClassSection($id) {
        $user_id                = session('userid');
        $session_id             = site_info()['active_session'];
        if (session('isAdmin') == true) {
            $allClsSecInfo = $this->StaffModel->all_class_section_info($id);
        } elseif (session('isTechr') == true && session('isCoord') == false) {
            $allClsSecInfo = $this->StaffModel->all_teachers_class_section_info($id, $session_id, $user_id);
        } elseif (session('isCoord') == true) {
            $allClsSecInfo = $this->StaffModel->all_class_section_info($id);
        } else {
            $allClsSecInfo = '';
        }
        echo json_encode($allClsSecInfo);
    }
    
    public function updateClassSection() {
        $class_id      = $this->request->getPost('class_id');
		$section_id    = $this->request->getPost('section_id');
		
		$user_data = array(
			'class_id'      => $class_id,
			'section_id'    => $section_id,
		); 
        $this->session->set($user_data);
        
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function getClassSectionStudent($cid, $sid) {
        $students = $this->StaffModel->all_student_info($cid, $sid, site_info()['active_session']);
        echo json_encode($students);
    }
    
}
