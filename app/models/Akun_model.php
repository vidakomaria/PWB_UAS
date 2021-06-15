<?php

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

    public function getLogin($username, $password){
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE username=:user');
        $this->db->bind('user', $username);
        $result = $this->db->resultAll();
        foreach ($result as $item){
            $id = $item['idAkun'];
            $user= $item['username'];
            $pw = $item['password'];
        }
        if ($user == $username AND $pw == $password){
            $_SESSION['status'] = True;
        }else{
            $_SESSION['status'] = False;
        }
    }
}
