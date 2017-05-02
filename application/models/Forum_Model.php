<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_Model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}	

	public function get_post($id=FALSE){

		if ($id === FALSE)
        {
            // $query = $this->db->query('SELECT * FROM news ORDER	BY	dates DESC;');
            $this->db->order_by('id_posts', 'DESC');
            $query=$this->db->get('forum_posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('forum_posts', array('id_posts' => $id));
        return $query->row_array();
	}

	public function set_post(){
		$username = $this->session->first_name." ".$this->session->last_name;

		$data = array (
				'title' => $this->input->post('title'),
				'text' 	=> $this->input->post('text'),
				'author'=> $username,
				'dates'	=> date('Y-m-d h:i:sa'),
				'time'	=> date('h:i:sa'),
			);

		return $this->db->insert('forum_posts', $data);
	}		

	public function get_comments($id=FALSE){
		
        $query = $this->db->get_where('forum_comments', array('id_post' => $id));
        return $query->result_array();
	}

	//gawin mo dito sa pagkuha ng uri segment ay katulad dun sa pag-delete ng images sa model mo ng gallery
	public function set_comment($id){
		$name = $this->session->first_name." ".$this->session->last_name;

		$data = array (
				'text' 		=> $this->input->post('text'),
				'id_post' 	=> $id,
				'author'	=> $name,
				'dates'		=> date('Y-m-d'),
				'time'		=> date('h:i:sa'),
			);

		return $this->db->insert('forum_comments', $data);
	}

}

/* End of file forum_Model.php */
/* Location: ./application/models/forum_Model.php */