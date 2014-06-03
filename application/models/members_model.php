<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class members_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        //$this->load->library(array('database'));
        $this->load->database();
    }

    public function getMembers(){
    	$query = 'SELECT "id", "User_name", "First_name", "Last_name", "Email_address", 
    						"Number_of_coin", "Date_signup", \'active\' AS "Status"
				FROM srv_user
				ORDER BY "id" ASC';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
    }

    public function deleteMember($uid = 0){
    	$this->db->delete('srv_user', array('id' => $uid)); 
    }

    public function deleteComment($cmtid = 0){
    	$this->db->delete('srv_comment', array('id' => $cmtid)); 
    }

    public function deleteBilling($bid = 0){
    	$this->db->delete('srv_payment_information', array('id' => $bid)); 
    }

    public function deleteUserImage($id = 0){
    	$this->db->delete('srv_user_pictures', array('id' => $id)); 
    }

    public function getMemberDetail($uid = null, $uname = null, $email = null){
    	if(!is_null($uid)){
    		$basicinfo 	= $this->db->get_where('srv_user', array('id'=>$uid))->result_array();
    		$checkins 	= 'select loi.*, srv_restaurant_information."Name" from (select srv_user_check_ins.*, srv_user."User_name" from srv_user_check_ins
							left join srv_user
							on srv_user_check_ins."User_Id"::integer = srv_user."id"
							where srv_user."id" = '. $uid .') loi
							left join srv_restaurant_information
							on loi."Restaurant_id"::integer = srv_restaurant_information."id"';

							//redeem information
			$deals 		= 'SELECT loi2.*, srv_restaurant_information."Name" FROM(SELECT loi.*, 
							srv_deals_detail."Restaurant_id", 
							srv_deals_detail."Type",
							srv_deals_detail."Dollar_Price",
							srv_deals_detail."Coin_Price"
							FROM (select * from srv_deals_purchased
							where srv_deals_purchased."User_id"::integer = '. $uid .') loi
							left join srv_deals_detail
							on loi."Deals_Detail_ID"::integer = srv_deals_detail."id") loi2
							LEFT JOIN srv_restaurant_information
							on loi2."Restaurant_id"::integer = srv_restaurant_information."id"';
			$pictures 	= 'select srv_user_pictures.* from srv_user_pictures
							left join srv_user 
							on srv_user_pictures."User_Id"::integer = srv_user."id"
							where srv_user."id" = '. $uid .'';
			$comments 	= 'select loi2.*, srv_restaurant_information."Name" from (
							select loi.*, srv_user_activity."Restaurant_Id" from (
							select srv_comment.*, now() - srv_comment."DateTime" as "QQ" from srv_comment
							left join srv_user
							on srv_comment."User_Id"::Integer = srv_user."id"
							where srv_user."id" = '.$uid.' ) loi
							left join srv_user_activity
							on loi."Activity_id"::Integer = srv_user_activity."id") loi2
							left join srv_restaurant_information
							on loi2."Restaurant_Id"::integer = srv_restaurant_information."id"';
			$billing	= 'select * from srv_payment_information
							where "User_Id"::Integer = (select "id" from srv_user where "id" = '. $uid .')';
			$totalp 	= 'select sum("Dollar_Price") as TotalP from srv_deals_detail where "id" in 
							( select "Deals_Detail_ID"::Integer from srv_deals_purchased where "User_id"::Integer = '. $uid .' )';
    	} else if(!is_null($uname) && $uname != ''){
    		$basicinfo = $this->db->get_where('srv_user', array('User_name'=>$uname))->result_array();
    		$checkins 	= 'select loi.*, srv_restaurant_information."Name" from (select srv_user_check_ins.*, srv_user."User_name" from srv_user_check_ins
							left join srv_user
							on srv_user_check_ins."User_Id"::integer = srv_user."id"
							where srv_user."User_name" = \''. $uname .'\') loi
							left join srv_restaurant_information
							on loi."Restaurant_id"::integer = srv_restaurant_information."id"';
			$deals 		= 'SELECT loi2.*, srv_restaurant_information."Name" FROM(SELECT loi.*, 
							srv_deals_detail."Restaurant_id", 
							srv_deals_detail."Type",
							srv_deals_detail."Dollar_Price",
							srv_deals_detail."Coin_Price"
							FROM (select * from srv_deals_purchased
							where srv_deals_purchased."User_id"::integer = (select id from srv_user where srv_user."User_name" = \''. $uname .'\')) loi
							left join srv_deals_detail
							on loi."Deals_Detail_ID"::integer = srv_deals_detail."id") loi2
							LEFT JOIN srv_restaurant_information
							on loi2."Restaurant_id"::integer = srv_restaurant_information."id"';
			$pictures 	= 'select srv_user_pictures.* from srv_user_pictures
							left join srv_user 
							on srv_user_pictures."User_Id"::integer = srv_user."id"
							where srv_user."User_name" = \''. $uname .'\'';
			$comments 	= 'select loi2.*, srv_restaurant_information."Name" from (
							select loi.*, srv_user_activity."Restaurant_Id" from (
							select srv_comment.*, now() - srv_comment."DateTime" as "QQ" from srv_comment
							left join srv_user
							on srv_comment."User_Id"::Integer = srv_user."id"
							where srv_user."User_name" = \''.$uname.'\' ) loi
							left join srv_user_activity
							on loi."Activity_id"::Integer = srv_user_activity."id") loi2
							left join srv_restaurant_information
							on loi2."Restaurant_Id"::integer = srv_restaurant_information."id"';
			$billing	= 'select * from srv_payment_information
							where "User_Id"::Integer = (select "id" from srv_user where "User_name" = \''. $uname .'\')';
    	} else if(!is_null($email)){
    		$basicinfo = $this->db->get_where('srv_user', array('Email_address'=>$email))->result_array();
    		$checkins 	= 'select loi.*, srv_restaurant_information."Name" from (select srv_user_check_ins.*, srv_user."User_name" from srv_user_check_ins
							left join srv_user
							on srv_user_check_ins."User_Id"::integer = srv_user."id"
							where srv_user."Email_address" = '. $email .') loi
							left join srv_restaurant_information
							on loi."Restaurant_id"::integer = srv_restaurant_information."id"';
			$deals 		= 'SELECT loi2.*, srv_restaurant_information."Name" FROM(SELECT loi.*, 
							srv_deals_detail."Restaurant_id", 
							srv_deals_detail."Type",
							srv_deals_detail."Dollar_Price",
							srv_deals_detail."Coin_Price"
							FROM (select * from srv_deals_purchased
							where srv_deals_purchased."User_id"::integer = (select id from srv_user where srv_user."Email_address" = '. $email .')) loi
							left join srv_deals_detail
							on loi."Deals_Detail_ID"::integer = srv_deals_detail."id") loi2
							LEFT JOIN srv_restaurant_information
							on loi2."Restaurant_id"::integer = srv_restaurant_information."id"';
			$pictures 	= 'select srv_user_pictures.* from srv_user_pictures
							left join srv_user 
							on srv_user_pictures."User_Id"::integer = srv_user."id"
							where srv_user."Email_address" = '. $email .'';
			$comments 	= 'select loi2.*, srv_restaurant_information."Name" from (
							select loi.*, srv_user_activity."Restaurant_Id" from (
							select srv_comment.*, now() - srv_comment."DateTime" as "QQ" from srv_comment
							left join srv_user
							on srv_comment."User_Id"::Integer = srv_user."id"
							where srv_user."Email_address" = '.$email.' ) loi
							left join srv_user_activity
							on loi."Activity_id"::Integer = srv_user_activity."id") loi2
							left join srv_restaurant_information
							on loi2."Restaurant_Id"::integer = srv_restaurant_information."id"';
			$billing	= 'select * from srv_payment_information
							where "User_Id"::Integer = (select "id" from srv_user where "Email_address" = '. $email .')';
    	} else {
    		$basicinfo = null;
    	}

    	$basicinfo 	= (count($basicinfo) > 0) ? $basicinfo['0'] : null;
    	
    	$totalp 	= $this->db->query($totalp);
    	$totalp 	= $totalp->result_array();
    	
    	$checkins 	= $this->db->query($checkins);
		$checkins 	= $checkins->result_array();

		$deals 	= $this->db->query($deals);
		$deals 	= $deals->result_array();

		$pictures 	= $this->db->query($pictures);
		$pictures 	= $pictures->result_array();
		
		$comments 	= $this->db->query($comments);
		$comments 	= $comments->result_array();

		$billing 	= $this->db->query($billing);
		$billing 	= $billing->result_array();

    	$result = array(
    		'basicinfo'	=> $basicinfo,
    		'totalp'	=> $totalp,
    		'checkins'	=> $checkins,
    		'deals'		=> $deals,
    		'pictures'	=> $pictures,
    		'comments'	=> $comments,
    		'billing'	=> $billing,
    	);
    	
		return $result;
    }

    public function updateMember1($id=null, $what2update ){
        $this->db->where('id', $id);
        $this->db->update('srv_user', $what2update); 
    }

    public function updatePwd($id=null, $what2update){
    	$this->db->where('id', $id);
        $this->db->update('srv_user', $what2update);
    }

    public function generateNewPwd($length=10){
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
    }













//////////////////////////////////////////////////////////////////////
}