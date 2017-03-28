<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class adminNews_model extends CI_Model
{
	public function __construct(){
		parent:: __construct();
	}

//==========PAGES==========

	//===========News===========

	public function setNews(){
		$slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'author'=> $this->input->post('author'),
            'slug' 	=> $slug,
            'text' 	=> $this->input->post('content')
        );

        return $this->db->insert('news', $data);
	}


	var $table = 'news';
	var $column_order = array('title', 'author ',  null ,null); //set column field database for datatable orderable
	var $column_search = array('title','author','text'); //set column field database for datatable searchable
	var $order = array('id' => 'desc'); // default order 

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);

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
	function get_datatablesNews()
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


    public function get_news_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }

	public function set_newsUpdate($id = 0)
    {
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'author'=> $this->input->post('author'),
            'slug' 	=> $slug,
            'text' 	=> $this->input->post('content')
        );

        $this->db->where('id', $id);
        return $this->db->update('news', $data);
        
    }

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function get_news($slug = FALSE)
    {
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
}