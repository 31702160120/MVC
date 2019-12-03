<%@ page contentType="text/html; charset=GBK"%>
<%@ taglib uri="/cms4j" prefix="cms4j" %>
<%@ taglib uri="/oscache" prefix="cache" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT src="js/ScrollPic.js" type=text/javascript></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="description" content="会计电算化精品课程" />
<meta name="keywords" content="会计 电算化 会计电算化 精品课程 课程 精品 手工会计 茂名 职业技术 学院 " />
<link rel="stylesheet" type="text/css" href="css/PublicCSS.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/nav.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
<link href="css/css.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="js/menu.js"></script><!--头部导航js-->
<script language="javascript" type="text/javascript">
/*头部导航js*/
$(document).ready(function(){
	$(".mainNav a").mouseover(function(){
		$(".mainNav a").attr("class","");
		$("#"+this.id).attr("class","actived");
		var currentMenuNo = parseInt(this.id.substring(1));
		$(".secondNav div").each(function(){
			$(this).hide();
			$("#subNav"+currentMenuNo).show();
		});
	});
});
</script>
<script>
/*新闻图片切换js*/
$(function(){
	var index2 = 0;
	var timer2;
	var len2 = $("#pic_list1 li").length;
	
	for(i=0;i<len2;i++)
	{
		$("#num_list1").html($("#num_list1").html()+"<li>"+(i+1)+"</li>");
	}
	
	$("#num_list1 li").click(function(){
		index2 = $("#num_list1 li").index(this);
		showPic2(index2);
	}).eq(0).click();
	
	$("#box2").hover(function(){
		clearInterval(timer2);
	},function(){
		timer2 = setInterval(function(){
			showPic2(index2);
			index2++;
			if(index2==len2){index2=0;}
		},3000)
	}).trigger("mouseleave");
	
	function showPic2(index2){
		$("#num_list1 li").removeClass("active").eq(index2).addClass("active");
		$("#pic_list1 li").eq(index2).stop(true,true).fadeIn(600).siblings("li").fadeOut(600);
	};
});
</script>
<script>
$(document).ready(function (){

	//rotation speed and timer
	var speed = 5000;  //滚动速度，越小越快
	var run = setInterval('rotate()', speed);	
	
	//grab the width and calculate left value
	var item_width = $('#slides li').outerWidth(); 
	var left_value = item_width * (-1); 
        
    //move the last item before first item, just in case user click prev button
	$('#slides li:first').before($('#slides li:last'));
	
	//set the default item to the correct position 
	$('#slides ul').css({'left' : left_value});

    //if user clicked on prev button
	$('#prev').click(function() {

		//get the right position            
		var left_indent = parseInt($('#slides ul').css('left')) + item_width;

		//slide the item            
		$('#slides ul:not(:animated)').animate({'left' : left_indent}, 200,function(){    

            //move the last item and put it as first item            	
			$('#slides li:first').before($('#slides li:last'));           

			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});

		//cancel the link behavior            
		return false;
            
	});

 
    //if user clicked on next button
	$('#next').click(function() {
		
		//get the right position
		var left_indent = parseInt($('#slides ul').css('left')) - item_width;
		
		//slide the item
		$('#slides ul:not(:animated)').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
			$('#slides li:last').after($('#slides li:first'));                 	
			
			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});
		         
		//cancel the link behavior
		return false;
		
	});        
	
	//如果鼠标悬停时，暂停自动旋转，否则旋转
	$('#slides').hover(
		
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	); 
        
});

//一个简单的函数点击下一个链接
//定时器将调用这个函数，并开始旋转
function rotate() {
	$('#next').click();
}   
</script>
</head>

<body>

