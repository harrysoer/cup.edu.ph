<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class adminImageGallery_model extends CI_Model
{
	public function __construct(){
		parent:: __construct();
	}

	//======Image======

	public function setImage($file_name){
		$data=array(
				'file_name'   => $file_name,
				'album_name'  => $this->input->post('album_name'),
			);

		return $this->db->insert('files', $data);
	}

	var $table = 'gallery';
	var $column_order = array('file_name', 'album_name',  null ); //set column field database for datatable orderable
	var $column_search = array('file_name','album_name'); //set column field database for datatable searchable
	var $order = array('id' => 'desc'); // default order 



	//for ajax datatable of album
	public function get_datatablesImages(){
		$this->_get_datatables_queryImage();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->query("SELECT file_name from gallery_image where id = $id;");
		return $query->result();
	}

	private function _get_datatables_queryImage()
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

	function count_filteredImages()
	{
		$this->_get_datatables_queryImage();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_allImages()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function deleteImage_by_id($id)
	{	
		$query = $this->db->query("SELECT file_name from gallery_image where id = $id;");
		$row = $query->row(); 
		if (isset($row)){
			$file_name = $row->file_name;
		}

		$path='./uploads/gallery/images/'.$file_name;
		$this->db->where('id', $id);
		$this->db->delete($this->table);
		unlink($path);	
	}



}