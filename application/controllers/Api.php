
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Api extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->db->reconnect();
        $this->load->helper("cbse");
        $this->load->config('cbse_config');
        $this->load->library('cbse_mail_sms');
        $this->load->model(array("cbseexam/cbseexam_assessment_model", "cbseexam/cbseexam_exam_model", "cbseexam/cbseexam_grade_model", "cbseexam/cbseexam_term_model", "cbseexam/cbseexam_result_model", "cbseexam/cbseexam_template_model", "cbseexam/cbseexam_student_rank_model", "cbseexam/cbseexam_observation_model", "cbseexam/cbse_observation_term_model", "cbseexam/cbse_observation_term_student_subparameter_model", "cbseexam/cbseexam_observation_parameter_model", "section_model"));

        $this->load->model(array("staff_model", "sharecontent_model"));
        $this->load->model('leads_model');
        $this->load->library('Auth');
        $this->load->library('Enc_lib');
        $this->load->library('customlib');
        $this->load->library('captchalib');
        $this->load->library('mailsmsconf');
        $this->load->library('mailer');
        $this->load->library('media_storage');
        $this->load->config('ci-blog');
        $this->mailer;
        $this->sch_setting          = $this->setting_model->getSetting();
        $this->sch_setting_detail   = $this->setting_model->getSetting();
        
        $this->load->library('gmeet_mail_sms');
        $this->load->library('Google');
        $this->load->model(array('gmeet_model', 'gmeethistory_model', 'gmeetsetting_model'));
        $this->load->config('gmeet-config');
        $this->gmeet_version = $this->config->item('version');
    }
    
    public function show_tables() {
        $tables = $this->db->list_tables();
        foreach ($tables as $table) {
            $rows  = $this->db->count_all($table);
            if ($rows > 0) {
                echo 'TRUNCATE '.$table.'<br>';
            }
        }
    }
    
    public function bimatric_attendance_staff() {
	    
	    $card_id    = $_REQUEST['card_id'];
	    $timestamp  = $_REQUEST['timestamp'];
	    
	   $data = array(
	        "event_date"        => 'staff',
            "event_date"        => date("Y-m-d"),
            "event_time"        => date("H-i-s"),
            "event_card_id"     => $card_id,
            "event_timestamp"   => $timestamp,
        );
        $this->db->insert('cyc_biometric_events', $data);
        
        $empId     = $this->db->query("SELECT id AS eid FROM `staff` WHERE biometric_device_id = '".$card_id."' ")->row();
        
        if (!empty($empId)) {
            $data_a = array(
                "date"                          => date("Y-m-d"),
                "staff"                         => $empId,
                "staff_attendance_type_id "     => 1,
                "biometric_attendence"          => 1,
            );
            $this->db->insert('staff_attendance', $data_a);
        }
        
        $data_return['status']  = 'success';
        $data_return['message']  = 'New Request pulled';
        $this->output->set_output(json_encode($data_return));
            
    }
    
    public function bimatric_attendance_student() {
	    
	    $card_id    = $_REQUEST['card_id'];
	    $timestamp  = $_REQUEST['timestamp'];
	    
	    $data = array(
	        "event_date"        => 'student',
            "event_date"        => date("Y-m-d"),
            "event_time"        => date("H-i-s"),
            "event_card_id"     => $card_id,
            "event_timestamp"   => $timestamp,
        );
        $this->db->insert('cyc_biometric_events', $data);
        
        $data_return['status']  = 'success';
        $data_return['message']  = 'New Request pulled';
        $this->output->set_output(json_encode($data_return));
            
    }
    
    public function qr_mark_attendance() {
	    
	    $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        if ($data !== null) {
	    $eId = $data['id'];
	    $empId     = $this->db->where('id', $eId)->get('staff')->row();
	    if (empty($empId->id)) {
	        $empId     = $this->db->where('employee_id', $eId)->get('staff')->row();
	    }
	    
	    if ($data['belong_to'] == 'student') {
	        $ssId     = $this->db->where('student_id', $data['id'])->get('student_session')->row();
            $data_a = array(
				'student_session_id'    => $ssId->id,
				'date'                  => date("Y-m-d"),
				'attendence_type_id'    => 1,
			);
			$this->db->insert('student_attendences', $data_a);
            
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status'                   => 'success',
                'message'                  => 'Saved Successfully',
            )));
	    }
        
        else {
            $data_a = array(
                "date"                          => date("Y-m-d"),
                "staff_id"                      => $empId->id,
                "staff_attendance_type_id "     => 1,
                "biometric_attendence"          => 1,
            );
            $this->db->insert('staff_attendance', $data_a);
            
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    'status'                   => 'success',
                    'message'                  => 'Saved Successfully',
                )));
        }
        
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(405)
                ->set_output(json_encode(array(
                    'error' => "Entry does not match",
                )));
        }
            
    }
    
    public function mark_attendance() {
	    $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        
         $data_aa = array(
				'raw'    => $jsonData,
			);
			$this->db->insert('student_attendences', $data_aa);
        
        if ($data !== null) {
	    $eId = $data['id'];
	    $empId     = $this->db->where('id', $eId)->get('staff')->row();
	    if (empty($empId->id)) {
	        $empId     = $this->db->where('employee_id', $eId)->get('staff')->row();
	    }
	    
	    if ($data['belong_to'] == 'student') {
	        $ssId     = $this->db->where('student_id', $data['id'])->get('student_session')->row();
            $data_a = array(
				'student_session_id'    => $ssId->id,
				'date'                  => date("Y-m-d"),
				'attendence_type_id'    => 1,
			);
			$this->db->insert('student_attendences', $data_a);
            
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status'                   => 'success',
                'message'                  => 'Saved Successfully',
            )));
	    }
        else {
            $data_a = array(
                "date"                          => date("Y-m-d"),
                "staff_id"                      => $empId->id,
                "staff_attendance_type_id "     => 1,
                "biometric_attendence"          => 1,
            );
            $this->db->insert('staff_attendance', $data_a);
            
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status'                   => 'success',
                'message'                  => 'Saved Successfully',
            )));
        }      
        
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(405)
                ->set_output(json_encode(array(
                    'error' => "Entry does not match",
                )));
        }
            
    }
    
    public function face_authentication() {
	    $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        
	    $id             = $data['id'];
	    $type           = $data['belong_to'];
	    $image          = $data['image'];
	    $faceFeatures   = $data['face_features'];
	    
        
        if (!empty($id) && !empty($type) && !empty($image) && !empty($faceFeatures)) {
            
            $info     = $this->db->query("SELECT fa_id  AS faId FROM `face_authentication` WHERE id = '".$id."' AND belong_to = '".$type."' ")->row();
            
            if (empty($info->faId)) {
                $data_a = array(
                    "id"            => $id,
                    "image"         => $image,
                    "belong_to "    => $type,
                    "face_features" => json_encode($faceFeatures),
                );
                $this->db->insert('face_authentication', $data_a);
                if ($type == 'student') {
                    $this->db->query("UPDATE `students` SET face_auth = '1' WHERE id = '".$id."' ");
                }
                
            } else {
                $data_a = array(
                    "id"            => $id,
                    "image"         => $image,
                    "belong_to "    => $type,
                    "face_features" => json_encode($faceFeatures),
                );
                $this->db->where('id', $id);
                $this->db->where('belong_to', $type);
                $this->db->update('face_authentication', $data_a);
            }
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    'status'                   => 'success',
                    'message'                  => 'Saved Successfully',
                )));
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(405)
                ->set_output(json_encode(array(
                    'error' => "Entry does not match",
                )));
        }
            
    }
    
    public function users_info() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        
	    $stfId         = $data['staff_id'];
	    $clsId         = $data['class_id'];
	    $secId         = $data['section_id'];
	    $sesId         = $data['session_id'];
	    
	    $student_info = $this->setting_model->cs_student_info($clsId, $secId, $sesId);
	    
	    foreach ($student_info as $key => $students) {
	        $student_face = $this->setting_model->face_auth_info($students->student_id, 'student');
	        if (!empty($student_face->face_features)) {
                $student_info[$key]->face_features = json_decode($student_face->face_features);
                $student_info[$key]->image = $student_face->image;
	        }
        }
        
        $staff_face = $this->setting_model->face_auth_info($stfId, 'staff');
        $staff_name = $this->setting_model->staff_info($stfId);
        $staff_face->name = $staff_name->name;
        $staff_face->face_features = json_decode($staff_face->face_features);
        
        $sch_info   = $this->setting_model->getSetting();
        $geoData['lat'] = $sch_info->lat;
        $geoData['lng'] = $sch_info->lng;
        
      
        
        $returnData['stuInfo'] = $student_info;
        $returnData['stfInfo'] = $staff_face;
        $returnData['geoInfo'] = $geoData;
	    
	    return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($returnData));
    }
    
    public function save_user_token() {
	    
	    $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        if ($data !== null) {
	    $eId = $data['userid'];
	    $tId = $data['tokenid'];
	    //$dId = $data['deviceid'];
	    
	    $info     = $this->db->query("UPDATE `staff` SET token_id = '".$tId."' WHERE id = '".$eId."'  ");
            
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    'status'                   => 'success',
                    'message'                  => 'Saved Successfully',
                )));
        
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(405)
                ->set_output(json_encode(array(
                    'error' => "Entry does not match",
                )));
        }
            
    }
    
    public function pushnotification() {
        $this->load->library('pushnotification');
        
        $jsonData                = file_get_contents('php://input');
        $data                    = json_decode($jsonData, true);
	    $key                     = $data['key'];
	    $sub                     = $data['sub'];
	    $msg                     = $data['msg'];
	    
	    $push_array = array(
            'title' => $sub,
            'body'  => $msg,
        );
        $this->pushnotification->send($key, $push_array, "mail_sms");
        
        return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($returnData));
        
        
    }
    
    public function followup_reminder() {
        $now            = time();
        $ten_minutes    = $now + (10 * 60);
        $startTime      = date('H:i:s', $now);
        $endTime        = date('H:i:s', $ten_minutes);
        
        $all_leads      = $this->leads_model->todays_follow_up($startTime, $endTime);
        echo date("H:i:s");
        foreach ($all_leads as $lead) {
            echo 'hi';
            $uinfo  = $this->db->query("SELECT token_id AS tid FROM `staff` WHERE id = '".$lead->followup_by."' ")->row();
            $message = 'You have a new follow-up at : '.$lead->next_followup_time.' With Remark as : '.$lead->followup_remark;
            $returnData = $this->onesignal_push($uinfo->tid, $message);
        }
        $returnData = 'success';
        return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($returnData));
        
        
    }
    
    public function onesignal_push($id, $message) {
        $content_onesignal_app_id = 'a835ed73-8dcf-46de-9e32-9f1f8514ad03';
        $content_onesignal_rest_api_key = 'Y2IyMmUyNzUtN2U5OS00M2JmLThhNjMtNmNmMWVmNmU3ZmZl';
        define("ONESIGNAL_APP_ID", $content_onesignal_app_id);
        define("ONESIGNAL_REST_KEY", $content_onesignal_rest_api_key);
        $content      = array(
            "en" => $message
        );
            
        $fields = array(
            'include_player_ids' => array($id),
			'app_id' => ONESIGNAL_APP_ID,
			'data' => array("foo" => "bar"),
			'headings'=> array("en" => 'MasterJee'),
			'contents' => $content,
		);
			
		$fields = json_encode($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic '.ONESIGNAL_REST_KEY
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);
        return true;
    }
    
    public function save_online_course_thumbnail() {
	    
	    $jsonData   = file_get_contents('php://input');
        $data       = json_decode($jsonData, true);
        $imageUrl   = $data['imageUrl'];
        $courseId   = $data['courseId'];
        
        define('UPLOAD_DIR', 'uploads/course/course_thumbnail/');
	    $img    = $imageUrl;
	    $img    = str_replace('data:image/png;base64,', '', $img);
	    $img    = str_replace(' ', '+', $img);
	    $data   = base64_decode($img);
	    $name   = uniqid() . '.png';
	    $file   = UPLOAD_DIR . $name;
        file_put_contents($file, $data);
	    
	    $info     = $this->db->query("UPDATE `online_courses` SET course_thumbnail = '".$name."' WHERE id = '".$courseId."'  ");
	    
        $response['success']    = 'true';
        $response['message']    = 'Successfully Updated!';
        json_encode($response);
        return $this->response
            ->setStatusCode(200)
            ->setJSON($response);
    }
    
    public function gmeetstart()
    {
        
        $jsonData   = file_get_contents('php://input');
        $data       = json_decode($jsonData, true);
        $id         = $data['id'];
        $type       = 'class';
        $result = $this->gmeet_model->get_urlBygmeetId($id);

        $class_section = $this->gmeet_model->getClassSectionByGmeetID($id);
            foreach ($class_section as $key => $value) {
                $sender_details = array(
                    'class_section_id' => $value->cls_section_id,
                    'title'            => $result['title'],
                    'date'             => $result['date'],
                    'duration'         => $result['duration'],
                );

                $this->gmeet_mail_sms->mailsms('gmeet_online_classes_start', $sender_details);

        }

        $response['success']    = 'true';
        $response['message']    = 'Successfully Updated!';
        json_encode($response);
        return $this->response
            ->setStatusCode(200)
            ->setJSON($response);

    }
    
    
}