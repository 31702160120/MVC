<?php
/**
 * Created by PhpStorm.
 * User: 2233
 * Date: 2019/1/26
 * Time: 11:15
*/
namespace framework;
class page
{
    protected $number;              //每页显示多少条数据
    protected $totalCount;          //一个有多少条数据
    protected $page;                //当前页数
    protected $totalPage;           //总页数
    protected $url;                 //URL

    public function __construct($number,$totalCont)
    {
        $this->number = $number;
        $this->totalCount = $totalCont;
        $this->totalPage = $this->getTotalPage();       //得到总页数
        $this->page = $this->getPage();                 //当前页数
        $this->url = $this->getUrl();                   //得到url
    }

    protected function getTotalPage()                      //总页数
    {
        return ceil($this->totalCount / $this->number);  //总数据/每页显示数 向上取整
    }

    protected function getPage()                        //当前页数
    {
        if (empty($_GET['page'])){                      // $_GET['page'] 等于空时为第一页
            $page = 1;
        }else if ($_GET['page'] > $this->totalPage){    // $_GET['page'] 大于最大页数时为最大页
            $page = $this->totalPage;
        }else if($_GET['page'] < 1){                    // $_GET['page'] 小于1时为第一页
            $page = 1;
        }else{                                          // $_GET['page'] 等于page时为本身
            $page = $_GET['page'];
        }
            return $page;
    }

    protected function getUrl()
    {
        $scheme = $_SERVER["REQUEST_SCHEME"];       //得到协议名
        $host = $_SERVER['SERVER_NAME'];            //得到主机名
        $port = $_SERVER['SERVER_PORT'];            //得到端口号
        $uri = $_SERVER['REQUEST_URI'];             //得到路径和请求字符串
        //清空出现在url里的page参数
        $uriArray = parse_url($uri);
        $path = $uriArray['path'];
        if(!empty($uriArray['query'])){
            parse_str($uriArray['query'],$array);     //首先将请求字符串变为关联数组
            unset($array['page']);                    //清除关联数组中page的参数
            $query = http_build_query($array);        //将剩下的参数拼接为请求字符串
            if ($query != ''){                        //将请求字符串拼接到路径后
                $path = $path.'?'.$query;
            }
        }
            return $scheme.'://'.$host.':'.$port.$path;
    }
	

    public function allUrl()
    {
		return[
		   'first' =>  $this->first(),
           'prev' =>  $this->prev(),
           'next' =>  $this->next(),
           'end'  =>  $this->end(),
        ];
    }

    protected function setUrl($str)         //判断url后是否有？
    {
        if (strstr($this->url,'?')){
            $url = $this->url.'&'.$str;     //有接&
        }else{
            $url = $this->url.'?'.$str;     //没有接?
        }
            return $url;
    }

    public function first()         //第一页
    {
		return $this->setUrl('page=1');
    }

    public function next()          //下一页
    {
        //根据单前page判断下一页
        if($this->page + 1 > $this->totalPage){
            $page = $this->totalPage;           //大于最大页等于最大页
        }else{
            $page = $this->page+1;
        }
            return $this->setUrl('page='.$page);
    }

    public function prev()            //上一页
    {
        if($this->page - 1 < 1){
            $page = 1;               //小于1就等于1
        }else{
            $page = $this->page - 1;
        }
            return $this->setUrl('page='.$page);
    }

    public function end()   //尾页
    {
        return $this->setUrl('page='.$this->totalPage);
    }
	
	public function limit()  //每页显示多少条数据
	{
		//limt 0,5
		$offset = ($this->page - 1) * $this->number;	
		return $offset.','.$this->number;
	}

     public function current()
    {
        return $this->page;
    }

    public function total()
    {
        return $this->getTotalPage();
    }
}
