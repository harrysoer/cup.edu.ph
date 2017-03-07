<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');

	}

	public function index(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');		
		$this->load->view('admin/index');
		$this->load->view('admin/templates/footer');
	}


	// Add, Delete, Edit, and View News

	//ui for addnews and add news
	public function addNews(){

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() === FALSE)
        {
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/navbar');		
			$this->load->view('admin/student_life/addNews');
			$this->load->view('admin/templates/footer');
			$this->load->view('admin/student_life/addNewsFooter');
		}
		else
		{
			 $this->admin_model->setNews();
			 $this->load->view('CupWebsite/index');
		}
	}

	public function dataTableNews(){

	}
}
