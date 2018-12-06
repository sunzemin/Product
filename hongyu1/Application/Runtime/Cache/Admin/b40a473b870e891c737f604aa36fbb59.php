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
        editor=K.create('textarea[name="map"],textarea[name="introduce"]',{
            filterMode:false
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
<li><a href="#">底部管理</a></li>
<li><a href="#">修改底部</a></li>
</ul>
</div>
<form method="post" name="form" action="">
	<ul class="forminfo">
        <li><label><b>*</b>微信二维码</label>
            <input name="wx_erweima" type="text" id="url1" value="<?php echo ($bootom["wx_erweima"]); ?>" class="dfinput"/>
            <input name="" type="button" id="image1"  class="scbtn1" value="选择图片" />
        </li>          
        <li><label><b>*</b>热线电话1</label><input name="telephone" type="text" class="dfinput" value="<?php echo ($bootom["telephone"]); ?>" /></li>
        <li><label><b>*</b>热线电话2</label><input name="telephone1" type="text" class="dfinput" value="<?php echo ($bootom["telephone1"]); ?>" /></li>
        <li><label><b>*</b>手机号码1</label><input name="mobile" type="text" class="dfinput" value="<?php echo ($bootom["mobile"]); ?>" /></li>
        <li><label><b>*</b>手机号码2</label><input name="mobile1" type="text" class="dfinput" value="<?php echo ($bootom["mobile1"]); ?>" /></li>
        <li><label><b>*</b>客服1</label><input name="qq" type="text" class="dfinput" value="<?php echo ($bootom["qq"]); ?>" /></li>
        <li><label><b>*</b>客服2</label><input name="qq1" type="text" class="dfinput" value="<?php echo ($bootom["qq1"]); ?>" /></li>
        <li><label><b>*</b>地址</label><input name="address" type="text" class="dfinput" value="<?php echo ($bootom["address"]); ?>" /></li>
        <li><label><b>*</b>版权</label><input name="copyright" type="text" class="dfinput" value="<?php echo ($bootom["copyright"]); ?>" /></li>
        <li><label><b>*</b>备案号</label><input name="record" type="text" class="dfinput" value="<?php echo ($bootom["record"]); ?>" /></li>
        <li><label><b>*</b>地图</label>
            <textarea name="map"  class="dfinput" style="width: 400px;height: 300px;"><?php echo ($bootom["map"]); ?></textarea>
        </li>
        <li><label><b>*</b>底部信息</label>
            <textarea name="introduce"  class="dfinput" style="width: 400px;height: 300px;"><?php echo ($bootom["introduce"]); ?></textarea>
        </li>
        <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存"/></li>
    </ul>
</form>

</body>
</html>