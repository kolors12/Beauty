<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Users_model');
		  $this->load->library("form_validation");
		 
	}
	public function users_view()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['users'] = $this->Users_model->get_users();
		$this->load->view('users',$data);
	}
	public function add_users()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['city'] = $this->Users_model->get_city();
		$data['category'] = $this->Users_model->get_category();
		$this->load->view('add_users',$data);
	}


	public function insert_user()
	{
			$data['city_id'] = $this->input->post('city_id');
			$data['name'] = $this->input->post('name');
			$data['email_id'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['mobile'] = $this->input->post('mobile');
			$data['categories'] = $this->input->post('categories');
			$data['address'] = $this->input->post('address');
			$data['admin_type'] = $this->input->post('admin_type');
			$data['location'] = $this->input->post('location');
			$data['latitude'] = $this->input->post('latitude');
			$data['longitude'] = $this->input->post('longitude');
			$data['about_vendor'] = $this->input->post('about_vendor');

			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/userimage/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['photos']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('photos'); 

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
			if($sess_data['admin_id'] == '' ){redirect('login/index');}
			$data['view_edit_user'] = $this->Users_model->edit_user($id);
			$this->load->view('edit_user',$data);
			
		}
	public function update_user()
    {
		$id = $this->input->post('id');
		$data['name'] = $this->input->post('lastname');
		$data['email_id'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['mobile'] = $this->input->post('mobile');
		$data['address'] = $this->input->post('address');
		$data['dob'] = $this->input->post('dob');
		$data['admin_type'] = $this->input->post('admintype');
		$data['location'] = $this->input->post('location');
		$data['latitude'] = $this->input->post('latitude');
		$data['longitude'] = $this->input->post('longitude');
		$data['about_vendor'] = $this->input->post('about_vendor');

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
