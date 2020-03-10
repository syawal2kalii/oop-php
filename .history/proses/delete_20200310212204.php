<?php 
    require '../model/User.php';
    $user = new User();
    $id=$_GET['id_user'];
    if($user->deleteByID($id)){
        return true;
    }else{
        die(mysqli_error());
    }
?>