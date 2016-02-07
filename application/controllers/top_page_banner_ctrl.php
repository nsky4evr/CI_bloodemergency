<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_ctrl extends CI_Controller {

	function About_ctrl(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');

	}

	public function index()
	{
		$this->top_page_banner();
	}

	public function top_page_banner(){
		$this->load->view('top_page_banner/add');
	}

	public function add_banner(){
		$this->load->model('top_page_banner_model');
		if($this->top_page_banner_model->add_banner()){

		}
	}

	
}
?>
