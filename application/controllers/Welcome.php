<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {            
			$this->session->set_flashdata('belum_login', 'Berhasil melakukan ');
			redirect('auth/login');
        }

    }
	public function index()
	{
   
   
        // $id_user = $this->uri->segment(2);
        $isi_konten['isi_konten'] = $this->model_home->isi_konten()->result();
        $data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();   
        $berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();  


        // $isi_konten['isi_konten'] = $this->model_home->isi_konten($id_user)->result();              
        $this->load->view('templates/header');        
        
        $this->load->view('templates/navbar', $data_home_navbar);
		$this->load->view('user/isi_content', $isi_konten);
        $this->load->view('templates/footer_content',$berita_terbaru);
        
		
	}
}
