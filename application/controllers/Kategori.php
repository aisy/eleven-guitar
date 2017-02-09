<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_kategori');
  }

  function index(){
    if ($this->session->userdata('admin') == 1) {

      //load data
      $data['kategori']  = $this->Model_kategori->view();

			$this->load->view('admin/head');
      $this->load->view('admin/kategori', $data);
      $this->load->view('datatables');
			$this->load->view('javascript-admin');
		}else {
			$data['heading'] = "<center><h1>404</h1></center>";
			$data['message'] = "<center><p>Page Not Found</p></center>";
			$this->load->view('errors/html/error_404', $data);
		}
  }

  public function tambah(){
    $this->Model_kategori->tambah();
    redirect('admin/kategori', 'refresh');
  }

  public function edit($id){
      if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data['nama_kategori'] = $this->input->post('nama_kategori');
      $this->Model_kategori->edit($data, $id);
      redirect('admin/kategori', 'refresh');
    }
  }

  public function hapus($id){
    $this->Model_kategori->hapus($id);
    redirect('admin/kategori', 'refresh');
  }
}
?>
