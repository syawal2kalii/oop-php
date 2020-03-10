<?php 
    $user = new User();
    $id=$_GET['id'];
    if($user->deleteByID($id)){
        return true;
    }else{
        die(mysqli_error());
    }
?>