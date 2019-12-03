<?php
namespace controller;
use \framework\Model;
use \framework\islogin;

class Logl_newsController extends Controller
{
	protected $Mysql;

	function index()
	{
		$this->display('backstage/archives.html');
	}

	function __construct()
	{
		$is = new islogin();
		$base = $GLOBALS['base'];
		$this->islink($base);
		$cid = $_GET['cid'];
		$this->assign('cid', $cid);
		$this->selnews($cid);
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selnews($cid)
	{
		$sel = $this->Mysql->field('id,categoryId,title,clicked,author,publishTime')->table('tb_news')->
		where('categoryId ='.'"'.$cid.'"')->select();
		if ($sel) {
			foreach ($sel as $value) {
				$value['publishTime'] = date('Y-m-d', $value['publishTime']);
				$array[] = $value;
			}
			$data = $array;
		}else{
			$data = '';
		}
		$this->assign('data', $data);
	}

	function delNews()
	{
		$id = $_GET['id'];
		$this->deleteNews($id);
	}

	protected function deleteNews($id)
	{
		$cid = $_GET['cid'];
		$sel = $this->Mysql->table('tb_news')->where('id ='.'"'.$id.'"')->delete();
		if ($sel) {
			echo '<script type="text/javascript">
						alert("新闻删除成功");window.open("index.php?m=Logl_news&a=index&cid='.$cid.'","main");
					 </script>';
			exit;
		}
	}
}