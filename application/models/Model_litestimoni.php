<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_litestimoni extends CI_Model {

	public function get(){
		$data = $this->db->get('list_testimoni');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			'id_testimoni'    => NULL,
			'nama_user'       => $this->input->post('nama_user'),
      'isi_testimoni' 	=> $this->input->post('isi_testimoni')
		);

		$this->db->insert('list_testimoni', $object);
	}

	public function data_edit($id){
		$this->db->where('id_list', $id);
		$data = $this->db->get('list_testimoni');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_list', $id);
		$this->db->update('list_testimoni',$data);
	}

	public function hapus($id){
		$this->db->where('id_list', $id);
		$this->db->delete('list_testimoni');
	}

	public function select_byid($id){
		$this->db->from('list_testimoni');
		$this->db->join('list_testimoni_kategori', 'list_testimoni.id_kategori = list_testimoni_kategori.id_kategori');
		$this->db->where('list_testimoni.id_list', $id);
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
