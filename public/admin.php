<?php

require_once  "../vendor/autoload.php";

use \App\Admin;

$admin = new  Admin();

$admin->login();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHub</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>s
</head>
<body>
    <!--Header-->
<header>
    <!--Nav-->
    <div class="nav container">
    <!--Logo-->
    <a href="#" class="logo">Ve<span>nom</span></a>
    </div>
</header>
    <!--Admin Login-->






<!--Footer-->
<div class="footer container">
    <p>&#169; Carpoolvenom All Right Reserved</p>
    <div class="social">
        <a href="#"><i class="bx bx1-facebook"></i></a>
        <a href="#"><i class="bx bx1-twitter"></i></a>
        <a href="#"><i class="bx bx1-instagram"></i></a>
        <a href="#"><i class="bx bx1-linkedin"></i></a>
        <box-icon type='logo' name='messenger'></box-icon>
    </div>
</div>



<!-- script -->
<script src=""></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>