<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * @author Tran Duc Loi @ loitd.com
	 * @version 1.0
	 * @since 2014
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->Model('dashboard_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('loitd_com', 'url'));

		if(!$this->session->userdata('llogincreds')){
			redirect( $this->config->site_url() . '/login', 'refresh');
			// redirect( site_url() . '/login', 'refresh');
		}
	}

	public function update(){
		// $id = $this->input->get('id', TRUE);
		$this->dashboard_model->setAlertNotification();
	}

	public function index()
	{
		$user_login				= $this->session->userdata('llogincreds');
		$user_login				= $user_login['user_login'];
		
		$data = array(
			'totalmembers' 		=> $this->dashboard_model->getTotalMembers(),
			'totalnewmembers' 	=> $this->dashboard_model->getTotalNewMembers(),
			'totalrestaurants' 	=> $this->dashboard_model->getTotalRestaurants(),
			'newpromembers' 	=> $this->dashboard_model->getNewProMembers(), //new restaurants
			'totalsales' 		=> $this->dashboard_model->getTotalSales(),
			'totalnewsales' 	=> $this->dashboard_model->getTotalNewSales(),
			'totalupdates' 		=> $this->dashboard_model->getTotalUpdates(),
			'totalnewupdates' 	=> $this->dashboard_model->getTotalNewUpdates(),
			
			'yesterdaynewmembers' 	=> $this->dashboard_model->getYesterdayNewMembers(),
			'thisweeknewmembers' 	=> $this->dashboard_model->getThisWeekNewMembers(),
			'lastweeknewmembers' 	=> $this->dashboard_model->getLastWeekNewMembers(),
			'thismonthnewmembers' 	=> $this->dashboard_model->getThisMonthNewMembers(),
			'lastmonthnewmembers' 	=> $this->dashboard_model->getLastMonthNewMembers(),
			
			'todaynewdeals' 		=> $this->dashboard_model->getNewDealsStats(),
			'yesterdaynewdeals' 	=> $this->dashboard_model->getNewDealsStats(2,1),
			'thisweeknewdeals' 		=> $this->dashboard_model->getNewDealsStats(7,0),
			'lastweeknewdeals' 		=> $this->dashboard_model->getNewDealsStats(14,7),
			'thismonthnewdeals' 	=> $this->dashboard_model->getNewDealsStats(30,0),
			'lastmonthnewdeals' 	=> $this->dashboard_model->getNewDealsStats(60,30),

			'todaynewcheckins' 		=> $this->dashboard_model->getNewCheckinsStats(),
			'yesterdaynewcheckins' 	=> $this->dashboard_model->getNewCheckinsStats(2,1),
			'thisweeknewcheckins' 	=> $this->dashboard_model->getNewCheckinsStats(7,0),
			'lastweeknewcheckins' 	=> $this->dashboard_model->getNewCheckinsStats(14,7),
			'thismonthnewcheckins' 	=> $this->dashboard_model->getNewCheckinsStats(30,0),
			'lastmonthnewcheckins' 	=> $this->dashboard_model->getNewCheckinsStats(60,30),
			
			'todaynewphotos' 		=> $this->dashboard_model->getNewPhotosStats(),
			'yesterdaynewphotos' 	=> $this->dashboard_model->getNewPhotosStats(2,1),
			'thisweeknewphotos' 	=> $this->dashboard_model->getNewPhotosStats(7,0),
			'lastweeknewphotos' 	=> $this->dashboard_model->getNewPhotosStats(14,7),
			'thismonthnewphotos' 	=> $this->dashboard_model->getNewPhotosStats(30,0),
			'lastmonthnewphotos' 	=> $this->dashboard_model->getNewPhotosStats(60,30),

			'todaynewcomments' 		=> $this->dashboard_model->getNewCommentsStats(),
			'yesterdaynewcomments' 	=> $this->dashboard_model->getNewCommentsStats(2,1),
			'thisweeknewcomments' 	=> $this->dashboard_model->getNewCommentsStats(7,0),
			'lastweeknewcomments' 	=> $this->dashboard_model->getNewCommentsStats(14,7),
			'thismonthnewcomments' 	=> $this->dashboard_model->getNewCommentsStats(30,0),
			'lastmonthnewcomments' 	=> $this->dashboard_model->getNewCommentsStats(60,30),

			'todaynewsales' 		=> $this->dashboard_model->getNumNewSalesStats(),
			'yesterdaynewsales' 	=> $this->dashboard_model->getNumNewSalesStats(2,1),
			'thisweeknewsales'	 	=> $this->dashboard_model->getNumNewSalesStats(7,0),
			'lastweeknewsales'	 	=> $this->dashboard_model->getNumNewSalesStats(14,7),
			'thismonthnewsales' 	=> $this->dashboard_model->getNumNewSalesStats(30,0),
			'lastmonthnewsales' 	=> $this->dashboard_model->getNumNewSalesStats(60,30),

			'restaurantUpdates'		=> $this->dashboard_model->getRestaurantUpdates(),
			'alertNotifications'	=> $this->dashboard_model->getAlertNotifications(),

		);

		$this->load->view('layout',array('user_login'=>$user_login ,'what'=>'dashboard_content', 'data'=>$data));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */