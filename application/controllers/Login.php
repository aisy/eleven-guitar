<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_admin');
  }

  function index(){
    $this->load->view('login');
  }

  public function process_login(){
    $result = $this->Model_admin->login();

    if ($result != FALSE) {
      $admin = $this->Model_admin->select_byid($result->id_admin);

      $session_data = array(
        'id_admin' => $result->id_admin,
        'username' => $result->username
      );

      $this->session->set_userdata('logged_in', $session_data);

      redirect('admin/halaman-utama');
    }else {
      $message['invalid_user'] = 'invalid username or password';
				$this->session->set_flashdata('error_message', $message);
				redirect('/','refresh');
    }
  }

  public function process_logout(){
    $this->session->unset_userdata('logged_in');
    redirect('/');
  }
}
