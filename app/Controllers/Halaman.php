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
