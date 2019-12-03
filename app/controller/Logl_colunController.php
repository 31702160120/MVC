<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
/**
 * 
 */
class Logl_colunController extends Controller
{
	protected $Mysql;
	
	function index()
	{
		$this->display('backstage/gl_Colun.html');
	}

	function __construct()
	{
		$is = new islogin();
		$base = $GLOBALS['base'];
		$this->islink($base);
		$this->selCloun();
	}
	
	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selCloun()
	{
		$sel = $this->Mysql->table('tb_category')->select();
		if ($sel) {
			$arr = $sel;
			$this->virtue($arr);
		}
	}

	protected function virtue($arr)
	{
		foreach ($arr as  $value) {
			if ($value['state'] == 1) {
				$value['color1'] = "color: red";
				$value['status1'] = "启用中";
				$value['color2'] = "background-color:FFD700";
				$value['status2'] = "停用";
				$data[] = $value;
			} else{
				$value['color1'] = "";
				$value['status1'] = "停用中";
				$value['color2'] = "background-color:hotpink";
				$value['status2'] = "启用";
				$data[] = $value;
			}
		}
		$this->assign('data', $data);
	}

	function deleteId()
	{
		$id = $_GET['id'];
		if ($this->selectId($id)) {
			$this->deleteConlun($id);
		}else{
			echo '<script type="text/javascript">
						alert("删除栏目失败");window.open("index.php?m=Logl_colun&a=index","main");
					 </script>';
			exit;
		}
	}

	protected function selectId($id)
	{
		$sel = $this->Mysql->field('categoryId')->table('tb_category')->where('id = '.'"'.$id.'"')->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$cid = $value['categoryId'];
			}
		}
		$sql = $this->Mysql->table('tb_news')->field('id')->where('categoryId = '.'"'.$cid.'"')->select();
		if ($sql) {
			$del = $this->Mysql->table('tb_news')->where('categoryId = '.'"'.$cid.'"')->delete();
			if ($del) {
				return true;
			}else { 
				return flase;
			}
		}
		return true;
	}

	protected function deleteConlun($id)
	{
		$sel = $this->Mysql->table('tb_category')->where('id = '.'"'.$id.'"')->delete();
		if ($sel) {
			echo '<script type="text/javascript">
						alert("删除栏目成功");window.open("index.php?m=Logl_colun&a=index","main");
				  </script>';
			exit;
		} else{
			echo '<script type="text/javascript">
						alert("删除栏目失败");window.open("index.php?m=Logl_colun&a=index","main");
				 </script>';
			exit;
		}
	}

	function switch()
	{
		$id = $_GET['id'];
		$this->request($id);
	}

	protected function request($id)
	{
		$sel = $this->Mysql->field('state')->table('tb_category')->where('id = '.'"'.$id.'"')->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$state = $value['state'];
			}

			if ($state == 1) {
				$data =['state' => '0'];
				$one = $this->Mysql->table('tb_category')->where('id = '.'"'.$id.'"')->update($data);
				if ($one) {
					echo '<script type="text/javascript">
							alert("操作成功");window.open("index.php?m=Logl_colun&a=index","main");
					 	 </script>';
					exit;
				}
			}

			if ($state == 0) {
				$data =['state' => '1'];
				$zero = $this->Mysql->table('tb_category')->where('id = '.'"'.$id.'"')->update($data);
				if ($zero) {
					echo '<script type="text/javascript">
							alert("操作成功");window.open("index.php?m=Logl_colun&a=index","main");
					     </script>';
					exit;
				}
			}
		}else{
			echo '<script type="text/javascript">
					alert("操作失败");window.open("index.php?m=Logl_colun&a=index","main");
				  </script>';
			exit;
		}
	}
}