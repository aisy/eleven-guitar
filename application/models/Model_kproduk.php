<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kproduk extends CI_Model {

	public function get(){
		$data = $this->db->get('konten_produk');
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_kproduk'=> NULL,
			'nama_section' 	=> $this->input->post('nama_section'),
			'judul_section' => $this->input->post('judul_section'),
			'isi_section' 	=> $this->input->post('isi_section')
		);

		$this->db->insert('konten_produk', $object);
	}

	public function data_edit($id){
		$this->db->where('id_kproduk', $id);
		$data = $this->db->get('konten_produk');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_kproduk', $id);
		$this->db->update('konten_produk',$data);
	}

	public function hapus($id){
		$this->db->where('id_kproduk', $id);
		$this->db->delete('konten_produk');
	}

	public function select_byid($id){
		$this->db->from('konten_produk');
		$this->db->join('konten_produk_kategori', 'konten_produk.id_kategori = konten_produk_kategori.id_kategori');
		$this->db->where('konten_produk.id_kproduk', $id);
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
