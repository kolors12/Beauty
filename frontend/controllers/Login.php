<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Home_model');
		  $this->load->model('Login_model');
		  $this->load->library("form_validation");
		 
	}
	
	public function login_register()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('login',$data);
	}
	
	
	 public function insert_user()
	 {
			$data['first_name']=$this->input->post('name');
			$data['email_id']=$this->input->post('email');
			$data['mobile']=$this->input->post('phone');
			$data['password']=$this->input->post('password');
			$this->Login_model->insert_user($data);	
			echo json_encode(array(
				"statusCode"=>200
			));
		
	}
	
	
}
