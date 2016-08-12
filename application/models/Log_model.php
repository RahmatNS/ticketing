<?php
class Log_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function logData()
	{	
		$this->db->select('*');
        $this->db->from('dummy');
        $this->db->where('check_in_status','Approved');
        $this->db->order_by("time_check_in", "desc");

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
	}
 
 
}