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
            $_SESSION['id']=$credentials['id'];
            $_SESSION['nama_dpn']=$credentials['nama_dpn'];
            $_SESSION['email']=$credentials['email'];
            $_SESSION['status']=$credentials['status'];
            // die($_SESSION['nama_dpn']);
            header("Location:http://127.0.0.1/simple-login-register/view/admin.php");
            // var_dump($credentials['email']);

        }else{
            header("Location: http://localhost/simple-login-register/index.php");
        }
    }
?>