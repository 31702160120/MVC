<?php
namespace framework;		
class Model
{
	protected $host; //主机名
	protected $user; //用户名
	protected $pwd; //密码
	protected $dbname; //数据库名
	protected $charset;//字符集

	protected $prefix; //数据表前缀
	public $link; //数据库链接资源
	protected $tableName; //数据表名

	protected $sql; //sql语句
	protected $options; //操作数组  所有查询条件


	function __construct($config) //构造方法,初始化变量
	{
		$this->host = $config['DB_HOST'];
		$this->user = $config['DB_USER'];
		$this->pwd = $config['DB_PWD'];
		$this->dbname = $config['DB_MAME'];
		$this->charset = $config['DB_CHARSET'];
		$this->prefix = $config['DB_PREFIX'];

		//链接数据库
		$this->link = $this->connect();
		//得到数据表名
		$this->tableName = $this->getTableName();
		//初始化options数组
		$this->initOptions();
	}

	protected function connect()
	{
		$link = mysqli_connect($this->host, $this->user, $this->pwd); //链接数据库
		if (!$link) {
			die('数据库链接失败');
		}
		mysqli_select_db($link, $this->dbname); //选择数据库
		mysqli_set_charset($link, $this->charset); //选择字符集
		return $link; //返回链接成功的资源
	}

	protected function getTableName()  //得到表名
	{
		//设置了成员变量为表明
		if (!empty($this->tableName)) {
			return $this->prefix.$this->tableName;
		}
		//没有设置成员属性为表明 以类名得到   所以子类起名规范为  表明+Modwl  如user表   为 UserModel
		$className = get_class($this); //得到当前类名
		$table = strtolower(substr($className, 0, -5)); //到后5个停止 转化为小写
		return $this->prefix.$table;
	}

	protected function initOptions()
	{
		$arr = ['field', 'table', 'where', 'group' , 'having', 'order' , 'limit'];
		foreach ($arr as $value) {
			$this->options[$value] = '';
			if ($value == 'table') {
				$this->options['value'] = $this->tableName; //将table默认设置为tableName
			}else if($value =  'field'){
				$this->options[$value] = '*';
			}
		}
	}
	
	function field($field) //field方法
	{	//如果不为空，再进行处理
		if (!empty($field)) { //字符串
			if (is_string($field)) {
				$this->options['field'] = $field;
			} else if (is_array($field)) { //数组
				$this->options['field'] = join(',', $field);
			}
		}
		return $this;
	}
	  
	 function table($table) //table方法
	{
		if (!empty($table)) { //不为空
			$this->options['table'] = $table;
		}
		return $this;
	}

	function where($where) //where方法
	{
		if (!empty($where)) { //不为空
			$this->options['where'] = 'where '.$where;
		}
		return $this;
	}

	function group($group) //group方法
	{
		if (!empty($group)) { //不为空
			$this->options['group'] = 'group by'.$group;
		}
		return $this;
	}
	
	function having($having)	//having方法
	{
		if (!empty($having)) { //不为空
			$this->options['having'] = 'having'.$having;
		}
		return $this;
	}
	
	function order($order) //order方法
	{
		if (!empty($order)) { //不为空
			$this->options['order'] = 'order by '.$order;
		}
		return $this;
	}

	function limit($limit) //limit方法
	{
		if (!empty($limit)) { //不为空
			if(is_string($limit)){
				$this->options['limit'] = 'limit '.$limit;
			}else if(is_array($limit)){
				$this->options['limit'] = 'limit '.join(',', $limit);
			}
		}
		return $this;
	}
	
	function select($isInsert = true) //select方法
	{
		//先预写一个带占位符的sql语句
		$sql = 'select %FIELD% from %TABLE% %WHERE% %GROUP% %HAVING% %ORDER% %LIMIT%';
		//将options中对应的值依次替换上面占位符
		$sql = str_replace(['%FIELD%', '%TABLE%', '%WHERE%', '%GROUP%', '%HAVING%', '%ORDER%', '%LIMIT%'],
		 [$this->options['field'], $this->options['table'], $this->options['where'], $this->options['group'],
		 		 $this->options['having'], $this->options['order'], $this->options['limit']], $sql);
		//保存一份sql语句
		$this->sql = $sql;
		//执行sql语句
		if (!$isInsert) {
			return $this->exec($sql);
		}
		return $this->query($sql);
	}


	function query($sql) //query方法 查询
	{	
		$this->initOptions(); //清空数组中的值
		$result =mysqli_query($this->link, $sql);
		if ($result && mysqli_affected_rows($this->link)) {
			while ($data = mysqli_fetch_assoc($result)) {
				$newData[] = $data;
			}
			return $newData;
		}
		return false;	
	}

	function exec($sql, $isInsert = false) //exec方法
	{
		$this->initOptions(); //清空数组中的值
		$result = mysqli_query($this->link, $sql);
		//判断是否是插入语句
		if ($result && mysqli_affected_rows($this->link)) {
			if ($isInsert) {
				return mysqli_insert_id($this->link); //返回id
			} else{
				return mysqli_affected_rows($this->link); //返回受影响行数
			}
		}
		return false;
	}
	
	function getsql()
	{	
		return $this->sql;
	}

	function insert($data)  //增  数组  键：字段名  值：字段值
	{
		//处理值是字符串问题 需要添加引号
		$data = $this->parseValue($data);
		//提取所以的键既所有的字段
		$keys = array_keys($data);
		//提取所有的值
		$values = array_values($data);
		//增加数据的sql语句
		$sql = 'insert into %TABLE%(%FIELD%) values (%VALUES%)';
		$sql = str_replace(['%TABLE%', '%FIELD%', '%VALUES%'],
			[$this->options['table'], join(',', $keys), join(',', $values)], $sql);
		$this->sql = $sql;
		return $this->exec($sql, true);
	}

	protected function parseValue($data)   //处理值是字符串问题 值是字符串需要添加引号
	{
		foreach ($data as $key => $value){
			if(is_string($value)){
				$value = '\''.$value.'\'';  //是字符串添加引号
			}
			$newData[$key] = $value;
		}
		return $newData;
	}

	function delete()	//删除
	{
		$sql = 'delete from %TABLE% %WHERE%';
		$sql = str_replace(['%TABLE%', '%WHERE%'],[$this->options['table'], $this->options['where']],$sql);
		$this->sql = $sql;
		return $this->exec($sql);
	}

	function update($data) //修改
	{
		//处理字符串引号
		$data = $this->parseValue($data);
		//将关联数组拼接为 键=值
		$value = $this->parseUpdata($data);
		$sql = 'update %TABLE% set %VALUE% %WHERE%';
		$sql = str_replace(['%TABLE%', '%VALUE%', '%WHERE%'], [$this->options['table'], $value, $this->options['where']], $sql);
		$this->sql = $sql;
		return $this->exec($sql);
	}

	function parseUpdata($data)
	{
		foreach($data as $key => $value){
			$newData[] = $key.'='.$value;
		}
		return join(',', $newData); //把数组元素拼接成字符串
	}

	function max($field) //max函数
	{
		$result = $this->field('max('.$field.') as max')->select();
		//select方法返回的是二维数组
		return $result[0]['max'];
	}

	function __destruct()
	{	

		mysqli_close($this->link); //关闭数据库
	}

	function __call($name, $args)  //getByName
	{
		//获取前五个字符
		$str = substr($name, 0, 5);
		//获得后面字段名
		$field = strtolower(substr($name, 5));
		if ($str = 'getBy') {
			return $this->where($field.'="'.$args[0].'"')->select();
		}
		return false;
	}
}
?>