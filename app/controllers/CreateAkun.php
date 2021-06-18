<?php

class CreateAkun extends Controller {

    public  function index(){
        $data['judul']='Sign Up';
        $this->model("Akun_model")->clearsession();
        $this->view('templates/header',$data);
        $this->view('createAkun/index');
        $this->view('templates/footer');

    }
    public function addAkun(){
        if ($this->model('Akun_model')->addAkun($_POST['nama'],$_POST['username'],$_POST['password'], $_POST['email'], $_POST['noHp']) > 0){
            header("Location: " . BASEURL . '/createAkun');
            exit;
        }
    }


}
