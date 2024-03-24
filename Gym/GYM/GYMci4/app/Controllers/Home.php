<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
	
        echo view('gymHeader');    
		echo view('gymHome');
        echo view('gymFooter');
       

      
    }
}
