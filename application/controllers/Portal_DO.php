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

		$group='Deans_Office';
		if (!$this->ion_auth->in_group($group))
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			echo "false group";
		}
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('do/login', 'refresh', 301);
		}
	}

	public function logout(){
		$logout=$this->ion_auth->logout();
		redirect('do/login','refresh',301);

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

	public function view_curriculum()
	{
		$data['get_curriculum'] = $this->do->get_curriculum();
		$this->load->view('portal/do/curriculum', $data);
	}

}

/* End of file portal_DO.php */
/* Location: ./application/controllers/portal_DO.php */