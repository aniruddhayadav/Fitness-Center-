 
  
  <div class="content-body">
              <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"  style="color:white !important; margin-top:40px; font-weight:1000;">Gym Customer List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/GymCustomer')?>" aria-expanded="false">
                             
							 <button class="btn btn-primary sw-btn-next" type="button" style="margin-right:50px; background:#dec53c; border-color:#dec53c;">Add Gym Customer</button>
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
                            <div class="card-header">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-responsive-sm ">
                                        <thead>
                                            <tr>
											
                                                <th>Action</th>
												<th>ID</th>
                                                <th>Customer Name</th>
												<th>Profile Image</th>
                                                <th>Gender</th>
                                                <th>Date</th>
                                                <th>Phone No</th>
												<th>Aadhar No</th>
                                                <th>Email</th>
                                                <th>Address</th>
												<th>Occupation</th>
												<th>City</th>
												<th>Branch Name</th>
												<th>Instructor Name</th>
												<th>Program Time</th>
												<th>Join Date </th>
												<th>Place</th>
												<th>Member</th>
												<th>Program</th>
                                                <th>Package</th>
                                                <th>Reference</th>
												  
                                            </tr>
                                        </thead>
										 <tbody>
										 <?php foreach($CustomerData as $row): 
										 		echo "<tr>";
													echo '<td>
															<a href="'.base_url().'//GymCustomer/edit/'.$row["id"].'" class="btn btn-primary" data-toggle="tooltip" title="Edit GymCustomer" style="padding:3px;background:#dec53c;"><i class="fa fa-pencil" aria-hidden="true" style="color:black;"></i></a>
															<a href="'.base_url().'//GymCustomer/delete/'.$row["id"].'" class="btn btn-primary" title="Delete GymCustomer" data-toggle="tooltip" style="padding:3px;background:#dec53c;"><i class="fa fa-trash" aria-hidden="true" style="color:black;"></i></a>
															<a href="'.base_url().'/GymCustomer/print/'.$row["id"].'" class="btn btn-primary" title="Print GymCustomer" data-toggle="tooltip" style="padding:3px;background:#dec53c;"><i class="fa fa-print" aria-hidden="true"style="color:black;"></i></a>
													</td>';
                                              
													echo  "<td>".$row['id']."</td>"; 		
													echo  "<td>".$row['customername']."</td>";
													echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymcustomer/".$row['id']."/".$row['customerimage']."'></td>";
													echo  "<td>".$row['date']."</td>";
													echo  "<td>".$row['gender']."</td>";
													echo  "<td>".$row['phoneno']."</td>";
													echo  "<td>".$row['aadharno']."</td>";
													echo  "<td>".$row['email']."</td>";
													echo  "<td>".$row['address']."</td>";
													echo  "<td>".$row['occupation']."</td>";
													echo  "<td>".$row['city']."</td>";
													echo  "<td>".$row['branchname']."</td>";
													echo  "<td>".$row['instructorname']."</td>";
													echo  "<td>".$row['programtime']."</td>";
													echo  "<td>".$row['joindate']."</td>";
													echo  "<td>".$row['place']."</td>";
													echo  "<td>".$row['member']."</td>";
													echo  "<td>".$row['programname']."</td>";
													echo  "<td>".$row['package']."</td>";
													echo  "<td>".$row['reference']."</td>";
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
		
		  