<?php
namespace controller;
use \framework\islogin;
class LomainController extends Controller
{
	function index()
	{
		$is = new islogin();
		$this->display('backstage/main.html');
	}

	
}
