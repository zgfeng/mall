<?php /* Smarty version 2.6.26, created on 2014-04-07 18:44:14
         compiled from default/public/member_alipay3.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/alipay.css" />
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'default/public/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="sait">
	当前位置：<a href="./">首页</a>
	<?php $_from = $this->_tpl_vars['FrontNav'][0]->sait; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
	 &gt; <a href="?a=list&navid=<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div>

<div id="sidebar">
	<h2>当月热销</h2>
	<div style="margin:0 0 10px 0">
		<dl style="border:none;">
			<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
			<dd class="price">￥158.00</dd>
			<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
			<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
			<dd class="price">￥158.00</dd>
			<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
			<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
			<dd class="price">￥158.00</dd>
			<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<p><a href="###">查看更多</a></p>
	</div>
	<h2>浏览记录</h2>
	<div style="margin:0 0 10px 0">
		<dl style="border:none;">
			<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
			<dd class="price">￥158.00</dd>
			<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
			<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
			<dd class="price">￥158.00</dd>
			<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
			<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
			<dd class="price">￥158.00</dd>
			<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<p><a href="###">查看更多</a> <a href="###">清空</a></p>
	</div>
</div>

<div id="main">
	<h2>在线支付</h2>
	<div class="alipay">
		<?php if ($this->_tpl_vars['OneOrder'][0]->order_state == '已取消' || $this->_tpl_vars['OneOrder'][0]->order_pay == '已付款' || $this->_tpl_vars['OneOrder'][0]->order_delivery == '已配货' || $this->_tpl_vars['OneOrder'][0]->order_delivery == '已发货'): ?>
		<dl><dd>此订单已被锁定！<input type="button" value="返回" onclick="javascript:history.go(-1);" /></dd></dl>
		<?php else: ?>
		<input type="hidden" name="out_trade_no" value="<?php echo $this->_tpl_vars['OneOrder'][0]->ordernum; ?>
" />
		<input type="hidden" name="subject" value="瓢城Web俱乐部的订单" />
		<input type="hidden" name="total_fee" value="<?php echo $this->_tpl_vars['OneOrder'][0]->price; ?>
" />
		<input type="hidden" name="alibody" value="<?php echo $this->_tpl_vars['OneOrder'][0]->text; ?>
" />
		<dl>
			<dd>订 单 号：<?php echo $this->_tpl_vars['OneOrder'][0]->ordernum; ?>
</dd>
			<dd>总 金 额：<?php echo $this->_tpl_vars['OneOrder'][0]->price; ?>
/元</dd>
			<dd>订单详情：<?php echo $this->_tpl_vars['OneOrder'][0]->text; ?>
</dd>
			<dd>您选择的方式是：货到付款，请收到货后直接将款项交予邮递员，我们收到款项后及时与您确认。</dd>
		</dl>
		<?php endif; ?>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'default/public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>