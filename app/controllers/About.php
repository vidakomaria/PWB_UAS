<?php

class About extends Controller{
    public function index(){
//        $data['judul']='About';
//        $data['akun']=$this->model('Akun_model')->getDataAkun();
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

}
