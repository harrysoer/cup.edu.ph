<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Portal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Portal_M', 'portal');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('login', 'refresh', 301);
		}
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('');
		}
	}

	public function index()
	{
		$this->load->view('admin_portal/index');
	}

	public function school_year(){
		$data['get_school_year'] = $this->portal->get_school_year();
		$this->load->view('admin_portal/school_year/schoolyear',$data);
	}

	public function add_school_year(){
		$this->form_validation->set_rules('sem', 'Semester', 'required');
        $this->form_validation->set_rules('from', 'Starting year', 'required');
        $this->form_validation->set_rules('to', 'End Year', 'required');

		if($this->form_validation->run() === FALSE)
        {
			$this->load->view('admin_portal/school_year/add_school_year');
		}
		else{
			$this->portal->set_school_year();
			redirect('admin/portal/school_year','refresh');
		}
	}

	public function student(){
		$data['get_school_year'] = $this->portal->get_students();
		$this->load->view('admin_portal/studnet/students',$data);
	}

	public function add_student(){
		$this->form_validation->set_rules('sem', 'Semester', 'required');
        $this->form_validation->set_rules('from', 'Starting year', 'required');
        $this->form_validation->set_rules('to', 'End Year', 'required');

		if($this->form_validation->run() === FALSE)
        {
			$this->load->view('admin_portal/school_year/add_school_year');
		}
		else{
			$this->portal->set_school_year();
			redirect('admin/portal/school_year','refresh');
		}
	}
	
	// public function (){
	// 	$this->load->view('admin_portal/');
	// }

	// public function (){
	// 	$this->load->view('admin_portal/');
	// }
}

/* End of file admin_Portal.php */
/* Location: ./application/controllers/admin_Portal.php */