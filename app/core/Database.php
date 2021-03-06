<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pw = DB_PW;
    private $dbName = DB_NAME;

    private $connection;   //database handler
    private $stmt;

    public function __construct(){
        // data source name
        $dsn = 'mysql:host=' .$this->host . ';dbname=' .$this->dbName;

        //optimasi koneksi database
        $option = [
            PDO::ATTR_PERSISTENT => true,   //koneksi terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->connection = new PDO($dsn, $this->user, $this->pw, $option);
        } catch (PDOException $e){
            die($e->getMessage());
        }

    }

    public function query($query){
        $this->stmt = $this->connection->prepare($query);
    }

    //membersihkan string agar tidak terjadi query injection
    public function bind($param, $value, $type = null){
        if (is_null($type)){
            switch (true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function resultAll(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function resultSingle(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->stmt->rowCount();
    }
}
