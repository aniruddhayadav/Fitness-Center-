<?php

namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;


class AuthGuard implements FilterInterface
{
	Public function before(RequestInterface $request,$argument=null)
	{
	   if (!session()->get('email'))
	   {
		return redirect()
		->to('/Login');
	    }
	}
	      public function after(RequestInterface $request, ResponseInterface $response, $argument = null)
	      {
	      }
	
}
?>