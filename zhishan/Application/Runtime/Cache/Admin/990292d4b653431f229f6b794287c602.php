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
        editor=k.create('textarea[name="na_content"]',{
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
<li><a href="#">新闻文章管理</a></li>
<li><a href="#">修改新闻</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <input name="na_id" type="hidden" class="dfinput" value="<?php echo ($news_article["na_id"]); ?>" />
    <li><label><b>*</b>标题</label><input name="na_title" type="text" class="dfinput" value="<?php echo ($news_article["na_title"]); ?>" /></li>
    
    <li><label><b>*</b>简介</label><textarea name="na_content" type="text" class="dfinput" value="" style="width:500px;height: 400px;"><?php echo ($news_article["na_content"]); ?></textarea></li>
    <li><label><b>*</b>图片</label><input name="na_image" type="text" class="dfinput" value="<?php echo ($news_article["na_image"]); ?>" id="url1"/><input type="button" id="image1" class="scbtn1" value="选择图片"></li>
    <li><label><b>*</b>作者</label><input name="na_author" type="text" class="dfinput" value="<?php echo ($news_article["na_author"]); ?>" /></li>
    <li><label><b>*</b>来源</label><input name="na_origin" type="text" class="dfinput" value="<?php echo ($news_article["na_origin"]); ?>" /></li>
    <li><label><b>*</b>排序</label><input name="sa_sort" type="text" class="dfinput" value="<?php echo ($news_article["na_sort"]); ?>" /></li>
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