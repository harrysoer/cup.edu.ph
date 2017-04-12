<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_DO extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('portal_do_m', 'do');
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

	}

	public function index()
	{
		$data['get_courses'] = $this->do->get_courses();
		$this->load->view('portal/do/index', $data);
	}

	public function courses()
	{
		$data['get_courses'] = $this->do->get_courses();
		$this->load->view('portal/do/courses', $data);
	}

}

/* End of file portal_DO.php */
/* Location: ./application/controllers/portal_DO.php */