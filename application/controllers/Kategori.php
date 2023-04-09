<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index() {
		$data['kategori'] = $this->model_kategori->data_kategori()->result();		
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kategori', $data);
		$this->load->view('templates/footer_content');
	}
	public function makanan() {
		$data['makanan'] = $this->model_kategori->data_makanan()->result();		
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kategori/index', $data);
		$this->load->view('templates/footer_content');
	}
	public function alat_musik() {
		$data['makanan'] = $this->model_kategori->data_alat_musik()->result();		
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kategori/index', $data);
		$this->load->view('templates/footer_content');
	}
	public function tarian() {
		$data['makanan'] = $this->model_kategori->data_tarian()->result();		
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kategori/index', $data);
		$this->load->view('templates/footer_content');
	}

	
}
