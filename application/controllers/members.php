<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

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
		$this->load->Model('members_model');
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
		$data 		= $this->members_model->getMembers();
		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'members_content', 'data'=>$data));
	}

	public function delete(){
		
		if(!$this->session->userdata('llogincreds')){
			redirect( $this->config->base_url() . 'login', 'refresh');
		}

		$ajax 		= $this->input->get('ajax', TRUE);
		$action 	= $this->input->get('action', TRUE);
		$uid		= (int) $this->input->get('uid', TRUE);
		$cmtid		= (int) $this->input->get('cmtid', TRUE);
		$bid		= (int) $this->input->get('bid', TRUE);
		if($ajax == 1){
			switch ($action) {
				case 'deletemember':
					echo $ajax . "/" . $action . "/" . $uid;
					$this->members_model->deleteMember($uid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'deletecmt':
					echo $ajax . "/" . $action . "/" . $cmtid;
					$this->members_model->deleteComment($cmtid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'deletebilling':
					echo $ajax . "/" . $action . "/" . $bid;
					$this->members_model->deleteBilling($bid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'deleteimage':
					echo $ajax . "/" . $action . "/" . $bid;
					$this->members_model->deleteUserImage($bid);
					echo "<div id=\"status\">successful</div>";
					break;

				default:
					# code...
					break;
			}
			
		}
		
	}

	public function viewmember(){
		if (isset($_GET['uid'])) { $uid = (int) $this->input->get('uid', TRUE); } else {
			$uid = null;
		}

		if (isset($_GET['uname'])) { 
			$uname = $this->input->get('uname', TRUE); 
			$uname = ($uname == '') ? '-' : $uname;
		} else {
			$uname = null;
		}

		if (isset($_GET['email'])) { 
			$email = $this->input->get('email', TRUE); 
			$email = ($email == '') ? '-' : $email;
		} else {
			$email = null;
		}
		
		$data = $this->members_model->getMemberDetail($uid, $uname, $email);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'members_view_content', 'data'=>$data));		
	}


	public function editmember(){
		if (isset($_GET['uid'])) { $uid = (int) $this->input->get('uid', TRUE); } else {
			$uid = null;
		}

		if (isset($_GET['uname'])) { 
			$uname = $this->input->get('uname', TRUE); 
			$uname = ($uname == '') ? '-' : $uname;
		} else {
			$uname = null;
		}

		if (isset($_GET['email'])) { 
			$email = $this->input->get('email', TRUE); 
			$email = ($email == '') ? '-' : $email;
		} else {
			$email = null;
		}

		//update the basic information in tab 1
		if (isset($_POST['basicinfor'])) {
			$uname 		= $this->input->post('uname', TRUE);
			$ufname 	= $this->input->post('ufname', TRUE);
			$ulname 	= $this->input->post('ulname', TRUE);
			$uemail 	= $this->input->post('uemail', TRUE);
			$uref 		= $this->input->post('uref', TRUE);
			$ufb 		= $this->input->post('ufb', TRUE);
			$utw 		= $this->input->post('utw', TRUE);
			$uaddr 		= $this->input->post('uaddr', TRUE);
			$ucity 		= $this->input->post('ucity', TRUE);
			$ustate 	= $this->input->post('ustate', TRUE);
			$ucountry 	= $this->input->post('ucountry', TRUE);
			$uzip 		= $this->input->post('uzip', TRUE);
			$uphone 	= $this->input->post('uphone', TRUE);
			$ubd 		= $this->input->post('ubd', TRUE);
			$ugender 	= $this->input->post('ugender', TRUE);
			$uphoto 	= $this->input->post('uphoto', TRUE);
			
			//processing upload files

			$allowedtypes = array("image/jpeg", "image/gif", "image/jpg", "image/png", "image/bmp");

			if (isset($_FILES['fileu'])) {
				//var_dump($_FILES['fileu']);
				if ($_FILES['fileu']['error'] > 0) {
					//var_dump($_FILES['fileu']['error']);
				} else if( in_array($_FILES['fileu']['type'], $allowedtypes) || $_FILES['fileu']['size'] < 2000) {
					$date = date('YmdHis', time());
					$wherefile = "img/uploads/" . $date . "/";
					if(file_exists($wherefile . $_FILES['fileu']['name'])){
						//echo "File: " . $_FILES['fileu']['name'] . " already exist";
					} else {
						if(!file_exists($wherefile)){
							mkdir($wherefile, 0777, true);
						}
						move_uploaded_file($_FILES['fileu']['tmp_name'], $wherefile . $_FILES['fileu']['name']);
						$uphoto = base_url() . $wherefile . $_FILES['fileu']['name'];

					}
				} else {
					//echo "The input file is not an image file";
				}
			} 
			//end processing image

			$what2update = array(
				'User_name'		=> $uname, 
                'First_name'  	=> $ufname, 
                'Last_name'    	=> $ulname, 
                'Gender'		=> $ugender, 
                'Date_Of_Birth' => $ubd, 
                'Address'      	=> $uaddr, 
                'City'   		=> $ucity, 
                'State'   		=> $ustate, 
                'Country'   	=> $ucountry, 
                'Zip'   		=> $uzip, 
                'Email_address' => $uemail, 
                'Facebook_id'   => $ufb, 
                'Twitter_id'   	=> $utw, 
                'Phone_number'  => $uphone, 
                'Referred_By_Username'   => $uref, 
                'Profile_picture'   	=> $uphoto, 
                
	        );
			//var_dump($what2update);
			$this->members_model->updateMember1($uid, $what2update);
		}






		$data = $this->members_model->getMemberDetail($uid, $uname, $email);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'members_edit_content', 'data'=>$data));
	}

	public function resetpwd(){
		if (isset($_GET['uid'])) { $uid = (int) $this->input->get('uid', TRUE); } else {
			$uid = null;
		}

		if (isset($_GET['email'])) { 
			$email = $this->input->get('email', TRUE); 
			$email = ($email == '') ? MAIL_SMTP_USER : $email; //send to admin if not found
		} else {
			$email = null;
		}

		//generate new password
		$newpwd = $this->members_model->generateNewPwd();

		//update into DBs
		$what2update = array(
				'Password'		=> md5($newpwd), );

		$this->members_model->updatePwd($uid, $what2update);

		//send email to users
		$configs = array(
	        'protocol'	=>'smtp',
	        'smtp_host'	=>MAIL_SMTP_SERVER,
	        'smtp_user'	=>MAIL_SMTP_USER,
	        'smtp_pass'	=>MAIL_SMTP_PASSWORD,
	        'smtp_port'	=>MAIL_SMTP_PORT,
	        'mailtype'	=>'html',
	        'charset'	=>'utf-8',
	        'crlf'		=>'\n',
        );
		$this->load->library('email', $configs);
		$this->email->from('admin@cityhunter.com','City Hunter Admin');
		$this->email->to($email);
		$this->email->subject("Your new reset password");
		$this->email->message(MAIL_RESETPWD_CONTENT . $newpwd);
		echo $newpwd;
		$this->email->send();

		return "<div id=\"status\">successful</div>";

	}

/////////////////////////////////////////
}