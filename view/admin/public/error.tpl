<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/error.css" />
</head>
<body>

<h2>错误 -- 提示页</h2>

<div id="list" class="error">
	{foreach from=$message key=key item=value}
	<p>{$key+1}.{$value}</p>
	{/foreach}
	<p><a href="{$prev}">[返回]</a></p>
</div>

</body>
</html>