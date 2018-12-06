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
<body>
<div class="place">
<span>位置：</span>
<ul class="placeul">
<li><a href="#">基础设置</a></li>
<li><a href="#">修改导航</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <input name="nav_id" type="hidden" class="dfinput" value="<?php echo ($navdata["nav_id"]); ?>" />
	<li><label><b>*</b>父级导航</label>
		<select name="nav_fid" class="dfinput state">
            <?php if(parentnav == null): ?><option value="0">一级导航</option>
                <?php else: ?>
                <option value="<?php echo ($parentnav["nav_id"]); ?>"><?php echo ($parentnav["nav_name"]); ?></option><?php endif; ?>
			
			<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["nav_id"]); ?>"><?php echo ($vo["nav_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
	</li>
    <li><label><b>*</b>导航名称</label><input name="nav_name" type="text" class="dfinput" value="<?php echo ($navdata["nav_name"]); ?>" /></li>
    <li><label><b>*</b>链接</label><input name="nav_url" type="text" class="dfinput" value="<?php echo ($navdata["nav_url"]); ?>" /></li>
    <li><label><b>*</b>排序</label><input name="nav_sort" type="text" class="dfinput" value="<?php echo ($navdata["nav_sort"]); ?>" /></li>
    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
</ul>
</form>
</body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
	$(function(){
        var state=$('.state option:selected').val();
        if(state==0){
        	$(".state2b").show();
        }else{
        	$(".state2b").hide();
        }
        $(".state").click(function(){
        	var state2=$('.state option:selected').val();
        	if(state2==0){
	        	$(".state2b").show();
	        }else{
	        	$(".state2b").hide();
	        }
        }) 
    })
</script>

</html>