<?php 
class Model_membership extends CI_Model {    
    public function tambah_membershipp($data,$table) {
        
        $this->db->insert($table, $data);
    }


}
