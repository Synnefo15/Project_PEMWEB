<?php 

class Kota extends Controller
{
	public function index()
	{
		$data['title'] = 'Data Kota';
		$data['kota'] = $this->model('Kota_model')->getAllKota();
		$this->view('templates/header', $data);
		$this->view('kota/index', $data);
		$this->view('templates/footer');
	}
	
	public function cari()
	{
		$data['title'] = 'Data Kota';
		$data['kota'] = $this->model('Kota_model')->cariKota();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('kota/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Detail Kota';
		$data['kota'] = $this->model('Kota_model')->getKotaById($id);
		$this->view('templates/header', $data);
		$this->view('kota/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Kota';		
		$this->view('templates/header', $data);
		$this->view('kota/create', $data);
		$this->view('templates/footer');
	}

	public function simpanKota()
	{		
		if( $this->model('Kota_model')->tambahKota($_POST) > 0 ) {
			Flasher::setFlash('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/kota');
			exit;			
		}else{
			Flasher::setFlash('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/kota');
			exit;	
		}
	}

	public function updateKota(){	
		if( $this->model('Kota_model')->updateDataKota($_POST) > 0 ) {
			Flasher::setFlash('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/kota');
			exit;			
		}else{
			Flasher::setFlash('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/kota');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('Kota_model')->deleteKota($id) > 0 ) {
			Flasher::setFlash('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/kota');
			exit;			
		}else{
			Flasher::setFlash('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/kota');
			exit;	
		}
	}
}

 ?>