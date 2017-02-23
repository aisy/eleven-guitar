<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kpembayaran extends CI_Model {

	public function get(){
		$data = $this->db->get('konten_pembayaran');
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_kpembayaran'=> NULL,
			'nama_section' 	=> $this->input->post('nama_section'),
			'judul_section' => $this->input->post('judul_section'),
			'isi_section' 	=> $this->input->post('isi_section')
		);

		$this->db->insert('konten_pembayaran', $object);
	}

	public function data_edit($id){
		$this->db->where('id_kpembayaran', $id);
		$data = $this->db->get('konten_pembayaran');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_kpembayaran', $id);
		$this->db->update('konten_pembayaran',$data);
	}

	public function hapus($id){
		$this->db->where('id_kpembayaran', $id);
		$this->db->delete('konten_pembayaran');
	}

	public function select_byid($id){
		$this->db->from('konten_pembayaran');
		$this->db->join('konten_pembayaran_kategori', 'konten_pembayaran.id_kategori = konten_pembayaran_kategori.id_kategori');
		$this->db->where('konten_pembayaran.id_kpembayaran', $id);
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
