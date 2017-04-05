<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class CUPNews_model extends CI_Model
{
	public function __construct(){
		parent:: __construct();
	}

	public function get_news($slug=FALSE){
		if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
	}

	public function list_news($slug=FALSE){
		$query = $this->db->query("SELECT title, dates, slug FROM news where slug != $slug ORDER BY rand() LIMIT 4;");
        return $query->result_array();
	}

	public function get_latest_news(){
        $query = $this->db->query("SELECT title, dates, slug FROM news ORDER BY dates DESC LIMIT 4;");
        return $query->result_array();
	}

}