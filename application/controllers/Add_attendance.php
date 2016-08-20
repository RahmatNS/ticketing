<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_attendance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('attendance_model');
	}

	public function index()
	{
		$this->load->view('view_add_attendance');
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('afiliasi', 'Affiliation', 'required');

		if($this->form_validation->run() == FALSE)
		{
			//$this->index();
			echo "error";
		}
		else
		{
			$this->attendance_model->add_attendance();
			//$error['error'] = "Berhasil menambahkan user";
			//$this->load->view('view_log',$error);
			redirect ("log");
		}
	}
}
