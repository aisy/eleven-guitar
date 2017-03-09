<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Barang extends CI_Model {

	public function get(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('barang_kategori', 'barang.id_kategori = barang_kategori.id_kategori');
		$data = $this->db->get();
		return $data->result();
	}

	public function get_api($page, $size){

			$data = $this->db->get('barang', $size, $page);
			return $data->result();

	}

	public function get_kategori(){
		$this->db->select('*');
		$data = $this->db->get('barang_kategori');
		return $data->result();
	}

	public function tambah($nama_file){
		$object = array(
			'id_barang' 	=> NULL,
			'nama_barang' 	=> $this->input->post('nama_barang'),
			'id_kategori' 	=> $this->input->post('id_kategori'),
			'foto' 			=> $nama_file,
			'harga' 		=> $this->input->post('harga'),
			'keterangan' 	=> $this->input->post('keterangan')
		);

		$this->db->insert('barang', $object);
	}

	public function data_edit($id){
		$this->db->where('id_barang', $id);
		$data = $this->db->get('barang');

		return $data->first_row();
	}

	public function edit($data, $id){
		$this->db->where('id_barang', $id);
		$this->db->update('barang',$data);
	}

	public function hapus($id){
		$this->db->where('id_barang', $id);
		$this->db->delete('barang');
	}

	public function select_byid($id){
		$this->db->from('barang');
		$this->db->join('barang_kategori', 'barang.id_kategori = barang_kategori.id_kategori');
		$this->db->where('barang.id_barang', $id);
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
