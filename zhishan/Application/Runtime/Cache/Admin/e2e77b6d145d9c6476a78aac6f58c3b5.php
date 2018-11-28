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
<li><a href="#">底部管理</a></li>
<li><a href="#">添加底部</a></li>
</ul>
</div>
<form method="post" name="form" action="">
    <ul class="forminfo">
        <li><label><b>*</b>二维码图片</label>
            <input name="ferweima" type="text" id="url1" value="<?php echo ($bootom["ferweima"]); ?>" class="dfinput"/>
            <input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
        </li>

                    
        <li><label><b>*</b>热线电话</label><input name="ftelephone" type="text" class="dfinput" value="<?php echo ($bootom["ftelephone"]); ?>" /></li>
        <li><label><b>*</b>地址</label><input name="faddress" type="text" class="dfinput" value="<?php echo ($bootom["faddress"]); ?>" /></li>
        <li><label><b>*</b>传真</label><input name="ffax" type="text" class="dfinput" value="<?php echo ($bootom["ffax"]); ?>" /></li>
        <li><label><b>*</b>邮箱</label><input name="femail" type="text" class="dfinput" value="<?php echo ($bootom["femail"]); ?>" /></li>
        <li><label><b>*</b>备案号</label><input name="frecord" type="text" class="dfinput" value="<?php echo ($bootom["frecord"]); ?>" /></li>
        <li><label><b>*</b>排序</label><input name="fsort" type="text" class="dfinput" value="<?php echo ($bootom["fsort"]); ?>" /></li>
        <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
    </ul>
</form>

</body>
</html>