<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends Admin_Controller{

  public function __construct()
  {
    parent::__construct();
    // $this->load->model('');
  }

  function index(){
    $data['content'] = $this->load->view('halaman/list_owner', array(), TRUE);

    $this->load->view('template', $data);
  }

}
