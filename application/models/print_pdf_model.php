<?php
class Print_pdf_model extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct(); 
    }
    
    function select_data() {
    	$this->db->where('no', $this->uri->segment(3));
        $query = $this->db->get('dummy');
        return $query->result();    
    }

    function time_checkin() {
    	date_default_timezone_set('Asia/Jakarta');
    	$time = date("m/d/Y h:i:s a", time());
		$status = "Approved";

    	$data = array(
		   'check_in_status' => $status,
		   'time_check_in' => $time
		);

    	//var_dump($data);
    	//die;

    	$this->db->where('no', $this->uri->segment(3));
		$this->db->update('dummy', $data); 


	}
}