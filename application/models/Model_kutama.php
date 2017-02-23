<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kutama extends CI_Model {

	public function get(){
		$data = $this->db->get('konten_utama');
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_kutama'=> NULL,
			'nama_section' 	=> $this->input->post('nama_section'),
			'judul_section' => $this->input->post('judul_section'),
			'isi_section' 	=> $this->input->post('isi_section')
		);

		$this->db->insert('konten_utama', $object);
	}

	public function data_edit($id){
		$this->db->where('id_kutama', $id);
		$data = $this->db->get('konten_utama');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_kutama', $id);
		$this->db->update('konten_utama',$data);
	}

	public function hapus($id){
		$this->db->where('id_kutama', $id);
		$this->db->delete('konten_utama');
	}

	public function select_byid($id){
		$this->db->from('konten_utama');
		$this->db->join('konten_utama_kategori', 'konten_utama.id_kategori = konten_utama_kategori.id_kategori');
		$this->db->where('konten_utama.id_kutama', $id);
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
