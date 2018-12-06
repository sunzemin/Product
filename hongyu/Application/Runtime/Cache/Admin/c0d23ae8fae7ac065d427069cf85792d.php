<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Public/admin/js/jquery.js"></script>

<script type="text/javascript">
$(function(){   
    //导航切换
    $(".menuson .header").click(function(){
        var $parent = $(this).parent();
        $(".menuson>li.active").not($parent).removeClass("active open").find('.sub-menus').hide();
        
        $parent.addClass("active");
        if(!!$(this).next('.sub-menus').size()){
            if($parent.hasClass("open")){
                $parent.removeClass("open").find('.sub-menus').hide();
            }else{
                $parent.addClass("open").find('.sub-menus').show(); 
            }
            
            
        }
    });
    
    // 三级菜单点击
    $('.sub-menus li').click(function(e) {
        $(".sub-menus li.active").removeClass("active")
        $(this).addClass("active");
    });
    
    $('.title').click(function(){
        var $ul = $(this).next('ul');
        $('dd').find('.menuson').slideUp();
        if($ul.is(':visible')){
            $(this).next('.menuson').slideUp();
        }else{
            $(this).next('.menuson').slideDown();
        }
    });
})  
</script>


</head>

<body style="background:#f0f9fd;">
    <div class="lefttop" style="background:url(/Public/admin/images/pic/lefttop.gif) repeat-x;"><span style="background:url(/Public/images/admin/leftico.png) no-repeat;"></span>首页设置</div>
    
    <dl class="leftmenu" style="background:url(/Public/admin/images/pic/leftline.gif) repeat-y right;">
        
        <dd>
            <ul class="menuson">
                
                <li><cite></cite><a href="/index.php/Admin/AboutUs/company_introduce" target="rightFrame">公司简介</a><i></i></li>
                <li><cite></cite><a href="/index.php/Admin/AboutUs/basedata" target="rightFrame">背景信息</a><i></i></li>
            
            </ul>
        </dd>
    </dl>
    
</body>
</html>