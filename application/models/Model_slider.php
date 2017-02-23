<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Slider extends CI_Model {

	public function get(){
		$data = $this->db->get('slider');
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_slider' 	=> NULL,
			'gambar' 	    => $this->input->post('gambar'),
			'logo' 	      => $this->input->post('logo'),
			'judul' 		  => $this->input->post('judul'),
			'caption' 	  => $this->input->post('caption')
		);

		$this->db->insert('slider', $object);
	}

	public function data_edit($id){
		$this->db->where('id_slider', $id);
		$data = $this->db->get('slider');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_slider', $id);
		$this->db->update('slider',$data);
	}

	public function hapus($id){
		$this->db->where('id_slider', $id);
		$this->db->delete('slider');
	}

	public function select_byid($id){
		$this->db->from('slider');
		$this->db->join('slider_kategori', 'slider.id_kategori = slider_kategori.id_kategori');
		$this->db->where('slider.id_slider', $id);
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
