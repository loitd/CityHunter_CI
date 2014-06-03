<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deals extends CI_Controller {

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
		$this->load->Model('deals_model');
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
		// get the default data
		$data = $this->deals_model->getDeals();

		// When submitted
		if( $this->input->post('allsubmit') ){
			$this->form_validation->set_rules('fromdate', 'Begin date', 'trim|required|xss_clean');
			$this->form_validation->set_rules('todate', 'End date', 'trim|required|xss_clean');
			if($this->form_validation->run()){
				$fromdate = $this->input->post('fromdate', true); 
				$todate = $this->input->post('todate', true); 
				$purchasedcheck = $this->input->post('purchasedcheck', true) == 'Purchased' ? true : false; 
				$giftedcheck = $this->input->post('giftedcheck', true) == 'Gifted' ? true : false; 
				$redeemedcheck = $this->input->post('redeemedcheck', true) == 'Redeemed' ? true : false; 
				$inactivecheck = $this->input->post('inactivecheck', true) == 'yes' ? true : false; 

				$data = $this->deals_model->getDeals($fromdate, $todate, $purchasedcheck, $giftedcheck, $redeemedcheck, $inactivecheck);

				//echo $data[0]['Description'];
				//$this->load->view('deals_result',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>$data));
				$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>$data, 'whattab'=>'allsubmit'));
			} else {
				$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>null, 'whattab'=>'allsubmit'));
			}
		} else if( $this->input->post('availablefrm') ){
			$this->form_validation->set_rules('fromdate1', 'Begin date', 'trim|required|xss_clean');
			$this->form_validation->set_rules('todate1', 'End date', 'trim|required|xss_clean');
			if($this->form_validation->run()){
				$fromdate = $this->input->post('fromdate1', true); 
				$todate = $this->input->post('todate1', true); 
				$inactivecheck = $this->input->post('inactivecheck', true) == 'yes' ? true : false; 

				$data = $this->deals_model->getDeals($fromdate, $todate, false, false, false, $inactivecheck);

				//echo $data[0]['Description'];
				//$this->load->view('deals_result',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>$data));
				$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>$data, 'whattab'=>'availablefrm'));
			} else {
				$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>null, 'whattab'=>'availablefrm'));
			}
		} else if( $this->input->post('expiredfrm') ){
			$this->form_validation->set_rules('fromdate2', 'Begin date', 'trim|required|xss_clean');
			$this->form_validation->set_rules('todate2', 'End date', 'trim|required|xss_clean');
			if($this->form_validation->run()){
				$fromdate = $this->input->post('fromdate2', true); 
				$todate = $this->input->post('todate2', true); 

				$data = $this->deals_model->getDeals($fromdate, $todate, false, false, false, false);

				//echo $data[0]['Description'];
				//$this->load->view('deals_result',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>$data));
				$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>$data, 'whattab'=>'expiredfrm'));
			} else {
				$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>null, 'whattab'=>'expiredfrm'));
			}
		} else {
			// nobody clicked. Just the page load
			$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_content', 'data'=>$data, 'whattab'=>'alltab'));
		}
	}

	public function viewdeal(){
		if (isset($_GET['id'])) { $id = (int) $this->input->get('id', TRUE); } else {
			$id = null;
		}

		$data = $this->deals_model->getDealsDetail($id);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_view_content', 'data'=>$data));		
	}

	public function editdeal(){

		if (isset($_GET['id'])) { $id = (int) $this->input->get('id', TRUE); } else {
			$id = null;
		}

		$this->form_validation->set_rules('txtdesc', 'Description', 'trim|required|xss_clean');
		$this->form_validation->set_rules('price', 'Price', 'trim|required|xss_clean');
		$this->form_validation->set_rules('coins', 'Coins', 'trim|required|xss_clean');
		$this->form_validation->set_rules('startdate', 'Start date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('enddate', 'End date', 'trim|required|xss_clean');
		
		if($this->form_validation->run()){
			$txtdesc = $this->input->post('txtdesc', TRUE);
			$price = $this->input->post('price', TRUE);
			$coins = $this->input->post('coins', TRUE);
			$startdate = $this->input->post('startdate', TRUE);
			$enddate = $this->input->post('enddate', TRUE);

			$this->deals_model->updateDeal($id, $txtdesc, $price, $coins, $startdate, $enddate);
		}

		$data = $this->deals_model->getDealsDetail($id);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'deals_edit_content', 'data'=>$data));		
	}

	public function delete(){
		
		if(!$this->session->userdata('llogincreds')){
			redirect( $this->config->base_url() . 'login', 'refresh');
		}

		$ajax 		= $this->input->get('ajax', TRUE);
		$action 	= $this->input->get('action', TRUE);
		$id		= (int) $this->input->get('id', TRUE);
		if($ajax == 1){
			switch ($action) {
				case 'deactivatedeal':
					echo $ajax . "/" . $action . "/" . $id;
					$this->deals_model->deactivateDeal($id);
					echo "<div id=\"status\">successful</div>";
					break;
								
				default:
					# code...
					break;
			}
			
		}
		
	}




//////////////////////////////////////////////////////
}