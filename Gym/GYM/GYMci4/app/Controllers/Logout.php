<?php

namespace App\Controllers;


class Logout extends BaseController
{
    public function index()
    {
		//$session = session();
		//session_destroy();
		//$session->destroy();
		//echo '$session';
		//exit();
       return redirect()->to(base_url('login'));
		 
    }
}
