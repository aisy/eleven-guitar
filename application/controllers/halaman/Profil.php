<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends Admin_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_profil');
  }

  public function tambah(){

    if ($_POST) {

			$config['upload_path'] 		= 'products/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']  		= '2000';
			$config['overwrite']        = FALSE;
			$config['encrypt_name']     = TRUE;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar_header')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				// echo $data;

				$file_name = $this->upload->data('file_name');
				// echo $file_name;
				$this->Model_profil->tambah($file_name);
        redirect('admin/tentang');
			}
		}

  }

  public function edit($id){
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data['judul']         = $this->input->post('judul');
      $data['isi_profil']    = $this->input->post('isi_profil');

      if(!$_FILES['gambar_header']['name'] == '')
			{
				//upload file config
				$config['upload_path'] = 'products';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = 5000;
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				//uploading File
				if(!$this->upload->do_upload('gambar_header'))
				{
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('admin/profil/' . $id, 'refresh');
				}
				else
				{
					// delete image File
					$path = "products/";
					$record = $this->Model_profil->select_byid($id);
					$filename = $record[0]->gambar_header;
					unlink($path . $filename);

					$data['gambar_header'] = $this->upload->data()['file_name'];
				}
			}

      $this->Model_profil->edit($data, $id);
      redirect('admin/tentang', 'refresh');
    }

    $data['profil'] = $this->Model_profil->select_byid($id);

    $data['content'] = $this->load->view('halaman/profil_edit', $data, TRUE);

    $this->load->view('template', $data);
  }

  public function hapus($id){
    $this->Model_profil->hapus($id);
    redirect('admin/tentang', 'refresh');
  }
}
