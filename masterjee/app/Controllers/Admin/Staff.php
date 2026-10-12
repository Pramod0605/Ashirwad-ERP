<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\Admin\StaffModel;

class Staff extends AdminController
{
    public function __construct() {
        $this->StaffModel = new StaffModel();
    }
    
    public function face_auth() {
        $data                   = [];
        $data['all_student_info']      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        $data['title'] 		    = 'Face Auth';

		$data['main_content']	= 'admin/face_auth';
		echo view('admin/include/template_main', $data);
    }
    
    public function apply_leave() {
        $data                      = [];
        $data['staff_leave_info']  = $this->StaffModel->staff_leave_info(session('userid'));
        $data['title'] 		       = 'Face Auth';

		$data['main_content']	= 'admin/apply_leave';
		echo view('admin/include/template_main', $data);
    }
    
    function save_leave() {
        if ($this->request->is('post')) {
		    
		    $leave_staff_id  = $this->request->getPost('leave_staff_id');
		    $leave_type_id  = $this->request->getPost('leave_type_id');
		    $from_date      = $this->request->getPost('from_date');
		    $to_date        = $this->request->getPost('to_date');
		    $reason         = $this->request->getPost('reason');
            $canSave        = TRUE;
            
            $stlInfo        = $this->db->query("SELECT SUM(leave_days) as ld FROM staff_leave_request WHERE  staff_id = '".$leave_staff_id."' AND leave_type_id = '".$leave_type_id."' ")->getRow();
            if (!empty($stlInfo->ld)) {
                $tknLeave   = (int)$stlInfo->ld;
            } else {
                $tknLeave   = 0;
            }
            $salInfo        = $this->db->query("SELECT alloted_leave as al FROM staff_leave_details WHERE  staff_id = '".$leave_staff_id."' AND leave_type_id = '".$leave_type_id."' ")->getRow();
            if (!empty($salInfo->al)) {
                $altLeave   = (int)$salInfo->al;
            } else {
                $altLeave   = 0;
            }
            $avlLeave       = $altLeave - $tknLeave;
            
            $result = $this->db->query("SELECT id FROM staff_leave_request WHERE staff_id  = '".$leave_staff_id."' AND leave_from = '".$from_date."' AND leave_to = '".$to_date."' ")->getRow();
            if ($result !== null) {
                if ($result->id  != NULL) {
                    $canSave = FALSE;
                }
            }
            
            $earlier = new \DateTime($from_date);
            $later = new \DateTime($to_date);
            $abs_diff = $later->diff($earlier)->format("%a");

            if ($canSave == TRUE) {
                $formData = array(
				    'staff_id'          => $leave_staff_id,
				    'leave_type_id'     => $leave_type_id,
				    'leave_from'        => $from_date,
				    'leave_to'          => $to_date,
				    'leave_days'        => $abs_diff + 1,
				    'employee_remark'   => $reason,
				);
				$builder = $this->db->table('staff_leave_request');
                $builder->insert($formData);
                
            }
            
            
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                //$data['status']     = 'error';
                //$data['message']    = 'Already saved!';
                //echo json_encode($data);
            }
	}
    
    public function student_attendance() {
        $data                   = [];
        if (site_info()['attendence_type'] == 1) {
            return redirect()->to(base_url().'admin/staff/class_timetable');
        }
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
            
        $data['all_student_info']   = $student_list;
        $data['title'] 		        = 'Attendance';

		$data['main_content']	= 'admin/student_attendance';
		echo view('admin/include/template_main', $data);
    }
    
    function save_student_attendance() {
        if ($this->request->is('post')) {
		    
            $canSave    = TRUE;
            $date           = date("Y-m-d");
                
            $students   = $this->request->getPost('student_id');
            $adate      = $this->request->getPost('adate');
            
            if (!empty($adate)) {
                $date   = $adate;
            }
            foreach ($students as $key => $student) {
                $result = $this->db->query("SELECT * FROM student_attendences WHERE date  = '".$date."' AND student_session_id = '".$student."' ")->getRow();
                if ($result !== null) {
                    if ($result->id  != NULL) {
                        $canSave = FALSE;
                    }
                }
                
            if ($canSave == TRUE) {
                $varName = 'status'.$student;
                $attendance = $this->request->getPost($varName);
                $formData = array(
				    'student_session_id'    => $student,
				    'date'                  => $date,
				    'attendence_type_id'    => $attendance,
				);
				$builder = $this->db->table('student_attendences');
                $builder->insert($formData);
                
            }
            
            }
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Already saved!';
                echo json_encode($data);
            }
	}
	
	public function student_period_attendance($ttid, $sgi) {
        $data                   = [];
        $data['StaffModel']             = new StaffModel();
        $ttinfo                         = $this->db->query("SELECT * FROM `subject_timetable` WHERE id = '".$ttid."' ")->getRow();
        $data['timetable_info']         = $this->db->query("SELECT * FROM `subject_timetable` WHERE id = '".$ttid."' ")->getRow();
        
        $data['merged_timetable_info']  = $this->StaffModel->teachers_timetable_info_times_ungrouped($ttinfo->staff_id, $ttinfo->session_id, $ttinfo->day, $ttinfo->start_time, $ttinfo->end_time);
        
        $data['title'] 		    = 'Period Attendance';
        $data['ttid'] 		    = $ttid;
        $data['sgid'] 		    = $sgi;

		$data['main_content']	= 'admin/student_period_attendance';
		echo view('admin/include/template_main', $data);
    }
    
    function save_student_period_attendance() {
        if ($this->request->is('post')) {
		    
            $canSave    = TRUE;
            $date           = date("Y-m-d");
            
            $ttid       = $this->request->getPost('ttid');
            $students   = $this->request->getPost('student_id');
            $session_id = site_info()['active_session'];
            foreach ($students as $key => $student) {
                $ssid   = $this->db->table('student_session')->where('student_id', $student)->where('session_id', $session_id)->get()->getRow();
                
                
                $result = $this->db->query("SELECT * FROM student_subject_attendances WHERE date  = '".$date."' AND student_session_id = '".$ssid->id."' AND subject_timetable_id = '".$ttid."' ")->getRow();
                if ($result !== null) {
                    if ($result->id  != NULL) {
                        $canSave = FALSE;
                    }
                }
                
            if ($canSave == TRUE) {
                $varName = 'status'.$student;
                $attendance = $this->request->getPost($varName);
                $formData = array(
				    'student_session_id'    => $ssid->id,
				    'subject_timetable_id'  => $ttid,
				    'date'                  => $date,
				    'attendence_type_id'    => $attendance,
				);
				$builder = $this->db->table('student_subject_attendances');
                $builder->insert($formData);
                
            } else {
                $varName = 'status'.$student;
                $attendance = $this->request->getPost($varName);
                $formData = array(
				    'student_session_id'    => $ssid->id,
				    'subject_timetable_id'  => $ttid,
				    'date'                  => $date,
				    'attendence_type_id'    => $attendance,
				);
				$builder = $this->db->table('student_subject_attendances');
                $builder->where('id', $result->id);
                $builder->update($formData);
            }
            
            }
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Already saved!';
                echo json_encode($data);
            }
	}
	
	public function attendance_report() {
        $data                   = [];
        $data['all_student_info']      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        $data['title'] 		    = 'Attendance';
        
        $data['fdate']          = date("Y-m-d");
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['flag']       = '1';
        }

