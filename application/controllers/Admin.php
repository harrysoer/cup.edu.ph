<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('adminNews_model', 'news');
		$this->load->model('adminForms_model', 'form');
		$this->load->model('adminImageGallery_model', 'gallery');
		$this->load->model('adminAlbum_model', 'album');
	}

	public function index(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');		
		$this->load->view('admin/index');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/templates/closer');
	}

	//Add, Delete, Update, and View Gallery

	public function listAlbums(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/admission/listAlbums');
	}

	public function listImages(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/admission/listImages');
	}

	//listing the album name
	public function ajax_listAlbum()
	{	

		$list = $this->gallery->get_datatablesAlbum();
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $album_name) {
			$no++;
			$row = array();
			$row[] = $album_name->album_name;
			//$row[] = $images->album_name;


			$link = NULL;#site_url('admin/form/revise-upload'.$forms->id); 

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="'.$link.'" title="Edit")">
					<i class="glyphicon"></i>View</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->gallery->count_allAlbums(),
						"recordsFiltered" => $this->gallery->count_filteredAlbums(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	//list images in album
	public function ajax_listImages($album_name)
	{	

		$list = $this->gallery->get_datatablesImages($album_name);
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $images) {
			$no++;
			$row = array();
			$row[] = $images->file_name;
			//$row[] = $images->album_name;


			$link = NULL;#site_url('admin/form/revise-upload'.$forms->id); 

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="'.$link.'" title="Edit")">
					<i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$images->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->gallery->count_allImages(),
						"recordsFiltered" => $this->gallery->count_filteredImages(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	
	//delete image
	public function ajax_deleteImage($id)
	{
		$this->form->deleteForm_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	//

	//==================end for Gallery=====================

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


			$link = NULL;#site_url('admin/form/revise-upload'.$forms->id); 

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
		$this->load->view('admin/admission/uploadForm', array('error' => NULL));
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/templates/closer');
	}

	public function uploadForm(){
		$config['upload_path'] 		= './uploads/forms/';
		$config['allowed_types']	= 'pdf';

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('userFile'))
		{		
            $data = array('error' => $this->upload->display_errors());

			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/navbar');		
			$this->load->view('admin/admission/uploadForm', $data);
			$this->load->view('admin/templates/scripts');
			$this->load->view('admin/templates/closer');
		}
		else
		{
			$file_name = $this->upload->data('file_name');

			$this->form->setForm($file_name);
			redirect(site_url('admin/admission/forms/list'));
		}
	}

	//delete file
	public function ajax_deleteForm($id)
	{
		$this->form->deleteForm_by_id($id);
		echo json_encode(array("status" => TRUE));
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
			 $this->news->setNews();
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
		$list = $this->news->get_datatablesNews();
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
						"recordsTotal" => $this->news->count_all(),
						"recordsFiltered" => $this->news->count_filtered(),
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
         
        $data['news_item'] = $this->news->get_news_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');

 
        if ($this->form_validation->run() === FALSE)
        {
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/navbar');	
            $this->load->view('admin/student_life/editNews', $data);
			$this->load->view('admin/templates/scripts');
			$this->load->view('admin/student_life/addNewsFooter');
			$this->load->view('admin/templates/scripts');
 
        }
        else
        {
            $this->news->set_newsUpdate($id);
            redirect(site_url('admin/news/list')) ;
        }

	}
	
	//delete news
	public function ajax_delete($id)
	{
		$this->news->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	//view more//read news
	public function readMore($slug = NULL)
	{
		$data['news_item'] = $this->news->get_news($slug);
        
        if (empty($data['news_item']))
        {
            show_404();
        }
 
        $data['news_item']['title'];
 
        $this->load->view('admin/student_life/readNews', $data);
	}

}
