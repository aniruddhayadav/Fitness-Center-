<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
	
        echo view('gymHeader');    
		echo view('gymGallery');
        echo view('gymFooter');
       

      
    }
}
