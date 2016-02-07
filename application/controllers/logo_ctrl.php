<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctrl extends CI_Controller {

	function admin_ctrl()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('logo_model');
	}

	public function index()
	{
		$this->admin_login();
	}

	public function upload(){
		$this->load->view('')
	}

	public function 

	

	
}
?>