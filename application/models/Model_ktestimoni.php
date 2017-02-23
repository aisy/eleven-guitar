<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ktestimoni extends CI_Model {

	public function get(){
		$data = $this->db->get('konten_testimoni');
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_ktestimoni'=> NULL,
			'nama_section' 	=> $this->input->post('nama_section'),
			'judul_section' => $this->input->post('judul_section'),
			'isi_section' 	=> $this->input->post('isi_section')
		);

		$this->db->insert('konten_testimoni', $object);
	}

	public function data_edit($id){
		$this->db->where('id_ktestimoni', $id);
		$data = $this->db->get('konten_testimoni');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_ktestimoni', $id);
		$this->db->update('konten_testimoni',$data);
	}

	public function hapus($id){
		$this->db->where('id_ktestimoni', $id);
		$this->db->delete('konten_testimoni');
	}

	public function select_byid($id){
		$this->db->from('konten_testimoni');
		$this->db->join('konten_testimoni_kategori', 'konten_testimoni.id_kategori = konten_testimoni_kategori.id_kategori');
		$this->db->where('konten_testimoni.id_ktestimoni', $id);
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
