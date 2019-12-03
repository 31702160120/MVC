<?php
namespace framework;
header("content-type:text/html;charset=utf-8");
$a = new islogin();
class islogin
{
	public function  __construct(){
		if(!session_id()) session_start();
		if(!isset($_SESSION['username']) || $_SESSION['islogin']==FALSE){
		echo '<script language="JavaScript">alert("请先登录");window.open("index.php?m=Loindex","_top");</script>';
		exit;
		}
	}
}
