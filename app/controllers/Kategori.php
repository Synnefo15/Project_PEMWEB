<?php

class Kategori extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setFlash('Login','Tidak ditemukan.','danger');
			header('location: '. BASEURL . '/login');
			exit;
		}
	} 
	public function index()
	{
		$data['title'] = 'Data Kategori';
		$data['kategori'] = $this->model('Kategori_model')->getAllKategori();
		$this->view('templates/header', $data);
		$this->view('kategori/index', $data);
		$this->view('templates/footer');
	}
	public function cari()
	{
		$data['title'] = 'Data Kategori';
		$data['kategori'] = $this->model('Kategori_model')->cariKategori();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('kategori/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Detail Kategori';
		$data['kategori'] = $this->model('Kategori_model')->getKategoriById($id);
		$this->view('templates/header', $data);
		$this->view('kategori/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Kategori';		
		$this->view('templates/header', $data);
		$this->view('kategori/create', $data);
		$this->view('templates/footer');
	}

	public function simpanKategori()
	{		
		if( $this->model('Kategori_model')->tambahKategori($_POST) > 0 ) {
			Flasher::setFlash('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/kategori');
			exit;			
		}else{
			Flasher::setFlash('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/kategori');
			exit;	
		}
	}

	public function updateKategori(){	
		if( $this->model('Kategori_model')->updateDataKategori($_POST) > 0 ) {
			Flasher::setFlash('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/kategori');
			exit;			
		}else{
			Flasher::setFlash('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/kategori');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('Kategori_model')->deleteKategori($id) > 0 ) {
			Flasher::setFlash('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/kategori');
			exit;			
		}else{
			Flasher::setFlash('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/kategori');
			exit;	
		}
	}

	
}