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

		$data['get_downloads'] = $this->gallery->get_downloadables();

		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/admission/index');
		$this->load->view('main/template/footer');
	}

	public function download($filename = NULL) {
	    // load download helder
	    $this->load->helper('download');
	    // read file contents
	    $data = file_get_contents(base_url().'/uploads/forms/'.$filename);

	    force_download($filename, $data);
	}

	public function studentlife()
	{
		$data['title']="StudentLife";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/index');
		$this->load->view('main/template/footer');
	}

	public function gallery()
	{
		$slug = $this->uri->segment(2);
		if ($this->gallery->get_slug($slug)) {
			
			$config = array();
			$config['base_url'] 	= site_url('gallery/'.$slug.'/');
			$config['first_url'] 	= 1;
			$config['total_rows'] 	= $this->gallery->count_images();
			$config['per_page'] 	= 9;
			$config["uri_segment"]  = 3;
			$config['use_page_numbers'] = TRUE;
	
			$this->pagination->initialize($config);
			
			
			if( $this->uri->segment(3)){
				$page = $this->uri->segment(3) ;
			}
			else{
				$page=1;
			}
	
			$data['pages'] 		=   $this->pagination->create_links();
			$data['title'] 		=  "Gallery";	
			$data['get_imgs']	=  $this->gallery->get_images($config["per_page"], $page, $slug);
	
			$this->load->view('main/template/header',$data);
			$this->load->view('main/template/js');
			$this->load->view('main/gallery/view_album',$data);
			$this->load->view('main/template/footer');
		}
		else{

			$config = array();
			$config['base_url'] 	= site_url('gallery/');
			$config['first_url'] 	= 1;
			$config['total_rows'] 	= $this->gallery->count_albums();
			$config['per_page'] 	= 15;
			$config["uri_segment"]  = 2;
			$config['use_page_numbers'] = TRUE;
	
			$this->pagination->initialize($config);
			
			
			if( $this->uri->segment(2)){
				$page = $this->uri->segment(2) ;
			}
			else{
				$page=1;
			}
		
	
			$data['pages'] 		=   $this->pagination->create_links();
			$data['title'] 		=  "Gallery";	
			$data['get_album']	=  $this->gallery->get_albums();
	
			$this->load->view('main/template/header',$data);
			$this->load->view('main/template/js');
			$this->load->view('main/gallery/index',$data);
			$this->load->view('main/template/footer');
		}
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

	
	public function mvg()
	{
		$data['title']="Mission | Vision | Goals";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/about/mvg/index');
		$this->load->view('main/template/footer');
	}

	public function adm()
	{
		$data['title']="Administrators";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/about/adm/index');
		$this->load->view('main/template/footer');
	}

	public function hymn()
	{
		$data['title']="Hymn";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/about/hymn/index');
		$this->load->view('main/template/footer');
	}

	public function cba()
	{
		$data['title']="College of Business Administration";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/academic/cba/index');
		$this->load->view('main/template/footer');
	}

	public function coact()
	{
		$data['title']="College of Office Administration and Computer Technology";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/academic/coact/index');
		$this->load->view('main/template/footer');
	}

	public function coas()
	{
		$data['title']="College of Arts and Sciences";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/academic/coas/index');
		$this->load->view('main/template/footer');
	}

	public function coe()
	{
		$data['title']="College of Education";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/academic/coe/index');
		$this->load->view('main/template/footer');
	}

	public function conm()
	{
		$data['title']="College of Nursing and Midwifery";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/academic/conm/index');
		$this->load->view('main/template/footer');
	}

	public function csc()
	{
		$data['title']="Central Student Council";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/csc/index');
		$this->load->view('main/template/footer');
	}

	public function koh()
	{
		$data['title']="Knights of Herodotus";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/koh/index');
		$this->load->view('main/template/footer');
	}

	public function mss()
	{
		$data['title']="Math Smart Society";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/mss/index');
		$this->load->view('main/template/footer');
	}

	public function ec()
	{
		$data['title']="English Circle";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/ec;/index');
		$this->load->view('main/template/footer');
	}

	public function sts()
	{
		$data['title']="Sci - Tech Society";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/sts/index');
		$this->load->view('main/template/footer');
	}

	public function kgmaf()
	{
		$data['title']="Kapisanan ng mga Guro at Mag-aaral sa Asignaturang Filipino";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/kgmaf/index');
		$this->load->view('main/template/footer');
	}

	public function promise()
	{
		$data['title']="A Student's Promise";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/studentlife/promise/index');
		$this->load->view('main/template/footer');
	}

	public function calendar()
	{
		$data['title']="Academic Calendar";
		$this->load->view('main/template/header',$data);
		$this->load->view('main/template/js');
		$this->load->view('main/academic/calendar/index');
		$this->load->view('main/template/footer');
	}
	
}