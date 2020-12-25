<?php 
include "functions.php";
$conn = dbConnection();
$local_table = "soc_nav_links";

$links = select_all($local_table, $conn);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap News Template - Free HTML Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>giooorgi7@mail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+995 577 311009</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="">ჩვენს შესახებ</a>
                            <a href="">კონფიდენციალურობა</a>
                            <a href="">პირობები</a>
                            <a href="">კონტაქტი</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="img/ads-1.jpg" alt="Ads">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Zebna">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">მთავარი</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ჩვენს შესახებ</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">ადმინისტრაცია</a>
                                    <a href="#" class="dropdown-item">ოფისები</a>
                                    <a href="" class="dropdown-item">სტრუქტურა</a>
                                </div>
                                
                            </div>
                            <div class="nav-item dropdown">
                                <a href="products.php" class="nav-link dropdown-toggle" data-toggle="dropdown">პროდუქცია</a>
                                <div class="dropdown-menu">
                                    <a href="products.php" class="dropdown-item">პროდუქციის ნახვა/წაშლა</a>
                                    <a href="product_add.php" class="dropdown-item">პროდუქტის დამატება</a>
                                </div>
                            </div>
                                
                            <a href="post_add.php" class="nav-item nav-link">გამოაქვეყნე პოსტი</a>
                            <a href="contact.php" class="nav-item nav-link">კონტაქტი</a>
                        </div>
                        <div class="social ml-auto">
                            <?php 
                                if(isset($links)){
                                    foreach($links as $link){
                                        ?>
                                        <a href="<?php echo $link["link"]; ?>" target="_blank"><i class="fab <?php echo $link["icon_name"];?>"></i></a>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->