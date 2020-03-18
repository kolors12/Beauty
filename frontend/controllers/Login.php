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
			$data['first_name']       = $this->input->post('name');
			$data['email_id']     = $this->input->post('email');
			$data['password']    = $this->input->post('pass');
			$data['mobile']       = $this->input->post('mobile');
		
			
			$email = $data['email_id'];
			$checkEmail = $this->Login_model->checkEmail($email);
			
			if($checkEmail >= 1){
				echo "2";
				exit;
			}
			$result = $this->Login_model->insert_user($data);
			if($result =='1'){
				 $config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => 'bhaskarsuggu41@gmail.com',
						'smtp_pass' => 'bhaskar541&',
						'smtp_timeout' => '4',
						'mailtype'  => 'html',
						'charset'   => 'iso-8859-1',
						'wordwrap' => TRUE
			            );
			            $this->load->library('email', $config);
			            $this->email->set_newline("\r\n");
			            $toemail = $data['email_id'];
			            $subject = "Registration Mail from Big Beauty Pack";
			
			            $this->email->from('bhaskarsuggu41@gmail.com', 'Big Buty Pack');
			
			            $this->email->to($toemail);  // replace it with receiver mail id
			            $this->email->subject($subject); // replace it with relevant subject
			
			            $body = $this->load->view('email/registeration',$data,TRUE);
			            $this->email->message($body);
			            $this->email->send();
			            
				    // $result = $this->user->member_login($data['user_email'], $password);
		 		    // $sess_array = array();
		 		    // $this->session->set_userdata('user_logged_in', $result);
					echo '1';
				    
				

			} else if ($result == '2'){
				echo "2"; 
			}else{
				echo "3";
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
				echo "2"; 
			}else{
				echo "3";
			}
	
	}

	public function forgotpassword()
    {
       
        $email = $this->input->post('email');
        $findemail = $this->Login_model->forgotpassword($email);
		$id = $findemail['user_id'];
        if($id == ""){
        echo $status = "Sorry Unable to Find email...";
        }else{
			$result['userinfo'] = $this->Login_model->get_user_info($id);
			
			$config = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'sg2plcpnl0054.prod.sin2.secureserver.net',
            'smtp_port' => 465,
            'smtp_user' => 'bhaskar@ingresos.co',
            'smtp_pass' => 'bhaskar541&',
            'smtp_timeout' => '4',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $toemail = $email;
            $subject = "Fogot Password Mail from Big Beauty Pack";

            $this->email->from('bhaskarsuggu41@gmail.com', 'Big Beauty Pack');

            $this->email->to($toemail);  // replace it with receiver mail id
            $this->email->subject($subject); // replace it with relevant subject

            $body = $this->load->view('email/forgotpassword',$result,TRUE);
            //print_r($body);exit;
            $this->email->message($body);
            //$this->email->send();
            if($this->email->send()){
                echo "<p>Password Sent to your Mail ID. Please check your email</p>";
            }
            /////////////////
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


	public function facebook_insert()
	{
			// $data['id'] = $this->input->post('id');
			// $data['first_name'] = $this->input->post('first_name');
			// $data['last_name'] = $this->input->post('last_name');
			// $data['email'] = $this->input->post('email');
			$books = json_decode($userData);
				echo "<pre>";
				print_r($books);
				echo "</pre>";
			$result = $this->Login_model->facebook_insert($books);
			if($result =='1')
			{
				
				echo "Face Book Login";

			} else if ($result == '2'){
				echo "Login Faided"; 
			}else{
				echo "Please Try Again";
			}
		 
	 }


}
