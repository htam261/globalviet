<?php

class user_model extends MY_Model
{
    private $db_userdata = null;
    private  $table='users';
    private $testMod = false;

    function __construct()
    {var_dump("dd");exit();
        parent::__construct();

        $this->db_userdata = $this->load->database(DB_NAME, true);
      //  $this->db_gamedata = $this->load->database('gamedata', true);
    }

    function get_ranking($top = 10)
    {
        $re = array();

        $sql = "select top $top CharName,K1 from  Chars where Family in (0,1) order by K1 desc";
        $ret = $this->db_gamedata->query($sql);
        $re['as'] = $ret->result_array();

     /*   $sql = "select top $top CharName,K1 from  Chars where Family in (2,3) order by K1 desc";
        $ret = $this->db_gamedata->query($sql);
        $re['pn'] = $ret->result_array();
     */
        return $re;
    }

    function add_cash($UserUID, $amt)
    {
//        SET @_oldpoint = (SELECT Point FROM Users_Master WHERE UserUID=@UserUID)
//		SET @_userid = (SELECT UserID FROM Users_Master WHERE UserUID=@UserUID)
        $this->db_userdata->trans_begin();
        $this->db_userdata->select('Point,UserID');
        $this->db_userdata->where('UserUID', $UserUID);
        $query = $this->db_userdata->get('Users_Master');
        if ($row = $query->result_array()) {
            $_oldpoint = $row[0]['Point'];
            $_userid = $row[0]['UserID'];
        }

        $data = array('Point' => $_oldpoint + $amt);
        $this->db_userdata->where('UserUID', $UserUID);
        $this->db_userdata->update('Users_Master', $data);

        $data = array(
            'UserID' => $_userid,
            'Point' => $_oldpoint,
            'PointCharge' => $amt,
            'DateCharge' => date('Y-m-d H:i:s'),
        );
        $this->db_userdata->insert('UserPointChargeLog', $data);

        if ($this->db_userdata->trans_status() === FALSE) {
            $this->db_userdata->trans_rollback();
            return false;
        } else {
            $this->db_userdata->trans_commit();
        }
        return true;

    }

    function change_password($UserUID, $new_pass)
    {
        $sql = "{call Union_Change_Password_By_UserUID(?, ?)}";
        $params = array($UserUID, $new_pass);
        $this->db_userdata->simple_query($sql, $params);
        $re = $this->session->userdata('client_user');
        $re["Pw"] = md5($new_pass);
        $this->session->set_userdata('client_user', $re);
        return ($this->db_userdata->affected_rows() >= 1);
    }

    function update_info($UserUID, $info)
    {
        $sql = "{call Union_Update_UserInfo_By_UserUID(?, ?, ?, ?)}";
        $params = array(array($info[realname], SQLSRV_PARAM_IN), array($info[email], SQLSRV_PARAM_IN), array($info[mobile], SQLSRV_PARAM_IN), array($UserUID, SQLSRV_PARAM_IN));
        $this->db_userdata->query($sql, $params);
        return ($this->db_userdata->affected_rows() >= 1);
    }

    function checkExistsUsername($username)
    {
        $sql = "{call Union_Check_Existed_Account_By_UserID(?)}";
        $params = array(array($username, SQLSRV_PARAM_IN));
        $query = $this->db_userdata->query($sql, $username);
        $numrow = $query->num_rows();
        return $numrow > 0;
    }

    function register($username, $password, $email)
    {
        $ip_client = $this->input->ip_address();
        $today = getdate();
        $currentTimeStamp = mktime($today['hours'], $today['minutes'], $today['seconds'], $today['mon'], $today['mday'], $today['year']);

        if ($this->session->userdata($ip_client))
            if (($currentTimeStamp - $this->session->userdata($ip_client)) < 600)
                return -2;

        //get new UserID
        $this->db_userdata->select_max('UserUID', 'num');
        $query = $this->db_userdata->get('Users_Master');
        $row = $query->row();
        $UserUID = intval($row->num) + 1;


        $sql = "{call Union_Check_Existed_Account_By_UserID(?)}";
        $query = $this->db_userdata->query($sql, $username);
        if ($query->num_rows() > 0) return -1;

        $sql = "{call Union_Check_Existed_Account_By_Email(?)}";
        $query = $this->db_userdata->query($sql, $email);
        if ($query->num_rows() > 0) return -4;

        //Begin transaction
        $this->db_userdata->trans_begin();
//        2013-03-02 14:42:00
        $data = array(
            'UserUID' => $UserUID,
            'UserID' => $username,
            'Pw' => $password,
            'JoinDate' => date('Y-m-d H:i:s'),
            'Admin' => 0,
            'AdminLevel' => 0,
            'UseQueue' => 0,
            'Status' => -5,
            'Leave' => 0,
            'LeaveDate' => date('Y-m-d H:i:s'),
            'UserType' => 1,
            'Point' => 0,
            'EnPassword' => 0,
            'UserIp' => $ip_client
        );
        $this->db_userdata->insert('Users_Master', $data);

        $data = array(
            'UserID' => $username,
            'UserUID' => $UserUID,
            'UserName' => 'Real Name',
            'PwQuestion' => 'Question',
            'PwAnswer' => 'Answer',
            'Email' => $email,
            'NewsLetter' => 0,
            'Sms' => 0,
            'AdultAuth' => 0,
            'EmailAuth' => 0,
        );
        $this->db_userdata->insert('Users_Detail', $data);

        $data = array(
            'UserUID' => $UserUID,
            'BlockEndDate' => date('Y-m-d H:i:s')
        );
        $this->db_userdata->insert('Users_Block', $data);

        if ($this->db_userdata->trans_status() === FALSE) {
            $this->db_userdata->trans_rollback();
        } else {
            $this->db_userdata->trans_commit();
        }
        $this->session->set_userdata($ip_client, $currentTimeStamp);

        // Gui email xac nhan ngay
//        $code = md5(time());

//        $data = array(
//            'UserUID' => $UserUID,
//            'UserID' => $username,
//            'RequestDate' => now(),
//            'RequestIP' => IP,
//            'RequestCode' => $code,
//            'RequestEmail' => $email,
//        );
//        $this->db_userdata->insert('_account_verify_email', $data);
//        $code = my_encrypt(serialize(array("userID" => $username, "code" => $code, "email" => $email)));
//
//        if (!dosql("insert into _account_verify_email set UserUID=$UserUID, UserID='$username', RequestDate=now(),RequestIP='" . IP . "',RequestCode='$code',RequestEmail='$email'")) return false;

//        $code = my_encrypt(serialize(array("userID" => $username, "code" => $code, "email" => $email)));
//        $link = "$siteUrl/tai-khoan/xac-nhan-email/$code";
//        $content = get_template("client/email/verify_email_1");
//        if (sendmail("hotro1@shaiya2.com", $email, "Yêu cầu xác nhận email (Bước 1) - Shaiya 2", $content) == false)
//            return -3;


        return 1;
    }

