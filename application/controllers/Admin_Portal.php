<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Portal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Portal_M', 'portal');
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

	public function index()
	{
		$this->load->view('admin_portal/index');
	}

	public function school_year(){
		$data['get_school_year'] = $this->portal->get_school_year();
		$this->load->view('admin_portal/school_year/schoolyear',$data);
	}

	public function add_school_year(){
		$this->form_validation->set_rules('sem', 'Semester', 'required');
        $this->form_validation->set_rules('from', 'Starting year', 'required');
        $this->form_validation->set_rules('to', 'End Year', 'required');

		if($this->form_validation->run() === FALSE)
        {
			$this->load->view('admin_portal/school_year/add_school_year');
		}
		else{
			$this->portal->set_school_year();
			redirect('admin/portal/school_year','refresh');
		}
	}

	public function student(){
		$data['get_school_year'] = $this->portal->get_students();
		$this->load->view('admin_portal/student/students',$data);
	}

	// public function add_student(){
	// 	$this->form_validation->set_rules('sem', 'Semester', 'required');
 //        $this->form_validation->set_rules('from', 'Starting year', 'required');
 //        $this->form_validation->set_rules('to', 'End Year', 'required');

	// 	if($this->form_validation->run() === FALSE)
 //        {
	// 		$this->load->view('admin_portal/school_year/add_school_year');
	// 	}
	// 	else{
	// 		$this->portal->set_school_year();
	// 		redirect('admin/portal/school_year','refresh');
	// 	}
	// }
	
	public function do(){

		$data['get_do'] = $this->portal->get_do();
		$this->load->view('admin_portal/do/do',$data);
	}

	public function delete_do($username=null){
		$username = $this->uri->segment(5);
    
        if (empty($username))
        {
            show_404();
        }
	                
	    $this->portal->delete_do($username);        
	    redirect( site_url('admin/portal/deans_office'),'refresh');       
	}

	public function add_do(){
	
		//validate form input
		
		$this->form_validation->set_rules( 'username', 'Username', 'trim|required|is_unique[do_accounts.username]', array('is_unique' => 'This username already exists. Please choose another one.')); 
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required'); 
		$this->form_validation->set_rules('college_dept', 'College Depratment', 'trim|required'); 

		if($this->form_validation->run() === false){
			$this->load->view('admin_portal/do/add_do');
		}
		else{
			$username     = $this->input->post('username') ;
			$password     = $this->input->post('password') ;
			$first_name   = $this->input->post('first_name') ;
			$last_name    = $this->input->post('last_name') ;
			$college_dept = $this->input->post('college_dept') ;
			$group		  = array('4'); //deans_office group id

			$this->ion_auth->register($username, $password, $email='none', $additional_data ='none', $group);
			$this->portal->set_do($username ,$first_name ,$last_name  ,$college_dept);
			redirect('admin/portal/deans_office','refresh');
		}
	}

	// public function (){
	// 	$this->load->view('admin_portal/');
	// }

	// public function (){
	// 	$this->load->view('admin_portal/');
	// }
}

/* End of file admin_Portal.php */
/* Location: ./application/controllers/admin_Portal.php */