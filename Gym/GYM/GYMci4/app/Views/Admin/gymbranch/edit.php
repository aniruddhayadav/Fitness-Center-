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
                                <h4 class="card-title">Edit Gym Branch</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="<?php echo base_url('GymBranch/update/')?>" method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
											<div class="form-group col-md-4">
                                                <label>ID</label>
                                                <input type="text" readonly name="id" id="id" class="form-control" value="<?php echo $editData['id'];?>" >
                                            </div>
											<div class="form-group col-md-2"></div>
                                            <div class="form-group col-md-4">
                                                <label>Branch Name</label>
                                                <input type="text" name="branchname" id="branchname" class="form-control" value="<?php echo $editData['branchname']?>">
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Branch Head</label>
                                                <select class="form-control" data-placeholder="Enter Branch Head" tabindex="1" id=" ownername"  name="ownername" >
                                                       <option value="">Select Branch Head</option>
														<?php foreach($masterData as $row):
														if ($row['ownername'] == $editData['ownername'])
															{
																echo'<option value="'.$row['ownername'].'" selected="selected"> '.$row['ownername'].'</option>';
																
																}
														else
														{
															echo'<option value="'.$row['ownername'].'"> '.$row['ownername'].'</option>';
														}
														
                                                        endforeach;
														?>
                                                     </select>
                                            </div> 
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Address</label>
                                                <input type="text" name="branchaddress" id="branchaddress" class="form-control" value="<?php echo $editData['branchaddress']?>">
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $editData['email']?>">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Landline No</label>
                                                <input type="text" name="landline" id="landline" class="form-control" value="<?php echo $editData['landline']?>">
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Mobile No</label>
                                                <input type="text" name="phoneno" id="phoneno" class="form-control" value="<?php echo $editData['phoneno']?>">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>City</label>
                                                <input type="text" name="city" id="city" class="form-control" value="<?php echo $editData['city']?>">
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Pincode</label>
                                                <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $editData['pincode']?>">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>State</label>
                                                <input type="text" name="state" id="state" class="form-control" value="<?php echo $editData['state']?>">
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Country</label>
                                                <input type="text" name="country" id="country" class="form-control" value="<?php echo $editData['country']?>">
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


        