<?php
    session_start();
    if(isset($_SESSION['id'])){
        require '../model/User.php';
        $user = new User();
        $id=$_GET['id_user'];
        if($user->deleteByID($id)){
            return true;
        }else{
            die(mysqli_error());
        }
    }else{
        header("Location:http://127.0.0.1/simple-login-register/index.php");
    }    
?>  