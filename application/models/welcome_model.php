<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class welcome_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        //$this->load->library(array('database'));
        $this->load->database();
    }

    public function t(){
    	$query = "
			select * from srv_user
			";

		$result = $this->db->query($query);
		$result = $result->result_array();
		print_r($result);
		return $result;
    }
}