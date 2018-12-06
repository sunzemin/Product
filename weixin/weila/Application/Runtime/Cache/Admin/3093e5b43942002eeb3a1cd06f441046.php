<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加图文消息</title>
<link href="/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/Public/editor/themes/default/default.css" />
<script language="JavaScript" src="/Public/admin/js/myjs.js"></script>
<script language="JavaScript" src="/Public/admin/js/jquery.js"></script>
<body>
<div class="place">
<span>位置：</span>
<ul class="placeul">
<li><a href="#">基础设置</a></li>
<li><a href="#">文章列表</a></li>
<li><a href="#">添加文章</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <li><label><b>*</b>用户名</label><input name="name" type="text" id="username" class="dfinput" /></li>
    <li><label><b>*</b>QQ</label><input name="QQ" id="password" type="text" class="dfinput" /></li>
    <li><label><b>*</b>微信</label><input name="wechat" id="passwordtwo" type="text" class="dfinput" /></li>
    <li><label><b>*</b>电话</label><input name="telephone" type="text" id="username" class="dfinput" /></li>
    <li><label><b>*</b>排序</label><input name="sort" type="text" id="username" class="dfinput" /></li>
    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
</ul>
</form>
</body>
</html>