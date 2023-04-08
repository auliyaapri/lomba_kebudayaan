<?php
class Detail extends CI_Controller {

    public function detail_konten($id_konten)
    {
        $data['barang'] = $this->model_home->detail_konten($id_konten);        
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('detail', $data);
        
        $this->load->view('templates/footer');
    }



}
