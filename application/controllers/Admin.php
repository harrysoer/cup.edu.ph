<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model', 'admin');
		$this->load->model('adminForms_model', 'form');

	}

	public function index(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');		
		$this->load->view('admin/index');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/templates/closer');
	}


	//Add, Delete, Update, and View Downloadable Forms
	public function listForms(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/admission/listForm');
	}

	public function ajax_listForms()
	{	

		$list = $this->form->get_datatablesForms();
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $forms) {
			$no++;
			$row = array();
			$row[] = $forms->file_name;
			$row[] = $forms->file_description;


			$link = site_url('admin/form/revise-upload'.$forms->id); 

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="'.$link.'" title="Edit")">
					<i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$forms->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->form->count_allForms(),
						"recordsFiltered" => $this->form->count_filteredForms(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function uploadView(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');		
		$this->load->view('admin/admission/uploadForm');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/templates/closer');
	}


	
	//

	//==================end for forms=====================



	// Add, Delete, Edit, and View News
	//Views for addnews and add news
	public function addNews(){

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() === FALSE)
        {
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/navbar');	
			$this->load->view('admin/student_life/addNews');
			$this->load->view('admin/templates/scripts');	
			$this->load->view('admin/student_life/addNewsFooter');
			$this->load->view('admin/templates/closer');
		}
		else
		{
			 $this->admin->setNews();
			 redirect( site_url('admin/news/list')) ;		 
		}
	}

	public function listNews(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/student_life/listNews');
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
			$row[] = $news->author;

			$strip = $news->text;

			$string = strip_tags($strip);

			$readLink = site_url('admin/news/read/'.$news->slug);
			if (strlen($string) > 100) {

			    // truncate string
			    $stringCut = substr($string, 0, 100);

			    // make sure it ends in a word so assassinate doesn't become ass...
			    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="'.$readLink.'">Read More</a>'; 
			}

			$row[] = $string;

			$link = site_url('admin/news/edit/'.$news->id); 

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="'.$link.'" title="Edit")">
					<i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$news->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
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

	//edit news
	public function editNews()
	{

        $id = $this->uri->segment(4);
        
        if (empty($id))
        {
            show_404();
        }
         
        $data['news_item'] = $this->admin->get_news_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');

 
        if ($this->form_validation->run() === FALSE)
        {
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/navbar');	
            $this->load->view('admin/student_life/editNews', $data);
			$this->load->view('admin/templates/');
			$this->load->view('admin/student_life/addNewsFooter');
 
        }
        else
        {
            $this->admin->set_newsUpdate($id);
            redirect(site_url('admin/news/list')) ;
        }

	}
	
	//delete news
	public function ajax_delete($id)
	{
		$this->admin->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	//view more//read news
	public function readMore($slug = NULL)
	{
		$data['news_item'] = $this->admin->get_news($slug);
        
        if (empty($data['news_item']))
        {
            show_404();
        }
 
        $data['news_item']['title'];
 
        $this->load->view('admin/student_life/readNews', $data);
	}

}
