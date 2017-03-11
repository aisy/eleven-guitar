<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_kpembayaran');
    $this->load->model('Model_lipembayaran');
  }

  // ===========================================================================
  //
  // ===========================================================================
  


  // ===========================================================================
  // List
  // ===========================================================================

  public function index(){

      $data['content'] = $this->load->view('halaman/pembayaran', array(), true);

      $this->load->view('template', $data);
  }

  public function create(){
    $simpan = $this->Model_lipembayaran->tambah();

  }

  public function edit($id){
    $data['data_edit'] = $this->Model_lipembayaran->getId();
  }

  public function hapus($id){
    $hapus = $this->Model_lipembayaran->hapus();
  }

}
