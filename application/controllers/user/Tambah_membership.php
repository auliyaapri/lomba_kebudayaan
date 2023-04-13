<?php
class Tambah_membership extends CI_Controller
{

    public function index()
    {
        
        $nama_paket       = $this->input->post('nama_paket');
        $keterangan       = $this->input->post('keterangan');
        $harga            = $this->input->post('harga');
        $nomor_rekening   = $this->input->post('nomor_rekening');
        $bank             = $this->input->post('bank');
        $nama_pembeli     = $this->input->post('nama_pembeli');
        
        $gambar             = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            if ($nama_paket == $nama_paket) {
                $config['upload_path']     = './upload_bukti/' . $nama_paket . '/';
            }
            $config['allowed_types']   = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Cuy Di upload wkwkwk";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_paket'        => $nama_paket,
            'keterangan'        => $keterangan,
            'harga'             => $harga,
            'nomor_rekening'    => $nomor_rekening,
            'bank'              => $bank,
            'nama_pembeli'      => $nama_pembeli,
            
            'gambar'            => $gambar
        );
        $this->model_membership->tambah_membershipp($data, 'membership');
        // $this->session->set_flashdata('pesan','<script>alert("Data berhasil ditambahkan")</script>');  
        $this->session->set_flashdata('success_beli', 'Berhasil melakukan ');
        
        redirect('home');
    }
}
