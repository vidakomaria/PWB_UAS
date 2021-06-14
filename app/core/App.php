<?php

class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url=$this->parseURL();

//        var_dump($url);       //utk menampilkan url

        // controller
        if (isset($url)){
            if(file_exists('../app/controllers/' . $url[0] . '.php')){       //cek apakah url index 0 ada di controllers
                $this->controller = $url[0];    //mengganti nilai controller menjadi url [0]
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;  #mengubah controller

        //method
        if (isset($url[1])){
            if (method_exists($this->controller,$url[1])){ //cek method (url[1]) dalam controller
                $this->method = $url[1];
                unset($url[1]); //menghapus url yg menjadi method
            }
        }

        //params
        if (!empty($url)){
            $this->params = array_values($url);
            //var_dump($url);
        }

        //menjalankan controller, method, dan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

    }
    public function parseURL(){
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/'); #utk menghilangkan / pada akhir url
            $url = filter_var($url, FILTER_SANITIZE_URL); #untuk memfilter url
            $url = explode('/', $url); #utk memecahhasil url
            return $url;
        }
    }
}
