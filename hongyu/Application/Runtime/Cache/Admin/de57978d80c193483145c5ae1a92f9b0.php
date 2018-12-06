<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加图文消息</title>
<link href="/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/Public/editor/themes/default/default.css" />
<script language="JavaScript" src="/Public/admin/js/myjs.js"></script>
<script language="JavaScript" src="/Public/admin/js/jquery.js"></script>
<script type="text/javascript">
    function InputCheck(){
        var username=$("#username").val();
        var password=$("#password").val();
        var passwordtwo=$("#passwordtwo").val();
        if(username=="" || username==null){
            alert("用户名不能为空");
            return false;
        }
        if(password==""||password==null){
            alert("密码不能为空!");
            return false;
        }else{
            if(password.length<6){
                alert("密码强度不够,不能少于6位,请检查!");
                return false;
            }
            if(password.length>20){
                alert("密码长度不能大于20位,请检查!");
                return false;
            }
        }
        if(passwordtwo==""||passwordtwo==null){
            alert("确认密码不能为空!");
            return false;
        }else{
            if(password!=passwordtwo){
                alert("两次密码输入不一致,请检查!");
                return false;
            }
        }
    }
</script>
<body>
<div class="place">
<span>位置：</span>
<ul class="placeul">
<li><a href="#">基础设置</a></li>
<li><a href="#">文章列表</a></li>
<li><a href="#">添加文章</a></li>
</ul>
</div>
<form method="post" name="form" action="">
<ul class="forminfo">
    <li><label><b>*</b>用户名</label><input name="aname" type="text" id="username" class="dfinput" /></li>
    <li><label><b>*</b>密码</label><input name="apwd" id="password" type="password" class="dfinput" /></li>
    <li><label><b>*</b>确认密码</label><input name="apwdtwo" id="passwordtwo" type="password" class="dfinput" /></li>
    <li><label><b>*</b>排序</label><input name="asort" type="text" id="username" class="dfinput" /></li>
    <li><label>&nbsp;</label><input name="submit" type="submit" class="btn" value="确认保存" onclick="return InputCheck()"/></li>
</ul>
</form>
</body>
</html>