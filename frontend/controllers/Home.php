<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Home_model');
		  $this->load->library("form_validation");
		 
	}
	
	public function index()
	{
		
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('home',$data);
	}

	public function products()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('products',$data);
	}
	
	public function product_details()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('product_details',$data);
	}
	
	
}
