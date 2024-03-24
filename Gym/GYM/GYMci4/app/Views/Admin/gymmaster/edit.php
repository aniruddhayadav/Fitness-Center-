 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                 
                <!-- row -->
                <div class="row">

					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Gym Master</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                     <form action="<?php echo base_url('/GymMaster/Update')?>" method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
											 <div class="form-group col-md-4">
                                                <label>ID</label>
                                                <input type="text" readonly name="id" id="id" class="form-control" value="<?php echo $editData['id'];?>" >
                                            </div>
											<div class="form-group col-md-2"></div>
										    <div class="form-group col-md-4">
                                                <label> Gym Name</label>
                                                <input type="text" name="gymname" id="gymname" class="form-control" value="<?php echo $editData['gymname'];?>" >
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Owner Name</label>
                                                <input type="text" name="ownername" id="ownername" class="form-control" value="<?php echo $editData['ownername'];?>" >
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Landline No</label>
                                                <input type="text" name="landline" id="landline" class="form-control" value="<?php echo $editData['landline'];?>" >
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Mobile No</label>
                                                <input type="text" name="phoneno" id="phoneno" class="form-control" value="<?php echo $editData['phoneno'];?>" >
                                            </div>
											<div class="form-group col-md-2"></div>
                                            <div class="form-group col-md-4">
                                                <label>Email One</label>
                                                <input type="email" name="emailone" id="emailone" class="form-control" value="<?php echo $editData['emailone'];?>" >
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Email Two</label>
                                                <input type="email" name="emailtwo" id="emailtwo" class="form-control" value="<?php echo $editData['emailtwo'];?>" >
                                            </div>
										</div>
										<div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Billing Address</label><hr>
												<label>Address</label>
                                                <input type="text" name="billingaddress" id="billingaddress" class="form-control" value="<?php echo $editData['billingaddress'];?>" >
												<label>City</label>
                                                <input type="text" name="billingcity" id="billingcity" class="form-control" value="<?php echo $editData['billingcity'];?>" >
												<label>Pincode</label>
                                                <input type="text" name="billingpincode" id="billingpincode" class="form-control" value="<?php echo $editData['billingpincode'];?>" >
												<label>State</label>
                                                <input type="text" name="billingstate" id="billingstate" class="form-control" value="<?php echo $editData['billingstate'];?>" >
												<label>Country</label>
                                                <input type="text" name="billingcountry" id="billingcountry" class="form-control" value="<?php echo $editData['billingcountry'];?>" ><br>
												<div class="form-group col-md-8">
												<input type="checkbox" class="form-check-input" id="check1">
															<label class="form-check-label" for="check1">Same as Billing Address</label></div>
												<!--<button type="submit" class="btn btn-primary">Same as Billing Address</button>-->
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Shipping Address</label><hr style="color:black;">
                                                <label>Address</label>
												<input type="text" name="shippingaddress" id="shippingaddress" class="form-control" value="<?php echo $editData['shippingaddress'];?>" >
												<label>City</label>
                                                <input type="text" name="shippingcity" id="shippingcity" class="form-control" value="<?php echo $editData['shippingcity'];?>" >
												<label>Pincode</label>
                                                <input type="text" name="shippingpincode" id="shippingpincode" class="form-control" value="<?php echo $editData['shippingpincode'];?>" >
												<label>State</label>
                                                <input type="text" name="shippingstate" id="shippingstate" class="form-control" value="<?php echo $editData['shippingstate'];?>" >
												<label>Country</label>
                                                <input type="text" name="shippingcountry" id="shippingcountry" class="form-control" value="<?php echo $editData['shippingcountry'];?>" >
											</div>
										</div><hr>
										<div class="form-row"> 
											<div class="form-group col-md-4">
                                                <label>GST No</label>
                                                <input type="text" name="gstno" id="gstno" class="form-control" value="<?php echo $editData['gstno'];?>" >
											</div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
												<label>GST File</label>
												<input type="file" class="form-control" id="gstimage" name="gstimage" placeholder=" Upload Image Here" style="width:70%;"  >
												<a href="<?php echo base_url('images/upload/gymsetting/').'/'.$editData['id'].'/'.$editData['gstimage']?>" style="color:#d1b43c;" target="_blank">click here to view image</a>
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Registration No</label>
                                                <input type="text" name="regno" id="regno" class="form-control" value="<?php echo $editData['regno']?>">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
											<label>Registration File</label>
                                               <input type="file" class="form-control" id="regimage" name="regimage" placeholder=" Upload Image Here" style="width:70%;" > 
											   <a href="<?php echo base_url('images/upload/gymsetting/').'/'.$editData['id'].'/'.$editData['regimage']?>" style="color:#d1b43c;" target="_blank">click here to view image</a>
                                            </div>
                                        </div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>PAN No</label>
                                                <input type="text" name="panno" id="panno" class="form-control" value="<?php echo $editData['panno']?>">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
											<label>PAN No File</label>
                                               <input type="file" class="form-control" id="panimage" name="panimage" placeholder=" Upload Image Here" style="width:70%;" > 
											   <a href="<?php echo base_url('images/upload/gymsetting/').'/'.$editData['id'].'/'.$editData['panimage']?>" style="color:#d1b43c;" target="_blank">click here to view image</a>
                                            </div>
                                        </div>
										<div class="form-row">
											<div class="form-group col-md-4">
												<label>Awards</label>
                                                <input type="text" name="award" id="award" class="form-control" value="<?php echo $editData['award']?>">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
												<label></label>
                                               <input type="file" class="form-control" id="awardimage" name="awardimage" placeholder=" Upload Image Here" style="width:70%;" > 
											   <a href="<?php echo base_url('images/upload/gymsetting/').'/'.$editData['id'].'/'.$editData['awardimage']?>" style="color:#d1b43c;" target="_blank">click here to view image</a>
                                            </div>
                                        </div>
								   
                                        <button type="submit" class="btn btn-primary">Submit</button>
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


        