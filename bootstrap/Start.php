<?php
class Start
{
	//用来保存自动加载对象
	static public $auto;

	static function init()
	{
		self::$auto = new Psr4aAutoLoad();
	}

	static function router() //路由方法
	{
		//从url中获取要执行哪个控件中的哪个方法
		$m = empty($_GET['m']) ? 'index' : $_GET['m'];  //没有默认值为index
		$a = empty($_GET['a']) ? 'index' : $_GET['a'];
		//始终保持get参数中有值
		$_GET['a'] = $a;
		$_GET['m'] = $m;
		//处理index
		$m = ucfirst(strtolower($m));
		//拼接带有命名空间的类名
		$controller = 'controller\\'.$m.'Controller';
		//创建对象并执行
		$obj = new $controller();
		call_user_func([$obj, $a]);
	}
}

	Start::init();
	