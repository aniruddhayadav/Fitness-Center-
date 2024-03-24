<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/flaticon.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/barfiller.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/slicknav.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>" type="text/css">
<style>


.ct-socials {
    position: fixed;
    top: 60%;
    left: 0;
    list-style: none;
    padding-left: 0;
    z-index: 10;
    margin: 0;
    -webkit-transition: left 0.25s ease-in-out;
    transition: left 0.25s ease-in-out;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.ct-socials li {
    padding: 0px 0;
}
.ct-socials li a {
   
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    width: 44px;
    height: 54px;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
    float: right;
    padding-left: 5px;
}
.ct-socials li a:hover {
width: 54px;
padding-left: 0;
text-decoration: none;

}

  

</style>
</head>


<body>
<ul class="ct-socials">
        <li style="background-color:rgba(0, 26, 255, 0.863);font-size:25px;">
           <a href="https://www.facebook.com/nilu.girigosavi" target="_blank"><i class="fa fa-facebook"></i></a>
        </li>
        <li style="background-color:#1fa831;font-size:25px;">
           <a href="https://api.whatsapp.com/send?phone=+917304225952" target="_blank"><i class="fa fa-whatsapp"></i></a>
        </li>
        <li style="background-color:red;font-size:25px;">
           <a href="tel:7304225952" target="_blank"><i class="fa fa-phone"></i></a>
        </li>
     </ul>


    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="<?php echo base_url('/Home')?>">Home</a></li>
                <li><a href="<?php echo base_url('/Aboutus')?>">About Us</a></li>
                <li><a href="<?php echo base_url('/Classes')?>">Classes</a></li>
                <li><a href="<?php echo base_url('/Services')?>">Services</a></li>
                <li><a href="<?php echo base_url('/Team')?>">Our Team</a></li>
                <li><a href="<?php echo base_url('/Contact')?>">Contact</a></li>
		<li><a href="<?php echo base_url('/Login')?>">Login</a></li>		
				
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="<?php echo base_url('/Home')?>">
                            <img src="661.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="nav-menu">
                        <ul>
                            				<br><br>
							<li><a href="<?php echo base_url('/Home')?>">Home</a></li>
							<li><a href="<?php echo base_url('/Aboutus')?>">About Us</a></li>
							<li><a href="<?php echo base_url('/Classes')?>">Classes</a></li>
							<li><a href="<?php echo base_url('/Services')?>">Services</a></li>
							<li><a href="<?php echo base_url('/Team')?>">Our Team</a></li>
							<li><a href="<?php echo base_url('/Gallery')?>">Gallery</a></li>
							<li><a href="<?php echo base_url('/Registration')?>">Registration</a></li>
                           				<li><a href="<?php echo base_url('/Contact')?>">Contact</a></li>
							<li><a href="<?php echo base_url('/Login')?>">Login</a></li>
							
							</ul>
                    </nav>
                </div>
                <div class="col-lg-1">
                    <div class="top-option">
                        
                        <div class="to-social">
				<br><br>
                            <a href="https://www.facebook.com/nilu.girigosavi"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/watch?v=RLnOfYsYOMk"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://instagram.com/gurudattfitness__unchgaon?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->
 