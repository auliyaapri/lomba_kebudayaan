<?php

use LDAP\Result;

class Model_home extends CI_Model
{
    public function data_home()
    {
        // return $this->db->get('upload_content');
        $result = $this->db->get('upload_content',4,0);        
        

        
        
        return $result;
    }
    public function data_featured_news()
    {
        // return $this->db->get('upload_content');
        $result = $this->db->get('upload_content',10,0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
    public function detail_konten($id_konten)
    {
        $query = $this->db->where('id_konten',$id_konten)->get('upload_content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}

