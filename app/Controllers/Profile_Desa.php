<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\WebOptionModel;

class Profile_Desa extends BaseController
{
	public function __construct()
    {
		$this->session = session();
    }
	public function visi_misi()
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
            $data['visi'] = $model->get_visi();
            $data['misi'] = $model->get_misi();
		    return view('Admin/visi_misi', $data);
        }
        return redirect()->to('/user');
	}
    public function update_visi_misi()
    {
        //cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$data = $this->request->getPost();
           // saat gambar tidak update
            $datavisi = [
                'value_web_option' => $data['visi']
            ];
            $id_visi = "visi_desa";
            $this->weboptionvisi = new WebOptionModel();
            $updatevisi = $this->weboptionvisi->updateoption($datavisi, $id_visi);
            // Jika berhasil melakukan update
            if ($updatevisi) {
                $datamisi = [
                    'value_web_option' => $data['misi']
                ];
                $id_misi = "misi_desa";
                $this->weboptionmisi = new WebOptionModel();
                $updatemisi = $this->weboptionmisi->updateoption($datamisi, $id_misi);
                if($updatemisi){
                    // mengirim notif
                    echo session()->setFlashdata('info', 'Updated Visi dan Misi Berhasil');
                    // Redirect ke halaman artikel
                    return redirect()->back();
                }
                
            }
        }
        return redirect()->to('/user');
    }
    public function peta_desa()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$model = new UserModel();
			$data['user'] = $model->get_detail_akun();
            $model = new WebOptionModel();
		    $data['web_option'] = $model->get_option_web();//wajib
            $data['peta'] = $model->get_peta();
		    return view('Admin/peta_desa', $data);
        }
        return redirect()->to('/user');
    }
    public function update_peta_desa()
    {
        //cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$data = $this->request->getPost();
           // saat gambar tidak update
            $datapeta = [
                'value_web_option' => $data['peta']
            ];
            $id_peta = "peta_desa";
            $this->weboptionpeta = new WebOptionModel();
            $update = $this->weboptionpeta->updateoption($datapeta, $id_peta);
            // Jika berhasil melakukan update
            if ($update) {
                echo session()->setFlashdata('info', 'Updated Peta Berhasil');
                // Redirect ke halaman sebelumnya
                return redirect()->back();
            }
        }
        return redirect()->to('/user');
    }

}
