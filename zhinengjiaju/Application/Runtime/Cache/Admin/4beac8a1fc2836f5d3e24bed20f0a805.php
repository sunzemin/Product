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
<li><a href="#">首页管理</a></li>
<li><a href="#">内景分类管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/AboutUs/little_classify_add/p/<?php echo ($p); ?>/ac_id/<?php echo ($ac_id); ?>">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加分类信息</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>分类名称</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($little_classify_res)): $k = 0; $__LIST__ = $little_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><?php echo ($vo["lc_name"]); ?></td>
                        <td><?php echo ($vo["lc_sort"]); ?></td>
                        
                        <td>
                            <a href="/index.php/Admin/AboutUs/classify_article/lc_id/<?php echo ($vo["lc_id"]); ?>/p/1">文章管理</a>
                            <a href="/index.php/Admin/AboutUs/little_classify_update/lc_id/<?php echo ($vo["lc_id"]); ?>/p/<?php echo ($p); ?>">修改</a>
                            <a href="/index.php/Admin/AboutUs/little_classify_del/lc_id/<?php echo ($vo["lc_id"]); ?>/p/<?php echo ($p); ?>" onclick="return del()">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
        <?php if($page == ''): else: ?>
            <ul class="pageul" style="border:1px solid pink;float: left;margin-top: 20px;">
            <?php if($p == 1): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/service_advantage/p/1" style="margin-left: 20px;"><<</a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/service_advantage/p/<?php echo ($p-1); ?>" style="margin-left: 20px;"><<</a></li><?php endif; ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/service_advantage/p/1" style="margin-left: 20px;">首页</a></li>
            <?php $__FOR_START_8403__=1;$__FOR_END_8403__=$page+1;for($i=$__FOR_START_8403__;$i < $__FOR_END_8403__;$i+=1){ ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/service_advantage/p/<?php echo ($i); ?>" style="margin-left: 20px;"><?php echo ($i); ?></a></li><?php } ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/service_advantage/p/<?php echo ($page); ?>" style="margin-left: 20px;">尾页</a></li>
            <?php if($p == $page): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/service_advantage/p/<?php echo ($page); ?>" style="margin-left: 20px;">>></a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/service_advantage/p/<?php echo ($p+1); ?>" style="margin-left: 20px;">>></a></li><?php endif; ?>
            
        </ul><?php endif; ?>
        
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>