<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$data['home'] = $this->model_home->data_home()->result();
		$datas['featured_newss'] = $this->model_home->data_featured_news()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('main_content', $data);
	
		$this->load->view('templates/breaking_news');
		$this->load->view('templates/featured_news',$datas);
		$this->load->view('templates/news_sidebar');
		$this->load->view('templates/footer_content');
		$this->load->view('templates/footer');
	}
	public function search() {
		$keyword = $this->input->post('keyword');
		$data['home'] = $this->model_home->get_keyword($keyword);
		$datas['featured_newss'] = $this->model_home->data_featured_news()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('main_content', $data);
		$this->load->view('templates/breaking_news');
		$this->load->view('templates/featured_news',$datas);
		$this->load->view('templates/news_sidebar');
		$this->load->view('templates/footer_content');
		$this->load->view('templates/footer');

	}

	
}
