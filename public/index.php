<?php require_once  "../vendor/autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive BLog Website</title>
    <!--link css-->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<!--Header-->
<header>
    <!--Nav-->
    <div class="nav container">
    <!--Logo-->
    <a href="#" class="logo">Ve<span>nom</span></a>
    <!--Login Btn-->
    <a href="admin.php" class="login">Login</a>
    </div>
</header>
<!-- Home -->
<section class="home" id="home">
    <div class="home-text container">
        <h2 class="home-title">The Venom Blog</h2>
        <span class="home-subtitle">Your source of great content</span>
    </div>
</section>
<!--Post Filter -->
<div class="post-filter container">
    <span class="filter-item active-filter" data-filter='all'>All</span>
    <span class="filter-item" data-filter="design">Design</span>
    <span class="filter-item" data-filter="tech">Teach</span>
    <span class="filter-item" data-filter="Mobile">Mobile</span>
</div>
<!-- Posts -->
<section class="post container">
    <!-- Post Box 1 --> 
    <div class="post-box mobile">
        <img src="img/post-1.jpg" alt="" class="post-img">
        <h2 class="category">Mobile</h2>
        <a href="post-page.html" class="post-title">How To Create Best UX Design With Adobe XD</a>
        <span class="post-date">02 Apr 2023</span>
        <p class="post-decription">Lorem ipsum dolor sit amet consectetur adipisicing</p>
        <!-- Profile -->
        <div class="profile">
            <img src="img/profile-1.jpg" alt="" class="profile-img">
            <span class="profile-name">Marques Brown</span>
        </div>
         <!-- Post Box 2 --> 
    <div class="post-box tech">
        <img src="img/post-2.jpg" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <a href="post-page.html" class="post-title">How To Create Best UX Design With Adobe XD</a>
        <span class="post-date">02 Apr 2023</span>
        <p class="post-decription">Lorem ipsum dolor sit amet consectetur adipisicing</p>
        <!-- Profile -->
        <div class="profile">
            <img src="img/profile-2.jpg" alt="" class="profile-img">
            <span class="profile-name">Marques Brown</span>
        </div>
         <!-- Post Box 3 --> 
    <div class="post-box design">
        <img src="img/post-3.jpg" alt="" class="post-img">
        <h2 class="category">Design</h2>
        <a href="post-page.html" class="post-title">How To Create Best UX Design With Adobe XD</a>
        <span class="post-date">02 Apr 2023</span>
        <p class="post-decription">Lorem ipsum dolor sit amet consectetur adipisicing</p>
        <!-- Profile -->
        <div class="profile">
            <img src="img/profile-3.jpg" alt="" class="profile-img">
            <span class="profile-name">Marques Brown</span>
        </div>
    </div>
    
</section>
<!--Footer -->
<div class="footer container">
    <p>&#169; Carpoolvenom All Right Reserved</p>
    <div class="social">
        <a href="#"><i class="bx bx1-facebook"></i></a>
        <a href="#"><i class="bx bx1-twitter"></i></a>
        <a href="#"><i class="bx bx1-instagram"></i></a>
        <a href="#"><i class="bx bx1-linkedin"></i></a>
    </div>
</div>






<!-- JQuery Link -->
<script 
 src="https://code.jquery.com/jquery-3.6.4.js"
			  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
			  crossorigin="anonymous"></script>

   <!--Link To JS-->
   <script src="js/script.js"></script>
</body>
</html>
