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

	public function addStudent($idNumber, $password, $firstName, $middleName, $lastName, $course, $year) {
		$data = array(
			'studentID' => $idNumber,
			'password' 	=> $this->hash_password($password), //encrypting password
			'FirstName' => $firstName,
			'MiddleName'=> $middleName,
			'LastName' 	=> $lastName,
			'Course'  	=> $course,
			'Year' 		=> $year,
		);
		return $this->db->insert('user_students',$data);
	}

	public function resolve_user_login($idNumber, $password) {
		
		$this->db->select('studentID');
		$this->db->from('user_students');
		$this->db->where('studentID', $idNumber);
		$tagaKuha=$this->db->get();
		
		if ($tagaKuha->num_rows()>0) {
		
			$hash = $tagaKuha->row_array();
			$tagapasa = array_shift($hash);		
			
			// decrypting password
			// return $this->verify_password_hash($password, $tagapasa);
			return true;			
		}

		

		// $qwerty="SELECT password from user_students WHERE studentID=".$idNumber."";
		// $tagapasa = $this->db->query($qwerty);
		
		// // decrypting password
		// return $this->verify_password_hash($password, $tagapasa);
			
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

	// encrypting password
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}

	// decrypting password	
	private function verify_password_hash($password, $tagapasa) {
		
		return password_verify($password, $tagapasa);
		
	}

}