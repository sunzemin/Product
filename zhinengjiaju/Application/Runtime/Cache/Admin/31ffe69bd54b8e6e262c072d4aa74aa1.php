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
        editor=K.create('textarea[name="ah_title3"]',{
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
<li><a href="#">首页管理</a></li>
<li><a href="#">头部管理</a></li>
<li><a href="#">添加信息</a></li>
</ul>
</div>
<form method="post" name="form" action="">
	<ul class="forminfo">
        <li><label><b>*</b>选择页面</label>
            <select name="nav_id" class="dfinput">
                <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><option value="<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </li>
		
        <li><label><b>*</b>标题1</label><input name="ah_title1" type="text" class="dfinput" value="" /></li>
        <li><label><b>*</b>英文标题1</label><input name="ah_title4" type="text" class="dfinput" value="" /></li>
        <li><label><b>*</b>标题2</label><input name="ah_title2" type="text" class="dfinput" value="" /></li>
        <li><label><b>*</b>标题3</label>
            <textarea name="ah_title3"  class="dfinput" style="width: 400px;height: 300px;"></textarea>
        </li>
	    <li><label><b>*</b>排序</label><input name="ah_sort" type="text" class="dfinput" value="" /></li>
	    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
	</ul>
</form>

</body>
</html>