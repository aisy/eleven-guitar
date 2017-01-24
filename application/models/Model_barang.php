<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Barang extends CI_Model {

	public function get(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori');
		$data = $this->db->get();
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_barang' 	=> NULL,
			'nama_barang' 	=> $this->input->post('nama_barang'), 
			'id_kategori' 	=> $this->input->post('kategori_barang'),
			'foto' 			=> $nama_file,
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