<?php 
    require '../model/User.php';
    $user = new User();
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $credentials = $user->selectByCredentialsUser($email,$pass);
        if(isset($credentials)){
            // var_dump($credentials['nama_dpn']);
            session_start();
            $_SESSION['email']=$credentials['email'];
            $_SESSION['pass']=$credentials['pass'];
            header("Location: http://127.0.0.1/simple-login-register/");
            // var_dump($credentials['email']);

        }else{
            die("gagal");
        }
    }
?>