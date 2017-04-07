<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CupWebsite extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CUPNews_model','news');
		$this->load->model('CUPGallery_model', 'gallery');
		// $this->load->model('CUPNews_model', '');
	}

	public function index()
	{	
		$data['title'] ="Home";
		$data['news_item']  = $this->news->get_latest_news();

		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/index',$data);
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
		$config = array();
		$config['base_url'] 	= site_url('gallery');
		$config['total_rows'] 	= $this->gallery->count_images();
		$config['per_page'] 	= 15;
		$config["uri_segment"]  = 2;
		$config['use_page_numbers'] = TRUE;

		$this->pagination->initialize($config);

		if($this->uri->segment(2)){
			$page = ($this->uri->segment(2)) ;
		}

		else{
			$page = 1;
		}

		$data['pages'] 		=   $this->pagination->create_links();
		$data['title'] 		=  "AboutUs/Gallery";	
		$data['get_imgs']	=  $this->gallery->get_images($config["per_page"], $page);

		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/gallery/index',$data);
		$this->load->view('main/template/footer');
	}

	public function news()
	{
		$data['news'] = $this->news->get_news();
		$data['title'] = 'News';
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/news/index',$data);
		$this->load->view('main/template/footer');
	}

	public function read_news($slug=NULL)
	{
		$data['news_item'] = $this->news->get_news($slug);

		if (empty($data['news_item']))
        {
            show_404();
        }

		$data['list_news'] = $this->news->list_news($slug);
		$data['title'] = 'News';
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/news/newsone/index',$data);
		$this->load->view('main/template/footer');
	}
}