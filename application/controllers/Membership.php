<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Membership extends CI_Controller {
	

	public function index()
	{
		$keyword = $this->input->post('keyword');
		$data['home'] = $this->model_home->data_home()->result();
		$datas['featured_newss'] = $this->model_home->data_featured_news()->result();
		$berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();		
		$this->load->view('user/membership');
		
	}
	public function standard() {
		     if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<script>alert("Anda Belum Login")</script>');
			// $this->session->set_flashdata('success_beli', 'Berhasil melakukan ');
	
			// $this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
		
				redirect('auth/login');
			
	
        }
		
		$this->load->view('user/member/standar');
		$this->load->view('templates/footer');
            $this->load->view('templates/sweetalert');
	}

	public function basic() {
		     if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<script>alert("Anda Belum Login")</script>');
            redirect('auth/login');
        }
		$this->load->view('user/member/basic');
		$this->load->view('templates/sweetalert');
	}
	public function pro() {
		     if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<script>alert("Anda Belum Login")</script>');
            redirect('auth/login');
        }
		$this->load->view('user/member/pro');
		$this->load->view('templates/sweetalert');
	}


}
