<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class photos_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function photo_count($fromdate=null, $todate=null){
    	$this->db->where('DateTime >=', $fromdate);
    	$this->db->where('DateTime <=', $todate);
    	$this->db->from('srv_image_upload');
    	return $this->db->count_all_results();
    }

    public function get_photos($fromdate, $todate, $period = 'daily'){
    	if($period == 'daily'){
    		$q = 'select to_char("DateTime", \'YYYY/MM/DD\') as "DT", "Picture"
				from srv_image_upload order by "DT" desc';	
    	} else if($period == 'monthly') {
    		$q = 'select to_char("DateTime", \'YYYY/MM\') as "DT", "Picture"
				from srv_image_upload order by "DT" desc';
    	} else if($period == 'weekly'){
    		$q = 'select (EXTRACT(YEAR FROM "DateTime")::text || \' week \' ||
				EXTRACT(WEEK FROM "DateTime")::text) as "DT" , "Picture"
				from srv_image_upload';
    	}
    	
    	$q 	= $this->db->query($q);
    	$q 	= $q->result_array();
    	return $q;
    }

}