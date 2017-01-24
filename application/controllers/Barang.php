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
		$this->load->view('javascript');
	}

	public function barang_json_get(){
		$data = $this->Model_barang->get();

		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data))
		->_display();
		exit;
	}

	public function tambah_data(){

		if ($_POST) {

			$config['upload_path'] 		= 'products/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']  		= '2000';
			$config['encript_name']		= TRUE;

			$this->load->library('upload', $config);

			// $path = 'products/';

			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				//echo $data;

				$file_name = $this->upload->data('file_name');
				// echo $file_name;
				$this->Model_barang->tambah($file_name);
				redirect('admin/barang','refresh');	
			}
		}
	}

	public function kategori($nama){

	}

	public function hapus($id){
		// delete image
		$path = "products/";
		$record = $this->Model_barang->select_byid($id);
		$filename = $record[0]->foto;
		unlink($path . $filename);

		// delete record
		$this->Model_barang->hapus($id);
		redirect('admin/barang','refresh');
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */