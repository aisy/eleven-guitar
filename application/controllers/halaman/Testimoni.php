<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends Admin_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_ktestimoni');
    $this->load->model('Model_litestimoni');
  }

  public function index(){
    $data['testimoni'] = $this->Model_ktestimoni->get();
    $data['litestimoni'] = $this->Model_litestimoni->get();
    print_r($data['litestimoni']);

    $data['content'] = $this->load->view('halaman/testimoni', $data, true);

    $this->load->view('template', $data);
  }

  public function tambah(){
    $this->Model_ktestimoni->tambah();
    redirect('admin/testimoni','refresh');
  }

  public function edit($id){
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $this->Model_ktestimoni->edit($id);

      redirect('admin/testimoni','refresh');
    }

    $data['testimoni'] = $this->Model_ktestimoni->select_byid($id);

    $data['content'] = $this->load->view('halaman/testimoni_edit', $data, true);

    $this->load->view('template', $data);
  }

  public function hapus($id){
    $this->Model_ktestimoni->hapus($id);
    redirect('admin/testimoni','refresh');
  }

}
?>
