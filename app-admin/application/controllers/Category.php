<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Category_model');
		  $this->load->library("form_validation");
		 
	}
	public function category_view()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['category'] = $this->Category_model->get_category();
		$this->load->view('category',$data);
	}
	public function add_category()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['brands_drop'] = $this->Category_model->get_drop_type();
	
		$this->load->view('add_category',$data);
	}


	public function insert_category()
	{	    
		    $sess_data = $this->session->all_userdata();
			if($sess_data['admin_id'] == '' ){redirect('login/index');}
			$data['name'] = $this->input->post('name');
			$data['slug'] = $this->input->post('slug');
			$data['parent_id'] = $this->input->post('parent_id');
			$data['cat_desc'] = $this->input->post('cat_desc');
			$data['brand_id'] = $this->input->post('brand_id');
			$data['sequence'] = $this->input->post('sequence');
			$data['seo_title'] = $this->input->post('seo_title');
			$data['seo_desc'] = $this->input->post('seo_desc');
			$data['seo_keywords'] = $this->input->post('seo_keywords');
			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/category/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['cat_image']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('cat_image'); 

			$configicon2['upload_path'] = 'assets/category/'; # check path is correct
			$configicon2['max_size'] = '10240000';
			$configicon2['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon2['overwrite'] = FALSE;
			$configicon2['remove_spaces'] = TRUE;
			$profileimg2 =$_FILES['image2']['name'];
			$configicon2['file_name2'] = $profileimg2;
			$this->load->library('upload', $configicon2);
			$this->upload->initialize($configicon2);
			$this->upload->do_upload('image2'); 
			$data['image']  = 'assets/category/'.$profileimg;
			$data['image2']  = 'assets/category/'.$profileimg2;
			$result = $this->Category_model->insert_category($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Category Successfully Submited');
				redirect('category/category_view');
			} else {
					$this->load->helper('url');
				redirect('category/add_category');
			}
		 
	 }
	 

	 public function delete_category($id)
		{	
			$sess_data = $this->session->all_userdata();
			if($sess_data['admin_id'] == '' ){redirect('login/index');}
		    $result = $this->Category_model->delete_category($id);
		   if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Category Successfully Deleted ');
				redirect('category/category_view');
			} else {
				$this->load->helper('url');
				redirect('category/category_view');
			}
		
		}
		public function category_status($id,$value)
		{
			$sess_data = $this->session->all_userdata();
			if($sess_data['admin_id'] == '' ){redirect('login/index');}
			$result = $this->Category_model->category_status($id,$value);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Category Status Successfully Updated ');
				redirect('category/category_view');
			} else {
				$this->load->helper('url');
				redirect('category/category_view');
			}
			
		}
		public function edit_brand($id)
		{
			$sess_data = $this->session->all_userdata();
		    if($sess_data['admin_id'] == '' ){redirect('login/index');}
			$data['view_edit_brand'] = $this->Category_model->edit_brand($id);
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
