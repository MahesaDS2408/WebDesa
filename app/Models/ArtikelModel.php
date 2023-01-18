<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = "artikel";
    protected $primaryKey = "id_artikel";
    protected $allowedFields = ["id_kategori", "judul_artikel", "tumbnail_artikel", "isi_artikel", "tgl_artikel", "id_pembuat_artikel", "tayang_artikel"];
    protected $useTimestamps = false;

    public function get_artikel()
    {
        return $this->db->table('artikel')
        ->join('artikel_kategori','artikel_kategori.id_artikel_kategori=artikel.id_kategori')
        ->join('user_detail','user_detail.id_user_detail=artikel.id_pembuat_artikel')
        ->orderBy('id_artikel', 'desc')
        ->get()->getResultArray();
    }



// USER
    public function get_all_artikel()
    {
        return $this->db->table('artikel')
        ->join('artikel_kategori','artikel_kategori.id_artikel_kategori=artikel.id_kategori')
        ->join('user_detail','user_detail.id_user_detail=artikel.id_pembuat_artikel')
        ->where('artikel.tayang_artikel',['tayang_artikel' => 'tayang'])
        ->orderBy('id_artikel', 'desc')
        ->get()->getResultArray();
    }
    public function get_3_artikel()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('artikel')
        ->join('artikel_kategori','artikel_kategori.id_artikel_kategori=artikel.id_kategori')
        ->join('user_detail','user_detail.id_user_detail=artikel.id_pembuat_artikel')
        ->where('artikel.tayang_artikel',['tayang_artikel' => 'tayang'])
        ->orderBy('id_artikel', 'desc')
        ->limit(3)
        ->get()->getResultArray();
    }
    public function get_1_artikel($judul)
    {
        return $this->db->table('artikel')
        ->join('artikel_kategori','artikel_kategori.id_artikel_kategori=artikel.id_kategori')
        ->join('user_detail','user_detail.id_user_detail=artikel.id_pembuat_artikel')
        ->where('artikel.tayang_artikel',['tayang_artikel' => 'tayang'])
        ->where('artikel.judul_artikel',['judul_artikel' => $judul])
        ->get()->getResultArray();
    }

    
}