<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}

	public function index(){
		$this->load->view('head');
		$this->load->view('admin/login');
		$this->load->view('javascript');

		if(isset($_POST['login'])){

			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/login');
			} else {
				$log = $this->Model_admin->login();

				if(count($log)>=1){
					$data_log = array(
						'id_user'	=> $log->id_admin,
						'username' 	=> $log->username,
						'admin'		=> $log->admin
						);

					$this->session->set_userdata($data_log);
					redirect(base_url('admin/halaman-utama'),'refresh');
				}
			}

		}
	}

	public function halaman_utama(){

		$cek_login = count($this->session->userdata());

		// print_r($this->session->userdata());

		$data['content'] = $this->load->view('index', array(), TRUE);

		$this->load->view('template', $data);

	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
