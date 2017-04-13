<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceBarang extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model('Model_barang');
        $this->output->set_header("Access-Control-Allow-Origin:*");
    }

    function getBarang(){

        $data = $this->Model_barang->get();
        // mengambil data dari json, (cocok untuk web service)
        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data))
        ->_display();
        exit;
    }

    public function getBarangPage($page, $size){
        // $page = 1;
        // $size = 5;

        // $items = $this->Model_barang->get_api(($page - 1) * $size, $size)
        //
        // foreach ($items as $key){
        //
        // }

        $respone = array(
        "total_count" => count($this->Model_barang->get()),
        "items"       => $this->Model_barang->get_api(($page - 1) * $size, $size)
        // "picture"     =>
        );

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($respone, JSON_PRETTY_PRINT))
        ->_display();
        exit;
    }

    public function getBarangDetail($id){

        $data = $this->Model_barang->getID($id);
        $data_fix = json_decode(json_encode($data), true);

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data_fix))
        ->_display();
        exit;
    }
}
