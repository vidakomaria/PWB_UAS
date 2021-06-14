<?php

class Home extends Controller { //inheritance ke class controller
    public function index(){
        $this->view('templates/header');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}