<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends Admin_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_kategori');
  }

  function index(){
      //load data
      $data['kategori']  = $this->Model_kategori->view();

      $data['content'] = $this->load->view('barang/kategori', $data, TRUE);

      $this->load->view('template', $data);
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
