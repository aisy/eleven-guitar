<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index(){

		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('homepage/index');
		// $this->load->view('homepage/profile');
		$this->load->view('javascript');

		// $this->load->view('home');
	}

	public function produk(){
		$data['nama_kategori'] = "Semua Items";

		$this->load->view('head');
		$this->load->view('navbar');
		// $this->load->view('barang/barang', $data);
		$this->load->view('barang/barang-list', $data);
		$this->load->view('javascript');
	}

	public function produk_detail($id) {
		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('barang/barang-detail');
		$this->load->view('javascript');
	}

	public function testimoni(){
		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('testimoni/testimoni');
		$this->load->view('javascript');
	}

	public function pembayaran(){
		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('pembayaran/pembayaran');
		$this->load->view('javascript');
	}

	public function about(){
		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('homepage/profile');
		$this->load->view('javascript');
	}

}
