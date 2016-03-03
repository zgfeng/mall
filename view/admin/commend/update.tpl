<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/commend.css" />
</head>
<body>

<h2><a href="?a=commend">返回评价列表</a>商品 -- 修改评价</h2>

<form method="post" name="update" action="?a=commend&m=update&id={$OneCommend[0]->id}">
	<dl class="form">
		<dd>商品名称：<a href="?a=details&navid={$smarty.get.nav}&goodsid={$OneCommend[0]->goods_id}" target="_blank">{$smarty.get.name}</a></dd>
		<dd>购买属性：{$OneCommend[0]->attr}</dd>
		<dd>评价用户：{$OneCommend[0]->user}</dd>
		<dd>评价星级：<span class="star">{html_radios name="star" options=$star checked=$star_checked}</span>
		</dd>
		<dd><span class="middle">评价内容：</span><textarea name="content">{$OneCommend[0]->content}</textarea> <span class="middle"></span></dd>
		<dd><span class="middle">回复内容：</span><textarea name="re_content">{$OneCommend[0]->re_content}</textarea> <span class="middle"></span></dd>
		<dd>是否显示：<input type="radio" name="flag" {if $OneCommend[0]->flag == 0}checked="checked"{/if} value="0" /> 是 <input type="radio" name="flag" {if $OneCommend[0]->flag == 1}checked="checked"{/if} value="1" /> 否</dd>
		<dd><input type="submit" name="send" value="回复及修改评价" class="submit" /></dd>
	</dl>
</form>

</body>
</html>