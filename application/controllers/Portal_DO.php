<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_DO extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('portal_do_m', 'do');
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		$group='Deans_Office';
		if (!$this->ion_auth->in_group($group))
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			echo "false group";
		}
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('do/login', 'refresh', 301);
		}
	}

	public function logout(){
		$logout=$this->ion_auth->logout();
		redirect('do/login','refresh',301);

	}


	public function addCourse(){
	
		//validate form input
		
		$this->form_validation->set_rules( 'course', 'Course', 'trim|required|is_unique[portal_courses.course_name]', array('is_unique' => 'This Course Name already exists. Please choose another one.')); 
		$this->form_validation->set_rules('years', 'Year', 'trim|required|numeric|min_length[1]');
		$this->form_validation->set_rules('abbrv', 'Abbriviation', 'trim|required'); 

		if($this->form_validation->run() === false){
			$this->load->view('portal/do/add_course');
		}
		else{
			$course = $this->input->post('course') ;
			$years = $this->input->post('years') ;
			$abbrv = $this->input->post('abbrv') ;
			
			$this->do->add_course($course, $years ,$abbrv);
			redirect('do/courses','refresh');
		}
	}

	public function index()
	{
		$data['get_courses'] = $this->do->get_courses();
		$this->load->view('portal/do/index', $data);
	}

	public function courses()
	{
		$data['get_courses'] = $this->do->get_courses();
		$this->load->view('portal/do/courses', $data);
	}

	public function view_curriculum($id=null)
	{
		$data['get_curriculum'] = $this->do->get_curriculum($id);
		$this->load->view('portal/do/curriculum', $data);
	}

}

/* End of file portal_DO.php */
/* Location: ./application/controllers/portal_DO.php */