<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
/**
 * 
 */
class Loadd_colunController extends Controller
{
	protected $Mysql;

	function index()
	{
		$this->display('backstage/add_Colun.html');
	}
	

	function __construct()
	{
		$is = new islogin();
		$base = $GLOBALS['base'];
		$this->islink($base);
		if (isset($_POST['sub_ok'])) {
			$cid = $_POST['categoryId'];
			$cname = $_POST['categoryName'];
			$this->selCid($cid);
			$this->selCname($cname);
			$this->addColun($cid, $cname);
		}
	}
	
	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selCid($id)
	{
		$sel = $this->Mysql->table('tb_category')->where('categoryId ='.'"'.$id.'"')->select(false);
		if ($sel) {
			echo '<script type="text/javascript">
						alert("栏目id已存在");window.history.back();
					 </script>';
				exit;
		}
	}

	protected function selCname($name)
	{
		$sel = $this->Mysql->table('tb_category')->where('categoryName = '.'"'.$name.'"')->select(false);
		if ($sel) {
			echo '<script type="text/javascript">
						alert("栏目名已存在");window.history.back();
					 </script>';
			exit;
		}
	}

	protected function addColun($cid, $cname)
	{
		$data = [ 'categoryId' => $cid, 'categoryName' => $cname];
		$sel = $this->Mysql->table('tb_category')->insert($data);
		if ($sel) {
			echo '<script type="text/javascript">
						alert("栏目添加成功");window.open("index.php?m=Logl_colun&a=index","main");
					 </script>';
			exit;
		} else{
			echo '<script type="text/javascript">
						alert("栏目添加失败");window.history.back();
					 </script>';
			exit;
		}
	}

}