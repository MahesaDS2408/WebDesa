<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelKategoriModel extends Model
{
    protected $table = "artikel_kategori";
    protected $primaryKey = "id_artikel_kategori";
    protected $allowedFields = ["nama_artikel_kategori"];
    protected $useTimestamps = false;

    public function get_kategori()
    {
        return $this->db->table('artikel_kategori')
        ->get()->getResultArray();

    }

    
}