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
<li><a href="#">关于薇拉</a></li>
<li><a href="#">背景信息管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/AboutUs/basedata_add">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加背景信息</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>标题1</th>
            <th>标题2</th>
            <th>标题3</th>
            <th>标题4</th>
            
            <th>所属导航</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($basedata_res)): $k = 0; $__LIST__ = $basedata_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><?php echo ($vo["title1"]); ?></td>
                        <td><?php echo ($vo["title2"]); ?></td>
                        <td><?php echo ($vo["title3"]); ?></td>
                        <td><?php echo ($vo["title4"]); ?></td>
                        
                        <td><?php echo ($navarr[$k-1]["nav_name"]); ?></td>
                        <td><?php echo ($vo["sort"]); ?></td>
                        <td>
                            <a href="/index.php/Admin/AboutUs/basedata_update/id/<?php echo ($vo["id"]); ?>">修改</a>
                            <a href="/index.php/Admin/AboutUs/basedata_del/id/<?php echo ($vo["id"]); ?>" onclick="return del()">删除</a>
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