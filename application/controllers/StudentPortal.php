<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentPortal extends CI_Controller {

	public function index()
	{
		
	}

	public function sportal()
	{
		$data['title']="Student Portal";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/index');
		$this->load->view('portal/sportal/template/footer');
	}

}

/* End of file studentPortal.php */
/* Location: ./application/controllers/studentPortal.php */