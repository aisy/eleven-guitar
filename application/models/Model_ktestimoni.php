<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ktestimoni extends CI_Model {

	public function get(){
		$query = $this->db->get('konten_testimoni');

		if ($query->num_rows() == 1)
		{
			return $query->first_row();
		}
		else
		{
			return false;
		}
	}

	public function tambah(){
		$object = array(
			'id_ktestimoni'   => NULL,
			'judul_testimoni' => $this->input->post('judul_testimoni'),
			'caption' 	      => $this->input->post('caption')
		);

		$this->db->insert('konten_testimoni', $object);
	}

	public function edit($id){
		$data = array(
			'id_ktestimoni'   => NULL,
			'judul_testimoni' => $this->input->post('judul_testimoni'),
			'caption' 	      => $this->input->post('caption')
		);

		$this->db->where('id_ktestimoni', $id);
		$this->db->update('konten_testimoni',$data);
	}

	public function hapus($id){
		$this->db->where('id_ktestimoni', $id);
		$this->db->delete('konten_testimoni');
	}

	public function select_byid($id){
		$this->db->where('id_ktestimoni', $id);
		$query = $this->db->get('konten_testimoni');

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
