<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('portal_student_model', 'student');

		$this->load->model('Ion_auth_model');
		$this->lang->load('auth');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		if ($this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('sportal','refresh',301);
		}

	}

	//trial and error for the form load library in the contruct
	
	public function login()
	{

		$this->load->view('portal/templates/header');
		$this->load->view('portal/login');
		$this->load->view('portal/templates/footer');
	}

	public function index()
	{	
		$data = array();
		$username = $this->input->post('idNumber') ;
		$pass = $this->input->post('password') ;
		$remember = NULL;
		//validate form input
		$this->form_validation->set_rules($username, str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules($pass, str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if($this->ion_auth->login($username, $pass, $remember)){
			$this->student->get_college_dept($username);
			redirect('sportal','refresh');
		}
		else{
			$data['name'] = "Dean's Office";
			$data['error'] = 'Wrong username or password.';
			
			$this->load->view('portal/templates/header');
			$this->load->view('portal/login', $data);
			$this->load->view('portal/templates/footer');
		}
	}
	

	


}