<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurants extends CI_Controller {

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
		$this->load->Model('restaurants_model');
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
		$data 		= $this->restaurants_model->getRestaurants();
		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'restaurants_content', 'data'=>$data));
	}

	public function viewrestaurant(){
		if (isset($_GET['rid'])) { $rid = (int) $this->input->get('rid', TRUE); } else {
			$rid = null;
		}

		$data = $this->restaurants_model->getRestaurantDetail($rid);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'restaurants_view_content', 'data'=>$data));		
	}
	
	public function editrestaurant(){
		if (isset($_GET['rid'])) { $rid = (int) $this->input->get('rid', TRUE); } else {
			$rid = null;
		}

		//check if there is 5 dishes or we will create news records\
		$this->restaurants_model->countNInsertDishes($rid);

		//update the basic information in tab 1
		if (isset($_POST['basicinfor'])) {
			$rname 		= $this->input->post('rname', TRUE);
			$rcusine	= $this->input->post('rcusine', TRUE);
			$rbhours	= $this->input->post('rbhours', TRUE);
			$raddr		= $this->input->post('raddr', TRUE);
			$rphoto		= $this->input->post('rphoto', TRUE);

			//processing upload files
			if (isset($_FILES['fileu'])) {
				//var_dump($_FILES['fileu']);
				if ($_FILES['fileu']['error'] > 0) {
					//var_dump($_FILES['fileu']['error']);
				} else if($_FILES['fileu']['type'] == "image/jpg" || $_FILES['fileu']['type'] == "image/jpeg" || $_FILES['fileu']['size'] < 2000) {
					$date = date('YmdHis', time());
					$wherefile = "img/uploads/" . $date . "/";
					if(file_exists($wherefile . $_FILES['fileu']['name'])){
						//echo "File: " . $_FILES['fileu']['name'] . " already exist";
					} else {
						if(!file_exists($wherefile)){
							mkdir($wherefile, 0777, true);
						}
						move_uploaded_file($_FILES['fileu']['tmp_name'], $wherefile . $_FILES['fileu']['name']);
						$rphoto = base_url() . $wherefile . $_FILES['fileu']['name'];

					}
				} else {
					//echo "The input file is not an image file";
				}
			}
			//end processing image
			$rphone		= $this->input->post('rphone', TRUE);
			$rweb		= $this->input->post('rweb', TRUE);


			$what2update = array(
				'Name'   		=> $rname, 
                'Cousine_Type'  => $rcusine, 
                'BG_Picture'    => $rphoto, 
                'Business_Hours'=> $rbhours, 
                'Address1'      => $raddr, 
                'Phone'      	=> $rphone, 
                'Web_address'   => $rweb, 
	        );
			//var_dump($what2update);
			$this->restaurants_model->updateRestaurant1($rid, $what2update);

		}

		// update restaurant owner infor
		if(isset($_POST['ownerinfor'])){
			$rofirstname		= $this->input->post('rofirstname', TRUE);
			$rolastname			= $this->input->post('rolastname', TRUE);
			$roemail			= $this->input->post('roemail', TRUE);
			$rophone			= $this->input->post('rophone', TRUE);
			

			$what2update = array(
				'O_Firstname'	=> $rofirstname,
				'O_Lastname'	=> $rolastname,
				'O_Email'		=> $roemail,
				'O_Phone'		=> $rophone,
				//'End_Date'		=> $rdend,
			);

			$this->restaurants_model->updateRestaurant1($rid, $what2update);
		}

		// update restaurant contact infor
		if(isset($_POST['contactinfor'])){
			$rcfirstname		= $this->input->post('rcfirstname', TRUE);
			$rclastname			= $this->input->post('rclastname', TRUE);
			$rcposition			= $this->input->post('rcposition', TRUE);
			$rcemail			= $this->input->post('rcemail', TRUE);
			$rcaddr1			= $this->input->post('rcaddr1', TRUE);
			$rcaddr2			= $this->input->post('rcaddr2', TRUE);
			$rccity				= $this->input->post('rccity', TRUE);
			$rcstate			= $this->input->post('rcstate', TRUE);
			$rccountry			= $this->input->post('rccountry', TRUE);
			$rczip				= $this->input->post('rczip', TRUE);
			$rcphone			= $this->input->post('rcphone', TRUE);
			

			$what2update = array(
				'C_Firstname'	=> $rcfirstname,
				'C_Lastname'	=> $rclastname,
				'C_Position'	=> $rcposition,
				'C_Email'		=> $rcemail,
				'C_Phone'		=> $rcphone,
				//'C_Password'	=> $rophone,
				'C_Addr1'		=> $rcaddr1,
				'C_Addr2'		=> $rcaddr2,
				'C_City'		=> $rccity,
				'C_State'		=> $rcstate,
				'C_Country'		=> $rccountry,
				'C_Zip'			=> $rczip,
				//'End_Date'		=> $rdend,
			);

			$this->restaurants_model->updateRestaurant1($rid, $what2update);
		}

		//update dealx
		for ($i=0; $i < 100; $i++) { 
			if(isset($_POST['rd' . $i])){
				$rdid		= $this->input->post('rdid' . $i, TRUE);
				$rddesc		= $this->input->post('rddesc' . $i, TRUE);
				$rdprice	= $this->input->post('rdprice' . $i, TRUE);
				$rdcoin		= $this->input->post('rdcoin' . $i, TRUE);
				$rdstart	= $this->input->post('rdstart' . $i, TRUE);
				$rdend		= $this->input->post('rdend' . $i, TRUE);

				$what2update = array(
					'Description'	=> $rddesc,
					'Dollar_Price'	=> $rdprice,
					'Coin_Price'	=> $rdcoin,
					'Start_Date'	=> $rdstart,
					'End_Date'		=> $rdend,
				);

				$this->restaurants_model->updateRestaurant2($rdid, $what2update);
			}

		}

		//archived dealx
		for ($i=0; $i < 100; $i++) { 
			if(isset($_POST['rda' . $i])){
				$rdid		= $this->input->post('rdid' . $i, TRUE);

				$what2update = array(
					'Status'	=> 'archived',
				);

				$this->restaurants_model->updateRestaurant2($rdid, $what2update);
			}

		}

		//update signatures
		for ($i=0; $i < 100; $i++) { 
			if(isset($_POST['rs' . $i])){
				$rsid		= $this->input->post('rsid' . $i, TRUE);
				$rsname		= $this->input->post('rsname' . $i, TRUE);
				$rsdesc		= $this->input->post('rsdesc' . $i, TRUE);
				$rsprice	= $this->input->post('rsprice' . $i, TRUE);
				

				$what2update = array(
					'Menu_name'			=> $rsname,
					'Menu_description'	=> $rsdesc,
					'Menu_prize'		=> (int)$rsprice,
				);

				$this->restaurants_model->updateRestaurant3((int)$rsid, $what2update);
			}

		}		



		$data = $this->restaurants_model->getRestaurantDetail($rid);

		$this->load->view('layout',array('user_login'=>$this->user_login, 'what'=>'restaurants_edit_content', 'data'=>$data));		
	}

	public function delete(){
		
		if(!$this->session->userdata('llogincreds')){
			redirect( $this->config->base_url() . 'login', 'refresh');
		}

		$ajax 		= $this->input->get('ajax', TRUE);
		$action 	= $this->input->get('action', TRUE);
		$uid		= (int) $this->input->get('rid', TRUE);
		$cmtid		= (int) $this->input->get('cmtid', TRUE);
		$notes		= $this->input->get('notes', TRUE); //get the notes
		if($ajax == 1){
			switch ($action) {
				case 'deleterestaurant':
					echo $ajax . "/" . $action . "/" . $uid;
					$this->restaurants_model->deleteRestaurant($uid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'deletecmt':
					echo $ajax . "/" . $action . "/" . $cmtid;
					$this->restaurants_model->deleteComment($cmtid);
					echo "<div id=\"status\">successful</div>";
					break;
				case 'savesresnote':
					echo $ajax . "/" . $action . "/" . $notes;
					$this->restaurants_model->updateRestaurant1($uid, array('Note' => $notes));
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