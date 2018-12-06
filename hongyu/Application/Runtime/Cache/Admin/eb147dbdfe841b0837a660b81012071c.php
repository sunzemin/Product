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
        var editor = K.editor({
            allowFileManager : true
        });
        editor=K.create('textarea[name="content"]',{
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
<li><a href="#">全屋集装图标管理</a></li>
<li><a href="#">修改图标信息</a></li>
</ul>
</div>
<form method="post" name="form" action="">
	<ul class="forminfo">
        <input name="hdt_id" type="hidden" class="dfinput" value="<?php echo ($home_decorate_title["hdt_id"]); ?>" />
		<li><label><b>*</b>图标</label>
			<input name="hdt_image" type="text" id="url1" value="<?php echo ($home_decorate_title["hdt_image"]); ?>" class="dfinput"/>
			<input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
		</li>
		 <li><label><b>*</b>标题</label><input name="hdt_title" type="text" class="dfinput" value="<?php echo ($home_decorate_title["hdt_title"]); ?>" /></li>		
         
        <li><label><b>*</b>排序</label><input name="hdt_sort" type="text" class="dfinput" value="<?php echo ($home_decorate_title["hdt_sort"]); ?>" /></li>
	    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
	</ul>
</form>

</body>
</html>