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
        editor=k.create('textarea[name="cw_content"]',{
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
<li><a href="#">客户评论</a></li>
<li><a href="#">客户评论管理</a></li>
<li><a href="#">添加客户评论</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <input name="cw_id" type="hidden" class="dfinput" value="<?php echo ($custom_word["cw_id"]); ?>" />
    <li><label><b>*</b>评论者</label><input name="cw_name" type="text" class="dfinput" value="<?php echo ($custom_word["cw_name"]); ?>" /></li> 
    <li><label><b>*</b>头像</label><input name="cw_image" type="text" class="dfinput" value="<?php echo ($custom_word["cw_image"]); ?>" id="url1"/><input type="button" id="image1" class="scbtn1" value="选择图片"></li>
    <li><label><b>*</b>简介</label><textarea name="cw_content" type="text" class="dfinput" value="" style="width:500px;height: 400px;"><?php echo ($custom_word["cw_content"]); ?></textarea></li>
    <li><label><b>*</b>是否VIP</label>
        <select class="dfinput" name="cw_flag">
            <?php if($custom_word["cw_flag"] == 0): ?><option value="0">普通用户</option>
                <option value="1">VIP</option>
                <?php else: ?>
                <option value="1">VIP</option>
                <option value="0">普通用户</option><?php endif; ?> 
        </select>

    </li>
    <li><label><b>*</b>评论等级</label>
        <select class="dfinput" name="cw_word_rank">
            <?php if($custom_word["cw_word_rank"] == 1): elseif($custom_word["cw_word_rank"] == 2): ?>
                <option value="2">一颗星</option>
                <?php elseif($custom_word["cw_word_rank"] == 3): ?>
                <option value="3">二颗星</option>
                <?php elseif($custom_word["cw_word_rank"] == 4): ?>
                <option value="4">三颗星</option>
                <?php elseif($custom_word["cw_word_rank"] == 5): ?>
                <option value="5">四颗星</option>
                <?php elseif($custom_word["cw_word_rank"] == 6): ?>
                <option value="6">五颗星</option><?php endif; ?>
            <option value="1">选择等级</option>
            <option value="2">一颗星</option>
            <option value="3">二颗星</option>
            <option value="4">三颗星</option>
            <option value="5">四颗星</option>
            <option value="6">五颗星</option>
        </select>

    </li>
    <li><label><b>*</b>用户等级</label><input name="cw_user_rank" type="text" class="dfinput" value="<?php echo ($custom_word["cw_user_rank"]); ?>" placeholder="Lv3" /></li>
    <li><label><b>*</b>手机类型</label><input name="cw_kind" type="text" class="dfinput" value="<?php echo ($custom_word["cw_kind"]); ?>" /></li>
    <li><label><b>*</b>排序</label><input name="cw_sort" type="text" class="dfinput" value="<?php echo ($custom_word["cw_sort"]); ?>" /></li>
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