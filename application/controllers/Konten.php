<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {

	public function index(){

		$this->load->view('admin/head');
		$this->load->view('admin/konten', $data);
		$this->load->view('datatables');

	}

}

/* End of file konten.php */
/* Location: ./application/controllers/konten.php */
