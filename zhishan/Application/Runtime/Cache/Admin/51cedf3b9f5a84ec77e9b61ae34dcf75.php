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
<li><a href="#">轮播管理</a></li>
<li><a href="#">修改轮播</a></li>
</ul>
</div>
<form method="post" name="form" action="">
	<ul class="forminfo">
		<li><label><b>*</b>轮播图片</label>
			<input name="lb_image" type="text" id="url1" value="<?php echo ($lunbodata["lb_image"]); ?>" class="dfinput"/>
			<input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
		</li>
		<li><label><b>*</b>所属导航</label>
			<select class="dfinput dfinputOne" name="nav_id">
				<?php if($lunbodata["nav_id"] == 0): ?><option value="0">首页</option>
					<?php else: ?>
					<option value="<?php echo ($navdata["nav_id"]); ?>"><?php echo ($navdata["nav_name"]); ?></option><?php endif; ?>
				
				<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value="<?php echo ($vo["nav_id"]); ?>"><?php echo ($vo["nav_name"]); ?></option>
					<?php if(is_array($navarr[$k-1])): $i = 0; $__LIST__ = $navarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><option style="color: red;" value="<?php echo ($vos["nav_id"]); ?>"><?php echo ($vos["nav_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</li>
					
	    <li><label><b>*</b>链接</label><input name="lb_url" type="text" class="dfinput" value="<?php echo ($lunbodata["lb_url"]); ?>" /></li>
	    <li><label><b>*</b>pc/Mobile</label>
	    	<select class="dfinput" name="lb_flag">
	    		<?php if($lunbodata["lb_flag"] == 0): ?><option value="0">PC</option>
	    		    <option value="1">手机版</option>
	    		    <?php else: ?>
	    		    <option value="1">手机版</option>
	    		    <option value="0">PC</option><?php endif; ?>
	    		
	    	</select>
	    </li>
	    <li><label><b>*</b>排序</label><input name="lb_sort" type="text" class="dfinput" value="<?php echo ($lunbodata["lb_sort"]); ?>" /></li>
	    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
	</ul>
</form>

</body>
</html>