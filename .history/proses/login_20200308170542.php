<?php 
    require '../model/User.php';
    $user = new User();
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if($user->selectByCredentialsUser($email,$pass)){
            die("berhasil");
        }else{
            die("gagal");
        }
    }
?>