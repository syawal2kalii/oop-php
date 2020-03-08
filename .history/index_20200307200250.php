<?php 
require 'model/User.php';
    
    if(isset($_POST['submit'])){
        $user = new User();
        $data = array(
            "nama_dpn"=>$_POST['nama_dpn'],
            "nama_blk"=>$_POST['nama_blk'],
            "jk"=>"laki-laki",
            "pass"=>"syawal",
            "email"=>"syawal20162016@gmail.com",
            "tgl_lahir"=>"2020-03-03",
        );
    }
    
    // if($user->insertUser($data)){
    //     die('berhasil');
    // }else{
    //     die('gagal');
    // }
    // var_dump($user->tes());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Login and Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="box-top">
 
            <div class="box-top-title">
                <span>facebook</span>
            </div>
            <div class="box-top-login">
                <div class="input-email">
                    <span>Email atau telepon</span><br>
                    <input type="text" name="email" id="" placeholder="Email">
                </div>
                <div class="input-pass">
                    <span>Kata Sandi</span><br>
                    <input type="password" name="pass" id="" placeholder="password"><br>
                    <span>Lupa akun?</span>
                </div>
                <div class="btn-ok">
                    <br>
                    <button>login</button>
                    <br>
                </div>    
            </div>
        </div>
    </div>
    <div class="container-content">
        <!-- inline css -->
        <div class="box-content" style="height: 100%;  margin-left: 15%; margin-right: 15%;">
            <div class="section1"> 
                <div class="text">
                    <span>facebook membantu Anda terhubung dan <br>
                        berbagi dengan orang-orang dalam kehidupan <br> Anda.
                    </span>
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/OBaVg52wtTZ.png" alt="" srcset="">
                </div>
            </div>
            <div class="section2">
                <span style="font-size: xx-large;">Daftar</span><br>
                <span style="font-size: medium;">Ini Cepat dan Mudah</span>
                <div class="form">
                    <form action="www.facebook.com" method="post">
                        <div class="row">
                            <div class="row2">
                                <input type="text" name="nama_dpn" id="" placeholder="Nama depan">
                            </div>
                            <div class="row2">
                                <input type="text" name="nama_blk" id="" placeholder="Nama Belakang">
                            </div>
                        </div>
                        <div class="row">
                            <input style="width: 89%;" type="email" name="email" id="" placeholder="Nomor seluler atau email">
                        </div>
                        <div class="row">
                            <input style="width: 89%;" type="pass" name="pass" id="" placeholder="Kata sandi baru">
                        </div>
                        <div class="row">
                            <span>Tanggal Lahir</span>
                        </div>
                        <div class="row">
                           <select style="width:70px" name="tgl">
                            <?php 
                               for ($i=1; $i < 32; $i++) {
                               echo "<option value=".$i.">".$i."</option>";
                               }
                            ?>
                           </select>
                           <select name="bln" id="">
                               <option value="januari">januari</option>
                               <option value="februari">februari</option>
                               <option value="maret">maret</option>
                               <option value="april">april</option>
                               <option value="mei">mei</option>
                               <option value="juni">juni</option>
                               <option value="juli">juli</option>
                               <option value="agustus">agustus</option>
                               <option value="september">september</option>
                               <option value="november">november</option>
                               <option value="september">september</option>
                           </select>
                           <select name="thn" id="">
                               <?php
                                $datenow = intval(date("Y")); 
                                for ($i=1900; $i <= $datenow; $i++) { 
                                    echo "<option value=".$i.">".$i."</option>";
                                }
                               ?>
                           </select>
                        </div>
                        <div class="row">
                            <span>Jenis Kelamin</span>
                        </div>
                        <div class="row">
                            <input type="radio" name="jk" id="perempuan" value="Perempuan">
                            <label for="perempuan">perempuan</label>
                            <input type="radio" name="jk" id="laki-laki" value="Perempuan">
                            <label for="laki-laki">laki-laki</label>
                            <input type="radio" name="jk" id="perempuan" value="Perempuan">
                            <label for="perempuan">perempuan</label>
                        </div>

                        <div class="row">
                            <span style="font-size: small;">Dengan mengklik Daftar, Anda menyetujui Ketentuan, Kebijakan <br> Data dan Kebijakan Cookie kami. Anda akan menerima <br> Notifikasi SMS dari Facebook dan dapat menolaknya kapan <br> saja.
                            </span>
                        </div>

                        <div class="row">
                            <input type="submit" name="submit">Daftar</input>
                        </div>
                        <div class="row">
                            <span><a href="">Buat Halaman</a> untuk selebriti, grub, music, atau bisnis.</span>
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
    <div class="footer">
        <div class="container-footer">
            <ul>
                <li><a href="">Bahasa Indonesia</a></li>
                <li><a href="">English (UK)</a></li>
                <li><a href="">Bahasa Jawa</a></li>
                <li><a href="">Bahasa Melayu</a></li>
                <li><a href="">none</a></li>
                <li><a href="">none</a></li>
                <li><a href="">Francais</a></li>
                <li><a href="">Espanol</a></li>
                <li><a href="">Portogues (Brasil)</a></li>
                <li><a href="">Deutsch</a></li>
            </ul>
            
        </div>
    </div>
</body>
</html>