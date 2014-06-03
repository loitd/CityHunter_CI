<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class staffs_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getStaff()
    {
    	//
    	return $this->db->get('srv_staff')->result_array();
    }

    public function getStaffDetail($id=null)
    {
    	//
    	$basic 		= $this->db->get_where('srv_staff', array('id' => $id))->result_array();

    	//get partner restaurant
    	$partner 	= 'select * from
						(select "id" as "LOIID","Restaurant_id" from srv_staff_restaurant
						where "Staff_Id" = '.$id.') loi
						join srv_restaurant_information 
						on loi."Restaurant_id" = srv_restaurant_information."id"
						order by loi."LOIID" asc';

		$partner = $this->db->query($partner);
		$partner = $partner->result_array();
   	
    	return array(
    		'basic'		=> $basic,
    		'partner'	=> $partner,
    	);
    }

    public function deactivate($cr='active', $id=null)
    {
    	if($cr == 'active'){
    		//do hide things
    		$this->db->where('id', $id);
    		$this->db->update('srv_staff', array('Status' => 'inactive')); 
    	} else {
    		//do unhide things
    		$this->db->where('id', $id);
    		$this->db->update('srv_staff', array('Status' => 'active')); 
    	} 
    }

    public function updatestaff($id=null, $what2update)
    {
    	$this->db->where('id', $id);
        $this->db->update('srv_staff', $what2update); 
    }

    public function getnextid()
    {
    	$this->db->select_max('id');
		$r =  $this->db->get('srv_staff')->result_array();
		return $r[0]['id']+1;
    }

    public function addstaff($what2add)
    {
    	$this->db->insert('srv_staff', $what2add); 
    }

    public function deleteStaff($uid)
    {
    	$this->db->delete('srv_staff', array('id' => $uid)); 
    }

    public function resetpassword($uid)
    {
    	$this->db->where('id', $uid);
        $this->db->update('srv_staff', array('Password'=>'x123456789')); 
    }


////////////////////////////////////////
}