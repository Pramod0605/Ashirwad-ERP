<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\Admin\StaffModel;

class Staff extends AdminController
{
    public function __construct() {
        $this->StaffModel = new StaffModel();
    }
    
    public function students() {
        $data                   = [];
        
        $vehicle_id                 = session('vehicle_id');
        $data['all_routes_info']    = $this->StaffModel->all_vehicle_route_info($vehicle_id);
        $data['StaffModel']         = new StaffModel();
        $data['title'] 		        = 'Students';

		$data['main_content']	= 'admin/students';
		echo view('admin/include/template_main', $data);
    }
    
    public function student_attendance() {
        $data                   = [];
        
        $vehicle_id      = session('vehicle_id');
        $data['all_routes_info']    = $this->StaffModel->all_vehicle_route_info($vehicle_id);
        $data['StaffModel']         = new StaffModel();
        $data['title'] 		    = 'Attendance';

		$data['main_content']	= 'admin/student_attendance';
		echo view('admin/include/template_main', $data);
    }
    
    function save_student_attendance() {
        if ($this->request->is('post')) {
		    
            $canSave    = TRUE;
            $date       = date("Y-m-d");
                
            $students = $this->request->getPost('student_id');
            $route_id = $this->request->getPost('route_id');
            foreach ($students as $key => $student) {
                $result = $this->db->query("SELECT * FROM student_attendences_transport WHERE date  = '".$date."' AND student_id = '".$student."' ")->getRow();
                if ($result !== null) {
                    if ($result->id  != NULL) {
                        $canSave = FALSE;
                    }
                }
            $afterRoutes = $this->StaffModel->all_vehicle_route_info_after(session('vehicle_id'), $route_id[$key]);    
            if ($canSave == TRUE) {
                $varName = 'status'.$student;
                $attendance = $this->request->getPost('status'.$student);
                $formData = array(
				    'student_id'            => $student,
				    'vehicle_id'            => session('vehicle_id'),
				    'date'                  => $date,
				    'attendence_type_id'    => $attendance,
				);
				$builder = $this->db->table('student_attendences_transport');
                $builder->insert($formData);
                
                print_r($formData);
                echo '<br>';
            }
            foreach ($afterRoutes as $route) {
            $all_students = $this->StaffModel->all_student_info_route($route->id, site_info()['active_session']);
                foreach ($all_students as $stu) {
                    
                    $curl = curl_init();
                    $postdata = array(
                        "key"    => $stu->app_key,
                        "sub"    => 'Route Alert',
                        "msg"    => 'Vehicle is arriving soon, be on stoppage.',
                    );
        
                    curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://one2.in/p99/api/pushnotification',
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
                }
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
	
	public function student_attendance_report() {
        $data                   = [];
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Attendance';
        $data['date']           = '';
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        if ($this->request->is('post')) {
            $data['date']              = $this->request->getPost('date');
            $data['flag']              = '1';
            $data['vehicle_id']        = $this->request->getPost('vehicle_id');
            $data['StaffModel']        = new StaffModel();
            $data['attendance_info']   = $this->StaffModel->all_student_attendance_info($data['vehicle_id'], $data['date']);
        }

		$data['main_content']	= 'admin/student_attendance_report';
		echo view('admin/include/template_main', $data);
    }
	
	public function routes($id = null) {
        $data                   = [];
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        
        if ($id != null) {
            $data['vid']                = $id;
            $data['viInfo']             = $this->db->query("SELECT * FROM vehicles WHERE id = '".$id."' ")->getRow();
            $data['StaffModel']         = new StaffModel();
            $data['all_routes_info']    = $this->StaffModel->all_vehicle_route_info($id);
        }
        
        $data['StaffModel']         = new StaffModel();
        $data['title'] 		        = 'Routes';

		$data['main_content']	= 'admin/route';
		echo view('admin/include/template_main', $data);
    }
    
    public function ticket() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Ticket';

		$data['main_content']	= 'admin/ticket';
		echo view('admin/include/template_main', $data);
    }
    
    function save_ticekt() {
        if ($this->request->is('post')) {
		  
            $vehicle_id             = $this->request->getPost('vehicle_id');
            $ticket_type            = $this->request->getPost('ticket_type');
            $ticket_description     = $this->request->getPost('ticket_description');
            $viInfo                 = $this->db->query("SELECT * FROM vehicles WHERE id = '".$vehicle_id."' ")->getRow();
            $diInfo                 = $this->db->query("SELECT * FROM staff WHERE contact_no = '".$viInfo->driver_contact."' ")->getRow();
            $uInfo                  = user_info(session('userid')); 
            $formData = array(
				'vehicle_id'            => $vehicle_id,
				'driver_id'             => $diInfo->id,
				'ticket_type'           => $ticket_type,
				'ticket_description'    => $ticket_description,
				'ticket_date'           => date("Y-m-d"),
				'ticket_by'             => session('userid'),
				'ticket_status'         => 'Open',
			);
			if (!empty($vehicle_id) && !empty($ticket_type) && !empty($ticket_description)) {
			    $builder = $this->db->table('cy_vehicle_ticket');
                $builder->insert($formData);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Data Missing!';
                echo json_encode($data);
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
	
	public function ticket_info($id) {
        $ticketInfo             = $this->db->query("SELECT * FROM cy_vehicle_ticket WHERE vt_id = '".$id."' ")->getRow();
        $remarks                = json_decode($ticketInfo->ticket_updates);
        // $new_array              = array();
        //     foreach ($remarks as $key => $remark) {
        //             $new_array[]= $remark;
        //             $allUpdat   = implode(",", $new_array) ;
        //     }
        $data['tInfo']          = $ticketInfo;
        //$data['uInfo']          = $allUpdat;
        echo json_encode($data);
    }
	
	public function open_tickets() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_ticekts_info']      = $this->StaffModel->all_open_vehicle_ticket_info(session('userid'));
        } else {
            $data['all_ticekts_info']      = $this->StaffModel->drivers_open_vehicle_ticket_info(session('userid'));
            
        }
        $data['title'] 		    = 'Ticket';

		$data['main_content']	= 'admin/open_tickets';
		echo view('admin/include/template_main', $data);
    }
    
    function update_ticket() {
        if ($this->request->is('post')) {
		  
            $ticket_id              = $this->request->getPost('ticket_id');
            $ticket_action          = $this->request->getPost('ticket_action');
            $ticket_update          = $this->request->getPost('ticket_update');
            
            $ticketInfo             = $this->db->query("SELECT * FROM cy_vehicle_ticket WHERE vt_id = '".$ticket_id."' ")->getRow();
            
            $new_array              = array();
            if (!empty($ticketInfo->ticket_updates)) {
            $remarks                = json_decode($ticketInfo->ticket_updates);
            foreach ($remarks as $key => $remark) {
                    $new_array[]    =  $remark;
            }
            }
            $new_array[]['Update']     = $ticket_update;
            
            $process_remark = json_encode($new_array);
            
            if (empty($ticket_action)) {
                $ticket_action = 'Open';
            }
            
            $formData = array(
				'ticket_status'         => $ticket_action,
				'ticket_updates'        => $process_remark,
			);
			$builder = $this->db->table('cy_vehicle_ticket');
            $builder->where('cy_vehicle_ticket.vt_id', $ticket_id);
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
    
    public function closed_tickets() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_ticekts_info']      = $this->StaffModel->all_closed_vehicle_ticket_info(session('userid'));
        } else {
            $data['all_ticekts_info']      = $this->StaffModel->drivers_closed_vehicle_ticket_info(session('userid'));
            
        }
        $data['title'] 		    = 'Ticket';

		$data['main_content']	= 'admin/open_tickets';
		echo view('admin/include/template_main', $data);
    }
    
    
    public function refill_fuel() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Fuel';

		$data['main_content']	= 'admin/refill_fuel';
		echo view('admin/include/template_main', $data);
    }
    
    function save_refilled_fuel() {
        if ($this->request->is('post')) {
		  
            $vehicle_id             = $this->request->getPost('vehicle_id');
            $fuel_price             = $this->request->getPost('fuel_price');
            $fuel_quantity          = $this->request->getPost('fuel_quantity');
            $total_cost             = $fuel_price * $fuel_quantity;
            $date                   = date("Y-m-d");
            $viInfo                 = $this->db->query("SELECT * FROM vehicles WHERE id = '".$vehicle_id."' ")->getRow();
            $diInfo                 = $this->db->query("SELECT * FROM staff WHERE contact_no = '".$viInfo->driver_contact."' ")->getRow();
            $uInfo                  = user_info(session('userid')); 
            $formData = array(
				'vehicle_id'            => $vehicle_id,
				'fuel_price'            => $fuel_price,
				'fuel_quantity'         => $fuel_quantity,
				'total_cost'            => $total_cost,
				'date'                  => date("Y-m-d"),
				'entry_by'              => session('userid'),
			);
			if (!empty($vehicle_id) && !empty($fuel_price) && !empty($fuel_quantity)) {
			    $builder = $this->db->table('cyc_fuel_refill');
                $builder->insert($formData);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Data Missing!';
                echo json_encode($data);
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
	
	public function fuel_report() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Fuel';
        $data['fdate']          = '';
        $data['tdate']          = '';
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        if ($this->request->is('post')) {
            $data['fdate']             = $this->request->getPost('fdate');
            $data['tdate']             = $this->request->getPost('tdate');
            $data['vehicle_id']        = $this->request->getPost('vehicle_id');
            $data['flag']              = '1';
            $data['StaffModel']        = new StaffModel();
            $earlier                   = new \DateTime($data['fdate']);
            $later                     = new \DateTime($data['tdate']);
            $data['days']              = $later->diff($earlier)->format("%a");
            
            if (!empty($data['vehicle_id'])) {
                $data['vehicle_fuels'] = $this->StaffModel->vehicled_refilled_fuel_info($data['vehicle_id'], $data['fdate'], $data['tdate']);
            }
        }

		$data['main_content']	= 'admin/fuel_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function services() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['all_vendors_info']           = $this->StaffModel->all_vendors_info();
        $data['title'] 		    = 'Services';

		$data['main_content']	= 'admin/services';
		echo view('admin/include/template_main', $data);
    }
    
    function save_services() {
        if ($this->request->is('post')) {
		  
            $vehicle_id             = $this->request->getPost('vehicle_id');
            $vendor                 = $this->request->getPost('vendor');
            
            $job_type               = $this->request->getPost('job_type');
            $job_amount             = $this->request->getPost('job_amount');
            $remark                 = $this->request->getPost('remark');
            
            $total_cost             = 0;
            $date                   = date("Y-m-d");
            $viInfo                 = $this->db->query("SELECT * FROM vehicles WHERE id = '".$vehicle_id."' ")->getRow();
            $diInfo                 = $this->db->query("SELECT * FROM staff WHERE contact_no = '".$viInfo->driver_contact."' ")->getRow();
            $uInfo                  = user_info(session('userid'));
            
            $new_array              = array();
            foreach ($job_type as $key => $jobType) {
                    $new_array[] = array(
                            'JobType'   => $jobType,
                            'JobAmount' =>$job_amount[$key],
                        );
                    $total_cost                 += $job_amount[$key];
            }
            
            
            $formData = array(
				'vehicle_id'            => $vehicle_id,
				'driver_id'             => $diInfo->id,
				'vendor'                => $vendor,
				'service_details'       => json_encode($new_array),
				'total_cost'            => $total_cost,
				'date'                  => date("Y-m-d"),
				'entry_by'              => session('userid'),
			);
			if (!empty($vehicle_id) && !empty($vendor) && !empty($total_cost)) {
			    $builder = $this->db->table('cyc_vehicle_services');
                $builder->insert($formData);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Data Missing!';
                echo json_encode($data);
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
	
	public function services_report() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Fuel';
        $data['fdate']          = '';
        $data['tdate']          = '';
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        if ($this->request->is('post')) {
            $data['fdate']             = $this->request->getPost('fdate');
            $data['tdate']             = $this->request->getPost('tdate');
            $data['flag']              = '1';
            $data['vehicle_id']        = $this->request->getPost('vehicle_id');
            $data['StaffModel']        = new StaffModel();
            $earlier                   = new \DateTime($data['fdate']);
            $later                     = new \DateTime($data['tdate']);
            $data['days']              = $later->diff($earlier)->format("%a");
            
            if (!empty($data['vehicle_id'])) {
                $data['vehicle_services'] = $this->StaffModel->all_vehicle_services_info($data['vehicle_id'], $data['fdate'], $data['tdate']);
            }
        }

		$data['main_content']	= 'admin/services_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function swap_driver() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		                = 'Swap';
        $data['all_drivers_info']           = $this->StaffModel->all_drivers_info();

		$data['main_content']	= 'admin/swap_driver';
		echo view('admin/include/template_main', $data);
    }
    
    function save_swapping() {
        if ($this->request->is('post')) {
		  
            $vehicle_id             = $this->request->getPost('vehicle_id');
            $swap_with              = $this->request->getPost('swap_with');
            $swap_till              = $this->request->getPost('swap_till');
            
            $date                   = date("Y-m-d");
            $viInfo                 = $this->db->query("SELECT * FROM vehicles WHERE id = '".$vehicle_id."' ")->getRow();
            $diInfo                 = $this->db->query("SELECT * FROM staff WHERE contact_no = '".$viInfo->driver_contact."' ")->getRow();
            $sdiInfo                = $this->db->query("SELECT * FROM vehicles WHERE driver_contact = '".$swap_with."' ")->getRow();
            $uInfo                  = user_info(session('userid'));
            
            if (!empty($viInfo->swap_history)) {
            $histories              = json_decode($viInfo->swap_history);
            $new_array              = array();
            foreach ($histories as $key => $history) {
                $new_array[] = array(
                    'SwapWith' => $history->SwapWith,
                    'DriverNm' => $history->DriverNm,
                    'DriverMb' => $history->DriverMb,
                    'SwapTill' => $history->SwapTill,
                );
            }
            }
            $new_array[] = array(
                'SwapWith' => $swap_with,
                'DriverNm' => $sdiInfo->driver_name,
                'DriverMb' => $sdiInfo->driver_contact,
                'SwapTill' => $swap_till,
            );
            $swap_history = json_encode($new_array);
            
            
            $formData = array(
				'swap_with'     => $swap_with,
				'swap_till'     => $swap_till,
				'swap_status'   => 1,
				'swap_history'  => $swap_history,
			);
			if (!empty($vehicle_id) && !empty($swap_with) && !empty($swap_till) && $swap_with != $viInfo->driver_contact) {
			    $builder = $this->db->table('vehicles');
                $builder->where('vehicles.id', $vehicle_id);
                $builder->update($formData);
            } else {
                $data['status']     = 'error';
                $data['message']    = 'Data Missing!';
                echo json_encode($data);
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
	
	public function swapping_report() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Swapping';
        $data['fdate']          = '';
        $data['tdate']          = '';
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        if ($this->request->is('post')) {
            $data['fdate']             = $this->request->getPost('fdate');
            $data['tdate']             = $this->request->getPost('tdate');
            $data['flag']              = '1';
            $data['vehicle_id']        = $this->request->getPost('vehicle_id');
            $data['StaffModel']        = new StaffModel();
            $earlier                   = new \DateTime($data['fdate']);
            $later                     = new \DateTime($data['tdate']);
            $data['days']              = $later->diff($earlier)->format("%a");
            $data['all_vehicle_swapping_info'] = $this->StaffModel->all_vehicle_swapping_info($data['fdate'], $data['tdate'], $data['vehicle_id']);
        }

		$data['main_content']	= 'admin/swapping_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function vehicle_parts($id = null) {
        $data                   = [];
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        
        if ($id != null) {
            $data['vid']                = $id;
            $data['viInfo']             = $this->db->query("SELECT * FROM vehicles WHERE id = '".$id."' ")->getRow();
            $data['StaffModel']         = new StaffModel();
            $data['all_routes_info']    = $this->StaffModel->all_vehicle_route_info($id);
            $data['vPiInfo']            = $this->db->query("SELECT * FROM cyc_vehicle_parts_info WHERE vehicle_id = '".$id."' ")->getRow();
        }
        
        $data['StaffModel']         = new StaffModel();
        $data['title'] 		        = 'PARTS';

		$data['main_content']	= 'admin/vehicle_parts';
		echo view('admin/include/template_main', $data);
    }
    
    function save_vehicle_parts() {
        if ($this->request->is('post')) {
		  
            $vehicle_id              = $this->request->getPost('vehicle_id');
            $vPiInfo                 = $this->db->query("SELECT vp_id as vipid FROM cyc_vehicle_parts_info WHERE vehicle_id = '".$vehicle_id."' ")->getRow();
            
            $formData = array(
                'vehicle_id'        => $vehicle_id,
                'battery_number'    => $this->request->getPost('battery_number'),
                'battery_amp'       => $this->request->getPost('battery_amp'),
                'battery_warranty'  => $this->request->getPost('battery_warranty'),
                'tyre_number'       => $this->request->getPost('tyre_number'),
                'tyre_size'         => $this->request->getPost('tyre_size'),
                'tool_box'          => $this->request->getPost('tool_box'),
                'cctv'              => $this->request->getPost('cctv'),
            );
            if (empty($vPiInfo->vipid)) {
                $builder = $this->db->table('cyc_vehicle_parts_info');
                $builder->insert($formData);    
            } else {
                $builder = $this->db->table('cyc_vehicle_parts_info');
                $builder->where('cyc_vehicle_parts_info.vehicle_id', $vehicle_id);
                $builder->update($formData);
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
	
	public function vehicle_rto($id = null) {
        $data                   = [];
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        
        if ($id != null) {
            $data['vid']                = $id;
            $data['viInfo']             = $this->db->query("SELECT * FROM vehicles WHERE id = '".$id."' ")->getRow();
            $data['StaffModel']         = new StaffModel();
            $data['all_routes_info']    = $this->StaffModel->all_vehicle_route_info($id);
            $data['vRiInfo']            = $this->db->query("SELECT * FROM cyc_vehicle_rto_info WHERE vehicle_id = '".$id."' ")->getRow();
        }
        
        $data['StaffModel']         = new StaffModel();
        $data['title'] 		        = 'RTO';

		$data['main_content']	= 'admin/vehicle_rto';
		echo view('admin/include/template_main', $data);
    }
    
    function save_vehicle_rto() {
        if ($this->request->is('post')) {
		  
            $vehicle_id              = $this->request->getPost('vehicle_id');
            $vPiInfo                 = $this->db->query("SELECT vr_id as virid FROM cyc_vehicle_rto_info WHERE vehicle_id = '".$vehicle_id."' ")->getRow();
            
            $formData = array(
                'vehicle_id'        => $vehicle_id,
                'permit_number'     => $this->request->getPost('permit_number'),
                'permit_upto'       => $this->request->getPost('permit_upto'),
                'fitness_upto'      => $this->request->getPost('fitness_upto'),
                'road_tax_upto'     => $this->request->getPost('road_tax_upto'),
                'insurance_company' => $this->request->getPost('insurance_company'),
                'insurance_upto'    => $this->request->getPost('insurance_upto'),
            );
            if (empty($vPiInfo->virid)) {
                $builder = $this->db->table('cyc_vehicle_rto_info');
                $builder->insert($formData);    
            } else {
                $builder = $this->db->table('cyc_vehicle_rto_info');
                $builder->where('cyc_vehicle_rto_info.vehicle_id', $vehicle_id);
                $builder->update($formData);
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
    
    public function tracking() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Tracking';

		$data['main_content']	= 'admin/tracking';
		echo view('admin/include/template_main', $data);
    }
    
    public function live_tracking($id = null) {
        $data                   = [];
        $data['title'] 		    = 'Track';
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Tracking';
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        $data['latitude']       = '';
        $data['longitude']      = '';
        if (!empty($id)) {
            $data['vehicle_id']        = $id;
            $data['flag']              = '1';
            $data['StaffModel']        = new StaffModel();

            if (!empty($data['vehicle_id'])) {
                $postion                    = $this->db->query("SELECT * FROM positions WHERE v_id = '".$data['vehicle_id']."' ORDER BY id DESC LIMIT 1 ")->getRow();
                if (!empty($postion->id)) {
                    $data['latitude']           = $postion->latitude;
                    $data['longitude']          = $postion->longitude;
                }
            }
        }
        
		$data['main_content']	= 'admin/live_trackings';
		echo view('admin/include/template_main', $data);
    }
    
    public function trip_report() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Trip Report';
        $data['fdate']          = date("Y-m-d");
        $data['tdate']          = date("Y-m-d");;
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        if ($this->request->is('post')) {
            $data['fdate']             = $this->request->getPost('fromdate');
            $data['tdate']             = $this->request->getPost('todate');
            $data['vehicle_id']        = $this->request->getPost('t_vechicle');
            $data['flag']              = '1';
            $data['title'] 		    = 'Trip Report';
            $data['StaffModel']        = new StaffModel();
            $earlier                   = new \DateTime($data['fdate']);
            $later                     = new \DateTime($data['tdate']);
            $data['days']              = $later->diff($earlier)->format("%a");
            
            if (!empty($data['vehicle_id'])) {
                
                $datatrp = $this->db->query("SELECT * FROM positions WHERE v_id = '".$data['vehicle_id']."' AND date(time) >= '".$data['fdate']."' AND date(time) <= '".$data['tdate']."' ")->getResultArray();
                $distancefrom = reset($datatrp);
                $distanceto = end($datatrp);
                $totaldist = $this->totaldistance($distancefrom,$distanceto);
                $returndata = array('status'=>1,'data'=>$datatrp,'totaldist'=>$totaldist,'message'=>'data');
        
            }
        }

		$data['main_content']	= 'admin/trip_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function positions() {
        $fdate             = $this->request->getPost('fromdate');
        $tdate             = $this->request->getPost('todate');
        $vehicle_id        = $this->request->getPost('t_vechicle');
        
        $data = $this->db->query("SELECT * FROM positions WHERE v_id = '".$vehicle_id."' AND date(time) >= '".$fdate."' AND date(time) <= '".$tdate."' ")->getResultArray();
        $distancefrom = reset($data);
        $distanceto = end($data);
        $totaldist = $this->totaldistance($distancefrom,$distanceto);
        $returndata = array('status'=>1,'data'=>$data,'totaldist'=>$totaldist,'message'=>'data');
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
    
    public function speed_report() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'Speed Report';
        $data['fdate']          = date("Y-m-d");
        $data['tdate']          = date("Y-m-d");
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        if ($this->request->is('post')) {
            $data['fdate']             = $this->request->getPost('fdate');
            $data['tdate']             = $this->request->getPost('tdate');
            $data['vehicle_id']        = $this->request->getPost('vehicle_id');
            $data['flag']              = '1';
            $data['StaffModel']        = new StaffModel();
            $earlier                   = new \DateTime($data['fdate']);
            $later                     = new \DateTime($data['tdate']);
            $data['days']              = $later->diff($earlier)->format("%a");
            
            if (!empty($data['vehicle_id'])) {
                $data['all_vehicle_speed_info'] = $this->StaffModel->all_vehicle_speed_info($data['fdate'], $data['tdate'], $data['vehicle_id']);
            }
        }

		$data['main_content']	= 'admin/speed_report';
		echo view('admin/include/template_main', $data);
    }
    
    public function geofencing() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'GeoFencing';

		$data['main_content']	= 'admin/geofencing';
		echo view('admin/include/template_main', $data);
    }
    
    public function set_geofencing() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'GeoFencing';

		$data['main_content']	= 'admin/set_geofencing';
		echo view('admin/include/template_main', $data);
    }
    
    public function view_geofencing() {
        $data                   = [];
        
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
            $data['all_geofences_info']      = $this->StaffModel->all_geofences_info();
            
        }
        $data['title'] 		    = 'GeoFencing';

		$data['main_content']	= 'admin/view_geofencing';
		echo view('admin/include/template_main', $data);
    }
    
    public function delete_geofencing($id = null) {
        if (!empty($id)) {
            
            $this->db->query("DELETE FROM geofences WHERE geo_id = '".$id."'  ");
            $this->session->setFlashdata('success', 'Record Deleted!');
            return redirect()->route('admin/staff/geofencing'); 
        }
        $this->session->setFlashdata('error', 'Invalid entry!');
        return redirect()->route('admin/staff/geofencing'); 
    }
    
    public function save_geofencing() {
        if ($this->request->is('post')) {
            $geo_name           = $this->request->getPost('geo_name');
            $geo_description    = $this->request->getPost('geo_description');
            $geo_vehicles       = $this->request->getPost('geo_vehicles');
            
            $formData = array(
                'geo_name'          => $geo_name,
                'geo_description'   => $geo_description,
                'geo_area'          => $this->request->getPost('geo_area'),
                'geo_vehicles'      => implode(',', $geo_vehicles),
            );
            $builder = $this->db->table('geofences');
            $builder->insert($formData);
            
            $this->session->setFlashdata('success', 'Record saved!');
            return redirect()->route('admin/staff/geofencing'); 
        }
        $this->session->setFlashdata('error', 'Record not saved!');
        return redirect()->route('admin/staff/geofencing'); 
    }
    
    public function geofencing_report() {
        $data                   = [];
        $uInfo                  = user_info(session('userid')); 
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }
        $data['title'] 		    = 'GeoFencing';
        $data['fdate']          = date("Y-m-d");
        $data['tdate']          = date("Y-m-d");
        $data['vehicle_id']     = '';
        $data['flag']           = '';
        if ($this->request->is('post')) {
            $data['fdate']             = $this->request->getPost('fdate');
            $data['tdate']             = $this->request->getPost('tdate');
            $data['vehicle_id']        = $this->request->getPost('vehicle_id');
            $data['flag']              = '1';
            $data['StaffModel']        = new StaffModel();
            $earlier                   = new \DateTime($data['fdate']);
            $later                     = new \DateTime($data['tdate']);
            $data['days']              = $later->diff($earlier)->format("%a");
            
            if (!empty($data['vehicle_id'])) {
                $data['geofencing_event_info'] = $this->StaffModel->all_vehicle_geofencing_event_info($data['fdate'], $data['tdate'], $data['vehicle_id']);
            }
        }

		$data['main_content']	= 'admin/geofencing_report';
		echo view('admin/include/template_main', $data);
    }
}
