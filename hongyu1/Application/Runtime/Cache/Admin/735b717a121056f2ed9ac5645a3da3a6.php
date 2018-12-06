<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>轮播管理</title>
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
<li><a href="#">关于我们管理</a></li>
<li><a href="#">分类管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/AboutUs/about_classify_add/p/<?php echo ($p); ?>">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加分类</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>分类名称</th>
            <th>所属导航</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($about_us_classify_res)): $k = 0; $__LIST__ = $about_us_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><?php echo ($vo["auc_name"]); ?></td>
                        <td><?php echo ($navarr[$k-1]["nav_name"]); ?></td>
                        <td><?php echo ($vo["auc_sort"]); ?></td>
                        <td>
                            <a href="/index.php/Admin/AboutUs/about_classify_update/auc_id/<?php echo ($vo["auc_id"]); ?>/p/<?php echo ($p); ?>">修改</a>
                            <a href="/index.php/Admin/AboutUs/about_classify_del/auc_id/<?php echo ($vo["auc_id"]); ?>/p/<?php echo ($p); ?>" onclick="return del()">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>