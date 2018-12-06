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
        K('#image2').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    imageUrl : K('#url2').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#url2').val(url);
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
<li><a href="#">首页管理</a></li>
<li><a href="#">我们的优势</a></li>
<li><a href="#">修改信息</a></li>
</ul>
</div>
<form method="post" name="form" action="">
	<ul class="forminfo">
        <input name="ah_id" type="hidden" class="dfinput" value="<?php echo ($all_head["ah_id"]); ?>" />
        <li><label><b>*</b>标题1</label><input name="ah_title1" type="text" class="dfinput" value="<?php echo ($all_head["ah_title1"]); ?>" /></li>
        <li><label><b>*</b>图标</label>
            <input name="ah_image" type="text" id="url1" value="<?php echo ($all_head["ah_image"]); ?>" class="dfinput"/>
            <input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
        </li>
        <li><label><b>*</b>隐藏图标</label>
            <input name="ah_hideimage" type="text" id="url2" value="<?php echo ($all_head["ah_hideimage"]); ?>" class="dfinput"/>
            <input name="" type="button" id="image2"  class="scbtn1" value="选择图片" />
        </li>
	    <li><label><b>*</b>排序</label><input name="ah_sort" type="text" class="dfinput" value="<?php echo ($all_head["ah_sort"]); ?>" /></li>
	    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
	</ul>
</form>

</body>
</html>