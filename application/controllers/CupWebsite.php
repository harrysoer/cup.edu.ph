<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CupWebsite extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{	
		$data['title']="Home";
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

}