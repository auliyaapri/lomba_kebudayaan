<?php
defined('BASEPATH') or exit('No direct script access allowed');




class Home extends CI_Controller
{

	public function index()
	{
		$keyword = $this->input->post('keyword');
		$data['home'] = $this->model_home->data_home()->result();
		$data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();		
		$datas['featured_newss'] = $this->model_home->data_featured_news()->result();
		$berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data_home_navbar);
		// $this->load->view('main_content', $data);
		if ($keyword) {
			$datas['home'] = $this->model_home->get_keyword($keyword);
			$this->load->view('main_content', $datas);

		} 
		if ($keyword == null) {
			$datass['home'] = $this->model_home->data_home()->result();
			$this->load->view('main_content', $datass);
		}

		$this->load->view('templates/breaking_news');
		$this->load->view('templates/featured_news', $datas);
		$this->load->view('templates/news_sidebar',$berita_terbaru);
		$this->load->view('templates/footer_content',$berita_terbaru);		
		$this->load->view('templates/footer');
        $this->load->view('templates/sweetalert');

		
	}


}