<div id="allweb">
  <div class="header_nav"><h1>您好,&nbsp;&nbsp;欢迎来到茂名职业技术学院&nbsp;&nbsp;会计电算化精品课程！</h1><h2><a href="#">设为首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">加入收藏</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.mmvtc.cn/" target="_blank">学院首页</a></h2></div>
  <div class="header">
     <embed height="210" type=application/x-shockwave-flash 
	 pluginspage=http://www.macromedia.com/go/getflashplayer width=100%
     src="images/header.swf" quality="high" wmode="transparent"></embed>
  </div>
  

  <!--头部导航开始-->
      <div class="navi">
        <div class="padder">
      
            <div class="nav">              
              <div class="mainNav">
               <UL>
                <LI><a href="javascript:void(null)" id="n1" class="actived" title="会计电算化精品课程首页" target="_parent">首页</a></LI>
                <LI><a href="javascript:void(null)" id="n2" title="课程设置" target="_parent">课程设置</a></LI>
                <LI><a href="javascript:void(null)" id="n3" title="教学内容 target="_parent"">教学内容</a></LI>
                <LI><a href="javascript:void(null)" id="n4" title="教学方法与手段" target="_parent">教学方法与手段</a></LI>
                <LI><a href="javascript:void(null)" id="n5" title="教学队伍" target="_parent">教学队伍</a></LI>
                <LI><a href="javascript:void(null)" id="n6" title="实践条件" target="_parent">实践条件</a></LI>
                <LI><a href="javascript:void(null)" id="n7" title="教学效果" target="_parent">教学效果</a></LI>
                <LI><a href="javascript:void(null)" id="n8" title="特色及政策支持" target="_parent">特色及政策支持</a></LI>
                <LI><a href="javascript:void(null)" id="n9" title="课程申报" target="_parent">课程申报</a></LI>
               </UL>
              </div>             
           </div>
          
          <div class="secondNav">
            <div id="subNav1" class="subNav1">&nbsp;&nbsp;欢迎您来到会计电算化精品课程!<span style="margin-left:560px;">今日是&nbsp;&nbsp;<script src="js/date.js" type="text/javascript"></script></span>
            </div>
            <div id="subNav2" class="subNav2">
			<cms4j:class id="2358">
        <cms4j:class node_id="kjdsh" parent_class="2358" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
			
       
            </div>
            <div id="subNav3" class="subNav3"> 
					<cms4j:class id="2359">
        <cms4j:class node_id="kjdsh" parent_class="2359" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
        
            </div>
            <div id="subNav4" class="subNav4"> 
					<cms4j:class id="2360">
        <cms4j:class node_id="kjdsh" parent_class="2360" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
      
              </div>
            <div id="subNav5" class="subNav5">
					<cms4j:class id="2361">
        <cms4j:class node_id="kjdsh" parent_class="2361" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
          
            </div>
            <div id="subNav6" class="subNav6">
					<cms4j:class id="2362">
        <cms4j:class node_id="kjdsh" parent_class="2362" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
             
            </div>
            <div id="subNav7" class="subNav7"> 
					<cms4j:class id="2363">
        <cms4j:class node_id="kjdsh" parent_class="2363" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
           
            </div>
            <div id="subNav8" class="subNav8"> 
					<cms4j:class id="2365">
        <cms4j:class node_id="kjdsh" parent_class="2365" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
              <a href="#" target="_parent">特色及政策支持</a> 
            </div>
            <div id="subNav9" class="subNav9"> 
					<cms4j:class id="2366">
        <cms4j:class node_id="kjdsh" parent_class="2366" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
              <a href="#" target="_parent">课程申报</a> 
            </div>
            
          </div>
        </div>
      </div>
  <!--头部导航结束-->

  <div class="hk_left">
  
   <div class="hk_left_01">
     <div id="box2">
     <script type="text/javascript">
