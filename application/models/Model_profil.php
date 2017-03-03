<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_Model {

	public function get(){
		$data = $this->db->get('profil');
		return $data->result();
	}

	public function tambah($file_name){
		$object = array(
			'id_profil'			=> NULL,
			'judul'					=> $this->input->post('judul'),
			'gambar_header' => $file_name,
      'isi_profil' 		=> $this->input->post('isi_profil')
		);

		$this->db->insert('profil', $object);
	}

	public function data_edit($id){
		$this->db->where('id_profil', $id);
		$data = $this->db->get('profil');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_profil', $id);
		$this->db->update('profil',$data);
	}

	public function hapus($id){
		$this->db->where('id_profil', $id);
		$this->db->delete('profil');
	}

	public function select_byid($id){
		$this->db->from('profil');
		$this->db->where('profil.id_profil', $id);
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
