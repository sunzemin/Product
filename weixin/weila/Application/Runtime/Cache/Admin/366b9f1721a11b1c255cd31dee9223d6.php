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
<li><a href="#">轮播管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/index/lunboadd">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加轮播</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>标题</th>
            <th>轮播图片</th>
            <th>发表时间</th>
            <th>排序</th>
            <!-- <th>版本</th> -->
            <th>所属导航</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($lunboData)): $k = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><?php echo ($vo["lb_title"]); ?></td>
                        <td><img src="<?php echo ($vo["lb_image"]); ?>" height="40px;"></td>
                        <td><?php echo (date("Y-m-d H:i:s",$vo["lb_time"])); ?></td>
                        <td><?php echo ($vo["lb_sort"]); ?></td>
                        <!-- <td>
                        	<?php if($vo["lb_flag"] == 1): ?>手机版
							<?php else: ?>PC<?php endif; ?>
                        </td> -->
                        <td>
                        	<?php if($navdataarr[$k-1]['nav_name'] == null): ?>首页
							<?php else: echo ($navdataarr[$k-1]['nav_name']); endif; ?>
                        </td>
                        <td>
	                        <a href="/index.php/Admin/index/lunboupdate/lb_id/<?php echo ($vo["lb_id"]); ?>">修改</a>
	                        <a href="/index.php/Admin/index/lunbodel/lb_id/<?php echo ($vo["lb_id"]); ?>" onclick="return del()">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
        <?php if($page == ''): else: ?>
            <ul class="pageul" style="border:1px solid pink;float: left;margin-top: 20px;">
            <?php if($p == 1): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/lunbo/p/1" style="margin-left: 20px;"><<</a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/lunbo/p/<?php echo ($p-1); ?>" style="margin-left: 20px;"><<</a></li><?php endif; ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/lunbo/p/1" style="margin-left: 20px;">首页</a></li>
            <?php $__FOR_START_19388__=1;$__FOR_END_19388__=$page+1;for($i=$__FOR_START_19388__;$i < $__FOR_END_19388__;$i+=1){ ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/lunbo/p/<?php echo ($i); ?>" style="margin-left: 20px;"><?php echo ($i); ?></a></li><?php } ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/lunbo/p/<?php echo ($page); ?>" style="margin-left: 20px;">尾页</a></li>
            <?php if($p == $page): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/lunbo/p/<?php echo ($page); ?>" style="margin-left: 20px;">>></a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/lunbo/p/<?php echo ($p+1); ?>" style="margin-left: 20px;">>></a></li><?php endif; ?>
            
        </ul><?php endif; ?>
        
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>