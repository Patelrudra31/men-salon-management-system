<?php
include('dbconnection.php');
session_start();
error_reporting(0);

?>
<div class="footer">
    <div class="container">
        <div class="footer-block">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Salon Address</h2>
                        <ul class="listnone contact">
                            <li><i class="fa fa-map-marker"></i> Ganpat university</li>
                            <li><i class="fa fa-phone"></i> +91 1234567890</li>
                            <li><i class="fa fa-envelope-o"></i> Ganpatuniversity@gnu.ac.in</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget footer-social">
                        <h2 class="widget-title">Social Feed</h2>
                        <ul class="listnone">
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i> Google</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i> Linked In</a></li>
                            <li>
                                <a href="#"> <i class="fa fa-youtube"></i>Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="footer-widget widget-newsletter">
                        <!-- newsletter block -->
                        <h2 class="widget-title">Newsletters</h2>
                        <p>Enter your email address to receive new patient information and other useful information
                            right to your inbox.</p>
                        <form method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email address"
                                    name="email">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" value="submit"
                                        name="sub">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tiny-footer">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright-content">
                            <p>© Men Salon Management System 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>