<!--
var pic_width=280
var pic_height=340
var text_height=28
var swfpath = 'fla/picviewer.swf'
var swf_height = pic_height+text_height
var pics=''
var links=''
var texts=''
var i=1;
<cms4j:class id="2388">
<cms4j:article class_id="2388" page_size="6" node_id="kjdsh">
<cms4j:article_list>
if(i==1){
	pics=pics+"<%=article_info.getHOMEPAGE_IMAGE()%>"
	links=links+"<%=article_info.getURL()%>";
	texts=texts+"<%=article_info.getTITLE()%>";
	i=i+1;
}else{
	pics=pics+"|<%=article_info.getHOMEPAGE_IMAGE()%>"
	links=links+"|<%=article_info.getURL()%>";
	texts=texts+"|<%=article_info.getTITLE()%>";
}
</cms4j:article_list>
</cms4j:article>
</cms4j:class>
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');
document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="'+swfpath+'"><param name="quality" value="high"><param name="bgcolor" value="#ffffff">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+pic_width+'&borderheight='+pic_height+'&textheight='+text_height+'">');
document.write('<embed src="'+swfpath+'" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+pic_width+'&borderheight='+pic_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ pic_width +'" height="'+ pic_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');document.write('</object>');
//-->
</script>
      <ul id="num_list1"></ul>
     </div>
   </div>
   
   <div class="shenbao"><img src="images/shenbao.jpg" /></div>
   
   <div class="hk_left_02">
    <div class="hk_L_text">教学依据</div>
    <div class="hk_L_body">
     <ul>
      <li class="L_line001"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2395" target="_blank">专业标准</a></li>
      <li class="L_line002"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2396" target="_blank">课程标准</a></li>
      <li class="L_line003"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2397" target="_blank">课程实施计划</a></li>
     </ul>
    </div>
    <div class="hk_L_bottom"></div>
   </div>
   
   <div class="hk_L_position01"></div>
   
   <div class="hk_left_03">
    <div class="hk_L_text">学习资源</div>
    <div class="hk_L_body">
     <ul>
      <li class="L_line004"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2383" target="_blank">电子课件</a></li>
      <li class="L_line005"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2385" target="_blank">教学视频</a></li>
      <li class="L_line006"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2393" target="_blank">实训案例</a></li>
      <li class="L_line007"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2394" target="_blank">模拟测试</a></li>
     </ul>
    </div>
    <div class="hk_L_bottom"></div>
   </div>
   
   <div class="hk_L_position02"></div>
   
   <div class="hk_left_04">
    <div class="hk_L_text">拓展互动</div>
    <div class="hk_L_body">
     <ul>
      <li class="L_line008"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2392" target="_blank">线上答疑</a></li>
      <li class="L_line009"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2391" target="_blank">职业资格证书</a></li>
      <li class="L_line010"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2390" target="_blank">技能竞赛</a></li>
      <li class="L_line011"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2389" target="_blank">学习园地</a></li>
     </ul>
    </div>
    <div class="hk_L_bottom"></div>
   </div>
   
  </div>
  
  
  
  
  
  
  
  
  <div class="hk_right">
  
   <div class="hk_right_01">
    <div class="hk_right_h1"><div class="hk_right_text">课程简介</div><div class="more"><a href="#" target="_blank">更多>></a></div></div>
    <div class="hk_right_body"><div class="img001"><img src="img/K001.jpg" /></div>
    <div class="view"><p>《会计电算化》也叫计算机会计，是指以电子计算机为主体的信息技术在会计工作的应用，具体而言，就是利用会计软件，指挥在各种计算机设备替代手工完成或在手工下很难完成的会计工作过程。会计电算计信息系统。它实现了数据处理的自动化，使传统化是以电子计算机为主的当代电子技术和信息技术应用到会计实务中的简称，是一个应用电子计算机实现的会计信息系统。它实现了数据处理的自动化，使传统的手工会计信息系统发展演变为电算化会计信息系统。会计电算化是会计发展史上的一次重大革命，它不仅是会计发展的需要，而且是经济和科技对会计工作提出的要求。</p><p>会计电算化是把电子计算机和现代数据处理技术应用到会计工作中的简称，是用电子计算机代替人工记账、算账和报账...<a href="#" target="_blank">[详细内容]</a></p></div>
    </div>
   </div>
   
   <div class="hk_right_02">
    <div class="hk_right_h2"><div class="hk_right_text2">电子教学</div><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2383" target="_blank">更多>></a></div></div>
    <ul>
  	<cms4j:article class_id="2383" page_size="5" node_id="kjdsh">
                    <cms4j:article_list>
                     <li><a  target="_blank" href="<%=article_info.getURL()%>"><%=article_info.getTITLE(12,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
      
    </ul>
   </div>
   
   <div class="hk_right_03">
    <div class="hk_right_h1"><div class="hk_right_text">教学成果展示</div><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2384" target="_blank">更多>></a></div></div>
    <div class="hk_right_body">
	<div id="prev" class="prev"></div>
      <div id="slides" class="slides"> 
        <ul>
					 <cms4j:article class_id="2384" page_size="10" node_id="kjdsh">
                <cms4j:article_list>
<li><A class=imgBorder href="<%=article_info.getURL()%>" target=_blank><IMG height=100 alt="<%=article_info.getTITLE()%>" src="<%=article_info.getHOMEPAGE_IMAGE()%>" width=124 
border=0></A> 
<P><A href="<%=article_info.getURL()%>"
target=_blank><%=article_info.getTITLE()%></A></P></li>
</cms4j:article_list>
		</cms4j:article>
        </ul>
      </div>
      <div id="next" class="next"></div>
    </div>
   </div>
   
   
   <DIV class=rollphotos>
<DIV class=FixTitle>
<H3>活动风采</H3><SPAN><A href="http://www.68design.net/" target=_blank>更多&gt;&gt;</A></SPAN></DIV>
<DIV class=blk_29>
<DIV class=LeftBotton id=LeftArr></DIV>
<DIV class=Cont id=ISL_Cont_1><!-- 图片列表 begin -->

  <cms4j:article class_id="2384" page_size="10" node_id="tuanwei">
                <cms4j:article_list>
<DIV class=box><A class=imgBorder href="<%=article_info.getURL()%>" target=_blank><IMG height=84 alt="<%=article_info.getTITLE()%>" src="<%=article_info.getHOMEPAGE_IMAGE()%>" width=124 
border=0></A> 
<P><A href="<%=article_info.getURL()%>"
target=_blank><%=article_info.getTITLE()%></A></P></DIV>
</cms4j:article_list>
		</cms4j:article>


<!-- 图片列表 end -->
</DIV>

<DIV class=RightBotton id=RightArr></DIV></DIV>


<SCRIPT language=javascript type=text/javascript>
		<!--//--><![CDATA[//><!--
		var scrollPic_02 = new ScrollPic();
		scrollPic_02.scrollContId   = "ISL_Cont_1"; //内容容器ID
		scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
		scrollPic_02.arrRightId     = "RightArr"; //右箭头ID

		scrollPic_02.frameWidth     = 908;//显示框宽度
		scrollPic_02.pageWidth      = 152; //翻页宽度

		scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
		scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
		scrollPic_02.autoPlay       = false; //自动播放
		scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)

		scrollPic_02.initialize(); //初始化
							
		//--><!]]>
