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
<li><a href="#">底部管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/index/bottomadd">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加底部</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>二维码图片</th>
            <th>热线电话</th>
            <th>地址</th>
            <th>传真</th>
            <th>邮箱</th>
            <th>备案号</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
            <?php if($footer == ''): else: ?>
                <tr>
                <td>1</td>
                <td><img src="<?php echo ($footer["ferweima"]); ?>" height="40" /></td>
                <td><?php echo ($footer["ftelephone"]); ?></td>
                <td><?php echo ($footer["faddress"]); ?></td>
                <td><?php echo ($footer["ffax"]); ?></td>
                <td><?php echo ($footer["femail"]); ?></td>
                <td><?php echo ($footer["frecord"]); ?></td>
                <td><?php echo ($footer["fsort"]); ?></td>
                <td>
                    <a href="/index.php/Admin/Index/bottomupdate/fid/<?php echo ($vo["fid"]); ?>">修改</a>
                    <a href="/index.php/Admin/Index/bottomdel/nav_id/<?php echo ($vo["fid"]); ?>" onclick="return del()">删除</a>
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