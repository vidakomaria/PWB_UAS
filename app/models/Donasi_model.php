<?php
session_start();

class Donasi_model{
    private $tabel = 'data_donasi';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getDonasi($idAkun){
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE idAkun=:idakun');
        $this->db->bind('idakun', $idAkun);
        return $this->db->resultAll();
    }

    public function clearsession(){
        session_destroy();
    }
}
