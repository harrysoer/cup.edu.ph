<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class admin_model extends CI_Model
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
            'slug' => $slug,
            'text' => $this->input->post('content')
        );

        return $this->db->insert('news', $data);
	}
}