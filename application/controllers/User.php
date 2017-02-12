<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}

	public function index()
	{
		if ($this->session->userdata('admin') == 1) {

		$data['admin'] = $this->Model_admin->view();
		$this->load->view('admin/head');
		$this->load->view('admin/user', $data);
		$this->load->view('datatables');
		$this->load->view('javascript-admin');
	}else {
		$data['heading'] = "<center><h1>404</h1></center>";
		$data['message'] = "<center><p>Page Not Found</p></center>";
		$this->load->view('errors/html/error_404', $data);
	}
	}

	public function tambah(){
		$this->Model_admin->tambah();
		redirect('user', 'refresh');
	}

	public function edit($id){
		if ($this->session->userdata('admin') == 1) {

			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$this->Model_admin->edit($id);
				redirect('user', 'refresh');
			}
			// load data
			$data['admin'] = $this->Model_admin->select_byid($id);

			$this->load->view('admin/head');
			$this->load->view('admin/user_edit', $data);
			print_r($data);
		}else {
			$data['heading'] = "<center><h1>404</h1></center>";
			$data['message'] = "<center><p>Page Not Found</p></center>";
			$this->load->view('errors/html/error_404', $data);
		}
	}

	public function hapus($id){
		$this->Model_admin->hapus($id);
		redirect('user', 'refresh');
	}
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */
