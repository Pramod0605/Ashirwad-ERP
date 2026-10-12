<?php
    //============================= USER INFO ==============================//
    if (!function_exists('getHeader')) {
        function getHeader()
        {
            $head['client_service']     = request()->getHeaderLine('Client-Service', true);
            $head['auth_key']           = request()->getHeaderLine('Auth-Key', true);
            $head['users_id']           = request()->getHeaderLine('User-ID');
            $head['token']              = request()->getHeaderLine('Authorization');
            return $head;
        }
    }
     //============================= USER INFO ==============================//
    if (!function_exists('getUserRole')) {
        function getUserRole($userId)
        {
            $db                         = db_connect();
            $result                     = $db->query("SELECT * FROM staff WHERE id = '".$userId."'  ")->getRow();
            $diInfo                     = $db->query("SELECT * FROM staff_designation WHERE id = '".$result->designation."' ")->getRow();
			$ciInfo                     = $db->query("SELECT * FROM class_teacher WHERE staff_id = '".$result->id."' ")->getRow();
			$aciInfo                    = $db->query("SELECT * FROM cyc_additional_section_teacher WHERE staff_id = '".$result->id."' ")->getRow();
			$stgInfo                    = $db->query("SELECT * FROM sch_settings WHERE id = '1' ")->getRow();
			
			$isLibrn                    = $db->query("SELECT id as lid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '4' ")->getRow();
			$isRcptn                    = $db->query("SELECT id as rid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '6' ")->getRow();
			$isTechr                    = $db->query("SELECT id as tid FROM staff_roles WHERE staff_id = '".$result->id."' AND role_id = '2' ")->getRow();
			$isClInc                    = $db->query("SELECT id as ctid FROM class_teacher WHERE staff_id = '".$result->id."' ")->getRow();
			$isClsTtbl                  = $db->query("SELECT * FROM subject_timetable WHERE staff_id = '".$result->id."' AND session_id = '".$stgInfo->session_id."' ")->getRow();
			$isCord                     = $db->query("SELECT cc_id as ccid FROM cyc_class_coordinator WHERE staff_id = '".$result->id."' ")->getRow();
			$isAdmin                    = $db->query("SELECT id as aid FROM staff_roles WHERE (staff_id = '".$result->id."' AND role_id = '1') OR (staff_id = '".$result->id."' AND role_id = '7') ")->getRow();
			
			if (!empty($isLibrn)) {
			    $isLibrn    = true;
			} else {
                $isLibrn    = false;
			}
			        
			if (!empty($isRcptn)) {
			    $isRcptn    = true;
			} else {
			    $isRcptn    = false;
			}
			        
			if (!empty($isTechr)) {
			    $isTechr    = true;
			} else {
			    $isTechr    = false;
			}
			 
			if (!empty($isClsTtbl)) {
			    $isTechr    = true;
			    $isClInc    = true;
			} else {
			    $isClInc    = false;
			}
			 
			if (!empty($isCord)) {
                $isCord     = true;
            } else {
                $isCord     = false;
            }
            
            if (!empty($isAdmin)) {
                $isAdmin    = true;
            } else {
                $isAdmin    = false;
            }
			        
            $role['isSectionIn']    = true;
            $role['isLibrn']        = $isLibrn;
            $role['isRcptn']        = $isRcptn;
            $role['isTechr']        = $isTechr;
            $role['isClInc']        = $isClInc;
            $role['isCoord']        = $isCord;
            $role['isAdmin']        = $isAdmin;
            return $role;
        }
    }
    //============================= USER INFO ==============================//
    if (!function_exists('user_info')) {
        function user_info($id)
        {
            $db = db_connect();
            $result = $db->query("SELECT * FROM staff WHERE id = '".$id."' ")->getRow();
            return $result;
        }
    }
    //============================= URI INFO ==============================//
    if (!function_exists('segmentInfo')) {
        function segmentInfo()
        {
            $uri = service('uri');
            $segmentData['one']    = ucfirst($uri->getSegment(1));
            $segmentData['two']    = ucfirst($uri->getSegment(2));
            $segmentData['three']  = ucfirst($uri->getSegment(3));
            return $segmentData;
        }
    }
    //============================= CS INFO ==============================//
    if (!function_exists('class_info')) {
        function class_info($cid)
        {
            $db             = db_connect();
            $result         = $db->query("SELECT * FROM classes WHERE id = '".$cid."' ")->getRowArray();
            return $result;
        }
    }
    
    if (!function_exists('section_info')) {
        function section_info($sid)
        {
            $db             = db_connect();
            $result         = $db->query("SELECT * FROM sections WHERE id = '".$sid."'  ")->getRow();
            return $result;
        }
    }
    
    if (!function_exists('class_section_info')) {
        function class_section_info($cid, $sid)
        {
            $db             = db_connect();
            $result         = $db->query("SELECT * FROM class_sections WHERE class_id = '".$cid."' AND section_id = '".$sid."' ")->getRow();
            $csInfo['id']   = $result->id;
            return $csInfo;
        }
    }
    //============================= SITE INFO ==============================//
    if (!function_exists('site_info')) {
        function site_info()
        {
            $db = db_connect();
            $result = $db->query("SELECT * FROM sch_settings WHERE id = '1' ")->getRow();
            $siteInfo['siteName']       = $result->name;
            $siteInfo['siteUrl']        = $result->base_url;
            $siteInfo['active_session'] = $result->session_id;
            $siteInfo['attendence_type']= $result->attendence_type;
            $siteInfo['siteLogo']       = $result->base_url.'uploads/school_content/admin_logo/'.$result->admin_logo;
            $siteInfo['siteLogoIcon']   = $result->base_url.'uploads/school_content/admin_logo/'.$result->admin_logo;
            $siteInfo['siteFavicon']    = $result->base_url.'uploads/school_content/admin_logo/'.$result->admin_small_logo;
            $siteInfo['userImgPath']    = $result->base_url.'uploads/staff_images/';
            $siteInfo['stuImgPath']     = $result->base_url.'uploads/student_images/';
            return $siteInfo;
        }
    }
    
    if (!function_exists('sendSms')) {
        function sendSms($phone_number, $tempid, $message) { 
            $api_params     = '&mobiles=' . $phone_number . '&sms=' . urlencode($message) . '&tempid=' . $tempid;
            $smsGatewayUrl  = "https://sms.whistle.mobi/sendsms.jsp?user=ROIfast&password=6fd99dcc67XX&senderid=SPARO";
            $smsgatewaydata = $smsGatewayUrl . $api_params;
            $url = $smsgatewaydata;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_POST, false);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            curl_close($ch);
            return $output;
        }
   }
   
   if (!function_exists('sendWp')) {
        function sendWp($phone_number, $message) { 
            $db     = db_connect();
            $wapi   = $db->query("SELECT * FROM `sms_config` WHERE type = 'whatsapp'   ")->getRow();
            
            $curl = curl_init();
            $postdata = array(
                "appkey"    => $wapi->api_id,
                "authkey"   => $wapi->authkey,
                "to"        => $phone_number,
                "message"   => $message,
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
   
   if (!function_exists('sendEmail')) {
        function sendEmail($mail_id, $message) { 
            $email          = \Config\Services::email();
            $email->setFrom('contact@scholerly.com', 'Scholerly');
            $email->setTo($mail_id);
            $email->setSubject('Scholerly');
            $email->setMessage($message);
            $email->send();
        }
   }
   
   if (!function_exists('sendEmailWc')) {
        function sendEmailWc($mail_id, $message, $file) { 
            $email  = \Config\Services::email();
            $email  = service('email');
            $email->initialize([
                'SMTPHost' => 'smtp.example.com',
                'SMTPUser' => 'your@example.com',
                'SMTPPass' => 'your_password',
                'SMTPPort' => 465,
                'SMTPCrypto' => 'ssl',
                'mailType' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            ]);

            $email->setFrom('your@example.com', 'Your Name');
            $email->setTo('recipient@example.com');
            $email->setSubject('Email with Attachment');
            $email->setMessage('This is the message body.');
            
            $file_path = $file;
            $email->attach($file_path);
            $email->send();
        }
   }
   
    if(!function_exists('sendPushNotice')) {
    function sendPushNotice($id, $message) {
        $content_onesignal_app_id = 'a835ed73-8dcf-46de-9e32-9f1f8514ad03';
        $content_onesignal_rest_api_key = 'Y2IyMmUyNzUtN2U5OS00M2JmLThhNjMtNmNmMWVmNmU3ZmZl';
        define("ONESIGNAL_APP_ID", $content_onesignal_app_id);
        define("ONESIGNAL_REST_KEY", $content_onesignal_rest_api_key);
        $content      = array(
            "en" => $message
        );
        
        if ($id) {
            $fields = array(
                'include_player_ids' => array($id),
			    'app_id' => ONESIGNAL_APP_ID,
			    'data' => array("foo" => "bar"),
			    'headings'=> array("en" => 'MasterJee'),
			    'contents' => $content,
		    );
        } else {
            $fields = array(
                'included_segments' => array('All'),
			    'app_id' => ONESIGNAL_APP_ID,
			    'data' => array("foo" => "bar"),
			    'headings'=> array("en" => 'MasterJee'),
			    'contents' => $content,
		    );
        }
			
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
    }
    
    if(!function_exists('sendFcmPushNoticeStudent')) {
    function sendFcmPushNoticeStudent($tokens, $title, $msg, $action = "") {
        $API_ACCESS_KEY = "AAAAkGeJt3E:APA91bEITzLONxgN9bFDgpvZTgXdqCe23JVcC_96cfHiLJzMiN-oOO1lc15OULp1pUxH0uHljFnTX72b2ELQazuFNTjt3dK-flPO_iDUXnSEFjFlHJQW2r2mF4SuzkaL0wJPE-6UealO";
        $fcmUrl = "https://fcm.googleapis.com/fcm/send";
        $notificationData = [
            'title' => $title,
            'body' => $msg,
            'action' => $action,
            'sound' => 'mySound',
        ];

        $fcmNotification = [
            'to' => $tokens,
            'collapseKey' => "{$tokens}",
            'data' => $notificationData,
        ];
        $headers = [
            'Authorization: key=' . $API_ACCESS_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);

        return true;
    }
    }
    
//=============================== CLASS GROUP ================================//

use CodeIgniter\Database\ConnectionInterface;

if (!function_exists('groupByClass')) {
    function groupByClass($cls) {
        $db = db_connect();
        return $db->table('cyc_classes_grouping')
            ->select('*')
            ->where('class_id', $cls)
            ->where('section_id IS NULL')
            ->where('subject_group_id IS NULL')
            ->where('subject_id IS NULL')
            ->groupBy('group_id')
            ->get()
            ->getResult();
    }
}

if (!function_exists('groupByClassSection')) {
    function groupByClassSection($cls, $sec) {
        $db = db_connect();
        return $db->table('cyc_classes_grouping')
            ->select('*')
            ->where('class_id', $cls)
            ->where('section_id', $sec)
            ->where('subject_group_id IS NULL')
            ->where('subject_id IS NULL')
            ->groupBy('group_id')
            ->get()
            ->getResult();
    }
}

if (!function_exists('groupByClassSectionSubjectGroup')) {
    function groupByClassSectionSubjectGroup($cls, $sec, $sgrp) {
        $db = db_connect();
        return $db->table('cyc_classes_grouping')
            ->select('*')
            ->where('class_id', $cls)
            ->where('section_id', $sec)
            ->where('subject_group_id', $sgrp)
            ->where('subject_id IS NULL')
            ->groupBy('group_id')
            ->get()
            ->getResult();
    }
}

if (!function_exists('groupByClassSectionSubjectGroupSubject')) {
    function groupByClassSectionSubjectGroupSubject($cls, $sec, $sgrp, $sub) {
        $db = db_connect();
        return $db->table('cyc_classes_grouping')
            ->select('*')
            ->where('class_id', $cls)
            ->where('section_id', $sec)
            ->where('subject_group_id', $sgrp)
            ->where('subject_id', $sub)
            ->groupBy('group_id')
            ->get()
            ->getResult();
    }
}

if (!function_exists('groupInfo')) {
    function groupInfo($grp) {
        $db = db_connect();
        return $db->table('cyc_classes_grouping')
            ->select('*')
            ->where('group_id', $grp)
            ->get()
            ->getResult();
    }
}


?>