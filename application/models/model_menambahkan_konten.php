<?php 
class Model_menambahkan_konten extends CI_Model {

    public function tambah_barang($data,$table) {
        
        $this->db->insert($table, $data);
    }


}
