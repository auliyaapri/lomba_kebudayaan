<?php
class Detail extends CI_Controller {

    public function detail_konten($id_konten)
    {
        $data['barang'] = $this->model_home->detail_konten($id_konten);      
        $berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();        
        // $datas['user_konten'] = $this->model_home->data_user_konten();      
        $data['home'] = $this->model_home->data_home()->result();    
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('detail', $data);                
        // $this->load->view('detail_jajal',$datas);                
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_content',$berita_terbaru);
    }

    // public function data_user_konten1(){
    //     $datas['user_konten'] = $this->model_home->data_user_konten();      
    //       $this->load->view('detail_jajal',$datas);   
    // }


}
