<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Membership extends CI_Controller
{

	public function index()
	{
		$keyword = $this->input->post('keyword');
		$data['home'] = $this->model_home->data_home()->result();
		$datas['featured_newss'] = $this->model_home->data_featured_news()->result();
		$berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();		
		$this->load->view('user/membership');


		
	}


}
