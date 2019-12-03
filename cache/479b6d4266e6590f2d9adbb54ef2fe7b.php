<html>
<head>
<title>menu</title>
<link rel="stylesheet" href="public/skin/css/base.css" type="text/css" />
<link rel="stylesheet" href="public/skin/css/menu.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language='javascript'>var curopenItem = '1';</script>
<script language="javascript" type="text/javascript" src="public/skin/js/frame/menu.js"></script>
<base target="main" />
</head>
<body target="main">
<table width='99%' height="100%" border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='padding-left:3px;padding-top:8px' valign="top">
	<!-- Item 1 Strat -->
      <dl class='bitem'>
        <dt onClick='showHide("items1_1")'><b>常用操作</b></dt>
        <dd style='display:block' class='sitem' id='items1_1'>
          <ul class='sitemu'>
            <li>
              <a href='index.php?m=Loadduser' target='main'>添加账户</a>
            </li>
            <li><a href='index.php?m=Logl_name' target='main'>管理用户</a> </li>
            <li>
            <a href='index.php?m=Lopwd' target='main'>修改密码</a></div>  
            </li>
          </ul>
        </dd>
      </dl>
      <!-- Item 1 End -->
      <!-- Item 2 Strat -->
      <dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>栏目</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='index.php?m=Loadd_colun' target='main'>添加栏目</a></li>
            <li><a href='index.php?m=Logl_colun' target='main'>栏目管理</a></li>
          </ul>
        </dd>
      </dl>
      <!-- Item 2 End -->
       <dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>新闻管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <?php foreach($data as $value): ?>
            <li><a href='index.php?m=Logl_news&cid=<?=$value['categoryId'];?>' target='main'><?=$value['categoryName'];?></a></li>
            <?php endforeach ?>
          </ul>
        </dd>
      </dl>
	  </td>
  </tr>
</table>
</body>
</html>