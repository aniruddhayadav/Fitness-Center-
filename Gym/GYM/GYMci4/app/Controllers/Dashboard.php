<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
		
	   echo view('Admin/header');
       echo view('Admin/Dashboard');
	   echo view('Admin/footer');
	   
	   
		 
    }
}