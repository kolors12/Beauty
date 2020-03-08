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
		$data['vendors'] = $this->Vendors_model->get_vendors();
		$this->load->view('vendors',$data);
	}
	public function add_users()
	{
		$this->load->view('add_users');
	}
	public function view_vendor_details($id)
	{
		$data['vendors_details'] = $this->Vendors_model->view_vendor_details($id);
		$this->load->view('view_vendor_details',$data);
	}


	public function insert_vendor()
	{
			$data['city_id'] = $this->input->post('city_id');
			$data['name'] = $this->input->post('vendor_name');
			$data['location'] = $this->input->post('location');
			$data['address'] = $this->input->post('address');
			$data['latitude'] = $this->input->post('latitude');
			$data['longitude'] = $this->input->post('longitude');
			$data['phone_no'] = $this->input->post('phone');
			$data['mobile_no'] = $this->input->post('mobile');
			$data['email_id'] = $this->input->post('email');
			$data['categories'] = $this->input->post('categories');
			$data['about_vendor'] = $this->input->post('about_vendor');

			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/vendors/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['photos']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('photos'); 

			$data['photos']  = 'assets/vendors/'.$profileimg;
			$result = $this->Vendors_model->insert_vendor($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Vendor Details Successfully Submited');
				redirect('vendors/vendors_view');
			} else {
					$this->load->helper('url');
				redirect('vendors/vendors_view');
			}
		 
	 }
	 

	 public function delete_vendor($id)
		{
		$result = $this->Vendors_model->delete_vendor($id);
		   if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Vendor Successfully Deleted ');
				redirect('vendors/vendors_view');
			} else {
				$this->load->helper('url');
				redirect('vendors/vendors_view');
			}
		
		}
		public function vendor_status($id,$value)
		{
			$result = $this->Vendors_model->vendor_status($id,$value);
			
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Vendor Status Successfully Updated ');
				redirect('vendors/vendors_view');
			} else {
				$this->load->helper('url');
				redirect('vendors/vendors_view');
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
