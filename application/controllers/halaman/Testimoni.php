<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends Admin_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_listowner');
  }

  function index(){
    $data['listown'] = $this->Model_listowner->get();
    $data['content'] = $this->load->view('halaman/list_owner', $data, TRUE);

    // print_r($data['listown']);
    $this->load->view('template', $data);
  }

}
