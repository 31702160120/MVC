<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<link rel="shortcut icon" href="favicon.ico"/>
<meta name="Keywords" content="茂名职业技术学院,计算机工程系" />
<meta name="Description" content="茂名职业技术学院,计算机工程系" />
<link rel="shortcut icon" href="./public/html/favicon.ico" type="image/x-icon" />
<link href="./public/html/css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
<iframe name="toppage" width=100% height=250px marginwidth=0 marginheight=0 frameborder="no" border="0"  src="index.php?m=Top" ></iframe> 
<div id="article_mainArea">
<div id="mainbox">
<div id="position">您的位置：<a href="index.php">首页</a> > 
	<a href="index.php?m=Show&cid=<?=$Nid;?>"><?=$Column;?></a>><?=$title;?></div>
<div id="newsTitle" style="text-align: center;">
	<ul>
		<li id="news_title" class="news_title1"><?=$title;?></li>
		<li id="news_fbdate" class="news_fbdate">发布时间：<?=$time;?> 作者:<?=$author;?></li>	
	</ul>
</div>

<div id="title_line"></div>
<div id="newsContent"><?=$content;?></div>
  <div class="returnList"><a href="">返回列表</a></div>
  <!-- end #mainbox --></div>
</div>
<?php include "./cache/c5b9084c825b7033e0857952aa2ecc6c.php" ?>
</body>
</html>