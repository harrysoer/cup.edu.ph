<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_DO_M extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_courses(){
		$college_dept=1;
		$query = $this->db->get_where('portal_courses', array('college_dept' => $college_dept));
        return $query->row_array();
	}

}

/* End of file portal_DO_M.php */
/* Location: ./application/models/portal_DO_M.php */