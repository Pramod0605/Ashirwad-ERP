<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\RequestInterface;

class ApiModel extends Model
{
    protected $db;
    public $client_service               = "smartschool";
    public $auth_key                     = "schoolAdmin@";
    public $security_authentication_flag = 1;

    public function __construct()
    {
        $this->db = db_connect();
    }
    
    public function auth()
    {
        $user_id    = getHeader()['users_id'];
        $token      = getHeader()['token'];
        if ($this->security_authentication_flag) {
            $authRecord = $this->db->table('staff')->where('staff_id', $users_id)->where('auth_token', $token)->get()->getRowArray();
            if (!$authRecord) {
                return $this->respond(['status' => 401, 'message' => 'Unauthorized.'], 401);
            } else {
                if ($authRecord['expired_at'] < date('Y-m-d H:i:s')) {
                    return $this->respond(['status' => 401, 'message' => 'Your session has been expired.'], 401);
                } else {
                    $updated_at = date('Y-m-d H:i:s');
                    $expired_at = date("Y-m-d H:i:s", strtotime('+8760 hours'));
                    $this->db->query("UPDATE staff SET expired_at = '".$expired_at."', updated_at = '".$updated_at."' WHERE  staff_id = '".$users_id."' AND auth_token = '".$token."' ");
                    return $this->respond(['status' => 200, 'message' => 'Authorized.'], 200);
                }
            }
        } else {
            return $this->respond(['status' => 200, 'message' => 'Authorized.'], 200);
        }
    }
    
    public function check_auth_client()
    {
        $rclient_service    = getHeader()['client_service'];
        $rauth_key          = getHeader()['auth_key'];
        if ($rclient_service == $this->client_service && $rauth_key == $this->auth_key) {
            return true;
        } else {
            return false;
        }
    }
    
}