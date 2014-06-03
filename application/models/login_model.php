<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class login_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        //$this->load->library(array('database'));
        $this->load->database();
    }

    public function doLogin($u = null, $p = null){
    	$p = md5($p);
    	$this->db->select('"id", "username", "password"');
    	$this->db->from('auth_user');
    	$this->db->where('"username"', $u);
    	$this->db->where('"password"', $p);
    	$this->db->limit(1);
    	$q = $this->db->get();
    	if($q->num_rows() == 1){
    		return $q->result();
    	} else {
    		return false;
    	}
    }


////////////////////////////////////////
}