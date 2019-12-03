<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
/**
 * 
 */
class LocolunController extends Controller
{
	protected $Mysql;
	protected $name;
	protected $state;

	function index()
	{
		$this->display('backstage/change_Colun.html');
	}
	
	function __construct()
	{
		$is = new islogin();
		$base = $GLOBALS['base'];
		$this->islink($base);
		$id = $_GET['id'];
		$this->selectId($id);
		if (isset($_POST['sub_ok'])) {
			$cname = $_POST['categoryName'];
			$cstate = $_POST['isUse'];
			$this->modify($cname, $cstate, $id);
		}
	}
	
	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selectId($id)
	{
		$sel = $this->Mysql->field('id, categoryName,state')->table('tb_category')->where('id = '.'"'.$id.'"')->select();
		if ($sel) {
			foreach ($sel as $value) {
				$cid = $value['id'];
				$name = $value['categoryName'];
				$state = $value['state'];
				if ($value['state'] == 1) {
					$state1 = 'checked';
					$state2 = '';
				}
				if ($value['state'] == 0) {
					$state1 = '';
					$state2 = 'checked';
				}
			}
		}
		$this->name = $name;
		$this->assign('cid', $cid);
		$this->assign('name', $name);
		$this->assign('state1', $state1);
		$this->assign('state2', $state2);
	}

	protected function modify($cname, $cstate, $id)
	{
		if ($cname != $this->name ) {
			if ($this->selColun($cname)) {
				$data = ['categoryName' => $cname, 'state' => $cstate];
				$this->upColun($data, $id);
			}
		}else if ($cstate != $this->state && $cname == $this->name) {
			$data = ['state' => $cstate];
			$this->upColun($data, $id);
		}
	}

	protected function selColun($cname)
	{
		$sel = $this->Mysql->table('tb_category')->where('categoryName = '.'"'.$cname.'"')->select();
			if ($sel) {
				echo '<script type="text/javascript">
						alert("栏目已存在");window.history.back();
					 </script>';
				exit;
			}
		return true;
	}

	protected function upColun($data, $id)
	{
		$sel = $this->Mysql->table('tb_category')->where('id = '.'"'.$id.'"')->update($data);
		if ($sel) {
			echo '<script type="text/javascript">
						alert("栏目修改成功");window.open("index.php?m=Logl_colun&a=index","main");
					 </script>';
			exit;
		}
	}
}