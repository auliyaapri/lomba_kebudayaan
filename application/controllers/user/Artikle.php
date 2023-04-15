<?php
class Artikle extends CI_Controller {
    
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {            
			$this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
			redirect('auth/login');
        }

    }
    public function index() {
        $id_user = $this->uri->segment(4);
        $data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();
        $isi_konten['isi_konten'] = $this->model_home->data_user_konten($id_user)->result();              
        $this->load->view('templates/header');
        $this->load->view('templates/navbar',$data_home_navbar);
        $this->load->view('user/isi_content',$isi_konten);

    }
    
}
