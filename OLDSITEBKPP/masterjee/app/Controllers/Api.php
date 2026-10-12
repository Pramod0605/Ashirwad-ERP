<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Admin\LoginModel;
use App\Models\Admin\ApiModel;
use App\Models\Admin\StaffModel;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\RequestInterface;

class Api extends BaseController
{
    protected $security_authentication_flag = true;
    public function __construct() {
        $this->LoginModel   = new LoginModel();
        $this->ApiModel     = new ApiModel();
        $this->StaffModel   = new StaffModel();
        $this->db           = db_connect();
        $this->db                 = db_connect();
    }

//================================== LOGIN ===================================//
    public function login()
    {
    if ($this->request->getMethod() === 'post') {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $email = $data['email'];
        $password = $data['password'];
        $check_auth_client = $this->ApiModel->check_auth_client();

        if ($check_auth_client == true) {
            $datLogin = array(
                'username' => $email,
                'password' => $password
            );

            $result = $this->LoginModel->login($datLogin);

            if ($result) {
                if ($result->is_active == 1 && !empty($result->designation)) {
                    $diInfo = $this->db->query("SELECT * FROM staff_designation WHERE id = '".$result->designation."' ")->getRow();
                    $ciInfo = $this->db->query("SELECT * FROM class_teacher WHERE staff_id = '".$result->id."' ")->getRow();
                    $aciInfo = $this->db->query("SELECT * FROM cyc_additional_section_teacher WHERE staff_id = '".$result->id."' ")->getRow();
                    $stgInfo = $this->db->query("SELECT * FROM sch_settings WHERE id = '1' ")->getRow();

                    $isLibrn = $this->db->query("SELECT id as lid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '4' ")->getRow();
                    $isLibrn = !empty($isLibrn) ? true : false;

                    $isRcptn = $this->db->query("SELECT id as rid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '6' ")->getRow();
                    $isRcptn = !empty($isRcptn) ? true : false;

                    $isTechr = $this->db->query("SELECT id as tid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '2' ")->getRow();
                    $isTechr = !empty($isTechr) ? true : false;

                    $isClsTtbl = $this->db->query("SELECT * FROM subject_timetable WHERE staff_id = '".$result->id."' AND session_id = '".$stgInfo->session_id."' ")->getRow();
                    $isClInc = !empty($isClsTtbl) ? true : false;

                    $isCord = $this->db->query("SELECT cc_id as ccid FROM cyc_class_coordinator WHERE staff_id = '".$result->id."' ")->getRow();
                    $isCord = !empty($isCord) ? true : false;

                    $isAdmin = $this->db->query("SELECT id as aid FROM staff_roles WHERE (staff_id = '".$result->id."' AND role_id = '1') OR (staff_id = '".$result->id."' AND role_id = '7') ")->getRow();
                    $isAdmin = !empty($isAdmin) ? true : false;

                    if (!empty($ciInfo->id)) {
                        $user_data = array(
                            'userid' => $result->id,
                            'user_id' => $result->id,
                            'staff_id' => $result->employee_id,
                            'username' => $result->email,
                            'first_name' => $result->name,
                            'last_name' => $result->surname,
                            'mobile' => $result->contact_no,
                            'email' => $result->email,
                            'class_id' => $ciInfo->class_id,
                            'section_id' => $ciInfo->section_id,
                            'push_token' => $result->token_id,
                            'isLoggedIn' => true,
                            'isSectionIn' => true,
                            'isLibrn' => $isLibrn,
                            'isRcptn' => $isRcptn,
                            'isTechr' => $isTechr,
                            'isClInc' => $isClInc,
                            'isCoord' => $isCord,
                            'isAdmin' => $isAdmin,
                            'sessionId' => $stgInfo->session_id,
                        );
                        
                        $response = [
                            'status'    => 'success', 
                            'message'   => 'Logged in successfully', 
                            'data'      => $user_data, 
                            'result'    => true
                        ];
                        return $this->response
                            ->setStatusCode(200)
                            ->setJSON($response);
                    } elseif (!empty($aciInfo->at_id)) {
                        $user_data = array(
                            'userid' => $result->id,
                            'user_id' => $result->id,
                            'staff_id' => $result->employee_id,
                            'username' => $result->email,
                            'first_name' => $result->name,
                            'last_name' => $result->surname,
                            'mobile' => $result->contact_no,
                            'email' => $result->email,
                            'class_id' => $aciInfo->class_id,
                            'section_id' => $aciInfo->section_id,
                            'push_token' => $result->token_id,
                            'isLoggedIn' => true,
                            'isSectionIn' => true,
                            'isLibrn' => $isLibrn,
                            'isRcptn' => $isRcptn,
                            'isTechr' => $isTechr,
                            'isClInc' => $isClInc,
                            'isCoord' => $isCord,
                            'isAdmin' => $isAdmin,
                            'sessionId' => $stgInfo->session_id,
                        );
                        $response = [
                            'status'    => 'success', 
                            'message'   => 'Logged in successfully', 
                            'data'      => $user_data, 
                            'result'    => true
                        ];
                        return $this->response
                            ->setStatusCode(200)
                            ->setJSON($response);
                    } else {
                        $user_data = array(
                            'userid' => $result->id,
                            'user_id' => $result->id,
                            'staff_id' => $result->employee_id,
                            'username' => $result->email,
                            'first_name' => $result->name,
                            'last_name' => $result->surname,
                            'mobile' => $result->contact_no,
                            'email' => $result->email,
                            'class_id' => '',
                            'section_id' => '',
                            'push_token' => $result->token_id,
                            'isLoggedIn' => true,
                            'isSectionIn' => false,
                            'isLibrn' => $isLibrn,
                            'isRcptn' => $isRcptn,
                            'isTechr' => $isTechr,
                            'isClInc' => $isClInc,
                            'isCoord' => $isCord,
                            'isAdmin' => $isAdmin,
                            'sessionId' => $stgInfo->session_id,
                        );
                        if ($diInfo->designation == 'Counsellor' || $diInfo->designation == 'Lead Manager') {
                            $user_data['isLeadHandler'] = true;
                        }

                        $response = [
                            'status'    => 'success', 
                            'message'   => 'Logged in successfully', 
                            'data'      => $user_data, 
                            'result'    => true
                        ];
                        return $this->response
                            ->setStatusCode(200)
                            ->setJSON($response);
                    }
                } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Users id is inactive!', 
                        'data'      => null, 
                        'result'    => false
                    ];
                    return $this->response
                        ->setStatusCode(401)
                        ->setJSON($response);
                }
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid username and password!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid token!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(401)
                ->setJSON($response);
        }
    } else {
        $response = [
            'status'    => 'error', 
            'message'   => 'Invalid method!', 
            'data'      => null, 
            'result'    => false
        ];
        return $this->response
            ->setStatusCode(405)
            ->setJSON($response);
    }
    }

    
