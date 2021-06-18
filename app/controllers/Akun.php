<?php

class Akun extends Controller {

    public  function index(){

        $this->model("Akun_model")->clearsession();
        $this->view('templates/header');
        $this->view('akun/index');
        $this->view('templates/footer');

    }

    public function login(){
        $_SESSION['username'] = $_POST['username'];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $this->model('Akun_model')->getLogin($username,$password);
        if(isset($_SESSION["status"])){
            if($_SESSION["status"]=== true){
                $this->view("homeAkun/index");
            }else if($_SESSION["status"]=== false){
                $this->view("akun/index");
                $_SESSION['error']=true;
            }
        }

    }


}
