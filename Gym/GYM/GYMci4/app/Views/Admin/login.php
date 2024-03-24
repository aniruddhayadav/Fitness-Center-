<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from gymove.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 07:20:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GURUDATTA FITNESS CENTER</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('661.png')?>">
    <link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100" style="background:url(<?php echo base_url('img/hero/hero-1.jpg')?>) ; background-size:cover;">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form" style="background-color:#dec53c;">
									<div class="text-center mb-3">
										<img src="<?php echo base_url('661.png')?>"  style="max-width:170px;" alt=""></a>
									</div>
                                     <h4 class="text-center mb-4 text-white" style="font-weight:900;">Gurudatta Fitness Center</h4>
                                    <form action="<?php echo base_url('/Login/save')?>" method="POST">
                                       	  <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
									
                                      
										  <div class="form-group">
                                              <label class="mb-1 text-white"><strong>Select Your Role</strong></label>
                                            	<select class="form-control" name="role" id="role">
													<option value="select role">Select Role</option>
													<option value="admin">Admin</option>
													<option value="gym trainer">Gym Trainer</option>
													<option value="accountant">Accountant</option>
												</select>
                                        </div>		 
										 
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url('vendor/global/global.min.js')?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
    <script src="<?php echo base_url('js/custom.min.js')?>"></script>
    <script src="<?php echo base_url('js/deznav-init.js')?>"></script>

</body>


<!-- Mirrored from gymove.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 07:20:19 GMT -->
</html>