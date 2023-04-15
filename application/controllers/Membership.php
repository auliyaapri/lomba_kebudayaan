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
			$this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
			redirect('auth/login');
        }
		$id_user = $this->uri->segment(3);
		
		$data_user['data_user'] = $this->model_home->data_user($id_user)->result();			        
		$this->load->view('user/member/standar',$data_user);
		$this->load->view('templates/footer');
            $this->load->view('templates/sweetalert');
	}

	public function basic() {
		$id_user = $this->uri->segment(3);
		
		$data_user['data_user'] = $this->model_home->data_user($id_user)->result();	

		     if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
            redirect('auth/login');
        }
		
		$this->load->view('user/member/basic',$data_user);
		$this->load->view('templates/sweetalert');
	}
	public function pro() {
		$id_user = $this->uri->segment(3);
		
		$data_user['data_user'] = $this->model_home->data_user($id_user)->result();			   
		     if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
            redirect('auth/login');
        }
		$this->load->view('user/member/pro',$data_user);
		$this->load->view('templates/sweetalert');
	}


}
