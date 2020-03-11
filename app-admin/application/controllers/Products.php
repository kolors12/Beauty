<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Products_model');
		  $this->load->library("form_validation");
		 
	}
	public function products_view()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['products'] = $this->Products_model->get_products();
		/*$data['city'] = $this->Vendors_model->get_city();*/
		$data['category'] = $this->Products_model->get_category(); 
		$this->load->view('products',$data);
	}
	
	public function view_product_details($id)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['product_details'] = $this->Products_model->view_product_details($id);
		$this->load->view('view_product_details',$data);
	}


	public function insert_product()
	{	    
		
		    $sess_data = $this->session->all_userdata();
		   if($sess_data['admin_id'] == '' ){redirect('login/index');}

		   	$data['vendor_id'] = $sess_data['admin_id'];
			$data['cat_id'] = $this->input->post('cat_id');
			$data['sub_cat_id'] = $this->input->post('sub_cat_id');
			$data['pro_type'] = $this->input->post('pro_type');
			$data['lang_id'] = $this->input->post('lang_id');
			$data['pro_name'] = $this->input->post('pro_name');
			$data['slug'] = $this->input->post('slug');
			$data['hsn_code'] = $this->input->post('hsn_code');
			$data['bullet_points'] = $this->input->post('bullet_points');
			$data['pro_priority'] = $this->input->post('pro_priority');
			$data['pro_short_desc'] = $this->input->post('pro_short_desc');
			$data['pro_price'] = $this->input->post('pro_price');
			
			$data['pro_desc'] = $this->input->post('pro_desc');
			$data['qty'] = $this->input->post('qty');
			$data['pro_brand'] = $this->input->post('pro_brand');
			$data['pro_dim'] = $this->input->post('pro_dim');
			$data['pro_model'] = $this->input->post('pro_model');
			$data['pro_sku'] = $this->input->post('pro_sku');
			$data['pro_weight'] = $this->input->post('pro_weight');
			$data['series'] = $this->input->post('series');
			$data['specification'] = $this->input->post('specification');
			$data['pro_prices'] = $this->input->post('pro_prices');
			$data['spl_discount'] = $this->input->post('spl_discount');
			$data['extra_fields'] = $this->input->post('extra_fields');
			$data['top_deal_order'] = $this->input->post('top_deal_order');
			$data['seo_title'] = $this->input->post('seo_title');
			$data['seo_desc'] = $this->input->post('seo_desc');
			$data['seo_keywords'] = $this->input->post('seo_keywords');

			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/products/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['pro_image']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('pro_image'); 
			$data['pro_image']  = 'assets/products/'.$profileimg;
			
			/* product image 2*/
			$configicon['upload_path'] = 'assets/products/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['pro_image_2']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('pro_image_2'); 
			$data['pro_image_2']  = 'assets/products/'.$profileimg;
			
			/* product image 3*/
			$configicon['upload_path'] = 'assets/products/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['pro_image_3']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('pro_image_3'); 
			$data['pro_image_3']  = 'assets/products/'.$profileimg;
			
			/* product image 4*/
			$configicon['upload_path'] = 'assets/products/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['pro_image_4']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('pro_image_4'); 
			$data['pro_image_4']  = 'assets/products/'.$profileimg;
			
			/* product image 5*/
			$configicon['upload_path'] = 'assets/products/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['pro_image_5']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('pro_image_5'); 
			$data['pro_image_5']  = 'assets/products/'.$profileimg;
			
			$result = $this->Products_model->insert_product($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Product Details Successfully Submited');
				redirect('products/products_view');
			} else {
					$this->load->helper('url');
				redirect('products/products_view');
			}
		 
	 }
	 

	 public function delete_product($id)
		{
		$result = $this->Products_model->delete_product($id);
		   if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Product Successfully Deleted ');
				redirect('products/products_view');
			} else {
				$this->load->helper('url');
				redirect('products/products_view');
			}
		
		}
		public function product_status($id,$value)
		{
			$result = $this->Products_model->product_status($id,$value);
			
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Product Status Successfully Updated ');
				redirect('products/products_view');
			} else {
				$this->load->helper('url');
				redirect('products/products_view');
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
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		
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
