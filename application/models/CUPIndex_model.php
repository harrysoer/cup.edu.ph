<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class CUPIndex_model extends CI_Model
{
	public function __construct(){
		parent:: __construct();
	}

	public function get_latest_news(){
        $query = $this->db->query("SELECT title, dates FROM news");
        return $query->result_array();
	}

}