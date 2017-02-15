<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index(){

		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('homepage/index');
		// $this->load->view('homepage/profile');
		$this->load->view('javascript');

		// $this->load->view('home');
	}

	public function produk(){
		$data['nama_kategori'] = "Semua Items";

		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('barang/barang-list2', $data);
		$this->load->view('javascript');
	}

	public function detail_barang($id){
		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('barang/barang');
		$this->load->view('javascript');
	}

	public function about(){
		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('homepage/profile');
		$this->load->view('javascript');
	}

}
