﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理登陆</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 11pt;
	font-weight: bold;
}
-->
</style>
</head>

<body style="background-image:url(./public/images/admin_login_bg.gif); margin:0 auto; width:500px;">

<div style="background-image:url(./public/images/admin_login.png); width:500px; height:200px; margin-top:130px;">
  <form id="form1" name="form1" method="post" action="">
    <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="250">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="40"><div align="right" class="STYLE1">用户名：</div></td>
        <td height="40" colspan="2"><input type="text" name="username" style="height:25px; width:200px; font-size:15pt; font-weight:bold;" /></td>
      </tr>
      <tr>
        <td height="40"><div align="right" class="STYLE1">密&nbsp; 码：</div></td>
        <td height="40" colspan="2"><input type="password" name="password" style="height:25px; width:200px; font-size:15pt; font-weight:bold;" /></td>
      </tr>
      <tr>
        <td height="40"><div align="right" class="STYLE1">验证码：</div></td>
        <td width="100" height="40"><input type="text" name="code" style="height:25px; width:85px; font-size:15pt; font-weight:bold;" /></td>
        <td width="150"><img src="./vendor/lib/Code.php" onclick="this.src=this.src+'?'+Math.random()"</td>
        
      </tr>
      <tr>
        <td height="40">&nbsp;</td>
        <td height="40" colspan="2"><input type="submit" name="submit" value="登录" style="width:130px; height:30px; background-image:url(./public/images/admin_login_button.png); border:0; background-color: transparent; "/></td>
      </tr>
    </table>
  </form>
</div>

</body>
</html>
