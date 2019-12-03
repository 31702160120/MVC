<?php
namespace controller;
use \framework\Model;

class IndexController extends Controller
{
	
	protected $Mysql;

	function index()
	{
		$this->display('index/main.html');
	}

	function __construct()
	{
		$base = $GLOBALS['base'];
		$this->islink($base);
		$this->selNews1();
		$this->selNews2();
		$this->selNews3();
		$this->selNews4();
	}


	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selNews1()
	{
		$sel = $this->Mysql->field("id,title,publishTime")->table('tb_news')->where('categoryId = "09"')
		->order("id DESC")->limit(" 0,6")->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$value['publishTime'] = date('Y-m-d', $value['publishTime']);
				$array[] = $value;
			}
			$data1 = $array;
			$this->assign('data1', $data1);
		}
	}

	protected function selNews2()
	{
		$sel = $this->Mysql->field("id,title,publishTime")->table('tb_news')->where('categoryId = "08"')
		->order("id DESC")->limit(" 0,6")->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$value['publishTime'] = date('Y-m-d', $value['publishTime']);
				$array[] = $value;
			}
			$data2 = $array;
			$this->assign('data2', $data2);
		}
	}

	protected function selNews3()
	{
		$sel = $this->Mysql->field("id,title,publishTime")->table('tb_news')->where('categoryId = "02"')
		->order("id DESC")->limit(" 0,6")->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$value['publishTime'] = date('Y-m-d', $value['publishTime']);
				$array[] = $value;
			}
			$data3 = $array;
			$this->assign('data3', $data3);
		}
	}


	protected function selNews4()
	{
		$sel = $this->Mysql->field("id,title,publishTime")->table('tb_news')->where('categoryId = "05"')
		->order("id DESC")->limit(" 0,6")->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$value['publishTime'] = date('Y-m-d', $value['publishTime']);
				$array[] = $value;
			}
			$data4 = $array;
			$this->assign('data4', $data4);
		}
	}
}