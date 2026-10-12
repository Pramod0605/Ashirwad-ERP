<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Admin\LoginModel;

class Home extends BaseController
{
    public function __construct() {
    }
    public function index() {
        $data                   = [];
		$data['title'] 		    = 'HOME';
		echo view('welcome', $data);
    }
}
