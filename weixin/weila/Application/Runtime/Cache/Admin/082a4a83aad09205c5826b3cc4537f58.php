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
        editor=k.create('textarea[name="sa_advantage_content"]',{
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
        k('#image2').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    imageUrl : k('#url2').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        k('#url2').val(url);
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
<li><a href="#">主营业务</a></li>
<li><a href="#">分类管理</a></li>
<li><a href="#">添加分类</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <li><label><b>*</b>分类名称</label>
        <select name="pwc_id" class="dfinput">
            <!-- <option value="0">选择业务分类</option> -->
            <?php if(is_array($primary_work_classify_res)): $i = 0; $__LIST__ = $primary_work_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$primary_work_classify): $mod = ($i % 2 );++$i;?><option value="<?php echo ($primary_work_classify["pwc_id"]); ?>"><?php echo ($primary_work_classify["pwc_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </li>
    <li><label><b>*</b>业务名称</label><input name="pw_name" type="text" class="dfinput" value="" /></li>
    <li><label><b>*</b>图标</label><input name="pw_image" type="text" class="dfinput" value="" id="url2"/><input type="button" id="image2" class="scbtn1" value="选择图片"></li>
    <li><label><b>*</b>是否推荐</label>
        <select name="pw_flag" class="dfinput">
            <option value="0">不推荐到首页</option>
            <option value="1">推荐到首页</option>
        </select> 
    </li>
    <li><label><b>*</b>排序</label><input name="pw_sort" type="text" class="dfinput" value="" /></li>
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
        });
    })
</script>