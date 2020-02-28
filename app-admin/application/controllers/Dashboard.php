<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		//$this->load->model('Login_model');
		  $this->load->library("form_validation");
		 
	}
	public function dashboard_view()
	{
		
		$this->load->view('dashboard');
	}
}
