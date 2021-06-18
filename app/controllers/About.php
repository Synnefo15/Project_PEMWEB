<?php
class About extends Controller
{
    public function __construct()
    {
        if($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setFlash('Login','Tidak ditemukan.','danger');
            header('location: '. BASEURL . '/login');
            exit;
        }
    }
    public function index($nama = 'rafi', $pekerjaan = 'nganggur', $umur = 21)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
