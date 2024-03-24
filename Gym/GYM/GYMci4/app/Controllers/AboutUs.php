<?php

namespace App\Controllers;

class AboutUs extends BaseController
{
    public function index()
    {	echo view('gymHeader');
	echo view('gymAboutUs');
	echo view('gymFooter');    
	
}	
}