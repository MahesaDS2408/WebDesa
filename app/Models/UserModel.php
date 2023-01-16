<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $allowedFields = ["username", "email", "password", "last_login", "active", "phone_user", "level_user"];
    protected $useTimestamps = false;

    public function get_detail_akun()
    {
        $session = session();
        $email = $session->get('email');
        return $this->db->table('user')
        ->join('user_detail','user_detail.email=user.email')
        ->where('user.email',['email'=>$email])
        ->get()->getResultArray();

    }
    public function getalluser()
    {
        return $this->db->table('user')
        ->join('user_detail','user_detail.email=user.email')
        ->get()->getResultArray();
    }

    
}