		$data['main_content']	= 'admin/attendance_report';
		echo view('admin/include/template_main', $data);
    }
	
	public function student_dues() {
        $data                   = [];
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
        
        $data['StaffModel']         = new StaffModel();
        $data['all_student_info']   = $student_list;
        $data['title'] 		    = 'Dues';

		$data['main_content']	= 'admin/student_dues';
		echo view('admin/include/template_main', $data);
    }
    
    public function class_timetable() {
        $data                   = [];
        $data['teachers_timetable_info']    = $this->StaffModel->teachers_timetable_info_grouped(session('class_id'), session('section_id'), site_info()['active_session'], session('userid'));
        $data['schSetting']                 = $this->db->query("SELECT * FROM sch_settings ")->getRow();
        $data['StaffModel']                 = new StaffModel();
        $data['title'] 		    = 'Timetable';

		$data['main_content']	= 'admin/class_timetable';
		echo view('admin/include/template_main', $data);
    }
    
    public function approve_leave() {
        $data                       = [];
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
        $data['all_student_info']   = $student_list;
        $data['all_staff_info']     = $this->StaffModel->all_subordinate_staff_info(session('userid'));
        $data['title'] 		        = 'Leave';

		$data['main_content']	= 'admin/approve_leave';
		echo view('admin/include/template_main', $data);
    }
    
    function update_leave() {
        if ($this->request->is('post')) {
            $leaveId        = $this->request->getPost('leaveId');
            $leave_action   = $this->request->getPost('leave_action');
            
            $formData = array(
				'status'    => $leave_action,
			);
            
            $builder = $this->db->table('student_applyleave');
            $builder->where('student_applyleave.id', $leaveId);
            $builder->update($formData);
		   
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Already saved!';
                echo json_encode($data);
            }
	}
	
	function update_staff_leave() {
        if ($this->request->is('post')) {
            $leaveId        = $this->request->getPost('staffLeaveId');
            $leave_action   = $this->request->getPost('staff_leave_action');
            
            $formData = array(
				'status'    => $leave_action,
			);
            
            $builder = $this->db->table('staff_leave_request');
            $builder->where('staff_leave_request.id', $leaveId);
            $builder->update($formData);
		   
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Already saved!';
                echo json_encode($data);
            }
	}
	
	public function staff_payslip() {
        $data                   = [];
        $data['all_payslip']    = $this->StaffModel->staff_all_payslip_info(session('userid'));
        $data['title']          = 'Payslip';

		$data['main_content']	= 'admin/staff_payslip';
		echo view('admin/include/template_main', $data);
    }
    
    public function staff_payslip_view($id) {
        $data                   = [];
        $data['payslip']        = $this->StaffModel->staff_payslip_info($id);
        $data['title']          = 'Payslip';
        $data['StaffModel']     = new StaffModel();

		$data['main_content']	= 'admin/staff_payslip_view';
		echo view('admin/include/template_main', $data);
    }
	
	public function assessment() {
        $data                   = [];
        
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
        
        $data['all_student_info']      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        
        $data['all_exam_group_batch']  = $this->StaffModel->all_exam_group_batch();
        $data['all_subjects']          = $this->StaffModel->all_subjects();
        
        $data['title'] 		    = 'Assessment';

		$data['main_content']	= 'admin/assessment';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_student_assessment() {
        if ($this->request->is('post')) {
            $batch_id   = $this->request->getPost('batch_id');
            $subject_id = $this->request->getPost('subject_id');
            
            $eSubId = $this->db->query("SELECT id AS sub1 FROM `exam_group_class_batch_exam_subjects` WHERE subject_id = '".$subject_id."' AND exam_group_class_batch_exams_id = '".$batch_id."' ")->getRow();
            
            $student_id  = $this->request->getPost('student_id');
            $scores      = $this->request->getPost('score');
            $note        = $this->request->getPost('note');
            
            foreach ($student_id as $key => $student) {
                $attendance     = $this->request->getPost('status'.$student);
                $student_eid    = $this->db->query("SELECT id AS esId FROM `exam_group_class_batch_exam_students` WHERE exam_group_class_batch_exam_id  = '".$batch_id."' AND student_id = '".$student."'  ")->getRow();
                
                $srinfo    = $this->db->query("SELECT id AS rId FROM `exam_group_exam_results` WHERE exam_group_class_batch_exam_student_id  = '".$student_eid->esId."' AND exam_group_class_batch_exam_subject_id = '".$eSubId->sub1."'  ")->getRow();
                
                if (empty($attendance) || $attendance == 'absent') {
                    $scores[$key] = 0;
                }
                
                if ($scores[$key] > 0) {
                    $attendance = 'present';
                } else {
                    $attendance = 'absent';
                }
                
                $formData = array(
				    'exam_group_class_batch_exam_subject_id'    => $eSubId->sub1,
				    'exam_group_class_batch_exam_student_id'    => $student_eid->esId,
				    'attendence'                                => $attendance,
				    'get_marks'                                 => $scores[$key],
				    'note'                                      => $note[$key],
				);
				if (empty($srinfo->rId)) {
				    $builder = $this->db->table('exam_group_exam_results');
                    $builder->insert($formData);
				}
            }
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function content() {
        $data                   = [];
        $data['all_uploaded_contents']  = $this->StaffModel->all_uploaded_contents();
        
        $data['title'] 		    = 'Content';

		$data['main_content']	= 'admin/content';
		echo view('admin/include/template_main', $data);
    }
    
    public function student_behaviour() {
        $data                   = [];
        
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
        
        $data['all_student_info']      = $student_list;
        $data['behaviour_point']       = $this->StaffModel->student_behaviour_point();
        $data['title'] 		    = 'Behaviour';

		$data['main_content']	= 'admin/student_behaviour';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_student_behaviour() {
        if ($this->request->is('post')) {
            $batch_id   = $this->request->getPost('student_id');
            $b_value    = $this->request->getPost('b_value');
            
            
            foreach ($b_value as $key => $value) {
                $formData = array(
				    'student_id'    => $batch_id,
				    'session_id'    => site_info()['active_session'],
				    'incident_id'   => $value,
				    'assign_by'     => session('userid'),
				);
				    $builder = $this->db->table('student_incidents');
                    $builder->insert($formData);
				
            }
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function student_behaviour_incidents() {
        $data                       = [];
        $data['all_student_info']   = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        $data['title'] 		        = 'Incidents';
        $data['StaffModel']         = new StaffModel();
		$data['main_content']	    = 'admin/student_behaviour_incidents';
		echo view('admin/include/template_main', $data);
    }
    
    public function student_behaviour_ranks() {
        $data                       = [];
        $data['all_student_info']   = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        $data['title'] 		        = 'Rank';
        $data['StaffModel']         = new StaffModel();
		$data['main_content']	    = 'admin/student_behaviour_ranks';
		echo view('admin/include/template_main', $data);
    }
    
    public function student_behaviour_view($id) {
        $data                       = [];
        $data['studentInfo']        = $this->StaffModel->student_admission_info($id);
        $data['incidentInfo']       = $this->StaffModel->student_incidents_info(site_info()['active_session'], $id);
        $data['title'] 		        = 'View';
        $data['StaffModel']         = new StaffModel();
		$data['main_content']	    = 'admin/student_behaviour_view';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_incident_comment() {
        if ($this->request->is('post')) {
            $incident_id    = $this->request->getPost('incident_id');
            $comment        = $this->request->getPost('comment');
            
            $formData = array(
                'student_incident_id'   => $incident_id,
                'comment'               => $comment,
                'staff_id'              => session('userid'),
            );
            if (!empty($comment)) {
                $builder = $this->db->table('student_incident_comments');
                $builder->insert($formData);
            }
        }
        
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function lesson_plan() {
        $data                   = [];
        $data['teachers_class'] = $this->StaffModel->teachers_timetable_info_grouped_class(site_info()['active_session'], session('userid'));
        $data['StaffModel']     = new StaffModel();
        $data['title'] 		    = 'Lesson Plan';

		$data['main_content']	= 'admin/lesson_plan';
		echo view('admin/include/template_main', $data);
    }
    
    public function homework() {
        $data                   = [];
        $data['subjects']       = $this->StaffModel->teachers_timetable_info_grouped_subject(site_info()['active_session'], session('userid'), session('class_id'), session('section_id'));
        $data['title'] 		    = 'Homework';
		$data['main_content']	= 'admin/homework';
		echo view('admin/include/template_main', $data);
    }
    
    public function homework_list() {
        $data                   = [];
        $data['uchomeworks']    = $this->StaffModel->all_coming_homework(session('class_id'), session('section_id'), site_info()['active_session']);
        
        $data['title'] 		    = 'Homework';
		$data['main_content']	= 'admin/homework_list';
		echo view('admin/include/template_main', $data);
    }
    
    public function submitted_homework($hwid) {
        $data               = [];
        $data['hinfo']      = $this->StaffModel->homework_info($hwid);
        $data['homeworks']  = $this->StaffModel->submitted_homework($hwid);
        
        $data['title'] 		    = 'Homework';
		$data['main_content']	= 'admin/submitted_homework';
		echo view('admin/include/template_main', $data);
    }
    
    public function submit_homework_score() {
        if ($this->request->is('post')) {
            $homework_id    = $this->request->getPost('homework_id');
            $student_id     = $this->request->getPost('student_id');
            $score          = $this->request->getPost('score');
            $note           = $this->request->getPost('note');
            $session_id     = site_info()['active_session'];
            if (empty($homework_id) || empty($student_id) || empty($score)) {
                return $this->response->setJSON(['success' => false, 'message' => 'Missing data']);
            }
            $db     = db_connect();
            $ssid   = $db->table('student_session')->where('student_id', $student_id)->where('session_id', $session_id)->get()->getRow();
            $data   = [
                'homework_id'           => $homework_id,
                'student_id'            => $student_id,
                'student_session_id'    => $ssid->id,
                'marks'                 => $score,
                'note'                  => $note,
                'status'                => 'Complete',
                'date'                  => date('Y-m-d'),
                'created_at'            => date('Y-m-d H:i:s')
            ];
            $existing       = $db->table('homework_evaluation')->where('homework_id', $homework_id)->where('student_id', $student_id)->get()->getRow();
            if ($existing) {
                $db->table('homework_evaluation')->where('homework_id', $homework_id)->where('student_id', $student_id)->update($data);
            } else {
                $db->table('homework_evaluation')->insert($data);
            }
            return $this->response->setJSON(['success' => true, 'message' => 'Score updated successfully']);
        }
    }
    
    public function homework_list_closed() {
        $data                   = [];
        $data['clhomeworks']    = $this->StaffModel->all_closed_homework(session('class_id'), session('section_id'), site_info()['active_session']);
        
        $data['title'] 		    = 'Homework';
		$data['main_content']	= 'admin/homework_list_closed';
		echo view('admin/include/template_main', $data);
    }
    
    public function assigments_list() {
        $data                       = [];
        
        
        $data['fdate']          = date("Y-m-d");
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['flag']       = '1';
            $data['students']   = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
            $data['StaffModel'] = new StaffModel();
        }
        
        $data['title'] 		        = 'Homework';
		$data['main_content']	    = 'admin/assigments_list';
		echo view('admin/include/template_main', $data);
    }
    
    public function submit_assignment_evaluation() {
        if ($this->request->is('post')) {
            $asid           = $this->request->getPost('asid');
            $student_id     = $this->request->getPost('student_id');
            $note           = $this->request->getPost('note');
            $session_id     = site_info()['active_session'];
            if (empty($asid) || empty($student_id) || empty($note)) {
                return $this->response->setJSON(['success' => false, 'message' => 'Missing data']);
            }
            $db     = db_connect();
            $ssid   = $db->table('student_session')->where('student_id', $student_id)->where('session_id', $session_id)->get()->getRow();
            $data   = [
                'evaluated_by'      => session('userid'),
                'date'              => date('Y-m-d'),
                'evaluation_date'   => date('Y-m-d'),
                'remark'            => $note,
                'created_at'        => date('Y-m-d H:i:s')
            ];
            $db->table('daily_assignment')->where('id', $asid)->update($data);
            return $this->response->setJSON(['success' => true, 'message' => 'Score updated successfully']);
        }
    }
    
    public function save_homework() {
        if ($this->request->is('post')) {
            $subject_group_id           = $this->request->getPost('subject_group_id');
            $subject_group_subject_id   = $this->request->getPost('subject_group_subject_id');
            $subject_id                 = $this->request->getPost('subject_id');
            $homework_date              = $this->request->getPost('homework_date');
            $submission_date            = $this->request->getPost('submission_date');
            $max_marks                  = $this->request->getPost('max_marks');
            $description                = $this->request->getPost('description');
            $attach_file                = $this->request->getFile('attach_file');
            $session_id                 = site_info()['active_session'];
                
                if ($attach_file->isValid() && !$attach_file->hasMoved()) {
                    $name       = $attach_file->getName();
                    $ext        = $attach_file->getClientExtension();
                    $newName    = $attach_file->getRandomName(); 
                    $attach_file->move(WRITEPATH.'uploads', $newName);
                    $formData['document'] = 'writable/uploads/'.$newName;
                    echo WRITEPATH;
                }
            
        $allClsSecSubGroupGroups = groupByClassSectionSubjectGroup(session('class_id'), session('section_id'), $subject_group_id);
        if (!empty($allClsSecSubGroupGroups)) {
            foreach ($allClsSecSubGroupGroups as $cssggroup) {
            $gInfos = groupInfo($cssggroup->group_id);
            foreach ($gInfos as $gInfo) {
            $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$subject_id."' AND session_id = '".$session_id."' ")->getRow();
            if (!empty($sgsInfo1)) {
            $formData = array(
				'session_id'    => site_info()['active_session'],
				'class_id'      => session('class_id'),
				'section_id'    => session('section_id'),
				'subject_id'    => $subject_id,
				'homework_date' => $homework_date,
				'submit_date'   => $submission_date,
				'staff_id'      => session('userid'),
				'subject_group_subject_id'   => $sgsInfo1->id,
				'marks'         => $max_marks,
				'description'   => $description,
				'create_date'   => date("Y-m-d"),
				'created_by'    => session('userid'),
			);
			//$builder = $this->db->table('homework');
            //$builder->insert($formData);
            }
            }
            }
        }
        
        $allClsSecSubGroupSubjectGroups = groupByClassSectionSubjectGroupSubject(session('class_id'), session('section_id'), $subject_group_id, $subject_id);
        if (empty($allClsSecSubGroupGroups) && !empty($allClsSecSubGroupSubjectGroups)) {
            foreach ($allClsSecSubGroupSubjectGroups as $cssgsgroup) {
            $gInfos = groupInfo($cssgsgroup->group_id);
            foreach ($gInfos as $gInfo) {
            $sgsInfo1   = $this->db->query("SELECT * FROM `subject_group_subjects` WHERE subject_group_id = '".$gInfo->subject_group_id."' AND subject_id = '".$gInfo->subject_id."' AND session_id = '".$session_id."' ")->getRow();
            if (!empty($sgsInfo1)) {
            $formData = array(
				'session_id'    => site_info()['active_session'],
				'class_id'      => session('class_id'),
				'section_id'    => session('section_id'),
				'subject_id'    => $subject_id,
				'homework_date' => $homework_date,
				'submit_date'   => $submission_date,
				'staff_id'      => session('userid'),
				'subject_group_subject_id'   => $sgsInfo1->id,
				'marks'         => $max_marks,
				'description'   => $description,
				'create_date'   => date("Y-m-d"),
				'created_by'    => session('userid'),
			);
			//$builder = $this->db->table('homework');
            //$builder->insert($formData);
            }
            }
            }
        }
        
        
        //if (empty($allClsSecSubGroupGroups) && empty($allClsSecSubGroupSubjectGroups)) {
            $formData = array(
				'session_id'    => site_info()['active_session'],
				'class_id'      => session('class_id'),
				'section_id'    => session('section_id'),
				'subject_id'    => $subject_id,
				'homework_date' => $homework_date,
				'submit_date'   => $submission_date,
				'staff_id'      => session('userid'),
				'subject_group_subject_id'   => $subject_group_subject_id,
				'marks'         => $max_marks,
				'description'   => $description,
				'create_date'   => date("Y-m-d"),
				'created_by'    => session('userid'),
			);
			$builder = $this->db->table('homework');
            $builder->insert($formData);
        //}
            
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function communication() {
        $data                   = [];
        
        $data['teachers_class'] = $this->StaffModel->all_teachers_class_info(session('userid'), site_info()['active_session']);
        $data['section_info']   = $this->StaffModel->all_section_info();
        
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
        
        $data['all_student_info']       = $student_list;
        
        $data['title'] 		    = 'Communication';

		$data['main_content']	= 'admin/communication';
		echo view('admin/include/template_main', $data);
    }
    
    public function communication_logs() {
        $data                   = [];
        $data['all_sms_email']  = $this->StaffModel->all_sms_email();
        $data['title'] 		    = 'Notices';

		$data['main_content']	= 'admin/communication_logs';
		echo view('admin/include/template_main', $data);
    }
    
    public function send_message() {
        if ($this->request->is('post')) {
            $class_id       = $this->request->getPost('class_id');
            $section_id     = $this->request->getPost('section_id');
            $student_id     = $this->request->getPost('student_id');
            $message        = $this->request->getPost('message');
            $file           = $this->request->getFile('file');
            $sms            = $this->request->getPost('sms');
            $whatsapp       = $this->request->getPost('whatsapp');
            $email          = $this->request->getPost('email');
            $temp_id        = $this->request->getPost('temp_id');
            
            if ($this->request->getPost('email')) {
                $email    = '1';
            } else {
                $email    = '0';
            }
            
            if ($this->request->getPost('student_id')) {
                $indvl    = '1';
            } else {
                $indvl    = '0';
            }
            
            if (!$this->request->getPost('student_id') && $this->request->getPost('class_id') && $this->request->getPost('section_id')) {
                $clssc    = '1';
            } else {
                $clssc    = '0';
            }
            
            $formData = array(
				'template_id'       => $this->request->getPost('temp_id'),
				'send_through'      => '["sms"]',
				'message'           => $message,
				'send_mail'         => $email,
				'send_sms'          => 1,
				'is_individual'     => $indvl,
				'is_class'          => $clssc,
			);
			$builder = $this->db->table('messages');
            $builder->insert($formData);
            
            if (!empty($student_id)) {
                $sInfo                  = $this->StaffModel->student_admission_info($student_id);
                $smsstatus              = sendSms($sInfo->mobileno, $temp_id, $message);
                
                if ($this->request->getPost('whatsapp')) {
                    $wpstatus           = sendWp($sInfo->mobileno, $message);
                }
                if ($email == 1 && $file->isValid() && !$file->hasMoved()) {
                    $name               = $file->getName();
                    $ext                = $file->getClientExtension();
                    $newName            = $file->getRandomName(); 
                    $directory          = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images';
			        $cdirectoryn        = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images/'.$newName;
                    $file->move($directory, $newName);
                    sendEmailWc($sInfo->email, $message, $cdirectoryn);
                    sendEmailWc($sInfo->guardian_email, $message, $cdirectoryn);
                }
            }
            if ($clssc == 1) {
            $sinfos = $this->StaffModel->all_student_info($class_id, $section_id, site_info()['active_session']);
            foreach ($sinfos as $sInfo) {
                $smsstatus              = sendSms($sInfo->mobileno, $temp_id, $message);
                
                if ($this->request->getPost('whatsapp')) {
                    $wpstatus           = sendWp($sInfo->mobileno, $message);
                }
                if ($email == 1 && $file->isValid() && !$file->hasMoved()) {
                    $name               = $file->getName();
                    $ext                = $file->getClientExtension();
                    $newName            = $file->getRandomName(); 
                    $directory          = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images';
			        $cdirectoryn        = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images/'.$newName;
                    $file->move($directory, $newName);
                    sendEmailWc($sInfo->email, $message, $cdirectoryn);
                    sendEmailWc($sInfo->guardian_email, $message, $cdirectoryn);
                }
            }
            
            
        }
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function notice_board() {
        $data                       = [];
        $data['all_notifications']  = $this->StaffModel->all_notifications(session('userid'));
        $data['title'] 		    = 'Notices';

		$data['main_content']	= 'admin/notice_board';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_notice() {
        $data                       = [];
        $data['all_notifications']  = $this->StaffModel->all_notifications(session('userid'));
        $data['title'] 		    = 'Notices';

		$data['main_content']	= 'admin/add_notice';
		echo view('admin/include/template_main', $data);
    }
    
    public function send_notice() {
        if ($this->request->is('post')) {
            $title          = $this->request->getPost('title');
            $notice_date    = $this->request->getPost('notice_date');
            $publish_date   = $this->request->getPost('publish_date');
            $file           = $this->request->getFile('file');
            $audience       = $this->request->getPost('audience');
            $message        = $this->request->getPost('message');
            
            $directory              = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images';
			$cdirectory             = 'uploads/notice_board_images';
            
            if ($this->request->getPost('teacher')) {
                $teacher    = 'Yes';
                sendPushNotice($id = null, $message);
            } else {
                $teacher    = 'No';
            }
            
            if ($this->request->getPost('parent')) {
                $parent     = 'Yes';
            } else {
                $parent     = 'No';
            }
            
            if ($this->request->getPost('student')) {
                $student    = 'Yes';
                $appkeys = $this->db->query("SELECT DISTINCT(app_key) FROM `students`  ")->getResult();
                if (!empty($appkeys)) {
                    foreach ($appkeys as $appkey) {
                        sendFcmPushNoticeStudent($appkey->app_key, $title, $message);
                    }
                }
            } else {
                $student    = 'No';
            }
            
            $formData = array(
				'title'             => $title,
				'publish_date'      => $publish_date,
				'date'              => $notice_date,
				'message'           => $message,
				'visible_student'   => $student,
				'visible_staff'     => $parent,
				'visible_parent'    => $parent,
				'created_id'        => session('userid'),
			);
			
			if ($file->isValid() && !$file->hasMoved()) {
                $name               = $file->getName();
                $ext                = $file->getClientExtension();
                $newName            = $file->getRandomName(); 
                $file->move($directory, $newName);
                $formData['attachment']      = $newName;
            }
            
			$builder = $this->db->table('send_notification');
            $builder->insert($formData);
            $insertedId = $this->db->insertID();
            
            $formDatar = array(
				'send_notification_id'  => $insertedId,
				'role_id'               => 7,
			);
			$builder = $this->db->table('notification_roles');
            $builder->insert($formDatar);
            
            if ($this->request->getPost('teacher')) {
            $formDatar = array(
				'send_notification_id'  => $insertedId,
				'role_id'               => 2,
			);
			$builder = $this->db->table('notification_roles');
            $builder->insert($formDatar);
            }
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
//============================== STUDENT PROGRESS ============================//    

    public function students_progress() {
        $data                   = [];
        $data['title'] 		    = 'Students Progress';
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
		$data['main_content']	= 'admin/students_progress';
		echo view('admin/include/template_main', $data);
    }
    
    public function spr_term_wise($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Students Progress';
        
        $class_id                       = session('class_id');
        $section_id                     = session('section_id');
        $session_id                     = site_info()['active_session'];
        
        if ($id != null) {
            $data['sid']                = $id;
            $data['StaffModel']         = new StaffModel();
            $data['all_cbse_terms_info']= $this->StaffModel->all_cbse_terms_info();
            $data['ss_info']            = $this->StaffModel->student_session_info($id);
            
        }
        
       $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
            
        $data['all_student_info']   = $student_list;

		$data['main_content']	        = 'admin/spr_term_wise';
		echo view('admin/include/template_main', $data);
    }
    
    public function spr_assessment_wise($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Students Progress';
        
        $class_id                       = session('class_id');
        $section_id                     = session('section_id');
        $session_id                     = site_info()['active_session'];
        
        if ($id != null) {
            $data['sid']                = $id;
            $data['StaffModel']         = new StaffModel();
            $data['all_cbse_terms_info']= $this->StaffModel->all_cbse_terms_info();
            $data['ss_info']            = $this->StaffModel->student_session_info($id);
            
        }
        
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
            
        $data['all_student_info']   = $student_list;

		$data['main_content']	        = 'admin/spr_assessment_wise';
		echo view('admin/include/template_main', $data);
    }
    
    public function spr_subject_wise($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Students Progress';
        
        $class_id                       = session('class_id');
        $section_id                     = session('section_id');
        $session_id                     = site_info()['active_session'];
        
        if ($id != null) {
            $data['sid']                = $id;
            $data['StaffModel']         = new StaffModel();
            $data['all_cbse_terms_info']= $this->StaffModel->all_cbse_terms_info();
            $data['ss_info']            = $this->StaffModel->student_session_info($id);
            
        }
        
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
            
        $data['all_student_info']   = $student_list;

		$data['main_content']	        = 'admin/spr_subject_wise';
		echo view('admin/include/template_main', $data);
    }
    
    public function spr_marksheet($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Students Progress';
        $data['all_cbse_template_info'] = $this->StaffModel->all_cbse_template_info();
       $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
            
        $data['all_student_info']   = $student_list;

		$data['main_content']	        = 'admin/spr_marksheet';
		echo view('admin/include/template_main', $data);
    }
    
    public function printmarksheet() {
        
        $student_ids    = $this->request->getPost('student_id');
        $template_id    = $this->request->getPost('template_id');
        $type           = $this->request->getPost('type');
        $students       = array();
        foreach ($student_ids as $student_id) {
            $students[] = $student_id;
        }
        
        $fileName = $student_ids[0].uniqid();
        
        
        if ($student_id != null && $template_id != null) {
        $apiUrl = site_info()['siteUrl'];
        $curl = curl_init($apiUrl."resultapi/printmarksheet");
        $postdata = array(
            "student_id"    => $students,
            "template_id"   => $template_id,
            "file_name"     => $fileName,
            "type"          => $type,
        );
        
        $dFile = site_info()['siteUrl'].'uploads/marksheet/'.$fileName.'.pdf';
        curl_setopt_array($curl, array(
        CURLOPT_URL => $curl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($postdata),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        
        $return['status']     = 'success';
        $return['fileUrl']    = $dFile;
        echo json_encode($return);

            // header('Expires: 0');
            // header('Pragma: public');
            // header('Cache-Control: must-revalidate');
            // header('Content-Type: application/octet-stream');
            // header('Content-Disposition: attachment; filename="'.$fileName.'.pdf"');
            // readfile($dFile);
        
        }
    }
    
// ================================== PTM ====================================//
    
    public function ptm() {
        $data                   = [];
        $data['title'] 		    = 'PTM';
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
		$data['main_content']	= 'admin/ptm';
		echo view('admin/include/template_main', $data);
    }
    
    public function ptm_list() {
        $data                   = [];
        $data['title'] 		    = 'PTM';
        $data['StaffModel']     = new StaffModel();
        $data['all_upcoming_ptm']     = $this->StaffModel->all_upcoming_ptm(session('userid'));
		$data['main_content']	= 'admin/ptm_list';
		echo view('admin/include/template_main', $data);
    }
    
    public function ptm_add() {
        $data                   = [];
        $data['title'] 		    = 'PTM';
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
		$data['main_content']	= 'admin/ptm_add';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_ptm() {
        if ($this->request->is('post')) {
            $ptm_title  = $this->request->getPost('ptm_title');
            $from_date  = $this->request->getPost('from_date');
            //$to_date    = $this->request->getPost('to_date');
            $remark     = $this->request->getPost('remark');
            
            $formData = array(
				'ptm_title' => $ptm_title,
				'from_date' => $from_date,
				'to_date'   => $from_date,
				'remark'    => $remark,
				'host_by'   => session('userid'),
			);
			$builder = $this->db->table('cyc_ptm');
            $builder->insert($formData);
            $savedId = $this->db->insertID();
            
            $from_time  = $this->request->getPost('from_time');
            $to_time  = $this->request->getPost('to_time');
            
            foreach ($from_time as $key => $ftime) {
                
                $slotData = array(
				    'ptm_id' => $savedId,
				    'time_from' => $ftime,
				    'time_to'   => $to_time[$key],
			    );
			    if (!empty($ftime) && !empty($to_time)) {
			        $builder = $this->db->table('cy_ptm_time_slot');
                    $builder->insert($slotData);
			    }
            }
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function ptm_schedule() {
        $data                   = [];
        $data['title'] 		    = 'PTM';
        
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
        
        $data['all_student_info']       = $student_list;
        $data['all_upcoming_ptm']       = $this->StaffModel->all_upcoming_ptm(session('userid'));
		$data['main_content']	= 'admin/ptm_schedule';
		echo view('admin/include/template_main', $data);
    }
    
    public function ptm_time_slot($ptm){
		$slots   = $this->StaffModel->ptm_slot_info($ptm);
		echo json_encode($slots);
    }
    
    public function class_students_info(){
		$students   = $this->StaffModel->all_student_info_by_roll(session('class_id'), session('section_id'), site_info()['active_session']);
		echo json_encode($students);
    }
    
    public function save_ptm_schedule() {
        if ($this->request->is('post')) {
            $ptm_id         = $this->request->getPost('ptm_id');
            $pts_id         = $this->request->getPost('pts_id');
            $student_id     = $this->request->getPost('student_id');
            // $date           = $this->request->getPost('date');
            // $time_from      = $this->request->getPost('time_from');
            // $time_to        = $this->request->getPost('time_to');
            // $room           = $this->request->getPost('room');
            // $remark         = $this->request->getPost('remark');
            
            $ptmInfo        = $this->StaffModel->ptm_info($ptm_id);
            $ptsInfo        = $this->StaffModel->pts_info($pts_id);
            
            foreach ($student_id as $key => $student_id) {
                $sptsInfo = $this->db->query("SELECT ptms_id AS sId FROM `cyc_ptm_schedule` WHERE student_id  = '".$student_id."' AND date = '".$ptmInfo->from_date."'  ")->getRow();
                if (empty($sptsInfo->sId)) {
                    
                $stuInfo    = $this->StaffModel->student_session_info($student_id);
            
                $formData = array(
				    'ptm_id'        => $ptm_id,
				    'student_id'    => $student_id,
				    'parent_id'     => $stuInfo->parent_id,
				    'teacher_id'    => session('userid'),
				    'date'          => $ptmInfo->from_date,
				    'time_from'     => $ptsInfo->time_from,
				    'time_to'       => $ptsInfo->time_to,
			    );
			    if (!empty($pts_id)) {
			        $builder = $this->db->table('cyc_ptm_schedule');
                    $builder->insert($formData);
                }
                
                }
            }
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function ptm_attendance($id = null) {
        $data                   = [];
        $data['title'] 		    = 'PTM';
        
        $class_id                       = session('class_id');
        $section_id                     = session('section_id');
        $session_id                     = site_info()['active_session'];
        $data['sid']                    = null;
        if ($id != null) {
            $data['sid']                = $id;
            $data['StaffModel']         = new StaffModel();
            $data['all_cbse_terms_info']= $this->StaffModel->all_cbse_terms_info();
            $data['ss_info']            = $this->StaffModel->student_session_info($id);
        }
        
        $allClsGroups = groupByClass(session('class_id'));
        if (!empty($allClsGroups)) {
                $student_list         = [];
                foreach ($allClsGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        }
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $student_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $attendance     = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($attendance)) {
                            $student_list = array_merge($student_list, $attendance);
                        } else {
                            $student_list[] = $attendance;
                        }
                    }
                }
        } 
        if (empty($allClsGroups) && empty($allClsSecGroups)) {
            $student_list      = $this->StaffModel->all_student_info(session('class_id'), session('section_id'), site_info()['active_session']);
        }
        
        $data['all_student_info']       = $student_list;
        $data['all_upcoming_ptm']       = $this->StaffModel->all_upcoming_ptm(session('userid'));

		$data['main_content']	        = 'admin/ptm_attendance';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_ptm_attendance() {
        if ($this->request->is('post')) {
            $student_id         = $this->request->getPost('student_id');
            $feedback_remark    = $this->request->getPost('feedback_remark');
            
            $sptsInfo = $this->db->query("SELECT ptm_id AS pId FROM `cyc_ptm_schedule` WHERE student_id  = '".$student_id."' AND date = '".date("Y-m-d")."'  ")->getRow();
            $stuInfo    = $this->StaffModel->student_session_info($student_id);
            
            $formData = array(
				'ptm_id'            => $sptsInfo->pId,
				'student_id'        => $student_id,
				'parent_id'         => $stuInfo->parent_id,
				'teacher_id'        => session('userid'),
				'feedback_score'    => $this->request->getPost('feedback_score'),
				'feedback_remark'   => $feedback_remark,
				'parents_complain'  => $this->request->getPost('parents_complain'),
				'special_case'      => $this->request->getPost('special_case'),
			);
			if (!empty($student_id) && !empty($feedback_remark) && !empty($sptsInfo->pId)) {
			    $builder = $this->db->table('cyc_ptm_attendance');
                $builder->insert($formData);
            }
            
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
// ================================== CBSE ====================================//
    
    public function cbse() {
        $data                   = [];
        $data['title'] 		    = 'PTM';
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
		$data['main_content']	= 'admin/cbse';
		echo view('admin/include/template_main', $data);
    } 
// ================================== LEADS ====================================//
    public function leads() {
        $data                   = [];
        $data['title'] 		    = 'Leads';
        $data['StaffModel']     = new StaffModel();
        $data['usersCamp']      = $this->StaffModel->all_usersin_camp_info();
		$data['main_content']	= 'admin/leads';
		echo view('admin/include/template_main', $data);
    }
    
    public function campaigns() {
        $data                   = [];
        $data['title'] 		    = 'Campaigns';
        $data['StaffModel']     = new StaffModel();
        $data['usersCamp']      = $this->StaffModel->all_usersin_camp_info();
		$data['main_content']	= 'admin/campaigns';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_campaign() {
        $data                   = [];
        $data['title'] 		    = 'Add Campaign';
        
        $data['campType']       = $this->StaffModel->all_camp_type_info();
        $data['promoters']      = $this->StaffModel->all_camp_promoters_info();
        
		$data['main_content']	= 'admin/add_campaign';
		echo view('admin/include/template_main', $data);
    }

    public function save_user_campaign() {
        $data                   = [];
        $data['title']          = 'Add Campaign';
        
        $ct_id                  = $this->request->getPost('ct_id');
        $cp_id                  = $this->request->getPost('cp_id');
        $c_title                = $this->request->getPost('c_title');
        $c_description          = $this->request->getPost('c_description');
        
        if (empty($cp_id)) {
            $cp_id              = null;
        }
         
        $cmpData = array(
            'ct_id'             => $this->request->getPost('ct_id'),
            'cp_id'             => $cp_id,
			'c_title'           => $this->request->getPost('c_title'),
			'c_description'     => $this->request->getPost('c_description'),
			'c_by'              => session('userid'),
			'c_manager'         => session('userid'),
			'c_date'            => date("Y-m-d"),
		);
		if (!empty($ct_id) && !empty($c_title) && !empty($c_description)) {
            $builder = $this->db->table('cyc_campaign');
            $builder->insert($cmpData);
            $savedId = $this->db->insertID();
            
            $cnsData = array(
			    'c_id'          => $savedId,
			    'staff_id'      => session('userid'),
			    'level'         => 1,
		    );
            $builder = $this->db->table('cyc_leads_counsellor');
            $builder->insert($cnsData);
            
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
    
    public function add_lead($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Add Lead';
        $data['usersCamp']      = $this->StaffModel->all_users_camp_info(session('userid'));
        $data['sourceInfo']     = $this->StaffModel->all_source_info();
        if (!empty($id)) {
            $data['lid']        = $id;
            $data['lInfo']      = $this->StaffModel->leads_info($id);
        }
		$data['main_content']	= 'admin/add_lead';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_user_lead() {
        $data                   = [];
        $data['title']          = 'Add Leads';
        $l_id                   = $this->request->getPost('l_id');
        $c_id                   = $this->request->getPost('c_id');
        $l_name                 = $this->request->getPost('l_name');
        $l_father_name          = $this->request->getPost('l_father_name');
        $l_mother_name          = $this->request->getPost('l_mother_name');
        $l_class                = $this->request->getPost('l_class');
        $l_qualification        = $this->request->getPost('l_qualification');
        $l_address              = $this->request->getPost('l_address');
        $l_location             = $this->request->getPost('l_location');
        $l_phone_number         = $this->request->getPost('l_phone_number');
        $l_alternative_phone    = $this->request->getPost('l_alternative_phone');
        $l_email                = $this->request->getPost('l_email');
        $l_source               = $this->request->getPost('l_source');
        $l_resources            = $this->request->getPost('l_resources');
        
        if (empty($l_id)) {
        $leadData = array(
            'c_id'                  => $this->request->getPost('c_id'),
			'l_name'                => $this->request->getPost('l_name'),
			'l_gender'              => $this->request->getPost('l_gender'),
			'l_dob'                 => $this->request->getPost('l_dob'),
			'l_caste'               => $this->request->getPost('l_caste'),
			'l_sub_caste'           => $this->request->getPost('l_sub_caste'),
			'l_aadhar_no'           => $this->request->getPost('l_aadhar_no'),
			'l_blood_group'         => $this->request->getPost('l_blood_group'),
			'l_religion'            => $this->request->getPost('l_religion'),
			'l_mother_tongue'       => $this->request->getPost('l_mother_tongue'),
			'l_father_name'         => $this->request->getPost('l_father_name'),
			'l_father_phone'        => $this->request->getPost('l_father_phone'),
			'l_father_qualification'=> $this->request->getPost('l_father_qualification'),
			'l_mother_name'         => $this->request->getPost('l_mother_name'),
			'l_mother_phone'        => $this->request->getPost('l_mother_phone'),
			'l_mother_qualification'=> $this->request->getPost('l_mother_qualification'),
			'l_guradian_name'       => $this->request->getPost('l_guradian_name'),
			'l_guardian_phone'      => $this->request->getPost('l_guardian_phone'),
			'l_class'               => $this->request->getPost('l_class'),
			'l_enrolled_course'     => $this->request->getPost('l_enrolled_course'),
			'l_elective_subjects'   => $this->request->getPost('l_elective_subjects'),
			'l_address'             => $this->request->getPost('l_address'),
			'l_location'            => $this->request->getPost('l_location'),
			'l_phone_number'        => $this->request->getPost('l_phone_number'),
			'l_alternative_phone'   => $this->request->getPost('l_alternative_phone'),
			'l_emergency_contact_no'=> $this->request->getPost('l_emergency_contact_no'),
			'l_email'               => $this->request->getPost('l_email'),
			'l_source'              => $this->request->getPost('l_source'),
			'l_resources'           => $this->request->getPost('l_resources'),
            'lead_lat'              => $this->request->getPost('lat'),
            'lead_lng'              => $this->request->getPost('lng'),
			'individual_status'     => session('userid'),
		);
		if (!empty($c_id) && !empty($l_name) && !empty($l_address) && !empty($l_class) && !empty($l_phone_number)) {
            $builder = $this->db->table('cyc_leads');
            $builder->insert($leadData);
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
			'l_name'                => $this->request->getPost('l_name'),
			'l_gender'              => $this->request->getPost('l_gender'),
			'l_dob'                 => $this->request->getPost('l_dob'),
			'l_caste'               => $this->request->getPost('l_caste'),
			'l_sub_caste'           => $this->request->getPost('l_sub_caste'),
			'l_aadhar_no'           => $this->request->getPost('l_aadhar_no'),
			'l_blood_group'         => $this->request->getPost('l_blood_group'),
			'l_religion'            => $this->request->getPost('l_religion'),
			'l_mother_tongue'       => $this->request->getPost('l_mother_tongue'),
			'l_father_name'         => $this->request->getPost('l_father_name'),
			'l_father_phone'        => $this->request->getPost('l_father_phone'),
			'l_father_qualification'=> $this->request->getPost('l_father_qualification'),
			'l_mother_name'         => $this->request->getPost('l_mother_name'),
			'l_mother_phone'        => $this->request->getPost('l_mother_phone'),
			'l_mother_qualification'=> $this->request->getPost('l_mother_qualification'),
			'l_guradian_name'       => $this->request->getPost('l_guradian_name'),
			'l_guardian_phone'      => $this->request->getPost('l_guardian_phone'),
			'l_class'               => $this->request->getPost('l_class'),
			'l_enrolled_course'     => $this->request->getPost('l_enrolled_course'),
			'l_elective_subjects'   => $this->request->getPost('l_elective_subjects'),
			'l_address'             => $this->request->getPost('l_address'),
			'l_location'            => $this->request->getPost('l_location'),
			'l_phone_number'        => $this->request->getPost('l_phone_number'),
			'l_alternative_phone'   => $this->request->getPost('l_alternative_phone'),
			'l_emergency_contact_no'=> $this->request->getPost('l_emergency_contact_no'),
			'l_email'               => $this->request->getPost('l_email'),
			'l_source'              => $this->request->getPost('l_source'),
			'l_resources'           => $this->request->getPost('l_resources'),
            'lead_lat'              => $this->request->getPost('lat'),
            'lead_lng'              => $this->request->getPost('lng'),
			'individual_status'     => session('userid'),
		);
		if (!empty($l_id) && !empty($l_name) && !empty($l_address) && !empty($l_class) && !empty($l_phone_number)) {
            $builder = $this->db->table('cyc_leads');
            $builder->where('cyc_leads.l_id', $l_id);
            $builder->update($leadData); 
        
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
    
    public function import_leads() {
        $c_id = $this->request->getPost('modal_c_id');
        if (empty($c_id)) {
            return $this->response->setJSON([
                'status'    => 'error',
                'message'   => 'Please select a campaign first.'
            ]);
        }
        $file = $this->request->getFile('importFile');
        if (!$file->isValid() || $file->getExtension() !== 'csv') {
            return $this->response->setJSON([
                'status'    => 'error',
                'message'   => 'Invalid file format. Please upload a CSV file.'
            ]);
        }
        $filePath   = $file->getTempName();
        $handle     = fopen($filePath, 'r');
        if (!$handle) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Unable to open the file.']);
        }
        
        fgetcsv($handle);
        $rowCount = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $rowCount++;
                $insertData = [
                    'c_id'                  => $c_id,
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
                ];
                $builder = $this->db->table('cyc_leads');
                $builder->insert($insertData);
        }
        fclose($handle);
        return $this->response->setJSON(['status' => 'success', 'message' => "$rowCount leads imported successfully."]);
    }
    
    public function start_campaign($id) {
        if (!empty(session('activeCamp'))) {
            if ($id == session('activeCamp')) {
                $camData = array(
			        'activeCamp'    => null,
			    );
			    session()->set($camData);
			    
			    $ccTim      = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".$id."' AND staff_id  = '".session('userid')."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
			    $datetime   = date("Y-m-d H:i:s");
			    $from_time  = strtotime($ccTim->date.' '.$ccTim->time);
                $to_time    = strtotime($datetime);
                $duration   = round(abs($to_time - $from_time) / 60,2);
			    
			    $camTimData = array(
			        'c_id'      => $id,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'end',
			        'duration'  => $duration,
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                return redirect()->to(base_url().'admin/staff/leads');
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
                
            } else {
                
                $ccTim      = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".session('activeCamp')."' AND staff_id  = '".session('userid')."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
			    $datetime   = date("Y-m-d H:i:s");
			    $from_time  = strtotime($ccTim->date.' '.$ccTim->time);
                $to_time    = strtotime($datetime);
                $duration   = round(abs($to_time - $from_time) / 60,2);
			    
			    $camTimData = array(
			        'c_id'      => session('activeCamp'),
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'end',
			        'duration'  => $duration,
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                $camData = array(
			        'activeCamp'    => $id,
			    );
			    session()->set($camData);
			    
			    $camTimData = array(
			        'c_id'      => $id,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'start',
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                return redirect()->to(base_url().'admin/staff/camp_leads');
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            }
        } else {
                 $camData = array(
			        'activeCamp'    => $id,
			    );
			    session()->set($camData);
			    
			    $camTimData = array(
			        'c_id'      => $id,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'start',
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                return redirect()->to(base_url().'admin/staff/camp_leads'); 
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
        }
        
    }
    
    public function start_campaign_json($id) {
        
        $lcsinfo            = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE staff_id  = '".session('userid')."' AND l_id IS NOT NULL AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
        if (!empty($lcsinfo)) {
            $lceinfo        = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE staff_id  = '".session('userid')."' AND l_id = '".$lcsinfo->l_id."' AND type = 'end' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
            if (empty($lceinfo)) {
                $datetime   = date("Y-m-d H:i:s");
			    $from_time  = strtotime($lcsinfo->date.' '.$lcsinfo->time);
                $to_time    = strtotime($datetime);
                $duration   = round(abs($to_time - $from_time) / 60,2);
                
                $ccTimData  = array(
			        'c_id'      => $lcsinfo->c_id,
			        'l_id'      => $lcsinfo->l_id,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'end',
			        'duration'  => $duration,
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($ccTimData);
            }
        }
        
        
        if (!empty(session('activeCamp'))) {
            if ($id == session('activeCamp')) {
                $camData = array(
			        'activeCamp'    => null,
			    );
			    session()->set($camData);
			    
			    $ccTim      = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".$id."' AND staff_id  = '".session('userid')."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
			    $datetime   = date("Y-m-d H:i:s");
			    $from_time  = strtotime($ccTim->date.' '.$ccTim->time);
                $to_time    = strtotime($datetime);
                $duration   = round(abs($to_time - $from_time) / 60,2);
			    
			    $camTimData = array(
			        'c_id'      => $id,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'end',
			        'duration'  => $duration,
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
                
            } else {
                
                $ccTim      = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".session('activeCamp')."' AND staff_id  = '".session('userid')."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
			    $datetime   = date("Y-m-d H:i:s");
			    $from_time  = strtotime($ccTim->date.' '.$ccTim->time);
                $to_time    = strtotime($datetime);
                $duration   = round(abs($to_time - $from_time) / 60,2);
			    
			    $camTimData = array(
			        'c_id'      => session('activeCamp'),
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'end',
			        'duration'  => $duration,
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                $camData = array(
			        'activeCamp'    => $id,
			    );
			    session()->set($camData);
			    
			    $camTimData = array(
			        'c_id'      => $id,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'start',
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            }
        } else {
                 $camData = array(
			        'activeCamp'    => $id,
			    );
			    session()->set($camData);
			    
			    $camTimData = array(
			        'c_id'      => $id,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'start',
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($camTimData);
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
        }
        
    }
    
    public function save_call_time() {
        $c_id               = $this->request->getPost('c_id');
        $l_id               = $this->request->getPost('l_id');
        $tel                = $this->request->getPost('tel');
        $lcsinfo            = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE staff_id  = '".session('userid')."' AND l_id IS NOT NULL AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
        if (!empty($lcsinfo)) {
            $lceinfo        = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE staff_id  = '".session('userid')."' AND l_id = '".$lcsinfo->l_id."' AND type = 'end' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
            if (empty($lceinfo)) {
                $datetime   = date("Y-m-d H:i:s");
			    $from_time  = strtotime($lcsinfo->date.' '.$lcsinfo->time);
                $to_time    = strtotime($datetime);
                $duration   = round(abs($to_time - $from_time) / 60,2);
                
                $ccTimData  = array(
			        'c_id'      => $lcsinfo->c_id,
			        'l_id'      => $lcsinfo->l_id,
			        'tel'       => $tel,
			        'staff_id'  => session('userid'),
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'end',
			        'duration'  => $duration,
			    );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($ccTimData);
            }
        }
        $ccTimData  = array(
			'c_id'      => $c_id,
			'l_id'      => $l_id,
			'staff_id'  => session('userid'),
			'date'      => date("Y-m-d"),
			'time'      => date("H:i:s"),
			'type'      => 'start',
		);
        $builder = $this->db->table('cyc_campaign_time');
        $builder->insert($ccTimData);
        echo json_encode(['status' => 'success']);
    }
    
    public function camp_leads() {
        $data                   = [];
        $data['title'] 		    = 'Leads';
        $data['StaffModel']     = new StaffModel();
        
        $ccinfo                 = $this->db->query("SELECT * FROM `cyc_leads_counsellor` WHERE staff_id  = '".session('userid')."' AND c_id = '".session('activeCamp')."' ")->getRow();
        
        $all_open_leads_info    = $this->StaffModel->all_camp_open_leads_info(session('activeCamp'), $ccinfo->level);
		$data['main_content']	= 'admin/camp_leads';
		echo view('admin/include/template_main', $data);
    }
    
    public function taken_leads() {
        $data                   = [];
        $data['title'] 		    = 'Leads';
        $data['StaffModel']     = new StaffModel();
        $data['allFollowup']    = $this->StaffModel->all_followup(session('userid'));
        $data['followStatus']   = $this->StaffModel->all_followup_status_info();
        $data['fdate']          = '';
        $data['tdate']          = '';
        $data['cs']             = '';
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['cs']         = $this->request->getPost('cs');
            $data['flag']       = '1';
            $data['allFollowup']= $this->StaffModel->all_followup(session('userid'), $data['fdate'], $data['tdate'], $data['cs']);
        }
        
		$data['main_content']	= 'admin/taken_leads';
		echo view('admin/include/template_main', $data);
    }
    
    public function walkin_leads() {
        $data                   = [];
        $data['title'] 		    = 'Leads';
        $data['StaffModel']     = new StaffModel();
        $data['allFollowup']    = $this->StaffModel->all_walkin_leads_info(session('userid'));
        $data['followStatus']   = $this->StaffModel->all_followup_status_info();
        $data['fdate']          = '';
        $data['tdate']          = '';
        $data['mnumber']        = '';
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['mnumber']    = $this->request->getPost('mnumber');
            $data['flag']       = '1';
            $data['allFollowup']= $this->StaffModel->all_walkin_leads_info(session('userid'), $data['fdate'], $data['tdate'], $data['mnumber']);
        }
		$data['main_content']	= 'admin/walkin_leads';
		echo view('admin/include/template_main', $data);
    }
    
    public function missed() {
        $data                   = [];
        $data['title'] 		    = 'Missed Leads';
        $data['StaffModel']     = new StaffModel();
        $data['allFollowup']    = $this->StaffModel->all_missed_followup(session('userid'));
        $data['followStatus']   = $this->StaffModel->all_followup_status_info();
        $data['fdate']          = '';
        $data['tdate']          = '';
        $data['cs']             = '';
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['cs']         = $this->request->getPost('cs');
            $data['flag']       = '1';
            $data['allFollowup']= $this->StaffModel->all_missed_followup(session('userid'), $data['fdate'], $data['tdate'], $data['cs']);
        }
        
		$data['main_content']	= 'admin/missed_followup';
		echo view('admin/include/template_main', $data);
    }
    
    public function missed_followup() {
        $data                   = [];
        $data['title'] 		    = 'Missed Leads';
        $data['StaffModel']     = new StaffModel();
        $data['allFollowup']    = $this->StaffModel->all_missed_followup(session('userid'));
        $data['followStatus']   = $this->StaffModel->all_followup_status_info();
        $data['fdate']          = '';
        $data['tdate']          = '';
        $data['cs']             = '';
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['cs']         = $this->request->getPost('cs');
            $data['flag']       = '1';
            $data['allFollowup']= $this->StaffModel->all_missed_followup(session('userid'), $data['fdate'], $data['tdate'], $data['cs']);
        }
        
		$data['main_content']	= 'admin/missed_followup';
		echo view('admin/include/template_main', $data);
    }
    
    public function followups() {
        $data                   = [];
        $data['title'] 		    = 'Leads';
        $data['followUps']      = $this->StaffModel->all_followup(session('userid'));
		$data['main_content']	= 'admin/followups';
		echo view('admin/include/template_main', $data);
    }
    
    public function leads_view($id) {
        $data               = [];
        $data['title']      = 'Leads';
        
        $data['leadsInfo']  = $this->StaffModel->leads_info($id);
        $data['followUp']   = $this->StaffModel->all_leads_followup($id);
        
		$data['main_content']	= 'admin/leads_view';
		echo view('admin/include/template_main', $data);
    }
    
    public function take_lead($id) {
        $data                   = [];
        $data['title']          = 'Leads';
        
        $data['leadsInfo']      = $this->StaffModel->leads_info($id);
        $data['followUp']       = $this->StaffModel->all_leads_followup($id);
        $data['followStatus']   = $this->StaffModel->all_followup_status_info();
        $data['followContent']  = $this->StaffModel->all_followup_content_info();
        $leadData = array(
			'l_status'          => 'Taken',
			'taken_by'          => session('userid'),
			'current_agent'     => session('userid'),
		);
        $builder = $this->db->table('cyc_leads');
        $builder->where('cyc_leads.l_id', $id);
        $builder->update($leadData); 
        
        if (empty($data['followUp'])) {
        $time   =   date("H:i:s");
        $fwData = array(
			'c_id'              => $data['leadsInfo']->c_id,
			'l_id'              => $id,
			'followup_date'     => date("Y-m-d"),
			'followup_time'     => date("H:i:s"),
			'followup_remark'   => 'Call Initiated',
			'followup_by'       => session('userid'),
			'next_followup_date'     => date("Y-m-d"),
			'next_followup_time'     => date("H:i:s",time() + 1800),
		);
        $builder = $this->db->table('cyc_leads_followup');
        $builder->insert($fwData);
        }
        $data['staffInfo']      = $this->StaffModel->all_camp_counsellor_info($data['leadsInfo']->c_id);
        $data['allClsInfo']     = $this->StaffModel->all_class_info();
		$data['main_content']	= 'admin/take_lead';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_followup() {
        if ($this->request->is('post')) {
            $lid    = $this->request->getPost('lid');
            $cid    = $this->request->getPost('cid');
            $fr     = $this->request->getPost('fr');
            $nfd    = $this->request->getPost('nfd');
            $nft    = $this->request->getPost('nft');
            $cs     = $this->request->getPost('cs');
            $level  = $this->request->getPost('level');
            
            $leadLvl = array(
                'level'      => $level,
            );
		    $builder = $this->db->table('cyc_leads');
            $builder->where('cyc_leads.l_id', $lid);
            $builder->update($leadLvl); 
            
            if ($cs == 'Walk-in') {
                $leadData = array(
			        'l_status'      => 'Walk-in',
		        );
		        $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $lid);
                $builder->update($leadData); 
            }
            
            if ($cs == 'Converted') {
                $leadData = array(
			        'l_status'      => 'Converted',
			        'is_closed'     => 1,
			        'closed_date'   => date("Y-m-d"),
			        'closed_by'     => session('userid'),
		        );
		        $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $lid);
                $builder->update($leadData); 
                
                $leadsInfo  = $this->StaffModel->leads_info($lid);
                $class_id   = $this->request->getPost('class_id');
                $clsSecId   = $this->db->query("SELECT * FROM `class_sections` WHERE class_id = '".$class_id."' ORDER BY id ASC LIMIT 1 ")->getRow();
                if (!empty($class_id) && $leadsInfo->is_student_registered == 0 && $leadsInfo->registration_id == null) {
                    
                    do {
                        $reference_no   = mt_rand(100000, 999999);
                        $refence_status = $this->StaffModel->checkreferenceno($reference_no);
                    } while ($refence_status);
                    
                    $regData = array(
			            'reference_no'          => $reference_no,
                        'class_section_id'      => $clsSecId->id,
                        'firstname'             => $leadsInfo->l_name,
                        'dob'                   => $leadsInfo->l_dob,
                        'gender'                => $leadsInfo->l_gender,
                        'mobileno'              => $leadsInfo->l_phone_number,
                        'email'                 => $leadsInfo->l_email,
                        'religion'              => $leadsInfo->l_religion,
                        'cast'                  => $leadsInfo->cast,
                        'guardian_name'         => $leadsInfo->l_father_name,
                        'guardian_relation'     => 'Father',
                        'guardian_phone'        => $leadsInfo->l_phone_number,
                        'guardian_email'        => $leadsInfo->l_email,
                        'guardian_address'      => $leadsInfo->l_address,
                        'current_address'       => $leadsInfo->l_address,
                        'permanent_address'     => $leadsInfo->l_address,
                        'linked_lead_id'        => $leadsInfo->l_id,
                        'blood_group'           => $leadsInfo->l_blood_group,
                        'adhar_no'              => $leadsInfo->l_aadhar_no,
                        'father_name'           => $leadsInfo->l_father_name,
                        'father_phone'          => $leadsInfo->l_father_phone,
                        'father_occupation'     => $leadsInfo->l_father_qualification,
                        'mother_name'           => $leadsInfo->l_mother_name,
                        'mother_phone'          => $leadsInfo->l_mother_phone,
                        'mother_occupation'     => $leadsInfo->l_mother_qualification,
                        'guardian_name'         => $leadsInfo->l_guradian_name,
                        'guardian_phone'        => $leadsInfo->l_guardian_phone,
                        'sub_caste'             => $leadsInfo->l_sub_caste,
                        'mother_tongue'         => $leadsInfo->l_mother_tongue,
                        'enrolled_course'       => $leadsInfo->l_enrolled_course,
                        'elective_subjects'     => $leadsInfo->l_elective_subjects,
                        'emergency_contact_no'  => $leadsInfo->l_emergency_contact_no,
		            );
		            $builder = $this->db->table('online_admissions');
                    $builder->insert($regData);
                    $lastInsertedId = $this->db->insertID();
                    
                    $leadReg = array(
                        'is_student_registered' => 1,
                        'registration_id'       => $lastInsertedId,
                        'reference_no'          => $reference_no
                    );
		            $builder = $this->db->table('cyc_leads');
                    $builder->where('cyc_leads.l_id', $lid);
                    $builder->update($leadReg); 
                }
            }
            
            if ($cs == 'Wrong-number') {
                $nfd = date("Y-m-d");
                $nft = date("H:i:s");
                
                $leadData = array(
			        'l_status'      => 'Invalid',
			        'is_closed'     => 1,
			        'closed_date'   => date("Y-m-d"),
			        'closed_by'     => session('userid'),
		        );
		        $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $lid);
                $builder->update($leadData); 
            }
            
            if ($cs == 'Busy' || $cs == 'Switch-off') {
                $nfd = date("Y-m-d");
                $nft = date("H:i:s",time() + 600);
            }
            
                $leadData = array(
			        'l_follow_up_data'  => 'Invalid',
		        );
		        $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $lid);
                $builder->update($leadData); 
            
            $formData = array(
				'c_id'                  => $this->request->getPost('cid'),
				'l_id'                  => $lid,
				'followup_date'         => date("Y-m-d"),
				'followup_time'         => date("H:i:s"),
				'next_followup_date'    => $nfd,
				'next_followup_time'    => $nft,
				'followup_remark'       => $fr,
				'call_status'           => $cs,
				'followup_by'           => session('userid'),
			);
			if (!empty($lid) && !empty($fr) && !empty($cs)) {
			    $this->db->query("UPDATE cyc_leads_followup SET followup_status = '1' WHERE l_id= '".$lid."' ");
			    $builder = $this->db->table('cyc_leads_followup');
                $builder->insert($formData);
                
                $leadData = array(
			        'l_follow_up_data'  => json_encode($formData),
		        );
		        $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $lid);
                $builder->update($leadData); 
            }
            
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function save_lead_transfer() {
        if ($this->request->is('post')) {
            $lid            = $this->request->getPost('tlid');
            $cid            = $this->request->getPost('tcid');
            $transfer_to    = $this->request->getPost('transfer_to');
            $level          = $this->request->getPost('level');
            
            $leadLvl = array(
                'level'      => $level,
            );
		    $builder = $this->db->table('cyc_leads');
            $builder->where('cyc_leads.l_id', $lid);
            $builder->update($leadLvl); 
            
            $data['leadsInfo']  = $this->StaffModel->leads_info($lid);
            $data['followUp']   = $this->StaffModel->all_leads_followup($lid);
        
            $leadData = array(
			    'l_status'          => 'Taken',
			    'taken_by'          => session('userid'),
			    'current_agent'     => $transfer_to,
		    );
		    if ($data['leadsInfo']->current_agent != $transfer_to) {
                $new_array          = array();
                if (!empty($data['leadsInfo']->l_follow_up_data)) {
                    $agents         = json_decode($data['leadsInfo']->l_follow_up_data);
                    foreach ($agents as $key => $agent) {
                        $new_array[]=  $agent;
                    }
                }
                $new_array[]['Counsellor ']     = $transfer_to;
                $followup_data      = json_encode($new_array);
                $leadData['l_follow_up_data'] = $followup_data;
            }
            $builder = $this->db->table('cyc_leads');
            $builder->where('cyc_leads.l_id', $lid);
            $builder->update($leadData);    
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
//============================= NEW LMS ======================================//
    
    public function lms_all() {
        $data                   = [];
        $data['title'] 		    = 'Leads';
        
        $data['usersCamp']      = $this->StaffModel->all_usersin_camp_info();
        $data['followUps']      = $this->StaffModel->all_followup(session('userid'));
        $data['campLeads']      = $this->StaffModel->all_camp_open_leads_info(session('activeCamp'));
        
        if ($this->request->is('post')) {
            $fdate      = $this->request->getPost('fdate');
            $tdate      = $this->request->getPost('tdate');
            $call_status= $this->request->getPost('call_status');
            
            $data['followUps']      = $this->StaffModel->all_followup(session('userid'), $fdate = null, $tdate = null, $call_status = null);
        }
        
		$data['main_content']	= 'admin/leads/all';
		echo view('admin/include/template_main', $data);
    }


}
