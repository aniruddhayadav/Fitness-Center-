 
  
  <div class="content-body">
               <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"  style="color:white !important; margin-top:40px; font-weight:1000;">Gym Setting List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/GymMaster')?>" aria-expanded="false">
                             
							 <button class="btn btn-primary sw-btn-next" type="button" style="margin-right:50px; background:#dec53c; border-color:#dec53c;">Add Gym Master</button>
                             </a>
					   </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                 
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
											
                                                <th>Action</th>
												<th>ID</th>
                                                <th>Gym Name</th>
                                                <th>Owner Name</th>
                                                <th>Landline</th>
                                                <th>Phone No</th>
                                                <th>Email One</th>
                                                <th>Email Two</th>
												<th>Billing Address</th>
												<th>Billing City </th>
												<th>Billing Pincode</th>
												<th>Billing State</th>
												<th>Billing Country</th>
												<th>Shipping Address</th>
												<th>Shipping City </th>
												<th>Shipping Pincode</th>
												<th>Shipping State</th>
												<th>Shipping Country</th>
                                                <th>Gst No</th>
                                                <th>Gst Image</th>
												<th>Registration No</th>
                                                <th>Registration Image</th>
												<th>Pan No</th>
												<th>Pan Image</th>
												<th>Awards</th>
												<th>Award Image</th>
                                            
                                            </tr>
                                        </thead>
										 <tbody>
										 <?php foreach($MasterData as $row): 
										 		echo "<tr>";
											 echo '<td>
											 <a href="'.base_url().'/GymMaster/edit/'.$row["id"].'" class="btn btn-primary" data-toggle="tooltip" title="Edit GymMaster" style="padding:3px;background:#dec53c;"><i class="fa fa-pencil" aria-hidden="true"  style="color:black;"></i></a>
											 <a href="'.base_url().'/GymMaster/delete/'.$row["id"].'" class="btn btn-primary" title="Delete GymMaster" data-toggle="tooltip" style="padding:3px;background:#dec53c;"><i class="fa fa-trash" aria-hidden="true"  style="color:black;"></i></a>
											 </td>';
                                              
											 echo  "<td>".$row['id']."</td>"; 		
											 echo  "<td>".$row['gymname']."</td>";											 
											 echo  "<td>".$row['ownername']."</td>";
											 echo  "<td>".$row['landline']."</td>";
											 echo  "<td>".$row['phoneno']."</td>";
											 echo  "<td>".$row['emailone']."</td>";
											 echo  "<td>".$row['emailtwo']."</td>";
											  echo  "<td>".$row['billingaddress']."</td>";
											 echo  "<td>".$row['billingcity']."</td>";
											 echo  "<td>".$row['billingpincode']."</td>";
											 echo  "<td>".$row['billingstate']."</td>";
											 echo  "<td>".$row['billingcountry']."</td>";
											  echo  "<td>".$row['shippingaddress']."</td>";
											 echo  "<td>".$row['shippingcity']."</td>";
											 echo  "<td>".$row['shippingpincode']."</td>";
											 echo  "<td>".$row['shippingstate']."</td>";
											 echo  "<td>".$row['shippingcountry']."</td>";
											 echo  "<td>".$row['gstno']."</td>";
											  echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymsetting/".$row['id']."/".$row['gstimage']."'></td>";
											 echo  "<td>".$row['regno']."</td>";
											  echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymsetting/".$row['id']."/".$row['regimage']."'></td>";
											 echo  "<td>".$row['panno']."</td>";
											  echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymsetting/".$row['id']."/".$row['panimage']."'></td>";
											 echo  "<td>".$row['award']."</td>";
											   echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymsetting/".$row['id']."/".$row['awardimage']."'></td>";
											 
											 
											echo "</tr>";
											
											  endforeach; ?>
											 
                                             
                                             
                                        </tbody>
                                    </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		  