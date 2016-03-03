<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/goods.css" />
<script type="text/javascript" src="view/admin/js/ajax.js"></script>
<script type="text/javascript" src="view/admin/js/goods_update.js"></script>
<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<body>

<h2><a href="?a=goods">返回商品列表</a>商品 -- 修改商品</h2>

<form method="post" name="update" action="?a=goods&m=update&id={$OneGoods[0]->id}">
	<input type="hidden" name="flag" id="flag" />
	<input type="hidden" name="brandid" id="brandid" value="{$OneGoods[0]->brand}" />
	<input type="hidden" name="attrid" id="attrid" value="{$OneGoods[0]->attr}" />
	<dl class="form">
		<dd>商品类型：<select name="nav" id="nav">
								<option value="-1" selected="selected">--请选择一个商品的类型--</option>	
								{foreach from=$addNav key=key item=value}
								<optgroup label="{$value->name}">
								{html_options options=$value->child selected=$OneGoods[0]->nav}
								</optgroup>
								{/foreach}
								</select> <span class="red">[必选]</span>
		</dd> 
		<dd>商品品牌：<select name="brand" id="brand">
								<option value="-1">--请选择一个商品的品牌--</option>	
								</select> <span class="red">[必选]</span>
		</dd>
		<dd>商品名称：<input type="text" name="name" value="{$OneGoods[0]->name}" class="text" /> <span class="red">[必填]</span> ( * 2-100字符之间 )</dd>
		<dd>商品编号：<input type="text" name="sn" value="{$OneGoods[0]->sn}" id="sn" onblur="checkSn();" class="text" /> <span class="red">[必填]</span> ( * 2-50字符之间，唯一 )</dd>
		<dd>销 售 价：<input type="text" name="price_sale" value="{$OneGoods[0]->price_sale}" class="text small" /> 市 场 价：<input type="text" name="price_market" value="{$OneGoods[0]->price_market}"  class="text small" /> 成 本 价：<input type="text" name="price_cost" value="{$OneGoods[0]->price_cost}"  class="text small" /> ( * 成本价不在前台显示 )</dd>
		<dd>关 键 字：<input type="text" name="keyword" value="{$OneGoods[0]->keyword}" class="text" /> ( * 例：纯棉|换季|白色；每个关键字用'|'隔开)</dd>
		<dd>计量单位：<input type="text" name="unit" value="{$OneGoods[0]->unit}" class="text small" /> 重　　量：<input type="text" name="weight" value="{$OneGoods[0]->weight}" class="text small" /> ( * 计量单位：个,kg,件；重量：默认kg)</dd>
		<dd>上传图片：<input type="text" name="thumbnail" value="{$OneGoods[0]->thumbnail}" class="text" readonly="readonly" /> 
								<input type="button" value="上传产品图" onclick="centerWindow('?a=call&m=upfile&type=content','upfile','400','150')" />
								<img name="pic" style="display:block;" src="{$OneGoods[0]->thumbnail}" /> ( * 保存图片完整性，最佳尺寸为：300 * 300  必须是jpg,gif,png，并且200k内)
		</dd>
		<dd><textarea id="TextArea1" name="content" class="ckeditor">{$OneGoods[0]->content}</textarea></dd>
		<dd>是否上架：{html_radios options=$bool selected=$OneGoods[0]->is_up name=is_up}　　免 运 费：{html_radios options=$bool selected=$OneGoods[0]->is_freight name=is_freight}</dd>
		<dd>售后服务：{html_radios name="service" options=$addService checked=$OneGoods[0]->service}</dd>
		<dd>库　　存：<input type="text" name="inventory" value="{$OneGoods[0]->inventory}" class="text small" /> 库存告急：<input type="text" name="warn_inventory" value="{$OneGoods[0]->warn_inventory}" class="text small" /> ( * 库存达到指定数量就会在后台提醒 )</dd>
		<dd><input type="submit" name="send" value="修改商品" onclick="return updateGoods();" /> <input type="reset" value="重置" /></dd>
	</dl>
</form>


</body>
</html>