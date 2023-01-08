<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class User extends BaseController
{
	public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/');
        }
        // echo $this->session->get('level');
         //cek role dari session
        if($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator'){
            return redirect()->to('dashboard');//admin
        }
    }
}
