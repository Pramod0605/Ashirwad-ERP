<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Admin\LoginModel;

class Login extends BaseController
{
    public function __construct() {
        $this->loginModel = new LoginModel();
    }
    public function index() {
        $data                   = [];
        $data['uri1']           = $this->request->uri->getSegment(1);
		$data['title'] 		    = 'Login';
		
		if (isset($_SESSION['isLoggedIn'])) {
		    if (isset($_SESSION['isLeadHandler'])) {
                return redirect()->route('admin/staff/leads');  
		    } else {
		        return redirect()->route('admin/dashboard'); 
		    }
        }
		
		if ($this->request->is('post')) {
		    $email      = $this->request->getPost('email');
		    $password   = $this->request->getPost('password');
		    
		    $datLogin = array(
				'username' => $email,
				'password' => $password
			);
		    
		    $result = $this->loginModel->login($datLogin);
		    if($result){
			    if($result->is_active == 1 && !empty($result->designation)) {
			        $db = db_connect();
			        $diInfo     = $db->query("SELECT * FROM staff_designation WHERE id = '".$result->designation."' ")->getRow();
			        $ciInfo     = $db->query("SELECT * FROM class_teacher WHERE staff_id = '".$result->id."' ")->getRow();
			        $aciInfo    = $db->query("SELECT * FROM cyc_additional_section_teacher WHERE staff_id = '".$result->id."' ")->getRow();
			        $stgInfo    = $db->query("SELECT * FROM sch_settings WHERE id = '1' ")->getRow();
			        
			        $isLibrn    = $db->query("SELECT id as lid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '4' ")->getRow();
			        if (!empty($isLibrn)) {
			            $isLibrn = true;
			        } else {
			            $isLibrn = false;
			        }
			        $isRcptn    = $db->query("SELECT id as rid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '6' ")->getRow();
			        if (!empty($isRcptn)) {
			            $isRcptn = true;
			        } else {
			            $isRcptn = false;
			        }
			        $isTechr     = $db->query("SELECT id as tid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '2' ")->getRow();
			        if (!empty($isTechr)) {
			            $isTechr = true;
			        } else {
			            $isTechr = false;
			        }
			        
			     //   $isClInc    = $db->query("SELECT id as ctid FROM class_teacher WHERE staff_id = '".$result->id."' ")->getRow();
			     //   if (!empty($isClInc)) {
			     //       $isClInc = true;
			     //   } else {
			     //       $isClInc = false;
			     //   }
			        
			        $isClsTtbl   = $db->query("SELECT * FROM subject_timetable WHERE staff_id = '".$result->id."' AND session_id = '".$stgInfo->session_id."' ")->getRow();
			        if (!empty($isClsTtbl)) {
			            $isTechr = true;
			            $isClInc = true;
			        } else {
			            $isClInc = false;
			        }
			        
			        $isCord    = $db->query("SELECT cc_id as ccid FROM cyc_class_coordinator WHERE staff_id = '".$result->id."' ")->getRow();
			        if (!empty($isCord)) {
			            $isCord = true;
			        } else {
			            $isCord = false;
			        }
			        
			        $isAdmin    = $db->query("SELECT id as aid FROM staff_roles WHERE (staff_id = '".$result->id."' AND role_id = '1') OR (staff_id = '".$result->id."' AND role_id = '7') ")->getRow();
			        if (!empty($isAdmin)) {
			            $isAdmin = true;
			        } else {
			            $isAdmin = false;
			        }
			        
			        if (!empty($ciInfo->id)) {
				    $user_data = array(
			            'userid'        => $result->id,
						'user_id'       => $result->id,
						'staff_id'      => $result->employee_id,
			            'username'      => $result->email,
			            'first_name'    => $result->name,
			            'last_name'     => $result->surname,
			            'mobile'        => $result->contact_no,
			            'email'         => $result->email,
			            'class_id'      => $ciInfo->class_id,
			            'section_id'    => $ciInfo->section_id,
			            'isLoggedIn'    => true,
			            'isSectionIn'   => true,
			            'isLibrn'       => $isLibrn,
			            'isRcptn'       => $isRcptn,
			            'isTechr'       => $isTechr,
			            'isClInc'       => $isClInc,
			            'isCoord'       => $isCord,
			            'isAdmin'       => $isAdmin,
			            'sessionId'     => $stgInfo->session_id,
		            );
		            
		            $this->session->set($user_data);
		            $this->session->setFlashdata('success', 'Login Successfull!');
		            return redirect()->route('admin/dashboard');
			        } elseif (!empty($aciInfo->at_id)) {
				    $user_data = array(
			            'userid'        => $result->id,
						'user_id'       => $result->id,
						'staff_id'      => $result->employee_id,
			            'username'      => $result->email,
			            'first_name'    => $result->name,
			            'last_name'     => $result->surname,
			            'mobile'        => $result->contact_no,
			            'email'         => $result->email,
			            'class_id'      => $aciInfo->class_id,
			            'section_id'    => $aciInfo->section_id,
			            'isLoggedIn'    => true,
			            'isSectionIn'   => true,
			            'isLibrn'       => $isLibrn,
			            'isRcptn'       => $isRcptn,
			            'isTechr'       => $isTechr,
			            'isClInc'       => $isClInc,
			            'isCoord'       => $isCord,
			            'isAdmin'       => $isAdmin,
			            'sessionId'     => $stgInfo->session_id,
		            );
		            
		            $this->session->set($user_data);
		            $this->session->setFlashdata('success', 'Login Successfull!');
		            return redirect()->route('admin/dashboard');
			        } else {
			        $user_data = array(
			            'userid'        => $result->id,
						'user_id'       => $result->id,
						'staff_id'      => $result->employee_id,
			            'username'      => $result->email,
			            'first_name'    => $result->name,
			            'last_name'     => $result->surname,
			            'mobile'        => $result->contact_no,
			            'email'         => $result->email,
			            'class_id'      => '',
			            'section_id'    => '',
			            'isLoggedIn'    => true,
			            'isSectionIn'   => false,
			            'isLibrn'       => $isLibrn,
			            'isRcptn'       => $isRcptn,
			            'isTechr'       => $isTechr,
			            'isClInc'       => $isClInc,
			            'isCoord'       => $isCord,
			            'isAdmin'       => $isAdmin,
			            'sessionId'     => $stgInfo->session_id,
		            );
		            if ($diInfo->designation == 'Counsellor' || $diInfo->designation == 'Lead Manager') {
		                $user_data['isLeadHandler'] = true;
		            }
		            
		            $this->session->set($user_data);
		            $this->session->setFlashdata('success', 'Login Successfull!');
		            
		            if ($diInfo->designation == 'Counsellor' || $diInfo->designation == 'Lead Manager') {
		                return redirect()->route('admin/staff/leads');
		            } else {
		                return redirect()->route('admin/dashboard');
		            }
		            
			        }
			    } else {
					$this->session->setFlashdata('error', 'User is Inactive!');
				}
		    } else {
		        $this->session->setFlashdata('error', 'Invalid Username or Password!');
		    }
		}
		
		$data['main_content']	= 'admin/login';
		echo view('admin/include/template_login', $data);
    }
    
    public function logout() {
        $cookie_name = "userid";
        $cookie_value = null;
        setcookie($cookie_name, $cookie_value, 0, '/');
        
        session()->destroy();
        return redirect()->route('/');
    }
}
