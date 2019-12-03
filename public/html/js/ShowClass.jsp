<%@ page contentType="text/html; charset=GBK"%>
<%@ taglib uri="/cms4j" prefix="cms4j" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<cms4j:class id="${param.id}">
<title><%=class_info.getCLASS_NAME()%></title>
<meta name="description" content="会计电算化精品课程" />
<meta name="keywords" content="会计 电算化 会计电算化 精品课程 课程 精品 手工会计 茂名 职业技术 学院 " />
<link rel="stylesheet" type="text/css" href="css/PublicCSS.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/nav.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
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
                <LI><a href="http://www.mmvtc.cn/templet/kjdsh/" id="n1" class="actived" title="会计电算化精品课程首页" target="_parent">首页</a></LI>
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
            </div>
			
            <div id="subNav9" class="subNav9"> 
					<cms4j:class id="2366">
        <cms4j:class node_id="kjdsh" parent_class="2366" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
            </div>
            
          </div>
        </div>
      </div>
  <!--头部导航结束-->
  
    


  <div class="daohang">当前位置：<a href="#" target="_parent">首页</a>  >>  
<a href="<%=class_info.getURL()%>" target="_parent"><%=class_info.getCLASS_NAME()%></a>
  </div>
  
  <div class="hk_lb_left">
  <div class="hk_lb_left_01">
   <h1>课程设置</h1>
   <div class="lb_L_body01">
    <ul>
     <li><a href="#" target="_parent">课程定位</a></li>
     <li><a href="#" target="_parent">课程设计</a></li>
    </ul>
   </div>
   <h2></h2>
   
   <h3>电子教学</h3>
   <div class="lb_L_body02">
    <ul>
      	<cms4j:article class_id="2383" page_size="5" node_id="kjdsh">
                    <cms4j:article_list>
                     <li><a  target="_blank" href="<%=article_info.getURL()%>"><%=article_info.getTITLE(12,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
    </ul>
   </div>
   <h2></h2>
  </div>
  </div>
  
  <div class="hk_lb_right">
  <div class="hk_lb_right_01">
   <h1><%=class_info.getCLASS_NAME()%></h1>
   <div class="lb_R_body01">
    <ul>
	
	    <cms4j:article class_id="${param.id}" page_size="8" node_id="kjdsh">
                    <cms4j:article_list>
                     <li style="font-weight:normal"><div class="hktime">2013-11-26</div><a target="_blank" href="<%=article_info.getURL()%>">[<%=article_info.getADD_DATE_FORMATED("MM-dd")%>]<%=article_info.getTITLE(14,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
	

    </ul>
    
    <div class="fenye"><form action="" method="get">共有28条记录，15条/页，共分2页，当前第<b>1</b>页，<a href="#">首页</a> <a href="#">上一页</a> <a href="#">下一页</a> <a href="#">尾页</a> 转到: 
      <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
        <option>第1页</option>
        <option>第2页</option>
      </select></form>
    </div>
   </div>
   <h2></h2>
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
</cms4j:class>