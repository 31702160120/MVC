<%@ page contentType="text/html; charset=GBK"%>
<%@ taglib uri="/cms4j" prefix="cms4j" %>
<%@ taglib uri="/oscache" prefix="cache" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT src="js/ScrollPic.js" type=text/javascript></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="description" content="��Ƶ��㻯��Ʒ�γ�" />
<meta name="keywords" content="��� ���㻯 ��Ƶ��㻯 ��Ʒ�γ� �γ� ��Ʒ �ֹ���� ï�� ְҵ���� ѧԺ " />
<link rel="stylesheet" type="text/css" href="css/PublicCSS.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/nav.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
<link href="css/css.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="js/menu.js"></script><!--ͷ������js-->
<script language="javascript" type="text/javascript">
/*ͷ������js*/
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
/*����ͼƬ�л�js*/
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
	var speed = 5000;  //�����ٶȣ�ԽСԽ��
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
	
	//��������ͣʱ����ͣ�Զ���ת��������ת
	$('#slides').hover(
		
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	); 
        
});

//һ���򵥵ĺ��������һ������
//��ʱ���������������������ʼ��ת
function rotate() {
	$('#next').click();
}   
</script>
</head>

<body>

<div id="allweb">
  <div class="header_nav"><h1>����,&nbsp;&nbsp;��ӭ����ï��ְҵ����ѧԺ&nbsp;&nbsp;��Ƶ��㻯��Ʒ�γ̣�</h1><h2><a href="#">��Ϊ��ҳ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">�����ղ�</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.mmvtc.cn/" target="_blank">ѧԺ��ҳ</a></h2></div>
  <div class="header">
     <embed height="210" type=application/x-shockwave-flash 
	 pluginspage=http://www.macromedia.com/go/getflashplayer width=100%
     src="images/header.swf" quality="high" wmode="transparent"></embed>
  </div>
  

  <!--ͷ��������ʼ-->
      <div class="navi">
        <div class="padder">
      
            <div class="nav">              
              <div class="mainNav">
               <UL>
                <LI><a href="javascript:void(null)" id="n1" class="actived" title="��Ƶ��㻯��Ʒ�γ���ҳ" target="_parent">��ҳ</a></LI>
                <LI><a href="javascript:void(null)" id="n2" title="�γ�����" target="_parent">�γ�����</a></LI>
                <LI><a href="javascript:void(null)" id="n3" title="��ѧ���� target="_parent"">��ѧ����</a></LI>
                <LI><a href="javascript:void(null)" id="n4" title="��ѧ�������ֶ�" target="_parent">��ѧ�������ֶ�</a></LI>
                <LI><a href="javascript:void(null)" id="n5" title="��ѧ����" target="_parent">��ѧ����</a></LI>
                <LI><a href="javascript:void(null)" id="n6" title="ʵ������" target="_parent">ʵ������</a></LI>
                <LI><a href="javascript:void(null)" id="n7" title="��ѧЧ��" target="_parent">��ѧЧ��</a></LI>
                <LI><a href="javascript:void(null)" id="n8" title="��ɫ������֧��" target="_parent">��ɫ������֧��</a></LI>
                <LI><a href="javascript:void(null)" id="n9" title="�γ��걨" target="_parent">�γ��걨</a></LI>
               </UL>
              </div>             
           </div>
          
          <div class="secondNav">
            <div id="subNav1" class="subNav1">&nbsp;&nbsp;��ӭ��������Ƶ��㻯��Ʒ�γ�!<span style="margin-left:560px;">������&nbsp;&nbsp;<script src="js/date.js" type="text/javascript"></script></span>
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
              <a href="#" target="_parent">��ɫ������֧��</a> 
            </div>
            <div id="subNav9" class="subNav9"> 
					<cms4j:class id="2366">
        <cms4j:class node_id="kjdsh" parent_class="2366" show="1">
        	<a href="<%=class_info.getURL()%>"><%=class_info.getCLASS_NAME()%></a>
        </cms4j:class>
        </cms4j:class>
              <a href="#" target="_parent">�γ��걨</a> 
            </div>
            
          </div>
        </div>
      </div>
  <!--ͷ����������-->

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
    <div class="hk_L_text">��ѧ����</div>
    <div class="hk_L_body">
     <ul>
      <li class="L_line001"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2395" target="_blank">רҵ��׼</a></li>
      <li class="L_line002"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2396" target="_blank">�γ̱�׼</a></li>
      <li class="L_line003"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2397" target="_blank">�γ�ʵʩ�ƻ�</a></li>
     </ul>
    </div>
    <div class="hk_L_bottom"></div>
   </div>
   
   <div class="hk_L_position01"></div>
   
   <div class="hk_left_03">
    <div class="hk_L_text">ѧϰ��Դ</div>
    <div class="hk_L_body">
     <ul>
      <li class="L_line004"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2383" target="_blank">���ӿμ�</a></li>
      <li class="L_line005"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2385" target="_blank">��ѧ��Ƶ</a></li>
      <li class="L_line006"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2393" target="_blank">ʵѵ����</a></li>
      <li class="L_line007"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2394" target="_blank">ģ�����</a></li>
     </ul>
    </div>
    <div class="hk_L_bottom"></div>
   </div>
   
   <div class="hk_L_position02"></div>
   
   <div class="hk_left_04">
    <div class="hk_L_text">��չ����</div>
    <div class="hk_L_body">
     <ul>
      <li class="L_line008"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2392" target="_blank">���ϴ���</a></li>
      <li class="L_line009"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2391" target="_blank">ְҵ�ʸ�֤��</a></li>
      <li class="L_line010"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2390" target="_blank">���ܾ���</a></li>
      <li class="L_line011"><a  href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2389" target="_blank">ѧϰ԰��</a></li>
     </ul>
    </div>
    <div class="hk_L_bottom"></div>
   </div>
   
  </div>
  
  
  
  
  
  
  
  
  <div class="hk_right">
  
   <div class="hk_right_01">
    <div class="hk_right_h1"><div class="hk_right_text">�γ̼��</div><div class="more"><a href="#" target="_blank">����>></a></div></div>
    <div class="hk_right_body"><div class="img001"><img src="img/K001.jpg" /></div>
    <div class="view"><p>����Ƶ��㻯��Ҳ�м������ƣ���ָ�Ե��Ӽ����Ϊ�������Ϣ�����ڻ�ƹ�����Ӧ�ã�������ԣ��������û�������ָ���ڸ��ּ�����豸����ֹ���ɻ����ֹ��º�����ɵĻ�ƹ������̡���Ƶ������Ϣϵͳ����ʵ�������ݴ�����Զ�����ʹ��ͳ�����Ե��Ӽ����Ϊ���ĵ������Ӽ�������Ϣ����Ӧ�õ����ʵ���еļ�ƣ���һ��Ӧ�õ��Ӽ����ʵ�ֵĻ����Ϣϵͳ����ʵ�������ݴ�����Զ�����ʹ��ͳ���ֹ������Ϣϵͳ��չ�ݱ�Ϊ���㻯�����Ϣϵͳ����Ƶ��㻯�ǻ�Ʒ�չʷ�ϵ�һ���ش�������������ǻ�Ʒ�չ����Ҫ�������Ǿ��úͿƼ��Ի�ƹ��������Ҫ��</p><p>��Ƶ��㻯�ǰѵ��Ӽ�������ִ����ݴ�����Ӧ�õ���ƹ����еļ�ƣ����õ��Ӽ���������˹����ˡ����˺ͱ���...<a href="#" target="_blank">[��ϸ����]</a></p></div>
    </div>
   </div>
   
   <div class="hk_right_02">
    <div class="hk_right_h2"><div class="hk_right_text2">���ӽ�ѧ</div><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2383" target="_blank">����>></a></div></div>
    <ul>
  	<cms4j:article class_id="2383" page_size="5" node_id="kjdsh">
                    <cms4j:article_list>
                     <li><a  target="_blank" href="<%=article_info.getURL()%>"><%=article_info.getTITLE(12,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
      
    </ul>
   </div>
   
   <div class="hk_right_03">
    <div class="hk_right_h1"><div class="hk_right_text">��ѧ�ɹ�չʾ</div><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2384" target="_blank">����>></a></div></div>
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
<H3>����</H3><SPAN><A href="http://www.68design.net/" target=_blank>����&gt;&gt;</A></SPAN></DIV>
<DIV class=blk_29>
<DIV class=LeftBotton id=LeftArr></DIV>
<DIV class=Cont id=ISL_Cont_1><!-- ͼƬ�б� begin -->

  <cms4j:article class_id="2384" page_size="10" node_id="tuanwei">
                <cms4j:article_list>
<DIV class=box><A class=imgBorder href="<%=article_info.getURL()%>" target=_blank><IMG height=84 alt="<%=article_info.getTITLE()%>" src="<%=article_info.getHOMEPAGE_IMAGE()%>" width=124 
border=0></A> 
<P><A href="<%=article_info.getURL()%>"
target=_blank><%=article_info.getTITLE()%></A></P></DIV>
</cms4j:article_list>
		</cms4j:article>


<!-- ͼƬ�б� end -->
</DIV>

<DIV class=RightBotton id=RightArr></DIV></DIV>


<SCRIPT language=javascript type=text/javascript>
		<!--//--><![CDATA[//><!--
		var scrollPic_02 = new ScrollPic();
		scrollPic_02.scrollContId   = "ISL_Cont_1"; //��������ID
		scrollPic_02.arrLeftId      = "LeftArr";//���ͷID
		scrollPic_02.arrRightId     = "RightArr"; //�Ҽ�ͷID

		scrollPic_02.frameWidth     = 908;//��ʾ����
		scrollPic_02.pageWidth      = 152; //��ҳ���

		scrollPic_02.speed          = 10; //�ƶ��ٶ�(��λ���룬ԽСԽ��)
		scrollPic_02.space          = 10; //ÿ���ƶ�����(��λpx��Խ��Խ��)
		scrollPic_02.autoPlay       = false; //�Զ�����
		scrollPic_02.autoPlayTime   = 3; //�Զ����ż��ʱ��(��)

		scrollPic_02.initialize(); //��ʼ��
							
		//--><!]]>
</SCRIPT>
</DIV>
<!--����ͼƬ end-->
    <div class="blank10">
  </div>
  
  
  
   
   <div class="hk_right_04">
    <div class="hk_right_h2"><div class="hk_right_text2">�γ̸�����</div><div class="more"><a href="#" target="_blank">����>></a></div></div>
    <div class="view"><div class="img001"><a href="#"><img src="img/a002.jpg" /></a></div>����Ƶ��㻯��Ҳ�м������ƣ���ָ�Ե��Ӽ����Ϊ�������Ϣ�����ڻ�ƹ�����Ӧ��Ϊ���ĵ������Ӽ�������Ϣ����Ӧ�õ����ʵ���еļ�ƣ���һ��Ӧ�õ��Ӽ����ʵ�ֵĻ�����Ӧ�ã�������ԣ��������û�������ָ���ڸ��ּ�����豸����ֹ�����Ӽ����ʵ�ֵĻ����Ϣϵͳ����ʵ�������ݴ�����Զ�����ʹ��ͳ���ֹ������Ϣϵͳ��չ�ݱ���Ҫ�������Ǿ��úͿƼ��Ի�ƹ��������Ҫ�󡣻�Ƶ��㻯�ǰѵ��Ӽ�������ִ����ݴ�����Ӧ�õ���ƹ����еļ�ƣ����õ��Ӽ���������˹����ˡ���...<a href="#">[�˽�����]</a></div>
    <div class="jsdw_hk">
          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codeBase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="230" height="220">
          <param name="allowScriptAccess" value="sameDomain">
          <param name="allowFullScreen" value="false">
          <param name="movie" value="images/flash.swf">
          <param name="quality" value="high">
          <param name="wmode" value="transparent">
          <param name="flashvars" value="titles=��ʦ����01|��ʦ����02|��ʦ����03|��ʦ����04|��ʦ����05&imgs=img/a001.jpg|img/a002.jpg|img/a003.jpg|img/a004.jpg|img/a005.jpg&links=./index.html|./index.html|./index.html|./index.html|./index.html">
<embed flashvars="titles=��ʦ����01|��ʦ����02|��ʦ����03|��ʦ����04|��ʦ����05&imgs=img/a001.jpg|img/a002.jpg|img/a003.jpg|img/a004.jpg|img/a005.jpg&links=./index.html|./index.html|./index.html|./index.html|./index.html"
src="images/flash.swf" width="230" height="220" quality="high" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" 
wmode="transparent" />
   </object>
     </div>
   </div>
   
   <div class="hk_right_05">
    <div class="h1_w"><h1>��ѧ��Ƶ</h1><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2385" target="_blank">����>></a></div></div>
    <div class="img001"><img src="images/video001.jpg" /></div>
     <ul>
	<cms4j:article class_id="2385" page_size="5" node_id="kjdsh">
                    <cms4j:article_list>
                     <li><a  target="_blank" href="<%=article_info.getURL()%>"><%=article_info.getTITLE(12,"..")%></a></li>
                    </cms4j:article_list>
                    </cms4j:article>
		
       
     </ul>
     <div style="width:450px; height:1px; float:left; margin-top:20px; border-bottom:1px dashed #cbcbcb; font-size:0px;display:inline;"></div>
     <div class="h1_w"><h1>�γ���ɫ������֧��</h1><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2386" target="_blank">����>></a></div></div>
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
    <div class="h1_w"><h1>��Դ����</h1><div class="more"><a href="http://www.mmvtc.cn/templet/kjdsh/ShowClass.jsp?id=2387" target="_blank">more>></a></div></div>
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
    Copyright &copy; 2013 <b>ï��ְҵ����ѧԺ</b><br />
    ��ַ���㶫ʡï����������·232�Ŵ�Ժ<br />
    �ʱࣺ525000</div>
    <div class="footer_xian"></div>
    <div class="footer_right">
    ҳ���Ȩ����&nbsp;&nbsp;ï��ְҵ����ѧԺ&nbsp;&nbsp;���ù���&nbsp;&nbsp;ϵ��ƽ�����&nbsp;&nbsp;��ICP��05084230��<br />
    Copyright &copy; 2013 www.mmvtc.cn&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;<a style=" text-decoration:underline;" target="_blank" href="http://www.mmvtc.cn/sysmange/login.jsp" target="_blank">����Ա��¼</a><br /></div>
  </div>
  <div class="clear"></div>

  
</div>

</body>
</html>