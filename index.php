<?php
include_once("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>支付提交页</title>
<style type="text/css">
body{
	font-size:12px;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {color: #2179DD}
</style>
</head>
<body bgcolor="#ffffff">
<table width="100%" height="34" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="34"><img src="img/pic_1.gif" width="69" height="60" /></td>
    <td width="100%" background="img/pic_3.gif" bgcolor="#2179DD"><img src="img/pic_4.gif" width="40" height="40" /> 快速充值</td>
    <td width="13" height="34"><img src="img/pic_2.gif" width="69" height="60" /></td>
  </tr>
</table>

<table width="864" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#5c9acf" class="mytable">
  <tr>
    <td width="100%" height="88" bgcolor="#FFFFFF"><br />
	
      <table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="table_main">
	  <form name="f1" action="up.php" method="post">
      <tr>
        <td width="178" height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">商户ID：</span></td>
        <td width="315" bgcolor="#FFFFFF"><input name="userId" type="text" id="userId" value="<?=$UserId?>" /></td>
      </tr>
      <tr>
        <td height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">充值类别：</span></td>
        <td bgcolor="#FFFFFF">
		  <span class="STYLE1">
		  <select name="channelId" id="channelId">
		    <option value="0">选择充值类别</option>
		    <option value="1" >1-在线银行充值</option>
		    </select>
		  </span> </td>
      </tr>
      <tr id="tr_cardId" style="display:block;">
      <tr>
        <td height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">支付金额：</span></td>
        <td bgcolor="#FFFFFF"><input name="faceValue" type="text" id="faceValue" value="1" />
        *</td>
      </tr>
      <tr>
        <td height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">产品名称：</span></td>
        <td bgcolor="#FFFFFF"><input name="subject" type="text" id="subject" value="GamePay" maxlength="20" /></td>
      </tr>
      <tr>
        <td height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">产品价格：</span></td>
        <td bgcolor="#FFFFFF"><input name="price" type="text" id="price" value="1" maxlength="20" /></td>
      </tr>
      <tr>
        <td height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">购买数量：</span></td>
        <td bgcolor="#FFFFFF"><input name="quantity" type="text" id="quantity" value="1" maxlength="20" /></td>
      </tr>
      <tr>
        <td height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">产品描述：</span></td>
        <td bgcolor="#FFFFFF"><input name="description" type="text" id="description" value="GamePay" maxlength="50" /></td>
      </tr>
      <tr>
        <td height="25" align="right" bgcolor="#FFFFFF"><span class="STYLE1">自定义信息：</span></td>
        <td bgcolor="#FFFFFF"><input name="notic" type="text" id="notic" value="parmas" maxlength="100" /></td>
      </tr>
      
      <tr>
        <td height="25" colspan="2" align="center" bgcolor="#FFFFFF"><input name="Submit" type="submit" class="btn2 " value="提交" /></td>
      </tr>
	  </form>
    </table>
    <br /></td>
  </tr>
</table>
</body>
</html>