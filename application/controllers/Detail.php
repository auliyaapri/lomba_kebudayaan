<?php
class Detail extends CI_Controller {

    public function detail_konten($id_konten)
    {
        $data['barang'] = $this->model_home->detail_konten($id_konten);      
        $berita_terbaru['berita_terbaru'] = $this->model_home->data_berita_terbaru()->result();  
        $data_home_navbar['data_home_navbar'] = $this->model_home->data_home_navbar()->result();      
        // $datas['user_konten'] = $this->model_home->data_user_konten();      
        $data['home'] = $this->model_home->data_home()->result();    
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data_home_navbar);
        $this->load->view('detail', $data);                
        
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_content',$berita_terbaru);
    }

    


}
