<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\WebOptionModel;

class Halaman extends BaseController
{
	public function beranda()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		$model = new ArtikelModel();
		$data['artikel'] = $model->get_3_artikel();
		return view('home', $data);
	}
	public function peta_desa()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('peta_desa', $data);
	}
	public function pemerintah_desa()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('pemerintah_desa', $data);
	}
	public function visi_misi()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('visi_misi', $data);
	}
	public function galeri()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('galeri', $data);
	}
	public function kontak()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('kontak', $data);
	}

	public function artikel()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('artikel', $data);
	}
	public function artikel_detail($tahun, $judul)
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		$model = new ArtikelModel();
		$data['one_artikel'] = $model->get_1_artikel($judul);
		return view('artikel_detail', $data);
	}
}
