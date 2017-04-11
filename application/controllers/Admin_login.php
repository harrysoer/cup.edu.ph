<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ion_auth_model');
		$this->lang->load('auth');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		if ($this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('admin','refresh',301);
		}

	}

	

	public function index()
	{
		$this->load->view('admin/login_view');
	}

	public function login()
	{	
		$data = array();
		$username = $this->input->post('username') ;
		$pass = $this->input->post('password') ;
		$remember = NULL;
		//validate form input
		$this->form_validation->set_rules($username, str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules($pass, str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if($this->ion_auth->login($username, $pass, $remember)){
			$this->ion_auth->get_name($username);
			redirect('admin/index','refresh');
		}
		else{
			$data['error'] = 'Wrong username or password.';
			$this->load->view('admin/login_view', $data);
		}
	}

}

/* End of file admin_login.php */
/* Location: ./application/controllers/admin_login.php */