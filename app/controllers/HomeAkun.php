<?php

class HomeAkun extends Controller{

    public function index(){
        $data['judul']='My Account';
        $this->view('templates/header',$data);
        $this->view('homeAkun/index');
        $this->view('templates/footer');
    }
}
