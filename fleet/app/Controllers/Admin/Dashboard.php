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
        $uInfo                  = user_info(session('userid')); 
        
        $vehicle_id      = session('vehicle_id');
        $vehicle_no      = session('vehicle_no');
        $driver_number   = session('driver_number');
        $driver_name     = session('driver_name');
        $vehicle_photo   = session('vehicle_photo');
        $registration_no = session('registration_no');
        $max_seating     = session('max_seating');
        
        
        $session_id = site_info()['active_session'];
        
        $data['all_routes_info']      = $this->StaffModel->all_vehicle_route_info($vehicle_id);
        
        if (session('isSuperVisor') == true) {
            $data['all_vehicles_info']      = $this->StaffModel->all_vehicles_info();
        } else {
            $data['all_vehicles_a']         = $this->StaffModel->all_drivers_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_b']         = $this->StaffModel->all_drivers_swapped_vehicles_info($uInfo->contact_no);
            $data['all_vehicles_info']      = array_merge($data['all_vehicles_a'],$data['all_vehicles_b']);
            
        }     
        
        
		$data['main_content']	= 'admin/dashboard';
		echo view('admin/include/template_main', $data);
    }
    
    public function updateDriverVehicle() {
        $v_id       = $this->request->getPost('v_id');
        
		$viInfo     = $this->db->query("SELECT * FROM vehicles WHERE id = '".$v_id."' ")->getRow();
		
		$user_data['vehicle_id']     = $viInfo->id;
		$user_data['vehicle_no']     = $viInfo->vehicle_no;
		$user_data['driver_number']  = $viInfo->driver_contact;
		$user_data['driver_name']    = $viInfo->driver_name;
		$user_data['vehicle_photo']  = $viInfo->vehicle_photo;
		$user_data['registration_no']= $viInfo->registration_number;
		$user_data['max_seating']    = $viInfo->max_seating_capacity;
		
        $this->session->set($user_data);
        
        $data['status']     = 'success';
        $data['message']    = 'Successfully saved!';
        echo json_encode($data);
    }
}
