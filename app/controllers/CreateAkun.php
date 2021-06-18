<?php

class CreateAkun extends Controller {

    public  function index(){
        $data['judul']='Akun';
        $this->model("Akun_model")->clearsession();
        $this->view('templates/header',$data);
        $this->view('createAkun/index');
        $this->view('templates/footer');

    }

//    public function login(){
//        $_SESSION['username'] = $_POST['username'];
//        $username=$_POST["username"];
//        $password=$_POST["password"];
//        $this->model('Akun_model')->getLogin($username,$password);
//        if(isset($_SESSION["status"])){
//            if($_SESSION["status"]=== true){
//                $this->view('homeAkun/index');
//            }else if($_SESSION["status"]=== false){
//                $this->view("akun/index");
//                $_SESSION['error']=true;
//            }
//        }
//
//    }


}
