<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListStudents extends CI_Model {

	public function __construct(){
		parent:: __construct();
	}

	

	var $table = 'students_informations';
	// var $column_order = array('id', 'first_name ','last_name','course', 'year', 'section', 'status', 'enrolled', null); //set column field database for datatable orderable
	var $column_order = array('id', 'first_name ','last_name','course', 'year', 'section', null); //set column field database for datatable orderable
	// var $column_search = array('id', 'first_name ','last_name','course', 'year', 'section', 'status', 'enrolled',); //set column field database for datatable searchable
	var $column_search = array('id', 'first_name ','last_name','course', 'year', 'section',); //set column field database for datatable searchable
	var $order = array('id' => 'desc'); // default order 

	private function _get_datatables_query()
	{
		$cd = $this->session->college_dept;
		$this->db->from($this->table);
		$this->db->where('college_dept', $cd);
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	//for ajax
	function get_datatablesStudents()
	{	
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	

}

/* End of file listFaculty.php */
/* Location: ./application/models/listFaculty.php */