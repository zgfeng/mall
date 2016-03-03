<?php /* Smarty version 2.6.26, created on 2014-03-27 12:37:16
         compiled from admin/nav/show.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
</head>
<body>

<h2><a href="?a=nav&m=add<?php if ($this->_tpl_vars['OneNav']): ?>&id=<?php echo $this->_tpl_vars['OneNav'][0]->id; ?>
<?php endif; ?>">添加导航</a>商品 -- 导航条列表</h2>

<div id="list">
	<form method="post" action="?a=nav&m=sort">
	<table>
		<tr><th>名称</th><th>简介</th><th><?php if ($this->_tpl_vars['OneNav']): ?>关联品牌<?php else: ?>子类<?php endif; ?></th><th>排序</th><th>操作</th></tr>
		<?php $_from = $this->_tpl_vars['AllNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
		<tr><td><?php echo $this->_tpl_vars['value']->name; ?>
</td><td><?php echo $this->_tpl_vars['value']->info; ?>
</td><td><?php if ($this->_tpl_vars['OneNav']): ?><?php echo $this->_tpl_vars['value']->brand; ?>
<?php else: ?><a href="?a=nav&sid=<?php echo $this->_tpl_vars['value']->id; ?>
">查看</a> | <a href="?a=nav&m=add&id=<?php echo $this->_tpl_vars['value']->id; ?>
">添加</a><?php endif; ?></td><td><input type="text" name="sort[<?php echo $this->_tpl_vars['value']->id; ?>
]" class="sort" value="<?php echo $this->_tpl_vars['value']->sort; ?>
" /></td><td><a href="?a=nav&m=update&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a> <a href="?a=nav&m=delete&id=<?php echo $this->_tpl_vars['value']->id; ?>
" onclick="return confirm('你真的要删除这个导航吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
		<?php endforeach; else: ?>
		<tr><td colspan="5">没有任何导航</td></tr>
		<?php endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['AllNav']): ?><tr><td></td><td></td><td></td><td><input type="submit" name="send" value="排序" /></td><td></td></tr><?php endif; ?>
		<?php if ($this->_tpl_vars['OneNav']): ?><tr><td colspan="5">主类名称：[<?php echo $this->_tpl_vars['OneNav'][0]->name; ?>
] <a href="?a=nav">[返回]</a></td></tr><?php endif; ?>
	</table>
	</form>
</div>
<div id="page"><?php echo $this->_tpl_vars['page']; ?>
</div>

</body>
</html>