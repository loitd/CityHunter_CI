<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	function __construct()
	{
		parent::__construct();
		session_start(); //need to call it to access session. Just one allover
		$this->load->Model(array('login_model'));
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('loitd_com', 'url'));
	}

	public function index(){
		//validate the submitted form
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		if(!$this->form_validation->run()){
			$this->load->view('login_view',array('what'=>'members_content', 'data'=>''));
		} else {
			redirect('dashboard','refresh');
		}

	}

	public function logout(){
		$this->session->unset_userdata('llogincreds');
		session_destroy();
		redirect( $this->config->site_url() . '/login', 'refresh');
	}

	function check_database($password){
		$username = $this->input->post('username', TRUE);
		$login = $this->login_model->doLogin($username, $password);
		if($login){
			//get the first
			$sess = array(
				'id' 			=> $login[0]->id,
				'user_login'	=> $login[0]->username,
			);
			//into session
			$this->session->set_userdata('llogincreds', $sess);
			return true;
		} else {
			$this->form_validation->set_message('check_database', 'Invalid user or password');
			return false;
		}
	}



////////////////////////////////////////////////////////////////////
}