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
		$this->form_validation->set_rules("email_id","Email","required|valid_email|trim");
        $this->form_validation->set_rules("password","Password","required|trim");
        
		if($this->form_validation->run()== true)
        {
			
		    $email_id= $this->input->post('email_id');
			$password= $this->input->post('password');
			$result = $this->Login_model->login($email_id,$password);
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
			  
		  'admin_id' => $row->admin_id,
		  'name' => '',
		  'email_id' => '',
		  'mobile' => '',
		  'address' => '',
		  'location' => '',
		  'admin_type' => '',
		  'user_status' => '',
		  'password' => '',
	  
	  );
	  $sess_data = $this->session->all_userdata();
	  $this->session->unset_userdata($user_session_items);
	  $this->session->sess_destroy();
	  redirect('login/index');
	  
  }
	
}
