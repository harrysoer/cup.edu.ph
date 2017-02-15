<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class portal_student_model extends CI_Model
{
	public function _construct(){
		parent::construc();
	}

	public function addStudent($idNumber, $password, $firstName, $middleName, $lastName, $course, $year) {
		$data = array(
			'studentID' => $idNumber,
			'password' 	=> $this->hash_password($password),
			'FirstName' => $firstName,
			'MiddleName'=> $middleName,
			'LastName' 	=> $lastName,
			'Course'  	=> $course,
			'Year' 		=> $year,
		);
		return $this->db->insert('user_students',$data);
	}

	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
}