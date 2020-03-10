<?php 
    session_start();
    $_SESSION['tes']="s";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="header">
        <h1>Facebook</h1>
        <div class="profile">
            <img width="35px" src="../image/images.jpeg" alt="" srcset="">
            <span><?php  echo ($_SESSION['tes']); ?></span>
        </div>
    </div>
</body>
</html>