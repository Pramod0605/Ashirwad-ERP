<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\Admin\StaffModel;

class Web extends AdminController
{
    public function __construct() {
        $this->StaffModel = new StaffModel();
    }
    
// ================================== CBSE ====================================//
    
    public function cbse() {
        $data                   = [];
        $data['title'] 		    = 'CBSE';
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
		$data['main_content']	= 'admin/web/cbse/cbse';
		echo view('admin/include/template_main', $data);
    }
    
    public function exam() {
        $data                   = [];
        $data['title'] 		    = 'EXAM';
        
        $data['allClsInfo']     = $this->StaffModel->all_teachers_class_info(session('userid'), site_info()['active_session']);
        
        $data['cbseTerms']      = $this->StaffModel->all_cbse_terms();
        $data['cbseAsses']      = $this->StaffModel->all_cbse_exam_assessments();
        $data['cbseGrades']     = $this->StaffModel->all_cbse_exam_grades();
        
        
        $allClsSecGroups = groupByClassSection(session('class_id'), session('section_id'));
        if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                $exams_list         = [];
                foreach ($allClsSecGroups as $group) {
                    $gInfos         = groupInfo($group->group_id);
                    foreach ($gInfos as $gInfo) {
                        $exams      = $this->StaffModel->all_cbse_exams($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                        if (is_array($exams)) {
                            $exams_list = array_merge($exams_list, $exams);
                        } else {
                            $exams_list[] = $exams;
                        }
                    }
                }
        } 
        if (empty($allClsSecGroups)) {
            $exams_list      = $this->StaffModel->all_cbse_exams(session('class_id'), session('section_id'), site_info()['active_session']);
        }
            
        $data['cbseExams']   = $exams_list;
        
		$data['main_content']	= 'admin/web/cbse/exams';
		echo view('admin/include/template_main', $data);
    }
    
    public function get_students_by_exam($id = null){
        $id         = $this->request->getPost('exam_id');
        $exmInfo    = $this->db->query("SELECT * FROM cbse_exam_class_sections WHERE  cbse_exam_id = '".$id."' ")->getRow();
        $csInfo     = $this->db->query("SELECT * FROM class_sections WHERE  id = '".$exmInfo->class_section_id."' ")->getRow();    
        
		$students   = $this->StaffModel->all_student_info($csInfo->class_id, $csInfo->section_id, site_info()['active_session']);
		echo json_encode($students);
    }
    
    public function all_exam_subjects_info($id){
		$exams = $this->StaffModel->all_cbse_term_exam_subjects_info($id);
		echo json_encode($exams);
    }
    
    public function all_exam_students_info($id){
		$students = $this->StaffModel->all_exam_students_info($id);
		echo json_encode($students);
    }
    
