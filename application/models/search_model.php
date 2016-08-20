<?php
class Search_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function cariData($keyword)
	{	
		$this->db->select('*');
        $this->db->from('dummy');
        $this->db->like('email',$keyword, 'none');
        //$this->db->or_like('email', $keyword, 'both');

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
	}
 
 
}