</SCRIPT>
</DIV>
<!--滚动图片 end-->
    <div class="blank10">
  </div>
  
  
  
   
   <div class="hk_right_04">
    <div class="hk_right_h2"><div class="hk_right_text2">课程负责人</div><div class="more"><a href="#" target="_blank">更多>></a></div></div>
    <div class="view"><div class="img001"><a href="#"><img src="img/a002.jpg" /></a></div>《会计电算化》也叫计算机会计，是指以电子计算机为主体的信息技术在会计工作的应到为主的当代电子技术和信息技术应用到会计实务中的简称，是一个应用电子计算机实现的会作的应用，具体而言，就是利用会计软件，指挥在各种计算机设备替代手工完成子计算机实现的会计信息系统。它实现了数据处理的自动化，使传统的手工会计信息系统发展演变需要，而且是经济和科技对会计工作提出的要求。会计电算化是把电子计算机和现代数据处理技术应用到会计工作中的简称，是用电子计算机代替人工记账、算...<a href="#">[了解详情]</a></div>
    <div class="jsdw_hk">
          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codeBase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="230" height="220">
          <param name="allowScriptAccess" value="sameDomain">
          <param name="allowFullScreen" value="false">
          <param name="movie" value="images/flash.swf">
          <param name="quality" value="high">
          <param name="wmode" value="transparent">
          <param name="flashvars" value="titles=教师队伍01|教师队伍02|教师队伍03|教师队伍04|教师队伍05&imgs=img/a001.jpg|img/a002.jpg|img/a003.jpg|img/a004.jpg|img/a005.jpg&links=./index.html|./index.html|./index.html|./index.html|./index.html">
