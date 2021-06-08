<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Logger_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function loger_LoginAttempt()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Login Attempt | Query Process...",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_LoginFailed()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Login Attempt | Login Failed",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_LoginFailNotGM()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Login Attempt | Query Canceled",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_LoginSuccess()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "".$_SESSION['admin_name']." Successfully Logged In",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_AdminLogoutSuccess()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Logout Attempt | Logout Successfully",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_AminLoginFailed()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Logout Attempt | Logout Failed",
            'category' => "Session",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateAccountSuccess()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Player Attempt (GM : ".$_SESSION['admin_name'].") | Create Player Successfully",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateAccountFailed()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Player Attempt (GM : ".$_SESSION['admin_name'].") | Create Player Failed",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_DeleteItemSuccess($player_id, $item_name)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Delete Item Attempt (GM : ".$_SESSION['admin_name']." , Inventory ID : ".$player_id." , Item Name : ".$item_name.") | Delete Item Successfully",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_DeleteItemFailed($player_id, $item_name)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Delete Item Attempt (GM : ".$_SESSION['admin_name']." , Inventory ID : ".$player_id." , Item Name : ".$item_name.") | Delete Item Failed",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_ExtendItemSuccess($player_id, $item_name)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Extend Item Duration Attempt (GM : ".$_SESSION['admin_name'].", Inventory ID : ".$player_id.", Item Name : ".$item_name.") | Extend Duration Item Successfully",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_ExtendItemFailed($player_id, $item_name)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Extend Item Duration Attempt (GM : ".$_SESSION['admin_name'].", Inventory ID : ".$player_id.", Item Name : ".$item_name.") | Extend Duration Item Failed",
            'category' => "Player",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateVoucherSuccess()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Voucher Attempt (GM : ".$_SESSION['admin_name'].") | Create Voucher Successfully",
            'category' => "Recharge",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateVoucherFailed()
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Voucher Attempt (GM : ".$_SESSION['admin_name'].") | Create Voucher Failed",
            'category' => "Recharge",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_RechargeManualSuccess($player_name, $package)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Manual Recharge Attempt (GM : ".$_SESSION['admin_name'].", Player : ".$player_name.", Package : ".$package.") | Manual Recharge Successfully",
            'category' => "Recharge",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_RechargeManualFailed($player_name, $package)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Manual Recharge Attempt (GM : ".$_SESSION['admin_name'].", Player : ".$player_name.", Package : ".$package.") | Manual Recharge Failed",
            'category' => "Recharge",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateRedeemCodeItemSuccess($item_name, $duration)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Redeem Code Item Attempt (GM : ".$_SESSION['admin_name'].", Item : ".$item_name.", Duration : ".$duration.") | Create Redeem Code Successfully",
            'category' => "Redeem Code",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateRedeemCodeItemFailed($item_name, $duration)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Redeem Code Item Attempt (GM : ".$_SESSION['admin_name'].", Item : ".$item_name.", Duration : ".$duration.") | Create Redeem Code Failed",
            'category' => "Redeem Code",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateRedeemCodeCashSuccess($cash_amount)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Redeem Code Cash Attempt (GM : ".$_SESSION['admin_name'].", Cash Amount : ".$cash_amount.") | Create Redeem Code Successfully",
            'category' => "Redeem Code",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateRedeemCodeCashFailed($cash_amount)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create Redeem Code Cash Attempt (GM : ".$_SESSION['admin_name'].", Cash Amount : ".$cash_amount.") | Create Redeem Code Failed",
            'category' => "Redeem Code",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateNewsSuccess($news_title)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create News Attempt (GM : ".$_SESSION['admin_name'].", Title : ".$news_title.") | Created News Successfully",
            'category' => "News",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_CreateNewsFailed($news_title)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Create News Attempt (GM : ".$_SESSION['admin_name'].", Title : ".$news_title.") | Created News Failed",
            'category' => "News",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_ChangeReportStateSuccess($report_id)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Confirm Report Attempt (GM : ".$_SESSION['admin_name'].", Report ID : ".$report_id.") | Confirm Report Successfully",
            'category' => "Report",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_ChangeReportStateFailed($report_id)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Confirm Report Attempt (GM : ".$_SESSION['admin_name'].", Report ID : ".$report_id.") | Confirm Report Failed",
            'category' => "Report",
            'date' => date('d-m-Y h:i:s')
        ));
    }

    function logger_DeleteReportSuccess($report_id)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Delete Report Attempt (GM : ".$_SESSION['admin_name'].", Report ID : ".$report_id.") | Delete Report Success",
            'category' => "Report",
            'date' => date('d-m-Y h:i:s')
        ));
    }
    function logger_DeleteReportFailed($report_id)
    {
        $this->db->insert('web_adminpanel_log', array(
            'ip_address' => $this->input->ip_address(),
            'description' => "Delete Report Attempt (GM : ".$_SESSION['admin_name'].", Report ID : ".$report_id.") | Delete Report Failed",
            'category' => "Report",
            'date' => date('d-m-Y h:i:s')
        ));
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>