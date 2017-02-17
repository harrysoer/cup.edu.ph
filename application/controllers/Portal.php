<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('portal_student_model');
	}

	//trial and error for the form load library in the contruct
	//TEMPORARY(REGISTER PAGE)
	public function register()
	{	
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// setting up the Validation rules
		$this->form_validation->set_rules('idNumber','ID number', 'required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('firstName','First Name','required');
		$this->form_validation->set_rules('middleName','Middle Name','required');
		$this->form_validation->set_rules('lastName','Last Name','required');
		$this->form_validation->set_rules('course','Course','required');
		$this->form_validation->set_rules('year','Year','required');


		if ($this->form_validation->run()===false){
			$this->load->view('portal/templates/header');
			$this->load->view('portal/register');
			$this->load->view('portal/templates/footer');
		}else{
			$idNumber =  $this->input->post('idNumber');
			$password = $this->input->post('password');
			$firstName = $this->input->post('firstName');
			$middleName = $this->input->post('middleName');
			$lastName = $this->input->post('lastName');
			$course = $this->input->post('course');
			$year = $this->input->post('year');

			if ($this->portal_student_model->addStudent($idNumber, $password, $firstName, $middleName, $lastName, $course, $year)){
				$this->load->view('portal/templates/header');
				$this->load->view('portal/success');
				$this->load->view('portal/templates/footer');
			}else{

				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/register/register', $data);
				$this->load->view('footer');
			}

		}
	}

	//login page
	public function login()
	{	
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// setting up the Validation rules
		$this->form_validation->set_rules('idNumber','ID number', 'required');
		$this->form_validation->set_rules('password','Password','required');
		
		//chinecheck if nirun ang form function library
		if ($this->form_validation->run()==FALSE){
		
			$this->load->view('portal/templates/header');
			$this->load->view('portal/login');
			$this->load->view('portal/templates/footer');
		}else{

			//set variables na nanggaling sa form login page
			$idNumber = $this->input->post('idNumber');
			$password = $this->input->post('password');

			if ($this->portal_student_model->resolve_user_login($idNumber, $password)){

				//setting the variables para sa mga sessions
				$fname = $this->user_model->get_name_from_id_number($idNumber);	

				$this->load->view('portal/templates/header');
				$this->load->view('portal/login_success', $data);
				$this->load->view('portal/templates/footer');
	
			}else{

				//palpak ang login
				$error='Wrong ID number and password';
				$data['error']=$error;

				//sinend kung alin ang kapalpakan, parang buhay ko
				$this->load->view('portal/templates/header');
				$this->load->view('portal/login', $data);
				$this->load->view('portal/templates/footer');

			}

		}
	}

	


}