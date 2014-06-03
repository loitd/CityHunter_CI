<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller {

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
		$this->load->Model('sales_model');
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
		/*
		if(isset($_GET['salebtn'])){
			$this->form_validation->set_rules('fromdate', 'Begin date', 'trim|required|xss_clean');
			$this->form_validation->set_rules('todate', 'End date', 'trim|required|xss_clean');
			if($this->form_validation->run()){
				$fromdate 		= $this->input->get('fromdate', true); 
				$todate 		= $this->input->get('todate', true); 
				$hiddencheck 	= $this->input->get('hiddencheck', true) == 'yes' ? true : false;
				$data 			= $this->sales_model->getSales($fromdate, $todate, $hiddencheck); 
			} else {
				// validate fail
				$data = '';
			}
		} else {
			// no button clicked
			$data = '';
		}
		*/
		$fromdate 		= $this->input->get('fromdate', true); 
		$todate 		= $this->input->get('todate', true); 
		$hiddencheck 	= $this->input->get('hiddencheck', true) == 'yes' ? true : false;
		if($fromdate && $todate && $hiddencheck){
			$data 		= $this->sales_model->getSales($fromdate, $todate, $hiddencheck); 
		} else {
			$data 		= $this->sales_model->getSales();
		}
		

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'sales_content', 'data'=>$data));
		
	}

	public function update(){
		if(!$this->session->userdata('llogincreds')){
			redirect( $this->config->base_url() . 'login', 'refresh');
		}

		$ajax 		= $this->input->get('ajax', TRUE);
		$action 	= $this->input->get('action', TRUE);
		$sid		= (int) $this->input->get('sid', TRUE);

		if($ajax == 1){
			switch ($action) {
				case 'hide':
					echo $ajax . "/" . $action . "/" . $sid;
					$this->sales_model->hideunhide(true, $sid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'unhide':
					echo $ajax . "/" . $action . "/" . $sid;
					$this->sales_model->hideunhide(false, $sid);
					echo "<div id=\"status\">successful</div>";
					break;
				
				default:
					# code...
					break;
			}
			
		}
	}


/////////////////////////////////////////////
}