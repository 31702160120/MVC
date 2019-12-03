<?php
namespace controller;
use \framework\Model;
class NewsController extends Controller
{
	protected $Mysql;
	protected $cid;

	function index()
	{
		$this->display('index/news.html');
	}

	function __construct()
	{
		$base = $GLOBALS['base'];
		$this->islink($base);
		$id = $_GET['id'];
		$this->selsctNews($id);
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selsctNews($id)
	{
		$sel = $this->Mysql->table('tb_news')->where('id = '.'"'.$id.'"')->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$this->cid = $value['categoryId'];
				$title = $value['title'];
				$author = $value['author'];
				$content = $value['content'];
				$time = date('Y-m-d', $value['publishTime']);
			}
			$this->assign('time', $time);
			$this->assign('title', $title);
			$this->assign('author', $author);
			$this->assign('content', $content);
			$this->selColun();
		}
	}

	protected function selColun()
	{
		$cid = $this->cid;
		$sel = $this->Mysql->field("categoryName")->table('tb_category')->where('categoryId = '.'"'.$cid.'"')->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$Column = $value['categoryName'];
			}
			$Nid = $cid;
			$this->assign('Nid', $Nid);
			$this->assign('Column', $Column);
		}
	}
}