<embed flashvars="titles=教师队伍01|教师队伍02|教师队伍03|教师队伍04|教师队伍05&imgs=img/a001.jpg|img/a002.jpg|img/a003.jpg|img/a004.jpg|img/a005.jpg&links=./index.html|./index.html|./index.html|./index.html|./index.html"
src="images/flash.swf" width="230" height="220" quality="high" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" 
wmode="transparent" />
   </object>
     </div>
   </div>
   
   <div class="hk_right_05">
    <div class="h1_w"><h1>教学视频</h1><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2385" target="_blank">更多>></a></div></div>
    <div class="img001"><img src="images/video001.jpg" /></div>
     <ul>
	<cms4j:article class_id="2385" page_size="5" node_id="kjdsh">
                    <cms4j:article_list>
                     <li><a  target="_blank" href="<%=article_info.getURL()%>"><%=article_info.getTITLE(12,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
		
       
     </ul>
     <div style="width:450px; height:1px; float:left; margin-top:20px; border-bottom:1px dashed #cbcbcb; font-size:0px;display:inline;"></div>
     <div class="h1_w"><h1>课程特色及政策支持</h1><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2386" target="_blank">更多>></a></div></div>
     <div class="img001"><img src="images/video002.jpg" /></div>
     <ul>
	<cms4j:article class_id="2386" page_size="5" node_id="kjdsh">
                    <cms4j:article_list>
                     <li><a  target="_blank" href="<%=article_info.getURL()%>"><%=article_info.getTITLE(12,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
     </ul>
   </div>
   
   <div class="hk_right_06">
    <div class="h1_w"><h1>资源下载</h1><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2387" target="_blank">more>></a></div></div>
     <ul>	
		<cms4j:article class_id="2387" page_size="5" node_id="kjdsh">
                    <cms4j:article_list>
                     <li><a  target="_blank" href="<%=article_info.getURL()%>"><%=article_info.getTITLE(12,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
			
     </ul>     
   </div>
   
  </div>


  <div class="clear"></div>
  <div class="footer">
    <div class="footer_left">
    Copyright &copy; 2013 <b>茂名职业技术学院</b><br />
    地址：广东省茂名市文明北路232号大院<br />
    邮编：525000</div>
    <div class="footer_xian"></div>
    <div class="footer_right">
    页面版权所有&nbsp;&nbsp;茂名职业技术学院&nbsp;&nbsp;经济管理&nbsp;&nbsp;系会计教研室&nbsp;&nbsp;粤ICP备05084230号<br />
    Copyright &copy; 2013 www.mmvtc.cn&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;<a style=" text-decoration:underline;" target="_blank" href="http://www.mmvtc.cn/sysmange/login.jsp" target="_blank">管理员登录</a><br /></div>
  </div>
  <div class="clear"></div>

  
</div>

</body>
</html>