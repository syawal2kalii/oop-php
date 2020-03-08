<?php 
    require '../model/User.php';
    $user = new User();
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $credentials = $user->selectByCredentialsUser($email,$pass);
        if(isset($credentials)){
            var_dump($credentials);
        }else{
            die("gagal");
        }
    }
?>