<?php

namespace App\Models;

use CodeIgniter\Model;

class UserDetailModel extends Model
{
    protected $table = "user_detail";
    protected $primaryKey = "id_user_detail";
    protected $allowedFields = ["email", "nama_user", "foto_user"];
    protected $useTimestamps = false;

    public function id_user_detail()
    {
        $session = session();
        $email = $session->get('email');
        return $this->db->table('user_detail')
        ->where('email',['email'=>$email])
        ->get()->getRow('id_user_detail');
    }
    
}