<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_DO_M extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	

	public function get_college_dept($username){
		$user = $this->db
	        ->select("first_name, last_name, college_dept")
	        ->where(
	             [
	                'username' => $username
	             ]
	         )
	        ->get("do_accounts")
	        ->row();

	   if ($user) {
		   	 $query = $this->db->get_where('school_years', array('active' => 1));
		   	 $year = $query->row();

	         $logindata = [
	             'first_name' => $user->first_name,
	             'last_name' => $user->last_name,
	             'college_dept' => $user->college_dept,
	         	  'school_year'		=> $year->school_year,
	         ];
	         $this->session
	              ->set_userdata($logindata);
	         return true;
	   }
	   else {
	         return false;
   }
	}
	

	
	public function get_courses(){
		$college_dept = $this->session->college_dept;
		$query 		  = $this->db->get_where('portal_courses', array('college_dept' => $college_dept));
        return $query->result_array();
	}
	
	public function add_course($course, $years ,$abbrv){
		
		 $data = array(
            'course_name' => $course,
            'abbrv'	  	  => $abbrv,
            'college_dept'=> $this->session->college_dept,
            'years' 	  => $years,
           
        );

		return   $this->db->insert('portal_courses', $data);
	}

	public function add_subjects($subject_id, $description, $units, $sem, $year){
		$course_id	=$this->uri->segment(4);
		 $data = array(
            'subj_code'   => $subject_id,
            'description' => $description,
            'no_units' 	  => $units,
            'sem' 	 	  => $sem,
            'year' 	 	  => $year,
            'college_dept'=> $this->session->college_dept,
            'course_id'	  => $course_id	,
           
        );

		return   $this->db->insert('portal_subjects', $data);
	}

	public function get_curriculum($id=0){
			
		$college_dept = $this->session->college_dept;
		
		if ($id===0) {
			$query = $this->db->get_where('portal_curriculums', array('college_dept' => $college_dept));
	        return $query->result_array();
		}

		$query = $this->db->get_where('portal_curriculums', array('course_id' => $id, 'college_dept'=>$college_dept));
        return $query->result_array();

	}

	public function get_year1(){
		$id = $this->uri->segment(3);
		$query = $this->db->get_where('portal_subjects', array('course_id' => $id, 'year' => 1));
		return $query->result_array();
	}

	public function get_year2(){
		$id = $this->uri->segment(3);
		$query = $this->db->get_where('portal_subjects', array('course_id' => $id, 'year' => 2));
		return $query->result_array();
	}

	public function get_year3(){
		$id = $this->uri->segment(3);
		if ($query = $this->db->get_where('portal_subjects', array('course_id' => $id, 'year' => 3))
		) 
		{
			return $query->result_array();
		}
		return false;
	}

	public function get_year4(){
		$id = $this->uri->segment(3);
		$query = $this->db->get_where('portal_subjects', array('course_id' => $id, 'year' => 4));
		return $query->result_array();
	}

}

/* End of file portal_DO_M.php */
/* Location: ./application/models/portal_DO_M.php */