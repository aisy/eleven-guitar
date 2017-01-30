<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/user');
		$this->load->view('datatables');
		$this->load->view('javascript-admin');
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */
