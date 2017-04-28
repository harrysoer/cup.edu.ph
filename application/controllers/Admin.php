<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $album_name;

	function __construct()
	{
		parent::__construct();
		$this->load->model('adminNews_model', 'news');
		$this->load->model('adminForms_model', 'form');
		$this->load->model('adminImageGallery_model', 'gallery');
		$this->load->model('adminAlbum_model', 'album');
		$this->load->model('Ion_auth_model');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('login', 'refresh', 301);
		}
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('');
		}
	}

	public function logout(){
		$logout=$this->ion_auth->logout();
		redirect('login','refresh',301);

	}


	public function index(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');		
		$this->load->view('admin/index');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/templates/closer');
	}

	//Add, Delete, Update, and View Gallery

	public function addAlbum(){

        $this->form_validation->set_rules('album_name', 'Album Title', 'trim|required');

        if ($this->form_validation->run() === FALSE)
        {	
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/navbar');
			$this->load->view('admin/templates/scripts');
			$this->load->view('admin/gallery/createAlbum');
			$this->load->view('admin/templates/closer');
		}
		else
		{
			$album_name = $this->album->setAlbumName();
			// redirect( site_url('admin/gallery/albums/upload'));
			$this->uploadAlbum($album_name);
		}
	}

	public function uploadAlbum($album_name=null){
		$data=array('album_name'=>$album_name);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/gallery/UploadImagesScript');
		$this->load->view('admin/gallery/UploadImages',$data);
		$this->load->view('admin/templates/closer');		
	}

	public function listAlbums($album_name=null){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/scripts');
		$this->load->view('admin/gallery/listAlbums',$album_name);
	}

	public function ajax_deleteAlbum($id)
	{
		$this->album->deleteAlbum_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	//for mini gallery in admin side
	public function listImages($id=null){
		$slug = $this->uri->segment(4);
		$id = $this->uri->segment(5);

		if ($id==null){	
			$data['get_images'] = $this->gallery->get_images($slug);
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/navbar');
			$this->load->view('admin/templates/scripts');
			$this->load->view('admin/gallery/scriptsGallery',$data);
			$this->load->view('admin/gallery/listImages');
		}
		elseif(isset($id)){
	        
	        if (empty($id))
	        {
	            show_404();
	        }
	                
	        // $news_item = $this->news_model->get_news_by_id($id);
	        
	        $this->album->delete_Image($id);        
	        redirect( site_url('admin/gallery/view/'.$slug),'refresh');       
		}
		else{
		   show_404();
		}	
	}

	//for ajax upload ito
	public function upload_images(){

		$config['upload_path']   = "./uploads/gallery/";
		$config['allowed_types'] = 'jpg|png|JPG|PNG';
		$config['max_size']		 = 0;

		$this->load->library('upload');

		$this->upload->initialize($config);

		if($this->upload->do_upload('userfile'))
		{
			$album_name=$this->input->post('album_name');
			$slug = url_title( $album_name	, 'dash', TRUE);
			$file_name=$this->upload->data('file_name');
			$this->db->insert('gallery_images',array('file_name'=>$file_name,'album_name'=>$album_name,'slug'=>$slug));
		}
	}


	//delete image
	public function delete_uploaded_images(){

	$album_name=$this->input->post('album_name');		
	$query=$this->db->get_where('gallery_images',array('token'=>$token));

	if($query->num_rows()>0){

		$data=$query->row();
		$file_name=$data->file_name;


			if(file_exists($file=FCPATH.'/uploads/gallery/'.$album_name.'/'.$file_name)){
			unlink($file);
		}
		}
	$this->db->delete('gallery_images',array('file_name'=>$file_name));
	echo json_encode(array('deleted'=>true));

	}


	//listing the album name
	public function ajax_listAlbums()
	{	

		$list = $this->album->get_datatablesAlbums();
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $album_name) {
			$no++;
			$row = array();
			$row[] = $album_name->album_name;

			$link = site_url('admin/gallery/view/'.$album_name->slug); 

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="'.$link.'" title="Edit")">
					<i class="glyphicon"></i>View</a> <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$album_name->slug."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->album->count_allAlbums(),
						"recordsFiltered" => $this->album->count_filteredAlbums(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}



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
			$row[] = '
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
			$row[] = $news->dates;

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
 
        $data['news_item'];
 
        $this->load->view('admin/student_life/readNews', $data);
	}

}