    public function save_exam() {
        if ($this->request->is('post')) {
            $class_id       = $this->request->getPost('class_id');
            $section_id     = $this->request->getPost('section_id');
            $term           = $this->request->getPost('term');
            $assessment     = $this->request->getPost('assessment');
            $grade          = $this->request->getPost('grade');
            $exam_name      = $this->request->getPost('exam_name');
            $description    = $this->request->getPost('description');
            $publish        = $this->request->getPost('publish');
            
            if (empty($publish)) {
                $publish    = 0;
            }
            $csId       = class_section_info($class_id, $section_id);
            
            $formData = array(
				'cbse_term_id'              => $term,
				'cbse_exam_assessment_id'   => $assessment,
				'cbse_exam_grade_id'        => $grade,
				'name'                      => $exam_name,
				'session_id'                => site_info()['active_session'],
				'description'               => $description,
				'is_publish'                => $publish,
				'created_by'                => session('userid'),
			);
			if (!empty($term) && !empty($assessment) && !empty($grade) && !empty($exam_name) && !empty($csId)) {
			    $builder    = $this->db->table('cbse_exams');
                $builder->insert($formData);
                $savedId    = $this->db->insertID();
                
                $csData = array(
				    'cbse_exam_id'      => $savedId,
				    'class_section_id'  => $csId,
			    );
                $builder    = $this->db->table('cbse_exam_class_sections');
                $builder->insert($csData);
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function save_term() {
        if ($this->request->is('post')) {
            $term_name          = $this->request->getPost('term_name');
            $term_code          = $this->request->getPost('term_code');
            $term_description   = $this->request->getPost('term_description');
            
            $formData = array(
				'name'          => $term_name,
				'term_code'     => $term_code,
				'description'   => $term_description,
				'created_by'    => session('userid'),
			);
			if (!empty($term_name) && !empty($term_code) && !empty($term_description)) {
			    $builder    = $this->db->table('cbse_terms');
                $builder->insert($formData);
                $savedId    = $this->db->insertID();
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function assessment() {
        $data                   = [];
        $data['title'] 		    = 'ASSESSMENT';
        
        $data['StaffModel']     = new StaffModel();
        $data['cbseAsses']      = $this->StaffModel->all_cbse_exam_assessments();
        
		$data['main_content']	= 'admin/web/cbse/assessment';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_assessment($id = null) {
        $data                   = [];
        $data['title'] 		    = 'ASSESSMENT';
        
        $data['StaffModel']     = new StaffModel();
        $data['id']             = $id;
        if (!empty($id)) {
            $data['assesInfo']  = $this->StaffModel->cbse_exam_assessments($id);
        }
        
		$data['main_content']	= 'admin/web/cbse/add_assessment';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_assessment() {
        if ($this->request->is('post')) {
            $asses_id               = $this->request->getPost('asses_id');
            
            $assess_name            = $this->request->getPost('assess_name');
            $assess_description     = $this->request->getPost('assess_description');
            
            $type_id                = $this->request->getPost('type_id');
            
            $assess_type            = $this->request->getPost('assess_type');
            $assess_code            = $this->request->getPost('assess_code');
            $assess_max_marks       = $this->request->getPost('assess_max_marks');
            $assess_pass_percent    = $this->request->getPost('assess_pass_percent');
            
            $formData = array(
				'name'          => $assess_name,
				'description'   => $assess_description,
			);
			if (!empty($assess_name) && !empty($assess_description)) {
			    if (empty($asses_id)) {
			        $builder    = $this->db->table('cbse_exam_assessments');
                    $builder->insert($formData);
                    $savedId    = $this->db->insertID();
			    } else {
			        $builder    = $this->db->table('cbse_exam_assessments');
                    $builder->where('cbse_exam_assessments.id', $asses_id);
                    $builder->update($formData);
                    $savedId    = $asses_id;
			    }
                
                foreach ($assess_type as $key => $atype) {
                    $atData = array(
				        'cbse_exam_assessment_id'   => $savedId,
				        'name'                      => $atype,
				        'code'                      => $assess_code[$key],
				        'maximum_marks'             => $assess_max_marks[$key],
				        'pass_percentage'           => $assess_pass_percent[$key],
				        'created_by'                => session('userid'),
			        );
			        if (!empty($atype) && !empty($assess_code[$key]) && !empty($assess_max_marks[$key]) && !empty($assess_pass_percent[$key])) {
			            if (empty($type_id[$key])) {
                            $builder    = $this->db->table('cbse_exam_assessment_types');
                            $builder->insert($atData);
			            } else {
			                $builder    = $this->db->table('cbse_exam_assessment_types');
                            $builder->where('cbse_exam_assessment_types.id', $type_id[$key]);
                            $builder->update($atData);
			            }
			        }
			    }
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function grades() {
        $data                   = [];
        $data['title'] 		    = 'GRADES';
        
        $data['StaffModel']     = new StaffModel();
        $data['cbseGrades']     = $this->StaffModel->all_cbse_exam_grades();
        
		$data['main_content']	= 'admin/web/cbse/grades';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_grade($id = null) {
        $data                   = [];
        $data['title'] 		    = 'GRADE';
        
        $data['StaffModel']     = new StaffModel();
        $data['id']             = $id;
        if (!empty($id)) {
            $data['gradeInfo']  = $this->StaffModel->cbse_exam_grades($id);
        }
        
		$data['main_content']	= 'admin/web/cbse/add_grade';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_grade() {
        if ($this->request->is('post')) {
            $grade_id           = $this->request->getPost('grade_id');
            
            $grade_name         = $this->request->getPost('grade_name');
            $grade_description  = $this->request->getPost('grade_description');
            
            $range_id           = $this->request->getPost('range_id');
            
            $range_name         = $this->request->getPost('range_name');
            $range_mini         = $this->request->getPost('range_mini');
            $range_max          = $this->request->getPost('range_max');
            $range_description  = $this->request->getPost('range_description');
            
            $formData = array(
				'name'          => $grade_name,
				'description'   => $grade_description,
			);
			if (!empty($grade_name) && !empty($grade_description)) {
			    if (empty($grade_id)) {
			        $builder    = $this->db->table('cbse_exam_grades');
                    $builder->insert($formData);
                    $savedId    = $this->db->insertID();
			    } else {
			        $builder    = $this->db->table('cbse_exam_grades');
                    $builder->where('cbse_exam_grades.id', $grade_id);
                    $builder->update($formData);
                    $savedId    = $grade_id;
			    }
                
                foreach ($range_name as $key => $rname) {
                    $atData = array(
				        'cbse_exam_grade_id'    => $savedId,
				        'name'                  => $rname,
				        'minimum_percentage'    => $range_mini[$key],
				        'maximum_percentage'    => $range_max[$key],
				        'description'           => $range_description[$key],
				        'created_by'            => session('userid'),
			        );
			        if (!empty($rname) && !empty($range_mini[$key]) && !empty($range_max[$key])) {
			            if (empty($range_id[$key])) {
                            $builder    = $this->db->table('cbse_exam_grades_range');
                            $builder->insert($atData);
			            } else {
			                $builder    = $this->db->table('cbse_exam_grades_range');
                            $builder->where('cbse_exam_grades_range.id', $range_id[$key]);
                            $builder->update($atData);
			            }
			        }
                }
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function ex_observation() {
        $data                   = [];
        $data['title'] 		    = 'Observation';
        
        $data['StaffModel']     = new StaffModel();
        $data['cbseObser']      = $this->StaffModel->all_cbse_exam_observations();
        $data['parameters']     = $this->StaffModel->all_cbse_exam_observations_parameters();
        $data['cbseTerms']      = $this->StaffModel->all_cbse_terms();
        
		$data['main_content']	= 'admin/web/cbse/observation';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_parameter() {
        if ($this->request->is('post')) {
            $param_name          = $this->request->getPost('param_name');
            
            $formData = array(
				'name'          => $param_name,
			);
			if (!empty($param_name)) {
			    $builder    = $this->db->table('cbse_observation_parameters');
                $builder->insert($formData);
                $savedId    = $this->db->insertID();
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function add_observation($id = null) {
        $data                   = [];
        $data['title'] 		    = 'GRADE';
        
        $data['StaffModel']     = new StaffModel();
        $data['id']             = $id;
        if (!empty($id)) {
            $data['obsrvInfo']  = $this->StaffModel->cbse_exam_observations($id);
        }
        $data['parameters']     = $this->StaffModel->all_cbse_exam_observations_parameters();
		$data['main_content']	= 'admin/web/cbse/add_observation';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_observation() {
        if ($this->request->is('post')) {
            $obsrv_id           = $this->request->getPost('obsrv_id');
            
            $obsrv_name         = $this->request->getPost('obsrv_name');
            $obsrv_description  = $this->request->getPost('obsrv_description');
            
            $prmvl_id           = $this->request->getPost('prmvl_id');
            
            $parameters         = $this->request->getPost('parameter');
            $param_max_marks    = $this->request->getPost('param_max_marks');
            
            $formData = array(
				'name'          => $obsrv_name,
				'description'   => $obsrv_description,
			);
			if (!empty($obsrv_name) && !empty($obsrv_description)) {
			    if (empty($obsrv_id)) {
			        $builder    = $this->db->table('cbse_exam_observations');
                    $builder->insert($formData);
                    $savedId    = $this->db->insertID();
			    } else {
			        $builder    = $this->db->table('cbse_exam_grades');
                    $builder->where('cbse_exam_observations.id', $obsrv_id);
                    $builder->update($formData);
                    $savedId    = $obsrv_id;
			    }
                
                foreach ($parameters as $key => $parameter) {
                    $atData = array(
				        'cbse_exam_observation_id'      => $savedId,
				        'cbse_observation_parameter_id' => $parameter,
				        'maximum_marks'                 => $param_max_marks[$key],
				        'created_by'                    => session('userid'),
			        );
			        if (!empty($parameter) && !empty($param_max_marks[$key])) {
			            if (empty($prmvl_id[$key])) {
                            $builder    = $this->db->table('cbse_observation_subparameter');
                            $builder->insert($atData);
			            } else {
			                $builder    = $this->db->table('cbse_observation_subparameter');
                            $builder->where('cbse_observation_subparameter.id', $prmvl_id[$key]);
                            $builder->update($atData);
			            }
			        }
                }
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function assign_observation() {
        if ($this->request->is('post')) {
            $obsrv_id       = $this->request->getPost('obsrv_id');
            $term_id        = $this->request->getPost('term_id');
            $description    = $this->request->getPost('description');
            
            $formData = array(
				'cbse_exam_observation_id'  => $obsrv_id,
				'cbse_term_id'              => $term_id,
				'session_id'                => site_info()['active_session'],
				'description'               => $description,
			);
			if (!empty($obsrv_id) && !empty($term_id) && !empty($description)) {
			    $builder    = $this->db->table('cbse_observation_terms');
                $builder->insert($formData);
                $savedId    = $this->db->insertID();
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function assign_student() {
        if ($this->request->is('post')) {
            $examId         = $this->request->getPost('examId');
            $stuIds         = $this->request->getPost('stuIds');
            foreach ($stuIds as $stuId) {
                $stlInfo        = $this->db->query("SELECT id as seId FROM cbse_exam_students WHERE  cbse_exam_id = '".$examId."' AND student_session_id = '".$stuId."' ")->getRow();
                $formData = array(
				    'cbse_exam_id'          => $examId,
				    'student_session_id'    => $stuId,
			    );
			    if (!empty($examId) && !empty($stuId) && empty($stlInfo->seId)) {
			        $builder    = $this->db->table('cbse_exam_students');
                    $builder->insert($formData);
                    $savedId    = $this->db->insertID();
                }
            }
            $data['status']     = 'success';
            $data['message']    = 'Successfully saved!';
            echo json_encode($data);
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function add_exam_subject($id) {
        $data                   = [];
        $data['title'] 		    = 'ADD SUBJECT';
        
        $data['StaffModel']     = new StaffModel();
        $data['id']             = $id;
        $data['subjects']       = $this->StaffModel->all_subjects();
        
		$data['main_content']	= 'admin/web/cbse/add_exam_subject';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_exam_subject() {
        if ($this->request->is('post')) {
            
            $exam_id        = $this->request->getPost('exam_id');
            $subject_id     = $this->request->getPost('subject_id');
            $exam_date      = $this->request->getPost('exam_date');
            $exam_time      = $this->request->getPost('exam_time');
            $duration       = $this->request->getPost('duration');
            $room_number    = $this->request->getPost('room_number');
            
            $assess_ids     = $this->request->getPost('assess_id');
            
            $formData = array(
				'cbse_exam_id'  => $exam_id,
				'subject_id'    => $subject_id,
				'date'          => $exam_date,
				'time_from'     => $exam_time,
				'duration'      => $duration,
				'room_no'       => $room_number,
				'created_by'    => session('userid'),
			);
			if (!empty($exam_id) && !empty($subject_id) && !empty($exam_date) && !empty($exam_time) && !empty($duration) && !empty($room_number)) {
			    $builder    = $this->db->table('cbse_exam_timetable');
                $builder->insert($formData);
                $savedId    = $this->db->insertID();
                
                foreach ($assess_ids as $key => $assess_id) {
                    $atData = array(
				        'cbse_exam_timetable_id'        => $savedId,
				        'cbse_exam_assessment_type_id'  => $assess_id,
			        );
			        if (!empty($savedId) && !empty($assess_id)) {
			            $builder    = $this->db->table('cbse_exam_timetable_assessment_types');
                        $builder->insert($atData);
			        }
                }
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Mandatory data missing!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function add_exam_attendance() {
        $stexamId   = $this->request->getPost('stexamId');
        $etdays     = $this->request->getPost('etdays');
        $esids      = $this->request->getPost('esid');
        $esatnd     = $this->request->getPost('esatnd');
        
        $this->db->query("UPDATE cbse_exams SET total_working_days = '".$etdays."' WHERE  id = '".$stexamId."' ");
        foreach ($esids as $key => $esid) {
            $this->db->query("UPDATE cbse_exam_students SET total_present_days = '".$esatnd[$key]."' WHERE  id = '".$esid."' ");
        }
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function add_score($eid, $sid) {
        $data                   = [];
        $data['title'] 		    = 'ADD SCORE';
        
        $data['allStudents']    = $this->StaffModel->all_exam_students_info($eid);
        
        $data['exmTtInfo']      = $this->db->query("SELECT id as tid FROM cbse_exam_timetable WHERE  cbse_exam_id = '".$eid."' AND subject_id = '".$sid."' ")->getRow();
        $data['exmTaInfo']      = $this->StaffModel->all_cbse_term_exam_subject_assessments_info($data['exmTtInfo']->tid);
        
        $data['main_content']	= 'admin/web/cbse/add_score';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_exam_score() {
        if ($this->request->is('post')) {
            
            $cbse_exam_timetable_id = $this->request->getPost('cbse_exam_timetable_id');
            $student_id             = $this->request->getPost('student_id');
            $exam_student_id        = $this->request->getPost('exam_student_id');
            $notes                  = $this->request->getPost('notes');
            
            foreach  ($exam_student_id as $key => $esi) {
                $tatid                 = $this->request->getPost('tatid'.$esi);
                $eatid                 = $this->request->getPost('eatid'.$esi);
                $eascore               = $this->request->getPost('eascore'.$esi);
                
                if ($eascore > 0) {
                    $is_absent         = 0;
                } else {
                    $is_absent         = 1;
                }
            $sScoreInfo                = $this->db->query("SELECT id as sid FROM cbse_student_subject_marks WHERE  cbse_exam_timetable_assessment_type_id = '".$tatid."' AND cbse_exam_timetable_id = '".$cbse_exam_timetable_id."' AND cbse_exam_student_id = '".$esi."' AND cbse_exam_assessment_type_id = '".$eatid."' ")->getRow();
            
            $formData = array(
				'cbse_exam_timetable_assessment_type_id'    => $tatid,
				'cbse_exam_timetable_id'                    => $cbse_exam_timetable_id,
				'cbse_exam_student_id'                      => $esi,
				'cbse_exam_assessment_type_id'              => $eatid,
				'is_absent'                                 => $is_absent,
				'marks'                                     => $eascore,
				'note'                                      => $notes[$key],
			);
			if (empty($sScoreInfo->sid)) {
			    $builder    = $this->db->table('cbse_student_subject_marks');
                $builder->insert($formData);
			} else {
			    $builder = $this->db->table('cbse_student_subject_marks');
                $builder->where('cbse_student_subject_marks.id', $sScoreInfo->sid);
                $builder->update($formData);    
			}
			
            }
			
			$data['status']     = 'success';
            $data['message']    = 'Successfully saved!';
            echo json_encode($data);
        }
    }
    
    public function generate_rank($id) {
        $apiUrl = site_info()['siteUrl'];
        $curl = curl_init($apiUrl."resultapi/updateExamRank");
        $postdata = array(
            "exam_id"       => '1',
        );
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
        
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
    
    public function ex_schedule() {
        $data                   = [];
        $data['title'] 		    = 'Schedule';
        $apiUrl = site_info()['siteUrl'];
        $curl = curl_init($apiUrl."resultapi/examtimetable");
        $postdata = array(
            "exam_id"       => '1',
        );
        curl_setopt_array($curl, array(
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
        
        $data['exams'] = json_decode($response);
        
		$data['main_content']	= 'admin/web/cbse/ex_schedule';
		echo view('admin/include/template_main', $data);
    }
// ================================ COURSES ==================================//

    public function online_course() {
        $data                   = [];
        $data['title'] 		    = 'COURSES';
        if (session('isSectionIn')) {
            $data['allCourses'] = $this->StaffModel->all_online_courses_info(session('class_id'), session('section_id'));
        } else {
            $data['allCourses'] = $this->StaffModel->all_teacher_online_courses_info(session('userid'));
        }
        $data['courseCategory'] = $this->StaffModel->all_online_courses_category_info();
		$data['main_content']	= 'admin/web/courses/online_course';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_online_course_category() {
        if ($this->request->is('post')) {
            $category_name      = $this->request->getPost('category_name');
            $scInfo             = $this->db->query("SELECT id as cid FROM course_category WHERE category_name LIKE '".$category_name."'  ")->getRow();
            $formData = array(
				'category_name' => $category_name,
			);
			if (!empty($category_name) && empty($scInfo->cid)) {
			    $builder        = $this->db->table('course_category');
                $builder->insert($formData);    
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully saved!';
                echo json_encode($data);
			} elseif (!empty($category_name) && !empty($scInfo->cid)) {
			    $builder            = $this->db->table('course_category');
                $builder->where('course_category.id', $scInfo->cid);
                $builder->update($formData);   
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully Updated!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Something went wrong!';
                echo json_encode($data);
            }
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function save_online_course() {
        if ($this->request->is('post')) {
            $title                  = $this->request->getPost('title');
            $description            = $this->request->getPost('description');
            $price                  = $this->request->getPost('price');
            $discount               = $this->request->getPost('discount');
            $free_course            = $this->request->getPost('free_course');
            $category_id            = $this->request->getPost('category_id');
            $front_side_visibility  = $this->request->getPost('front_side_visibility');
            $video_id               = $this->request->getPost('video_id');
            $course_thumbnail       = $this->request->getFile('course_thumbnail');
            $teacher_id             = $this->request->getFile('teacher_id');
            $thumbnailData          = file_get_contents($course_thumbnail);
            $base64                 = base64_encode($thumbnailData);
            $csIdInfo               = $this->db->query("SELECT id as csid FROM class_sections WHERE class_id = '".session('class_id')."' AND section_id = '".session('section_id')."'  ")->getRow();
            
            $slug                   = abs(crc32(uniqid()));
            
            $formData = array(
				'title'             => $title,
				'slug'              => $slug,
				'url'               => 'course/coursedetail/'.$slug,
				'description'       => $description,
				'price'             => $price,
				'discount'          => $discount,
				'free_course'       => $free_course,
				'category_id'       => $category_id,
				'front_side_visibility' => $front_side_visibility,
				'course_provider'   => 'youtube',
				'course_url'        => $this->request->getPost('video_id'),
				'video_id'          => $this->request->getPost('video_id'),
				'teacher_id'        => session('userid'),
				'created_date'      => date('Y-m-d h:i:s'),
                'updated_date'      => date('Y-m-d h:i:s'),
                'created_by'        => session('userid'),
			);
			$builder        = $this->db->table('online_courses');
            $builder->insert($formData);
            $savedId        = $this->db->insertID();
            
            $formDataB = array(
				'course_id'         => $savedId,
				'class_section_id'  => $csIdInfo->csid,
			);
            $builder        = $this->db->table('online_course_class_sections');
            $builder->insert($formDataB);
            
            $apiUrl = site_info()['siteUrl'];
            $curl = curl_init($apiUrl."api/save_online_course_thumbnail");
            $postdata = array(
                "imageUrl"       => $base64,
                "courseId"       => $savedId,
            );
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
        
            
                
            $data['status']     = 'success';
            $data['message']    = 'Successfully saved!';
            echo json_encode($data);
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function save_course_outcomes() {
        if ($this->request->is('post')) {
            $course_id_a        = $this->request->getPost('course_id_a');
            $outcomes           = $this->request->getPost('outcomes');
            $ocInfo             = $this->db->query("SELECT outcomes as oc FROM online_courses WHERE id = '".$course_id_a."'  ")->getRow();
            
            $new_array          = array();
            if (!empty($ocInfo->oc)) {
            $outcome            = json_decode($ocInfo->oc);
            foreach ($outcome as $key => $oc) {
                    $new_array[]=  $oc;
            }
            }
            foreach ($outcomes as $key => $ocn) {
                    $new_array[]=  $ocn;
            }
            $course_outcomes    = json_encode($new_array);
            
            $formData = array(
				'outcomes'      => $course_outcomes,
			);
			$builder            = $this->db->table('online_courses');
            $builder->where('online_courses.id', $course_id_a);
            $builder->update($formData);
                
            $data['status']     = 'success';
            $data['message']    = 'Successfully Updated!';
            echo json_encode($data);
            
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function save_course_sections() {
        if ($this->request->is('post')) {
            $course_id_b        = $this->request->getPost('course_id_b');
            $sections           = $this->request->getPost('sections');
            
            foreach ($sections as $key => $section) {
            $csInfo             = $this->db->query("SELECT id as sid FROM online_course_section WHERE online_course_id = '".$course_id_b."' AND section_title LIKE '".$section."'  ")->getRow();
            
            $formData = array(
				'online_course_id'  => $course_id_b,
				'section_title'     => $section,
			);
			if (!empty($course_id_b)&& !empty($section) && empty($csInfo->sid)) {
			    $builder            = $this->db->table('online_course_section');
                $builder->insert($formData);
			}
            
            } 
            $data['status']     = 'success';
            $data['message']    = 'Successfully Updated!';
            echo json_encode($data);
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function get_course_section_info($id){
		$info = $this->StaffModel->all_courses_section_info($id);
		echo json_encode($info);
    }
    
    public function save_course_lesson() {
        if ($this->request->is('post')) {
            $course_id_c        = $this->request->getPost('course_id_c');
            $section_id         = $this->request->getPost('section_id');
            $lesson_title       = $this->request->getPost('lesson_title');
            $lesson_type        = $this->request->getPost('lesson_type');
            $lesson_url         = $this->request->getPost('lesson_url');
            $lesson_attachment  = $this->request->getFile('lesson_attachment');
            $lesson_summary     = $this->request->getPost('lesson_summary');
            $lesson_thumbnail   = $this->request->getFile('lesson_thumbnail');
            $lesson_duration    = $this->request->getPost('lesson_duration');
            
            $formData = array(
				'course_section_id' => $section_id,
				'lesson_title'      => $lesson_title,
				'lesson_type'       => $lesson_type,
				'summary'           => $lesson_summary,
			);
			if (!empty($section_id)&& !empty($lesson_title) && !empty($lesson_type) && !empty($lesson_summary)) {
			    $builder            = $this->db->table('online_course_lesson');
                $builder->insert($formData);
                $savedId            = $this->db->insertID();
                
			$directory              = $_SERVER['DOCUMENT_ROOT'].'/uploads/course_content/' . $section_id . '/' . $savedId;
			$cdirectory             = 'uploads/course_content/' . $section_id . '/' . $savedId;
			
			if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }
            
			$orderData = array(
                'type'              => 'lesson',
                'course_section_id' => $section_id,
                'lesson_quiz_id'    => $savedId,
            );
            $builder                = $this->db->table('course_lesson_quiz_order');
            $builder->insert($orderData);
                
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }
			if ($lesson_thumbnail->isValid() && !$lesson_thumbnail->hasMoved()) {
                $name               = $lesson_thumbnail->getName();
                $ext                = $lesson_thumbnail->getClientExtension();
                $newName            = 'thumb'.$lesson_thumbnail->getRandomName(); 
                $lesson_thumbnail->move($directory, $newName);
                $formData['thumbnail']      = $newName;
            }
            
            if ($lesson_type != 'video') {
                $name               = $lesson_attachment->getName();
                $ext                = $lesson_attachment->getClientExtension();
                $newName            = 'content'.$lesson_attachment->getRandomName(); 
                $lesson_attachment->move($directory, $newName);
                $formData['attachment']     = $newName;
            } else {
                $formData['video_provider'] = 'youtube';
                $formData['video_url']      = $lesson_url;
                $formData['duration']       = $lesson_duration;
            }
            $builder            = $this->db->table('online_course_lesson');
            $builder->where('online_course_lesson.id', $savedId);
            $builder->update($formData);
            
            
			
			}
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        } else {
            $data['status']     = 'error';
            $data['message']    = 'Something went wrong!';
            echo json_encode($data);
        }
    }
    
    public function view_online_course($id) {
        $data                   = [];
        $data['title'] 		    = 'COURSES';
        
        $data['courseInfo']     = $this->StaffModel->online_courses_info($id);
        $data['classSections']  = $this->StaffModel->all_courses_class_section_info($id);
        $data['sections']       = $this->StaffModel->all_courses_section_info($id);
        $data['StaffModel']     = new StaffModel();
        
        $data['courseCategory'] = $this->StaffModel->all_online_courses_category_info();
		$data['main_content']	= 'admin/web/courses/view_online_course';
		echo view('admin/include/template_main', $data);
    }
    
    public function online_course_reports() {
        $data                   = [];
        $data['title'] 		    = 'REPORTS';
        
		$data['main_content']	= 'admin/web/courses/course_reports';
		echo view('admin/include/template_main', $data);
    }
    
    public function course_rating_report() {
        $data                   = [];
        $data['title'] 		    = 'RATING';
        
        $data['allCourses'] = $this->StaffModel->all_online_courses_rating_info(session('class_id'), session('section_id'));
        
		$data['main_content']	= 'admin/web/courses/course_rating_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function course_trending_report() {
        $data                   = [];
        $data['title'] 		    = 'TRENDING';
        
        $data['allCourses'] = $this->StaffModel->all_online_courses_rating_info(session('class_id'), session('section_id'));
        
		$data['main_content']	= 'admin/web/courses/course_trending_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function course_student_report() {
        $data                   = [];
        $data['title'] 		    = 'STUDENTS';
        
        $data['allCourses'] = $this->StaffModel->all_online_courses_purchase_info(session('class_id'), session('section_id'));
        
		$data['main_content']	= 'admin/web/courses/course_student_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function course_complete_report() {
        $data                   = [];
        $data['title'] 		    = 'COMPLETE';
        
        $data['allCourses'] = $this->StaffModel->all_online_courses_purchase_info(session('class_id'), session('section_id'));
        
		$data['main_content']	= 'admin/web/courses/course_complete_report';
		echo view('admin/include/template_main', $data);
    }
// ================================== LIVE CLASS ====================================//
    
    public function live_classes() {
        $data                   = [];
        $data['title'] 		    = 'LIVE';
		$data['main_content']	= 'admin/web/live/live_classes';
		echo view('admin/include/template_main', $data);
    }
    
    public function gmeet_live_classes() {
        $data                   = [];
        $data['title'] 		    = 'GMEET LIVE';
        
        $data['gmeetClasses']   = $this->StaffModel->all_gmeet_classes_info(session('class_id'), session('section_id'));

		$data['main_content']	= 'admin/web/live/gmeet_live_classes';
		echo view('admin/include/template_main', $data);
    }
    
    public function gmeet_live_classes_report() {
        $data                   = [];
        $data['title'] 		    = 'GMEET LIVE';
        
        $sql                = "SELECT gmeet.*,gmeet_sections.id as gmeet_section_id,create_by.employee_id as create_bystaffid,for_create.employee_id as for_creatstaffid,(SELECT COUNT(*) FROM gmeet_history INNER JOIN students on students.id=gmeet_history.student_id INNER JOIN student_session on student_session.student_id=students.id WHERE student_session.class_id=" . session('class_id') . " and student_session.section_id= " . session('section_id') . " and gmeet_history.gmeet_id=gmeet.id) as `total_viewers`,`create_by`.`name` as `create_by_name`, `create_by`.`surname` as `create_by_surname`,`for_create`.`name` as `for_create_name`, `for_create`.`surname` as `for_create_surname`,roles.name as `create_by_role_name`,for_create_role.name as `create_for_role_name` FROM `gmeet` JOIN `staff` as `create_by` ON `create_by`.`id` = `gmeet`.`created_id` JOIN `staff` as `for_create` ON `for_create`.`id` = `gmeet`.`staff_id` INNER JOIN staff_roles on staff_roles.staff_id=`gmeet`.`created_id` INNER join roles on roles.id =staff_roles.role_id INNER JOIN staff_roles as `for_create_staff_role` on for_create_staff_role.staff_id=`gmeet`.`staff_id` INNER join roles as `for_create_role`on for_create_role.id =for_create_staff_role.role_id INNER JOIN gmeet_sections on gmeet.id=gmeet_sections.gmeet_id INNER JOIN class_sections on class_sections.id =gmeet_sections.cls_section_id WHERE purpose='class' and status=2 and gmeet.session_id=" . site_info()['active_session'] . " and class_sections.class_id = " . session('class_id') . " and class_sections.section_id= " . session('section_id') . " ORDER BY DATE(`gmeet`.`date`) DESC, `gmeet`.`date` DESC";
        $query              = $this->db->query($sql);
        $data['reports']    = $query->getResult();
        
		$data['main_content']	= 'admin/web/live/gmeet_live_classes_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_gmeet_live_classes() {
        if ($this->request->is('post')) {
            $title      = $this->request->getPost('title');
            $date       = $this->request->getPost('date');
            $duration   = $this->request->getPost('duration');
            $url        = $this->request->getPost('url');
            $description= $this->request->getPost('description');
            
            $formData = array(
				'staff_id'      => session('userid'),
				'title'         => $title,
				'date'          => $date,
				'duration'      => $duration,
				'created_id'    => session('userid'),
				'description'   => $description,
				'timezone'      => 'Asia/Kolkata',
				'url'           => $url,
				'session_id'    => site_info()['active_session']
			);
			if (!empty($title)&& !empty($date) && !empty($duration) && !empty($url) && !empty($description)) {
			    $builder            = $this->db->table('gmeet');
                $builder->insert($formData);
                $savedId            = $this->db->insertID();
            
                $csIdInfo               = $this->db->query("SELECT id as csid FROM class_sections WHERE class_id = '".session('class_id')."' AND section_id = '".session('section_id')."'  ")->getRow();    
                $formDataSec = array(
				    'gmeet_id'      => $savedId,
				    'cls_section_id'=> $csIdInfo->csid,
			    );
                $builder            = $this->db->table('gmeet_sections');
                $builder->insert($formDataSec);
                
                $data['status']     = 'success';
                $data['message']    = 'Successfully Saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Something went wrong!';
                echo json_encode($data);
            }
        }
    }
    
    public function update_gmeet_class_status() {
        if ($this->request->is('post')) {
            $gclass_id  = $this->request->getPost('gclass_id');
            $status     = $this->request->getPost('status');
            
            $this->db->query("UPDATE gmeet SET status = '".$status."' WHERE id = '".$gclass_id."' ");    
                
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
    
    public function start_gmeet_class($id) {
        $apiUrl = site_info()['siteUrl'];
        $curl = curl_init($apiUrl."api/gmeetstart");
        $postdata = array(
            "id"    => $id,
        );
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
        
        $gcInfo = $this->db->query("SELECT * FROM gmeet WHERE id = '".$id."'  ")->getRow();    
        $url    = $gcInfo->url;
        
        return redirect()->to($url);
    }
    
    public function zoom_live_classes() {
        $data                   = [];
        $data['title'] 		    = 'ZOOM LIVE';
		$data['main_content']	= 'admin/web/live/zoom_live_classes';
		echo view('admin/include/template_main', $data);
    }
    
    public function zoom_live_classes_report() {
        $data                   = [];
        $data['title'] 		    = 'ZOOM LIVE';
		$data['main_content']	= 'admin/web/live/zoom_live_classes_report';
		echo view('admin/include/template_main', $data);
    }
// ============================== LESSON PLAN ================================//
    
    public function add_lesson_plan($sgsid, $ttid) {
        $data                   = [];
        $data['title'] 		    = 'LESSON PLAN';
        $session                = site_info()['active_session'];
        $ttinfo                 = $this->db->query("SELECT * FROM subject_timetable WHERE id = '".$ttid."' AND subject_group_subject_id = '".$sgsid."' ")->getRow();
        if (!empty($ttinfo)) {
            $data['lessons']    = $this->db->query("SELECT * FROM lesson WHERE subject_group_subject_id = '".$sgsid."' AND session_id = '".$session."' ")->getResult();
            $data['flag']       = 1;
            $data['ttinfo']     = $ttinfo;
        }
        
		$data['main_content']	= 'admin/web/lplan/add_lesson_plan';
		echo view('admin/include/template_main', $data);
    }
    public function get_topics_by_lesson_id() {
        $session    = site_info()['active_session'];
        $lesson_id  = $this->request->getPost('lesson_id');
        $result     = $this->db->query("SELECT * FROM topic WHERE lesson_id = '".$lesson_id."' AND session_id = '".$session."' ")->getResult();
        if ($result) {
            echo json_encode([
                'success' => true,
                'topics'  => $result
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'topics'  => []
            ]);
        }
    }
    
    public function save_lesson_plan() {
        if ($this->request->is('post')) {
            $day                     = $this->request->getPost('day');
            $lesson_id               = $this->request->getPost('lesson_id');
            $topic_id                = $this->request->getPost('topic_id');
            $sub_topic               = $this->request->getPost('sub_topic');
            $date                    = $this->request->getPost('date');
            $time_from               = $this->request->getPost('time_from');
            $time_to                 = $this->request->getPost('time_to');
            $lacture_youtube_url     = $this->request->getPost('lacture_youtube_url');
            $teaching_method         = $this->request->getPost('teaching_method');
            $general_objectives      = $this->request->getPost('general_objectives');
            $previous_knowledge      = $this->request->getPost('previous_knowledge');
            $comprehensive_questions = $this->request->getPost('comprehensive_questions');
            
            $formData = array(
				'topic_id'      => $topic_id,
				'session_id'    => site_info()['active_session'],
				'created_by'    => session('userid'),
				'created_for'   => session('userid'),
				'date'          => $date,
				'time_from'     => $time_from,
				'time_to'       => $time_to,
				'sub_topic'     => $sub_topic,
			);
			if (!empty($topic_id)&& !empty($date) && !empty($sub_topic) && !empty($time_from) && !empty($time_to)) {
			    
			    if (!empty($lacture_youtube_url)) {
			        $formData['lacture_youtube_url']        = $lacture_youtube_url;
			    }
			    if (!empty($teaching_method)) {
			        $formData['teaching_method']            = $teaching_method;
			    }
			    if (!empty($general_objectives)) {
			        $formData['general_objectives']         = $general_objectives;
			    }
			    if (!empty($previous_knowledge)) {
			        $formData['previous_knowledge']         = $previous_knowledge;
			    }
			    if (!empty($comprehensive_questions)) {
			        $formData['comprehensive_questions']    = $comprehensive_questions;
			    }
			    
			    $builder        = $this->db->table('subject_syllabus');
                $builder->insert($formData);
                
                echo json_encode([
                    'success' => true,
                    'message' => 'Lesson plan saved successfully.'
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'There was an error while saving the lesson plan.'
                ]);
            }
        }
    }
    
    public function lesson_plan() {
        $data                   = [];
        $data['title'] 		    = 'LESSON PLAN';
        
        $data['teachers_class'] = $this->StaffModel->teachers_timetable_info_grouped_class(site_info()['active_session'], session('userid'));
        $data['StaffModel']     = new StaffModel();
        
        $csIdInfo               = $this->db->query("SELECT id as csid FROM class_sections WHERE class_id = '".session('class_id')."' AND section_id = '".session('section_id')."'  ")->getRow();
        $data['all_subjects']   = $this->StaffModel->teachers_all_subjects(session('class_id'), session('section_id'), site_info()['active_session']);
        $data['sgsid2']      = null;
        if ($this->request->is('post')) {
            $sgsid          = $this->request->getPost('sgsid2');
            $sgcsid         = $this->request->getPost('sgcsid2');
            $result         = $this->StaffModel->teachers_subjects_lesson_plan(session('userid'), $sgsid, $sgcsid);
            $data['lplans'] = $result;
            $data['flag']   = 1;
            $data['sgsid2'] = $sgsid;
        }
        
		$data['main_content']	= 'admin/web/lplan/lesson_plan';
		echo view('admin/include/template_main', $data);
    }
    
    public function get_lesson_plan_report() {
        $sgsid      = $this->request->getPost('sgsid');
        $sgcsid     = $this->request->getPost('sgcsid');
        $result     = $this->StaffModel->teachers_subjects_lesson_plan(session('userid'), $sgsid, $sgcsid);
        echo json_encode($result);
    }
    
    public function save_lesson_plan_lesson() {
        if ($this->request->is('post')) {
            $sgsid      = $this->request->getPost('sgsid');
            $sgcsid       = $this->request->getPost('sgcsid');
            $lesson_name   = $this->request->getPost('lesson_name');
            
            foreach ($lesson_name as $lesson) {
            
            $formData = array(
				'session_id'                        => site_info()['active_session'],
				'subject_group_subject_id'          => $sgsid,
				'subject_group_class_sections_id'   => $sgcsid,
				'name'                              => $lesson,
			);
			if (!empty($sgsid)&& !empty($sgcsid) && !empty($lesson)) {
			    $builder            = $this->db->table('lesson');
                $builder->insert($formData);
            } 
            
            }
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
    
    public function get_lesson_plan_lesson_info($id1, $id2){
		$info = $this->StaffModel->all_lesson_by_subject($id1, $id2);
		echo json_encode($info);
    }
    
    public function save_lesson_plan_topic() {
        if ($this->request->is('post')) {
            $lesson_id      = $this->request->getPost('lesson_id');
            $topic_name     = $this->request->getPost('topic_name');
            
            foreach ($topic_name as $topic) {
            
            $formData = array(
				'session_id'    => site_info()['active_session'],
				'lesson_id'     => $lesson_id,
				'name'          => $topic,
			);
			if (!empty($lesson_id) && !empty($topic)) {
			    $builder            = $this->db->table('topic');
                $builder->insert($formData);
            } 
            
            }
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
    
    public function syllabus_status() {
        $data                   = [];
        $data['title'] 		    = 'SYLLABUS';
        
        $data['teachers_class'] = $this->StaffModel->teachers_timetable_info_grouped_class(site_info()['active_session'], session('userid'));
        $data['StaffModel']     = new StaffModel();
        
        $csIdInfo               = $this->db->query("SELECT id as csid FROM class_sections WHERE class_id = '".session('class_id')."' AND section_id = '".session('section_id')."'  ")->getRow();
        //$data['all_subjects']   = $this->StaffModel->class_section_subject_group_subjects($csIdInfo->csid,site_info()['active_session']);
        $data['all_subjects']   = $this->StaffModel->teachers_all_subjects(session('class_id'), session('section_id'), site_info()['active_session']);
        $data['sgsid']          = '';
        $data['sgcsid']         = '';
        if ($this->request->is('post')) {
            $data['sgsid']      = $this->request->getPost('sgsid');
            $data['sgcsid']     = $this->request->getPost('sgcsid');
            $data['flag']       = '1';
            $data['lessons']    = $this->StaffModel->all_lesson_by_subject($data['sgsid'], $data['sgcsid']);
        }
        
		$data['main_content']	= 'admin/web/lplan/syllabus_status';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_update_topic_status() {
        if ($this->request->is('post')) {
            $tid      = $this->request->getPost('topicId');
            $date     = $this->request->getPost('date');
            
            $formData = array(
				'complete_date' => $date,
				'status' => 1,
			);
			if (!empty($date) && !empty($tid)) {
			    $builder = $this->db->table('topic');
                $builder->where('topic.id', $tid);
                $builder->update($formData); 
            } 
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
//=================================== HOSTEL =================================//
    public function reports() {
        $data                   = [];
        $data['title'] 		    = 'REPORTS';
        
		$data['main_content']	= 'admin/web/reports/reports';
		echo view('admin/include/template_main', $data);
    }
    
    public function hostel_reports() {
        $data                   = [];
        $data['title'] 		    = 'HOSTEL DETAILS';
        
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
        $data['StaffModel']         = new StaffModel();
        
		$data['main_content']	= 'admin/web/reports/hostel_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function transport_reports() {
        $data                   = [];
        $data['title'] 		    = 'HOSTEL DETAILS';
        
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
        
        $data['StaffModel']         = new StaffModel();
        
		$data['main_content']	= 'admin/web/reports/transport_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function assignment_reports() {
        $data                   = [];
        $data['title'] 		    = 'ASSIGNMENT';
        
        $data['fdate']          = date("Y-m-d");
        $data['tdate']          = date("Y-m-d");
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['flag']       = '1';
            
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
        $data['students']       = $student_list;
        
        $data['StaffModel'] = new StaffModel();
        }
        
		$data['main_content']	= 'admin/web/reports/assignment_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function student_reports() {
        $data                   = [];
        $data['title'] 		    = 'STUDENTS';
        
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
        $data['students']       = $student_list;
        
		$data['main_content']	= 'admin/web/reports/student_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function guardian_reports() {
        $data                   = [];
        $data['title'] 		    = 'STUDENTS';
        
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
        $data['students']       = $student_list;
        
		$data['main_content']	= 'admin/web/reports/guardian_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function parent_login() {
        $data                   = [];
        $data['title'] 		    = 'PARENT LOGIN';
        
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
        $data['students']       = $student_list;
        
		$data['main_content']	= 'admin/web/reports/parent_login';
		echo view('admin/include/template_main', $data);
    }
    
    public function admission_reports() {
        $data                   = [];
        $data['title'] 		    = 'PARENT LOGIN';
        
        $data['fdate']          = date("Y-m-d");
        $data['tdate']          = date("Y-m-d");
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['flag']       = '1';
            $data['students']   = $this->StaffModel->all_student_admission_info(session('class_id'), session('section_id'), site_info()['active_session'], $data['fdate'], $data['tdate']);
            $data['StaffModel'] = new StaffModel();
        }
        
		$data['main_content']	= 'admin/web/reports/admission_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function sibling_reports() {
        $data                   = [];
        $data['title'] 		    = 'SIBLING';
        
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
        $data['students']       = $student_list;
        
        $data['StaffModel'] = new StaffModel();
        
		$data['main_content']	= 'admin/web/reports/sibling_report';
		echo view('admin/include/template_main', $data);
    }
//=================================== VISITOR =================================//
    public function frontdesk() {
        $data                   = [];
        $data['title'] 		    = 'Frontdesk';
        
		$data['main_content']	= 'admin/web/frontdesk/frontdesk';
		echo view('admin/include/template_main', $data);
    }
    
    public function visitors() {
        $data                   = [];
        $data['title'] 		    = 'Visitors';
        
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['flag']       = '1';
            $data['visitors']   = $this->StaffModel->all_visitor_reports($data['fdate'], $data['tdate']);
            $data['StaffModel'] = new StaffModel();
        } else {
            $data['fdate']      = date("Y-m-d");
            $data['tdate']      = date("Y-m-d");
            $data['flag']       = '1';
            $data['visitors']   = $this->StaffModel->all_visitor_reports($data['fdate'], $data['tdate']);
            $data['StaffModel'] = new StaffModel();
        }
        $data['purpose']        = $this->StaffModel->all_visitor_purpose();
        $data['students']       = $this->StaffModel->all_students_info();
        $data['staff']          = $this->StaffModel->all_staff_info();
        
		$data['main_content']	= 'admin/web/frontdesk/visitors';
		echo view('admin/include/template_main', $data);
    }
    
    public function approve_visit($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Visitors';
        
        $data['visitors']   = $this->StaffModel->all_approval_pending_visitor_reports(session('userid'));
        
        if (!empty($id)) {
            $this->db->query("UPDATE visitors_book SET meeting_approval = '1' WHERE  id = '".$id."' ");
            return redirect()->to(base_url().'admin/web/approve_visit');
        }
        
		$data['main_content']	= 'admin/web/frontdesk/approve_visit';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_visitor($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Visitor';
        
        $data['purpose']        = $this->StaffModel->all_visitor_purpose();
        $data['students']       = $this->StaffModel->all_students_info();
        $data['staff']          = $this->StaffModel->all_staff_info();
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
        
        $data['StaffModel']     = new StaffModel();
        $data['id']             = $id;
        if (!empty($id)) {
            $data['vinfo']      = $this->StaffModel->visitor_info($id);
        }
        
		$data['main_content']	= 'admin/web/frontdesk/add_visitor';
		echo view('admin/include/template_main', $data);
    }
    
    public function aview_visitor($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Visitor';
        
        $data['purpose']        = $this->StaffModel->all_visitor_purpose();
        $data['students']       = $this->StaffModel->all_students_info();
        $data['staff']          = $this->StaffModel->all_staff_info();
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
        
        if (!empty($id)) {
            $data['vinfo']      = $this->StaffModel->visitor_info($id);
        }
        
		$data['main_content']	= 'admin/web/frontdesk/aview_visitor';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_visitor() {
        if ($this->request->is('post')) {
            $vid            = $this->request->getPost('vid');
            $purpose        = $this->request->getPost('purpose');
            $meeting_with   = $this->request->getPost('meeting_with');
            $student_id     = $this->request->getPost('student_id');
            $staff_id       = $this->request->getPost('staff');
            $visitor_name   = $this->request->getPost('visitor_name');
            $visitor_phone  = $this->request->getPost('visitor_phone');
            $id_card        = $this->request->getPost('id_card');
            $number_of_person   = $this->request->getPost('number_of_person');
            $date           = $this->request->getPost('date');
            $time_in        = $this->request->getPost('time_in');
            $time_out       = $this->request->getPost('time_out');
            $file           = $this->request->getFile('file');
            $note           = $this->request->getPost('note');
            $image_data     = $this->request->getPost('image_data');
            
            $meeting_approval =  $this->request->getPost('meeting_approval');
            
            
            if (empty($vid)) {
            $formData = array(
				'staff_id'              => $this->request->getPost('staff'),
				'student_session_id'    => $this->request->getPost('student_id'),
				'purpose'               => $purpose,
				'name'                  => $visitor_name,
				'contact'               => $visitor_phone,
				'id_proof'              => $id_card,
				'no_of_people'          => $number_of_person,
				'date'                  => $date,
				'in_time'               => $time_in,
				'out_time'              => $time_out,
				'note'                  => $note,
				'visitor_image'         => $image_data,
				'meeting_with'          => $meeting_with,
			);
			
			$directory              = $_SERVER['DOCUMENT_ROOT'].'/uploads/front_office/visitors';
			if ($file->isValid() && !$file->hasMoved()) {
                $name               = $file->getName();
                $ext                = $file->getClientExtension();
                $newName            = 'thumb'.$file->getRandomName(); 
                $file->move($directory, $newName);
                $formData['image']  = $newName; 
            }
            
            $builder                    = $this->db->table('visitors_book');
            $builder->insert($formData);
            
            if ($meeting_with == 'staff') {
                $ptinfo     = $this->db->query("SELECT token_id AS tid FROM `staff` WHERE id = '".$staff_id."'  ")->getRow();
                sendPushNotice($ptinfo->tid, $visitor_name.' wants to meet you regarding '.$purpose.'. Note : '.$note.'Please update frontdesk about your availability.');
            }
            
            
            } else {
            $formData = array(
				'staff_id'              => $this->request->getPost('staff'),
				'student_session_id'    => $this->request->getPost('student_id'),
				'purpose'               => $purpose,
				'name'                  => $visitor_name,
				'contact'               => $visitor_phone,
				'id_proof'              => $id_card,
				'no_of_people'          => $number_of_person,
				'date'                  => $date,
				'in_time'               => $time_in,
				'out_time'              => $time_out,
				'note'                  => $note,
				'meeting_with'          => $meeting_with,
				'meeting_approval'      => $meeting_approval
			);
            $builder                    = $this->db->table('visitors_book');
            $builder->where('visitors_book.id', $vid);
            $builder->update($formData);    
            }
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
//================================== INQUIRY =================================//
    public function inquiry() {
        $data                   = [];
        $data['title'] 		    = 'Inquiry';
        
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['tdate']      = $this->request->getPost('tdate');
            $data['flag']       = '1';
            $data['inquiries']  = $this->StaffModel->all_inquiry_reports($data['fdate'], $data['tdate']);
            $data['StaffModel'] = new StaffModel();
        } else {
            $data['fdate']      = date("Y-m-d");
            $data['tdate']      = date("Y-m-d");
            $data['flag']       = '1';
            $data['inquiries']  = $this->StaffModel->all_inquiry_reports($data['fdate'], $data['tdate']);
            $data['StaffModel'] = new StaffModel();
        }
        $data['staff']          = $this->StaffModel->all_staff_info();
        $data['source']         = $this->StaffModel->all_source();
        
		$data['main_content']	= 'admin/web/frontdesk/inquiry';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_inquiry($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Inquiry';
        
        $data['staff']          = $this->StaffModel->all_staff_info();
        $data['source']         = $this->StaffModel->all_source();
        $data['reference']      = $this->StaffModel->all_reference();
        
        $data['StaffModel']     = new StaffModel();
        $data['id']             = $id;
        if (!empty($id)) {
            $data['iinfo']      = $this->StaffModel->inquiry_info($id);
        }
        $data['allClsInfo']     = $this->StaffModel->all_class_info();
        
		$data['main_content']	= 'admin/web/frontdesk/add_inquiry';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_inquiry() {
        if ($this->request->is('post')) {
            $iid            = $this->request->getPost('iid');
            $name           = $this->request->getPost('name');
            $contact        = $this->request->getPost('contact');
            $email          = $this->request->getPost('email');
            $address        = $this->request->getPost('address');
            $description    = $this->request->getPost('description');
            $note           = $this->request->getPost('note');
            $date           = $this->request->getPost('date');
            $follow_up_date = $this->request->getPost('follow_up_date');
            $assigned       = $this->request->getPost('assigned');
            $reference      = $this->request->getPost('reference');
            $source         = $this->request->getPost('source');
            $class_id       = $this->request->getPost('class_id');
            $no_of_child    = $this->request->getPost('no_of_child');
            $referral_staff = $this->request->getPost('referral_staff');
            
            
            
            if (empty($iid)) {
            $formData = array(
				'name'          => $this->request->getPost('name'),
				'contact'       => $this->request->getPost('contact'),
				'email'         => $this->request->getPost('email'),
				'address'       => $this->request->getPost('address'),
				'description'   => $this->request->getPost('description'),
				'note'          => $this->request->getPost('note'),
				'date'          => $this->request->getPost('date'),
				'follow_up_date'=> $this->request->getPost('follow_up_date'),
				'assigned'      => $this->request->getPost('assigned'),
				'reference'     => $this->request->getPost('reference'),
				'source'        => $this->request->getPost('source'),
				'class_id'      => $this->request->getPost('class_id'),
				'no_of_child'   => $this->request->getPost('no_of_child'),
				'referral_staff'=> $this->request->getPost('referral_staff'),
			);
            $builder            = $this->db->table('enquiry');
            $builder->insert($formData);
            } else {
            $formData = array(
				'name'          => $this->request->getPost('name'),
				'contact'       => $this->request->getPost('contact'),
				'email'         => $this->request->getPost('email'),
				'address'       => $this->request->getPost('address'),
				'description'   => $this->request->getPost('description'),
				'note'          => $this->request->getPost('note'),
				'date'          => $this->request->getPost('date'),
				'follow_up_date'=> $this->request->getPost('follow_up_date'),
				'assigned'      => $this->request->getPost('assigned'),
				'reference'     => $this->request->getPost('reference'),
				'source'        => $this->request->getPost('source'),
				'class_id'      => $this->request->getPost('class_id'),
				'no_of_child'   => $this->request->getPost('no_of_child'),
				'referral_staff'=> $this->request->getPost('referral_staff'),
			);
            $builder            = $this->db->table('enquiry');
            $builder->where('enquiry.id', $iid);
            $builder->update($formData);    
            }
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
    
    public function inquiry_followup($id) {
        $data                   = [];
        $data['title'] 		    = 'Followup';
        
        $data['iinfo']      = $this->StaffModel->inquiry_info($id);
        $data['finfos']     = $this->StaffModel->inquiry_followup_info($id);
        
		$data['main_content']	= 'admin/web/frontdesk/inquiry_followup';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_inquiry_followup() {
        if ($this->request->is('post')) {
            $iid        = $this->request->getPost('iid');
            $date       = $this->request->getPost('date');
            $next_date  = $this->request->getPost('next_date');
            $response   = $this->request->getPost('response');
            $note       = $this->request->getPost('note');
            $status     = $this->request->getPost('status');
            
            $formData = array(
				'enquiry_id'    => $iid,
				'date'          => $date,
				'next_date'     => $next_date,
				'response'      => $response,
				'note'          => $note,
				'followup_by'   => session('userid'),
			);
            $builder            = $this->db->table('follow_up');
            $builder->insert($formData);
            
            $this->db->query("UPDATE enquiry SET status = '$status' WHERE id= '".$iid."' ");
            $this->db->query("UPDATE enquiry SET follow_up_date = '$next_date' WHERE id= '".$iid."' ");
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
//=================================== HOSTEL =================================//
    public function hostel() {
        $data                   = [];
        $data['title'] 		    = 'Hostel';
        
        $data['hostels']        = $this->StaffModel->all_hostels();
        $data['staff']          = $this->StaffModel->all_staff_info();
        
		$data['main_content']	= 'admin/web/hostel/hostel';
		echo view('admin/include/template_main', $data);
    }
    
    public function get_hostel_info($id){
		$info = $this->StaffModel->hostel_info($id);
		echo json_encode($info);
    }
    
    public function save_hostel() {
        if ($this->request->is('post')) {
            $hid                = $this->request->getPost('hid');
            $name               = $this->request->getPost('name');
            $type               = $this->request->getPost('type');
            $address            = $this->request->getPost('address');
            $intake             = $this->request->getPost('intake');
            $hostel_incharge    = $this->request->getPost('hostel_incharge');
            $description        = $this->request->getPost('description');
            $meals              = $this->request->getPost('meal');
            
            if (isset($_POST['meal'])) {
                $mealArray = array();
                foreach ($meals as $meal) {
                    $mealArray[] = $meal;
                }
                $meal = implode(",", $mealArray) ;
            }
            
            if (empty($hid)) {
            $formData = array(
				'name'              => $name,
				'type'              => $type,
				'address'           => $address,
				'intake'            => $intake,
				'hostel_incharge'   => $hostel_incharge,
				'description'       => $description,
				'meal'              => $meals,
			);
            $builder            = $this->db->table('hostel');
            $builder->insert($formData);
            } else {
            $formData = array(
				'name'              => $name,
				'type'              => $type,
				'address'           => $address,
				'intake'            => $intake,
				'hostel_incharge'   => $hostel_incharge,
				'description'       => $description,
				'meal'              => $meals,
			);
            $builder            = $this->db->table('hostel');
            $builder->where('hostel.id', $hid);
            $builder->update($formData);    
            }
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
    
    public function hostel_rooms() {
        $data                   = [];
        $data['title'] 		    = 'Hostel';
        
        $data['hostels']        = $this->StaffModel->all_hostels();
        $data['room_type']      = $this->StaffModel->all_room_types();
        $data['rooms']          = $this->StaffModel->all_hostel_rooms();
        $data['staff']          = $this->StaffModel->all_staff_info();
        
		$data['main_content']	= 'admin/web/hostel/hostel_rooms';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_hostel_room() {
        if ($this->request->is('post')) {
            $room_no        = $this->request->getPost('room_no');
            $hostel_id      = $this->request->getPost('hostel_id');
            $room_type_id   = $this->request->getPost('room_type_id');
            $no_of_bed      = $this->request->getPost('no_of_bed');
            $cost_per_bed   = $this->request->getPost('cost_per_bed');
            $cost_term      = $this->request->getPost('cost_term');
            $description    = $this->request->getPost('description');
            $hfName         = 'HostelFee'.$cost_per_bed;
            $formData = array(
				'hostel_id'     => $hostel_id,
				'room_type_id'  => $room_type_id,
				'room_no'       => $room_no,
				'no_of_bed'     => $no_of_bed,
				'cost_per_bed'  => $cost_per_bed,
				'cost_term'     => $cost_term,
				'fee_title'     => $hfName,
				'description'   => $description,
			);
            $builder            = $this->db->table('hostel_rooms');
            $builder->insert($formData);
            $savedRmId          = $this->db->insertID();
            
            $hf1Info = $this->db->query("SELECT * FROM feetype WHERE type = '".$hfName."' ")->getRow();
            
            if (empty($hf1Info->id)) {
            
            $datahf1 = array(
                'type'      => $hfName,
                'code'      => 'HF'.$cost_per_bed,
                'is_active' => 'no',
            );
            $builder            = $this->db->table('feetype');
            $builder->insert($datahf1);
            $savedFeeId         = $this->db->insertID();
            
            $datahf2 = array(
                'name'          => $hfName,
                'description'   => 'HF'.$cost_per_bed,
                'is_active'     => 'no',
            );
            $builder            = $this->db->table('fee_groups');
            $builder->insert($datahf2);
            $savedFgpId         = $this->db->insertID();
            
            $datahf3 = array(
                'fee_groups_id '=> $savedFgpId,
                'session_id'    => site_info()['active_session'],
                'is_active'     => 'no',
            );
            $builder            = $this->db->table('fee_session_groups');
            $builder->insert($datahf3);
            $savedFsgId         = $this->db->insertID();
            
            
            if ($cost_term == 'Annually') {
            $datahf4 = array(
                'fee_session_group_id'  => $savedFsgId,
                'fee_groups_id'         => $savedFgpId,
                'feetype_id'            => $savedFeeId,
                'session_id'            => site_info()['active_session'],
                'amount'                => $cost_per_bed,
                'due_date'              => date("Y-04-10"),
                'is_active'             => 'no',
            );
            $builder            = $this->db->table('fee_groups_feetype');
            $builder->insert($datahf4);
            $savedFtpId         = $this->db->insertID();
            } else {
                
                $datahf4 = array(
                    'fee_session_group_id'  => $savedFsgId,
                    'fee_groups_id'         => $savedFgpId,
                    'feetype_id'            => $savedFeeId,
                    'session_id'            => site_info()['active_session'],
                    'amount'                => $cost_per_bed,
                    'due_date'              => date("Y-04-10"),
                    'is_active'             => 'no',
                    'collection_type'       => '12',
                );
                $builder            = $this->db->table('fee_groups_feetype');
                $builder->insert($datahf4);
                $savedFtpId         = $this->db->insertID();
                
                $feeAmnt = $cost_per_bed;
                $colDate = date("Y-04-10");
                for ($x = 1; $x <= 12; $x++) {
                    if ($x == 1) {
                        $ncolDate = date("Y-04-10");
                    } else {
                        $ncolDate = date('Y-m-d', strtotime('+1 months', strtotime($colDate)));
                    }
                    $datahf5= array(
                        'parent_id'             => $savedFtpId,
                        'fee_session_group_id'  => $savedFsgId,
                        'fee_groups_id'         => $savedFgpId,
                        'feetype_id'            => $savedFeeId,
                        'session_id'            => site_info()['active_session'],
                        'amount'                => $feeAmnt,
                        'due_date'              => $ncolDate,
                        'is_active'             => 'no',
                    );
                    $builder            = $this->db->table('fee_groups_feetype');
                    $builder->insert($datahf4);
                    $savedFtpId         = $this->db->insertID();
                }
                
            }
            
            
            }
            
            for ($z = 1; $z <= $no_of_bed; $z++) {
                $databn = array(
                    'hostel_id'     => $hostel_id,
                    'room_id'       => $savedRmId,
                    'room_number'   => $room_no,
                    'bed_code'      => $hostel_id.'-'.$savedRmId.'-'.$room_no.'-'.$z,
                );
                $builder            = $this->db->table('cyc_hostel_room_bed');
                $builder->insert($databn);
            }
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
    
    public function hostel_attendance() {
        $data                   = [];
        $data['title'] 		    = 'Hostel';
        
        $data['hostels']        = $this->StaffModel->all_hostels();
        $data['fdate']          = date("Y-m-d");
        $data['hid']            = '';
        if ($this->request->is('post')) {
            $data['fdate']      = $this->request->getPost('fdate');
            $data['hid']        = $this->request->getPost('hid');
            $data['flag']       = '1';
            $data['students']   = $this->StaffModel->all_hostel_students_info($data['hid']);
        }
        
		$data['main_content']	= 'admin/web/hostel/hostel_attendance';
		echo view('admin/include/template_main', $data);
    }
    
    function save_student_hostel_attendance() {
        if ($this->request->is('post')) {
            $canSave        = TRUE;
            $date           = $this->request->getPost('date');
            $hostel_id      = $this->request->getPost('hostel_id');
            $students       = $this->request->getPost('student_id');
            foreach ($students as $key => $student) {
                $result = $this->db->query("SELECT * FROM student_attendences_hostel WHERE student_session_id  = '".$student."' AND date = '".$date."'  ")->getRow();
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
				$builder = $this->db->table('student_attendences_hostel');
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
//=================================== LIBRARY =================================//
    public function library() {
        $data                   = [];
        $data['title'] 		    = 'Library';
        
        $data['books']          = $this->StaffModel->all_books();
        $data['staff']          = $this->StaffModel->all_staff_info();
        
		$data['main_content']	= 'admin/web/library/library';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_staff_member() {
        $data                   = [];
        $data['title'] 		    = 'Members';
        
        $data['staffs']         = $this->StaffModel->all_staff_info();
        
		$data['main_content']	= 'admin/web/library/add_staff_member';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_student_member() {
        $data                   = [];
        $data['title'] 		    = 'Members';
        
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
        
        if ($this->request->is('post')) {
            $data['flag']       = '1';
            $data['class_id']   = $this->request->getPost('class_id');
            $data['section_id'] = $this->request->getPost('section_id');
            $data['students']   = $this->StaffModel->all_student_info($data['class_id'], $data['section_id'], site_info()['active_session']);
        }
        
		$data['main_content']	= 'admin/web/library/add_student_member';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_members($id, $type) {
        $mcno = $this->db->query("SELECT MAX(library_card_no) as mln FROM libarary_members ")->getRow();
        $ncno = $mcno->mln + 1;
        $formData = array(
            'library_card_no'   => $ncno,
            'member_type'       => $type,
            'member_id'         => $id,
		);
		$builder = $this->db->table('libarary_members');
        $builder->insert($formData);
        
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data); 
    }
    
    public function library_members() {
        $data                   = [];
        $data['title'] 		    = 'Members';

        $data['members']        = $this->StaffModel->all_libarary_members();
        $data['StaffModel']     = new StaffModel();
        
		$data['main_content']	= 'admin/web/library/library_members';
		echo view('admin/include/template_main', $data);
    }
    
    public function add_library_book($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Book';
        $data['allClsInfo']     = $this->StaffModel->all_class_info(session('class_id'));
        
        $data['id']             = $id;
        if (!empty($id)) {
            $data['binfo']      = $this->StaffModel->book_info($id);
        }
        
		$data['main_content']	= 'admin/web/library/add_library_book';
		echo view('admin/include/template_main', $data);
    }
    
    public function save_library_book() {
        if ($this->request->is('post')) {
            $bid            = $this->request->getPost('bid');
            $book_title     = $this->request->getPost('book_title');
            $book_no        = $this->request->getPost('book_no');
            $isbn_no        = $this->request->getPost('isbn_no');
            $subject        = $this->request->getPost('subject');
            $claases        = $this->request->getPost('claases');
            $category       = $this->request->getPost('category');
            $rack_no        = $this->request->getPost('rack_no');
            $publish        = $this->request->getPost('publish');
            $author         = $this->request->getPost('author');
            $qty            = $this->request->getPost('qty');
            $perunitcost    = $this->request->getPost('perunitcost');
            $postdate       = $this->request->getPost('postdate');
            $description    = $this->request->getPost('description');
            
            
            
            if (empty($bid)) {
            $formData = array(
				'book_title'    => $this->request->getPost('book_title'),
				'book_no'       => $this->request->getPost('book_no'),
				'isbn_no'       => $this->request->getPost('isbn_no'),
				'subject'       => $this->request->getPost('subject'),
				'claases'       => $this->request->getPost('claases'),
				'category'      => $this->request->getPost('category'),
				'rack_no'       => $this->request->getPost('rack_no'),
				'publish'       => $this->request->getPost('publish'),
				'author'        => $this->request->getPost('author'),
				'qty'           => $this->request->getPost('qty'),
				'perunitcost'   => $this->request->getPost('perunitcost'),
				'postdate'      => $this->request->getPost('postdate'),
				'description'   => $this->request->getPost('description'),
			);
            $builder            = $this->db->table('books');
            $builder->insert($formData);
            } else {
            $formData = array(
				'book_title'    => $this->request->getPost('book_title'),
				'book_no'       => $this->request->getPost('book_no'),
				'isbn_no'       => $this->request->getPost('isbn_no'),
				'subject'       => $this->request->getPost('subject'),
				'claases'       => $this->request->getPost('claases'),
				'category'      => $this->request->getPost('category'),
				'rack_no'       => $this->request->getPost('rack_no'),
				'publish'       => $this->request->getPost('publish'),
				'author'        => $this->request->getPost('author'),
				'qty'           => $this->request->getPost('qty'),
				'perunitcost'   => $this->request->getPost('perunitcost'),
				'postdate'      => $this->request->getPost('postdate'),
				'description'   => $this->request->getPost('description'),
			);
            $builder            = $this->db->table('books');
            $builder->where('books.id', $bid);
            $builder->update($formData);    
            }
            
            $data['status']     = 'success';
            $data['message']    = 'Successfully Saved!';
            echo json_encode($data);
        }
    }
    
    public function issue_book($id) {
        $data                   = [];
        $data['title'] 		    = 'Issue';
        
        $data['mid']        = $id;
        $data['minfo']      = $this->StaffModel->members_info($id);
        $data['issues']     = $this->StaffModel->book_issued_info($id);
        $data['books']      = $this->StaffModel->all_books($id);
        
		$data['main_content']	= 'admin/web/library/issue_book';
		echo view('admin/include/template_main', $data);
    }
    
    public function get_available_book_qty($id){
		$issued     = $this->db->query("SELECT COUNT(id) AS ib FROM book_issues WHERE book_id  = '".$id."' AND is_returned = '0' ")->getRow();
		$bukInfo    = $this->StaffModel->book_info($id);
		$avlbl      = $bukInfo->qty - $issued->ib;
		echo json_encode($avlbl); 
    }
    
    public function save_issued_book() {
        if ($this->request->is('post')) {
            $book_id            = $this->request->getPost('book_id');
            $duereturn_date     = $this->request->getPost('duereturn_date');
            $mid                = $this->request->getPost('mid');
            
            $issued             = $this->db->query("SELECT COUNT(id) AS ib FROM book_issues WHERE book_id  = '".$book_id."' AND is_returned = '0' ")->getRow();
		    $bukInfo            = $this->StaffModel->book_info($book_id);
            $avlbl              = $bukInfo->qty - $issued->ib;
            
            $formData = array(
				'book_id'           => $book_id,
				'member_id'         => $mid,
				'duereturn_date'    => $duereturn_date,
				'issue_date'        => date("Y-m-d"),
			);
			if ($avlbl > 0) {
                $builder            = $this->db->table('book_issues');
                $builder->insert($formData);
            
                $data['status']     = 'success';
                $data['message']    = 'Successfully Saved!';
                echo json_encode($data);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Not available!';
                echo json_encode($data);
            }
        }
    }
    
    public function return_issue_book($biid) {
        $formData = array(
            'is_returned'   => 1,
            'return_date'   => date("Y-m-d"),
        );
        $builder            = $this->db->table('book_issues');
        $builder->where('book_issues.id', $biid);
        $builder->update($formData);    
            
        return redirect()->to(base_url().'admin/web/library_members');
    }
}