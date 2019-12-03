<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
class LomenuController extends Controller
{
	protected $Mysql;

	function index()
	{
		$this->display('backstage/menu.html');
	}

	function __construct()
	{
		$is = new islogin();
		$base = $GLOBALS['base'];
		$this->islink($base);
		$this->selColun();
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selColun()
	{
		$sel = $this->Mysql->table('tb_category')->field('categoryName,categoryId')->select();
		if ($sel) {
			$data = $sel;
			$this->assign('data', $data);
		}
	}	
}