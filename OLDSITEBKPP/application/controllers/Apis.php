<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Apis extends REST_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('api_model');
        $this->load->model('geofence_model');
        //$this->load->library('REST_Controller');
        //$this->load->library('Format');

    }
    public function index_get() {
         $write_content = var_export($_GET, true);
            file_put_contents("myloggets.php", $write_content);
    }

    public function index_post()   //Get GPS feed in device
    { 
       if(isset($_GET)) {
           $id = isset($_GET['id']) ? $_GET['id'] : ''; 
           $checklogin = $this->api_model->staffgps_auth($id);   
           if($checklogin)
        { 
            echo $s_id = $checklogin['id'];
            $lat = isset($_GET["lat"]) ? $_GET["lat"] : NULL;
            $lon = isset($_GET["lon"]) ? $_GET["lon"] : NULL;
            $timestamp = isset($_GET["timestamp"]) ? $_GET["timestamp"] : NULL;
            $altitude = isset($_GET["altitude"]) ? $_GET["altitude"] : NULL;
            $speed = isset($_GET["speed"]) ? $_GET["speed"] : NULL;
            $bearing = isset($_GET["bearing"]) ? $_GET["bearing"] : NULL;
            $accuracy = isset($_GET["accuracy"]) ? $_GET["accuracy"] : NULL;
            $comment = isset($_GET["comment"]) ? $_GET["comment"] : NULL;
            $postarray = array('staff_id'=>$s_id,'latitude'=>$lat,'longitude'=>$lon,'time'=>date('Y-m-d h:i:s'),'altitude'=>$altitude,'speed'=>$speed,'bearing'=>$bearing,'accuracy'=>$accuracy,'comment'=>$comment);
            $this->api_model->add_postion($postarray);
            
            $response = array('error'=>false,'message'=>['staff_id' => $s_id]);
            $this->set_response($response);
           } 
       } else {
           $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; 
           $checklogin = $this->api_model->staffgps_auth($id);   
           if($checklogin) 
           { 
            echo $s_id = $checklogin['id'];
            $lat = isset($_REQUEST["lat"]) ? $_REQUEST["lat"] : NULL;
            $lon = isset($_REQUEST["lon"]) ? $_REQUEST["lon"] : NULL;
            $timestamp = isset($_REQUEST["timestamp"]) ? $_REQUEST["timestamp"] : NULL;
            $altitude = isset($_REQUEST["altitude"]) ? $_REQUEST["altitude"] : NULL;
            $speed = isset($_REQUEST["speed"]) ? $_REQUEST["speed"] : NULL;
            $bearing = isset($_REQUEST["bearing"]) ? $_REQUEST["bearing"] : NULL;
            $accuracy = isset($_REQUEST["accuracy"]) ? $_REQUEST["accuracy"] : NULL;
            $comment = isset($_REQUEST["comment"]) ? $_REQUEST["comment"] : NULL;
            $postarray = array('staff_id'=>$s_id,'latitude'=>$lat,'longitude'=>$lon,'time'=>date('Y-m-d h:i:s'),'altitude'=>$altitude,'speed'=>$speed,'bearing'=>$bearing,'accuracy'=>$accuracy,'comment'=>$comment);
            $this->api_model->add_postion($postarray);
            $response = array('error'=>false,'message'=>['staff_id' => $s_id]);
            $this->set_response($response);
           } 
       }
    }
    public function positions_post()     //Postion feed to front end   
    {
        $this->db->select("*");
        $this->db->from('positions');
        $this->db->where('staff_id',$this->post('s_id'));
        $this->db->where('date(time) >=', date("Y-m-d", strtotime(str_replace('/', '-', $this->post('fromdate')))));
        $this->db->where('date(time) <=', date("Y-m-d", strtotime(str_replace('/', '-', $this->post('todate')))));
        $query = $this->db->get();
        $data = $query->result_array();
        $distancefrom   = reset($data);
        $distanceto     = end($data);
        $totaldist      = $this->totaldistance($distancefrom,$distanceto);
        $returndata     = array('status'=>1,'data'=>$data,'totaldist'=>$totaldist,'message'=>'data');
        $this->set_response($returndata);
    }

    public function totaldistance($distancefrom,$distanceto,$earthRadius = 6371000)
    {
        $latFrom = deg2rad($distancefrom['latitude']);
        $lonFrom = deg2rad($distancefrom['longitude']);
        $latTo = deg2rad($distanceto['latitude']);
        $lonTo = deg2rad($distanceto['longitude']);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }
    public function currentpositions_get()     
    { 
        $data = array();
        $postions = array();
        $this->db->select("p.*,s.employee_id,s.name,s.surname");
        $this->db->from('positions p');
        $this->db->join('staff s', 's.id = p.staff_id');

        if(isset($_GET['v_id'])) { $this->db->where('s.id',$_GET['s_id']);  }

        $this->db->where('`id` IN (SELECT MAX(id) FROM positions GROUP BY `v_id`)', NULL, FALSE);
        $query = $this->db->get();
        $data = $query->result_array();
        if(count($data)>=1) {
            $resp = array('status'=>1,'data'=>$data);
        } else {
            $resp = array('status'=>0,'message'=>'No live GPS feed found');
        }
        $this->set_response($resp);
    }
}
