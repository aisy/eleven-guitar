<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceHalut extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_kutama');
    $this->load->model('Model_testimoni');
    $this->load->model('Model_slider');
    $this->load->model('Model_produk');
  }

  function getData(){
      $data = $this->Model_kutama->get();

      $response = array(
        'data'    => json_decode(json_encode($data), true),
        'slider'  => $this->Model_slider->get();
        'produk'  => $this->Model_produk->get();
      );

      $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($data_fix))
      ->_display();
      exit;
  }

}
