<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_owner extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_proowner');
  }

  function index(){
    $data['owner']   = $this->Model_proowner->get();
    $data['content'] = $this->load->view('halaman/profil_owner', $data, TRUE);

    $this->load->view('template', $data);
  }

  public function tambah(){

    if ($_POST) {

			$config['upload_path'] 		= 'products/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']  		= '2000';
			$config['overwrite']        = FALSE;
			$config['encrypt_name']     = TRUE;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				// echo $data;

				$file_name = $this->upload->data('file_name');
				// echo $file_name;
				$this->Model_proowner->tambah($file_name);
        redirect('admin/owner');
			}
		}

  }

  public function edit($id){
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data['nama_owner']         = $this->input->post('nama_owner');

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
					redirect('admin/owner/' . $id, 'refresh');
				}
				else
				{
					// delete image File
					$path = "products/";
					$record = $this->Model_proowner->select_byid($id);
					$filename = $record[0]->foto;
					unlink($path . $filename);

					$data['foto'] = $this->upload->data()['file_name'];
				}
			}

      $this->Model_proowner->edit($data, $id);
      redirect('admin/owner', 'refresh');
    }

    $data['owner'] = $this->Model_proowner->select_byid($id);

    $data['content'] = $this->load->view('halaman/profil_owner_edit', $data, TRUE);

    $this->load->view('template', $data);
  }

  public function hapus($id){
    $this->Model_proowner->hapus($id);
    redirect('admin/owner', 'refresh');
  }

}
