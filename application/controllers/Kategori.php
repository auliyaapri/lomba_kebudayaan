<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index() {
		$data['kategori'] = $this->model_kategori->data_kategori()->result();	
		$berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();	
		$data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();
		$data_slider_home['home'] = $this->model_home->data_home2()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data_home_navbar);
		$this->load->view('kategori', $data);
		$this->load->view('templates/footer_content',$data_slider_home);	
		$this->load->view('templates/footer');
	}
	public function makanan() {
		$keyword = $this->input->post('keyword');		
		$data_slider_home['home'] = $this->model_home->data_home2()->result();
		$data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar',$data_home_navbar);
		if ($keyword) {
			$datass['makanan'] = $this->model_kategori->get_keyword_makanan($keyword);
			$this->load->view('kategori/index', $datass);
		} 
		if ($keyword == null) {
			$data['makanan'] = $this->model_kategori->data_makanan()->result();		
			$this->load->view('kategori/index', $data);

		}
		
			$this->load->view('templates/footer_content',$data_slider_home);
	}




	public function alat_musik() {
		$keyword = $this->input->post('keyword');
		$berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();	
		// $data['makanan'] = $this->model_kategori->data_alat_musik()->result();		
		$data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();
		$data_slider_home['home'] = $this->model_home->data_home2()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar',$data_home_navbar);
		if ($keyword) {
			$datass['makanan'] = $this->model_kategori->get_keyword_alat_musik($keyword);
			$this->load->view('kategori/index', $datass);
		} 
		if ($keyword == null) {
			$data['makanan'] = $this->model_kategori->data_alat_musik()->result();		
			$this->load->view('kategori/index', $data);
		}
			
			$this->load->view('templates/footer_content',$data_slider_home);
	}

	public function tarian() {
		$keyword = $this->input->post('keyword');
		$berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();	
		$data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();
		$data_slider_home['home'] = $this->model_home->data_home2()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar',$data_home_navbar);
		if ($keyword) {
			$datass['makanan'] = $this->model_kategori->get_keyword_tarian($keyword);
			$this->load->view('kategori/index', $datass);
		} 
		if ($keyword == null) {
			$data['makanan'] = $this->model_kategori->data_tarian()->result();		
			$this->load->view('kategori/index', $data);
			
			
		}
		$this->load->view('templates/footer_content',$data_slider_home);


	}
	public function search() {
		$keyword = $this->input->post('keyword');
		$data['makanan'] = $this->model_home->get_keyword($keyword);
		$berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();	
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kategori/index', $data);
			$this->load->view('templates/footer_content',$berita_terbaru);

	}
	
}
