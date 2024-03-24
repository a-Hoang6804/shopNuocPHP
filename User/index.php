<?php
session_start();
include_once "./Model/class.phpmailer.php";
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gentlemen's Barber Shop - HTML CSS Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-barber-shop.css" rel="stylesheet">
<!--SHOP JAY-->
    <!-- <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css"> -->

    <!-- Load fonts style after rendering the layout styles -->
    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> -->
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.min.css"> -->
    <!--

TemplateMo 585 Barber Shop

https://templatemo.com/tm-585-barber-shop

-->
</head>

<body>
    <?php
    include_once "View/headder.php"
        ?>
    <!-- header -->
    <!-- hiên thi noi dung -->
    <div class="container">
        <div class="row">
            <!-- hien thi noi dung đây -->
        </div>
        <?php
        $ctrl = "home";
        if (isset($_GET['action'])) {
            $ctrl = $_GET['action']; //san pham
        }
        include_once "./Controller/$ctrl.php";
        ?>
    </div>
    <!-- hiên thị footer -->
</body>

</html>