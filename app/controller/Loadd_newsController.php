<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
/**
 * 
 */
class Loadd_newsController extends Controller
{
	protected $Mysql;
	
	function index()
	{
		$is = new islogin();
		$this->display('backstage/add_news.html');
	}


	function __construct()
	{
		$base = $GLOBALS['base'];
		$this->islink($base);
		$cid = $_GET['cid'];
		$this->selColun($cid);
		session_start();
		$name = $_SESSION['username'];
		$this->assign('name', $name);
		if (isset($_POST['ok'])) {
			$title = $this->getNull($_POST['title']);
			$keywords =  $this->getNull($_POST['keywords']);
			$author =  $this->getNull($_POST['author']);
			@$content =  $this->getNull($_POST['content']);
			$this->selecttitle($title);
			$this->selectkeywords($keywords);
			$this->selectcontent($content);
			$data = ['categoryId' => $cid, 'title' => $title, 'keywords' => $keywords, 'author' => $author,
			 'content' => $content, 'publishTime' => time()];
			$this->insertNews($data, $cid);
		}
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selColun($cid)
	{
		$sel = $this->Mysql->table('tb_category')->field('categoryName')->where('categoryId = '.'"'.$cid.'"')->select();
		if ($sel) {
			foreach ($sel as $value) {
				$clun =	$value['categoryName'];
			}
			$colun = $clun;
			$this->assign('colun', $colun);
		}
	}

	protected function getNull($name)
	{
		if (empty($name)) {
			echo '<script type="text/javascript">alert("还有地方没填!");window.history.back();</script>';
			exit;
		}
		return $name;
	}

	protected function selecttitle($title)
	{
		
		$sel = $this->Mysql->table('tb_news')->where('title ='.'"'.$title.'"')->select(false);
		if (!empty($sel)) {
				echo '<script type="text/javascript">
						alert("标题已存在");window.history.back();
					 </script>';
				exit;
		}
	}

	protected function selectkeywords($keywords)
	{
		$sel = $this->Mysql->table('tb_news')->where('keywords ='.'"'.$keywords.'"')->select(false);
		if (!empty($sel)) {
				echo '<script type="text/javascript">
						alert("关键字已存在");window.history.back();
					 </script>';
				exit;
		}
	}

	protected function selectcontent($content)
	{
		$sel = $this->Mysql->table('tb_news')->where('content ='.'"'.$content.'"')->select(false);
		if (!empty($sel)) {
				echo '<script type="text/javascript">
						alert("内容已存在");window.history.back();
					 </script>';
				exit;
		}
	}

	protected function insertNews($data, $cid)
	{
		$sel = $this->Mysql->table('tb_news')->insert($data);
		if ($sel) {
			echo '<script type="text/javascript">
						alert("新闻添加成功");window.open("index.php?m=Logl_news&cid='.$cid.'","main");
					 </script>';
			exit;
		} else{
			echo '<script type="text/javascript">
						alert("添加失败");window.history.back();
					 </script>';
			exit;
		}
	}
}