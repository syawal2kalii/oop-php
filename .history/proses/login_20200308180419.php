<?php 
    require '../model/User.php';
    $user = new User();
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $credentials = $user->selectByCredentialsUser($email,$pass);
        if($credentials->num_rows > 0){
            die("berhasil");
        }else{
            die("gagal");
        }
    }
?>