<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
class LohomeController extends Controller
{
	function index()
	{	
		$is = new islogin();
		$this->display('backstage/index.html');
	}
	
	
}