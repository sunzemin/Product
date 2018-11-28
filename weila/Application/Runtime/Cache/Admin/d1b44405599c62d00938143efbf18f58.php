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
<script type="text/javascript" src="/Public/editor/kindeditor-all-min.js"></script>
<script type="text/javascript" src="/Public/editor/lang/zh_CN.js"></script>
<script type="text/javascript">
    var editor;
    KindEditor.ready(function(k){
        editor=k.create('textarea[name="rs_introduce"]',{
            filterMode:false
        })
        var editor = k.editor({
            allowFileManager : true
        });
        k('#image1').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    imageUrl : k('#url1').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        k('#url1').val(url);
                        editor.hideDialog();
                    }
                });
            });
        });
    })
</script>
<body>
<div class="place">
<span>位置：</span>
<ul class="placeul">
<li><a href="#">首页设置</a></li>
<li><a href="#">服务优势管理</a></li>
<li><a href="#">添加服务优势</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <input name="rs_id" type="hidden" class="dfinput" value="<?php echo ($room_scenery["rs_id"]); ?>" />
    <li><label><b>*</b>选择分类</label>
        <select name="rsc_id" class="dfinput">
            <option value="<?php echo ($room_scenery_classify11["rsc_id"]); ?>"><?php echo ($room_scenery_classify11["rsc_name"]); ?></option>
            <?php if(is_array($room_scenery_classify_res)): $i = 0; $__LIST__ = $room_scenery_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery_classify): $mod = ($i % 2 );++$i;?><option value="<?php echo ($room_scenery_classify["rsc_id"]); ?>"><?php echo ($room_scenery_classify["rsc_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            
        </select>
    </li>
    <li><label><b>*</b>图片</label><input name="rs_image" type="text" class="dfinput" value="<?php echo ($room_scenery["rs_image"]); ?>" id="url1"/><input type="button" id="image1" class="scbtn1" value="选择图片"></li>
    <li><label><b>*</b>名称</label><input name="rs_name" type="text" class="dfinput" value="<?php echo ($room_scenery["rs_name"]); ?>" /></li>
    <li><label><b>*</b>简介</label><textarea name="rs_introduce" type="text" class="dfinput" value="" style="width:500px;height: 400px;"><?php echo ($room_scenery["rs_introduce"]); ?></textarea></li>
    <li><label><b>*</b>分数</label><input name="rs_score" type="text" class="dfinput" value="<?php echo ($room_scenery["rs_score"]); ?>" /></li>
    <li><label><b>*</b>标题</label><input name="rs_blacktitle1" type="text" class="dfinput" value="<?php echo ($room_scenery["rs_blacktitle1"]); ?>" /></li>
    <li><label><b>*</b>作者</label><input name="rs_blackauthor" type="text" class="dfinput" value="<?php echo ($room_scenery["rs_blackauthor"]); ?>" /></li>
    <li><label><b>*</b>是否推荐</label>
    	<select name="rs_flag" type="text" class="dfinput">
    		<?php if($room_scenery["rs_flag"] == 0): ?><option value="0">不推荐到首页</option>
    		    <option value="1">推荐到首页</option>
    			<?php else: ?>
    			<option value="1">推荐到首页</option>
    			<option value="0">不推荐到首页</option><?php endif; ?>	
    	</select>
    </li>
    <li><label><b>*</b>排序</label><input name="rs_sort" type="text" class="dfinput" value="<?php echo ($room_scenery["rs_sort"]); ?>" /></li>
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