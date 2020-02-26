<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Login_model');
		  $this->load->library("form_validation");
		 
	}
	
	public function index()
	{
		$this->form_validation->set_rules("user_email","Email","required|valid_email|trim");
        $this->form_validation->set_rules("user_password","Password","required|trim");
        
		if($this->form_validation->run()== true)
        {
			
		    $user_email= $this->input->post('user_email');
			$user_password= $this->input->post('user_password');
			$result = $this->Login_model->login($user_email,$user_password);
			if($result =='true')
			{
				$sess_data = $this->session->all_userdata();
				
			    redirect('dashboard/dashboard_view');
			}
			 else
            {
			    $this->session->set_flashdata('message','Worng Password ');
				redirect('login/index');
			}
		}		
		 $this->load->view('login');
	}

	public function logout()
	{
		
		$user_session_items = array(
			  
		  'user_id' => $row->user_id,
		  'user_name' => '',
		  'user_email' => '',
		  'user_phone' => '',
		  'user_address' => '',
		  'user_password' => '',
		  'user_role' => '',
		  'user_status' => '',
	  
	  );
	  $sess_data = $this->session->all_userdata();
	  $this->session->unset_userdata($user_session_items);
	  $this->session->sess_destroy();
	  redirect('login/index');
	  
  }
	
}
