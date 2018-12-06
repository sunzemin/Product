<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> 后台管理 </title>
    <link rel="stylesheet" href="/Public/admin/frame/layui/css/layui.css">
    <link rel="stylesheet" href="/Public/admin/frame/static/css/style.css">
    <link rel="icon" href="/Public/admin/frame/static/image/code.png">
    
</head>
<body>

<!-- layout admin -->
<div class="layui-layout layui-layout-admin"> <!-- 添加skin-1类可手动修改主题为纯白，添加skin-2类可手动修改主题为蓝白 -->
    <!-- header -->
    <div class="layui-header my-header">
        <a href="/index.php/Admin/Index/index">
            <!--<img class="my-header-logo" src="" alt="logo">-->
            <div class="my-header-logo">后台管理系统 </div>
        </a>
        <div class="my-header-btn">
            <button class="layui-btn layui-btn-small btn-nav"><i class="layui-icon">&#xe65f;</i></button>
        </div>

        <!-- 顶部左侧添加选项卡监听 -->
        <ul class="layui-nav" lay-filter="side-top-left"> 
        </ul>

        <!-- 顶部右侧添加选项卡监听 -->
        <ul class="layui-nav my-header-user-nav" lay-filter="side-top-right">
            <li class="layui-nav-item">
                <a class="name" href="javascript:;"><img src="/Public/admin/frame/static/image/code.png" alt="logo"> <?php echo ($admin["aname"]); ?> </a>
                <dl class="layui-nav-child">
                    <dd><a href="/index.php/Admin/Login/loginout"><i class="layui-icon">&#x1006;</i>退出</a></dd>
                </dl>
            </li>
        </ul>

    </div>
    <!-- side -->
    <div class="layui-side my-side">
        <div class="layui-side-scroll">
            <!-- 左侧主菜单添加选项卡监听 -->
            <ul class="layui-nav layui-nav-tree" lay-filter="side-main">
               <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe620;</i>基础</a>
                    <dl class="layui-nav-child">
                        <!-- &#xe621; -->
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/user"><i class="layui-icon"></i>管理员管理</a></dd>
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/password/aid/<?php echo ($aid); ?>"><i class="layui-icon"><!-- &#xe621; --></i>密码管理</a></dd>
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/nav"><i class="layui-icon"></i>导航管理</a></dd>
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/background_image"><i class="layui-icon"></i>背景图片管理</a></dd>
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/bottom"><i class="layui-icon"></i>底部管理</a></dd>
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/map"><i class="layui-icon"></i>地图管理</a></dd>
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/lunbo"><i class="layui-icon"></i>轮播管理</a></dd>
                        
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Index/user1/p/1"><i class="layui-icon"></i>用户管理</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe620;</i>分类管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Classify/all_classify/p/1"><i class="layui-icon"></i>总分类管理</a></dd>  
                    </dl>
                </li>
                 <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe620;</i>首页管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" href-url="/index.php/Admin/HomeManage/home_classify/p/1"><i class="layui-icon"></i>分类管理</a></dd> 
                        <dd><a href="javascript:;" href-url="/index.php/Admin/HomeManage/home_little_classify/p/1"><i class="layui-icon"></i>二级分类</a></dd> 
                        <dd><a href="javascript:;" href-url="/index.php/Admin/HomeManage/allhead/p/1"><i class="layui-icon"></i>我们的优势</a></dd> 
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe620;</i>公司简介</a>
                    <dl class="layui-nav-child">
                         
                        <dd><a href="javascript:;" href-url="/index.php/Admin/AboutUs/company_introduce"><i class="layui-icon"></i>公司简介</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="layui-icon">&#xe620;</i>案例管理</a>
                    <dl class="layui-nav-child">
                         
                        <dd><a href="javascript:;" href-url="/index.php/Admin/Case/casewatch"><i class="layui-icon"></i>成功案例</a></dd>
                    </dl>
                </li>
            </ul>

        </div>
    </div>
    <!-- body -->
    <div class="layui-body my-body">
        <div class="layui-tab layui-tab-card my-tab" lay-filter="card" lay-allowClose="true">
            <ul class="layui-tab-title">
                <li class="layui-this" lay-id="1"><span><i class="layui-icon">&#xe638;</i><!-- 欢迎页 --></span></li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                     <!-- <iframe id="iframe" src="/index.php/Admin/Index/welcome" frameborder="0"></iframe>  -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="layui-footer my-footer">
        
    </div>
</div>

<!-- pay -->
<div class="my-pay-box none">
    <div><img src="/Public/admin/frame/static/image/zfb.png" alt="支付宝"><p>支付宝</p></div>
    <div><img src="/Public/admin/frame/static/image/wx.png" alt="微信"><p>微信</p></div>
</div>

<!-- 右键菜单 -->
<div class="my-dblclick-box none">
    <table class="layui-tab dblclick-tab">
        <tr class="card-refresh">
            <td><i class="layui-icon">&#x1002;</i>刷新当前标签</td>
        </tr>
        <tr class="card-close">
            <td><i class="layui-icon">&#x1006;</i>关闭当前标签</td>
        </tr>
        <tr class="card-close-all">
            <td><i class="layui-icon">&#x1006;</i>关闭所有标签</td>
        </tr>
    </table>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="/Public/admin/frame/layui/layui.js"></script>
<script type="text/javascript" src="/Public/admin/frame/static/js/vip_comm.js"></script>

</body>
</html>