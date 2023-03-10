<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\WebOptionModel;

class Auth extends BaseController
{
    private function hash_password($pass_user){
        return password_hash($pass_user, PASSWORD_BCRYPT);
    }
    public function test_password()
    {
        $pass = $this->hash_password('123');
        echo $pass;
    }
    public function hasil_test_password()
    {
        $hasil = '$2y$10$wtGhZ8zHx1nJFoc3GXUN4eKZ1/lZ8PokhfZjvQ.tpP20x/BI.CGwG'; // password di database
        $password = 'SisDes09'; // password inputan
        if(password_verify($password,$hasil)){//dibandingkan
            echo 'Selamat , Password Valid !';
        }else{
            echo 'Maaf , Password Tidak Valid';
        }
    }
    public function __construct()
    {
		//membuat user model untuk konek ke database 
        $this->userModel = new UserModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        // date_default_timezone_set('Asia/Jakarta');
    }
	public function admin_login()
	{
        if (!$this->session->has('isLogin')) {
            $model = new WebOptionModel();
		    $data['web_option'] = $model->get_option_web();
            return view('Auth/login_admin', $data);
        }
        return redirect()->to('/user');
	}
    public function validasi_admin_login()
    {
        $data = $this->request->getPost();
		$email = $this->userModel->where('email', $data['username'])->first();
        if($email){
            // Saat Ada email, Cek aktif tidak
            //cek status akun aktif atau tidak
            if($email['active'] == 'true'){
                // cek password benar atau tidak
                if(password_verify($data['password'],$email['password'])){
                    // saat berhasil login dengan email
                    $sessLogin = [
                        'isLogin' => true,
                        'email' => $email['email'],
                        'username' => $email['username'],
                        'level' => $email['level_user']
                    ];
                    $this->session->set($sessLogin);
                    if (!$this->session->set($sessLogin) == 'admin') {
                        return redirect()->to('dashboard');
                    } else {
                        return redirect()->to('user');
                    }
                    
                }else{
                    //saat password salah
                    session()->setFlashdata('akun', 'salah');
                    return redirect()->back();
                }
            }elseif($email['active'] == 'false'){
                //Akun Belum aktif
                session()->setFlashdata('akun', 'mati');
                return redirect()->back();
            }

        }else{
            // email tidak ada cek username
		    $username = $this->userModel->where('username', $data['username'])->first();
            if($username){
                //saat username ada, cek aktif tidak
                if($username['active'] == 'true'){
                    // cek password benar atau tidak
                    if(password_verify($data['password'],$username['password'])){
                        // saat berhasil login dengan email
                        $sessLogin = [
                            'isLogin' => true,
                            'email' => $username['email'],
                            'username' => $username['username'],
                            'level' => $username['level_user']
                        ];
                        $this->session->set($sessLogin);
                        if (!$this->session->set($sessLogin) == 'admin') {
                            return redirect()->to('dashboard');
                        } else {
                            return redirect()->to('user');
                        }
                        
                    }else{
                        //saat password salah
                        session()->setFlashdata('akun', 'salah');
                        return redirect()->back();
                    }
                }elseif($email['active'] == 'false'){
                    //Akun Belum aktif
                    session()->setFlashdata('akun', 'mati');
                    return redirect()->back();
                }
            }else{
                // saat akun tidak ada
                session()->setFlashdata('akun', 'kosong');
                return redirect()->back();
            }

        }

    }
    public function slogout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('login_admin');
    }

}
