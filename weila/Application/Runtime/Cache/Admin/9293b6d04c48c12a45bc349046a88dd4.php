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
        K('#image2').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    imageUrl : K('#url2').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#url2').val(url);
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
<li><a href="#">公众链接管理</a></li>
<li><a href="#">添加链接</a></li>
</ul>
</div>
<form method="post" name="form" action="">
    <ul class="forminfo">
        <li><label><b>*</b>微信二维码</label>
            <input name="hu_wxerweima" type="text" id="url1" value="<?php echo ($home_url["hu_wxerweima"]); ?>" class="dfinput"/>
            <input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
        </li>   
        <li><label><b>*</b>在线电话链接</label><input name="hu_telephone" type="text" class="dfinput" value="<?php echo ($home_url["hu_telephone"]); ?>" /></li>
        <li><label><b>*</b>微博链接</label><input name="hu_wburl" type="text" class="dfinput" value="<?php echo ($home_url["hu_wburl"]); ?>" /></li>
        <li><label><b>*</b>优惠礼物链接</label><input name="hu_gifurl" type="text" class="dfinput" value="<?php echo ($home_url["hu_gifurl"]); ?>" /></li>
        <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
    </ul>
</form>

</body>
</html>