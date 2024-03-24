<?php

namespace App\Controllers;

class Classes extends BaseController
{
    public function index()
    {
	
        echo view('gymHeader');    
		echo view('gymClasses');
        echo view('gymFooter');
       

      
    }
}
