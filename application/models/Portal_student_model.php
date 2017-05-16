<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class portal_student_model extends CI_Model
{
	public function _construct(){
		parent:: _construct();

	}

	public function get_college_dept($username){
		$user = $this->db
	        ->select("id, year, first_name, last_name, middle_initial, course, college_dept")
	        ->where(
	             [
	                'id' => $username
	             ]
	         )
	        ->get("students_informations")
	        ->row();

	   if ($user) {
		   	 $query = $this->db->get_where('school_years', array('active' => 1));
		   	 $year = $query->row();

	         $logindata = [
	             'id' => $user->id,
	             'year' => $user->year,
	             'first_name' => $user->first_name,
	             'last_name' => $user->last_name,
	             'middle_initial' => $user->middle_initial,
	             'course' => $user->course,
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