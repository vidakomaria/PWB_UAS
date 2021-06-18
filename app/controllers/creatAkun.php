<?php

class creatAkun extends Controller{
    public function index(){
        $data['judul']='Akun';
        $this->view('templates/header',$data);
        $this->view('createAkun/index');
        $this->view('templates/footer');
    }

    public function create(){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        if (strlen($username)==0 && strlen($password)==0){
            $this->view('akun/index');
        }else {
            $data['akun'] = $this->model('Akun_model')->getLogin($username, $password);
            if (isset($_SESSION['status'])) {
                if ($_SESSION['status'] = true) {
                    $this->view('akun/login', $data);
                } else if ($_SESSION['status'] = false) {
                    $_SESSION['error'] = true;
                    $this->view('akun/index');
//                $this->view('akun/index', $_SESSION['status']);
//                $_SESSION['error']='Username/Password Salah!';
                }
            }
        }
    }
}

$message = "";

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"])) {

    $data = "INSERT INTO user(name, email, phone, password) VALUE (:name, :email, :phone, :password)";
    $statement = $connection->prepare($data);
    if ($statement->execute([":name" => $name, ":email" => $email, ":phone-number" => $phone - number, ":password" => $password])) {
        $message = "Pendaftaran Berhasil";
    }
}

