<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
/**
 * 
 */
class LopwdController extends Controller
{
	protected $Mysql;

	function index()
	{
		$is = new islogin();
		$this->display('backstage/change_pwd.html');
	}
	
	function __construct()
	{
		$base = $GLOBALS['base'];
		$this->islink($base);
		session_start();
		$name = $_SESSION['username'];
		$this->assign('name', $name);
		if (isset($_POST['sub_ok'])) {
			 $old_pwd = $_POST['password1'];
			 $pwd1 = $_POST['password2'];
			 $pwd2 = $_POST['password3'];
			$this->selpwd($name, $old_pwd);
			$this->getNull($pwd1, $pwd2);
			$this->Compared($old_pwd, $pwd2);
			$this->changepwd($name, $pwd2);
		}
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selpwd($name,$pwd)
	{
		$pwd = '"'.md5($pwd).'"';
		$name = '"'.$name.'"';
		$sel = $this->Mysql->table('tb_users')->where('username = '.$name.' and '.'password = '.$pwd)->select();
		if (empty($sel)) {
			echo '<script type="text/javascript">
						alert("原密码错误");window.history.back();
				  </script>';
			exit;
		}
	}

	protected function getNull($pwd1, $pwd2)
	{
		if (!$pwd1 == 0 && !$pwd2 == 0) {
			if (empty($pwd1) && empty($pwd2)) {
			echo '<script type="text/javascript">
						alert("密码不能为空");window.history.back();
				  </script>';
			exit;
			}
		}
		if ($pwd1 != $pwd2) {
			echo '<script type="text/javascript">
						alert("密码不一致");window.history.back();
				  </script>';
			exit;
		}
	}

	protected function Compared($pwd, $pwd2)
	{
		if ($pwd == $pwd2) {
			echo '<script type="text/javascript">
						alert("新旧密码不能相同");window.history.back();
				  </script>';
			exit;
		}
	}

	protected function changepwd($name, $pwd)
	{
		$pwd = md5($pwd);
		$data = ['password' => $pwd];
		$sel = $this->Mysql->table('tb_users')->where('username = '.'"'.$name.'"')->update($data);
		if ($sel) {
			$_SESSION['username'] = [];
			$_SESSION['islogin'] = FALSE;
			session_unset();
			session_destroy();
			echo '<script type="text/javascript">
						alert("密码修改成功请重新登录");window.open("index.php?m=Loindex","_top");
				  </script>';
			exit;
		} else{
			echo '<script type="text/javascript">
						alert("密码修改失败");window.history.back();
				  </script>';
			exit;
		}
	}
}
