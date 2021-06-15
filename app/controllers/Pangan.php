<?php
class Pangan extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Pangan';
        $data['pangan'] = $this->model('Pangan_model')->getAllPangan();
        $this->view('templates/header', $data);
        $this->view('pangan/index', $data);
        $this->view('templates/footer');
    }
    // ori
    public function detail($id)
    {
        $data['title'] = 'Detail Pangan';
        $data['pangan'] = $this->model('Pangan_model')->getPanganById($id);
        $this->view('templates/header', $data);
        $this->view('pangan/detail', $data);
        $this->view('templates/footer');
    }
    
    // try
    public function lihatlaporan()
    {
        $data['title'] = 'Data Laporan Pangan';
        $data['pangan'] = $this->model('Pangan_model')->getAllPangan();
        $this->view('pangan/lihatlaporan', $data);
    }

    // try
    public function laporan()
    {
    $data['pangan'] = $this->model('Pangan_model')->getAllPangan();
    $pdf = new FPDF('p','mm','A4');
    // membuat halaman baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B',14);
    // mencetak string
    $pdf->Cell(190,7,'LAPORAN PANGAN',0,1,'C');

    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(85,6,'Komoditas',1);
    $pdf->Cell(30,6,'Kategori',1);
    $pdf->Cell(30,6,'Kota',1);
    $pdf->Cell(15,6,'Harga',1);
    $pdf->Ln();
    $pdf->SetFont('Arial','',10);

    foreach($data['pangan'] as $row) {
    $pdf->Cell(85,6,$row['komoditas'],1);
    $pdf->Cell(30,6,$row['kategori'],1);
    $pdf->Cell(30,6,$row['kota'],1);
    $pdf->Cell(15,6,$row['harga'],1);
    $pdf->Ln();
    }

    $pdf->Output('D', 'Laporan Pangan.pdf', true);
    }

    // try
    public function cari()
        {
            $data['title'] = 'Data Pangan';
            $data['pangan'] = $this->model('Pangan_model')->cariPangan();
            $data['key'] = $_POST['key'];
            $this->view('templates/header', $data);
            $this->view('pangan/index', $data);
            $this->view('templates/footer');
        }
    // try
    public function tambah(){
        $data['title'] = 'Tambah Pangan';     
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();        
        $this->view('templates/header', $data);
        $this->view('pangan/create', $data);
        $this->view('templates/footer');
    }

    // try 
    public function edit($id){

            $data['title'] = 'Detail Pangan';
            $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
            $data['pangan'] = $this->model('Pangan_model')->getPanganById($id);
            $this->view('templates/header', $data);
            $this->view('pangan/edit', $data);
            $this->view('templates/footer');
        }

    public function simpanPangan(){       

        if( $this->model('Pangan_model')->tambahPangan($_POST) > 0 ) {
            Flasher::setFlash('Berhasil','ditambahkan','success');
            header('location: '. BASEURL . '/pangan');
            exit;           
        }else{
            Flasher::setFlash('Gagal','ditambahkan','danger');
            header('location: '. BASEURL . '/pangan');
            exit;   
        }
    }

    // * flasher
    // public function tambah()
    //     {
    //     if ($this->model('Pangan_model')->tambahDataPangan($_POST) > 0) {
    //     Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //     header('Location: ' . BASEURL . '/pangan');
    //     exit;
    //     } else {
    //     Flasher::setFlash('gagal', 'ditambahkan', 'danger');
    //     header('Location: ' . BASEURL . '/pangan');
    //     exit;
    //     }
    // }
    
    public function updatePangan(){   
        if( $this->model('Pangan_model')->updateDataPangan($_POST) > 0 ) {
            Flasher::setFlash('Berhasil','diupdate','success');
            header('location: '. BASEURL . '/pangan');
            exit;           
        }else{
            Flasher::setFlash('Gagal','diupdate','danger');
            header('location: '. BASEURL . '/pangan');
            exit;   
        }
    }

    public function hapus($id)
        {
        if ($this->model('Pangan_model')->deletePangan($id) > 0) {
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/pangan');
        exit;
        } else {
        Flasher::setFlash('gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/pangan');
        exit;
        }
    }
}