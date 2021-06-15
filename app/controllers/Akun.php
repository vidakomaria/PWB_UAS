<?php

class Akun extends Controller{
    public function index(){
        $data['judul'] = 'Akun';
        $data['nama']= $this->model('Akun_model')->getUser();
        $this->view('templates/header',$data);
        $this->view('akun/index', $data);
        $this->view('templates/footer');
    }

}