<?php

use LDAP\Result;

class Model_home extends CI_Model
{
    public function data_home()
    {
        // return $this->db->get('upload_content');
        $result = $this->db->get('upload_content', 4, 0);
        return $result;
    }
    public function data_home_navbar()
    {
        // return $this->db->get('upload_content');
        $result = $this->db->get('tb_user');
        return $result;
    }





    public function data_user($id_user)
    {
        // return $this->db->get('upload_content');
        $this->db->where('username', $id_user);
        $result = $this->db->get('tb_user');
        
        return $result;
    }


    
    public function data_user_konten($id_user)
    {
        // $this->db->select('*');
        // SELECT * FROM membership INNER JOIN tb_user ON membership.id_user = tb_user.id_user;

        // ============
        $this->db->select('*');
        $this->db->from('membership');
        $this->db->join('tb_user', 'tb_user.id_user = membership.id_user');
        $this->db->where('username', $id_user);
        $query = $this->db->get();
        // ============
        return $query;
    }

//     public function data_user_konten($id_user)
//     {
//         // $this->db->select('*');
//         // SELECT * FROM membership INNER JOIN tb_user ON membership.id_user = tb_user.id_user;

//         // ============
//         $this->db->select('*');
//         $this->db->where('username', $id_user);
//         $this->db->from('tb_user');
//         $this->db->join('membership', 'membership.id_user = tb_user.id_user');
//         $query = $this->db->get();
//         // ============
// //         $this->db->from('tb_user');
// // $query = $this->db->get();
            
//                 return $query;
//     }


    public function isi_konten()
    {        
        // SELECT * FROM membership INNER JOIN tb_user ON membership.id_user = tb_user.id_user;
        // ============
        $this->db->select('*');        
        $this->db->from('membership');        
        $query = $this->db->get();
        // ============
        // $result = $this->db->get('membership');
        return $query;
    }
  
    // public function isi_konten($id_user)
    // {        
    //     // SELECT * FROM membership INNER JOIN tb_user ON membership.id_user = tb_user.id_user;
    //     // ============
    //     $this->db->select('*');
    //     $this->db->where('username', $id_user);
    //     $this->db->from('membership');
    //     $this->db->join('tb_user', 'tb_user.id_user = membership.id_user');
    //     $query = $this->db->get();
    //     // ============
    //     // $result = $this->db->get('membership');
    //     return $query;
    // }
  

    public function data_featured_news()
    {
        // return $this->db->get('upload_content');
        $result = $this->db->get('upload_content', 10, 0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
    public function data_berita_terbaru()
    {
        $this->db->order_by("tgl_konten", "asc");
        $result = $this->db->get('upload_content', 4, 0);

        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }

    public function detail_konten($id_konten)
    {
        $query = $this->db->where('id_konten', $id_konten)->get('upload_content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('upload_content');
        $this->db->like('judul_konten', $keyword);
        $this->db->or_like('daerah', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('isi_konten', $keyword);
        return $this->db->get()->result();
    }
}
