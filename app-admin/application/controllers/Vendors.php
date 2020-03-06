<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Vendors_model');
		  $this->load->library("form_validation");
		 
	}
	public function vendors_view()
	{
		//$data['users'] = $this->Users_model->get_users();
		$this->load->view('vendors',$data);
	}
	public function add_users()
	{
		$this->load->view('add_users');
	}


	public function insert_user()
	{
			$data['name'] = $this->input->post('lastname');
			$data['email_id'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['mobile'] = $this->input->post('mobile');
			$data['address'] = $this->input->post('address');
			$data['dob'] = $this->input->post('dob');
			// $data['user_image'] = $this->input->post('user_image');
			$data['admin_type'] = $this->input->post('admintype');

			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/userimage/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['user_image']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('user_image'); 

			$data['user_image']  = 'assets/userimage/'.$profileimg;
			$result = $this->Users_model->insert_user($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','User Details Successfully Submited');
				redirect('users/users_view');
			} else {
					$this->load->helper('url');
				redirect('users/insert_user');
			}
		 
	 }
	 

	 public function delete_user($id)
		{
		$result = $this->Users_model->delete_user($id);
		   if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message3','User Successfully Deleted ');
				redirect('users/users_view');
			} else {
				$this->load->helper('url');
				redirect('users/users_view');
			}
		
		}
		public function user_status($id,$value)
		{
		
			$result = $this->Users_model->user_status($id,$value);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','User Status Successfully Updated ');
				redirect('users/users_view');
			} else {
				$this->load->helper('url');
				redirect('users/users_view');
			}
			
		}
		public function edit_user($id)
		{
			$sess_data = $this->session->all_userdata();
			if($sess_data['user_id'] == '' ){redirect('login/login');}
			$data['view_edit_user'] = $this->Users_model->edit_user($id);
			$this->load->view('edit_user',$data);
			
		}
	public function update_user()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		
		$id = $this->input->post('id');
		$data['name'] = $this->input->post('lastname');
		$data['email_id'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['mobile'] = $this->input->post('mobile');
		$data['address'] = $this->input->post('address');
		$data['dob'] = $this->input->post('dob');
		$data['admin_type'] = $this->input->post('admintype');
		
		/* birth_certificate Code*/
		$profileimg =$_FILES['user_imagee']['name'];
		if($profileimg){
		$configicon['upload_path'] = 'assets/userimage/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$profileimg =$_FILES['user_imagee']['name'];
		$configicon['file_name'] = $profileimg;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('user_imagee'); 
		$data['user_image']  = 'assets/userimage/'.$profileimg;		
		}

		$result = $this->Users_model->update_user($id,$data);
		
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','User Successfully Updated');
			redirect('users/users_view');
		} else {
			$this->load->helper('url');
			redirect('users/edit_user');
		}
    }


}
