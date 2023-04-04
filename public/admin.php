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
    <link rel="stylesheet" href="css/index.css">
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
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>
                    </div>
                    <button>Log-In</button>
                    <p>Don`t have a account <a href="#">Register</a></p>
                </form>
            </div>
        </div>
    </section>










<!-- script -->

<!--script ionicons-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>