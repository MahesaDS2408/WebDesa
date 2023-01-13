<?php

namespace App\Models;

use CodeIgniter\Model;

class GalerigroupModel extends Model
{
    protected $table = "group_galeri";
    protected $primaryKey = "id_group_galeri";
    protected $allowedFields = ["id_galeri", "file_foto_galeri"];
    protected $useTimestamps = false;



    
}