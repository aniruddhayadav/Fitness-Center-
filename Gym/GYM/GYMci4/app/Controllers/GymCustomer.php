<?php

namespace App\Controllers;
use App\Models\GymCustomerModel;
use App\Models\GymBranchModel;
use App\Models\GymEmployeeModel;
use App\Models\ProgramMasterModel;
use CodeIgniter\Controller;

class GymCustomer extends BaseController
{
    public function index()
    {
		$GymBranchModel = new GymBranchModel();
		$data['branch']=$GymBranchModel->findAll();
		
		$GymEmployeeModel = new GymEmployeeModel();
		$data['employee']=$GymEmployeeModel->findAll();
		 
		 $ProgramMasterModel = new ProgramMasterModel();
		 $data['program']=$ProgramMasterModel->findAll();
		 //print_r($data);exit;
		 echo view('Admin/header');
         echo view('Admin/gymcustomer/add',$data);
		 echo view('Admin/footer'); 
	}
	public function save()
    { 
	
            //load helpers
		helper(['form', 'url']);
		
		//accept post data
       $GymCustomerModel= new GymCustomerModel();
					
		//set validation rules
		
        $validationRule = $this->validate([
						'customername' => 'required',
						'gender' => 'required',
						'date' => 'required',
						'phoneno'  => 'required',
						'aadharno'  => 'required',
						'email' => 'required',
						'branchname' => 'required',
						'instructorname' => 'required',
						'programtime' =>'required',
						'joindate' =>'required',
						'member' =>'required',
						'programname' =>'required',
						'package' =>'required',
						'reference' =>'required',
						'status' =>'required'
        ]);
		if(!$validationRule)	
		{
			 return redirect()->to('GymCustomer');
		}
		else
		{
			//store post data
		 
		 $customername=$this->request->getVar('customername');
		 $customerimage=$this->request->getFile('customerimage');
		 $date=$this->request->getVar('date');
		 $gender=$this->request->getVar('gender');
		 $phoneno=$this->request->getVar('phoneno');
		 $aadharno=$this->request->getVar('aadharno');
		 $customername=$this->request->getVar('customername');
		 $email=$this->request->getVar('email');
		 $address=$this->request->getVar('address');
		 $occupation=$this->request->getVar('occupation');
		 $city=$this->request->getVar('city');
		 $branchname=$this->request->getVar('branchname');
		 $instructorname=$this->request->getVar('instructorname');
		 $programtime=$this->request->getVar('programtime');
		 $joindate=$this->request->getVar('joindate');
		 $place=$this->request->getVar('place');
		 $member=$this->request->getVar('member');
		 $programname=$this->request->getVar('programname');
		 $package=$this->request->getVar('package');
		 $reference=$this->request->getVar('reference');
		 $status=$this->request->getVar('status');
		 $bloodgroup=$this->request->getVar('bloodgroup');
		 $height=$this->request->getVar('height');
		 $weight=$this->request->getVar('weight');
		 $heart=$this->request->getVar('heart');
	     $asthma=$this->request->getVar('asthma');
	     $gout=$this->request->getVar('gout');
		 $cardio=$this->request->getVar('cardio');
		 $pressure=$this->request->getVar('pressure');
		 $familyhx=$this->request->getVar('familyhx');
		 $dizziness=$this->request->getVar('dizziness');
		 $weight=$this->request->getVar('weight');
		 $arthritis=$this->request->getVar('arthritis');
		 $infection=$this->request->getVar('infection');
		 $blackouts=$this->request->getVar('blackouts');
		 $diabetes=$this->request->getVar('diabetes');
		 $fainting=$this->request->getVar('fainting');
		 $fits=$this->request->getVar('fits');
		 $other=$this->request->getVar('other');
		 $otherdesc=$this->request->getVar('otherdesc');
		 $knees=$this->request->getVar('knees');
		 $lowerback=$this->request->getVar('lowerback');
		 $neck=$this->request->getVar('neck');
		 $hips=$this->request->getVar('hips');
		 $flexibility=$this->request->getVar('flexibility');
		 $others=$this->request->getVar('others');
		 $yes=$this->request->getVar('yes');
		 $no=$this->request->getVar('no');
		 $weeks=$this->request->getVar('weeks');
		 $physical=$this->request->getVar('physical');
		 $surgery=$this->request->getVar('surgery');
		 $smoke=$this->request->getVar('smoke');
		 $medication=$this->request->getVar('medication');
		 $totalamount=$this->request->getVar('totalamount');
		 $paidamount=$this->request->getVar('paidamount');
		 $pendingamount=$this->request->getVar('pendingamount');
		 $data = [
            
			'customername' => $customername,
			'date' => $date,
			'gender' => $gender,
			'phoneno' => $phoneno,
			'aadharno' => $aadharno,
			'email' => $email,
			'address' => $address,
			'occupation' => $occupation,
			'city' => $city,
			'branchname' => $branchname,
			'instructorname' => $instructorname,
			'programtime' => $programtime,
			'joindate' => $joindate,
			'place' => $place,
			'member' => $member,
			'programname' => $programname,
			'package' => $package,
			'reference' => $reference,
			'status' => $status,
			'bloodgroup' => $bloodgroup,
			'height' => $height,
			'weight' => $weight,
			'heart' => $heart,
			'asthma' => $asthma,
			'gout' => $gout,
			'cardio' => $cardio,
			'pressure' => $pressure,
			'familyhx' => $familyhx,
			'dizziness' => $dizziness,
			'arthritis' => $arthritis,
			'infection' => $infection,
			'blackouts' => $blackouts,
			'diabetes' => $diabetes,
			'fainting' => $fainting,
			'fits' => $fits,			
			'other' => $other,
			'otherdesc' => $otherdesc,
			'knees' => $knees,
			'lowerback' => $lowerback,
			'neck' => $neck,
			'hips' => $hips,
			'flexibility' => $flexibility,
			'others' => $others,
			'yes' => $yes,
			'no' => $no,
			'weeks' => $weeks,
			'physical' => $physical,
			'surgery' => $surgery,
			'smoke' => $smoke,
			'medication' => $medication,
			'totalamount' => $totalamount,
			'paidamount' => $paidamount, 
			'pendingamount' => $pendingamount,
        ];
		 
		if($GymCustomerModel->insert($data))
		{
			
				$lastId=$GymCustomerModel->getInsertID();
				//get ext from file
				$ext1 = $customerimage->getClientExtension();
 
				 
				//check student dir or create dir
				if(!file_exists("images/upload/gymcustomer/".$lastId))
				{
					mkdir("images/upload/gymcustomer/".$lastId,0777,true);
				}
				//proceed to file upload
				if($ext1)
				{
				 $customerimage->move("images/upload/gymcustomer/".$lastId, 'profile.'.$ext1);
				}
				// print_r($customerimage);exit;
				 //create update data
				 $update_data=[
                               'customerimage'     => 'profile.'.$ext1,
				];
				//proceed to update data in db
				$status=$GymCustomerModel->update($lastId,$update_data);
				if($status==true)
				{
						echo '<script type="text/javascript">'; 
						echo 'alert("Gym Customer add Saved Successfully!");'; 
						echo 'window.location.href = "'.base_url('/GymCustomer/listRecord').'"';
						echo '</script>';
				}//end of statusif
				 else
				{
						echo '<script type="text/javascript">'; 
						echo 'alert("Gym Customer add Not Saved Successfully!");'; 
						echo 'window.location.href = "'.base_url('/GymCustomer').'"';
						echo '</script>';

				}//end of status else
		}//end of if
		}	
    }
	 public function listRecord()
    {
        $GymCustomerModel = new GymCustomerModel();
        $data['CustomerData'] = $GymCustomerModel->orderBy('id', 'DESC')->findAll();
        
		echo view('Admin/header');
		echo view('Admin/gymcustomer/listRecord',$data);
		echo view('Admin/footer');
    }
	 public function edit($id = null)
	 { 
		$GymCustomerModel = new GymCustomerModel();
		$data['editData'] = $GymCustomerModel->where('id', $id)->first();
		 
		$GymBranchModel = new GymBranchModel();
		$data['branchData'] = $GymBranchModel->findAll();
		
		$GymEmployeeModel = new GymEmployeeModel();
		$data['employeeData']=$GymEmployeeModel->findAll();
		
		$ProgramMasterModel = new ProgramMasterModel();
		$data['programData'] = $ProgramMasterModel->findAll();
		
		//print_r($data);exit;
        echo view('Admin/header');
		echo view('Admin/GymCustomer/edit',$data);
		echo view('Admin/footer');
	 }
	 
