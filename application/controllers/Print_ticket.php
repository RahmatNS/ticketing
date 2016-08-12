<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_ticket extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('fpdf');
    } 
    
    public function index() {
        $this->load->model('print_pdf_model');
        $this->print_pdf_model->time_checkin();
        $res['data'] = $this->print_pdf_model->select_data();
        $this->load->view('view_pdf',$res);
    }
}

