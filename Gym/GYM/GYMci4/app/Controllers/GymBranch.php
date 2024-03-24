<?php

namespace App\Controllers;
use App\Models\GymBranchModel;
use App\Models\GymMasterModel;
use CodeIgniter\Controller;

class GymBranch extends BaseController
{
    public function index()
    {
		$GymMasterModel = new GymMasterModel();
		$data['master']=$GymMasterModel->findAll();
		 
		echo view('Admin/header');
        echo view('Admin/gymbranch/add',$data);
		echo view('Admin/footer');
	}
	public function save()
    { 
	
         //load helpers
		helper(['form', 'url']);
		
		//accept post data
        $GymBranchModel= new GymBranchModel();
					
		//set validation rules
		
        $validationRule = $this->validate([
						'branchname' => 'required',
						'ownername' => 'required',
						'email' => 'required',
						'phoneno'  => 'required',
						'city' => 'required',
						'pincode' =>'required',
						'state' =>'required'
        ]);
		if(!$validationRule)	
		{
			 return redirect()->to('GymBranch/index');
		}
		else
		{
			//store post data
			$branchname=$this->request->getVar('branchname');
			$ownername=$this->request->getVar('ownername');
			$branchaddress=$this->request->getVar('branchaddress');
			$email=$this->request->getVar('email');
			$landline=$this->request->getVar('landline');
			$phoneno=$this->request->getVar('phoneno');
			$city=$this->request->getVar('city');
			$pincode=$this->request->getVar('pincode');
			$state=$this->request->getVar('state');
			$country=$this->request->getVar('country');
		  
			$data = [
            'branchname' => $branchname,
			'ownername' => $ownername,
			'email' => $email,
			'landline' => $landline,
			'phoneno' => $phoneno,
			'branchaddress' => $branchaddress,
			'city' => $city,
			'pincode' => $pincode,
			'state' => $state,
			'country' => $country,
			];
		 
	
			$GymBranchModel->insert($data);
				echo '<script type="text/javascript">'; 
                echo 'alert("Gym Branch add Saved Successfully!");'; 
                echo 'window.location.href = "'.base_url('GymBranch/listRecord').'"';
                echo '</script>';
				
				
		}
}
	public function listRecord()
    {
        $GymBranchModel = new GymBranchModel();
        $data['BranchData'] = $GymBranchModel->orderBy('id', 'DESC')->findAll();
         
		echo view('Admin/header');
		echo view('Admin/gymbranch/listRecord',$data);
		echo view('Admin/footer');
    }
	 public function edit($id = null)
	 {
        $GymBranchModel = new GymBranchModel();
        $data['editData'] = $GymBranchModel->where('id', $id)->first();
		
		$GymMasterModel = new GymMasterModel();
		$data['masterData']=$GymMasterModel->findAll();
	 	   
        echo view('Admin/header');
		echo view('Admin/GymBranch/edit',$data);
		echo view('Admin/footer');
	 }
	 
	 public function update()
	 {
			$GymBranchModel = new GymBranchModel();
		    
			$id=    $this->request->getVar('id');			
			$branchname=$this->request->getVar('branchname');
			$ownername=$this->request->getVar('ownername');
			$branchaddress=$this->request->getVar('branchaddress');
			$email=$this->request->getVar('email');
			$landline=$this->request->getVar('landline');
			$phoneno=$this->request->getVar('phoneno');
			$city=$this->request->getVar('city');
			$pincode=$this->request->getVar('pincode');
			$state=$this->request->getVar('state');
			$country=$this->request->getVar('country');
		
			$update_data=[
							'id'     => $id,
							'branchname' => $branchname,
							'ownername' => $ownername,
							'email' => $email,
							'landline' => $landline,
							'phoneno' => $phoneno,
							'branchaddress' => $branchaddress,
							'city' => $city,
							'pincode' => $pincode,
							'state' => $state,
							'country' => $country,
			];
			$GymBranchModel->update($id, $update_data);
				echo '<script type="text/javascript">'; 
                echo 'alert("Gym Branch Update Successfully!");'; 
                echo 'window.location.href = "'.base_url('GymBranch/listRecord').'"';
                echo '</script>';
	  }
	  
	
	 public function delete($id = null)
	 {
			$GymBranchModel = new GymBranchModel();
			$data['BranchData'] = $GymBranchModel->where('id', $id)->delete($id);
		
                echo '<script type="text/javascript">'; 
                echo 'alert("Gym Branch Delete Successfully!");'; 
                echo 'window.location.href = "'.base_url('GymBranch/listRecord').'"';
                echo '</script>';
    } 

}