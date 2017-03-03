<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends Admin_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_listowner');
    $this->load->model('Model_profil');
  }

  function index(){
    $data['listown'] = $this->Model_listowner->get();
    $data['profil']  = $this->Model_profil->get();
    $data['owner']   = $this->Model_listowner->get_owner();
    $data['content'] = $this->load->view('halaman/list_owner', $data, TRUE);

    // print_r($data['listown']);
    $this->load->view('template', $data);
  }

  public function tambah(){
    $this->Model_listowner->tambah();
    redirect('admin/tentang');
  }

  public function edit($id){
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data['nama_list']  = $this->input->post('nama_list');
      $data['caption']    = $this->input->post('caption');
      $this->Model_listowner->edit($data, $id);
      redirect('admin/tentang', 'refresh');
    }
    $data['owner']   = $this->Model_listowner->get_owner();
    $data['listown'] = $this->Model_listowner->select_byid($id);

    $data['content'] = $this->load->view('halaman/list_owner_edit', $data, TRUE);

    $this->load->view('template', $data);
  }

  public function hapus($id){
    $this->Model_listowner->hapus($id);
    redirect('admin/tentang', 'refresh');
  }
}
