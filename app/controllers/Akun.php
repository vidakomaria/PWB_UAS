<?php

class Akun extends Controller {

    public  function index(){
        $data['judul']='Log In';
        $this->model("Akun_model")->clearsession();
        $this->view('templates/header',$data);
        $this->view('akun/index');
        $this->view('templates/footer');

    }
    public function tampilkanAkun(){
        $data['judul']='My Account';
        $_SESSION['username']=$_POST['username'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $data['akun']=$this->model('Akun_model')->getAkun($username,$password);
        $data['error']='';
        $hasil = '';
        $idAkun = '';
        foreach ($data['akun'] as $item){
            $idAkun = $item['idAkun'];
            if ($item['username']==$username){
                if ($item['password']==$password){
                    $hasil = true;
                }else{
                    $data['error']='Password salah';
                    $hasil=false;
                }
            }else{
                $data['error']='Username tidak ada';
                $hasil=false;
            }
        }
        if ($hasil===true){
            $this->view('templates/header',$data);
            $this->view('homeAkun/index',$data);
            $this->view('templates/footer');
        }
        else{
            $this->view('akun/index',$data);
        }

    }
}
