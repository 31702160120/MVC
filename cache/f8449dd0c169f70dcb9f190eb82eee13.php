<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>茂名职业技术学院-国际教育合作</title>
<link href="./public/html/css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<iframe name="toppage" width=100% height=250px marginwidth=0 marginheight=0 frameborder="no" border="0"  src="index.php?m=Top" ></iframe> 

<div id="list_mainArea">
<!--网页的内容区start-->
	<div id="list">
     <!--左侧快速导航start-->
    	<div id="list_title">
         栏目导航        
        </div>
        <div id="list_item" class="list_item">
        <UL>
           <?php foreach($data as $value): ?>
        	<LI><a href="index.php?m=Show&cid=<?=$value['categoryId'];?>" id="n2"  target="_parent">
          <?=$value['categoryName'];?></a></LI>
           <?php endforeach ?>
          </UL>
        </div>
    <!--内容列表左侧快速导航end-->
    </div>
    <div id="list_content">
    <!--内容列表start-->
    	<div id="rows01" class="list_content">
        	<div id="news_title" class="title"><?=$Column;?></div>
            <div id="news_content">
              <?php if (!empty($detail)) { ?>
            	<ul>
                 <?php foreach($detail as $value): ?>   
                    <li>
                      <div id="news" class="news"><a href="index.php?m=News&id=<?=$value['id'];?>" target="view_window" >
                      <?=$value['title'];?></a></div>
                      <div id="newsDate" class="newsDate"><?=$value['publishTime'];?></div>
                    </li>
                  <?php endforeach ?>
			       </ul>
            <?php } ?>
            </div>
            <div id="page" class="page">共有<?=$Total;?>条信息页次: <?=$present;?>/<?=$chief;?>
            	【<a href="<?=$first;?>">首页</a>】
            	【<a href="<?=$prev;?>">上一页</a>】
            	【<a href="<?=$next;?>">下一页</a>】
            	【<a href="<?=$end;?>">最末页</a>】</div>
      </div>	
    <!--内容列表end-->
    </div>
   
<!--网页的内容区end-->
</div>
<?php include "./cache/c5b9084c825b7033e0857952aa2ecc6c.php" ?>
</body>
</html>
