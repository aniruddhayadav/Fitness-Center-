<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 07:19:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=" Home,Gurudatta Fitness Center,Gurudatta Fitness Center in kolhapur,gym,gyms in kolhapur,gyms near me,fitness center,fitness center in kolhapur ">
	<meta name="author" content=" Wolfox Services Pvt.Ltd,GURUDATTA FITNESS CENTER">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GURUDATTA FITNESS CENTER</title>
	<!-- Datatable -->
    <link href="<?php echo base_url('vendor/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('661.png')?>">
	<link rel="stylesheet" href="<?php echo base_url('vendor/chartist/css/chartist.min.css')?>">
    <link href="<?php echo base_url('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('vendor/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	 </head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?php echo base_url('/Home')?>" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url('661.png')?>" alt="">
                 
                
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		 
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                             
                        </div>
                        <ul class="navbar-nav header-right">
							 
							 <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="<?php echo base_url('7.jpg')?>" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong>Nilesh Girigosavi</strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo base_url('/Logout')?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
							
	   <div class="deznav">
	   	<!--<div>
		   <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="<?php echo base_url('\00.jpg')?>" style="height:100px;width:100px;" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong></strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
		</div>-->
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
				<li class="nav-small-cap"> <span class="hide-menu" style="font-size:17px;"><i class="mdi mdi-dots-horizontal"></i>&nbsp Gym Dashboard</span></li>
                    <li><a class="" aria-expanded="false">
					<i class="fa fa-tachometer" aria-hidden="true"></i>
							<!--<i class="fa fa-book" aria-hidden="true"></i>-->
							<span class="nav-text">Dashboard</span>
						</a>
                         
                    </li>
					<li class="nav-small-cap"> <span class="hide-menu" style="font-size:17px;"><i class="mdi mdi-dots-horizontal"></i>&nbsp Gym Masters</span></li>
					<!--<li><i class="mdi mdi-dots-horizontal"></i>EMPLOYEE DETAILS</li>-->
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="fa fa-cog"></i>
							<span class="nav-text">Gym Setting</span>
						</a>
						 <ul aria-expanded="false">
							<li><a href="<?php echo base_url('/GymMaster')?>"><i class="fa fa-plus-circle" aria-hidden="true"></i>Gym Setting Add</a></li>
							<li><a href="<?php echo base_url('/GymMaster/listRecord')?>"><i class="fa fa-list" aria-hidden="true"></i>Gym Setting List</a></li>
							 
						</ul>
                  
                    </li>
                    <li><a class="has-arrow ai-icon"  aria-expanded="false">
							<i class="fa fa-map-marker"></i>
							<span class="nav-text">Gym Location</span>
						</a>
						 <ul aria-expanded="false">
							<li><a href="<?php echo base_url('/GymBranch')?>"><i class="fa fa-plus-circle" aria-hidden="true"></i>Gym Location Add</a></li>
							<li><a href="<?php echo base_url('GymBranch/listRecord')?>"><i class="fa fa-list" aria-hidden="true"></i>Gym Location List</a></li>
						 
						</ul>
                         
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i>
							<span class="nav-text" style="color:black;">Gym Staff</span>
						</a>
						 <ul aria-expanded="false">
							<li><a href="<?php echo base_url('/GymEmployee')?>" style="color:black;"><i class="fa fa-plus-circle" aria-hidden="true"></i>Gym Staff Add</a></li>
							<li><a href="<?php echo base_url('/GymEmployee/listRecord')?>" style="color:black;"><i class="fa fa-list" aria-hidden="true"></i>Gym Staff List</a></li>
						 
						</ul>
 
                    </li>
					<li class="nav-small-cap"> <span class="hide-menu" style="font-size:17px;"><i class="mdi mdi-dots-horizontal"></i>&nbsp Assets Masters</span></li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="fa fa-cogs" aria-hidden="true"></i>
							<span class="nav-text">Assets</span>
						</a>
						 <ul aria-expanded="false">
							<li><a href="<?php echo base_url('/Machinery')?>"><i class="fa fa-plus-circle" aria-hidden="true"></i>Assets Add</a></li>
							<li><a href="<?php echo base_url('/Machinery/listRecord')?>"><i class="fa fa-list" aria-hidden="true"></i>Assets List</a></li>
					 
						</ul>
                         
                    </li>
					<li class="nav-small-cap"> <span class="hide-menu" style="font-size:17px;"><i class="mdi mdi-dots-horizontal"></i>&nbsp Customer Masters</span></li>
                    <li><a href="widget-basic.html" class="has-arrow ai-icon" aria-expanded="false">
							<i class="fa fa-users" aria-hidden="true"></i>
							<span class="nav-text">Customer</span>
						</a>
						 <ul aria-expanded="false">
							<li><a href="<?php echo base_url('/GymCustomer')?>"><i class="fa fa-plus-circle" aria-hidden="true"></i>Customer Add</a></li>
							<li><a href="<?php echo base_url('/GymCustomer/listRecord')?>"><i class="fa fa-list" aria-hidden="true"></i>Customer List</a></li>
							 
						</ul>
					</li>
					
			
				<div class="copyright">
					<p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>