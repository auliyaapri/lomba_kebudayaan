<?php
class Tambah_membership extends CI_Controller
{

    public function index()
    {
        
        
        $id_user     = $this->input->post('id_user');
        $nama_paket       = $this->input->post('nama_paket');
        $nama_pembeli     = $this->input->post('nama_pembeli');
        
        $keterangan       = $this->input->post('keterangan');
        $harga            = $this->input->post('harga');
        $nomor_rekening   = $this->input->post('nomor_rekening');
        $bank             = $this->input->post('bank');        
        
        
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
            'nama_pembeli'      => $nama_pembeli,
            'keterangan'        => $keterangan,
            'harga'             => $harga,
            'nomor_rekening'    => $nomor_rekening,
            'bank'              => $bank,            
            
            'gambar'            => $gambar,
            
        );
    $where = array(
        'id_user'      => $id_user
    );
        // $this->model_membership->tambah_membershipp($data, 'membership');
        $this->model_membership->edit_membershipp($where,$data, 'membership');
        // $this->session->set_flashdata('pesan','<script>alert("Data berhasil ditambahkan")</script>');  
        $this->session->set_flashdata('success_beli', 'Berhasil melakukan ');
        
        redirect('home');
    }
}
