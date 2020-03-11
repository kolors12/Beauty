<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Brands_model');
		  $this->load->library("form_validation");
		 
	}
	public function brands_view()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['brands'] = $this->Brands_model->get_brands();
		$this->load->view('brands',$data);
	}
	public function add_brand()
	{   
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$this->load->view('add_brand');
	}


	public function insert_brand()
	{		
		    $sess_data = $this->session->all_userdata();
		    if($sess_data['admin_id'] == '' ){redirect('login/index');}
			$data['name'] = $this->input->post('name');
			$data['slug'] = $this->input->post('slug');
			$data['cat_desc'] = $this->input->post('cat_desc');
			$data['seo_title'] = $this->input->post('seo_title');
			$data['seo_desc'] = $this->input->post('seo_desc');
			$data['seo_keywords'] = $this->input->post('seo_keywords');
			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/brands/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['cat_image']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('cat_image'); 

			$data['cat_image']  = 'assets/brands/'.$profileimg;
			$result = $this->Brands_model->insert_brand($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Brand Successfully Submited');
				redirect('brands/brands_view');
			} else {
					$this->load->helper('url');
				redirect('brands/add_brand');
			}
		 
	 }
	 

	 public function delete_brand($id)
		{
		   $result = $this->Brands_model->delete_brand($id);
		   if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Brand Successfully Deleted ');
				redirect('brands/brands_view');
			} else {
				$this->load->helper('url');
				redirect('brands/brands_view');
			}
		
		}
		public function brand_status($id,$value)
		{
		
			$result = $this->Brands_model->brand_status($id,$value);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Brand Status Successfully Updated ');
				redirect('brands/brands_view');
			} else {
				$this->load->helper('url');
				redirect('brands/brands_view');
			}
			
		}
		public function edit_brand($id)
		{
			$sess_data = $this->session->all_userdata();
		    if($sess_data['admin_id'] == '' ){redirect('login/index');}
			$data['view_edit_brand'] = $this->Brands_model->edit_brand($id);
			$this->load->view('edit_brand',$data);
			
		}
	public function update_brand()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		
		$id = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['slug'] = $this->input->post('slug');
		$data['cat_desc'] = $this->input->post('cat_desc');
		$data['seo_title'] = $this->input->post('seo_title');
		$data['seo_desc'] = $this->input->post('seo_desc');
		$data['seo_keywords'] = $this->input->post('seo_keywords');
		/* birth_certificate Code*/
		$profileimg =$_FILES['cat_image']['name'];
		if($profileimg){
		$configicon['upload_path'] = 'assets/brands/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$profileimg =$_FILES['cat_image']['name'];
		$configicon['file_name'] = $profileimg;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('cat_image'); 
		$data['cat_image']  = 'assets/brands/'.$profileimg;		
		}
		
		$result = $this->Brands_model->update_brand($id,$data);
		
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','Brand Successfully Updated');
			redirect('brands/brands_view');
		} else {
			$this->load->helper('url');
			redirect('brands/edit_brand');
		}
    }


}
