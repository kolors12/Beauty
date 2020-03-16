<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beauty extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Home_model');
		  $this->load->library("form_validation");
		 
	}
	
	public function about_us()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('about',$data);
	}
	public function blog()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('blog',$data);
	}
	public function blog_details()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('blog_details',$data);
	}
	public function privacy_policy()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('privacy_policy',$data);
	}
	public function contact_us()
	{
		$data['category'] = $this->Home_model->get_category();
		$this->load->view('contact_us',$data);
	}
	
}
