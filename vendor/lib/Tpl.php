<?php
namespace framework;
class Tpl
{
	protected $viewDir = './app/view'; //模板文件路径
	protected $cacheDir = './cache'; //生成缓存文件路径
	protected $lifeTime = 3600; //过期时间
    protected $vars = [];	//用来存放显示变量的数组
	

	function __construct($viewDir = null, $cacheDir = null, $lifeTime = null)
	{
			//判断是否为空，如果为空，使用默认值，如果不为空判断并设置
		if (!empty($viewDir)) {
			if ($this->checkDir($viewDir)) { //判断是否为文件夹
				$this->viewDir = $viewDir;
			}
		}
			
		if (!empty($cacheDir)) {  
			if ($this->checkDir($cacheDir)) { //判断是否为文件夹
				$this->cacheDir = $cacheDir;
			}
		}
	}

	protected function checkDir($dirPath) //判断是否为文件夹
	{
		if (!file_exists($dirPath) || !is_dir($dirPath)) { //判断文件夹是否存在
			return mkdir($dirPath, 0755, true);  //不存在就创建文件夹
		}
		if (!is_writable($dirPath) || is_readable($dirPath)) {  //判断是否可读写
			return chmod($dirPath, 0755); //修改权限
		}
		return true;
	}
	
	function assign($name, $value) //分配变量的方法  以键值对方式储存
	{
		$this->vars[$name] = $value;
	}

	//展示缓存文件方法$viewName:模板文件名, $isInclude：模板文件是只要编译还是要先编译再包含,$uri：为了让缓存的文件名不重复将文件名和uri拼接起来再md5一下，生成缓存的文件夹
	function display($viewName, $isInclude = true, $uri = null)  
	{
		//拼接模板文件的全路径
		$viewPath = rtrim($this->viewDir, '/').'/'.$viewName;  //去掉变量中的/再拼接/给他
		if (!file_exists($viewPath)) {  //判断模板文件是否存在
			die('模板文件不存在');
		}
		//拼接缓存文件的全路径
		$cacheName = md5($viewName.$uri).'.php';
		$cachePath = rtrim($this->cacheDir, '/').'/'.$cacheName;
		//根据缓存文件路径，判断缓存路径是否存在
		if (!file_exists($cachePath)) {  //编译模板
			$php = $this->compile($viewPath); //编译
			file_put_contents($cachePath, $php); //写入文件，生成缓存文件
		} else{
			//如果缓存文件不存在
		//	编译模板文件，生成缓存文件
		//如果缓存文件存在，第一个，判断缓存文件是否过期
		//第二个，模板文件是否被修改过，如果修过缓存文件需要重新生成
			$isTimeout = (filectime($cachePath) + $this->lifeTime) > time() ? false : true; //缓存文件过期时间是否大于现在时间
			$ischange = filemtime($viewPath) > filemtime($cachePath) ? true : false; //模板文件是否被修改
			if ($isTimeout || $ischange) {
				$php = $this->compile($viewPath); //编译
				file_put_contents($cachePath, $php); //如果模板文件修过缓或存文件过期需要重新生成
			}
		}
		//判断缓存文件是否需要包含进来
		if ($isInclude) {
			//将变量解析出来
			extract($this->vars);
			//展示缓存文件
			include $cachePath;
		}
	}

	protected function compile($filePath) //编译HTML文件
	{
		//读取文件内容
		$html = file_get_contents($filePath);
		//正则替换
		$array =[
			'{$%%}' => '<?=$\1;?>',
			'{foreach %%}' => '<?php foreach(\1): ?>',
			'{/foreach}' => '<?php endforeach ?>',
			'{include %%}' => '',
			'{include $%%}' => '<?php include \1 ?>',
			'{if %%}' => '<?php if (\1) { ?>',
			'{/if}'  =>  '<?php } ?>',
			'{else}' => '<?php } else { ?>',
			'{src %%}' => '',
		];
		//遍历数组，将%%全部修改为.+ 如何执行正则表达式
		foreach ($array as $key => $value) {
			$pattren = '#'.str_replace('%%', '(.+?)', preg_quote($key, '#')).'#';
		if (strstr($pattren, 'include')) {
			$html = preg_replace_callback($pattren, [$this, 'parseInclude'], $html);
		} 
		if (strstr($pattren, 'src')){
			$html = preg_replace_callback($pattren, [$this, 'parsesrc'], $html);
		}else{
			$html = preg_replace($pattren, $value, $html);
		}
		}
		//返回替换后的内容
		return $html;
	} 

	protected function parseInclude($data)
	{
		$fileName = trim($data[1],'\'"'); //将文件名两边的引号去掉
		$this->display($fileName, false); //然后不包括文件生成缓存
		$cacheName = md5($fileName).'.php'; //拼接缓存文件全路径
		$cachePath = rtrim($this->cacheDir, '/').'/'.$cacheName;
		return '<?php include "'.$cachePath.'" ?>';
	}

	protected function parsesrc($data)
	{
		$fileName = trim($data[1], '\'"');
		$fileName = "backstage/".$fileName;
		$this->display($fileName, false);
		$cacheName = md5($fileName).'.php'; //拼接缓存文件全路径
		$cachePath = rtrim($this->cacheDir, '/').'/'.$cacheName;
		return $cachePath; 
	}
}
