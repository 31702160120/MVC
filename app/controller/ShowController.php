<?php
namespace controller;
use \framework\Model;
use \framework\page;
class ShowController extends Controller
{
	protected $Mysql;
	protected $url;

	function index()
	{
		$this->display('index/show.html');
	}

	function __construct()
	{
		$base = $GLOBALS['base'];
		$this->islink($base);
		$cid = $_GET['cid'];
		$this->selectNews($cid);
		$this->seltitle($cid);
		$this->selectColunt();
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selectNews($cid)
	{
		$sel = $this->Mysql->table('tb_news')->field('id')->where('categoryId = '.'"'.$cid.'"')->select(false);
		$url = new page(6,$sel);
		$num = $url->limit();
		$Total = $sel;
		$this->assign('Total', $Total);
		$this->url = $url;
		$this->number();
		$this->selNews($cid, $num);
	}

	protected function number()
	{
		$str = $this->url->allUrl();

		$first = $str['first'];
		$prev = $str['prev'];
		$next = $str['next'];
		$end = $str['end'];
		$present = $this->url->current();
		$chief = $this->url->total();
		$this->assign('chief', $chief);
		$this->assign('present', $present);
		$this->assign('first', $first);
		$this->assign('prev', $first);
		$this->assign('next', $next);
		$this->assign('end', $end);
	}

	protected function selectColunt()
	{
$sel = $this->Mysql->field("categoryId,categoryName")->table('tb_category')->where('state = 1')->limit(" 0,8")->select();
		if ($sel) {
			$data = $sel;
			$this->assign('data', $data);
		}
	}

	protected function seltitle($cid)
	{
		$sel = $this->Mysql->field("categoryName")->table('tb_category')->where('categoryId = '.'"'.$cid.'"')->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$Column = $value['categoryName'];
			}
			$this->assign('Column', $Column);
		}
	}

	protected function selNews($cid,$num)
	{
		$sel = $this->Mysql->field("id,title,publishTime")->table('tb_news')->where('categoryId = '.'"'.$cid.'"')
		->order("id DESC")->limit($num)->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$value['publishTime'] = date('Y-m-d', $value['publishTime']);
				$array[] = $value;
			}
			$detail = $array;
			$this->assign('detail', $detail);
		}else {
		$detail = '';
		$this->assign('detail', $detail);
		}
		
	}
}