<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Barang extends CI_Model {

	public function view(){
		$data = $this->db->get('barang');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			'id_barang' 	=> ,
			'nama_barang' 	=> $this->input->post('nama_barang'), 
			'id_kategori' 	=> $this->input->post('kategori'),
			'harga' 		=> $this->input->post('harga'),
			'keterangan' 	=> $this->input->post('keterangan')
		);

		$this->db->insert('barang', $object);
	}

	public function data_edit($id){
		$this->db->where('id_barang', $id);
		$data = $this->db->get('barang');

		return $data->first_row();
	}

	public function edit($id){
		$object = array(
			'nama_barang' 	=> $this->input->post('nama_barang'), 
			'id_kategori' 	=> $this->input->post('kategori'),
			'harga' 		=> $this->input->post('harga'),
			'keterangan' 	=> $this->input->post('keterangan') 
			);

		$this->db->where('id_barang', $id);
		$this->db->update('barang', $object);
	}

	public function hapus($id){
		$this->db->where('id_barang', $id);
		$this->db->delete('barang');
	}

}

/* End of file model_Barang.php */
/* Location: ./application/models/model_Barang.php */