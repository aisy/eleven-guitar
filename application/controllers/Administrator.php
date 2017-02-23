<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}

	public function index(){}

	public function halaman_utama(){

		// print_r($this->session->userdata());

		$data['content'] = $this->load->view('index', array(), TRUE);

		$this->load->view('template', $data);

	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
