<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Portal_M extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_school_year() 
	{
		$this->db->order_by('active', 'desc');
		$query=$this->db->get('school_years');
		return $query->result_array();
	}

	public function set_school_year()
	{	
		// $yr = ;
		 $data = array(
            'active' => 0,
        );

        $this->db->where('active', 1);
		$this->db->update('school_years', $data);

		if ($this->db->update('school_years', $data)) {
	
			$data = array(
					'school_year' => '20'.$this->input->post('from').'-20'.$this->input->post('to'),
					'sem'		  => $this->input->post('sem'),
					'active'      => 1
				);
		
			return $this->db->insert('school_years', $data);
		}
		else{
			// return echo "something went wrong";
		}
	}

	public function get_students(){
		$query=$this->db->get('students_informations');
		return $query->result_array();
	}

}

/* End of file admin_Portal_M.php */
/* Location: ./application/models/admin_Portal_M.php */