<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_proowner extends CI_Model {

	public function get(){
		$data = $this->db->get('profil_owner');
		return $data->result();
	}

	public function tambah($file_name){
		$object = array(
			'id_powner'   => NULL,
			'nama_owner'  => $this->input->post('nama_owner'),
			'foto' 	      => $file_name
		);

		$this->db->insert('profil_owner', $object);
	}

	public function data_edit($id){
		$this->db->where('id_powner', $id);
		$data = $this->db->get('profil_owner');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_powner', $id);
		$this->db->update('profil_owner',$data);
	}

	public function hapus($id){
		$this->db->where('id_powner', $id);
		$this->db->delete('profil_owner');
	}

	public function select_byid($id){
		$this->db->from('profil_owner');
		$this->db->where('profil_owner.id_powner', $id);
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
