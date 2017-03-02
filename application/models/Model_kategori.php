<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function view(){
		$data = $this->db->get('barang_kategori');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			'id_kategori' 		=> NULL,
			'nama_kategori' 	=> $this->input->post('nama_kategori')
		);

		$this->db->insert('barang_kategori', $object);
	}

	public function data_edit($id){
		$this->db->where('id_kategori', $id);
		$data = $this->db->get('barang_kategori');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_kategori', $id);
		$this->db->update('barang_kategori', $data);
	}

	public function hapus($id){
		$this->db->where('id_kategori', $id);
		$this->db->delete('barang_kategori');
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */
