<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entity extends Public_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->model(array("setting_model"));
   }
 
    public function index() {
        $data               = array();
        $data['name']       = 'Entity';
        $_SESSION["entity_hostname"] = null;
        $_SESSION["entity_username"] = null;
        $_SESSION["entity_password"] = null;
        $_SESSION["entity_database"] = null;
        $this->load->view('entity', $data);
    }
    
    public function loadconfiguration() {
        $date        = date("Y-m-d");
        $entity_code = $this->input->post('entity_code', TRUE);
        $entity_info = $this->db->query("SELECT * FROM `cyc_subscribed_users` WHERE entity_slug = '".$entity_code."' ")->row();
        if (empty($entity_info)) {
            $data['error_message'] = 'Invalid entity code';
            //redirect('entity');
        } elseif ($entity_info->entity_status == 0) {
            $data['error_message'] = 'Entity status is inactive';
            //redirect('entity');
        } elseif ($entity_info->plan_valid_to < $date) {
            $data['error_message'] = 'Your subscription has been expired';
            //redirect('entity');
        } else {
            $entity_data = array(
                'entity_hostname' => $entity_info->entity_hostname,
                'entity_username' => $entity_info->entity_username,
                'entity_password' => $entity_info->entity_password,
                'entity_database' => $entity_info->entity_database,
            );
            $this->session->set_userdata($entity_data);
            redirect('site/login');
        }
        $this->load->view('entity', $data);
    }
}
