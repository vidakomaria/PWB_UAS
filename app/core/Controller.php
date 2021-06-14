<?php

class controller{
    public function view($view, $data = []){
        $data['judul']='Home';
        require_once '../app/views/' . $view . '.php';
    }
}