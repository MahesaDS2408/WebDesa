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
    public function get_visi()
    {
        return $this->db->table('web_option')
        ->where('name_web_option',['name_web_option'=>"visi_desa"])
        ->get()->getResultArray();
    }
    public function get_misi()
    {
        return $this->db->table('web_option')
        ->where('name_web_option',['name_web_option'=>"misi_desa"])
        ->get()->getResultArray();
    }
    public function get_peta()
    {
        return $this->db->table('web_option')
        ->where('name_web_option',['name_web_option'=>"peta_desa"])
        ->get()->getResultArray();
    }
    public function updateoption($data, $name)
    {
        return $this->db->table('web_option')
        ->update($data, ['name_web_option' => $name]);
    }

    
}