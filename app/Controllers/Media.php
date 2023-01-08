<?php

namespace App\Controllers;

use App\Models\ArtikelKategoriModel;
use App\Models\ArtikelModel;
use App\Models\UserDetailModel;
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
            $model = new ArtikelModel();
            $data['artikel'] = $model->get_artikel();
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
            $model = new ArtikelKategoriModel();
            $data['kategori'] = $model->get_kategori();
		    return view('Admin/post_new', $data);
        }
        return redirect()->to('/user');
		
	}
    public function input_new_post()
    {
        $data = $this->request->getPost();
        //get file foto
		$file =  $this->request->getFile('file_upload');
		$randomName = $file->getRandomName();
        $model = new UserDetailModel();
        $id_pembuat = $model->id_user_detail();
        $this->artikelModel = new ArtikelModel();
        $this->artikelModel->save([
            'id_kategori' => $data['kategori'],
            'judul_artikel' => $data['Jberita'],
            'tumbnail_artikel' => $randomName,
            'isi_artikel' => $data['isi_artikel'],
            'tgl_artikel' => $data['TglBerita'],
            'id_pembuat_artikel' => $id_pembuat,
            'tayang_artikel' => "tayang"
        ]);
        //masukan foto kefolder artikel
        if ($file->isValid() && ! $file->hasMoved())
        {
            $file->move(ROOTPATH.'public/assets/images_berita/',$randomName);
        }
        return redirect()->to('post');
    }

}
