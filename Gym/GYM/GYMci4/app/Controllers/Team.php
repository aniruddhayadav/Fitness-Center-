<?php

namespace App\Controllers;

class Team extends BaseController
{
    public function index()
    {
	
        echo view('gymHeader');    
		echo view('gymTeam');
        echo view('gymFooter');
       

      
    }
}
