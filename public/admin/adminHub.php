<?php 
require_once  "../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHub</title>
<!--css link-->
<link rel="stylesheet" href="css/admin.css">
    <!--boxicon css-->
  
</head>
<body>


<!--SIDEBAR-->
    <section id="sidebar">

        <a href="#" class="brand">
             <span class="icon"></span>
             <box-icon class="bx" type='solid' name='smile'></box-icon>
             <span class="text">AdminHub</span>
        </a>
        <ul class="side menu top">
            <li class="active">
                <a href="#">
                     <box-icon class="bx-menu" type='solid' name='dashboard'></box-icon>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                <box-icon class="bx" name='store'></box-icon>
                    <span class="text">My Store</span>
                </a>
            </li>
            <li>
                <a href="#">
                <box-icon class="bx" type='solid' name='doughnut-chart'></box-icon>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                <box-icon class="bx" name='message-rounded'></box-icon>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                <box-icon class="bx" name='group' type='solid' ></box-icon>
                    <span class="text">Team</span>
                </a>
            </li>
            <li>
                <a href="#">
                <box-icon class="bx" type='solid' name='cog'></box-icon>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class=""logout>
                <box-icon class="bx" type='solid' name='log-out-circle'></box-icon>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
<!--SIDEBAR-->


<!-- CONTENT-->
<section id="content">
    <!--NAVBAR-->
    <nav>
    <box-icon name='menu'></box-icon>
    <a href="#" class="nav-link">Categories</a>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><box-icon name='search' ></box-icon></button>
        </div>
    </form>
    <a href="#" class="notification">
       <box-icon type='solid' name='bell'></box-icon>
       <span class="num">8</span>
    </a>
    <a href="#" class="profile">
        <img src="" alt="">
    </a>
    </nav>
    <!--NAVBAR-->
</section>
<!--CONTENT-->

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script src="js/admin.js"></script>
</body>
</html>