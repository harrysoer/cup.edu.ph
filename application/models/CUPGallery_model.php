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

	public function get_images(){
        $query = $this->db->get('gallery_images');
		return $query->result_array();
	}

}