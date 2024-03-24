<?php

namespace App\Controllers;

class Registration extends BaseController
{
    public function index()
    {
	
        echo view('gymHeader');    
		echo view('gymRegistration');
        echo view('gymFooter');
       

      
    }
}
