<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\WebOptionModel;

class Media extends BaseController
{
	public function __construct()
    {
		$this->session = session();
    }
	public function penyimpanan()
	{
		//cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$model = new UserModel();
			$data['user'] = $model->get_detail_akun();
            $model = new WebOptionModel();
		    $data['web_option'] = $model->get_option_web();//wajib
		    return view('Admin/dashboard', $data);
        }
        return redirect()->to('/user');
		
	}
    public function post()
	{
		//cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$model = new UserModel();
			$data['user'] = $model->get_detail_akun();
            $model = new WebOptionModel();
		    $data['web_option'] = $model->get_option_web();//wajib
		    return view('Admin/post', $data);
        }
        return redirect()->to('/user');
		
	}
    public function new_post()
	{
		//cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$model = new UserModel();
			$data['user'] = $model->get_detail_akun();
            $model = new WebOptionModel();
		    $data['web_option'] = $model->get_option_web();//wajib
		    return view('Admin/post_new', $data);
        }
        return redirect()->to('/user');
		
	}
    public function input_new_post()
    {
        
    }

}
