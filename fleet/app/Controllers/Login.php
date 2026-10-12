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
            return redirect()->route('admin/dashboard');    
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
		        if($result->is_active == 1) {
			        $db = db_connect();
			        $diInfo = $db->query("SELECT * FROM staff_designation WHERE id = '".$result->designation."' ")->getRow();
			        //if ($diInfo->designation == 'driver' || $diInfo->designation == 'supervisor') {
			        $viInfo = $db->query("SELECT * FROM vehicles WHERE driver_contact = '".$result->contact_no."' ")->getRow();
				    $user_data = array(
				        'userid'         => $result->id,
						'user_id'        => $result->id,
						'staff_id'       => $result->employee_id,
			            'username'       => $result->email,
			            'first_name'     => $result->name,
			            'last_name'      => $result->surname,
			            'mobile'         => $result->contact_no,
			            'email'          => $result->email,
			            'isLoggedIn'     => true,
			        );
			        
			        if (!empty($viInfo)) {
			            $user_data['vehicle_id']     = $viInfo->id;
			            $user_data['vehicle_no']     = $viInfo->vehicle_no;
						$user_data['driver_number']  = $viInfo->driver_contact;
						$user_data['driver_name']    = $viInfo->driver_name;
						$user_data['vehicle_photo']  = $viInfo->vehicle_photo;
						$user_data['registration_no']= $viInfo->registration_number;
						$user_data['max_seating']    = $viInfo->max_seating_capacity;
			        }
			        
			         if ($diInfo->designation == 'supervisor') {
			             $user_data['isSuperVisor']     = true;
			         }
			        
		            $this->session->set($user_data);
		            $this->session->setFlashdata('success', 'Login Successfull!');
		            return redirect()->route('admin/dashboard');
		            //} else {
		                //return redirect()->route('admin/dashboard');
		            //}
		        }
			   
		    } else {
		        $this->session->setFlashdata('error', 'Invalid Username or Password!');
		    }
		}
		
		$data['main_content']	= 'admin/login';
		echo view('admin/include/template_login', $data);
    }
    
    public function logout() {
        $this->session->destroy();
        return redirect()->route('/');
    }
}
