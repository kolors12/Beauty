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
		    $data['first_name'] = $this->input->post('name');
			$data['email_id'] = $this->input->post('email');
			$data['mobile'] = $this->input->post('mobile');
			$data['password'] = $this->input->post('pass');
			$result = $this->Login_model->insert_user($data);
			if($result == 'true')
			{
				  echo json_encode(array(
					"statusCode"=>200
				));
			
			} else {
				echo json_encode(array(
					"statusCode"=>201
				));
			}
		 
	 }


	public function user_login()
	{
		
            $email_id= $this->input->post('email_id');
			$password= $this->input->post('password');
			$result = $this->Login_model->user_login($email_id,$password);
			if($result =='1')
			{
				$user_data = $this->session->all_userdata();
				if($user_data){
					echo "1";
				}else{
					echo "0";
				}
				 
			} else if ($result == '2'){
				echo "Worng Password"; 
			}else{
				echo "Login Failed Please Try Again..!";
			}
	
	}


	public function logout()
	{
		
		$user_session_items = array(
			  
		  'user_id' => $row->user_id,
		  'first_name' => '',
		  'middle_name' => '',
		  'last_name' => '',
		  'mobile' => '',
		  'email_id' => '',
		  'city' => '',
		  'user_status' => '',
		  'password' => '', 
		  'address1' => '',
	  
	  );
		$user_data = $this->session->all_userdata();
	  $this->session->unset_userdata($user_session_items);
	  $this->session->sess_destroy();
	  redirect('home/index');
	  
  }


	public function user_account()
	{
		$user_data = $this->session->all_userdata();
		if($user_data['user_id'] == '' ){redirect('home/index');}
	
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('user_account',$data);
	}

}
