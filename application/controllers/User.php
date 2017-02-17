<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}

	public function index(){
		$data['admin'] = $this->Model_admin->view();

		$data['content'] = $this->load->view('user/user', $data, TRUE);

		$this->load->view('template', $data);
	}

	public function tambah(){
		$this->Model_admin->tambah();
		redirect('user', 'refresh');
	}

	public function edit($id){
	if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$this->Model_admin->edit($id);
				redirect('user', 'refresh');
			}
			// load data
			$data['admin'] = $this->Model_admin->select_byid($id);

			$data['content'] = $this->load->view('user/user_edit', $data, TRUE);

			$this->load->view('template', $data);
	}

	public function hapus($id){
		$this->Model_admin->hapus($id);
		redirect('user', 'refresh');
	}
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */
