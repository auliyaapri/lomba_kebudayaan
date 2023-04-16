<?php 
class Model_membership extends CI_Model {    


    public function tambah_membershipp($data,$table) {
        
        $this->db->insert($table, $data);
    }
    public function edit_membershipp($where, $data, $table)
    {
        // Ini ada parameter where,data didapaakn dari parameter yang kita buat di controllernya
        // Kalau untuk $table dari googl katanya mah Menentukan tabel database yang terutama digunakan oleh model ini.

        $this->db->where($where);
        $this->db->update($table, $data);
        
    }
    


}
