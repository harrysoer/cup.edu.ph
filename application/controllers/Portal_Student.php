<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_Student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

	}

	public function index()
	{
		
	}

}

/* End of file portal_Student.php */
/* Location: ./application/controllers/portal_Student.php */