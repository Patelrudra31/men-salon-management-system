<?php
session_start();
error_reporting(0);
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Men Salon Management System || Contact Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include_once('header.php'); ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Contact us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-contact">
                        <!-- widget search -->
                        <h3 class="widget-title">Contact Info</h3>
                        <address>
                            <strong>Address.</strong>
                            <p>Ganpat University</p>
                            <abbr title="Phone">Phone:</abbr>+91 1234567890
                        </address>
                        <address>
                            <strong>Email</strong>
                            <p>Ganpatuniversity@gnu.ac.in</p>
                        </address>
                        <address>
                            <strong>Timing</strong>
                            <p>10:30 am to 8:30 pm</p>
                        </address>
                    </div>
                    <!-- /.widget search -->
                    <div class="widget widget-social">
                        <div class="social-circle">
                            <a href="#" class="#"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="#"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="well-block">

                                <h1>ABOUT US</h1>
                                <h5 class="small-title ">best experience ever</h5>
                                <p>Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced
                                    technology equipments and provides best quality services. Our staff is well trained
                                    and experienced, offering advanced services in Skin, Hair and Body Shaping that will
                                    provide you with a luxurious experience that leave you feeling relaxed and stress
                                    free. The specialities in the parlour are, apart from regular bleachings and
                                    Facials, many types of hairstyles, Bridal and cine make-up and different types of
                                    Facials & fashion hair colourings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include_once('footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>