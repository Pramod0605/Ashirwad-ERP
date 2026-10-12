<?php
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
    //============================= USER INFO ==============================//
    if (!function_exists('site_info')) {
        function site_info()
        {
            $db = db_connect();
            $result = $db->query("SELECT * FROM sch_settings WHERE id = '1' ")->getRow();
            $siteInfo['siteName']       = $result->name;
            $siteInfo['siteUrl']        = $result->base_url;
            $siteInfo['active_session'] = $result->session_id;
            $siteInfo['siteLogo']       = $result->base_url.'uploads/school_content/admin_logo/'.$result->admin_logo;
            $siteInfo['siteLogoIcon']   = $result->base_url.'uploads/school_content/admin_logo/'.$result->admin_logo;
            $siteInfo['siteFavicon']    = $result->base_url.'uploads/school_content/admin_logo/'.$result->admin_small_logo;
            $siteInfo['userImgPath']    = $result->base_url.'uploads/staff_images/';
            $siteInfo['stuImgPath']     = $result->base_url.'uploads/student_images/';
            $siteInfo['vehImgPath']     = $result->base_url.'uploads/vehicle_photo/';
            return $siteInfo;
        }
    }

?>