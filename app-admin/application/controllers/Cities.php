<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Cities_model');
		  $this->load->library("form_validation");
		 
	}
	public function cities_view()
	{	
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$data['city'] = $this->Cities_model->get_cities();
		$this->load->view('cities',$data);
	}
	public function add_insert()
	{	
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		$this->load->view('addcity');
	}


	public function insert_city()
	{
			$data['city_name'] = $this->input->post('cityname');
			
			$result = $this->Cities_model->insert_cities($data);
			if($result == 'true')
				{
					$this->load->helper('url');
					$this->session->set_flashdata('message1','City Successfully Added ');
					redirect('Cities/cities_view');
				} else {
						$this->load->helper('url');
					redirect('Cities/add_insert');
				}
		 
	 }

	 public function delete_cities($id)
		{
				$result = $this->Cities_model->delete_cities($id);
				if($result == 'true')
					{
						$this->load->helper('url');
						$this->session->set_flashdata('message3','City Successfully Deleted ');
						redirect('Cities/cities_view');
					} else {
						$this->load->helper('url');
						redirect('Cities/cities_view');
					}
		
		}
		public function cities_status($id,$value)
		{
		
			$result = $this->Cities_model->cities_status($id,$value);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Role Status Successfully Updated ');
				redirect('Cities/cities_view');
			} else {
				$this->load->helper('url');
				redirect('Cities/cities_view');
			}
			
		}
		public function edit_city($id)
		{
			$sess_data = $this->session->all_userdata();
		    if($sess_data['admin_id'] == '' ){redirect('login/index');}
			$data['view_edit_city'] = $this->Cities_model->get_city_id($id);
			$this->load->view('edit_city',$data);
			
		}
	public function update_city()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['admin_id'] == '' ){redirect('login/index');}
		
		$id = $this->input->post('id');
		$data['city_name'] = $this->input->post('city_name');
	
		$result = $this->Cities_model->update_city($id,$data);
		
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','City Successfully Updated');
			redirect('cities/cities_view');
		} else {
			$this->load->helper('url');
			redirect('Cities/edit_city');
		}
    }


}
