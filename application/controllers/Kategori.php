<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index() {
		$data['kategori'] = $this->model_kategori->data_kategori()->result();
		$datas['featured_newss'] = $this->model_kategori->data_featured_news()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kategori', $data);
	
		// $this->load->view('templates/breaking_news');		
		// $this->load->view('templates/news_sidebar');
		// $this->load->view('templates/footer_content');
		// $this->load->view('templates/footer');
	}

	
}
