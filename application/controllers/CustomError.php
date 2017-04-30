<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomError extends CI_Controller {
	
	public function __construct() 
    {
       parent::__construct(); 
    } 
   
    public function index() 
    { 
       $this->output->set_status_header('404'); 
       $this->load->view('errors/custom_pages/err404');//loading in custom error view
    } 
}

/* End of file customError.php */
/* Location: ./application/controllers/customError.php */