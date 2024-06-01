<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temple Books</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="css/footer.css" type="text/css">
</head>

<body>
<!-- header end -->
<header class="header">
        <!-- logo -->
        <div class="logo">
            <a href="index.php">
                <figure>
                    <img src="images/logo.svg" alt="Logo" class="logo-img">
                    <figcaption class="logo-caption"></figcaption>
                </figure>
            </a>
        </div>
        <!-- logo end -->

        <!-- search -->
        <div class="search-container">
            <div class="search-input">
                <label for="search"></label>
                <input type="search" name="search" id="search" placeholder="جستجو...">
            </div>
            <div class="search-icon">
                <img src="images/icons8-search-150.svg" alt="" class="search-image">
            </div>
        </div>
        <!-- search end -->

        <!-- profile -->
        <?php
                if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
            ?>
        <div class="profile">
        <a href="login.php">

                <figure>
                    <img src="images/user.svg" alt="Logo" class="social-icon" id="iconU">
                    <figcaption class="logo-caption"></figcaption>
                </figure>
            </a>
        <div><a href="logout.php">خروج از حساب کاربری <?php echo(" ({$_SESSION["email"]}) ") ?></a><div>
        </div>                
        <?php 
                }else{
        ?>
        <div class="profile">
        <a href="register.php">

                <figure>
                    <img src="images/user.svg" alt="Logo" class="social-icon" id="iconU">
                    <figcaption class="logo-caption"></figcaption>
                </figure>
            </a>
        <div>ثبت نام یا ورود به حساب کاربری</div>
        </div>
        <?php 
                }
        ?>
        <!-- profile end -->

        <!-- menu -->
        <div class="menu">
            <a href="http://">
                <img src="Images/icons8-menu.svg" alt="" class="social-icon" id="menu">
            </a>
        </div>
        <!-- menu end -->
        
</header>
<!-- header end -->