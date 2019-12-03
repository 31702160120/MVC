<?php
namespace controller;
class IndexController extends Controller
{

	function index()
	{	
		$a = "计算机工程系";	
		$this->assign('a', $a);
		$this->display('index/index.html');
	}

	function __construct()
	{
	}
}
