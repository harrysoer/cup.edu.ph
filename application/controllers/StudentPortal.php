<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentPortal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('portal_student_model');

		$this->load->model('Ion_auth_model');
		$this->lang->load('auth');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$group = 'Student';
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('portal/login','refresh',301);
		}	
		elseif (!$this->ion_auth->in_group($group))
		{
			return show_error('You must logged in as a Dean\'s Office Account to view this page.');
		}

	}

	public function logout(){
		$this->ion_auth->logout();
		redirect('portal','refresh',301);

	}

	public function sportal()
	{
		$data['title']="Faculty Portal";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/index');
		$this->load->view('portal/sportal/template/footer');
		$this->load->view('portal/sportal/template/js');
	}

	public function info()
	{
		$data['title']="My INFO";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/template/menubar');
		$this->load->view('portal/sportal/info/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function grades()
	{
		$data['title']="My GRADES";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/template/menubar');
		$this->load->view('portal/sportal/grades/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function error1()
	{
		$data['title']="ERROR";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/error1/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function schedules()
	{
		$data['title']="My SCHEDULES";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/template/menubar');
		$this->load->view('portal/sportal/schedule/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function curriculum()
	{
		$data['title']="COURSE CURRICULUM";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/template/menubar');
		$this->load->view('portal/sportal/curriculum/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function forum2()
	{
		redirect('forum');
	}


}

/* End of file studentPortal.php */
/* Location: ./application/controllers/studentPortal.php */