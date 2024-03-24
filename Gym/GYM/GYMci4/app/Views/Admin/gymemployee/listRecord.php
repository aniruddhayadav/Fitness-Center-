 
  <div class="content-body">
               <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"  style="color:white !important; margin-top:40px; font-weight:1000;">Gym Employee List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/GymEmployee/update/')?>" aria-expanded="false">
                             
							<!-- <button type="button" class="btn waves-effect waves-light btn-info" style="color:white; margin-top:30px;">Add GymEmployee</button>-->
                            <button class="btn btn-primary sw-btn-next" type="button" style="margin-right:50px; background:#dec53c; border-color:#dec53c;">Add GymEmployee</button>
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
                                                <th>Employee Image</th>
                                                <th>Employee Name</th>
                                                <th>Date</th>
                                                <th>Gender</th>
												<th>Phone No</th>
                                                <th>Email</th>
												<th> Place</th>
												<th>Blood Group </th>
												<th>Height</th>
												<th>Weight</th>
												<th>Branch Name</th>
												<th>Time</th>
												<th>Designation </th>
												<th>Join Date</th>
												<th>Status</th>
												<th>Train For</th>
                                                <th>Aadhar No</th>
                                                <th>Aadhar Image</th>
 												<th>Pan No</th>
												<th>Pan Image</th>
												<th>Bank Name</th>
												<th>Account No</th>
												<th>Account Type</th>
												<th>IFSC Code</th>
											</tr>
                                        </thead>
										 <tbody>
										 <?php foreach($EmployeeData as $row): 
										 		echo "<tr>";
													echo '<td>
														<a href="'.base_url().'/GymEmployee/edit/'.$row["id"].'" class="btn btn-primary" data-toggle="tooltip" title="Edit GymEmployee" style="padding:3px; background:#dec53c;"><i class="fa fa-pencil" aria-hidden="true"  style="color:black;"></i></a>
														<a href="'.base_url().'/GymEmployee/delete/'.$row["id"].'" class="btn btn-primary" title="Delete GymEmployee" data-toggle="tooltip" style="padding:3px;background:#dec53c;"><i class="fa fa-trash" aria-hidden="true"  style="color:black;"></i></a>
													</td>';
                                              
													echo  "<td>".$row['id']."</td>"; 		
													echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymstaff/".$row['id']."/".$row['employeeimage']."'></td>";
													echo  "<td>".$row['employeename']."</td>";
													echo  "<td>".$row['date']."</td>";
													echo  "<td>".$row['gender']."</td>";											
													echo  "<td>".$row['phoneno']."</td>";
													echo  "<td>".$row['email']."</td>";
													echo  "<td>".$row['place']."</td>";
													echo  "<td>".$row['bloodgroup']."</td>";
													echo  "<td>".$row['height']."</td>";
													echo  "<td>".$row['weight']."</td>";
													echo  "<td>".$row['branchname']."</td>";
													echo  "<td>".$row['time']."</td>";
													echo  "<td>".$row['designation']."</td>";
													echo  "<td>".$row['joindate']."</td>";
													echo  "<td>".$row['status']."</td>";
													echo  "<td>".$row['trainfor']."</td>";
													echo  "<td>".$row['aadharno']."</td>";
													echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymstaff/".$row['id']."/".$row['aadharimage']."'></td>";
													echo  "<td>".$row['panno']."</td>";
													echo  "<td>"."<img style='width:100px; height:100px;' src='".base_url()."/images/upload/gymstaff/".$row['id']."/".$row['panimage']."'></td>";
													echo  "<td>".$row['branchname']."</td>";
													echo  "<td>".$row['accountno']."</td>";
													echo  "<td>".$row['accounttype']."</td>";
													echo  "<td>".$row['ifsc']."</td>";
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
		
		 