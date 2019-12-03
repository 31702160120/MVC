<?php
namespace controller;
use \framework\islogin;

class LotopController extends Controller
{
	function index()
	{
		$is = new islogin();
		$this->display('backstage/top.html');
	}

	function __construct()
	{
		session_start();
		$name = $_SESSION['username'];
		$this->assign('name', $name);
	}

	function out()
	{
		
		if(!session_id()) session_start();
		$_SESSION['username'] = [];
		$_SESSION['islogin'] = FALSE;
		session_unset();
		session_destroy();
		header('Location:index.php?m=Loindex');
	}
}
