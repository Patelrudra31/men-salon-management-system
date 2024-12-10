<?php

session_start();
error_reporting(0);

include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Men Salon Management System || Home Page</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php include_once('header.php'); ?>
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="hero-title">Men's salon Management System</h1>
                    <p class="hero-text"><strong>Your Types. Your Style. Your Color.</strong> </p>
                    <a href="appointment.php" class="btn btn-default">Make an Appointment</a>
                </div>
            </div>
        </div>
    </div>

    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about-img.jpg" alt=""
                        class="img-responsive"></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">

                        <h1>About Us</h1>
                        <h5 class="small-title ">best experience ever</h5>
                        <p>Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced
                            technology equipments and provides best quality services. Our staff is well trained and
                            experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you
                            with a luxurious experience that leave you feeling relaxed and stress free. The specialities
                            in the parlour are, apart from regular bleachings and Facials, many types of hairstyles,
                            Bridal and cine make-up and different types of Facials & fashion hair colourings.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('footer.php'); ?>
    <!-- /.footer-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <!-- sticky header -->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>