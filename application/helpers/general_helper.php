<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('getToEntryNumber')) {
    function getToEntryNumber($number, $entrytype_id) {
    	// Get a reference to the controller object
	    $CI = get_instance();
		
		return $CI->functionscore->toEntryNumber($number, $entrytype_id);
    }
}

if(!function_exists('getDateFromSql')) {
    function getDateFromSql($date) {
    	// Get a reference to the controller object
	    $CI = get_instance();
		
		return $CI->functionscore->dateFromSql($date);
    }
}

if(!function_exists('getOSArch')) {
    function getOSArch() {
    	$out = array();
		$out = php_uname("m");
		$arr = explode("_", $out);
		return $arr[1];
    }
}




if(!function_exists('getShowTag')) {
    function getShowTag($tag_id) {
    	// Get a reference to the controller object
	    $CI = get_instance();
		
		return $CI->functionscore->showTag($tag_id);
    }
}

if(!function_exists('getEntryLedgers')) {
    function getEntryLedgers($id) {
    	// Get a reference to the controller object
	    $CI = get_instance();

	    return $CI->functionscore->entryLedgers($id);
    }
}

if(!function_exists('getToCurrency')) {
    function getToCurrency($dc, $amount) {
    	// Get a reference to the controller object
	    $CI = get_instance();

	    return $CI->functionscore->toCurrency($dc, $amount).'__'.$dc;
    }
}

if(!function_exists('getToCurrencyForEntries')) {
    function getToCurrencyForEntries($dc, $amount) {
    	// Get a reference to the controller object
	    $CI = get_instance();

	    return $CI->functionscore->toCurrency($dc, $amount);
    }
}

if(!function_exists('addReceiptEntry')) {
    function addReceiptEntry($id, $amount, $remark, $number, $date) {
    	// Get a reference to the controller object
	    $CI = get_instance();
	    $isLinked = $this->db->where('income_head_id',$id)->get('cyc_ledgers')->row_array();
	    if ($isLinked != null) {
	        
	        $data_a = array(
                'entrytype_id' => 1,
                'number'       => $number,
                'date'         => $date,
                'cr_total'     => $amount,
            );
	        //$CI->db->insert('cyc_entries', $data);
            //$return_value = $this->db->insert_id();
            
            $data_b = array(
                //'entry_id'  => $return_value,
                'ledger_id' => $isLinked['id'],
                'amount'    => $amount,
                'dc'        => 'D',
                'narration' => $remark,
            );
	        //$CI->db->insert('cyc_entryitems', $data);
	    }
	    

	    return true;
    }
}

if(!function_exists('addExpEntry')) {
    function addExpEntry($id, $amount, $remark, $number, $date) {
    	// Get a reference to the controller object
	    $CI = get_instance();
	    $isLinked = $this->db->where('expenses_head_id',$id)->get('cyc_ledgers')->row_array();
	    if ($isLinked != null) {
	        
	        $data_a = array(
                'entrytype_id' => 4,
                'number'       => $number,
                'date'         => $date,
                'cr_total'     => $amount,
            );
	        //$CI->db->insert('cyc_entries', $data);
            //$return_value = $this->db->insert_id();
            
            $data_b = array(
                //'entry_id'  => $return_value,
                'ledger_id' => $isLinked['id'],
                'amount'    => $amount,
                'dc'        => 'D', 
                'narration' => $remark,
            );
	        //$CI->db->insert('cyc_entryitems', $data);
	    }
	    

	    return true;
    }
}

if(!function_exists('addFeeReceiptEntry')) {
    function addFeeReceiptEntry($date, $amount, $remark, $id, $mode) {
	    $CI = get_instance();
	    
	        if ($mode != 'Cash') {
	            $lid = $id;
	        } else {
	            $lid = 5;
	        }
	    
	        $data_a = array(
                'entrytype_id' => 4,
                'date'         => $date,
                'cr_total'     => $amount,
                'dr_total'     => $amount,
                'notes'        => $remark, 
            );
	        $CI->db->insert('cyc_entries', $data_a);
            $return_value = $CI->db->insert_id();
            
            $data_b = array(
                'entry_id'  => $return_value,
                'ledger_id' => $lid,
                'amount'    => $amount,
                'dc'        => 'D',
                'narration' => $remark, 
            );
	        $CI->db->insert('cyc_entryitems', $data_b);
	        
	        $data_c = array(
                'entry_id'  => $return_value,
                'ledger_id' => '7',
                'amount'    => $amount,
                'dc'        => 'C',
                'narration' => $remark,
            );
	        $CI->db->insert('cyc_entryitems', $data_c);
	    return true;
    }
}

