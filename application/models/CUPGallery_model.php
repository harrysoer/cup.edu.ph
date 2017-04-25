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

	public function get_images($limit , $id, $slug){
        $offset = ($id-1)*$limit;
        $this->db->order_by('id', 'DESC');
		$query = $this->db->get_where( 'gallery_images', array('slug' => $slug) , $limit, $offset );
		
		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}


	function count_images()
    {
    	$slug  = $this->uri->segment(2);
      
    	$query = $this->db->get_where('gallery_images',array('slug' => $slug));
		return $query->num_rows();
    }


	public function get_slug($slug){
        
        $query = $this->db->get_where( 'gallery_album', array('slug' => $slug) );

		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}


	public function get_albums(){
        $query = $this->db->get('gallery_album');
        return $query->result_array();
	}

	function count_albums()
    {
      return $this->db->count_all('gallery_album');
    }


	public function get_cover_albums($limit , $id){
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

}