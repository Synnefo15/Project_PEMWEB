<?php
class Blog extends Controller
{
    public function index()
    {
        $data['title'] = 'Blog';
        // $data['kategori']= $this->model('Blog_model')
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function detail()
    {
    	$data['title'] = 'detail berita';
        $data['blog']= $this->model('Blog_model')->showCurl();
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer');

        
    }
}
