<?php
class Register extends CI_Controller {
    public function index() {
        $this->form_validation->set_rules('nama', 'Nama', 'required',['required' => 'Nama Lengkap Wajib diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required',['required' => 'Username Wajib diisi!']);

        
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password2]', [
                                                        'required' => 'Password Wajib diisi !',
                                                        'matches'  => 'Password Tidak Cocok !' 
                                                    ]);
        // $this->form_validation->set_rules('password2', 'Password','required|matches[password1]');
        $this->form_validation->set_rules('password2','Password','required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {           
             
            $data = array (
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
                'role_id'   => 2,
                     'id_user'      => $this->input->post('id_user')
            );
            $datas = array (
                'id_user'      => $this->input->post('id_user'),                
              
            );
            
            $this->db->insert('tb_user',$data);
            $this->db->insert('membership',$datas);
            
            echo "<script>alert('okeee');</script>";
            $this->session->set_flashdata('success_daftar_login','Berhasil melakukan ');               
            redirect('auth/login');
            
            

        }

        
        
    }
    
}
