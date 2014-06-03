<?php 
	$this->load->view('header');
	$this->load->view('sidebar');
	$this->load->view($what, array('data'=>$data));
	$this->load->view('footer');
?>

