<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class adminAlbum_model extends CI_Model
{
	public function __construct(){
		parent:: __construct();
	}

	//======Albums======

	public function setAlbumName($data){
		$album_name=$this->input->post('album_name');
		$slug = url_title($this->input->post('album_name'), 'dash', TRUE);

		$data=array(
				'album_name'  => $album_name,
				'slug'		  => $slug,
			);
		
   		// mkdir(FCPATH.'/uploads/gallery/' . $album_name, 0777, TRUE);
		
		$this->db->insert('gallery_album', $data);
		
		return $data['album_name'];
	}



	var $table = 'gallery_album';
	var $column_order = array( 'album_name',  null ); //set column field database for datatable orderable
	var $column_search = array('album_name'); //set column field database for datatable searchable
	var $order= array('id' => 'desc'); // default order 


	//for ajax data table of album

	public function get_datatablesAlbums(){
		$this->_get_datatables_queryAlbums();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
	

	private function _get_datatables_queryAlbums()
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

	function count_filteredAlbums()
	{
		$this->_get_datatables_queryAlbums();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_allAlbums()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function deleteAlbum_by_id($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}


}