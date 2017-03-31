<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CupWebsite extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CUPIndex_model','news');

	}

	public function index()
	{	
		$data['title'] ="Home";
		$data['news']  =$this->news->get_latest_news();

		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/index');
		$this->load->view('main/template/footer');
	}

	public function about()
	{	
		$data['title']="About Us";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/about/index');
		$this->load->view('main/template/footer');
	}

	public function academic()
	{
		$data['title']="Academics";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/academic/index');
		$this->load->view('main/template/footer');
	}

	public function admission()
	{
		$data['title']="Admissions";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/admission/index');
		$this->load->view('main/template/footer');
	}

	public function studentlife()
	{
		$data['title']="StudentLife";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/student/index');
		$this->load->view('main/template/footer');
	}

	public function gallery()
	{
		$data['title']="AboutUs/Gallery";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/gallery/index');
		$this->load->view('main/template/footer');
	}



}