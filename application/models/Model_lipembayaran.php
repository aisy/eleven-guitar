<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lipembayaran extends CI_Model {

	public function get(){
		$data = $this->db->get('list_pembayaran');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			'id_list'=> NULL,
			'nama_list' => $this->input->post('nama_list'),
      'icon' 			=> $this->input->post('icon'),
			'caption' 	=> $this->input->post('caption'),
			'warna'     => $this->input->post('warna')
		);

		$this->db->insert('list_pembayaran', $object);
	}

	public function data_edit($id){
		$this->db->where('id_list', $id);
		$data = $this->db->get('list_pembayaran');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_list', $id);
		$this->db->update('list_pembayaran',$data);
	}

	public function hapus($id){
		$this->db->where('id_list', $id);
		$this->db->delete('list_pembayaran');
	}

	public function select_byid($id){
		$this->db->from('list_pembayaran');
		$this->db->join('list_pembayaran_kategori', 'list_pembayaran.id_kategori = list_pembayaran_kategori.id_kategori');
		$this->db->where('list_pembayaran.id_list', $id);
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
