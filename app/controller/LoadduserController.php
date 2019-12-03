<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
class LoadduserController extends Controller
{
	protected $Mysql;

	function index()
	{
		$this->display('backstage/add_User.html');
	}

	function __construct()
	{
		$is = new islogin();
		$base = $GLOBALS['base'];
		$this->islink($base);
		if (isset($_POST['sub_ok'])) {
			$username = $_POST['username'];
			$pwd1 = $_POST['password1'];
			$pwd2 = $_POST['password2'];
			$this->contrastpwd($pwd1, $pwd2);
			$this->checkname($username);
			$this->addname($username, $pwd2);
		}
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function contrastpwd($name1, $name2)
	{
		if ($name1 != $name2) {
			echo '<script type="text/javascript">alert("两次输入密码不一致!");window.history.back();</script>';
			exit;
		}
	}

	protected function checkname($username)
	{
		$sel = $this->Mysql->table('tb_users')->where('username ='.'"'.$username.'"')->select();
		if ($sel) {
			echo '<script type="text/javascript">alert("账户已存在!");window.history.back();</script>';
			exit;
		}
	}

	protected function addname($username, $password)
	{
		$password = md5($password);
		$data = ['username' => $username, 'password' => $password];
		$sel = $this->Mysql->table('tb_users')->insert($data);
		if ($sel) {
		echo '<script type="text/javascript">alert("账户添加成功");window.open("index.php?m=Lohome","_top");</script>';
			exit;
		}else{
			echo '<script type="text/javascript">alert("添加失败!");window.history.back();</script>';
			exit;
		}
	}


}