<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_liowner extends CI_Model {

	public function get(){
		$data = $this->db->get('list_owner');
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_kpembayaran'=> NULL,
			'nama_section' 	=> $this->input->post('nama_section'),
			'judul_section' => $this->input->post('judul_section'),
			'isi_section' 	=> $this->input->post('isi_section')
		);

		$this->db->insert('list_owner', $object);
	}

	public function data_edit($id){
		$this->db->where('id_kpembayaran', $id);
		$data = $this->db->get('list_owner');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_kpembayaran', $id);
		$this->db->update('list_owner',$data);
	}

	public function hapus($id){
		$this->db->where('id_kpembayaran', $id);
		$this->db->delete('list_owner');
	}

	public function select_byid($id){
		$this->db->from('list_owner');
		$this->db->join('list_owner_kategori', 'list_owner.id_kategori = list_owner_kategori.id_kategori');
		$this->db->where('list_owner.id_kpembayaran', $id);
		$query = $this->db->get();

		if ($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}
	/* End of file model_Barang.php */
	/* Location: ./application/models/model_Barang.php */
