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


	public function resolve_user_login($idNumber, $password) {
		
		$this->db->select('password');
		$this->db->from('user_students');
		$this->db->where('studentID', $idNumber);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}

	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}

	public function get_name_from_id_number($idNumber) {
		
		$this->db->select('studentID');
		$this->db->from('user_students');
		$this->db->where('studentID', $idNumber);

		return $this->db->get()->row('studentID');
		
	}

	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}


}