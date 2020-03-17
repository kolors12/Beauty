<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Home_model');
		  $this->load->library("form_validation");
		 
	}
	
	public function checkout_view()
	{	$user_data = $this->session->all_userdata();
		if($user_data['user_id'] == '' ){redirect('home/index');}
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('checkout',$data);
	}
	
	
	
	
}
