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
    });
</script>
<body>
<div class="place">
<span>位置：</span>
<ul class="placeul">
<li><a href="#">客样管理</a></li>
<li><a href="#">客样管理</a></li>
<li><a href="#">添加客样信息</a></li>
</ul>
</div>
<form method="post" name="form" action="">
	<ul class="forminfo">
        <input name="sv_id" type="hidden" class="dfinput" value="<?php echo ($short_video["sv_id"]); ?>" />
		<li><label><b>*</b>背景照片</label>
			<input name="sv_image" type="text" id="url1" value="<?php echo ($short_video["sv_image"]); ?>" class="dfinput"/>
			<input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
		</li>
		 <li><label><b>*</b>标题</label><input name="sv_title" type="text" class="dfinput" value="<?php echo ($short_video["sv_title"]); ?>" /></li>
         <li><label><b>*</b>小标题1</label><input name="sv_short_title1" type="text" class="dfinput" value="<?php echo ($short_video["sv_short_title1"]); ?>" /></li>
         <li><label><b>*</b>小标题2</label><input name="sv_short_title2" type="text" class="dfinput" value="<?php echo ($short_video["sv_short_title2"]); ?>" /></li>			
	    <li><label><b>*</b>视频路径</label><input name="sv_url" type="text" class="dfinput" value="<?php echo ($short_video["sv_url"]); ?>" /></li>
        <li><label><b>*</b>排序</label><input name="sv_sort" type="text" class="dfinput" value="<?php echo ($short_video["sv_sort"]); ?>" /></li>
	    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
	</ul>
</form>

</body>
</html>