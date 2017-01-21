<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function view(){
		$data = $this->db->get('kategori');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			'' => ,
			'' => , 
			'' => ,
			'' => ,
			'' => 
		);

		$this->db->insert('kategori', $object);
	}

	public function data_edit($id){
		$this->db->where('id_kategori', $id);
		$data = $this->db->get('kategori');

		return $data->first_row();
	}

	public function edit($id){
		$object = array('' => , );

		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $object);
	}

	public function hapus($id){
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */