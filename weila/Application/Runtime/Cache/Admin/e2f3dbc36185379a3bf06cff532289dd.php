<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>底部管理</title>
<link href="/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/css.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Public/admin/js/jquery.js"></script>
<script type="text/javascript"> 
function del(){ 
    if(!confirm("确认要删除？")){ 
        window.event.returnValue = false; 
    } 
} 
</script>
<body>
<div class="place">
<span>位置：</span>
<ul class="placeul">
<li><a href="#">首页管理</a></li>
<li><a href="#">公共链接</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/index/home_url_add">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加链接</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>微信二维码</th>
            <th>微博链接</th>
            <th>优惠礼物链接</th>
            <th>在线咨询链接</th>
            <th>最新作品链接</th>
            <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if($home_url == ''): else: ?>
                <tr>
                <td>1</td>
                <td><img src="<?php echo ($home_url["hu_wxerweima"]); ?>" height="40" /></td>
                <td><?php echo ($home_url["hu_wburl"]); ?></td>
                <td><?php echo ($home_url["hu_gifurl"]); ?></td>
                <td><?php echo ($home_url["hu_telephone"]); ?></td>
                <td><?php echo ($home_url["hu_producturl"]); ?></td>
                <td>
                    <a href="/index.php/Admin/Index/home_url_update">修改</a>
                    <a href="/index.php/Admin/Index/home_url_del" onclick="return del()">删除</a>
                </td>
                </tr><?php endif; ?>
            
            </tbody>  
        </table>
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>