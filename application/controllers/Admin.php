<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model', 'admin');

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
			 $this->load->view('admin');
		}
	}

	public function listNews(){
		// $this->load->view('admin/templates/header');
		// $this->load->view('admin/templates/navbar');		
		$this->load->view('admin/student_life/listNews');
		// $this->load->view('admin/templates/footer');
		// $this->load->view('admin/student_life/listNewsFooter');
	}

	public function ajax_listNews()
	{
		$list = $this->admin->get_datatablesNews();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $news) {
			$no++;
			$row = array();
			$row[] = $news->title;
			$row[] = $news->text;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$news->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$news->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->admin->count_all(),
						"recordsFiltered" => $this->admin->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}
