<?php
namespace controller;
use \framework\Model;
use \framework\islogin;
/**
 * 
 */
class LonewsController extends Controller
{
	protected $Mysql;
	protected $cid;
	protected $title;
	protected $keywords;
	protected $author;
	protected $content;

	function index()
	{
		$this->display('backstage/change_news.html');
	}
	
	function __construct()
	{
		$is = new islogin();
		$base = $GLOBALS['base'];
		$this->islink($base);
		$id = $_GET['id'];
		$this->selNews($id);
		$this->selColun();
		if (isset($_POST['ok'])) {
			$this->selNull();
		}
		if(isset($_POST['guan'])){
			header('Location:index.php?m=Logl_news&cid='.$this->cid);
		}
	}

	protected function islink($base)
	{
		$this->Mysql = new Model($base);
	}

	protected function selNews($id)
	{
		$sel = $this->Mysql->table('tb_news')->where('id = '.'"'.$id.'"')->select();
		if ($sel) {
			foreach ($sel as  $value) {
				$this->cid = $value['categoryId'];
				$this->title = $title = $value['title'];
				$this->keywords = $keywords = $value['keywords'];
				$this->author = $author = $value['author'];
				$this->content = $content = $value['content'];
			}
			$this->assign('title', $title);
			$this->assign('keywords', $keywords);
			$this->assign('author', $author);
			$this->assign('content', $content);
		}

	}

	protected function selColun()
	{
		$sel = $this->Mysql->table('tb_category')->field('categoryName,categoryId')->select();
		if ($sel) {
			foreach ($sel as $value) {
				if ($value['categoryId'] == $this->cid) {
					$value['type'] = 'selected';
				} else{
					$value['type'] = '';
				}
				$data[] = $value;
			}
			$this->assign('data', $data);
		}
	}

	protected function selNull()
	{
		$cid = $_POST['spec'];
		$title = $_POST['title'];
		$keywords = $_POST['keywords'];
		$author = $_POST['author'];
		@$content = $_POST['content'];
		if ($title != $this->title) {
			$this->selecttitle($title);
		}
		if ($keywords != $this->keywords) {
			$this->selectkeywords($keywords);
		}
		if ($content != $this->content) {
			$this->selectcontent($content);
		}
		$this->updateNews($cid, $title, $keywords, $author, $content);
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

	protected function updateNews($cid, $title, $keywords, $author, $content)
	{
		$id = $_GET['id'];
		$data = ['categoryId' => $cid, 'title' => $title, 'keywords' => $keywords, 'author' => $author,
			 'content' => $content, 'publishTime' => time()];
		$sel = $this->Mysql->table('tb_news')->where('id = '.'"'.$id.'"')->update($data);
		if ($sel) {
			echo '<script type="text/javascript">
						alert("修改成功");window.open("index.php?m=Logl_news&cid='.$cid.'","main");
					 </script>';
			exit;
		}else{
			echo '<script type="text/javascript">
						alert("修改失败");window.history.back();
					 </script>';
			exit;
		}
	}

}