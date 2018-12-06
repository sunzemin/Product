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
        editor=k.create('textarea[name="ci_content"],textarea[name="ci_content_english"]',{
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
<li><a href="#">关于我们</a></li>
<li><a href="#">公司简介管理</a></li>
<li><a href="#">修改公司简介</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    
    <li><label><b>*</b>公司名称</label><input name="ci_name" type="text" class="dfinput" value="<?php echo ($company_introduce["ci_name"]); ?>" /></li>
    <li><label><b>*</b>标题</label><input name="ci_title" type="text" class="dfinput" value="<?php echo ($company_introduce["ci_title"]); ?>" /></li>
    <li><label><b>*</b>简介</label><textarea name="ci_content" type="text" class="dfinput" value="" style="width:500px;height: 400px;"><?php echo ($company_introduce["ci_content"]); ?></textarea></li>
   
    <li><label><b>*</b>logo</label><input name="ci_logo" type="text" class="dfinput" value="<?php echo ($company_introduce["ci_logo"]); ?>" id="url1"/><input type="button" id="image1" class="scbtn1" value="选择图片"></li>
    <li><label><b>*</b>背景图片</label><input name="ci_image" type="text" class="dfinput" value="<?php echo ($company_introduce["ci_image"]); ?>" id="url2"/><input type="button" id="image2" class="scbtn1" value="选择图片"></li>
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