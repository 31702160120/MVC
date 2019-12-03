<?php
class Psr4aAutoLoad
{
	protected $maps = []; //命名空间映射
	function __construct()
	{
		spl_autoload_register([$this, 'autoload']); //使用不存在类创建对象时自动调用 把类信息传进去

	}

	function autoload($className)  //自己写的自动加载函数
	{
		//完整的类名由命名空间名和类名组成
		//得到命名空间名，根据命名空间名得到其目录路径
		$pos = strrpos($className, '\\');
		$namespace = substr($className, 0, $pos);
		//得到类名
		$realClass = substr($className, $pos + 1);
		//找到文件并包含进来
		$this->mapLoad($namespace, $realClass);
	}

	protected function mapLoad($namespace, $realClass) //根据命名空间名得到目录路径并拼接真正的文件全路径
	{
		if (array_key_exists($namespace, $this->maps)){
			$namespace = $this->maps[$namespace];
		}
		//处理路径
		$namespace = rtrim(str_replace('\\/', '/', $namespace), '/').'/';
		//拼接文件全路径
		$filePath = $namespace.$realClass.'.php';
		//将该文件包含进来
		if (file_exists($filePath)) {
			include $filePath;
		} else{
			die('该文件不存在');
		}
	}

	function addMaps($namespace, $path) //给一个命名空间给一个路径把命名空间映射到数组中
	{
		if (array_key_exists($namespace, $this->maps)) {
			die('此命名空间已经映射过');
		}
		//将命名空间和路径以键值对形式保存到数组中
		$this->maps[$namespace] = $path;
	}
}