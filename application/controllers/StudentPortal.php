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
		$this->load->view('portal/sportal/index');
		$this->load->view('portal/sportal/template/footer');
		$this->load->view('portal/sportal/template/js');
	}

	public function info()
	{
		$data['title']="My INFO";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/info/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function grades()
	{
		$data['title']="My GRADES";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
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
		$this->load->view('portal/sportal/schedule/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function curriculum()
	{
		$data['title']="COURSE CURRICULUM";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/curriculum/index');
		$this->load->view('portal/sportal/template/footer');
	}

	public function forum2()
	{
		$data['title']="UNIVERSITY FORUM";
		$this->load->view('portal/sportal/template/header',$data);
		$this->load->view('portal/sportal/template/js');
		$this->load->view('portal/sportal/forum/index');
		$this->load->view('portal/sportal/template/footer');
	}



	public function dportal()
	{
		$data['title']="Student Portal";
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/index');
		$this->load->view('portal/dportal/template/footer');
	}

	public function forum3()
	{
		$data['title']="UNIVERSITY FORUM";
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/forum/index');
		$this->load->view('portal/dportal/template/footer');
	}

	public function addsubject()
	{
		$data['title']="Add Schedule";
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/addsubject/index');
		$this->load->view('portal/dportal/template/footer');
	}

	public function viewsched()
	{
		$data['title']="Manage Schedule";
		$this->load->view('portal/dportal/template/header',$data);
		$this->load->view('portal/dportal/template/js');
		$this->load->view('portal/dportal/viewsched/index');
		$this->load->view('portal/dportal/template/footer');
	}

	public function fportal()
	{
		$data['title']="Student Portal";
		$this->load->view('portal/fportal/template/header',$data);
		$this->load->view('portal/fportal/template/js');
		$this->load->view('portal/fportal/index');
		$this->load->view('portal/fportal/template/footer');
	}

	public function forum4()
	{
		$data['title']="UNIVERSITY FORUM";
		$this->load->view('portal/fportal/template/header',$data);
		$this->load->view('portal/fportal/template/js');
		$this->load->view('portal/fportal/forum/index');
		$this->load->view('portal/fportal/template/footer');
	}

	public function classes()
	{
		$data['title']="UNIVERSITY FORUM";
		$this->load->view('portal/fportal/template/header',$data);
		$this->load->view('portal/fportal/template/js');
		$this->load->view('portal/fportal/classes/index');
		$this->load->view('portal/fportal/template/footer');
	}

	public function viewclass()
	{
		$data['title']="UNIVERSITY FORUM";
		$this->load->view('portal/fportal/template/header',$data);
		$this->load->view('portal/fportal/template/js');
		$this->load->view('portal/fportal/viewclass/index');
		$this->load->view('portal/fportal/template/footer');
	}




}

/* End of file studentPortal.php */
/* Location: ./application/controllers/studentPortal.php */