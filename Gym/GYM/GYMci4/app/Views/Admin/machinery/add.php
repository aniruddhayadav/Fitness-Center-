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
                                <h4 class="card-title">Add Gym Machinery</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="<?php echo base_url('/Machinery/sae')?>" method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Machine/Asset Name</label>
                                                <input type="text" name="machinename" id="machinename" class="form-control" required>
                                            </div>
											 <div class="form-group col-md-2"></div>
											 <div class="form-group col-md-4">
                                                <label>Machine/Asset Serial No</label>
                                                <input type="text" name="machineno" id="machineno" class="form-control" required>
                                            </div>
										</div>
										<div class="form-row">
											 <div class="form-group col-md-4">
                                                <label>Brand/Make</label>
                                                <input type="text" name="brand" id="brand" class="form-control" required>
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Branch Name</label>
                                                <select class="form-control form-control-lg default-select" name="branchname" id="branchname" required>
													<option value=" Select Branch Name"> Select Branch Name</option>
													<?php foreach($branch as $row):
														echo'<option value="'.$row['branchname'].'"> '.$row['branchname'].'</option>';
                                                        endforeach;
														?>
												</select>
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Purchase Cost</label>
                                                <input type="text" name="purchasecost" id="purchasecost" class="form-control" required>
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Purchase Date</label>
                                                <input type="date" name="date" id="date" class="form-control" required>
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Machine Type</label>
                                                <select class="form-control form-control-lg default-select" name="machinetype" id="machinetype" required>
													<option value=" Select Machine Type"> Select Machine Type</option>
													<option value=" digital purchase">Dizital/Intanzible Purchase</option>
													<option value="physical purchase">Fixed Purchase</option>
													<option value="movable purchase">Movable Purchase</option>
												</select>
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Purchase Type</label>
                                                <select class="form-control form-control-lg default-select" name="purchasetype" id="purchasetype" required>
													<option value=" Select Purchase Type">Select Purchase Type</option>
													<option value="emi">EMI</option>
													<option value="prepaid">Prepaid</option>
												</select>
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Purchase No</label>
                                                <input type="text" name="purchaseno" id="purchaseno" class="form-control">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Have Insurance</label>
                                                 <select class="form-control form-control-lg default-select" name="insurance" id="insurance">
													<option value="Have Insurance">Have Insurance</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
                                            </div>
                                        </div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Insurance No</label>
                                                <input type="text" name="insuranceno" id="insuranceno" class="form-control">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Insurance Name</label>
                                                <input type="text" name="insurancename" id="insurancename" class="form-control">
                                            </div>
										</div>
										<div class="form-row">
											 <div class="form-group col-md-4">
                                                <label>Insurance Purchase Date</label>
                                                <input type="date" name="purchasedate" id="purchasedate" class="form-control">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Insurance Renew Date</label>
                                                <input type="date" name="renewdate" id="renewdate" class="form-control">
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Depreciation</label>
                                                <input type="text" name="depreciation" id="depreciation" class="form-control" required>
                                            </div>
										</div>
										<div class="form-row" id="add_sub_machine">
											<div class="form-group col-md-3">
												<label>Sub Machine Name</label>
												<input type="text" name="subname[]" id="subname" class="form-control">
											</div>
											<div class="form-group col-md-3">
												 <label>Quantity</label>
												<input type="text" name="quantity[]" id="quantity" class="form-control">
											 </div>
											 <div class="form-group col-md-3">
												 <label>Purchase Cost</label>
												<input type="text" name="cost[]" id="cost" class="form-control">
											 </div>
											 <div class="form-group col-md-1">
												<button type="button" class="btn btn-primary plusBtn"><i class="fa fa-plus"></i></button>
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
		</div>
		
<!--**********************************
            Content body end
        ***********************************-->


         