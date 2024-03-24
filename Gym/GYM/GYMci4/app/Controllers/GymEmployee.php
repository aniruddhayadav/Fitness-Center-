<?php

namespace App\Controllers;
use App\Models\GymEmployeeModel;
use App\Models\GymBranchModel;
use CodeIgniter\Controller;

class GymEmployee extends BaseController
{
    public function index()
    {
		$GymBranchModel = new GymBranchModel();
		$data['branch']=$GymBranchModel->findAll();
		 
		echo view('Admin/header');
        echo view('Admin/gymemployee/add',$data);
		echo view('Admin/footer');
   }
   public function save()
    { 
	
            //load helpers
		helper(['form', 'url']);
		
		//accept post data
       $GymEmployeeModel= new GymEmployeeModel();
					
		//set validation rules
		
        $validationRule = $this->validate([
						'employeename' => 'required',
						'password' => 'required',
						'role'  => 'required',
						'gender' =>'required',
						'email' => 'required',
						'phoneno' =>'required',
						'branchname' =>'required',
						'time' =>'required',
						'joindate' =>'required',
						'status' =>'required',
						'trainfor' =>'required',
						'employeeimage' =>'is_image[employeeimage]',
						'aadharno' =>'required',
						'aadharimage' =>'is_image[aadharimage]',
						'panno' =>'required',
						'panimage' =>'is_image[panimage]',
						'bankname' =>'required',
						'accountno' =>'required'
        ]);
		if(!$validationRule)	
		{
			 return redirect()->to('GymEmployee');
		}
		else
		{
			//store post data
		 
		 $employeename=$this->request->getVar('employeename');
		 $password=$this->request->getVar('password');
		 $role=$this->request->getVar('role');
		 $date=$this->request->getVar('date');
		 $gender=$this->request->getVar('gender');
		 $phoneno=$this->request->getVar('phoneno');
		 $email=$this->request->getVar('email');
		 $place=$this->request->getVar('place');
		 $bloodgroup=$this->request->getVar('bloodgroup');
		 $height=$this->request->getVar('height');
		 $weight=$this->request->getVar('weight');
		 $branchname=$this->request->getVar('branchname');
		 $time=$this->request->getVar('time');
		 $designation=$this->request->getVar('designation');
		 $joindate=$this->request->getVar('joindate');
		 $status=$this->request->getVar('status');
		 $trainfor=$this->request->getVar('trainfor');
		 $aadharno=$this->request->getVar('aadharno');
		 $aadharimage=$this->request->getFile('aadharimage');
		 $panno=$this->request->getVar('panno');
		 $panimage=$this->request->getFile('panimage');
		 $employeeimage=$this->request->getFile('employeeimage');
		 $bankname=$this->request->getVar('bankname');
		 $accountno=$this->request->getVar('accountno');
		 $accounttype=$this->request->getVar('accounttype');
		 $ifsc=$this->request->getVar('ifsc');
		 
		 $data = [
             
			'employeename' => $employeename,
			'password' => $password,
			'role' => $role,
			'date' => $date,
			'gender' => $gender,
			'phoneno' => $phoneno,
			'email' => $email,
			'place' => $place,
			'bloodgroup' => $bloodgroup,
			'height' => $height,
			'weight' => $weight,
			'branchname' => $branchname,
			'time' => $time,
			'designation' => $designation,
			'joindate' => $joindate,
			'status' => $status,
			'trainfor' => $trainfor,
			'aadharno' => $aadharno,
			'aadharimage' => $aadharimage,
			'panno' => $panno,
			'panimage' => $panimage,
			'employeeimage' => $employeeimage,
			'bankname' => $bankname,
			'accountno' => $accountno,
			'accounttype' => $accounttype,
			'ifsc' => $ifsc,
		];
		 
		if($GymEmployeeModel->insert($data))
		{
			
				$lastId=$GymEmployeeModel->getInsertID();
				//get ext from file
				$ext1 = $aadharimage->getClientExtension();
				$ext2 = $panimage->getClientExtension();
				$ext3 = $employeeimage->getClientExtension();
				 
				//check student dir or create dir
				if(!file_exists("images/upload/gymstaff/".$lastId))
				{
					mkdir("images/upload/gymstaff/".$lastId,0777,true);
				}
				//proceed to file upload
				if($ext1)
				{
				 $aadharimage->move("images/upload/gymstaff/".$lastId, 'aadhar.'.$ext1);
				}
				if($ext2)
				{
				 $panimage->move("images/upload/gymstaff/".$lastId, 'pan.'.$ext2);
				}
				if($ext3)
				{
				 $employeeimage->move("images/upload/gymstaff/".$lastId, 'employee.'.$ext3);
				}
			 
				 //create update data
				 $update_data=[
                                'aadharimage'     => 'aadhar.'.$ext1,
								'panimage'     => 'pan.'.$ext2,
								'employeeimage'     => 'employee.'.$ext3,
									 
                 ];
				//proceed to update data in db
				$status1=$GymEmployeeModel->update($lastId,$update_data);
				if($status1==true)
				{
						echo '<script type="text/javascript">'; 
						echo 'alert("Gym Employee add Saved Successfully!");'; 
						echo 'window.location.href = "'.base_url('/GymEmployee/listRecord').'"';
						echo '</script>';
				}//end of statusif
				 else
				{
						echo '<script type="text/javascript">'; 
						echo 'alert("Gym Employee add Not Saved Successfully!");'; 
						echo 'window.location.href = "'.base_url('/GymEmployee').'"';
						echo '</script>';

				}//end of status else
		}//end of if
		}	
    }
	 public function listRecord()
    {
        $GymEmployeeModel = new GymEmployeeModel();
        $data['EmployeeData'] = $GymEmployeeModel->orderBy('id', 'DESC')->findAll();
        
		echo view('Admin/header');
		echo view('Admin/gymemployee/listRecord',$data);
		echo view('Admin/footer');
    }
	 public function edit($id = null)
	 {
        $GymEmployeeModel = new GymEmployeeModel();
        $data['editData'] = $GymEmployeeModel->where('id', $id)->first();
		
		$GymBranchModel = new GymBranchModel();
		$data['branch']=$GymBranchModel->findAll();
		
       //print_r($data);exit;
        echo view('Admin/header');
		echo view('Admin/GymEmployee/edit',$data);
		echo view('Admin/footer');
	 }
	 
