<?php
namespace controller;
use \framework\Model;

class LoindexController extends controller
{
	protected $Mysql;

	function index()
	{
		$this->display('backstage/login.html');
	}

	function __construct()
	{
		session_start();
		$base = $GLOBALS['base'];
		$this->islink($base);
		if (isset($_POST['submit'])) {
			$this->check();
		}
	}

	protected function check()
	{
		$code = $_POST['code'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = '"'.md5($password).'"';
		$this->iscode($code);
		$this->isNme($username);
		$this->ispwd($username, $password);
	}

	protected function iscode($code)
	{
		if(strtolower($code)<>strtolower($_SESSION["code"])){
			echo '<script type="text/javascript">alert("验证码不正确！");window.history.back();</script>';
			exit;
		}
	}

	protected function isNme($username)
	{
		$username = '"'.$username.'"';
		$sel = $this->Mysql->table('tb_users')->where('username = '.$username)->select();
		if (empty($sel)) {
			echo '<script type="text/javascript">alert("账户不存在！");window.history.back();</script>';
			exit;
		}
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function ispwd($username, $password)
	{
		$sel = $this->Mysql->table('tb_users')->where('username = '.'"'.$username.'"'.' and '.'password = '.$password)->select();
		if (empty($sel)) {
			echo '<script type="text/javascript">alert("密码错误!");window.history.back();</script>';
			exit;
		}else{
			$_SESSION['username'] = $username;
			$_SESSION['islogin'] = true;
			header('Location:index.php?m=Lohome');
			exit;
		}
	}
}

