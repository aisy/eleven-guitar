<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_listowner extends CI_Model {

	public function get(){
		$this->db->from('list_owner');
		$this->db->join('profil_owner', 'list_owner.id_powner = profil_owner.id_powner');
		$data = $this->db->get();
		return $data->result();
	}

	public function get_owner(){
		$this->db->select('*');
		$data = $this->db->get('profil_owner');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			'id_listown'=> NULL,
			'nama_list' => $this->input->post('nama_list'),
			'caption' 	=> $this->input->post('caption'),
			'id_powner' => $this->input->post('id_powner')
		);

		$this->db->insert('list_owner', $object);
	}

	public function data_edit($id){
		$this->db->where('id_listown', $id);
		$data = $this->db->get('list_owner');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_listown', $id);
		$this->db->update('list_owner',$data);
	}

	public function hapus($id){
		$this->db->where('id_listown', $id);
		$this->db->delete('list_owner');
	}

	public function select_byid($id){
		$this->db->from('list_owner');
		$this->db->where('list_owner.id_listown', $id);
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
