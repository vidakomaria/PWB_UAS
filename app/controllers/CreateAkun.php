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

    }


}
