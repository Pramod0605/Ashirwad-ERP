<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Whatsappapi
{

    private $_CI;
    private $sch_setting;

    public function __construct()
    {
        $this->_CI = &get_instance();
        $this->_CI->load->model('setting_model');
        $this->_CI->load->model('student_model');
        $this->_CI->load->model('teacher_model');
        $this->_CI->load->model('studentfeemaster_model');
        $this->_CI->load->model('librarian_model');
        $this->_CI->load->model('accountant_model');
        $this->_CI->load->model('smsconfig_model');
        $this->sch_setting = $this->_CI->setting_model->get(); 

    }

    public function sendSMS($send_to, $detail, $template_id, $template = '')
    {
        
        $wapi = $this->_CI->db->query("SELECT * FROM `sms_config` WHERE type = 'whatsapp'  ")->row();
        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();

        if ($template != "") {
            //$msg = $this->getContent($detail, $template, $sms_detail->type);
        } else {
            $msg = $detail;
        }
        
        $msg = $detail;
        
        $curl = curl_init();
        $postdata = array(
            "appkey"    => $wapi->api_id,
            "authkey"   => $wapi->authkey,
            "to"        => $send_to,
            "message"   => '919354518410',
            'sandbox' => 'false'
        );

        curl_setopt_array($curl, array(
        CURLOPT_URL => $wapi->url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>json_encode($postdata),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
        ),
        ));
        return true;
    }


}
