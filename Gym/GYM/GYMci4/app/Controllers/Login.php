<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function index()
    {
	   echo view('Admin/login');	   
	   
		 
    }
	 public function save()
    {       
        
		$UserModel= new UserModel();
		
		$res=$UserModel->where('email',$this->request->getVar('email'))->
						  where('password',$this->request->getVar('password'))->
						  where('role',$this->request->getVar('role'))->
						  first();
						  
						//  print_r($res);
						//  exit();
		//$session=session();
		if($res)
		{
			//$session->set('email',$res['email']);
			
			//$session->set('role',$res['role']);
		echo '<script type="text/javascript">'; 
        echo 'alert("Login Successfully!");'; 
        echo 'window.location.href = "'.base_url('/Dashboard').'"';
        echo '</script>';
		}	
		else
		{
			
			echo '<script type="text/javascript">'; 
        echo 'alert("Login Unsuccessfully!");'; 
        echo 'window.location.href = "'.base_url('/Login').'"';
        echo '</script>';
		}
		
		
    }
	 
	 
}
