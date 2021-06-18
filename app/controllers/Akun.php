<?php

class Akun extends Controller {

    public  function index(){
        $data['judul']='Log In';
        $this->model("Akun_model")->clearsession();
        $this->view('templates/header',$data);
        $this->view('akun/index');
        $this->view('templates/footer');

    }

//    public function login(){
//        $_SESSION['username'] = $_POST['username'];
//        $username=$_POST["username"];
//        $password=$_POST["password"];
//        $data['akun'] = $this->model('Akun_model')->getLogin($username,$password);
//        if(isset($_SESSION["status"])){
//            if($_SESSION["status"]=== true){
//                $this->view('templates/header');
//                $this->view('homeAkun/index',$data);
//                $this->view('templates/footer');
//            }else if($_SESSION["status"]=== false){
//                $this->view("akun/index");
//                $_SESSION['error']=true;
//            }
//        }
//
//    }

    public function tampilkanAkun(){
        $data['judul']='My Account';
        $_SESSION['username']=$_POST['username'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $data['akun']=$this->model('Akun_model')->getAkun($username,$password);
        $data['error']='';
        foreach ($data['akun'] as $item){
            if ($item['username']==$username){
                if ($item['password']==$password){
                    $this->view('templates/header',$data);
                    $this->view('homeAkun/index',$data);
                    $this->view('templates/footer');
                }else{
                    $data['error']='Password salah';
                }
            }else{
                $data['error']='Username tidak ada';
            }
        }
        if (isset($data['error'])){
            $this->view('akun/index',$data);
        }
        else{
            $this->view('templates/header',$data);
            $this->view('homeAkun/index',$data);
            $this->view('templates/footer');
        }
    }


}
