<%@ page contentType="text/html; charset=GBK"%>
<%@ taglib uri="/cms4j" prefix="cms4j" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<cms4j:class id="${param.id}">
<title><%=class_info.getCLASS_NAME()%></title>
<meta name="description" content="��Ƶ��㻯��Ʒ�γ�" />
<meta name="keywords" content="��� ���㻯 ��Ƶ��㻯 ��Ʒ�γ� �γ� ��Ʒ �ֹ���� ï�� ְҵ���� ѧԺ " />
<link rel="stylesheet" type="text/css" href="css/PublicCSS.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/nav.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
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
                <LI><a href="http://www.mmvtc.cn/templet/kjdsh/" id="n1" class="actived" title="��Ƶ��㻯��Ʒ�γ���ҳ" target="_parent">��ҳ</a></LI>
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
  <!--ͷ����������-->
  
    


  <div class="daohang">��ǰλ�ã�<a href="#" target="_parent">��ҳ</a>  >>  
<a href="<%=class_info.getURL()%>" target="_parent"><%=class_info.getCLASS_NAME()%></a>
  </div>
  
  <div class="hk_lb_left">
  <div class="hk_lb_left_01">
   <h1>�γ�����</h1>
   <div class="lb_L_body01">
    <ul>
     <li><a href="#" target="_parent">�γ̶�λ</a></li>
     <li><a href="#" target="_parent">�γ����</a></li>
    </ul>
   </div>
   <h2></h2>
   
   <h3>���ӽ�ѧ</h3>
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
    
    <div class="fenye"><form action="" method="get">����28����¼��15��/ҳ������2ҳ����ǰ��<b>1</b>ҳ��<a href="#">��ҳ</a> <a href="#">��һҳ</a> <a href="#">��һҳ</a> <a href="#">βҳ</a> ת��: 
      <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
        <option>��1ҳ</option>
        <option>��2ҳ</option>
      </select></form>
    </div>
   </div>
   <h2></h2>
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
</cms4j:class>