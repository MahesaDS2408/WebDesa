<?php

namespace App\Controllers;

use App\Models\ArtikelKategoriModel;
use App\Models\ArtikelModel;
use App\Models\GalerigroupModel;
use App\Models\GaleriModel;
use App\Models\UserDetailModel;
use App\Models\UserModel;
use App\Models\WebOptionModel;
use CodeIgniter\HTTP\Request;

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
    public function status_post($id, $status)
    {
        //cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$dataupdate = [
                'tayang_artikel' => $status
            ];
            $id_artikel = $id;
            $this->artikelModel = new ArtikelModel();
            $update = $this->artikelModel->updateartikel($dataupdate, $id_artikel);
            // Jika berhasil melakukan update
            if ($update) {
    
                // mengirim notif
                echo session()->setFlashdata('info', 'Updated Artikel Berhasil');
                // Redirect ke halaman artikel
                return redirect()->to('dashboard/post');
            }
        }
        return redirect()->to('/user');
        
    }
    public function input_new_post()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
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
                'tgl_artikel' => date('Y-m-d H:i:s'),
                'id_pembuat_artikel' => $id_pembuat,
                'tayang_artikel' => $data['tayang_artikel']
            ]);
            //masukan foto kefolder artikel
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/assets/images_berita/',$randomName);
            }
            return redirect()->to('dashboard/post');
        }
        return redirect()->to('/user');
        
    }
    public function edit_post($id)
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
            $model = new ArtikelModel();
            $data['artikel'] = $model->get_edit_artikel($id);
		    return view('Admin/post_edit', $data);
        }
        return redirect()->to('/user');
    }
    public function update_post($id)
    {
        //cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$data = $this->request->getPost();
            $file =  $this->request->getFile('file_upload');
            $randomName = $file->getRandomName();
            $file_lama = $data['file_lama'];
            if($file->isValid()){
                //jika ada file baru
                if(file_exists(ROOTPATH."public/assets/images_berita/".$file_lama)){
                    //menghapus file lama
                    unlink(ROOTPATH."public/assets/images_berita/".$file_lama);
                    //masukan foto kefolder
                    if ($file->isValid() && ! $file->hasMoved())
                    {
                        $file->move(ROOTPATH.'public/assets/images_berita/',$randomName);
                    }
                    $dataupdate = [
                        'judul_artikel' => $data['judul_artikel'],
                        'isi_artikel' => $data['isi_artikel'],
                        'tumbnail_artikel' => $randomName,
                        'id_kategori' => $data['kategori']
                    ];
                    $id_artikel = $id;
                    $this->artikelModel = new ArtikelModel();
                    $update = $this->artikelModel->updateartikel($dataupdate, $id_artikel);
                    // Jika berhasil melakukan update
                    if ($update) {

                        // mengirim notif
                        echo session()->setFlashdata('info', 'Updated Artikel Berhasil');
                        // Redirect ke halaman artikel
                        return redirect()->to('dashboard/post');
                    }
                }
            }else{
                // saat gambar tidak update
                $dataupdate = [
                    'judul_artikel' => $data['Jberita'],
                    'isi_artikel' => $data['isi_artikel'],
                    'id_kategori' => $data['kategori']
                ];
                $id_artikel = $id;
                $this->artikelModel = new ArtikelModel();
                $update = $this->artikelModel->updateartikel($dataupdate, $id_artikel);
                // Jika berhasil melakukan update
                if ($update) {
                    // mengirim notif
                    echo session()->setFlashdata('info', 'Updated Artikel Berhasil');
                    // Redirect ke halaman artikel
                    return redirect()->to('dashboard/post');
                }
            }
        }
        return redirect()->to('/user');
        
        

    }
    public function delete_post($id)
    {
        //cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			 // menghapus Artikel oleh admin
             $model = new ArtikelModel();
             $foto = $model->getfotoartikel($id);
             //menghapus file lama
             unlink(ROOTPATH."public/assets/images_berita/".$foto);
             //akses ke tabel artikel
             $this->artikelModel = new ArtikelModel();
             // Memanggil function delete_artikel
             $hapus = $this->artikelModel->deleteartikel($id);
             // Jika berhasil melakukan hapus
             if ($hapus) {
                 // mengirim notif 
                 session()->setFlashdata('info', 'Deleted Artikel Berhasil');
                 // Redirect ke halaman artikel
                 return redirect()->to('dashboard/post');
             }
        }
        return redirect()->to('/user');
    }
    public function galeri()
    {
        //cek apakah ada session yang sudah masuk
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$model = new UserModel();
			$data['user'] = $model->get_detail_akun();
            $data['all_user'] = $model->getalluser();
            $model = new WebOptionModel();
		    $data['web_option'] = $model->get_option_web();//wajib
            $model = new GaleriModel();
            $data['galeri'] = $model->getallgaleri();
            $model = new GalerigroupModel();
            $data['sub_galeri'] = $model->getallsubgaleri();

		    return view('Admin/galeri', $data);
        }
        return redirect()->to('/user');
    }
    public function new_galeri()
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
		    return view('Admin/galeri_new', $data);
        }
        return redirect()->to('/user');
		
	}
    public function input_galeri()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_admin');
        }
		//cek role dari session yang masuk
        if ($this->session->get('level') == 'admin' || $this->session->get('level') == 'operator') {
			$data = $this->request->getPost();
            $files = $this->request->getFileMultiple('files');
            $model = new UserDetailModel();
            $id_pembuat = $model->id_user_detail();
            if($data['kategori'] == "foto"){
                
                if(count($files) == 2){
                    // kondisi file == 1
                    foreach ($files as $file) {
            
                        if ($file->isValid() && ! $file->hasMoved())
                        {
                            $newName = $file->getRandomName();
                            
                                
                            $this->galeriModel = new GaleriModel();
                            $this->galeriModel->save([
                                'judul_galeri' => $data['JGaleri'],
                                'kategori_galeri' => $data['kategori'],
                                'tgl_galeri' => date('Y-m-d H:i:s'),
                                'file_galeri' => $newName,
                                'group_galeri' => "tidak",
                                'tayang_galeri' => "tayang",
                                'id_pembuat_galeri' => $id_pembuat
                            ]);
        
        
                            $file->move(ROOTPATH.'public/assets/images_galeri/', $newName);
                        
                        }
                        
                    }
                }elseif(count($files) > 2){
                    // kondisi == 2
                    $index = 0;
                    $id_galeri = "";
                    foreach ($files as $file) {
            
                        if ($file->isValid() && ! $file->hasMoved())
                        {
                            $newName = $file->getRandomName();
                            
                                if($index == 0){
                                    $this->galeriModel = new GaleriModel();
                                    $inputGaleri = $this->galeriModel->save([
                                                    'judul_galeri' => $data['JGaleri'],
                                                    'kategori_galeri' => $data['kategori'],
                                                    'tgl_galeri' => date('Y-m-d H:i:s'),
                                                    'file_galeri' => $newName,
                                                    'group_galeri' => "ya",
                                                    'tayang_galeri' => "tayang",
                                                    'id_pembuat_galeri' => $id_pembuat
                                                ]);
        
                                    if($inputGaleri){
                                        $model = new GaleriModel();
                                        $id_dari_galeri = $model->getidgaleri($newName, $data['JGaleri']);
                                        $id_galeri = $id_dari_galeri; //memberi idgaleri valid ke atas
                                    }
                                }elseif($index > 0){
                                    
                                    $this->galerigroupModel = new GalerigroupModel();
                                    $this->galerigroupModel->save([
                                        'id_galeri' => $id_galeri,
                                        'file_foto_galeri' => $newName
                                    ]);
        
                                }
                                $index++;
        
                            $file->move(ROOTPATH.'public/assets/images_galeri/', $newName);
                        
                        }
                        
                    }
        
                }

                // jika semua aksi telah di lalui
                return redirect()->to('dashboard/galeri');

            }elseif($data['kategori'] == "video"){
                // KAtegori Galeri Video Belumm
                $token_video = substr($data['link'],32);
                $link = "https://www.youtube.com/embed/".$token_video;
                $tumbnail = "https://img.youtube.com/vi/".$token_video."/mqdefault.jpg";
                $this->galeriModel = new GaleriModel();
                $simpan = $this->galeriModel->save([
                            'judul_galeri' => $data['JGaleri'],
                            'kategori_galeri' => $data['kategori'],
                            'tgl_galeri' => date('Y-m-d H:i:s'),
                            'file_galeri' => $link,
                            'tumbnail_video' => $tumbnail,
                            'group_galeri' => "tidak",
                            'tayang_galeri' => "tayang",
                            'id_pembuat_galeri' => $id_pembuat
                        ]);
                if($simpan){
                    return redirect()->to('dashboard/galeri');
                }

            }
        }
        return redirect()->to('/user');
        
        
    }
    // CARA KUNO TIDAK TERPAKAI
    public function input_new_galeri()
    {
        // INi input pakai cara kuno
        $data = $this->request->getPost();

        $model = new UserDetailModel();
        $id_pembuat = $model->id_user_detail();
        
        if($data['kategori'] == "foto"){
            // JIka Kategori FOTO
            // echo "<h1>Upload " . count($_FILES['files']['name']) . " files</h1>"; //JUmlah Data yang masuk
            $dir = ROOTPATH."public/assets/images_galeri/"; //Mencari posisi folder
            if(!is_dir($dir)){
                mkdir($dir); //membuat folder jika folder belum ada
            }
            
            $id_galeri = "";// membuat variabel untuk menampung id galeri nantinya

            for($x=0; $x < count($_FILES['files']['name']); $x++){
                if(!empty($_FILES['files']['name'][$x])){

                    $namafile = date('Ymd').$_FILES['files']['name'][$x];
                    $targetFile = $dir.$namafile; //Memposisikan Ke dalam Folder
                    $input_file = $_FILES['files']['tmp_name'][$x];

                    if(count($_FILES['files']['name']) == 2){
                        // Kondisi Foto Hanya 1

                        $this->galeriModel = new GaleriModel();
                        $this->galeriModel->save([
                            'judul_galeri' => $data['JGaleri'],
                            'kategori_galeri' => $data['kategori'],
                            'tgl_galeri' => date('Y-m-d H:i:s'),
                            'file_galeri' => $namafile,
                            'group_galeri' => "tidak",
                            'tayang_galeri' => "tayang",
                            'id_pembuat_galeri' => $id_pembuat
                        ]);
                        // echo "File Satu";
                        // echo "<p> Pertama" . $namafile . "</p>";

                    }elseif(count($_FILES['files']['name']) > 2){
                        // Kondisi Foto Lebih Dari 1
                        
                        if($x == 0){
                            // Kondisi Foto pertama untuk tumnail

                            $this->galeriModel = new GaleriModel();
                            $inputGaleri = $this->galeriModel->save([
                                            'judul_galeri' => $data['JGaleri'],
                                            'kategori_galeri' => $data['kategori'],
                                            'tgl_galeri' => date('Y-m-d H:i:s'),
                                            'file_galeri' => $namafile,
                                            'group_galeri' => "ya",
                                            'tayang_galeri' => "tayang",
                                            'id_pembuat_galeri' => $id_pembuat
                                        ]);

                            if($inputGaleri){
                                $model = new GaleriModel();
                                $id_dari_galeri = $model->getidgaleri($namafile, $data['JGaleri']);
                                $id_galeri = $id_dari_galeri; //memberi idgaleri valid ke atas
                            }
                        // echo "<p> Pertama" . $namafile . "</p>";
                        }else{
                            // Foto Lain Untuk Isi Group

                            $this->galerigroupModel = new GalerigroupModel();
                            $this->galerigroupModel->save([
                                'id_galeri' => $id_galeri,
                                'file_foto_galeri' => $namafile
                            ]);

                        // echo "<p>" . $id_galeri . "</p>";
                        }
                    }

                    $move = move_uploaded_file($input_file, $targetFile);//upload ke folder
                }
            }
            // Kehalaman Galeri
            return redirect()->to('dashboard/galeri');

        }elseif($data['kategori'] == "video"){
            // KAtegori Galeri Video Belumm
            echo "Belum";
        }

    }
    

}
