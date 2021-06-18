<?php
class Home extends Controller
{
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
        $data['title'] = 'Home';
        
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
