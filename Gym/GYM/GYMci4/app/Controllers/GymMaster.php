<?php

namespace App\Controllers;
use App\Models\GymMasterModel;
use CodeIgniter\Controller;

class GymMaster extends BaseController
{
    public function index()
    {
		echo view('Admin/header');
        echo view('Admin/Gymmaster/add');
		echo view('Admin/footer');

    }
	public function save()
    { 
	
       //load helpers
		helper(['form', 'url']);
		
		//accept post data
        $GymMasterModel= new GymMasterModel();
					
		//set validation rules
		
        $validationRule = $this->validate([
						'gymname' => 'required',
						'ownername' => 'required',
						'phoneno'  => 'required',
						'emailone' => 'required',
						'regno' =>'required',
						'regimage' => 'is_image[regimage]',
						'panno' =>'required',
						'panimage' => 'is_image[panimage]',
						 
        ]);
		if(!$validationRule)	
		{
			 return redirect()->to('GymMaster/index');
		}
		else
		{
			//store post data
 
		 $gymname=$this->request->getVar('gymname');
		 $ownername=$this->request->getVar('ownername');
		 $landline=$this->request->getVar('landline');
		 $phoneno=$this->request->getVar('phoneno');
		 $emailone=$this->request->getVar('emailone');
		 $emailtwo=$this->request->getVar('emailtwo');
		 $billingaddress=$this->request->getVar('billingaddress');
		 $billingcity=$this->request->getVar('billingcity');
		 $billingpincode=$this->request->getVar('billingpincode');
		 $billingstate=$this->request->getVar('billingstate');
		 $billingcountry=$this->request->getVar('billingcountry');
		 $shippingaddress=$this->request->getVar('shippingaddress');
		 $shippingcity=$this->request->getVar('shippingcity');
		 $shippingpincode=$this->request->getVar('shippingpincode');
		 $shippingstate=$this->request->getVar('shippingstate');
		 $shippingcountry=$this->request->getVar('shippingcountry');
		 $gstno=$this->request->getVar('gstno');
		 $gstimage=$this->request->getFile('gstimage');
		 $regno=$this->request->getVar('regno');
		 $regimage=$this->request->getFile('regimage');
		 $panno=$this->request->getVar('panno');
		 $panimage=$this->request->getFile('panimage');
		 $award=$this->request->getVar('award');
		 $awardimage=$this->request->getFile('awardimage');
		
		 $data = [
            'gymname' => $gymname,
			'ownername' => $ownername,
			'landline' => $landline,
			'phoneno' => $phoneno,
			'emailone' => $emailone,
			'emailtwo' => $emailtwo,
			'billingaddress' => $billingaddress,
			'billingcity' => $billingcity,
			'billingpincode' => $billingpincode,
			'billingstate' => $billingstate,
			'billingcountry' => $billingcountry,
			'shippingaddress' => $shippingaddress,
			'shippingcity' => $shippingcity,
			'shippingpincode' => $shippingpincode,
			'shippingstate' => $shippingstate,
			'shippingcountry' => $shippingcountry,
			'gstno' => $gstno,
			'regno' => $regno,
			'panno' => $panno,
			'award' => $award,
		   ];
		 
		if($GymMasterModel->insert($data))
		{
			
				$lastId=$GymMasterModel->getInsertID();
				//get ext from file
				$ext1 = $gstimage->getClientExtension();
				$ext2 = $regimage->getClientExtension();
				$ext3 = $panimage->getClientExtension();
				$ext4 = $awardimage->getClientExtension();
				//check student dir or create dir
				if(!file_exists("images/upload/gymsetting/".$lastId))
				{
					mkdir("images/upload/gymsetting/".$lastId,0777,true);
				}
				//proceed to file upload
				 if($ext1)
				 {
				 $gstimage->move("images/upload/gymsetting/".$lastId, 'gst.'.$ext1);
				 }
				 if($ext2)
				 {
				 $regimage->move("images/upload/gymsetting/".$lastId, 'reg.'.$ext2);
				 }
				 if($ext3)
				 {
				 $panimage->move("images/upload/gymsetting/".$lastId, 'pan.'.$ext3);
				 }
				 if($ext4)
				 {
				 $awardimage->move("images/upload/gymsetting/".$lastId, 'award.'.$ext4);
				 }
				 //create update data
				 $update_data=[
                                'gstimage'     => 'gst.'.$ext1,
								'regimage'     => 'reg.'.$ext2,
								'panimage'     => 'pan.'.$ext3,
								'awardimage'     => 'award.'.$ext4,
                 ];
					 
				//proceed to update data in db
				$status1=$GymMasterModel->update($lastId,$update_data);
				if($status1==true)
				{
						echo '<script type="text/javascript">'; 
						echo 'alert("Gym add Saved Successfully!");'; 
						echo 'window.location.href = "'.base_url('/GymMaster/listRecord').'"';
						echo '</script>';
				}//end of statusif
				 else
				{
						echo '<script type="text/javascript">'; 
						echo 'alert("Gym add Not Saved Successfully!");'; 
						echo 'window.location.href = "'.base_url('/GymMaster').'"';
						echo '</script>';

				}//end of status else
		}//end of if
	}	
    } 

