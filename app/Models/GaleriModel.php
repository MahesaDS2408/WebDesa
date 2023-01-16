<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = "galeri";
    // protected $primaryKey = "id_galeri";
    protected $allowedFields = ["id_galeri", "judul_galeri", "kategori_galeri", "tgl_galeri", "file_galeri", "group_galeri", "tayang_galeri", "id_pembuat_galeri"];
    protected $useTimestamps = false;

    public function getidgaleri($foto, $judul)
    {
        return $this->db->table('galeri')
        ->where('judul_galeri',['judul_galeri'=> $judul])
        ->where('file_galeri',['file_galeri'=> $foto])
        ->get()->getRow('id_galeri');
    }
    public function getallgaleri()
    {
        return $this->db->table('galeri')
        ->join('user_detail','user_detail.id_user_detail=galeri.id_pembuat_galeri')
        ->get()->getResultArray();
    }

    
}