    function login($user, $pass)
    {var_dump("exit login() model");exit();
        //get status
        $this->db_userdata->select('Status');
        $this->db_userdata->where('UserID', $user);
        $query = $this->db_userdata->get('Users_Master');
        $status = $query->row('Status');

        $this->db_userdata->select('EmailAuth');
        $this->db_userdata->where('UserID', $user);
        $query = $this->db_userdata->get('Users_Detail');
        $emailAuth = $query->row('EmailAuth');
        if ($status == -5 AND $emailAuth == '0')
            return false;
        else {
            $this->db_userdata->where('UserID', $user);
            $this->db_userdata->where('Pw', $pass);
            $this->db_userdata->where('Status <>', -13);
            $query = $this->db_userdata->get('Users_Master');
            if ($re = $query->row_array()) {
                $this->db_userdata->select('Email,Mobile1,UserName,EmailAuth');
                $this->db_userdata->where('UserID', $user);
                $query = $this->db_userdata->get('Users_Detail');
                $re1 = $query->result_array();
                $re["Pw"] = md5($pass);
                $this->session->set_userdata('client_user', array_merge($re, $re1));
                return true;
            }
        }
        return false;
    }

    public function topup($user, $provider, $serial, $pin)
    {

        $datestring = "%Y-%m-%d %H:%i:%s";
        $time = time();
        $ip_client = $this->input->ip_address();
        $webservice = $this->config->item('VNPT_WS_URL');
        $vnd_to_cash = $this->config->item('vnd_to_cash');
        $soapClient = new SoapClient(null, array('location' => $webservice, 'uri' => "http://www.shaiya2.com"));
        $this->load->library('cardcharging');
        $this->cardcharging->m_UserName = $this->config->item('M_USERNAME');
        $this->cardcharging->m_PartnerID = $this->config->item('M_PARTNER_ID');
        $this->cardcharging->m_MPIN = $this->config->item('M_MPIN');
        $this->cardcharging->m_Target = $user;
        $this->cardcharging->m_Card_DATA = $serial . ":" . $pin . ":" . "0" . ":" . $provider;
        $this->cardcharging->m_SessionID = "";
        $this->cardcharging->m_Pass = $this->config->item('M_PASSWORD');
        $this->cardcharging->soapClient = $soapClient;

        $transid = $this->config->item('M_PARTNER_CODE') . date("YmdHms");//gen transaction id

        $this->cardcharging->m_TransID = $transid;
        $CardChargingResponse = $this->cardcharging->CardCharging_();
        $this->load->helper('date');

        $data = array("txnid" => $transid,
            "UserUID" => $user['UserUID'],
            "UserID" => $user['UserID'],
            "card_provider" => $provider,
            "card_pin" => $pin,
            "card_serial" => $serial,
            "card_vnd" => null,
            "topup_date" => mdate($datestring, $time),
            "topup_ip" => $ip_client,
            "return_code" => $CardChargingResponse->m_Status,
            "return_msg" => $CardChargingResponse->m_Message
        );
        $this->db->insert('topup_log', $data);
        if ($CardChargingResponse->m_Status == 1 || $this->testMod) {
            $cash = $vnd_to_cash[$this->testMod ? 300000 : $CardChargingResponse->m_RESPONSEAMOUNT];
            $promotion_cash = 0;
            $sent = $this->add_cash($user['UserUID'], $cash + $promotion_cash);
            if (!$sent) $sent = $this->add_cash($user['UserUID'], $cash + $promotion_cash);
            if (!$sent) $sent = $this->add_cash($user['UserUID'], $cash + $promotion_cash);
            $data = array("txnid" => $transid,
                "UserUID" => $user['UserUID'],
                "UserID" => $user['UserID'],
                "card_provider" => $provider,
                "card_pin" => $pin,
                "card_serial" => $serial,
                "card_vnd" => $CardChargingResponse->m_RESPONSEAMOUNT,
                "topup_date" => mdate($datestring, $time),
                "topup_ip" => $ip_client,
                "cash" => $cash + $promotion_cash,
                "sent" => $sent,
                "promotion_id" => 0,
                "promotion_percent" => 100,
                "promotion_reason" => '',
                "promotion_from" => '',
                "promotion_to" => '',
                "promotion_repeat" =>'',
                "promotion_cash" => $promotion_cash
            );
            $this->db->insert('topup', $data);
            return array(1, $CardChargingResponse->m_RESPONSEAMOUNT, $cash, $promotion_cash);
        } else
            return array(0, $CardChargingResponse->m_Status);
    }

}

?>