<?php

use LDAP\Result;

class Model_kategori extends CI_Model
{
    public function data_kategori()
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
    public function data_makanan()
    {
        $this->db->select('*');
        $this->db->from('upload_content');
        $this->db->where('kategori','makanan');
        
        return $this->db->get();        
    }
    public function data_tarian()
    {
        $this->db->select('*');
        $this->db->from('upload_content');
        $this->db->where('kategori','tarian');
        return $this->db->get();        
    }
    public function data_alat_musik()
    {
        $this->db->select('*');
        $this->db->from('upload_content');
        $this->db->where('kategori','alat musik');
        return $this->db->get();        
    }
    public function get_keyword_alat_musik($keyword) {
        $this->db->select('*');
        $this->db->from('upload_content');
        $this->db->where('kategori','alat musik');
        $this->db->like('judul_konten', $keyword);
        $this->db->or_like('daerah', $keyword);        
        return $this->db->get()->result();
    }
    public function get_keyword_makanan($keyword) {
        $this->db->select('*');
        $this->db->from('upload_content');
        $this->db->where('kategori','makanan');
        $this->db->like('judul_konten', $keyword);
        $this->db->or_like('daerah', $keyword);

        return $this->db->get()->result();
    }
    public function get_keyword_tarian($keyword) {
        $this->db->select('*');
        $this->db->from('upload_content');
        $this->db->where('kategori','tarian');
        $this->db->like('judul_konten', $keyword);
        $this->db->or_like('daerah', $keyword);
        return $this->db->get()->result();
    }

}

