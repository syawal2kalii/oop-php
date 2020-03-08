<?php 
    require '../model/User.php';
    $user = new User();
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $credentials = $user->selectByCredentialsUser($email,$pass);
        // var_dump($credentials);
        if(isset($credentials)){

            die("berhasil");
        }else{
            die("gagal");
        }
    }
?>