	 public function print($id = null)
	 { 
        $GymCustomerModel = new GymCustomerModel();
        $data['printData'] = $GymCustomerModel->where('id', $id)->first();
		 
		echo view('Admin/GymCustomer/admissionform',$data);
		 
	 }
	 
	  public function update()
	  {
        $GymCustomerModel = new GymCustomerModel();
		    
		 $id=    $this->request->getVar('id');			
		 $customername=$this->request->getVar('customername');
		 $date=$this->request->getVar('date');
		 $gender=$this->request->getVar('gender');
		 $phoneno=$this->request->getVar('phoneno');
		 $email=$this->request->getVar('email');
		 $address=$this->request->getVar('address');
		 $occupation=$this->request->getVar('occupation');
		 $city=$this->request->getVar('city');
		 $branchname=$this->request->getVar('branchname');
		 $instructorname=$this->request->getVar('instructorname');
		 $programtime=$this->request->getVar('programtime');
		 $joindate=$this->request->getVar('joindate');
		 $place=$this->request->getVar('place');
		 $member=$this->request->getVar('member');
		 $programname=$this->request->getVar('programname');
		 $package=$this->request->getVar('package');
		 $reference=$this->request->getVar('reference');
		 $status=$this->request->getVar('status');
		 $bloodgroup=$this->request->getVar('bloodgroup');
		 $height=$this->request->getVar('height');
		 $weight=$this->request->getVar('weight');
		 $heart=$this->request->getVar('heart');
	     $asthma=$this->request->getVar('asthma');
	     $gout=$this->request->getVar('gout');
		 $cardio=$this->request->getVar('cardio');
		 $pressure=$this->request->getVar('pressure');
		 $familyhx=$this->request->getVar('familyhx');
		 $dizziness=$this->request->getVar('dizziness');
		 $weight=$this->request->getVar('weight');
		 $arthritis=$this->request->getVar('arthritis');
		 $infection=$this->request->getVar('infection');
		 $blackouts=$this->request->getVar('blackouts');
		 $diabetes=$this->request->getVar('diabetes');
		 $fainting=$this->request->getVar('fainting');
		 $fits=$this->request->getVar('fits');
		 $other=$this->request->getVar('other');
		 $otherdesc=$this->request->getVar('otherdesc');
		 $knees=$this->request->getVar('knees');
		 $lowerback=$this->request->getVar('lowerback');
		 $neck=$this->request->getVar('neck');
		 $hips=$this->request->getVar('hips');
		 $flexibility=$this->request->getVar('flexibility');
		 $others=$this->request->getVar('others');
		 $yes=$this->request->getVar('yes');
		 $no=$this->request->getVar('no');
		 $weeks=$this->request->getVar('weeks');
		 $physical=$this->request->getVar('physical');
		 $surgery=$this->request->getVar('surgery');
		 $smoke=$this->request->getVar('smoke');
		 $medication=$this->request->getVar('medication');
		 
		
			$update_data=[
							'id'     => $id,
							'customername' => $customername,
			'date' => $date,
			'gender' => $gender,
			'phoneno' => $phoneno,
			'email' => $email,
			'address' => $address,
			'occupation' => $occupation,
			'city' => $city,
			'branchname' => $branchname,
			'instructorname' => $instructorname,
			'programtime' => $programtime,
			'joindate' => $joindate,
			'place' => $place,
			'member' => $member,
			'programname' => $programname,
			'package' => $package,
			'reference' => $reference,
			'status' => $status,
			'bloodgroup' => $bloodgroup,
			'height' => $height,
			'weight' => $weight,
			'heart' => $heart,
			'asthma' => $asthma,
			'gout' => $gout,
			'cardio' => $cardio,
			'pressure' => $pressure,
			'familyhx' => $familyhx,
			'dizziness' => $dizziness,
			'arthritis' => $arthritis,
			'infection' => $infection,
			'blackouts' => $blackouts,
			'diabetes' => $diabetes,
			'fainting' => $fainting,
			'fits' => $fits,			
			'other' => $other,
			'otherdesc' => $otherdesc,
			'knees' => $knees,
			'lowerback' => $lowerback,
			'neck' => $neck,
			'hips' => $hips,
			'flexibility' => $flexibility,
			'others' => $others,
			'yes' => $yes,
			'no' => $no,
			'weeks' => $weeks,
			'physical' => $physical,
			'surgery' => $surgery,
			'smoke' => $smoke,
			'medication' => $medication,
			];
			$GymCustomerModel->update($id, $update_data);
				echo '<script type="text/javascript">'; 
                echo 'alert("Gym Customer Update Successfully!");'; 
                echo 'window.location.href = "'.base_url('/GymCustomer/listRecord').'"';
                echo '</script>';
	  }
	 
	 public function delete($id = null)
	 {
        $GymCustomerModel = new GymCustomerModel();
        $data['CustomerData'] = $GymCustomerModel->where('id', $id)->delete($id);
		
           echo '<script type="text/javascript">'; 
           echo 'alert("Gym Customer Delete Successfully!");'; 
           echo 'window.location.href = "'.base_url('/GymCustomer/listRecord').'"';
           echo '</script>';
    } 
	
}
