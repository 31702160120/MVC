<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
class Logl_nameController extends Controller
{
	protected $Mysql;

	function index()
	{
		$is = new islogin();
		$this->display('backstage/glname.html');
	}

	function __construct()
	{
		$base = $GLOBALS['base'];
		$this->islink($base);
		$this->selname();
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	function delete()
	{
		$id = $_GET['id'];
		session_start();
		$name = $_SESSION['username'];
		if ($id != $this->addid($name)) {
			$sel = $this->Mysql->table('tb_users')->where('id = '.'"'.$id.'"')->delete();
			if ($sel) {
				echo '<script type="text/javascript">
						alert("删除账户成功");window.open("index.php?m=Logl_name","main");
					 </script>';
				exit;
			}else{
				echo '<script type="text/javascript">
						alert("删除失败");window.open("index.php?m=Logl_name","main");
					 </script>';
				exit;
			}
		} else{
			echo '<script type="text/javascript">
					alert("不能删除当前账户");window.open("index.php?m=Logl_name","main");
				 </script>';
			exit;
		}
	}
	
	
	protected function selname()
	{
		$sel = $this->Mysql->table('tb_users')->select();
		if ($sel) {
			$data = $sel;
			$this->assign('data', $data);
		}
	}

	function Reset()
	{
			$id = $_GET['id'];
			$pwd = md5("1111");
			$data =['password' => $pwd];
			$sel = $this->Mysql->table('tb_users')->where("id = ".'"'.$id.'"')->update($data);
			if ($sel) {
				session_start();
				$name = $_SESSION['username'];
				if ($id != $this->addid($name)) {
					echo '<script type="text/javascript">
							alert("密码重置成功重置密码为： 1111");window.open("index.php?m=Logl_name","main");
						 </script>';
					exit;
				}else{
					$_SESSION['username'] = [];
					$_SESSION['islogin'] = FALSE;
					session_unset();
					session_destroy();
					echo '<script type="text/javascript">
							alert("本账户已被重置请重新登录");window.open("index.php?m=Loindex","_top");
						 </script>';
					exit;
				}
			}else{
				echo '<script type="text/javascript">
						alert("密码已经是重置状态");window.open("index.php?m=Logl_name","main");
					 </script>';
				exit;
			}
	}

	protected function addid($name)
	{
		$sel = $this->Mysql->table('tb_users')->field('id')->where("username = ".$name)->select();
		if ($sel) {
		$id = $sel[0]['id'];
		return $id;
		}
	}
}