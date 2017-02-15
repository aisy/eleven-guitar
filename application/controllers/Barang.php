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

		if ($this->session->userdata('admin') == 1) {

			$data['barang'] = $this->Model_barang->get();

			$this->load->view('admin/head');
			$this->load->view('barang/index', $data);
			$this->load->view('datatables');
			$this->load->view('javascript-admin');

		}else {

			$data['heading'] = "<center><h1>404</h1></center>";
			$data['message'] = "<center><p>Page Not Found</p></center>";
			$this->load->view('errors/html/error_404', $data);

		}
	}

	public function barang_json_get(){
		$data = $this->Model_barang->get();
		// mengambil data dari json, (cocok untuk web service)
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data))
		->_display();
		exit;
	}

	public function barang_slider(){
		$data = $this->Model_barang->get();
		$convert = json_decode(json_encode($data),true);

		$data_slider = array_chunk($convert, 3);

		// print_r($convert);

		// print_r($data_slider);

		// mengambil data dari json, (cocok untuk web service)
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data_slider))
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

	public function edit($id){
		if ($this->session->userdata('admin') == 1) {

			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$data['nama_barang']	= $this->input->post('nama_barang');
				$data['id_kategori']	= $this->input->post('id_kategori');
				$data['harga']			= $this->input->post('harga');
				$data['keterangan']		= $this->input->post('keterangan');

				if(!$_FILES['foto']['name'] == '')
				{
					//upload file config
					$config['upload_path'] = 'products';
					$config['allowed_types'] = 'jpg|png';
					$config['max_size'] = 5000;
					$config['encrypt_name'] = TRUE;

					$this->load->library('upload', $config);

					//uploading File
					if(!$this->upload->do_upload('foto'))
					{
						$this->session->set_flashdata('error', $this->upload->display_errors());
						redirect('admin/barang/' . $id, 'refresh');
					}
					else
					{
						// delete image File
						$path = "products/";
						$record = $this->Model_barang->select_byid($id);
						$filename = $record[0]->foto;
						unlink($path . $filename);

						$data['foto'] = $this->upload->data()['file_name'];
					}
				}

				$this->Model_barang->edit($data, $id);
				redirect('admin/barang','refresh');
			}

			$data['barang'] = $this->Model_barang->select_byid($id);

			$this->load->view('admin/head');
			$this->load->view('barang/barang_edit', $data);

		}else {
			$data['heading'] = "<center><h1>404</h1></center>";
			$data['message'] = "<center><p>Page Not Found</p></center>";
			$this->load->view('errors/html/error_404', $data);
		}
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

	public function kategori($nama){

	}


}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
