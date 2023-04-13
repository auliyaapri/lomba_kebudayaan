<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata("pesan", "<script>alert('Anda Belum Login !')</script>");

            redirect('auth/login');
        }
    }
	public function index()
	{
        $data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();
        $this->load->view('templates/header');
		$this->load->view('user/isi_content',$data_home_navbar);
        $this->load->view('templates/footer');
        $this->load->view('templates/sweetalert');
		
	}
}
