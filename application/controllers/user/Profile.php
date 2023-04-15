<?php
class Profile extends CI_Controller {
    public function index() {
        $id_user = $this->uri->segment(4);
        $data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();
        $data_profile_user['data_profile_user'] = $this->model_home->data_user_konten($id_user)->result();              
        $this->load->view('templates/header');
        $this->load->view('templates/navbar',$data_home_navbar);
        $this->load->view('user/member/profile_akun',$data_profile_user);

    }
    
}
