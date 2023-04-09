<?php
class Menambahkan extends CI_Controller
{

    public function tambah_aksi()
    {
        $judul_konten       = $this->input->post('judul_konten');
        $daerah             = $this->input->post('daerah');
        $kategori           = $this->input->post('kategori');
        $isi_konten         = $this->input->post('isi_konten');
        $kategori2         = $this->input->post('kategori2');
        $gambar             = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {            
            // $jawa_barat = "jawa barat";
            // $jawa_tengah = "jawa tengah";
            if ($daerah == $daerah && $kategori == $kategori) {
                $config['upload_path']     = './upload_image/'.$daerah. '/' .$kategori.'/';
            }

            // ========= DAAH BENER ===========
            // if ($kategori2 == "Best Product") {
            //     $config['upload_path']     = './uploads_barang/Best/';                
            // }
            $config['allowed_types']   = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Cuy Di upload wkwkwk";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'judul_konten'      => $judul_konten,
            'daerah'            => $daerah,
            'kategori'          => $kategori,
            'isi_konten'        => $isi_konten,
            'kategori2'         => $kategori2,
            'gambar'            => $gambar
        );
        $this->model_menambahkan_konten->tambah_barang($data, 'upload_content');
        // $this->session->set_flashdata('pesan','<script>alert("Data berhasil ditambahkan")</script>');                

    }
}
