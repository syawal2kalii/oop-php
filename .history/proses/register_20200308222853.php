<?php 
require '../model/User.php';
    
    if(isset($_POST['submit'])){
        // die($_POST['nama_dpn']);
        $date = new DateTime($_POST['thn'].'/'.$_POST['bln'].'/'.$_POST['tgl']);
        // var_dump($date->format('Y-m-d'));
        // var_dump($_POST['thn'].'/'.$_POST['bln'].'/'.$_POST['tgl']);
        $user = new User();
        $data = array(
            "nama_dpn"=>$_POST['nama_dpn'],
            "nama_blk"=>$_POST['nama_blk'],
            "jk"=>$_POST['jk'],
            "pass"=>$_POST['pass'],
            "email"=>$_POST['email'],
            "status"=>1,
            "tgl_lahir"=>$date->format('Y-m-d'),
        );

        // var_dump($data);

        if($user->insertUser($data)){
            header("Location: http://127.0.0.1/simple-login-register/");
        }else{
            die('gagal');
        }
    }
 
?>