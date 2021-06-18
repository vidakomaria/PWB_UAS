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
        return $this->db->resultAll();
    }

    public function addAkun($nama,$username,$password,$email,$nohp){
        $query = "INSERT INTO akun (nama_lengkap,username,password,email,noHp) VALUES (:nama,:username,:password,:email,:noHp)";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('email', $email);
        $this->db->bind('noHp', $nohp);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function editAkun($nama,$username,$password,$email,$nohp,$idAKun){
        $query = "UPDATE akun SET nama_lengkap=:nama,username=:username,password=:password,email=:email,noHp=:noHp WHERE idAkun=:id";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('email', $email);
        $this->db->bind('noHp', $nohp);
        $this->db->bind('id', $idAKun);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function clearsession(){
        session_destroy();
    }
}
