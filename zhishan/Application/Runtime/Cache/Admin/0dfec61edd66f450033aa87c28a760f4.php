<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎登录后台管理系统</title>
<link href="/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Public/admin/js/jquery.js"></script>
<script src="/Public/admin/js/cloud.js" type="text/javascript"></script>

<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 
<script type="text/javascript">
    function InputCheck()
    {
      if (form.username.value == "")
      {
        alert("用户名不能为空！");
        return (false);
      }
      if (form.password.value == "")
      {
        alert("密码不能为空！");
        return (false);
      }
    }
</script>
</head>

<body style="background-color:#1c77ac; background-image:url(/Public/admin/images/pic/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">



    <div id="mainBody">
      <div id="cloud1" class="cloud" style="background:url(/Public/admin/images/pic/cloud.png) no-repeat;"></div>
      <div id="cloud2" class="cloud" ></div>
    </div>  

<div class="logintop">    
    <span>欢迎登录后台管理界面平台</span>    
    <ul>
    <!-- <li><a href="#">回首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li> -->
    </ul>    
    </div>
    
    <div class="loginbody">
    
    <span class="systemlogo" style="background-image:url(/Public/admin/images/pic/loginlogo.png);"></span> 

    <div class="loginbox loginbox1" style="background-image:url(/Public/admin/images/pic/logininfo1.png);">
    
    <ul>
    <form method="post" name="form" action="">
    <li><input name="username" type="text" class="loginuser" value="" onclick="JavaScript:this.value=''" style="background:url(/Public/admin/images/pic/loginuser.png);" /></li>
    <li><input name="userpwd" type="password" class="loginpwd" value="" onclick="JavaScript:this.value=''" style="background:url(/Public/admin/images/pic/loginpassword.png);" /></li>
    <li><input type="submit" onclick="return InputCheck()" value="登录" style="width: 150px;height: 40px;line-height: 40px;text-align: center;font-size: 18px;background-color: #3c94c7;" /><input type="reset" value="取消" style="width: 150px;height: 40px;line-height: 40px;text-align: center;font-size: 18px;background-color: #3c94c7;margin-left: 40px;" /></li>
    </form>
    </ul>
    
    
    </div>
    
    </div>
	
    
</body>

</html>