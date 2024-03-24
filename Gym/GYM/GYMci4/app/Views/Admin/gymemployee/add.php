<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gymove.dexignzone.com/xhtml/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 07:20:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Form step -->
    <link href="<?php echo base_url('vendor/jquery-smartwizard/dist/css/smart_wizard.min.css')?>" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="<?php echo base_url('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>

 
		 
		 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Employee</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#Personal_Details"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#Branch_Details">
											<span>2</span>
										</a></li>
										 
										<li><a class="nav-link" href="#Certificate">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#Bank_Details">
											<span>4</span>
										</a></li>
									</ul>
									<form action="<?php echo base_url('/GymEmployee/save')?>" method="POST" enctype="multipart/form-data">
									<div class="tab-content">
										<div id="Personal_Details" class="tab-pane" role="tabpanel">
											<div class="row">
											 	<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Employee Name</label>
														<input type="text" name="employeename" id="employeename" class="form-control" required>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Password</label>
														<input type="password" class="form-control" name="password" id="password"  required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Employee Role</label>
														<select class="form-control" name="role" id="role" required>
															<option value="">Select Role</option>
															<option value="admin">Admin</option>
															<option value="gym trainer">Gym Trainer</option>
															<option value="accountant">Accountant</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Enter DOB</label>
														<input type="date" class="form-control" name="date" id="date"   >
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Gender</label>
														<select class="form-control" name="gender" id="gender" required>
																<option value="">Select Gender</option>
																<option value="female">Female</option>
																<option value="male">Male</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
													<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Phone Number</label>
														<input type="text" name="phoneno" id="phoneno" class="form-control" required  >
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" required >
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Place</label>
														<input type="text" name="place" id="place" class="form-control"  >
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Blood Group</label>
														<input type="text" name="bloodgroup" id="bloodgroup" class="form-control"  >
													</div>                                                  
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">                                 
													<div class="form-group">                                
														<label class="text-label">Height</label>           
														<input type="text" class="form-control" name="height" id="height"   >
													</div>                                                  
												</div>                                              
											</div>                                                          
											<div class="row">                                       
											    <div class="col-lg-4 mb-2">                                 
													<div class="form-group">                                
														<label class="text-label">Weight</label>           
														<input type="text" name="weight" id="weight" class="form-control">
													</div>
												</div>
											</div>
										</div>
										
										<div id="Branch_Details" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Branch Name</label>
														<select class="form-control" name="branchname" id="branchname" required>
																<option value="select working time">Select Branch Name</option>
																<?php foreach($branch as $row):
														echo'<option value="'.$row['branchname'].'"> '.$row['branchname'].'</option>';
                                                        endforeach;
														?>
														</select>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Working Time</label>
														<select class="form-control" name="time" id="time" required>
																<option value="">Select Working Time</option>
																<option value="morning">Morning</option>
																<option value="evening">Evening</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Designation</label>
														<select class="form-control" name="designation" id="designation">
																<option value="">Select Designation</option>
																<option value="manager">Manager</option>
																<option value="trainer">Trainer</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
													<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Joining Date</label>
														<input type="date" name="joindate" id="joindate" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Current Status</label>
														<select class="form-control" name="status" id="status" required>
																<option value="">Select Current Status</option>
																<option value="working">Working</option>
																<option value="left">Left</option>
															</select>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Train For</label>
														<select class="form-control" name="trainfor" id="trainfor" required>
																<option value="">Select Train For</option>
																<option value="female">Female</option>
																<option value="male">Male</option>
																<option value="both">Both</option>
														</select>
													</div>
												</div>
											</div>
											<br>
										</div>
										 
										<div id="Certificate" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-4 mb-2">
													<label>Employee Photo</label>
													<input type="file" class="form-control" id="employeeimage" name="employeeimage" placeholder=" Upload Image Here" style="width:100%;" required >
                                               </div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label>Aadhar No</label>
														<input type="text" name="aadharno" id="aadharno" class="form-control" required>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<label>Aadhar No File</label>
													<input type="file"  class="form-control" id="aadharimage" name="aadharimage" placeholder=" Upload Image Here" style="width:100%;" required >
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label>PAN Card No</label>
														<input type="text" name="panno" id="panno" class="form-control" required>
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<label>PAN Card File</label>
													<input type="file" class="form-control" id="panimage" name="panimage" placeholder=" Upload Image Here" style="width:100%;" required >
												</div>
											</div>
										</div>
										
										 <div id="Bank_Details" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Bank Name</label>
														<input type="text" name="bankname" id="bankname" class="form-control" required >
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Account No</label>
														<input type="text" name="accountno" id="accountno" class="form-control"  required >
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">Account Type</label>
														<input type="text" name="accounttype" id="accounttype" class="form-control"  >
													</div>
												</div>
												<div class="col-lg-2 mb-2"></div>
												<div class="col-lg-4 mb-2">
													<div class="form-group">
														<label class="text-label">IFSC Code</label>
														<input type="text" name="ifsc" id="ifsc" class="form-control"  >
													</div>
												</div>
											</div>
									 
										 
									</div>
								</div>
								<button type="submit" class="btn btn-primary" style="background:#dec53c;">Submit</button>
							</form>
						</div>
					</div>
                 </div>
              </div>
           </div>
        </div>
    </div>

        <!--**********************************
            Content body end
        ***********************************-->


 

 </body>


<!-- Mirrored from gymove.dexignzone.com/xhtml/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 07:21:00 GMT -->
</html>