<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class CUPGallery_model extends CI_Model
{
	public function __construct(){
		parent:: __construct();
	}

	public function get_images($limit , $id){
        $offset = ($id-1)*$limit;
        $this->db->order_by('id', 'DESC');
		$query = $this->db->get( 'gallery_images', $limit, $offset );
		
		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}

	public function	get_downloadables(){
		$query	= $this->db->get('files');
		return	$query->result_array();	
	}		

	function count_images()
    {
      return $this->db->count_all('gallery_images');
    }

}