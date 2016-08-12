<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('search_model');
	}

	public function index()
	{
		$this->load->view('view_search');
	}

	public function hasil()
	{
		$keyword    =   $this->input->get('keyword');

		if (empty($keyword)) {			
			$error['error'] = "Type your keyword";
			$this->load->view('view_search', $error);
		}
		else {
			$data['results']    =   $this->search_model->cariData($keyword);
			//$data2['cari'] = $this->search_model->cariData();
			$this->load->view('view_result', $data);
		}
		
	}
}
