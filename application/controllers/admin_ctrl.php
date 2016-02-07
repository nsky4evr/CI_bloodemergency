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
	}

	public function index()
	{
		$this->admin_login();
	}

	public function admin_login()
	{
		if($this->session->userdata('is_logged_in'))
		{
				redirect('admin_ctrl/dashboard');
		}
		else
		{
			$this->load->view('admin_login');
		}
	}

	public function admin_login_validation()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run())
		{
			$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'is_logged_in' => 1
				);
			$this->session->set_userdata('is_logged_in', $data);
			redirect('admin_ctrl/dashboard');
		}
		else
		{
			echo '<script> alert("validation failed"); </script>';
			$this->load->view('admin_login');
		}
	}

	function validate_credentials()
	{
		$this->load->model('admin_model');

		if($this->admin_model->can_log_in()){
			echo '<script> alert("Thank You for Login !!!"); </script>';
			return true;
		}
		else
		{
			$this->form_validation->set_message('validate_credentials', 'Incorrect Username or Password !!!');
			return false;
		}
	}

	public function dashboard(){
		if($this->session->userdata('is_logged_in'))
		{
			$session_data = $this->session->userdata('is_logged_in');
			$data['username'] = $session_data['username'];
			$data['view_file'] = 'dashboard_home' ;
			$this->load->view('dashboard_view', $data);
		}
		else
		{
			redirect('admin_ctrl/restricted');
		}
	}

	public function restricted()
	{
		$this->load->view('restricted');
	}

	public function signout(){
		$this->session->unset_userdata('is_logged_in');
		$this->session->sess_destroy();
		redirect('admin_ctrl/admin_login');
	}

	public function profile(){
		$this->load->model('admin_model');
		$data['profile'] = $this->admin_model->profile();
		$data['view_file'] = 'profile_view';
		$session_data = $this->session->userdata('is_logged_in');
		$data['username'] = $session_data['username'];
		$this->load->view('dashboard_view', $data);		
	}

	
}
?>