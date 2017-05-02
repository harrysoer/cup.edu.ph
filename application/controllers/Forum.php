<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Forum_model', 'forum');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			return show_error('You must log in first to view this page.');
		}
	}

	public function index()
	{	
		$data['title']="UNIVERSITY FORUM";
		$data['get_posts'] = $this->forum->get_post();
		if ($this->ion_auth->in_group('Deans_Office'))
		{	
			$this->load->view('portal/dportal/template/header',$data);
			$this->load->view('portal/dportal/template/menuBar');
			$this->load->view('portal/dportal/forum/index',$data);
			$this->load->view('portal/dportal/template/footer');
			$this->load->view('portal/dportal/template/js');
		}

	}

	public function read_post($id=null)
	{
		$id = $this->uri->segment(3);
		$data['get_post'] = $this->forum->get_post($id);
		$data['get_comments'] = $this->forum->get_comments($id);
		
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
        {
			if ($this->ion_auth->in_group('Deans_Office'))
			{	
				$this->load->view('portal/dportal/template/header',$data);
				$this->load->view('portal/dportal/template/menuBar');
				$this->load->view('portal/dportal/forum/view_post',$data);
				$this->load->view('portal/dportal/template/footer');
				$this->load->view('portal/dportal/template/js');
			}
			elseif($this->ion_auth->in_group('Student'))
			{

			}
			elseif ($this->ion_auth->in_group('Professor')) {

			}
		}
		else
		{
			$this->forum->set_comment($id);
			redirect( site_url('forum/post/'.$id) , 'refresh') ;		 
		}
	}

	public function create_post(){
		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[40]|min_length[5]');
        
        if ($this->form_validation->run() === FALSE)
        {
        	if ($this->ion_auth->in_group('Deans_Office'))
			{	
				$this->load->view('portal/dportal/template/header',$data);
				$this->load->view('portal/dportal/template/menuBar');
				$this->load->view('portal/dportal/forum/index',$data);
				$this->load->view('portal/dportal/template/footer');
				$this->load->view('portal/dportal/template/js');
			}
			elseif($this->ion_auth->in_group('Student'))
			{

			}
			elseif ($this->ion_auth->in_group('Professor')) {

			}
		}
		else
		{
			$this->forum->set_post();
			redirect( site_url('forum')) ;		 
		}
	}
}

/* End of file forum.php */
/* Location: ./application/controllers/forum.php */