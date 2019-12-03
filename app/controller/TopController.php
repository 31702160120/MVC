<?php
namespace controller;
use \framework\Model;
class TopController extends Controller
{
	protected $Mysql;

	function index()
	{	
		$this->display('index/top.html');
	}

	function __construct()
	{
		$base = $GLOBALS['base'];
		$this->islink($base);
		$this->selectColun();
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selectColun()
	{
$sel = $this->Mysql->field("categoryId,categoryName")->table('tb_category')->where('state = 1')->limit(" 0,8")->select();
		if ($sel) {
			$data = $sel;
			$this->assign('data', $data);
		}
	}
}