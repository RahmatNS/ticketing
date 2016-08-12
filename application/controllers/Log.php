<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('log_model');
    } 
    
    public function index() {
        $res['results'] = $this->log_model->logData();
        $this->load->view('view_log',$res);
    }
}

