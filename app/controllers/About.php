<?php

class About extends Controller{
    public function index($nama='bayu',$mahasiswa='mahasiswa',$umur=20)
    {
        $data['nama']=$nama;
        $data['mahasiswa']=$mahasiswa;
        $data['umur']=$umur;
        $data['judul']='About me';
        $this->view('templates/header', $data);
        $this->view('about/index',$data);
        $this->view('templates/footer');

    }
    public function page()
    {
        $data['judul']='pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}