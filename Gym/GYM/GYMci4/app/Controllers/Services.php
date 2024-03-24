<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
	
        echo view('gymHeader');    
		echo view('gymServices');
        echo view('gymFooter');
       

      
    }
}
