<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class dashboard_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        //$this->load->library(array('database'));
        $this->load->database();
    }

    public function getTotalMembers(){
    	$result = $this->db->count_all('srv_user');
		return $result;
    }

    public function getTotalNewMembers(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_user WHERE "Date_signup" IS NOT NULL 
			AND (extract(DAY FROM "Date_signup") = extract(DAY FROM now()))
			AND (extract(MONTH FROM "Date_signup") = extract(MONTH FROM now()))
			AND (extract(YEAR FROM "Date_signup") = extract(YEAR FROM now()))';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    public function getTotalRestaurants(){
    	$result = $this->db->count_all('srv_restaurant_information');
		return $result;
    }

    public function getTotalUpdates(){
    	$result = $this->db->count_all('srv_restaurant_updates');
		return $result;
    }

    public function getTotalNewUpdates(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_restaurant_updates WHERE "created_time" IS NOT NULL 
			AND (extract(DAY FROM "created_time") = extract(DAY FROM now()))
			AND (extract(MONTH FROM "created_time") = extract(MONTH FROM now()))
			AND (extract(YEAR FROM "created_time") = extract(YEAR FROM now()))';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    public function getNewProMembers(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_restaurant_information WHERE "Created_Time" IS NOT NULL 
			AND (extract(DAY FROM "Created_Time") = extract(DAY FROM now()))
			AND (extract(MONTH FROM "Created_Time") = extract(MONTH FROM now()))
			AND (extract(YEAR FROM "Created_Time") = extract(YEAR FROM now()))';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    public function getTotalSales(){
    	$q = "SELECT SUM(\"Dollar_Price\") as sum FROM srv_user_activity 
				WHERE \"User_action\" = 'Purchased a deal' ";
		$r = $this->db->query($q);
		$r = $r->result_array();
		//print_r($r);
		$r = number_format($r[0]['sum'], 2, '.', ',');
		return $r;
    }

    public function getTotalNewSales(){
    	$q = "SELECT SUM(\"Dollar_Price\") as sum from srv_user_activity
			WHERE \"User_action\" = 'Purchased a deal'
			AND (extract(DAY FROM \"Date_time\") = extract(DAY FROM now()))
			AND (extract(MONTH FROM \"Date_time\") = extract(MONTH FROM now()))
			AND (extract(YEAR FROM \"Date_time\") = extract(YEAR FROM now()))";
		$r = $this->db->query($q);
		$r = $r->result_array();
		//print_r($r);
		$r = number_format($r[0]['sum'], 2, '.', ',');
		return $r;
    }

    //STATS functions

    public function getYesterdayNewMembers(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_user WHERE "Date_signup" IS NOT NULL 
			AND (extract(DAY FROM "Date_signup") = extract(DAY FROM TIMESTAMP \'yesterday\'))
			AND (extract(MONTH FROM "Date_signup") = extract(MONTH FROM TIMESTAMP \'yesterday\'))
			AND (extract(YEAR FROM "Date_signup") = extract(YEAR FROM TIMESTAMP \'yesterday\'))';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    //last 7 days
    public function getThisWeekNewMembers(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_user WHERE "Date_signup" IS NOT NULL 
			AND "Date_signup" > CURRENT_DATE - INTERVAL \'7 days\'
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    public function getLastWeekNewMembers(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_user WHERE "Date_signup" IS NOT NULL 
			AND "Date_signup" > CURRENT_DATE - INTERVAL \'14 days\' 
			AND "Date_signup" <= CURRENT_DATE - INTERVAL \'7 days\' 
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    //last 7 days
    public function getThisMonthNewMembers(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_user WHERE "Date_signup" IS NOT NULL 
			AND "Date_signup" > CURRENT_DATE - INTERVAL \'30 days\'
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    public function getLastMonthNewMembers(){
    	$query = 'SELECT COUNT(*) AS c FROM srv_user WHERE "Date_signup" IS NOT NULL 
			AND "Date_signup" > CURRENT_DATE - INTERVAL \'60 days\' 
			AND "Date_signup" <= CURRENT_DATE - INTERVAL \'30 days\' 
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    //all in one
    public function getNewDealsStats($from = 1, $to = 0){
    	$query = 'SELECT COUNT(*) AS c FROM srv_deals_detail WHERE "Start_Date" IS NOT NULL 
			AND "Start_Date" > CURRENT_DATE - INTERVAL \'' . $from .'days\' 
			AND "Start_Date" <= CURRENT_DATE - INTERVAL \''. $to .' days\' 
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    //all in one
    public function getNewCheckinsStats($from = 1, $to = 0){
    	$query = 'SELECT COUNT(*) AS c FROM srv_res_check_ins WHERE "Date_Time" IS NOT NULL 
			AND "Date_Time" > CURRENT_DATE - INTERVAL \'' . $from .'days\' 
			AND "Date_Time" <= CURRENT_DATE - INTERVAL \''. $to .' days\' 
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    //all in one
    public function getNewPhotosStats($from = 1, $to = 0){
    	$query = 'SELECT COUNT(*) AS c FROM srv_image_upload WHERE "DateTime" IS NOT NULL 
			AND "DateTime" > CURRENT_DATE - INTERVAL \'' . $from .'days\' 
			AND "DateTime" <= CURRENT_DATE - INTERVAL \''. $to .' days\' 
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    public function getNumNewSalesStats($from = 1, $to = 0){
    	$q = 'SELECT COUNT(*) as c from srv_user_activity
			WHERE "User_action" = \'Purchased a deal\'
			AND "Date_time" > CURRENT_DATE - INTERVAL \'' . $from .'days\' 
			AND "Date_time" <= CURRENT_DATE - INTERVAL \''. $to .' days\'';
		$r = $this->db->query($q);
		$r = $r->result_array();
		//print_r($r);
		$r = $r[0]['c'];
		return $r;
    }

    //all in one
    public function getNewCommentsStats($from = 1, $to = 0){
    	$query = 'SELECT COUNT(*) AS c FROM srv_comment WHERE "DateTime" IS NOT NULL 
			AND "DateTime" > CURRENT_DATE - INTERVAL \'' . $from .'days\' 
			AND "DateTime" <= CURRENT_DATE - INTERVAL \''. $to .' days\' 
			';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return (int) $result[0]['c'];
    }

    // for updates
    public function getRestaurantUpdates(){
    	$query = 'SELECT srv_restaurant_updates.*, srv_restaurant_information."Name" FROM srv_restaurant_updates 
				left join srv_restaurant_information
				on srv_restaurant_updates."restaurant_id" = srv_restaurant_information."id"
				ORDER BY created_time desc';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
    }

    public function getAlertNotifications(){
    	$query = 'SELECT * FROM srv_notifications 
				ORDER BY id desc';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
    }

    public function setAlertNotification($id=0){
    	// $this->db->where('id', $id);
    	$query = 'UPDATE srv_notifications set "status" = CASE WHEN ("status" = true) THEN false ELSE true END';
		$result = $this->db->query($query);
    	// $this->db->update('srv_notifications', array('status' => 'case when ("status" = true) then false else true end')); 
    }

















////////////////////////////////////////////////////////////////
}