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
<li><a href="#">首页管理</a></li>
<li><a href="#">友情链接管理</a></li>
<li><a href="#">添加友情链接</a></li>
</ul>
</div>
<form method="post" name="form" action="">
	<ul class="forminfo">
         <input name="id" type="hidden" class="dfinput" value="<?php echo ($scene_res["id"]); ?>" />
         <!-- <li><label><b>*</b>选择页面</label>
            <select name="nav_id" class="dfinput">
               
                <option value="<?php echo ($navdata["nav_id"]); ?>"><?php echo ($navdata["nav_name"]); ?></option>
                <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><option value="<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </li> -->
		<li><label><b>*</b>图片</label>
			<input name="image" type="text" id="url1" value="<?php echo ($scene_res["image"]); ?>" class="dfinput"/>
			<input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
		</li>
	   <!-- <li><label><b>*</b>背景标题</label><input name="bi_title" type="text" class="dfinput" value="<?php echo ($background_image_res["bi_title"]); ?>" /></li> -->
	    <li><label><b>*</b>排序</label><input name="sort" type="text" class="dfinput" value="<?php echo ($scene_res["sort"]); ?>" /></li>
	    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
	</ul>
</form>

</body>
</html>