//================================== BASIC ===================================//
    public function baseInfo() {
        $return = site_info();
        $response = [
            'status'    => 'success', 
            'message'   => 'Request processed successfully.', 
            'data'      => $return, 
            'result'    => true
        ];
        return $this->response
            ->setStatusCode(200)
            ->setJSON($response);
    }
    public function getClassSection() {
        if ($this->request->getMethod() === 'post') {
            $jsonData           = file_get_contents('php://input');
            $data               = json_decode($jsonData, true);
            if (!empty($data['classId'])) {
                $classId        = $data['classId'];
            } else {
                $classId        = null;
            }
            $userId             = $data['userId'];
            $check_auth_client  = $this->ApiModel->check_auth_client();
            $sessionId          = site_info()['active_session'];
            
            if ($check_auth_client == true) {
                $return       = array();    
                if (empty($classId)) {
                    if (getUserRole($userId)['isAdmin']   == true) {
                        $allClsInfo         =  $this->StaffModel->all_class_info();
                    } elseif (getUserRole($userId)['isTechr'] == true && getUserRole($userId)['isCoord'] == false) {
                        $allClsInfo         = $this->StaffModel->all_teachers_class_info($userId, $sessionId);
                    } elseif (getUserRole($userId)['isTechr'] == false && getUserRole($userId)['isCoord'] == true) {
                        $allClsInfo         = $this->StaffModel->all_coordinator_class_info($userId);
                    } elseif (getUserRole($userId)['isTechr'] == true && getUserRole($userId)['isCoord'] == true) {
                        $allClsInfoa        = $this->StaffModel->all_coordinator_class_info($userId);
                        $allClsInfob        = $this->StaffModel->all_teachers_class_info($userId, $sessionId);
                        $allClsInfo         = array_merge($allClsInfoa, $allClsInfob);
                    } else {
                        $allClsInfo         = '';
                    }
                    
                    foreach ($allClsInfo as $cls) {
                        if (getUserRole($userId)['isAdmin'] == true) {
                            $allClsSecInfo  = $this->StaffModel->all_class_section_info($cls->id);
                        } elseif (getUserRole($userId)['isTechr'] == true && getUserRole($userId)['isCoord'] == false) {
                            $allClsSecInfo  = $this->StaffModel->all_teachers_class_section_info($cls->id, $sessionId, $userId);
                        } elseif (getUserRole($userId)['isCoord'] == true) {
                            $allClsSecInfo  = $this->StaffModel->all_class_section_info($cls->id);
                        } else {
                            $allClsSecInfo  = '';
                        }
                        $cls->sections      = $allClsSecInfo;
                        $return[]         = $cls;
                    }
                    
                } else {
                    if (getUserRole($userId)['isAdmin'] == true) {
                        $allClsSecInfo  = $this->StaffModel->all_class_section_info($classId);
                    } elseif (getUserRole($userId)['isTechr'] == true && getUserRole($userId)['isCoord'] == false) {
                        $allClsSecInfo  = $this->StaffModel->all_teachers_class_section_info($classId, $sessionId, $userId);
                    } elseif (getUserRole($userId)['isCoord'] == true) {
                        $allClsSecInfo  = $this->StaffModel->all_class_section_info($classId);
                    } else {
                        $allClsSecInfo  = '';
                    }
                    $return           = $allClsSecInfo;
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $return, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
    }
    }
    
    public function getAllStudents() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $all_student_info   = $this->StaffModel->all_student_info($classId, $sectionId, site_info()['active_session']);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $all_student_info, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    private function getAllStudentsLocal($classId, $sectionId) {
        $sessionId          = site_info()['active_session'];
        $all_student_info   = $this->StaffModel->all_student_info($classId, $sectionId, $sessionId);
        return $all_student_info;
    }
    
    public function getGroupedStudents() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
            
                $allClsGroups = groupByClass($classId);
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
                
                $allClsSecGroups = groupByClassSection($classId, $sectionId);
                if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                    $student_list         = [];
                    foreach ($allClsSecGroups as $group) {
                        $gInfos         = groupInfo($group->group_id);
                        foreach ($gInfos as $gInfo) {
                            $attendance = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                            if (is_array($attendance)) {
                                $student_list = array_merge($student_list, $attendance);
                            } else {
                                $student_list[] = $attendance;
                            }
                        }
                    }
                }
                
                if (empty($allClsGroups) && empty($allClsSecGroups)) {
                    $student_list   = $this->StaffModel->all_student_info($classId, $sectionId, site_info()['active_session']);
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $student_list, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    private function getGroupedStudentsLocal($classId, $sectionId) {
        $sessionId          = site_info()['active_session'];
                $allClsGroups = groupByClass($classId);
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
                
                $allClsSecGroups = groupByClassSection($classId, $sectionId);
                if (empty($allClsGroups) && !empty($allClsSecGroups)) {
                    $student_list         = [];
                    foreach ($allClsSecGroups as $group) {
                        $gInfos         = groupInfo($group->group_id);
                        foreach ($gInfos as $gInfo) {
                            $attendance = $this->StaffModel->all_student_info($gInfo->class_id, $gInfo->section_id, site_info()['active_session']);
                            if (is_array($attendance)) {
                                $student_list = array_merge($student_list, $attendance);
                            } else {
                                $student_list[] = $attendance;
                            }
                        }
                    }
                }
                
                if (empty($allClsGroups) && empty($allClsSecGroups)) {
                    $student_list   = $this->StaffModel->all_student_info($classId, $sectionId, site_info()['active_session']);
                }
        return $student_list;
    }
    
    public function getTimetableStudents() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $timetableId        = $data['timetableId'];
                $subjectGroupId     = $data['subjectGroupId'];
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $date               = date("Y-m-d");
                
                $timetable          = $this->db->query("SELECT * FROM `subject_timetable` WHERE id = '".$timetableId."' ")->getRow();
                $merged_timetables  = $this->StaffModel->teachers_timetable_info_times_ungrouped($timetable->staff_id, $timetable->session_id, $timetable->day, $timetable->start_time, $timetable->end_time);
                
                $student_list       = [];
                foreach ($merged_timetables as $mtt) {  
                    $all_student_info = $this->StaffModel->all_student_info($mtt->class_id, $mtt->section_id, site_info()['active_session'], $mtt->subject_group_id);
                    foreach ($all_student_info as $stu) {
                        $aInfo              = $this->db->query("SELECT * FROM student_subject_attendances WHERE student_session_id  = '".$stu->ssid."' AND date = '".$date."'  AND subject_timetable_id  = '".$timetableId."' ")->getRow();
                        if (!empty($aInfo)) {
                            $stu->attendance    = $aInfo->attendence_type_id;
                        } else {
                            $stu->attendance    = null;
                        }
                        $student_list[]     = $stu;
                    }
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $student_list, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    private function getTimetableStudentsLocal($timetableId, $subjectGroupId, $userId) {
        $sessionId          = site_info()['active_session'];
                $timetable          = $this->db->query("SELECT * FROM `subject_timetable` WHERE id = '".$timetableId."' ")->getRow();
                $merged_timetables  = $this->StaffModel->teachers_timetable_info_times_ungrouped($timetable->staff_id, $timetable->session_id, $timetable->day, $timetable->start_time, $timetable->end_time);
                
                $student_list       = [];
                foreach ($merged_timetables as $mtt) {  
                    $all_student_info = $this->StaffModel->all_student_info($mtt->class_id, $mtt->section_id, site_info()['active_session'], $mtt->subject_group_id);
                    foreach ($all_student_info as $stu) {
                        $aInfo              = $this->db->query("SELECT * FROM student_subject_attendances WHERE student_session_id  = '".$stu->ssid."' AND date = '".$date."'  AND subject_timetable_id  = '".$timetableId."' ")->getRow();
                        if (!empty($aInfo)) {
                            $stu->attendance    = $aInfo->attendence_type_id;
                        } else {
                            $stu->attendance    = null;
                        }
                        $student_list[]     = $stu;
                    }
                }
        return $student_list;
    }
    
    public function getSubordinateStaff() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $all_staff_info     = $this->StaffModel->all_subordinate_staff_info($userId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $all_staff_info, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    private function getSubordinateStaffLocal($userId) {
        $sessionId          = site_info()['active_session'];
        $all_staff_info     = $this->StaffModel->all_subordinate_staff_info($userId);
        return $all_staff_info;
    }
    
    //========================== fr homework also ============================//
    public function getTeachersSubject() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $subjects           = $this->StaffModel->teachers_timetable_info_grouped_subject($sessionId, $userId, $classId, $sectionId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $subjects, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
//================================== STAFF ===================================//
    public function getTodaysTimetable() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                
                $pinfo  = $this->db->query("SELECT COUNT(id) as t_periods FROM subject_timetable WHERE class_id = '".$classId."' AND section_id = '".$sectionId."' AND session_id = '".$sessionId."' AND staff_id = '".$userId."' AND day = '".date('l')."' ")->getRow();
                $sinfo  = $this->db->query("SELECT COUNT(id) as t_student FROM student_session WHERE class_id = '".$classId."' AND section_id = '".$sectionId."' AND session_id = '".$sessionId."' ")->getRow();
        
                $return = $this->StaffModel->teachers_todays_timetable_info($classId, $sectionId, site_info()['active_session'], $userId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $return, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            }
             else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getUserLeaveApplicationsInfo() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $leaveTypes         = $this->StaffModel->staff_leave_info($userId);
                $leaveApplications  = $this->StaffModel->staff_leave_request_info($userId);
                
                $return             = array();  
                foreach ($leaveTypes as $slt) {
                    $stlInfo            = $this->db->query("SELECT SUM(leave_days) as ld FROM staff_leave_request WHERE  staff_id = '".$slt->staff_id."' AND leave_type_id = '".$slt->leave_type_id."' ")->getRow();
                    if (!empty($stlInfo->ld)) {
                        $tknLeave       = $stlInfo->ld;
                    } else {
                        $tknLeave       = 0;
                    }
                    $altLeave           = (int)$slt->alloted_leave;
                    
                    $slt->allotedLeave  = $altLeave;
                    $slt->takenLeave    = $tknLeave;
                    $slt->pendingLeave  = $altLeave - $tknLeave;
                    $return[]           = $slt;
                }
                        
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'lt'    => $return,
                        'la'    => $leaveApplications
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            }
             else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveLeaveApplication() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $staffId            = $data['staffId'];
                $leaveTypeId        = $data['leaveTypeId'];
                $fromDate           = $data['fromDate'];
                $toDate             = $data['toDate'];
                $reason             = $data['reason'];
                $pendingLeave       = $data['pendingLeave'];
                $sessionId          = site_info()['active_session'];
                $canSave            = TRUE;
                $checkExisting      = $this->db->query("SELECT id FROM staff_leave_request WHERE staff_id  = '".$staffId."' AND leave_from = '".$fromDate."' AND leave_to = '".$toDate."' ")->getRow();
                if ($checkExisting !== null) {
                    if ($checkExisting->id != NULL) {
                        $canSave    = FALSE;
                    }
                }
            
                $earlier            = new \DateTime($from_date);
                $later              = new \DateTime($to_date);
                $abs_diff           = $later->diff($earlier)->format("%a");
                
                if ($canSave == TRUE) {
                    $formData = array(
				        'staff_id'          => $staffId,
				        'leave_type_id'     => $leaveTypeId,
				        'leave_from'        => $fromDate,
				        'leave_to'          => $toDate,
				        'leave_days'        => $abs_diff + 1,
				        'employee_remark'   => $reason,
				    );
				    $builder = $this->db->table('staff_leave_request');
                    $builder->insert($formData);
                    
                    $response = [
                        'status'    => 'success', 
                        'message'   => 'Request processed successfully.', 
                        'data'      => null,
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(200)
                        ->setJSON($response);
                } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Already exist!', 
                        'data'      => null, 
                        'result'    => false
                    ];
                    return $this->response
                        ->setStatusCode(400)
                        ->setJSON($response);
                }
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveStudentAttendance() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $attendances        = $data['attendance'];
                $date               = $data['date'];
                $sessionId          = site_info()['active_session'];
                $canSave            = TRUE;
                
                foreach ($attendances as $record) {
                    $studentId      = $record['student_id'];
                    $attendance     = $record['attendance_status'];
                    $stuSesionId    = $this->db->table('student_session')->where('student_id', $studentId)->where('session_id', $sessionId)->get()->getRow();
                    $result         = $this->db->query("SELECT * FROM student_attendences WHERE date  = '".$date."' AND student_session_id = '".$stuSesionId->id."' ")->getRow();
                    if ($result !== null) {
                        if ($result->id  != NULL) {
                            $canSave = FALSE;
                        }
                    }
                    if ($canSave == TRUE) {
                        $formData = array(
				            'student_session_id'    => $stuSesionId->id,
				            'date'                  => $date,
				            'attendence_type_id'    => $attendance,
				        );
				        $builder = $this->db->table('student_attendences');
                        $builder->insert($formData);
                    }
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Attendance saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveStudentPeriodAttendance() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $timetableId        = $data['timetableId'];
                $attendances        = $data['attendance'];
                $date               = $data['date'];
                $sessionId          = site_info()['active_session'];
                $canSave            = TRUE;
                
                foreach ($attendances as $record) {
                    $studentId      = $record['student_id'];
                    $attendance     = $record['attendance_status'];
                    $stuSesionId    = $this->db->table('student_session')->where('student_id', $studentId)->where('session_id', $sessionId)->get()->getRow();
                    $result         = $this->db->query("SELECT * FROM student_subject_attendances WHERE date  = '".$date."' AND student_session_id = '".$stuSesionId->id."' AND subject_timetable_id = '".$timetableId."' ")->getRow();
                    if ($result !== null) {
                        if ($result->id  != NULL) {
                            $canSave = FALSE;
                        }
                    }
                    if ($canSave == TRUE) {
                        $formData = array(
				            'student_session_id'    => $stuSesionId->id,
				            'subject_timetable_id'  => $timetableId,
				            'date'                  => $date,
				            'attendence_type_id'    => $attendance,
				        );
				        $builder = $this->db->table('student_attendences');
                        $builder->insert($formData);
                    }
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Attendance saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getAttendanceReport() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $date               = $data['date'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                
                $student_list       = [];
                foreach ($all_students_info as $stu) {  
                    $stuSesionId    = $this->db->table('student_session')->where('student_id', $stu->student_id)->where('session_id', $sessionId)->get()->getRow();
                    $aInfo          = $this->db->query("SELECT * FROM student_attendences WHERE student_session_id  = '".$stuSesionId->id."' AND date = '".$date."' ")->getRow();
                    if (!empty($aInfo)) {
                        $stu->attendance    = $aInfo->attendence_type_id;
                    } else {
                        $stu->attendance    = null;
                    }
                    $student_list[]     = $stu;
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $student_list, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getDuesReport() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                
                $student_list       = [];
                foreach ($all_students_info as $students) {
                    $feesGroups = $this->db->query("SELECT * FROM student_fees_master WHERE student_session_id = '".$students->ssid."' ")->getResult();
                    $fine       = 0;
                    $discount   = 0;
                    $totalfee   = 0;
                    $deposit    = 0;
            
                    $student_total_fees = $this->StaffModel->getTransStudentFees($students->ssid, site_info()['active_session']); 
                    foreach ($student_total_fees as $student_total_fees_key => $student_total_fees_value) {
                        if (!empty($student_total_fees_value->fees)) {
                            foreach ($student_total_fees_value->fees as $each_fee_key => $each_fee_value) {
                                $totalfee = $totalfee +$each_fee_value->amount;
                                $amount_detail =json_decode($each_fee_value->amount_detail);
                                if (is_object($amount_detail) && !empty($amount_detail)) {
                                    foreach ($amount_detail as $amount_detail_key => $amount_detail_value) {
                                        $deposit  = $deposit + $amount_detail_value->amount;
                                        $fine     = $fine + $amount_detail_value->amount_fine;
                                        $discount = $discount + $amount_detail_value->amount_discount;
                                    }
                                }
                            }
                        }
                    }
                    $students->payble      = $totalfee + $fine;
                    $students->discount    = $discount;
                    $students->deposit     = $deposit;
                    $students->dues        = $totalfee - ($deposit + $discount);
                    $student_list[]                     = $students;
                }
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $student_list, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getClassTimetable() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $timetable_info     = $this->StaffModel->teachers_timetable_info_grouped($classId, $sectionId, $sessionId, $userId);
                $schSetting         = $this->db->query("SELECT * FROM sch_settings ")->getRow();
                
                $response_data      = [];
                foreach ($timetable_info as $tt) { 
                    $days_timetable = $this->StaffModel->teachers_timetable_info_times_grouped($userId, $sessionId, $tt->day);
                    $day_timetable  = [];
                    foreach ($days_timetable as $dtt) {
                        $p_timetable = $this->StaffModel->teachers_timetable_info_times_ungrouped($userId, $sessionId, $tt->day, $dtt->start_time, $dtt->end_time);
                        $lesson_plans= [];
                        foreach ($p_timetable as $ptt) {
                            $lesson_plans[] = [
                                'name'              => $ptt->name,
                                'class'             => $ptt->class,
                                'section'           => $ptt->section,
                            ];
                        }
                        
                        $day_timetable[] = [
                            'time_from'     => $dtt->time_from,
                            'time_to'       => $dtt->time_to,
                            'lesson_plans'  => $lesson_plans,
                        ];
                    }
                    $response_data[] = [
                        'day'           => $tt->day,
                        'day_timetable' => $day_timetable
                    ];
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $response_data, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getLeaveApplicationForApproval() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                $all_staff_info     = $this->getSubordinateStaffLocal($userId);
                $date               = date("Y-m-d");
                $mdate              = date("Y-m-01");
                $stu_leave_data     = [];
                foreach ($all_students_info as $students) {
                    $allLeave = $this->db->query("SELECT * FROM student_applyleave WHERE from_date  >= '".$mdate."' AND student_session_id = '".$students->ssid."'  ")->getResult();
                    if (!empty($allLeave)) {
                        $students->students_leave = $allLeave;
                        $stu_leave_data[] = $students;
                    }
                }
                if (empty($stu_leave_data)) {
                    $stu_leave_data[] = 'Data not available';
                }

                $stf_leave_data     = [];
                foreach ($all_staff_info as $staff) {
                    $allSLeave = $this->db->query("SELECT * FROM staff_leave_request WHERE leave_from  >= '".$mdate."' AND staff_id = '".$staff->empid."'  ")->getResult();
                    if (!empty($allSLeave)) {
                        $staff->staff_leave = $allSLeave;
                        $stf_leave_data[] = $staff;
                    }
                }
                if (empty($stf_leave_data)) {
                    $stf_leave_data[] = 'Data not available';
                }
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  [
                        'stuLeave'    => $stu_leave_data,
                        'stfLeave'    => $stf_leave_data
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function updateStudentLeaveStaus() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $leaveId            = $data['leaveId'];
                $leaveAction        = $data['leaveAction'];
                $sessionId          = site_info()['active_session'];
                $canSave            = TRUE;
                
                $formData = array(
				    'status'        => $leaveAction,
			    );
			    $builder = $this->db->table('student_applyleave');
                $builder->where('student_applyleave.id', $leaveId);
                $builder->update($formData);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Application updated successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function updateStaffLeaveStaus() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $leaveId            = $data['staffLeaveId'];
                $leaveAction        = $data['staffLeaveAction'];
                $sessionId          = site_info()['active_session'];
                $canSave            = TRUE;
                
                $formData = array(
				    'status'        => $leaveAction,
			    );
			    $builder = $this->db->table('staff_leave_request');
                $builder->where('staff_leave_request.id', $leaveId);
                $builder->update($formData);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Application updated successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getAllPayslip() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $all_payslip        = $this->StaffModel->staff_all_payslip_info($userId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  $all_payslip,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getPayslipInfo() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $payslipId          = $data['payslipId'];
                $sessionId          = site_info()['active_session'];
                $payslip_info       = $this->StaffModel->staff_payslip_info($payslipId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  $payslip_info,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentAssessment() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                $all_exam_group     = $this->StaffModel->all_exam_group_batch();
                $all_subjects       = $this->StaffModel->all_subjects();
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  [
                        'students'    => $all_students_info,
                        'examType'    => $all_exam_group,
                        'subjects'    => $all_subjects
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveStudentAssessment() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $batchId            = $data['batchId'];
                $subjectId          = $data['subjectId'];
                $assessments        = $data['assessments'];
                $sessionId          = site_info()['active_session'];
                $canSave            = TRUE;
                $eSubId             = $this->db->query("SELECT id AS sub1 FROM `exam_group_class_batch_exam_subjects` WHERE subject_id = '".$subjectId."' AND exam_group_class_batch_exams_id = '".$batchId."' ")->getRow();
                foreach ($assessments as $assess) {
                    $studentId      = $assess['student_id'];
                    $score          = $assess['score'];
                    $note           = $assess['note'];
                    
                    $student_eid    = $this->db->query("SELECT id AS esId FROM `exam_group_class_batch_exam_students` WHERE exam_group_class_batch_exam_id  = '".$batchId."' AND student_id = '".$studentId."'  ")->getRow();
                    $srinfo         = $this->db->query("SELECT id AS rId FROM `exam_group_exam_results` WHERE exam_group_class_batch_exam_student_id  = '".$student_eid->esId."' AND exam_group_class_batch_exam_subject_id = '".$eSubId->sub1."'  ")->getRow();
                
                    if ($result !== null) {
                        if ($result->id  != NULL) {
                            $canSave = FALSE;
                        }
                    }
                    
                    if ($scores[$key] > 0) {
                        $attendance = 'present';
                    } else {
                        $attendance = 'absent';
                    }
                
                    if ($canSave == TRUE) {
                        $formData = array(
				            'exam_group_class_batch_exam_subject_id'    => $eSubId->sub1,
				            'exam_group_class_batch_exam_student_id'    => $student_eid->esId,
				            'attendence'                                => $attendance,
				            'get_marks'                                 => $score,
				            'note'                                      => $note,
				        );
				        if (empty($srinfo->rId)) {
				            $builder = $this->db->table('exam_group_exam_results');
                            $builder->insert($formData);
				        }
                    }
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Data saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getContent() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $contents           = $this->StaffModel->all_uploaded_contents();
                
                $contentsData       = [];
                foreach ($contents as $content) {
                    if (!empty($content->vid_url)) {
                        $content->frameUrl   = $content->vid_url;
                        $content->fileUrl    = null;
                    } else {
                        $content->frameUrl   = null;
                        $content->fileUrl    = site_info()['siteUrl'].$content->dir_path;
                    }
                    $contentsData[] = $content;
                }
                if (empty($contents)) {
                    $contentsData[] = 'Data not available';
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  $contentsData,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentBehaviour() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                $behaviour_point    = $this->StaffModel->student_behaviour_point();
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  [
                        'students'    => $all_students_info,
                        'keyPoints'   => $behaviour_point,
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveStudentBehaviour() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $studentId          = $data['studentId'];
                $behaviours         = $data['behaviours'];
                $sessionId          = site_info()['active_session'];
                $canSave            = TRUE;
                
                foreach ($behaviours as $behaviour) {
                    $incident_id    = $behaviour['incident_id'];
                    $formData = array(
				        'student_id'    => $studentId,
				        'session_id'    => site_info()['active_session'],
				        'incident_id'   => $incident_id,
				        'assign_by'     => $userId,
				    );
				    $builder = $this->db->table('exam_group_exam_results');
                    $builder->insert($formData);
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Data saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentBehaviourIncident() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                
                $studentsData       = [];
                foreach ($all_students_info as $student) {
                    
                    $siInfo = $this->db->query("SELECT COUNT(id) as si FROM student_incidents WHERE session_id = '".$sessionId."' AND student_id = '".$student->student_id."'  ")->getRow();
                    
                    $points = $this->StaffModel->student_incidents_info($sessionId, $student->student_id);
                    $ip     = 0;
                    foreach ($points as $point) {
                        $ip += $point->point;
                    }
                    $student->totalIncident = $siInfo->si;
                    $student->totalPoints   = $ip;
                    
                    $studentsData[] = $student;
                }
                if (empty($contents)) {
                    $studentsData[] = 'Data not available';
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  $studentsData,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentBehaviourRank() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                
                
                $student_points     = [];
                foreach ($all_students_info as $stu) {
                    $points         = $this->StaffModel->student_incidents_info($sessionId, $stu->student_id);
                    $total_points   = array_sum(array_column($points, 'point')); 
                    $student_points[$stu->student_id] = $total_points;
                }
                arsort($student_points);
                $rank               = 0;
                $prev_points        = null;
                $rankData           = [];
                
                foreach ($student_points as $student_id => $points) {
                    if ($prev_points === null || $points < $prev_points) {
                        $rank++;
                    }
                    $prev_points = $points;
                    $sInfo = $this->StaffModel->student_admission_info($student_id);
                    $rankData[] = [
                        'sInfo'  => $sInfo,
                        'rank'   => $rank,
                        'points' => $points
                    ];
                }
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  $rankData,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentBehaviourView() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $studentId          = $data['studentId'];
                $sessionId          = site_info()['active_session'];
                $sInfo              = $this->StaffModel->student_admission_info($studentId);
                $iInfo              = $this->StaffModel->student_incidents_info($sessionId, $studentId);
                
                $incidentsData      = [];
                foreach ($iInfo as $ii) {
                    $stuInCInfo             = $this->StaffModel->student_incident_comments_info($ii->iid);
                    $stfInCInfo             = $this->StaffModel->staff_incident_comments_info($ii->iid);
                    $ii->studentComments    = $stuInCInfo;
                    $ii->staffComments      = $stfInCInfo;
                    $incidentsData[]        = $ii;
                }
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  [
                        'student_data'    => $sInfo,
                        'incident_data'   => $incidentsData,
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveIncidentComment() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $incidentId         = $data['incidentId'];
                $comment            = $data['comment'];
                $sessionId          = site_info()['active_session'];
                
                $formData = array(
                    'student_incident_id'   => $incidentId,
                    'comment'               => $comment,
                    'staff_id'              => $userId,
                );
                if (!empty($comment)) {
                    $builder = $this->db->table('student_incident_comments');
                    $builder->insert($formData);
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Attendance saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getTimetable() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                
                $teachers_class     = $this->StaffModel->teachers_timetable_info_grouped_class($sessionId, $userId);
                $timetableData      = [];
                
                foreach ($teachers_class as $tc) {
                    $class_sections = $this->StaffModel->teachers_timetable_info_grouped_section($sessionId, $userId, $tc->class_id);
                    
                    $classData = [
                        'class'     => $tc->class,
                        'sections'  => []
                    ];
            
                    foreach ($class_sections as $sec) {
                        $section_subjects   = $this->StaffModel->teachers_timetable_info_grouped_subject($sessionId, $userId, $tc->class_id, $sec->section_id);
                        $cs                 = $this->db->query("SELECT id AS Id FROM `class_sections` WHERE class_id = ? AND section_id = ?", [$tc->class_id, $sec->section_id])->getRow();
            
                        $sectionData = [
                            'section'  => $sec->section,
                            'subjects' => []
                        ];
            
                        foreach ($section_subjects as $sub) {
                            $subject_lessons = $this->StaffModel->subjects_lesson_info($sessionId, $sub->subject_group_subject_id, $cs->Id);
            
                            $subjectData = [
                                'subject' => $sub->name,
                                'lessons' => []
                            ];
            
                            foreach ($subject_lessons as $lesson) {
                                $lesson_topics = $this->StaffModel->lesson_topic_info($sessionId, $lesson->id);
                                
                                $topics = [];
                                foreach ($lesson_topics as $tp) {
                                    $topics[] = ['topic' => $tp->name];
                                }
            
                                $lessonData = [
                                    'lesson' => $lesson->name,
                                    'topics' => $topics
                                ];
            
                                $subjectData['lessons'][] = $lessonData;
                            }
            
                            $sectionData['subjects'][] = $subjectData;
                        }
            
                        $classData['sections'][] = $sectionData;
                    }
            
                    $timetableData[] = $classData;
                }
    
    
                $response = [
                    'status'        => 'success', 
                    'message'       => 'Request processed successfully.', 
                    'data'          => $timetableData, 
                    'result'        => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            }
             else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getHomeworkList() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $type               = $data['type'];
                $sessionId          = site_info()['active_session'];
                if ($type == 'upcoming') {
                    $homeworks      = $this->StaffModel->all_coming_homework($classId, $sectionId, $sessionId);
                } else {
                    $homeworks      = $this->StaffModel->all_closed_homework($classId, $sectionId, $sessionId);
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $homeworks, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getSubmittedHomeworkInfo() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $homeworkId         = $data['homeworkId'];
                $sessionId          = site_info()['active_session'];
                
                $hinfo              = $this->StaffModel->homework_info($homeworkId);
                $homeworks          = $this->StaffModel->submitted_homework($homeworkId);
                
                $homeworkData       = [];
                foreach ($homeworks as $uh) {
                     $evlnfo        = $this->db->query("SELECT * FROM homework_evaluation WHERE homework_id = '".$uh->homework_id."' AND student_id = '".$uh->student_id."' ")->getRow();
                    if(!empty($evlnfo)) {
                        $score      = $evlnfo->marks;
                    } else {
                        $score      = null;
                    }
                    
                    $uh->evl_marks  = $score;
                    $homeworkData[] = $uh;
                }
                
                $response = [
                    'status'        => 'success', 
                    'message'       => 'Request processed successfully.', 
                    'data'          => $homeworkData, 
                    'result'        => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'        => 'error', 
                    'message'       => 'Invalid token!', 
                    'data'          => null, 
                    'result'        => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'            => 'error', 
                'message'           => 'Invalid method!', 
                'data'              => null, 
                'result'            => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveHomeworkScore() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $homeworkId         = $data['homeworkId'];
                $studentId          = $data['studentId'];
                $score              = $data['score'];
                $note               = $data['note'];
                $sessionId          = site_info()['active_session'];
                
                $ssid   = $this->db->table('student_session')->where('student_id', $studentId)->where('session_id', $sessionId)->get()->getRow();
                $data   = [
                    'homework_id'   => $homeworkId,
                    'student_id'    => $studentId,
                    'student_session_id'    => $ssid->id,
                    'marks'         => $score,
                    'note'          => $note,
                    'status'        => 'Complete',
                    'date'          => date('Y-m-d'),
                    'created_at'    => date('Y-m-d H:i:s')
                ];
                $existing       = $this->db->table('homework_evaluation')->where('homework_id', $homeworkId)->where('student_id', $studentId)->get()->getRow();
                
                if (empty($homeworkId) || empty($studentId) || empty($score)) {
                    if ($existing) {
                        $this->db->table('homework_evaluation')->where('homework_id', $homeworkId)->where('student_id', $studentId)->update($data);
                    } else {
                        $this->db->table('homework_evaluation')->insert($data);
                    }
                    $response = [
                        'status'    => 'success', 
                        'message'   => 'Data saved successfully.', 
                        'data'      => null,
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(200)
                        ->setJSON($response);
                } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Mandatory data missing.', 
                        'data'      => null,
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(400)
                        ->setJSON($response);
                }
                
                
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveHomework() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $classId                = $data['classId'];
                $sectionId              = $data['sectionId'];
                $subjectGroupId         = $data['subjectGroupId'];
                $subjectGroupSubjectId  = $data['subjectGroupSubjectId'];
                $subjectId              = $data['subjectId'];
                $homeworkDate           = $data['homeworkDate'];
                $submissionDate         = $data['submissionDate'];
                $maxMarks               = $data['maxMarks'];
                $description            = $data['description'];
                //$attachFile           = $data['attachFile'];
                $sessionId              = site_info()['active_session'];
                
                $allClsSecSubGroupGroups        = groupByClassSectionSubjectGroup($classId, $sectionId, $subjectGroupId);
                $allClsSecSubGroupSubjectGroups = groupByClassSectionSubjectGroupSubject($classId, $sectionId, $subjectGroupId, $subjectId);
                
                $formData = array(
				    'session_id'    => site_info()['active_session'],
				    'class_id'      => $classId,
				    'section_id'    => $sectionId,
				    'subject_id'    => $subjectId,
				    'homework_date' => $homeworkDate,
				    'submit_date'   => $submissionDate,
				    'staff_id'      => $userId,
				    'subject_group_subject_id'   => $subjectGroupSubjectId,
				    'marks'         => $maxMarks,
				    'description'   => $description,
				    'create_date'   => date("Y-m-d"),
				    'created_by'    => $userId,
			    );
			    $builder = $this->db->table('homework');
                $builder->insert($formData);
            
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Data saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getAssignmentList() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $type               = $data['type'];
                $sessionId          = site_info()['active_session'];
                $students           = $this->getGroupedStudentsLocal($classId, $sectionId);
                
                $assignments                    = [];
                foreach ($students as $stu) {
                    $daily_assignments          = $this->StaffModel->all_daily_assignment($stu->student_id, $sessionId);
                    foreach ($daily_assignments as $da) {
                        $assignment = [
                            'subject'           => $da->name,
                            'title'             => $da->title,
                            'submit_date'       => $da->date,
                            'evaluation_date'   => $da->evaluation_date,
                            'description'       => $da->description,
                            'remark'            => $da->remark
                        ];
                        $assignments[]          = $assignment;
                    }
                }
            $response = [
                'status'    => 'success', 
                'message'   => 'Request processed successfully.', 
                'data'      => $assignments, 
                'result'    => true
            ];
            return $this->response
                ->setStatusCode(200)
                ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveAssignmentEvaluation() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $asid               = $data['asid'];
                $studentId          = $data['studentId'];
                $note               = $data['note'];
                $sessionId          = site_info()['active_session'];
                
                $ssid   = $this->db->table('student_session')->where('student_id', $studentId)->where('session_id', $sessionId)->get()->getRow();
                $data   = [
                    'evaluated_by'  => $userId,
                    'date'          => date('Y-m-d'),
                    'evaluation_date'   => date('Y-m-d'),
                    'remark'        => $note,
                    'created_at'    => date('Y-m-d H:i:s')
                ];
                if (!empty($asid) && !empty($studentId) && !empty($note)) {
                    $this->db->table('daily_assignment')->where('id', $asid)->update($data);
                    $response = [
                        'status'    => 'success', 
                        'message'   => 'Data saved successfully.', 
                        'data'      => null,
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(200)
                        ->setJSON($response);
                } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Mandatory data missing.', 
                        'data'      => null,
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(400)
                        ->setJSON($response);
                }
                
                
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getCommunicationLogs() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $sessionId          = site_info()['active_session'];
                $allLogs            = $this->StaffModel->all_sms_email();
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $allLogs, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function sendMessage() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $classId            = $data['classId'];
                $sectionId          = $data['sectionId'];
                $studentId          = $data['studentId'];
                $message            = $data['message'];
                $file               = $data['file'];
                $sms                = $data['sms'];
                $whatsapp           = $data['whatsapp'];
                $email              = $data['email'];
                $tempId             = $data['tempId'];
                $sessionId          = site_info()['active_session'];
                $indvl              = 0;
                if ($studentId > 0) {
                    $indvl          = 1;
                    $clssc          = 0;
                } else {
                    $clssc          = 1;
                }
                $formData = array(
				    'template_id'       => $tempId,
				    'send_through'      => '["sms"]',
				    'message'           => $message,
				    'send_mail'         => $email,
				    'send_sms'          => 1,
				    'is_individual'     => $indvl,
				    'is_class'          => $clssc,
			    );
			    $builder = $this->db->table('messages');
                $builder->insert($formData);
                
                if (!empty($studentId)) {
                    $sInfo              = $this->StaffModel->student_admission_info($studentId);
                    $smsstatus          = sendSms($sInfo->mobileno, $tempId, $message);
                
                    if ($whatsapp) {
                        $wpstatus       = sendWp($sInfo->mobileno, $message);
                    }
                    if ($email == 1 && $file->isValid() && !$file->hasMoved()) {
                        $name           = $file->getName();
                        $ext            = $file->getClientExtension();
                        $newName        = $file->getRandomName(); 
                        $directory      = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images';
			            $cdirectoryn    = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images/'.$newName;
                        $file->move($directory, $newName);
                        sendEmailWc($sInfo->email, $message, $cdirectoryn);
                        sendEmailWc($sInfo->guardian_email, $message, $cdirectoryn);
                    }
                }
                
                if ($clssc == 1) {
                    $sinfos         = $this->StaffModel->all_student_info($classId, $sectionId, site_info()['active_session']);
                    foreach ($sinfos as $sInfo) {
                        $smsstatus      = sendSms($sInfo->mobileno, $tempId, $message);
                        if ($whatsapp) {
                            $wpstatus       = sendWp($sInfo->mobileno, $message);
                        }
                        if ($email == 1 && $file->isValid() && !$file->hasMoved()) {
                            $name           = $file->getName();
                            $ext            = $file->getClientExtension();
                            $newName        = $file->getRandomName(); 
                            $directory      = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images';
			                $cdirectoryn    = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images/'.$newName;
                            $file->move($directory, $newName);
                            sendEmailWc($sInfo->email, $message, $cdirectoryn);
                            sendEmailWc($sInfo->guardian_email, $message, $cdirectoryn);
                        }
                    }
                }
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Data saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function getNotices() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $notices            = $this->StaffModel->all_notifications($userId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $notices, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function sendNotice() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $title                  = $data['title'];
                $noticeDate             = $data['noticeDate'];
                $publishDate            = $data['publishDate'];
                $file                   = $data['file'];
                $audience               = $data['audience'];
                $message                = $data['message'];
                $teacher                = $data['teacher'];
                $parent                 = $data['parent'];
                $student                = $data['student'];
                $sessionId              = site_info()['active_session'];
                
                $directory              = $_SERVER['DOCUMENT_ROOT'].'/uploads/notice_board_images/';
		        $cdirectory             = 'uploads/notice_board_images';
		        
		        if ($teacher == 'Yes') {
		            sendPushNotice($id = null, $message);
		        }
		        if ($student == 'Yes') {
		            $appkeys = $this->db->query("SELECT DISTINCT(app_key) FROM `students`  ")->getResult();
                    if (!empty($appkeys)) {
                        foreach ($appkeys as $appkey) {
                            sendFcmPushNoticeStudent($appkey->app_key, $title, $message);
                        }
                    }
		        }
		        
                $formData = array(
				    'title'             => $title,
				    'publish_date'      => $publishDate,
				    'date'              => $noticeDate,
				    'message'           => $message,
				    'visible_student'   => $student,
				    'visible_staff'     => $teacher,
				    'visible_parent'    => $parent,
				    'created_id'        => $userId,
			    );
			    
			    if (!empty($data['file'])) {
	                $img    = $file;
	                $img    = str_replace('data:image/png;base64,', '', $img);
	                $img    = str_replace(' ', '+', $img);
	                $data   = base64_decode($img);
	                $name   = uniqid() . '.png';
	                $file   = $directory.$name;
                    file_put_contents($file, $data);
                    $image_path = $directory.$name;
                    $formData['attachment']      = $name;
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
            
                if ($teacher) {
                    $formDatar = array(
				        'send_notification_id'  => $insertedId,
				        'role_id'               => 2,
			        );
			        $builder = $this->db->table('notification_roles');
                    $builder->insert($formDatar);
                }
            
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Data saved successfully.', 
                    'data'      => null,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentProgressTermWise() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData = file_get_contents('php://input');
                $data = json_decode($jsonData, true);
                $userId = $data['userId'];
                $studentId = $data['studentId'];
                $sessionId = site_info()['active_session'];

                $all_cbse_terms_info = $this->StaffModel->all_cbse_terms_info();
                $ss_info = $this->StaffModel->student_session_info($studentId);
    
                $progress = [];

                foreach ($all_cbse_terms_info as $term) {
                    $termData = [
                        "term_name" => $term->name,
                        "exams" => [],
                        "observations" => []
                    ];
                    $student_observ = $this->StaffModel->all_cbse_term_observation_info($term->id);
        
                    foreach ($student_observ as $observ) {
                        $termData["observations"][] = [
                            "observation_name" => $observ->name,
                            "description" => $observ->description ?? "N/A",
                            "remarks" => $observ->remarks ?? "N/A"
                        ];
                    }

                    $student_exams = $this->StaffModel->all_cbse_term_students_exams_info($term->id, $ss_info->ssid);

                    foreach ($student_exams as $sexams) {
                        $examData = [
                            "exam_name" => $sexams->name,
                            "subjects" => []
                        ];

                        $exam_subjects = $this->StaffModel->all_cbse_term_exam_subjects_info($sexams->cbse_exam_id);

                        $exmMax = 0;
                        $exmObt = 0;

                        foreach ($exam_subjects as $esubjects) {
                            $subjectData = [
                                "subject_code" => $esubjects->code,
                                "subject_name" => $esubjects->name,
                                "assessments" => []
                            ];

                            $subject_assessments = $this->StaffModel->all_cbse_term_exam_subject_assessments_info($esubjects->ttid);
                
                            $subScore = 0;
                            $subMaxim = 0;

                            foreach ($subject_assessments as $sassessments) {
                                $scoreQuery = $this->db->query("SELECT * FROM `cbse_student_subject_marks` 
                                    WHERE cbse_exam_timetable_assessment_type_id = '".$sassessments->atid."' 
                                    AND cbse_exam_timetable_id = '".$esubjects->ttid."' 
                                    AND cbse_exam_student_id = '".$sexams->ceid."' 
                                    AND cbse_exam_assessment_type_id = '".$sassessments->id."'");

                                $score = $scoreQuery->getRow();
                                $marks = !empty($score->marks) ? $score->marks : 'N/A';

                                $subScore += $score->marks ?? 0;
                                $subMaxim += $sassessments->maximum_marks;

                                $subjectData["assessments"][] = [
                                    "assessment_name" => $sassessments->name,
                                    "obtained_marks" => $marks,
                                    "maximum_marks" => $sassessments->maximum_marks
                                ];
                            }

                            $examData["subjects"][] = $subjectData;

                            $exmObt += $subScore;
                            $exmMax += $subMaxim;
                        }

                        $stuExmTotPrc = $exmMax > 0 ? number_format((($exmObt / $exmMax) * 100), 2, '.', '') : 0;

                        $gradesQuery = $this->db->query("SELECT * FROM `cbse_exam_grades_range` 
                            WHERE cbse_exam_grade_id = '".$sexams->cbse_exam_grade_id."' 
                            AND maximum_percentage >= '".$stuExmTotPrc."' 
                            AND minimum_percentage <= '".$stuExmTotPrc."'");

                        $grades = $gradesQuery->getRow();
                        $grade = $grades->name ?? 'N/A';

                        $ranksQuery = $this->db->query("SELECT * FROM `cbse_student_exam_ranks` 
                            WHERE cbse_exam_id = '".$sexams->cbse_exam_id."' 
                            AND student_session_id = '".$ss_info->ssid."'");

                        $ranks = $ranksQuery->getRow();
                        $rank = $ranks->rank ?? 'N/A';

                        $examData["total_marks"] = "$exmObt / $exmMax";
                        $examData["percentage"] = "$stuExmTotPrc%";
                        $examData["grade"] = $grade;
                        $examData["rank"] = $rank;

                        $termData["exams"][] = $examData;
                    }

                    $progress["terms"][] = $termData;
                }

                $response = [
                    'status' => 'success',
                    'message' => 'Request processed successfully.',
                    'data' => $progress,
                    'result' => true
                ];

                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            }
            else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentProgressAssessmentWise() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $studentId              = $data['studentId'];
                $sessionId              = site_info()['active_session'];
                $all_cbse_terms_info    = $this->StaffModel->all_cbse_terms_info();
                $ss_info                = $this->StaffModel->student_session_info($studentId);
                $assessments            = $this->StaffModel->all_cbse_assessment_info_by_sid($ss_info->ssid); 

                $response = [
                    'status' => 'success',
                    'message' => 'Request processed successfully.',
                    'data'      =>  [
                        'student_info'  => $ss_info,
                        'assessments'   => $assessments,
                    ],
                    'result' => true
                ];

                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            }
            else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentProgressSubjectWise() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $studentId              = $data['studentId'];
                $sessionId              = site_info()['active_session'];
                $all_cbse_terms_info    = $this->StaffModel->all_cbse_terms_info();
                $ss_info                = $this->StaffModel->student_session_info($studentId);
                $subjects               = $this->StaffModel->all_cbse_subject_info_by_sid($ss_info->ssid); 

                $response = [
                    'status' => 'success',
                    'message' => 'Request processed successfully.',
                    'data'      =>  [
                        'student_info'  => $ss_info,
                        'subjects'      => $subjects,
                    ],
                    'result' => true
                ];

                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            }
            else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function studentMarksheet() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $studentIds             = $data['studentId'];
                $templateId             = $data['templateId'];
                $type                   = $data['type'];
                $sessionId              = site_info()['active_session'];
                
                $students       = array();
                foreach ($studentIds as $student_id) {
                    $students[] = $student_id;
                }
                
                $fileName = $studentIds[0].uniqid();
        
        
                if ($studentIds != null && $templateId != null) {
                    $apiUrl = site_info()['siteUrl'];
                    $curl = curl_init($apiUrl."resultapi/printmarksheet");
                    $postdata = array(
                        "student_id"    => $students,
                        "template_id"   => $templateId,
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

                $response = [
                    'status'    => 'success',
                    'message'   => 'Request processed successfully.',
                    'data'      =>  $return,
                    'result'    => true
                ];

                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
                    
                }
            }
            else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        } 
    }
    
    public function getPtmList() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $all_ptm            = $this->StaffModel->all_upcoming_ptm($userId);
                
                $ptmData            = [];
                foreach ($all_ptm as $ptm) { 
                    $scheduleInfo   = $this->StaffModel->ptm_schedule_info($ptm->ptm_id);
                    $ptm->schedule  = $scheduleInfo;
                    $ptmData[]      = $ptm;
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $ptmData, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function savePtm() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $ptmTitle           = $data['ptmTitle'];
                $date               = $data['date'];
                $remark             = $data['remark'];
                $fromTime           = $data['fromTime'];
                $toTime             = $data['toTime'];
                $sessionId          = site_info()['active_session'];
                
                $formData = array(
				    'ptm_title' => $ptmTitle,
				    'from_date' => $date,
				    'to_date'   => $date,
				    'remark'    => $remark,
				    'host_by'   => $userId,
			    );
			    $builder = $this->db->table('cyc_ptm');
                $builder->insert($formData);
                $savedId = $this->db->insertID();
            
                foreach ($fromTime as $key => $ftime) {
                
                    $slotData = array(
				        'ptm_id'    => $savedId,
				        'time_from' => $ftime,
				        'time_to'   => $toTime[$key],
			        );
			        if (!empty($ftime) && !empty($toTime)) {
			            $builder = $this->db->table('cy_ptm_time_slot');
                        $builder->insert($slotData);
			        }
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function addPtmSchedule() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $all_students_info  = $this->getGroupedStudentsLocal($classId, $sectionId);
                $all_ptm            = $this->StaffModel->all_upcoming_ptm($userId);
                
                $ptmData            = [];
                foreach ($all_ptm as $ptm) { 
                    $scheduleInfo   = $this->StaffModel->ptm_schedule_info($ptm->ptm_id);
                    $slots          = $this->StaffModel->ptm_slot_info($ptm->ptm_id);
                    $ptm->schedule  = $scheduleInfo;
                    $ptm->slot      = $slots;
                    $ptmData[]      = $ptm;
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      =>  [
                        'students'  => $all_students_info,
                        'ptms'      => $ptmData,
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function savePtmSchedule() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $ptmId              = $data['ptmId'];
                $ptsId              = $data['ptsId'];
                $students           = $data['students'];
                $sessionId          = site_info()['active_session'];
                
                $ptmInfo            = $this->StaffModel->ptm_info($ptmId);
                $ptsInfo            = $this->StaffModel->pts_info($ptsId);
            
                foreach ($students as $key => $stu) {
                    $student = $stu['student_id'];
                    $sptsInfo = $this->db->query("SELECT ptms_id AS sId FROM `cyc_ptm_schedule` WHERE student_id  = '".$student."' AND date = '".$ptmInfo->from_date."'  ")->getRow();
                    if (empty($sptsInfo->sId)) {
                        $stuInfo            = $this->StaffModel->student_session_info($student);
                        $formData = array(
				            'ptm_id'        => $ptmId,
				            'student_id'    => $student,
				            'parent_id'     => $stuInfo->parent_id,
				            'teacher_id'    => $userId,
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
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function ptmAttendance() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $studentId              = $data['studentId'];
                $sessionId              = site_info()['active_session'];
                $all_cbse_terms_info    = $this->StaffModel->all_cbse_terms_info();
                $ss_info                = $this->StaffModel->student_session_info($studentId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function savePtmAttendance() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $studentId          = $data['studentId'];
                $feedbackScore      = $data['feedbackScore'];
                $feedbackRemark     = $data['feedbackRemark'];
                $parentsComplain    = $data['parentsComplain'];
                $specialCase        = $data['specialCase'];
                $sessionId          = site_info()['active_session'];
                
                $sptsInfo           = $this->db->query("SELECT ptm_id AS pId FROM `cyc_ptm_schedule` WHERE student_id  = '".$studentId."' AND date = '".date("Y-m-d")."'  ")->getRow();
                $stuInfo            = $this->StaffModel->student_session_info($studentId);
            
                $formData = array(
				    'ptm_id'            => $sptsInfo->pId,
				    'student_id'        => $studentId,
				    'parent_id'         => $stuInfo->parent_id,
				    'teacher_id'        => $userId,
				    'feedback_score'    => $feedbackScore,
				    'feedback_remark'   => $feedbackRemark,
				    'parents_complain'  => $parentsComplain,
				    'special_case'      => $specialCase,
			    );
			    if (!empty($studentId) && !empty($feedbackScore) && !empty($sptsInfo->pId)) {
			        $builder = $this->db->table('cyc_ptm_attendance');
                    $builder->insert($formData);
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function leads() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client) {
                $jsonData   = file_get_contents('php://input');
                $data       = json_decode($jsonData, true);
                $userId     = $data['userId'];
                $sessionId  = site_info()['active_session'];
                $lcInfo     = $db->query("SELECT c_id as cid FROM `cyc_campaign_time` WHERE staff_id = '$userId' ORDER BY ct_id DESC LIMIT 1")->getRow();
                $activeCamp = $lcInfo->cid ?? null;
                
                $usersCamp  = $this->StaffModel->all_usersin_camp_info();
                $campaigns  = [];

                foreach ($usersCamp as $ucamp) {
                    $cleads = $db->query("SELECT COUNT(l_id) AS total_leads FROM `cyc_leads` WHERE c_id = '$ucamp->c_id'")->getRow();
                    $campaigns[] = [
                        'campaign_id' => $ucamp->c_id,
                        'title'       => $ucamp->c_title,
                        'total_leads' => isset($cleads->total_leads) ? $cleads->total_leads : 0,
                        'is_active'   => ($activeCamp == $ucamp->c_id)
                    ];
                }
                
                $campOpLeads = $this->StaffModel->all_camp_open_leads_info($activeCamp);
                $openLeads   = [];

                foreach ($campOpLeads as $lead) {
                    $cLeadSts = $db->query("SELECT l_id FROM `cyc_leads` WHERE c_id = '$activeCamp' AND current_agent = '$userId' AND l_follow_up_data IS NULL")->getRow();
                    if (empty($cLeadSts->l_id)) {
                        $openLeads[] = [
                            'lead_id'       => $lead->l_id,
                            'name'          => $lead->l_name,
                            'father_name'   => $lead->l_father_name,
                            'take_lead_url' => base_url("admin/staff/take_lead/{$lead->l_id}")
                        ];
                    }
                }
                $cdate              = date("Y-m-d");
                $followUps          = $this->StaffModel->all_missed_followup($userId);
                $missedFollowUps    = [];

                foreach ($followUps as $followUp) {
                    $date1 = new DateTime($followUp->next_followup_date);
                    $date2 = new DateTime($cdate);
                    $interval = $date1->diff($date2);
                    $daysDifference = $interval->days;

                    $statusIcon = ($daysDifference > 0) ? 'danger' : 'primary';

                    if ($followUp->followup_priority == 'Low') {
                        $priorityIcon = 'danger';
                    } elseif ($followUp->followup_priority == 'Medium') {
                        $priorityIcon = 'warning';
                    } elseif ($followUp->followup_priority == 'High') {
                        $priorityIcon = 'success';
                    } else {
                        $priorityIcon = '';
                    }

                    $missedFollowUps[] = [
                        'lead_id'           => $followUp->l_id,
                        'name'              => $followUp->l_name,
                        'campaign'          => $followUp->c_title,
                        'days_ago'          => $daysDifference,
                        'followup_remark'   => $followUp->followup_remark,
                        'next_followup_date'=> $followUp->next_followup_date,
                        'next_followup_time'=> $followUp->next_followup_time,
                        'followup_priority' => $followUp->followup_priority,
                        'priority_icon'     => $priorityIcon,
                        'call_status'       => $followUp->call_status,
                    ];
                }
                $response = [
                    'status'          => 'success',
                    'message'         => 'Request processed successfully.',
                    'active_campaign' => $activeCamp ?? null,
                    'campaigns'       => $campaigns,
                    'open_leads'      => $openLeads,
                    'missed_followups'=> $missedFollowUps
                ];

                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function campaign() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $all_camp           = $this->StaffModel->all_usersin_camp_info($userId);
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $all_camp, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function addCampaign() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $allCampType        = $this->StaffModel->all_camp_type_info();
                $allPromoters       = $this->StaffModel->all_camp_promoters_info();
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'allCampType' => $allCampType,
                        'allPromoters'=> $allPromoters
                        ], 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveCampaign() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $ctId               = $data['ctId'];
                $cpId               = $data['cpId'];
                $cTitle             = $data['cTitle'];
                $cDescription       = $data['cDescription'];
                $sessionId          = site_info()['active_session'];
                
                if (empty($data['cpId'])) {
                    $cpId           = null;
                }
        
                $sptsInfo           = $this->db->query("SELECT ptm_id AS pId FROM `cyc_ptm_schedule` WHERE student_id  = '".$studentId."' AND date = '".date("Y-m-d")."'  ")->getRow();
                $stuInfo            = $this->StaffModel->student_session_info($studentId);
            
                $formData = array(
				    'ct_id'             => $ctId,
                    'cp_id'             => $cpId,
			        'c_title'           => $cTitle,
			        'c_description'     => $cDescription,
			        'c_by'              => $userId,
			        'c_manager'         => $userId,
			        'c_date'            => date("Y-m-d"),
			    );
			    if (!empty($ctId) && !empty($cTitle) && !empty($cDescription)) {
			        $builder = $this->db->table('cyc_campaign');
                    $builder->insert($formData);
                    $savedId = $this->db->insertID();
                    
                    $cnsData = array(
			            'c_id'          => $savedId,
			            'staff_id'      => $userId,
			            'level'         => 1,
		            );
                    $builder = $this->db->table('cyc_leads_counsellor');
                    $builder->insert($cnsData);
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function addLead() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData           = file_get_contents('php://input');
                $data               = json_decode($jsonData, true);
                $userId             = $data['userId'];
                $sessionId          = site_info()['active_session'];
                $allCamp            = $this->StaffModel->all_users_camp_info($userId);
                $allSource          = $this->StaffModel->all_source_info();
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'allCamp'   => $allCamp,
                        'allSource' => $allSource
                        ], 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveLead() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $lId                    = $data['lId'] ?? null;
                $cId                    = $data['cId'] ?? null;
                $lName                  = $data['lName'] ?? null;
                $lFatherName            = $data['lFatherName'] ?? null;
                $lMotherName            = $data['lMotherName'] ?? null;
                $lClass                 = $data['lClass'] ?? null;
                $lQualification         = $data['lQualification'] ?? null;
                $lAddress               = $data['lAddress'] ?? null;
                $lLocation              = $data['lLocation'] ?? null;
                $lPhoneNumber           = $data['lPhoneNumber'] ?? null;
                $lAlternativePhone      = $data['lAlternativePhone'] ?? null;
                $lEmail                 = $data['lEmail'] ?? null;
                $lSource                = $data['lSource'] ?? null;
                $lResources             = $data['lResources'] ?? null;
                
                if (empty($lId)) {
                $formData = array(
				    'c_id'                  => $cId,
			        'l_name'                => $lName,
			        'l_gender'              => $data('lGender'),
			        'l_dob'                 => $data('lDob'),
			        'l_caste'               => $data('lCaste'),
			        'l_sub_caste'           => $data('lSubCaste'),
			        'l_aadhar_no'           => $data('lAadharNo'),
			        'l_blood_group'         => $data('lBloodGroup'),
			        'l_religion'            => $data('lReligion'),
			        'l_mother_tongue'       => $data('lMotherTongue'),
			        'l_father_name'         => $data('lFatherName'),
			        'l_father_phone'        => $data('lFatherPhone'),
			        'l_father_qualification'=> $data('lFatherQualification'),
			        'l_mother_name'         => $data('lMotherName'),
			        'l_mother_phone'        => $data('lMotherPhone'),
			        'l_mother_qualification'=> $data('lMotherQualification'),
			        'l_guradian_name'       => $data('lGuradianName'),
			        'l_guardian_phone'      => $data('lGuardianPhone'),
			        'l_class'               => $data('lClass'),
			        'l_enrolled_course'     => $data('lEnrolledCourse'),
			        'l_elective_subjects'   => $data('lElectiveSubjects'),
			        'l_address'             => $data('lAddress'),
			        'l_location'            => $data('lLocation'),
			        'l_phone_number'        => $data('lPhoneNumber'),
			        'l_alternative_phone'   => $data('lAlternativePhone'),
			        'l_emergency_contact_no'=> $data('lEmergencyContactNo'),
			        'l_email'               => $data('lEmail'),
			        'l_source'              => $data('lSource'),
			        'l_resources'           => $data('lResources'),
                    'lead_lat'              => $data('lat'),
                    'lead_lng'              => $data('lng'),
			        'individual_status'     => $userId,
			    );
			    if (!empty($cId) && !empty($lName) && !empty($lAddress) && !empty($lClass) && !empty($lPhoneNumber)) {
			        $builder = $this->db->table('cyc_campaign');
                    $builder->insert($formData);
                    $savedId = $this->db->insertID();
                    
                    $cnsData = array(
			            'c_id'          => $savedId,
			            'staff_id'      => $userId,
			            'level'         => 1,
		            );
                    $builder = $this->db->table('cyc_leads_counsellor');
                    $builder->insert($cnsData);
                    
                    $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
                } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Invalid data!', 
                        'data'      => null, 
                        'result'    => false
                    ];
                    return $this->response
                        ->setStatusCode(401)
                        ->setJSON($response);  
                } } else {
                $formData = array(
			        'l_name'                => $lName,
			        'l_gender'              => $data('lGender'),
			        'l_dob'                 => $data('lDob'),
			        'l_caste'               => $data('lCaste'),
			        'l_sub_caste'           => $data('lSubCaste'),
			        'l_aadhar_no'           => $data('lAadharNo'),
			        'l_blood_group'         => $data('lBloodGroup'),
			        'l_religion'            => $data('lReligion'),
			        'l_mother_tongue'       => $data('lMotherTongue'),
			        'l_father_name'         => $data('lFatherName'),
			        'l_father_phone'        => $data('lFatherPhone'),
			        'l_father_qualification'=> $data('lFatherQualification'),
			        'l_mother_name'         => $data('lMotherName'),
			        'l_mother_phone'        => $data('lMotherPhone'),
			        'l_mother_qualification'=> $data('lMotherQualification'),
			        'l_guradian_name'       => $data('lGuradianName'),
			        'l_guardian_phone'      => $data('lGuardianPhone'),
			        'l_class'               => $data('lClass'),
			        'l_enrolled_course'     => $data('lEnrolledCourse'),
			        'l_elective_subjects'   => $data('lElectiveSubjects'),
			        'l_address'             => $data('lAddress'),
			        'l_location'            => $data('lLocation'),
			        'l_phone_number'        => $data('lPhoneNumber'),
			        'l_alternative_phone'   => $data('lAlternativePhone'),
			        'l_emergency_contact_no'=> $data('lEmergencyContactNo'),
			        'l_email'               => $data('lEmail'),
			        'l_source'              => $data('lSource'),
			        'l_resources'           => $data('lResources'),
                    'lead_lat'              => $data('lat'),
                    'lead_lng'              => $data('lng'),
			        'individual_status'     => $userId,
			    );
			    if (!empty($lId) &&!empty($cId) && !empty($lName) && !empty($lAddress) && !empty($lClass) && !empty($lPhoneNumber)) {
			        $builder = $this->db->table('cyc_leads');
                    $builder->where('cyc_leads.l_id', $lId);
                    $builder->update($leadData);
			    } }
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function importLead() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $file                   = $data['file'];
                
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
                    
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function startCampaign() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $newCampId              = $data['newCampId'];
                $actCampId              = $data['actCampId'];
                
                if (!empty($data['actCampId'])) {
                    if ($newCampId == $actCampId) {
                        $ccTim      = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".$actCampId."' AND staff_id  = '".$userId."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
			            $datetime   = date("Y-m-d H:i:s");
			            $from_time  = strtotime($ccTim->date.' '.$ccTim->time);
                        $to_time    = strtotime($datetime);
                        $duration   = round(abs($to_time - $from_time) / 60,2);
			    
			            $camTimData = array(
			                'c_id'      => $actCampId,
			                'staff_id'  => $userId,
			                'date'      => date("Y-m-d"),
			                'time'      => date("H:i:s"),
			                'type'      => 'end',
			                'duration'  => $duration,
			            );
                        $builder = $this->db->table('cyc_campaign_time');
                        $builder->insert($camTimData);
                    } else {
                        $ccTim      = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".$actCampId."' AND staff_id  = '".$userId."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
			            $datetime   = date("Y-m-d H:i:s");
			            $from_time  = strtotime($ccTim->date.' '.$ccTim->time);
                        $to_time    = strtotime($datetime);
                        $duration   = round(abs($to_time - $from_time) / 60,2);
			    
			            $camTimData = array(
			                'c_id'      => $actCampId,
			                'staff_id'  => $userId,
			                'date'      => date("Y-m-d"),
			                'time'      => date("H:i:s"),
			                'type'      => 'end',
			                'duration'  => $duration,
			            );
                        $builder = $this->db->table('cyc_campaign_time');
                        $builder->insert($camTimData);
			    
			            $camTimData = array(
			                'c_id'      => $newCampId,
			                'staff_id'  => $userId,
			                'date'      => date("Y-m-d"),
			                'time'      => date("H:i:s"),
			                'type'      => 'start',
			            );
                        $builder = $this->db->table('cyc_campaign_time');
                        $builder->insert($camTimData);
                    }
                } else {
                    $camTimData = array(
			            'c_id'      => $newCampId,
			            'staff_id'  => $userId,
			            'date'      => date("Y-m-d"),
			            'time'      => date("H:i:s"),
			            'type'      => 'start',
			        );
                    $builder = $this->db->table('cyc_campaign_time');
                    $builder->insert($camTimData);
                }
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveCallTIme() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData   = file_get_contents('php://input');
                $data       = json_decode($jsonData, true);
                $userId     = $data['userId'];
                $cId        = $data['cId'];
                $lId        = $data['lId'];
                $tel        = $data['tel'];
                $lcsinfo    = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE staff_id  = '".$userId."' AND l_id IS NOT NULL AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
                
                if (!empty($lcsinfo)) {
                    $lceinfo        = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE staff_id  = '".$userId."' AND l_id = '".$lcsinfo->l_id."' AND type = 'end' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
                    if (empty($lceinfo)) {
                        $datetime   = date("Y-m-d H:i:s");
			            $from_time  = strtotime($lcsinfo->date.' '.$lcsinfo->time);
                        $to_time    = strtotime($datetime);
                        $duration   = round(abs($to_time - $from_time) / 60,2);
                
                        $ccTimData  = array(
			                'c_id'      => $lcsinfo->c_id,
			                'l_id'      => $lcsinfo->l_id,
			                'tel'       => $tel,
			                'staff_id'  => $userId,
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
			        'c_id'      => $cId,
			        'l_id'      => $lId,
			        'staff_id'  => $userId,
			        'date'      => date("Y-m-d"),
			        'time'      => date("H:i:s"),
			        'type'      => 'start',
		        );
                $builder = $this->db->table('cyc_campaign_time');
                $builder->insert($ccTimData);
        
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function campaignLeads() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $actCampId              = $data['actCampId'];
                $sessionId              = site_info()['active_session'];
                
                $ccinfo                 = $this->db->query("SELECT * FROM `cyc_leads_counsellor` WHERE staff_id  = '".$userId."' AND c_id = '".$actCampId."' ")->getRow();
                $campOpLeads            = $this->StaffModel->all_camp_open_leads_info($actCampId); 
                
                $campData               = [];
                foreach ($campOpLeads as $campOpLead) { 
                    $cLeadSts           = $this->db->query("SELECT l_id AS ls FROM `cyc_leads` WHERE c_id  = '".$actCampId."' AND current_agent = '".$userId."'  AND l_follow_up_data IS NULL ")->getRow();
                    $campTkLeads        = $this->StaffModel->all_camp_leads_info($actCampId);
                    $leadFollowUps      = [];
                    foreach ($campTkLeads as $campTl) {
                        $followUps      = $this->StaffModel->all_lead_followup($userId, $campTl->l_id);
                        $leadFollowUps[] = [
                            'leadId'     => $campTl->l_id,
                            'followUps'  => $followUps
                        ];
                    }
                    $campData[] = [
                        'leads'       => $campOpLead,
                        'followUps'   => $leadFollowUps
                    ];
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $campData, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function takenLeads() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $fdate                  = $data['fdate'] ?? null;
                $fdate                  = $data['fdate'] ?? null;
                $cs                     = $data['cs'] ?? null;
                $sessionId              = site_info()['active_session'];
                $allFollowup            = $this->StaffModel->all_followup($userId, $fdate, $fdate, $cs);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $allFollowup, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function walkinLeads() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $fdate                  = $data['fdate'] ?? null;
                $fdate                  = $data['fdate'] ?? null;
                $mnumber                = $data['mnumber'] ?? null;
                $sessionId              = site_info()['active_session'];
                
                $followStatus           = $this->StaffModel->all_followup_status_info();
                $allFollowup            = $this->StaffModel->all_walkin_leads_info($userId, $fdate, $fdate, $mnumber);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'followUpStatus'    => $followStatus,
                        'allFollowUp'       => $allFollowup,
                    ], 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function missedLeads() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $fdate                  = $data['fdate'] ?? null;
                $fdate                  = $data['fdate'] ?? null;
                $cs                     = $data['cs'] ?? null;
                $sessionId              = site_info()['active_session'];
                $followStatus           = $this->StaffModel->all_followup_status_info();
                $allFollowup            = $this->StaffModel->all_missed_followup($userId, $fdate, $fdate, $mnumber);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'followUpStatus'    => $followStatus,
                        'allFollowUp'       => $allFollowup,
                    ], 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function missedFollowup() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $fdate                  = $data['fdate'] ?? null;
                $fdate                  = $data['fdate'] ?? null;
                $cs                     = $data['cs'] ?? null;
                $sessionId              = site_info()['active_session'];
                $followStatus           = $this->StaffModel->all_followup_status_info();
                $allFollowup            = $this->StaffModel->all_missed_followup($userId, $fdate, $fdate, $mnumber);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'followUpStatus'    => $followStatus,
                        'allFollowUp'       => $allFollowup,
                    ], 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function allFollowup() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $fdate                  = $data['fdate'] ?? null;
                $fdate                  = $data['fdate'] ?? null;
                $cs                     = $data['cs'] ?? null;
                $sessionId              = site_info()['active_session'];
                $all_followup           = $this->StaffModel->all_followup($userId);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $all_followup, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function leadsView() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $lId                    = $data['lId'];
                $sessionId              = site_info()['active_session'];
                
                $leadsInfo              = $this->StaffModel->leads_info($id);
                $leadsInfo->followUpData= $this->StaffModel->all_leads_followup($id);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $leadsInfo, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function takeLead() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $lId                    = $data['lId'];
                $sessionId              = site_info()['active_session'];
                $leadsInfo              = $this->StaffModel->leads_info($lId);
                $followUp               = $this->StaffModel->all_leads_followup($lId);
                $followStatus           = $this->StaffModel->all_followup_status_info();
                $followContent          = $this->StaffModel->all_followup_content_info();
                $ccTim                  = $this->db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".$leadsInfo->c_id."' AND staff_id  = '".$userId."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
                
                $leadData = array(
			        'l_status'          => 'Taken',
			        'taken_by'          => $userId,
			        'current_agent'     => $userId,
		        );
                $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $lId);
                $builder->update($leadData); 
                
                if (empty($followUp)) {
                    $time   =   date("H:i:s");
                    $fwData = array(
			            'c_id'              => $leadsInfo->c_id,
			            'l_id'              => $lId,
			            'followup_date'     => date("Y-m-d"),
			            'followup_time'     => date("H:i:s"),
			            'followup_remark'   => 'Call Initiated',
			            'followup_by'       => $userId,
			            'next_followup_date'=> date("Y-m-d"),
			            'next_followup_time'=> date("H:i:s",time() + 1800),
		            );
                    $builder = $this->db->table('cyc_leads_followup');
                    $builder->insert($fwData);
                }
                $staffInfo      = $this->StaffModel->all_camp_counsellor_info($leadsInfo->c_id);
                $allClsInfo     = $this->StaffModel->all_class_info();
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'leadsInfo'     => $leadsInfo,
                        'followUp'      => $followUp,
                        'followStatus'  => $followStatus,
                        'followContent' => $followContent,
                        'ccTimInfo'     => $ccTim,
                        'staffInfo'     => $staffInfo,
                        'allClsInfo'    => $allClsInfo,
                    ], 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveFollowUp() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData   = file_get_contents('php://input');
                $data       = json_decode($jsonData, true);
                $userId     = $data['userId'];
                $classId    = $data['classId'];
                $cId        = $data['cId'];
                $lId        = $data['lId'];
                $fr         = $data['fr'];
                $nfd        = $data['nfd'];
                $nft        = $data['nft'];
                $cs         = $data['cs'];
                $level      = $data['level'];
                
                $leadLvl = array(
                    'level'      => $level,
                );
		        $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $lId);
                $builder->update($leadLvl);
                
                if ($cs == 'Walk-in') {
                    $leadData = array(
			            'l_status'      => 'Walk-in',
		            );
		            $builder = $this->db->table('cyc_leads');
                    $builder->where('cyc_leads.l_id', $lId);
                    $builder->update($leadData); 
                }
                
                if ($cs == 'Converted') {
                    $leadData = array(
			            'l_status'      => 'Converted',
			            'is_closed'     => 1,
			            'closed_date'   => date("Y-m-d"),
			            'closed_by'     => $userId,
		            );
		            $builder = $this->db->table('cyc_leads');
                    $builder->where('cyc_leads.l_id', $lId);
                    $builder->update($leadData); 
                
                    $leadsInfo  = $this->StaffModel->leads_info($lId);
                    $class_id   = $classId;
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
                        $builder->where('cyc_leads.l_id', $lId);
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
			            'closed_by'     => $userId,
		            );
		            $builder = $this->db->table('cyc_leads');
                    $builder->where('cyc_leads.l_id', $lId);
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
                $builder->where('cyc_leads.l_id', $lId);
                $builder->update($leadData); 
            
                $formData = array(
				    'c_id'                  => $cId,
				    'l_id'                  => $lId,
				    'followup_date'         => date("Y-m-d"),
				    'followup_time'         => date("H:i:s"),
				    'next_followup_date'    => $nfd,
				    'next_followup_time'    => $nft,
				    'followup_remark'       => $fr,
				    'call_status'           => $cs,
				    'followup_by'           => $userId,
			    );
			    if (!empty($lId) && !empty($fr) && !empty($cs)) {
			        $this->db->query("UPDATE cyc_leads_followup SET followup_status = '1' WHERE l_id= '".$lId."' ");
			        $builder = $this->db->table('cyc_leads_followup');
                    $builder->insert($formData);
                
                    $leadData = array(
			            'l_follow_up_data'  => json_encode($formData),
		            );
		            $builder = $this->db->table('cyc_leads');
                    $builder->where('cyc_leads.l_id', $lId);
                    $builder->update($leadData); 
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveLeadTransfer() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData   = file_get_contents('php://input');
                $data       = json_decode($jsonData, true);
                $userId     = $data['userId'];
                $tlid       = $data['tlid'];
                $tcid       = $data['tcid'];
                $transferTo = $data['transferTo'];
                $level      = $data['level'];
                
                $leadLvl = array(
                    'level'      => $level,
                );
		        $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $tlid);
                $builder->update($leadLvl);
                
                $leadsInfo  = $this->StaffModel->leads_info($tlid);
                $followUp   = $this->StaffModel->all_leads_followup($tlid);
                
                $leadData = array(
			        'l_status'          => 'Taken',
			        'taken_by'          => $userId,
			        'current_agent'     => $transferTo,
		        );
		        if ($leadsInfo->current_agent != $transferTo) {
                    $new_array          = array();
                    if (!empty($leadsInfo->l_follow_up_data)) {
                        $agents         = json_decode($leadsInfo->l_follow_up_data);
                        foreach ($agents as $key => $agent) {
                            $new_array[]=  $agent;
                        }
                    }
                    $new_array[]['Counsellor ']     = $transferTo;
                    $followup_data                  = json_encode($new_array);
                    $leadData['l_follow_up_data']   = $followup_data;
                }
                $builder = $this->db->table('cyc_leads');
                $builder->where('cyc_leads.l_id', $tlid);
                $builder->update($leadData);
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => null, 
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
//================================= WEB ======================================//
    public function allExams() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData       = file_get_contents('php://input');
                $data           = json_decode($jsonData, true);
                $userId         = $data['userId'];
                $classId        = $data['classId'] ?? null;
                $sectionId      = $data['sectionId'] ?? null;
                $sessionId      = site_info()['active_session'];
                $all_followup   = $this->StaffModel->all_followup($userId);
                
                $allClsInfo     = $this->StaffModel->all_teachers_class_info($userId, site_info()['active_session']);
                $cbseTerms      = $this->StaffModel->all_cbse_terms();
                $cbseAsses      = $this->StaffModel->all_cbse_exam_assessments();
                $cbseGrades     = $this->StaffModel->all_cbse_exam_grades();
                
                $allClsSecGroups = groupByClassSection($classId, $sectionId);
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
                    $exams_list      = $this->StaffModel->all_cbse_exams($classId, $sectionId, site_info()['active_session']);
                }
            
                $cbseExams   = $exams_list;
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'exams'         => $cbseExams,
                        'terms'         => $cbseTerms,
                        'assessments'   => $cbseAsses,
                        'grades'        => $cbseGrades,
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function examInfo() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData       = file_get_contents('php://input');
                $data           = json_decode($jsonData, true);
                $userId         = $data['userId'];
                $examId         = $data['examId'] ?? null;
                $sessionId      = site_info()['active_session'];
                
                $exmInfo        = $this->db->query("SELECT * FROM cbse_exam_class_sections WHERE  cbse_exam_id = '".$examId."' ")->getRow();
                $csInfo         = $this->db->query("SELECT * FROM class_sections WHERE  id = '".$exmInfo->class_section_id."' ")->getRow();    
		        $students1      = $this->StaffModel->all_student_info($csInfo->class_id, $csInfo->section_id, site_info()['active_session']);
		        $students2      = $this->StaffModel->all_exam_students_info($examId);
		        $subjects       = $this->StaffModel->all_cbse_term_exam_subjects_info($examId);
                
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => [
                        'examInfo'      => $exmInfo,
                        'csInfo'        => $csInfo,
                        'allStudents'   => $students1,
                        'exmStudents'   => $students2,
                        'subjects'      => $subjects,
                    ],
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveExam() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData   = file_get_contents('php://input');
                $data       = json_decode($jsonData, true);
                $userId     = $data['userId'];
                $classId    = $data['classId'];
                $sectionId  = $data['sectionId'];
                $term       = $data['term'];
                $assessment = $data['assessment'];
                $grade      = $data['grade'];
                $examName   = $data['examName'];
                $description= $data['description'];
                $publish    = $data['publish'];
                
                $csId       = class_section_info($classId, $sectionId);
                $formData = array(
				    'cbse_term_id'              => $term,
				    'cbse_exam_assessment_id'   => $assessment,
				    'cbse_exam_grade_id'        => $grade,
				    'name'                      => $examName,
				    'session_id'                => site_info()['active_session'],
				    'description'               => $description,
				    'is_publish'                => $publish,
				    'created_by'                => $userId,
			    );
			    if (!empty($term) && !empty($assessment) && !empty($grade) && !empty($examName) && !empty($csId)) {
			        $builder    = $this->db->table('cbse_exams');
                    $builder->insert($formData);
                    $savedId    = $this->db->insertID();
                
                    $csData = array(
				        'cbse_exam_id'      => $savedId,
				        'class_section_id'  => $csId,
			        );
                    $builder    = $this->db->table('cbse_exam_class_sections');
                    $builder->insert($csData);
                    
                    $response = [
                        'status'    => 'success', 
                        'message'   => 'Request processed successfully.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(200)
                        ->setJSON($response);
			    } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Mandatory data missing.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(400)
                        ->setJSON($response);
			    }
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveTerm() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData       = file_get_contents('php://input');
                $data           = json_decode($jsonData, true);
                $userId         = $data['userId'];
                $termName       = $data['termName'];
                $termCode       = $data['termCode'];
                $description    = $data['termDescription'];
                
                $csId       = class_section_info($classId, $sectionId);
                $formData = array(
				    'name'          => $termName,
				    'term_code'     => $termCode,
				    'description'   => $description,
				    'created_by'    => $userId,
			    );
			    if (!empty($termName) && !empty($termCode) && !empty($description)) {
			        $builder    = $this->db->table('cbse_terms');
                    $builder->insert($formData);
                    $savedId    = $this->db->insertID();
                    
                    $response = [
                        'status'    => 'success', 
                        'message'   => 'Request processed successfully.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(200)
                        ->setJSON($response);
			    } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Mandatory data missing.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(400)
                        ->setJSON($response);
			    }
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function allAssessments() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData       = file_get_contents('php://input');
                $data           = json_decode($jsonData, true);
                $userId         = $data['userId'];
                $sessionId      = site_info()['active_session'];
                
                $allAssessments = $this->StaffModel->all_cbse_exam_assessments();
                $assessmentData = [];
                foreach ($allAssessments as $as) {
                    $types              = $this->StaffModel->all_cbse_exam_assessments_type($as->id);
                    $as->types          = $types;
                    $assessmentData[]   = $as;
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $assessmentData,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function assessmentInfo() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData       = file_get_contents('php://input');
                $data           = json_decode($jsonData, true);
                $userId         = $data['userId'];
                $assessmentId   = $data['assessmentId'] ?? null;
                $sessionId      = site_info()['active_session'];
                
                $assesInfo       = $this->StaffModel->cbse_exam_assessments($assessmentId);
                $types           = $this->StaffModel->all_cbse_exam_assessments_type($assessmentId);
                $assesInfo->types= $types;
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $assesInfo,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveAssessment() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $assessmentId           = $data['assessmentId'];
                $assessmentName         = $data['assessmentName'];
                $assessmentDescription  = $data['assessmentDescription'];
                $typeId                 = $data['typeId'];
                $assessType             = $data['assessType'];
                $assessCode             = $data['assessCode'];
                $assessMaxMarks         = $data['assessMaxMarks'];
                $assessPassPercent      = $data['assessPassPercent'];
                
                $csId       = class_section_info($classId, $sectionId);
                $formData = array(
				    'name'          => $assessmentName,
				    'description'   => $assessmentDescription,
			    );
			    if (!empty($assessmentName) && !empty($assessmentDescription)) {
			         if (empty($assessmentId)) {
			            $builder    = $this->db->table('cbse_exam_assessments');
                        $builder->insert($formData);
                        $savedId    = $this->db->insertID();
			        } else {
			            $builder    = $this->db->table('cbse_exam_assessments');
                        $builder->where('cbse_exam_assessments.id', $assessmentId);
                        $builder->update($formData);
                        $savedId    = $assessmentId;
			        }
			        
			        
			        foreach ($assessType as $key => $atype) {
                        $atData = array(
				            'cbse_exam_assessment_id'   => $savedId,
				            'name'                      => $atype,
				            'code'                      => $assessCode[$key],
				            'maximum_marks'             => $assessMaxMarks[$key],
				            'pass_percentage'           => $assessPassPercent[$key],
				            'created_by'                => $userId,
			            );
			            if (!empty($atype) && !empty($assessCode[$key]) && !empty($assessMaxMarks[$key]) && !empty($assessPassPercent[$key])) {
			                if (empty($typeId[$key])) {
                                $builder    = $this->db->table('cbse_exam_assessment_types');
                                $builder->insert($atData);
			                } else {
			                    $builder    = $this->db->table('cbse_exam_assessment_types');
                                $builder->where('cbse_exam_assessment_types.id', $typeId[$key]);
                                $builder->update($atData);
			                }
			            }
			        }
                    
                    $response = [
                        'status'    => 'success', 
                        'message'   => 'Request processed successfully.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(200)
                        ->setJSON($response);
			    } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Mandatory data missing.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(400)
                        ->setJSON($response);
			    }
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function allGrades() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData       = file_get_contents('php://input');
                $data           = json_decode($jsonData, true);
                $userId         = $data['userId'];
                $sessionId      = site_info()['active_session'];
                
                $allGrades      = $this->StaffModel->all_cbse_exam_grades();
                $gradesData     = [];
                foreach ($allGrades as $ag) {
                    $ranges         = $this->StaffModel->all_cbse_exam_grade_range($ag->id);
                    $ag->ranges     = $ranges;
                    $gradesData[]   = $ag;
                }
                
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $gradesData,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function gradesInfo() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData       = file_get_contents('php://input');
                $data           = json_decode($jsonData, true);
                $userId         = $data['userId'];
                $gradeId        = $data['gradeId'] ?? null;
                $sessionId      = site_info()['active_session'];
                
                $gradeInfo      = $this->StaffModel->all_cbse_exam_grades($gradeId);
                $ranges         = $this->StaffModel->all_cbse_exam_grade_range($gradeId);
                $gradeInfo->ranges= $ranges;
                $response = [
                    'status'    => 'success', 
                    'message'   => 'Request processed successfully.', 
                    'data'      => $gradeInfo,
                    'result'    => true
                ];
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON($response);
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
    
    public function saveGrade() {
        if ($this->request->getMethod() === 'post') {
            $check_auth_client  = $this->ApiModel->check_auth_client();
            if ($check_auth_client == true) {
                $jsonData               = file_get_contents('php://input');
                $data                   = json_decode($jsonData, true);
                $userId                 = $data['userId'];
                $assessmentId           = $data['assessmentId'];
                $assessmentName         = $data['assessmentName'];
                $assessmentDescription  = $data['assessmentDescription'];
                $typeId                 = $data['typeId'];
                $assessType             = $data['assessType'];
                $assessCode             = $data['assessCode'];
                $assessMaxMarks         = $data['assessMaxMarks'];
                $assessPassPercent      = $data['assessPassPercent'];
                
                $csId       = class_section_info($classId, $sectionId);
                $formData = array(
				    'name'          => $assessmentName,
				    'description'   => $assessmentDescription,
			    );
			    if (!empty($assessmentName) && !empty($assessmentDescription)) {
			         if (empty($assessmentId)) {
			            $builder    = $this->db->table('cbse_exam_assessments');
                        $builder->insert($formData);
                        $savedId    = $this->db->insertID();
			        } else {
			            $builder    = $this->db->table('cbse_exam_assessments');
                        $builder->where('cbse_exam_assessments.id', $assessmentId);
                        $builder->update($formData);
                        $savedId    = $assessmentId;
			        }
			        
			        
			        foreach ($assessType as $key => $atype) {
                        $atData = array(
				            'cbse_exam_assessment_id'   => $savedId,
				            'name'                      => $atype,
				            'code'                      => $assessCode[$key],
				            'maximum_marks'             => $assessMaxMarks[$key],
				            'pass_percentage'           => $assessPassPercent[$key],
				            'created_by'                => $userId,
			            );
			            if (!empty($atype) && !empty($assessCode[$key]) && !empty($assessMaxMarks[$key]) && !empty($assessPassPercent[$key])) {
			                if (empty($typeId[$key])) {
                                $builder    = $this->db->table('cbse_exam_assessment_types');
                                $builder->insert($atData);
			                } else {
			                    $builder    = $this->db->table('cbse_exam_assessment_types');
                                $builder->where('cbse_exam_assessment_types.id', $typeId[$key]);
                                $builder->update($atData);
			                }
			            }
			        }
                    
                    $response = [
                        'status'    => 'success', 
                        'message'   => 'Request processed successfully.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(200)
                        ->setJSON($response);
			    } else {
                    $response = [
                        'status'    => 'error', 
                        'message'   => 'Mandatory data missing.', 
                        'data'      => null, 
                        'result'    => true
                    ];
                    return $this->response
                        ->setStatusCode(400)
                        ->setJSON($response);
			    }
            } else {
                $response = [
                    'status'    => 'error', 
                    'message'   => 'Invalid token!', 
                    'data'      => null, 
                    'result'    => false
                ];
                return $this->response
                    ->setStatusCode(401)
                    ->setJSON($response);
            }
        } else {
            $response = [
                'status'    => 'error', 
                'message'   => 'Invalid method!', 
                'data'      => null, 
                'result'    => false
            ];
            return $this->response
                ->setStatusCode(405)
                ->setJSON($response);
        }
    }
}