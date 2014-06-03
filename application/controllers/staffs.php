<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staffs extends CI_Controller {

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
		$this->load->Model('staffs_model');
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
		$data = $this->staffs_model->getStaff(); 
		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'staffs_content', 'data'=>$data));
	}

	public function viewstaff()
	{
		if (isset($_GET['id'])) { $id = (int) $this->input->get('id', TRUE); } else {
			$id = null;
		}

		$data = $this->staffs_model->getStaffDetail($id);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'staffs_view_content', 'data'=>$data));
	}

	public function editstaff()
	{
		if (isset($_GET['id'])) { $id = (int) $this->input->get('id', TRUE); } else {
			$id = null;
		}

		if (isset($_POST['staffupdate'])) {
			$internalID 		= $this->input->post('internalID', TRUE);
			$firstname 			= $this->input->post('firstname', TRUE);
			$lastname 			= $this->input->post('lastname', TRUE);
			$email 				= $this->input->post('email', TRUE);
			$phone 				= $this->input->post('phone', TRUE);

			$what2update = array(
				'Internal_ID' 	=> $internalID,
				'First_Name' 	=> $firstname,
				'Last_Name' 	=> $lastname,
				'Email' 		=> $email,
				'Phone' 		=> $phone,

			);

			$this->staffs_model->updatestaff($id, $what2update);
		}

		$data = $this->staffs_model->getStaffDetail($id);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'staffs_edit_content', 'data'=>$data));
	}

	public function addstaff()
	{
		$nextid = $this->staffs_model->getnextid();

		$this->form_validation->set_rules('internalID', 'Internal ID', 'trim|required|xss_clean|is_unique[srv_staff.Internal_ID]');
		$this->form_validation->set_rules('firstname', 'First name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Last name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|email|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'matches[password_confirm]|required|min_length[6]|max_length[15]|xss_clean');
		$this->form_validation->set_rules('password_confirm', 'Password Confirm', 'required|xss_clean');
		
		if($this->form_validation->run()){
			$internalID 		= $this->input->post('internalID', TRUE);
			$firstname 			= $this->input->post('firstname', TRUE);
			$lastname 			= $this->input->post('lastname', TRUE);
			$email 				= $this->input->post('email', TRUE);
			$password 			= $this->input->post('password', TRUE);
			$phone 				= $this->input->post('phone', TRUE);

			$what2add = array(
				'Internal_ID' 	=> $internalID,
				'First_Name' 	=> $firstname,
				'Last_Name' 	=> $lastname,
				'Email' 		=> $email,
				'Password' 		=> $password,
				'Phone' 		=> $phone,
			);

			$this->staffs_model->addstaff($what2add);

			redirect($this->config->site_url() . "/staffs");
		} else {
			$data = array( 'nextid' => $nextid, );
			$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'staffs_add_content', 'data'=>$data));
		}
	
	}

	public function delete()
	{
		if(!$this->session->userdata('llogincreds')){
			redirect( $this->config->base_url() . 'login', 'refresh');
		}

		$ajax 		= $this->input->get('ajax', TRUE);
		$action 	= $this->input->get('action', TRUE);
		$uid		= (int) $this->input->get('uid', TRUE);
		$cr			= $this->input->get('cr', TRUE); //current status of staff
		$bid		= (int) $this->input->get('bid', TRUE);
		$notes		= $this->input->get('notes', TRUE); //get the notes
		if($ajax == 1){
			switch ($action) {
				case 'deletestaff':
					echo $ajax . "/" . $action . "/" . $uid;
					$this->staffs_model->deleteStaff($uid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'deactivatestaff':
					echo $ajax . "/" . $action . "/" . $cr;
					$this->staffs_model->deactivate($cr, $uid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'resetpassword':
					echo $ajax . "/" . $action . "/" . $cr;
					$this->staffs_model->resetpassword($uid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'savestaffnote':
					echo $ajax . "/" . $action . "/" . $notes;
					$this->staffs_model->updatestaff($uid, array('Notes' => $notes));
					echo "<div id=\"status\">successful</div>";
					break;
				
				default:
					# code...
					break;
			}
			
		}
	}




	////////////////////////////////////////////////
}