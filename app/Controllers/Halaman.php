<?php

namespace App\Controllers;

use App\Models\WebOptionModel;

class Halaman extends BaseController
{
	public function beranda()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('home', $data);
	}

	public function artikel()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('artikel', $data);
	}
	public function artikel_detail()
	{
		$model = new WebOptionModel();
		$data['web_option'] = $model->get_option_web();//wajib ada di setiap frame
		return view('artikel_detail', $data);
	}
}