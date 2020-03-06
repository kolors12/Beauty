<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_Category extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Sub_Category_model');
		  $this->load->library("form_validation");
		 
	}
	public function sub_category_view()
	{
		$data['sub_category'] = $this->Sub_Category_model->get_sub_category();
		$this->load->view('sub_category',$data);
	}
	public function add_sub_category()
	{
		$data['category_drop'] = $this->Sub_Category_model->get_drop_type();
	
		$this->load->view('add_sub_category',$data);
	}


	public function insert_sub_category()
	{
			$data['lang_id'] = $this->input->post('lang_id');
			$data['cat_id'] = $this->input->post('cat_id');
			$data['sub_cat_name'] = $this->input->post('sub_cat_name');
			$data['sub_cat_desc'] = $this->input->post('sub_cat_desc');
			
			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/sub_category/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['sub_cat_image']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('sub_cat_image'); 

			$configicon2['upload_path'] = 'assets/sub_category/'; # check path is correct
			$configicon2['max_size'] = '10240000';
			$configicon2['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon2['overwrite'] = FALSE;
			$configicon2['remove_spaces'] = TRUE;
			$profileimg2 =$_FILES['sub_cat_banner_image']['name'];
			$configicon2['file_name2'] = $profileimg2;
			$this->load->library('upload', $configicon2);
			$this->upload->initialize($configicon2);
			$this->upload->do_upload('sub_cat_banner_image'); 
			$data['sub_cat_image']  = 'assets/sub_category/'.$profileimg;
			$data['sub_cat_banner_image']  = 'assets/sub_category/'.$profileimg2;
			$result = $this->Sub_Category_model->insert_sub_category($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Sub Category Successfully Submited');
				redirect('sub_category/sub_category_view');
			} else {
					$this->load->helper('url');
				redirect('sub_category/add_sub_category');
			}
		 
	 }
	 

	 public function delete_sub_category($id)
		{
		$result = $this->Sub_Category_model->delete_sub_category($id);
		   if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Sub Category Successfully Deleted ');
				redirect('sub_category/sub_category_view');
			} else {
				$this->load->helper('url');
				redirect('sub_category/sub_category_view');
			}
		
		}
		public function sub_category_status($id,$value)
		{
		
			$result = $this->Sub_Category_model->sub_category_status($id,$value);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Sub Category Status Successfully Updated ');
				redirect('sub_category/sub_category_view');
			} else {
				$this->load->helper('url');
				redirect('sub_category/sub_category_view');
			}
			
		}
		public function edit_brand($id)
		{
			// $sess_data = $this->session->all_userdata();
			// if($sess_data['user_id'] == '' ){redirect('login/login');}
			$data['view_edit_brand'] = $this->Category_model->edit_brand($id);
			$this->load->view('edit_brand',$data);
			
		}
	public function update_brand()
    {
		// $sess_data = $this->session->all_userdata();
		// if($sess_data['user_id'] == '' ){redirect('login/login');}
		
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
