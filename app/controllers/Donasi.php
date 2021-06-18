<?php

class Donasi extends Controller{
    public function index(){
        $data['judul']='Perkembangan Donasi';
        $this->view('templates/header',$data);
        $this->view('donasi/index');
        $this->view('templates/footer');
    }

    public function riwayatDonasi($idAkun){
        $data['judul'] = 'Riwayat Donasi';
        $data['donasi']=$this->model('Donasi_model')->getDonasi($idAkun);
        $this->view('templates/header',$data);
        $this->view('donasi/riwayat',$data);
        $this->view('templates/footer');
    }
}
