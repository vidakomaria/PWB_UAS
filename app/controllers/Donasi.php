<?php

class Donasi extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('donasi/index');
        $this->view('templates/footer');
    }
}
