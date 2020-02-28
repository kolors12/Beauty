<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Banner_model');
		  $this->load->library("form_validation");
		 
	}
	public function banner_view()
	{
		$data['banner'] = $this->Banner_model->get_banner();
		$this->load->view('banners',$data);
	}
	public function add_banner()
	{
		$this->load->view('add_banner');
	}


	public function insert_banner()
	{
			$data['lang_id'] = $this->input->post('lang_id');
			$data['cat_name'] = $this->input->post('cat_name');
			$data['cat_desc'] = $this->input->post('cat_desc');
			$data['banner_type'] = $this->input->post('banner_type');
			
			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/banners/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['cat_image']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('cat_image'); 

			$data['cat_image']  = 'assets/banners/'.$profileimg;
			$result = $this->Banner_model->insert_banner($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Banner Successfully Submited');
				redirect('banner/banner_view');
			} else {
					$this->load->helper('url');
				redirect('banner/insert_banner');
			}
		 
	 }
	 

	 public function delete_banner($id)
		{
		$result = $this->Banner_model->delete_banner($id);
		   if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Banner Successfully Deleted ');
				redirect('banner/banner_view');
			} else {
				$this->load->helper('url');
				redirect('banner/banner_view');
			}
		
		}
		public function banner_status($id,$value)
		{
		
			$result = $this->Banner_model->banner_status($id,$value);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Banner Status Successfully Updated ');
				redirect('banner/banner_view');
			} else {
				$this->load->helper('url');
				redirect('banner/banner_view');
			}
			
		}
		public function edit_banner($id)
		{
			$sess_data = $this->session->all_userdata();
			if($sess_data['user_id'] == '' ){redirect('login/login');}
			$data['view_edit_banner'] = $this->Banner_model->edit_banner($id);
			$this->load->view('edit_banner',$data);
			
		}
	public function update_banner()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		
		$id = $this->input->post('id');
		$data['lang_id'] = $this->input->post('cat_id');
		$data['cat_name'] = $this->input->post('cat_name');
		$data['cat_desc'] = $this->input->post('cat_desc');
		$data['banner_type'] = $this->input->post('banner_type');
		
		/* birth_certificate Code*/
		$profileimg =$_FILES['cat_image']['name'];
		if($profileimg){
		$configicon['upload_path'] = 'assets/banners/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$profileimg =$_FILES['cat_image']['name'];
		$configicon['file_name'] = $profileimg;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('cat_image'); 
		$data['cat_image']  = 'assets/banners/'.$profileimg;		
		}
		
		$result = $this->Banner_model->update_banner($id,$data);
		
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','Banner Successfully Updated');
			redirect('banner/banner_view');
		} else {
			$this->load->helper('url');
			redirect('banner/update_banner');
		}
    }


}
