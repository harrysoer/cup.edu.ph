<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_Prof extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		$group='Professor';
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('fportal/login', 'refresh', 301);
		}
		elseif (!$this->ion_auth->in_group($group))
		{
			return show_error('You must logged in as a Faculty/Professor Account to view this page.');
		}

	}

	public function index()
	{
		$data['title']="Faculty Portal";
		$this->load->view('portal/fportal/template/header',$data);
		$this->load->view('portal/fportal/template/js');
		$this->load->view('portal/fportal/template/menuBar');
		$this->load->view('portal/fportal/index');
		$this->load->view('portal/fportal/template/footer');
	}

	public function forum4()
	{
		redirect('forum','refresh');

	}

	public function classes()
	{
		$data['title']="Faculty Portal";
		$this->load->view('portal/fportal/template/header',$data);
		$this->load->view('portal/fportal/template/js');
		$this->load->view('portal/fportal/template/menuBar');
		$this->load->view('portal/fportal/classes/index');
		$this->load->view('portal/fportal/template/footer');
	}

	public function viewclass()
	{
		$data['title'] = "Faculty Portal";
		$this->load->view('portal/fportal/template/header',$data);
		$this->load->view('portal/fportal/template/js');
		$this->load->view('portal/fportal/template/menuBar');
		$this->load->view('portal/fportal/viewclass/index');
		$this->load->view('portal/fportal/template/footer');
	}

}

/* End of file portal_Prof.php */
/* Location: ./application/controllers/portal_Prof.php */