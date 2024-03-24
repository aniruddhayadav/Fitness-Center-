<?php

namespace App\Controllers;
use App\Models\MachineModel;
use App\Models\SubMachineModel;
use App\Models\GymBranchModel;
use CodeIgniter\Controller;

class Machinery extends BaseController
{
    public function index()
    {
		$GymBranchModel = new GymBranchModel();
		$data['branch']=$GymBranchModel->findAll();
		 
		echo view('Admin/header');
        echo view('Admin/machinery/add',$data);
		echo view('Admin/footer');
        
    }
	public function save()
    { 
	
	       //load helpers
		helper(['form', 'url']);
		
		//accept post data
      $MachineModel= new MachineModel();
	  $SubMachineModel= new SubMachineModel();
					
		//set validation rules
		
        $validationRule = $this->validate([
						'machinename' => 'required',
						'machineno' => 'required',
						'brand'  => 'required',
						'branchname' => 'required',
						'purchasecost' => 'required',
						'date' => 'required',
						'machinetype' => 'required',
						'purchasetype' =>'required',
						'depreciation' => 'required'
						 
        ]);
		if(!$validationRule)	
		{
			 return redirect()->to('Machinery/add');
		}
		else
		{
			//store post data
       
		 $machinename=$this->request->getVar('machinename');
		 $machineno=$this->request->getVar('machineno');
		 $brand=$this->request->getVar('brand');
		 $branchname=$this->request->getVar('branchname');
		 $purchasecost=$this->request->getVar('purchasecost');
		 $date=$this->request->getVar('date');
		 $machinetype=$this->request->getVar('machinetype');
		 $purchasetype=$this->request->getVar('purchasetype');
		 $purchaseno=$this->request->getVar('purchaseno');
		 $insurance=$this->request->getVar('insurance');
		 $insuranceno=$this->request->getVar('insuranceno');
		 $insurancename=$this->request->getVar('insurancename');
		 $purchasedate=$this->request->getVar('purchasedate');
		 $renewdate=$this->request->getVar('renewdate');
		 $depreciation=$this->request->getVar('depreciation');
		 $subname=$this->request->getVar('subname[]');
		 $quantity=$this->request->getVar('quantity');
		 $cost=$this->request->getVar('cost[]');
		 $data = [
            'machinename' => $machinename,
			'machineno' => $machineno,
			'brand' => $brand,
			'branchname' => $branchname,
			'purchasecost' => $purchasecost,
			'date' => $date,
			'machinetype' => $machinetype,
			'purchasetype' => $purchasetype,
			'purchaseno' => $purchaseno,
			'insurance' => $insurance,
			'insuranceno' => $insuranceno,
			'insurancename' => $insurancename,
			'purchasedate' => $purchasedate,
			'renewdate' => $renewdate,
			'depreciation' => $depreciation,
			  
        ];
		
		 
		if($MachineModel->insert($data))
		{
			
				$lastId=$MachineModel->getInsertID();
				 
				//proceed to data insert\
			 
				 for($j=0;$j<count($subname);$j++)
				 {
					 $update_data=[
									'subid' =>$lastId,
									'subname' => $subname[$j],
									'quantity' =>$quantity[$j],
									'cost' =>$cost[$j],
								  ];
							  
					//proceed to insert data in db			  
					$SubMachineModel->insert($update_data);
				 }
			 
				echo '<script type="text/javascript">'; 
                echo 'alert("Gym Machine add Saved Successfully!");'; 
                echo 'window.location.href = "'.base_url('/Machinery/listRecord').'"';
                echo '</script>';
		}
		}
}
 public function listRecord()
    {
        $MachineModel = new MachineModel();
        $data['MachineData'] = $MachineModel->orderBy('id', 'DESC')->findAll();
        
		echo view('Admin/header');
		echo view('Admin/machinery/listRecord',$data);
		echo view('Admin/footer');
    }
	  public function edit($id = null)
	 {
		 $MachineModel = new MachineModel();
        $data['editData'] = $MachineModel->where('id', $id)->first();
		
		$GymBranchModel = new GymBranchModel();
		$data['branchData'] = $GymBranchModel->findAll();
		//print_r ($data);
		//exit();
       echo view('Admin/header');
	   echo view('Admin/machinery/edit',$data);
	   echo view('Admin/footer');
	 }
	  public function update(){
        $MachineModel = new MachineModel();
		    
		 $id=    $this->request->getVar('id');			
		 $machinename=$this->request->getVar('machinename');
		 $machineno=$this->request->getVar('machineno');
		 $brand=$this->request->getVar('brand');
		 $branchname=$this->request->getVar('branchname');
		 $purchasecost=$this->request->getVar('purchasecost');
		 $date=$this->request->getVar('date');
		 $machinetype=$this->request->getVar('machinetype');
		 $purchasetype=$this->request->getVar('purchasetype');
		 $purchaseno=$this->request->getVar('purchaseno');
		 $insurance=$this->request->getVar('insurance');
		 $insuranceno=$this->request->getVar('insuranceno');
		 $insurancename=$this->request->getVar('insurancename');
		 $purchasedate=$this->request->getVar('purchasedate');
		 $renewdate=$this->request->getVar('renewdate');
		 $depreciation=$this->request->getVar('depreciation');
		 $subname=$this->request->getVar('subname[]');
		 $quantity=$this->request->getVar('quantity');
		 $cost=$this->request->getVar('cost[]');
		
			$update_data=[
                          'id'     => $id,
						  'machinename' => $machinename,
						  'machineno' => $machineno,
						  'brand' => $brand,
						  'branchname' => $branchname,
						  'purchasecost' => $purchasecost,
						  'date' => $date,
						  'machinetype' => $machinetype,
						  'purchasetype' => $purchasetype,
						  'purchaseno' => $purchaseno,
						  'insurance' => $insurance,
						  'insuranceno' => $insuranceno,
						  'insurancename' => $insurancename,
						  'purchasedate' => $purchasedate,
						  'renewdate' => $renewdate,
						  'depreciation' => $depreciation,
			 ];
			$MachineModel->update($id, $update_data);
			
				echo '<script type="text/javascript">'; 
                echo 'alert("Gym Machine Update Successfully!");'; 
                echo 'window.location.href = "'.base_url('/Machinery/listRecord').'"';
                echo '</script>';
	  }
	  
	
		
	 public function delete($id = null)
	 {
        $MachineModel = new MachineModel();
        $data['MachineData'] = $MachineModel->where('id', $id)->delete($id);
		
                echo '<script type="text/javascript">'; 
                echo 'alert("Gym Machine Delete Successfully!");'; 
                echo 'window.location.href = "'.base_url('/Machinery/listRecord').'"';
                echo '</script>';
    } 
	 
	 
}
?>
