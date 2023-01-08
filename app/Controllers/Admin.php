<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
	public function __construct()
    {
		$this->session = session();
    }
	public function dashboard()
	{
		//cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$model = new UserModel();
			$data['user'] = $model->get_detail_akun();
		    return view('Admin/dashboard', $data);
        }
        return redirect()->to('/user');
		
	}

}