	 public function listRecord()
    {
        $GymMasterModel = new GymMasterModel();
        $data['MasterData'] = $GymMasterModel->orderBy('id', 'DESC')->findAll();
        
		echo view('Admin/header');
		echo view('Admin/gymmaster/listRecord',$data);
		echo view('Admin/footer');
    }
	 public function edit($id = null)
	 {
        $GymMasterModel = new GymMasterModel();
        $data['editData'] = $GymMasterModel->where('id', $id)->first();
		 
        echo view('Admin/header');
		echo view('Admin/GymMaster/edit',$data);
		echo view('Admin/footer');
	 }
	 
	  public function update()
	  {
        $GymMasterModel = new GymMasterModel();
		   
		 $id=    $this->request->getVar('id');			
		 $gymname=$this->request->getVar('gymname');
		 $ownername=$this->request->getVar('ownername');
		 $landline=$this->request->getVar('landline');
		 $phoneno=$this->request->getVar('phoneno');
		 $emailone=$this->request->getVar('emailone');
		 $emailtwo=$this->request->getVar('emailtwo');
		 $billingaddress=$this->request->getVar('billingaddress');
		 $billingcity=$this->request->getVar('billingcity');
		 $billingpincode=$this->request->getVar('billingpincode');
		 $billingstate=$this->request->getVar('billingstate');
		 $billingcountry=$this->request->getVar('billingcountry');
		 $shippingaddress=$this->request->getVar('shippingaddress');
		 $shippingcity=$this->request->getVar('shippingcity');
		 $shippingpincode=$this->request->getVar('shippingpincode');
		 $shippingstate=$this->request->getVar('shippingstate');
		 $shippingcountry=$this->request->getVar('shippingcountry');
		 $gstno=$this->request->getVar('gstno');
		 $gstimage=$this->request->getFile('gstimage');
		 $regno=$this->request->getVar('regno');
		 $regimage=$this->request->getFile('regimage');
		 $panno=$this->request->getVar('panno');
		 $panimage=$this->request->getFile('panimage');
		 $award=$this->request->getVar('award');
		 $awardimage=$this->request->getFile('awardimage');
             
			
			$update_data=[
                          'id'     => $id,
						  'gymname' => $gymname,
						  'ownername' => $ownername,
						  'landline' => $landline,
						  'phoneno' => $phoneno,
						  'emailone' => $emailone,
						  'emailtwo' => $emailtwo,
						  'billingaddress' => $billingaddress,
						  'billingcity' => $billingcity,
						  'billingpincode' => $billingpincode,
						  'billingstate' => $billingstate,
						  'billingcountry' => $billingcountry,
						  'shippingaddress' => $shippingaddress,
						  'shippingcity' => $shippingcity,
						  'shippingpincode' => $shippingpincode,
						  'shippingstate' => $shippingstate,
						  'shippingcountry' => $shippingcountry,
						  'gstno' => $gstno,
						  'gstimage' => $gstimage,
						  'regno' => $regno,
						  'regimage' => $regimage,
						  'panno' => $panno,
						  'panimage' => $panimage,
						  'award' => $award,
						  'awardimage' => $awardimage,
           ];
        $GymMasterModel->update($id, $update_data);
				echo '<script type="text/javascript">'; 
                echo 'alert("Gym Master Update Successfully!");'; 
                echo 'window.location.href = "'.base_url('/GymMaster/listRecord').'"';
                echo '</script>';
	  }
	  
	 public function delete($id = null)
	 {
        $GymMasterModel = new GymMasterModel();
        $data['MasterData'] = $GymMasterModel->where('id', $id)->delete($id);
		
                echo '<script type="text/javascript">'; 
                echo 'alert("Gym Master Delete Successfully!");'; 
                echo 'window.location.href = "'.base_url('/GymMaster/listRecord').'"';
                echo '</script>';
    } 
}
