<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_barang');
		// $this->load->model('Model File');
		// $this->load->model('Model File');
	}

	public function index(){

		$data['barang'] = $this->Model_barang->get();

		$this->load->view('admin/head');
		$this->load->view('barang/index', $data);
		$this->load->view('datatables');
	}


	public function tambah_data(){
		
	}

	public function kategori($nama){
			
	}

	public function hapus($id){
		
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */