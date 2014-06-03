<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * @author Tran Duc Loi @ loitd.com
	 * @version 1.0
	 * @since 2014
	 */
	private $user_login; 

	function __construct()
	{
		parent::__construct();
		$this->load->Model('photos_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('loitd_com', 'url'));

		if(!$this->session->userdata('llogincreds')){
			redirect( $this->config->site_url() . '/login', 'refresh');
		} else {
			$this->user_login = $this->session->userdata('llogincreds');
			$this->user_login = $this->user_login['user_login'];
		}
	}

	public function index()
	{
		$this->form_validation->set_rules('fromdate', 'Begin date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('todate', 'End date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('groupby', 'Group by', 'trim|required|xss_clean');
		if($this->form_validation->run()){
			$fromdate = $this->input->post('fromdate', TRUE);
			$todate = $this->input->post('todate', TRUE);
			$groupby = $this->input->post('groupby', TRUE);

			//now get data from DB
			$data = ( $this->photos_model->get_photos($fromdate, $todate, $groupby) ); 
			$data = $this->group_daily($data);
		} else {
			$data 		= '';	
		}
		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'photos_content', 'data'=>$data));
	}


	function group_daily($darray){
		//echo count($darray);
		if(count($darray) < 1){
			return null;
		} else if(count($darray) == 1){
			return array($darray[0]['DT']=>array($darray[0]['Picture']));
		} else {
			$cur = $next = $darray[0]['DT'];
			$ret[$cur] = array($darray[0]['Picture']);
			for ($i=1; $i < count($darray); $i++) { 
				$next = $darray[$i]['DT'];
				if($next == $cur){
					array_push($ret[$cur], $darray[$i]['Picture']);
				} else {
					$ret[$next] = array($darray[$i]['Picture']);
				}
				$cur = $next;
			}
			return $ret;
		}
		
	}

	

	///////////////////////////////////////
}