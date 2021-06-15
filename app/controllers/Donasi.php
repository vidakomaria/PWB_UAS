<?php

class Donasi extends Controller{
    public function index(){
        $data['judul']='Perkembangan Donasi';
        $this->view('templates/header',$data);
        $this->view('donasi/index');
        $this->view('templates/footer');
    }
}
