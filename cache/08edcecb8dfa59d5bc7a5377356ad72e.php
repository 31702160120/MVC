<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>茂名职业技术学院计算机工程系欢迎您！</title>
<link href="./public/html/css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
<iframe name="toppage" width=100% height=250px marginwidth=0 marginheight=0 frameborder="no" border="0"  src="index.php?m=Top" ></iframe> 
<div id="mainArea">
<!--网页的内容区start-->
	<div id="col01">
    	<div id="left_rows01" class="jw_content"><!--图片切换新闻-->
        <div id="picNews_title" class="title">图片新闻</div>
            <div id="picNews_content">
       <!-- <img src="images/temp_photo.JPG" width="309" height="246" />-->
       <!--图片切换start-->
        <script type="text/javascript">
                 var pic_width=290
                 var pic_height=230
                 var text_height=0
                 var swfpath = './public/html/fla/picviewer.swf'
                 var swf_height = pic_height+text_height
var pics='./public/html/img/1.jpg|./public/html/img/2.jpg|./public/html/img/3.jpg|./public/html/img/4.jpg|./public/html/img/5.jpg'
                 var links='#|#|#|#|#'
                 var texts='baidu|google'
                 document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');
                 document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="'+swfpath+'"><param name="quality" value="high"><param name="bgcolor" value="#E1E7ED">');
     //设置下面的背景颜色
                 document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
                 document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+pic_width+'&borderheight='+pic_height+'&textheight='+text_height+'">');
                 document.write('<embed src="'+swfpath+'" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+pic_width+'&borderheight='+pic_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ pic_width +'" height="'+ pic_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>');
</script>
       <!--图片切换end-->
       
       
        </div>
        </div>
        <div id="left_rows02" class="jw_content">
        	<div id="edu_title" class="title"><div class="title_content">教学科研</div><div id="more" class="more">
        		<a href="index.php?m=Show&cid=02">更多>></a></div></div>
            <div id="edu_content">
            	<ul>
                    <li>
                    	<?php foreach($data3 as $value): ?>
                    <li><div id="news" class="news"><a href="index.php?m=News&id=<?=$value['id'];?>"><?=$value['title'];?></a> </div>
                    <div id="newsDate" class="newsDate"><?=$value['publishTime'];?></div></li>
					 <?php endforeach ?>
                    </li>
				</ul>
            </div>
        </div>
    </div>
    <div id="col02">
    <!--新闻动态start--> 		
    	<div id="mid_rows01" class="news_content">
        	<div id="news_title" class="title"><div class="title_content">系部新闻</div><div id="more" class="more">
        		<a href="index.php?m=Show&cid=09">更多>></a></div></div>
            <div id="news_content">
            	<ul>
					<?php foreach($data1 as $value): ?>
                    <li><div id="news" class="news"><a href="index.php?m=News&id=<?=$value['id'];?>"><?=$value['title'];?></a> </div>
                    <div id="newsDate" class="newsDate"><?=$value['publishTime'];?></div></li>
					 <?php endforeach ?>
                </ul>
            </div>
        </div>	
        <div id="mid_rows02" class="news_content">
        	<div id="news_title" class="title"><div class="title_content">招生就业</div><div id="more" class="more">
        		<a href="index.php?m=Show&cid=05">更多>></a></div></div>
            <div id="news_content">
            	<ul>
                   <?php foreach($data4 as $value): ?>
                    <li><div id="news" class="news"><a href="index.php?m=News&id=<?=$value['id'];?>"><?=$value['title'];?></a> </div>
                    <div id="newsDate" class="newsDate"><?=$value['publishTime'];?></div></li>
					 <?php endforeach ?>
                </ul>
            </div>
        </div>	
    <!--新闻动态end-->
    </div>
    <div id="col03"><!--第三列start-->
    <div id="right_rows01" class="notice_content">
        	<div id="notice_title" class="title">通知公告<div id="more" class="more1">
        		<a href="index.php?m=Show&cid=08">更多</a></div></div>
            <div id="notice_content">
            	<ul>
                    <?php foreach($data2 as $value): ?>
                    <li><div id="news" class="news"><a href="index.php?m=News&id=<?=$value['id'];?>"><?=$value['title'];?></a> </div>
                    <div id="newsDate" class="newsDate"><?=$value['publishTime'];?></div></li>
					 <?php endforeach ?>
                </ul>
            </div>        
    </div>
    
      <div id="right_rows02" class="contact_content">
        	<div id="contact_title" class="title">联系方式</div>
            <div id="contact_content">
            <ul>
            <li>联系电话：0668-2920526</li>
            <li>传真：0668-2920526</li>
            <li>电子邮箱：mzycjb@126.com</li>
            <li>地址：茂名市文明北路232号大院</li>
            </ul>          	

            </div>        
    </div>
    
      <div id="right_rows03" class="quickLinks_content">
        	<!--<div id="frLink_title" class="title">友情链接</div>-->
            <div id="quickLinks_content">
            <ul>
            	<li>
            	  <div class="linkBtn1"><a href="#">精品课程</a></div>
            	  <div class="linkBtn2"><a href="#">分团委</a></div></li>
                <li>
                  <div class="linkBtn3"><a href="#">评建工作</a></div>
                  <div class="linkBtn4"><a href="#">学生会</a></div></li>
                <li>
                  <div class="linkBtn1"><a href="index.php?m=Loindex">管理员</a></div>
                  <div class="linkBtn2"><a href="#">青&nbsp; 协</a></div></li>
            </ul>
            	
            </div>        
    </div>
    </div>
    <?php include "./cache/c5b9084c825b7033e0857952aa2ecc6c.php" ?>
</body>
</html>
