<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Attendance_model extends CI_Model {
    
	public function add_attendance()
	{
		$data=array(
			'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'afiliasi'=>$this->input->post('afiliasi'));
		$this->db->insert('dummy',$data);
	}
}
?>