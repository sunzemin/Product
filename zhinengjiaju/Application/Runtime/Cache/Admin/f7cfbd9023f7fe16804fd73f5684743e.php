<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
<link href="/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/Public/editor/themes/default/default.css" />
<script language="JavaScript" src="/Public/admin/js/myjs.js"></script>
<script language="JavaScript" src="/Public/admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/editor/kindeditor.js"></script>
<script src="/Public/editor/lang/zh_CN.js"></script>
<script type="text/javascript">
    KindEditor.ready(function(K) {
        editor=K.create('textarea[name="acontent"]',{
            filterMode:false
        });
        K('#image1').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    imageUrl : K('#url1').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#url1').val(url);
                        editor.hideDialog();
                    }
                });
            });
        });
    });
</script>
<body>
<div class="place">
<span>位置：</span>
<ul class="placeul">
<li><a href="#">最新特惠</a></li>
<li><a href="#">最新特惠管理</a></li>
<li><a href="#">添加信息</a></li>
</ul>
</div>
<form method="post" name="form" action="">
    <ul class="forminfo">
        
        <li><label><b>*</b>照片</label>
            <input name="aimage" type="text" id="url1" value="" class="dfinput"/>
            <input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
        </li>
         <li><label><b>*</b>标题</label><input name="atitle" type="text" class="dfinput" value="" /></li>          
        <li><label><b>*</b>内容</label>
            <textarea name="acontent"  class="dfinput" style="width: 500px;height: 400px;"></textarea>
            
        </li>
        <li><label><b>*</b>排序</label><input name="asort" type="text" class="dfinput" value="" /></li>
        <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
    </ul>
</form>

</body>
</html>