	  public function update(){
        $GymEmployeeModel = new GymEmployeeModel();
		    
		 $id=    $this->request->getVar('id');			
		 $employeename=$this->request->getVar('employeename');
		 $date=$this->request->getVar('date');
		 $gender=$this->request->getVar('gender');
		 $phoneno=$this->request->getVar('phoneno');
		 $email=$this->request->getVar('email');
		 $place=$this->request->getVar('place');
		 $bloodgroup=$this->request->getVar('bloodgroup');
		 $height=$this->request->getVar('height');
		 $weight=$this->request->getVar('weight');
		 $branchname=$this->request->getVar('branchname');
		 $time=$this->request->getVar('time');
		 $designation=$this->request->getVar('designation');
		 $joindate=$this->request->getVar('joindate');
		 $status=$this->request->getVar('status');
		 $trainfor=$this->request->getVar('trainfor');
		 $aadharno=$this->request->getVar('aadharno');
		 $panno=$this->request->getVar('panno');
		 $bankname=$this->request->getVar('bankname');
		 $accountno=$this->request->getVar('accountno');
		 $accounttype=$this->request->getVar('accounttype');
		 $ifsc=$this->request->getVar('ifsc');
		 
		 $update_data=[
                            'id'     => $id,
							'employeename' => $employeename,
							'date' => $date,
							'gender' => $gender,
							'phoneno' => $phoneno,
							'email' => $email,
							'place' => $place,
							'bloodgroup' => $bloodgroup,
							'height' => $height,
							'weight' => $weight,
							'branchname' => $branchname,
							'time' => $time,
							'designation' => $designation,
							'joindate' => $joindate,
							'status' => $status,
							'trainfor' => $trainfor,
							'aadharno' => $aadharno,
							'panno' => $panno,
							'bankname' => $bankname,
							'accountno' => $accountno,
							'accounttype' => $accounttype,
							'ifsc' => $ifsc,
		];
        $GymEmployeeModel->update($id, $update_data);
				echo '<script type="text/javascript">'; 
                echo 'alert("Gym Employee Update Successfully!");'; 
                echo 'window.location.href = "'.base_url('/GymEmployee/listRecord').'"';
                echo '</script>';
	  }
	  
	
	 public function delete($id = null)
	 {
        $GymEmployeeModel = new GymEmployeeModel();
        $data['EmployeeData'] = $GymEmployeeModel->where('id', $id)->delete($id);
		
                echo '<script type="text/javascript">'; 
                echo 'alert("Gym Employee Delete Successfully!");'; 
                echo 'window.location.href = "'.base_url('/GymEmployee/listRecord').'"';
                echo '</script>';
    } 

}
