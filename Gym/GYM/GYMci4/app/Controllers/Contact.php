<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
	
        echo view('gymHeader');    
		echo view('gymContact');
        echo view('gymFooter');
       

      
    }
}
