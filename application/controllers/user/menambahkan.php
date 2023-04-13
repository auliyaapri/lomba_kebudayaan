<?php
class Menambahkan extends CI_Controller
{

    public function tambah_aksi()
    {
        $this->form_validation->set_rules('judul_konten', 'judul konten ', 'required', ['required' => ' Wajib diisi!']);
        

        $judul_konten       = $this->input->post('judul_konten');
        $daerah             = $this->input->post('daerah');
        $kategori           = $this->input->post('kategori');
        $isi_konten         = $this->input->post('isi_konten');
        $nama_penulis      = $this->input->post('nama_penulis');
        // $kategori2         = $this->input->post('kategori2');
        $gambar             = $_FILES['gambar']['name'];
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/isi_content');
            $this->load->view('templates/footer');
            $this->load->view('templates/sweetalert');
        } else {
            if ($gambar = '') {
            } else {
                if ($daerah == $daerah && $kategori == $kategori) {
                    $config['upload_path']     = './upload_image/' . $daerah . '/' . $kategori . '/';
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
                'judul_konten'      => $judul_konten,
                'daerah'            => $daerah,
                'kategori'          => $kategori,
                'isi_konten'        => $isi_konten,
                // 'kategori2'         => $kategori2,
                'nama_penulis'      => $nama_penulis,
                'gambar'            => $gambar
            );
            $this->model_menambahkan_konten->tambah_barang($data, 'upload_content');
            // $this->session->set_flashdata('pesan','<script>alert("Data berhasil ditambahkan")</script>');  
            $this->session->set_flashdata('success_tambah_data','Berhasil melakukan ');              
            redirect('welcome');

        }
    }
}


