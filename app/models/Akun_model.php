<?php
session_start();

class Akun_model{
    private $tabel = 'akun';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getDataAkun(){
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultAll();
    }

    public function getAkun($username, $password){
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE username=:user AND password=:pass');
        $this->db->bind('user', $username);
        $this->db->bind('pass', $password);

//        if (isset($result)){
//            $_SESSION["status"]=true;
//        } else{
//            $_SESSION["status"]=false;
//        }
        return $this->db->resultAll();
    }

    public function addAkun(){

    }

    public function clearsession(){
        session_destroy();
    }
}