if(!function_exists('addSalaryPayment')) {
    function addSalaryPayment($date, $amount, $remark, $dr, $cr) {
        $CI = get_instance();
	        $data_a = array(
                'entrytype_id' => 4,
                'date'         => $date,
                'cr_total'     => $amount,
                'dr_total'     => $amount,
                'notes'        => $remark,
            );
	        $CI->db->insert('cyc_entries', $data_a);
            $return_value = $CI->db->insert_id();
            
            $data_b = array(
                'entry_id'  => $return_value,
                'ledger_id' => $dr,
                'amount'    => $amount,
                'dc'        => 'D',
                'narration' => $remark, 
            );
	        $CI->db->insert('cyc_entryitems', $data_b);
	        
	        $data_c = array(
                'entry_id'  => $return_value,
                'ledger_id' => $cr,
                'amount'    => $amount,
                'dc'        => 'C',
                'narration' => $remark,
            );
	        $CI->db->insert('cyc_entryitems', $data_c);
	    return true;
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
}

if(!function_exists('groupByClass')) {
    function groupByClass($cls) {
        $CI = get_instance();
        $CI->db->select('cyc_classes_grouping.*', FALSE);
        $CI->db->from('cyc_classes_grouping');
        $CI->db->where('cyc_classes_grouping.class_id', $cls);
        $CI->db->where('cyc_classes_grouping.section_id IS NULL');
        $CI->db->where('cyc_classes_grouping.subject_group_id IS NULL');
        $CI->db->where('cyc_classes_grouping.subject_id IS NULL');
        $CI->db->group_by('cyc_classes_grouping.group_id');
            $query_result = $CI->db->get();
            $result = $query_result->result();
        return $result;
    }
}

if(!function_exists('groupByClassSection')) {
    function groupByClassSection($cls, $sec) {
        $CI = get_instance();
        $CI->db->select('cyc_classes_grouping.*', FALSE);
        $CI->db->from('cyc_classes_grouping');
        $CI->db->where('cyc_classes_grouping.class_id', $cls);
        $CI->db->where('cyc_classes_grouping.section_id', $sec);
        $CI->db->where('cyc_classes_grouping.subject_group_id IS NULL');
        $CI->db->where('cyc_classes_grouping.subject_id IS NULL');
        $CI->db->group_by('cyc_classes_grouping.group_id');
            $query_result = $CI->db->get();
            $result = $query_result->result();
        return $result;
    }
}

if(!function_exists('groupByClassSectionSubjectGroup')) {
    function groupByClassSectionSubjectGroup($cls, $sec, $sgrp) {
        $CI = get_instance();
        $CI->db->select('cyc_classes_grouping.*', FALSE);
        $CI->db->from('cyc_classes_grouping');
        $CI->db->where('cyc_classes_grouping.class_id', $cls);
        $CI->db->where('cyc_classes_grouping.section_id', $sec);
        $CI->db->where('cyc_classes_grouping.subject_group_id', $sgrp);
        $CI->db->where('cyc_classes_grouping.subject_id IS NULL');
        $CI->db->group_by('cyc_classes_grouping.group_id');
            $query_result = $CI->db->get();
            $result = $query_result->result();
        return $result;
    }
}

if(!function_exists('groupByClassSectionSubjectGroupSubject')) {
    function groupByClassSectionSubjectGroupSubject($cls, $sec, $sgrp, $sub) {
        $CI = get_instance();
        $CI->db->select('cyc_classes_grouping.*', FALSE);
        $CI->db->from('cyc_classes_grouping');
        $CI->db->where('cyc_classes_grouping.class_id', $cls);
        $CI->db->where('cyc_classes_grouping.section_id', $sec);
        $CI->db->where('cyc_classes_grouping.subject_group_id', $sgrp);
        $CI->db->where('cyc_classes_grouping.subject_id', $sub);
        $CI->db->group_by('cyc_classes_grouping.group_id');
            $query_result = $CI->db->get();
            $result = $query_result->result();
        return $result;
    }
}

if(!function_exists('groupInfo')) {
    function groupInfo($grp) {
        $CI = get_instance();
        $CI->db->select('cyc_classes_grouping.*', FALSE);
        $CI->db->from('cyc_classes_grouping');
        $CI->db->where('cyc_classes_grouping.group_id', $grp);
            $query_result = $CI->db->get();
            $result = $query_result->result();
        return $result;
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

?>