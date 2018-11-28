<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Public/admin/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>


</head>

<body style="background:url(/Public/admin/images/pic/topbg.gif) repeat-x;">

    <div class="topleft" style="background:url(/Public/images/admin/topleft.jpg)no-repeat;">
    <a href="index.html" target="_parent"><img src="/Public/admin/images/pic/logo.png" title="系统首页" /></a>
    </div>
        
    <ul class="nav">
    <li><a href="index.html" target="_parent" class="selected"><img src="/Public/admin/images/pic/icon01.png" title="基础设置" /><h2>基础设置</h2></a></li>
    <li><a href="/index.php/Admin/HomeManage/left"  target="leftFrame"><img src="/Public/admin/images/pic/icon02.png" title="首页管理" /><h2>首页管理</h2></a></li>
    <li><a href="/index.php/Admin/AboutUs/left"  target="leftFrame"><img src="/Public/admin/images/pic/icon02.png" title="内容管理" /><h2>关于我们</h2></a></li>
    <li><a href="/index.php/Admin/LinkUs/left"  target="leftFrame"><img src="/Public/admin/images/pic/icon02.png" title="服务项目" /><h2>联系我们</h2></a></li>
    <li><a href="/index.php/Admin/NewsInformation/left"  target="leftFrame"><img src="/Public/admin/images/pic/icon02.png" title="服务项目" /><h2>新闻资讯</h2></a></li>
    <li><a href="/index.php/Admin/Policy/left"  target="leftFrame"><img src="/Public/admin/images/pic/icon02.png" title="服务项目" /><h2>政策法规</h2></a></li>
    <li><a href="/index.php/Admin/PrimaryWork/left"  target="leftFrame"><img src="/Public/admin/images/pic/icon02.png" title="服务项目" /><h2>主营业务</h2></a></li>
    <li><a href="/index.php/Admin/Talent/left"  target="leftFrame"><img src="/Public/admin/images/pic/icon02.png" title="服务项目" /><h2>人才招聘</h2></a></li>
    </ul>
            
    <div class="topright" style="background:url(/Public/admin/images/pic/topright.jpg);">    
    <ul>
    <!-- <li><span><img src="/Public/admin/images/pic/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li> -->
    <li><a href="#">关于</a></li>
    <li><a href="/index.php/Admin/Login/loginout" target="_parent">退出</a></li>
    </ul>
     
    <div class="user" style="background:url(/Public/admin/images/pic/ub1.png);">
    <span style="background:url(/Public/admin/images/pic/user.png) no-repeat 15px 10px;"><?php echo ($adminsel["aname"]); ?></span>
   <!--  <i>消息</i>
   <b style="background:url(/Public/admin/images/pic/msg.png);">5</b> -->
    </div>    
    
    </div>

</body>
</html>