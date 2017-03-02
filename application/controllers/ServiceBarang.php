<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classname extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_barang');
  }

  function getBarang(){
    $data = $this->Model_barang->get();
		// mengambil data dari json, (cocok untuk web service)
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data))
		->_display();
		exit;


  }

}
