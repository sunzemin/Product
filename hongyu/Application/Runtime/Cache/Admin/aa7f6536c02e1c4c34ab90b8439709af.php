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
        editor=k.create('textarea[name="ct_content"]',{
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
<li><a href="#">关于我们</a></li>
<li><a href="#">公司与团队</a></li>
<li><a href="#">添加信息</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <input name="ct_id" type="hidden" class="dfinput" value="<?php echo ($company_team["ct_id"]); ?>" />
    <li><label><b>*</b>选择导航</label>
        <select name="nav_id" class="dfinput">
            <option value="<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></option>
            <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><option value="<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></option>
                <?php if(is_array($navarr[$k-1])): $i = 0; $__LIST__ = $navarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["nav_id"]); ?>" style="color: red;"><?php echo ($vo["nav_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </li>
    <li><label><b>*</b>标题</label><input name="ct_title" type="text" class="dfinput" value="<?php echo ($company_team["ct_title"]); ?>" /></li>
    <li><label><b>*</b>图片</label><input name="ct_image" type="text" class="dfinput" value="<?php echo ($company_team["ct_image"]); ?>" id="url1"/><input type="button" id="image1" class="scbtn1" value="选择图片"></li>
    <li><label><b>*</b>内容</label><textarea name="ct_content" class="dfinput" style="width: 500px;height: 400px;"><?php echo ($company_team["ct_content"]); ?></textarea></li>
    <li><label><b>*</b>排序</label><input name="ct_sort" type="text" class="dfinput" value="<?php echo ($company_team["ct_sort"]); ?>" /></li>
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