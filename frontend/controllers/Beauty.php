<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beauty extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  /* $this->load->model('Banner_model'); */
		  $this->load->library("form_validation");
		 
	}
	
	public function about_us()
	{
		$this->load->view('about');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function blog_details()
	{
		$this->load->view('blog_details');
	}
	public function privacy_policy()
	{
		$this->load->view('privacy_policy');
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	
}
