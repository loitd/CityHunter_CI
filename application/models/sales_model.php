<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class sales_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSales($fromdate = "2/2/2012", $todate = "3/3/2014", $hiddencheck=true)
    {
    	if(is_null($fromdate) && is_null($todate))
    	{
    		$query = 'select loi1.*, srv_user."User_name" from
				(select loi.*, srv_restaurant_information."Name" from 
				(select * from srv_user_activity) loi
				left join srv_restaurant_information
				on loi."Restaurant_Id"::Integer = srv_restaurant_information."id") loi1
				left join srv_user
				on loi1."user_id"::Integer = srv_user."id"';

    	} else if($hiddencheck) //if included hidden sales
    	{
    		$query = 'select loi1.*, srv_user."User_name" from
				(select loi.*, srv_restaurant_information."Name" from 
				(select * from srv_user_activity
				where "Date_time" >= \''. $fromdate .'\' and "Date_time" < \''. $todate .'\') loi
				left join srv_restaurant_information
				on loi."Restaurant_Id"::Integer = srv_restaurant_information."id") loi1
				left join srv_user
				on loi1."user_id"::Integer = srv_user."id"';
    	} else {
    		$query = 'select loi1.*, srv_user."User_name" from
				(select loi.*, srv_restaurant_information."Name" from 
				(select * from srv_user_activity
				where "Date_time" > \''.$fromdate.'\' and "Date_time" < \''.$todate.'\' and "ishidden" = FALSE) loi
				left join srv_restaurant_information
				on loi."Restaurant_Id"::Integer = srv_restaurant_information."id") loi1
				left join srv_user
				on loi1."user_id"::Integer = srv_user."id"';	
    	}
    	$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
		
    }

    public function hideunhide($hide = true, $id = 0)
    {
    	if($hide){
    		//do hide things
    		$this->db->where('id', $id);
    		$this->db->update('srv_user_activity', array('ishidden' => 'TRUE')); 
    	} else {
    		//do unhide things
    		$this->db->where('id', $id);
    		$this->db->update('srv_user_activity', array('ishidden' => 'FALSE')); 
    	}
    }


//////////////////////////////////////////////
}