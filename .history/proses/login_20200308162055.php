<?php 
    require '../model/User.php';
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $user = new User();
    }
?>