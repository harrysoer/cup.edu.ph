<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_Prof_M extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//setting the session
	public function get_college_dept($username){
		$user = $this->db
	        ->select("first_name, last_name, college_dept")
	        ->where(
	             [
	                'username' => $username
	             ]
	         )
	        ->get("faculty_users")
	        ->row();

	   if ($user) {
		   	 $query = $this->db->get_where('school_years', array('active' => 1));
		   	 $year = $query->row();

	         $logindata = [
	             'first_name' => $user->first_name,
	             'last_name' => $user->last_name,
	             'mi'        => $user->mi,   
	             'college_dept' => $user->college_dept,
	         	 'school_year'		=> $year->school_year,
	         	 'sem'		=> $year->sem,
	         ];
	         $this->session
	              ->set_userdata($logindata);
	         return true;
	   }
	   else {
	         return false;
   		}
	}

}

/* End of file portal_Prof_M.php */
/* Location: ./application/models/portal_Prof_M.php */