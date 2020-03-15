<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  /* $this->load->model('Banner_model'); */
		  $this->load->library("form_validation");
		 
	}
	
	public function login_register()
	{
		$this->load->view('login');
	}
	
	
	
	
}
