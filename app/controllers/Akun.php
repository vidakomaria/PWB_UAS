<?php

class Akun extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('akun/index');
        $this->view('templates/footer');
    }

}