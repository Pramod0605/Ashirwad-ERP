<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }
    
    public function login($dataLogin){
        
        $builder    = $this->db->table('staff');
        $query      = $builder->select('*')
                    ->where('staff.contact_no', $dataLogin['username'])
                    ->get();
        if ($query->getRow() !== null) {
			$result = $query->getRow();
		    $validPassword = password_verify($dataLogin['password'], $result->password);
		    if($validPassword){
		        return $result;
		    } else {
		        return false;
		    }
		} else {
		    return false;
		}
	}
    
    public function login_driver($dataLogin){
        
        $builder    = $this->db->table('vehicles');
        $query      = $builder->select('*')
                    ->where('vehicles.driver_contact', $dataLogin['username'])
                    ->get();
        if ($query->getRow() !== null) {
			$result = $query->getRow();
		    //$validPassword = password_verify($dataLogin['password'], $result->password);
		    //if($validPassword){
		        //return $result;
		    //} else {
		        //return false;
		    //}
		    
		    return $result;
		} else {
		    return false;
		}
	}
    
}