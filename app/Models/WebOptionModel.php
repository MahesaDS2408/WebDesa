<?php

namespace App\Models;

use CodeIgniter\Model;

class WebOptionModel extends Model
{
    protected $table = "web_option";
    protected $primaryKey = "id_web_option";
    protected $allowedFields = ["name_web_option", "value_web_option"];
    protected $useTimestamps = false;

    public function get_option_web()
    {
        return $this->db->table('web_option')
        ->get()->getResultArray();
    }

    
}