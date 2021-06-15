<?php

class Akun extends Controller{
    public function index(){
        $data['judul'] = 'Akun';
        $data['akun']= $this->model('Akun_model')->getDataAkun();
        $this->view('templates/header',$data);
        $this->view('akun/index', $data);
        $this->view('templates/footer');
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (strlen($password)==0 OR strlen($username)==0){
            $_SESSION['error'] = "Username/Password Kosong";
        }
        if (isset($_SESSION['error'])){
            $_SESSION['status'] = false;
        } else{
            $this->model('Akun_model')->getLogin($username, $password);
        }

        if (isset($_SESSION['status'])) {
            if ($_SESSION['status']==true){
                $this->view('akun/login', $_SESSION['status']);
            }else{
                $this->view('akun/index', $_SESSION['status']);
                $_SESSION['error']='Username/Password Salah!';
            }
        }
    }
}