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
                <a href="/index.php/Admin/HomeManage/room_scenery_add/p/<?php echo ($p); ?>">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加分类信息</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>图片</th>
            <th>名称</th>
            <th>分数</th>
            <th>所属分类</th>
            <th>标题</th>
            <th>是否推荐</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($room_scenery_res)): $k = 0; $__LIST__ = $room_scenery_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><img src="<?php echo ($vo["rs_image"]); ?>" height="40px;"></td>
                        <td><?php echo ($vo["rs_name"]); ?></td>
                        <td><?php echo ($vo["rs_score"]); ?></td>
                        <td><?php echo ($room_scenery_classify_res[$k-1]["rsc_name"]); ?></td>
                        <td><?php echo ($vo["rs_blacktitle1"]); ?></td>
                        <td>
                        	<?php if($vo["rs_flag"] == 0): ?><b style="color: blue;">不推荐</b>
                        		<?php else: ?>
                        		<b style="color: red;">推荐</b><?php endif; ?>
                        </td>
                        <td><?php echo ($vo["rs_sort"]); ?></td>
                        <td>
                            
                            <a href="/index.php/Admin/HomeManage/room_scenery_update/rs_id/<?php echo ($vo["rs_id"]); ?>/p/<?php echo ($p); ?>">修改</a>
                            <a href="/index.php/Admin/HomeManage/room_scenery_del/rs_id/<?php echo ($vo["rs
                            _id"]); ?>/p/<?php echo ($p); ?>" onclick="return del()">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
        <?php if($page == ''): else: ?>
            <ul class="pageul" style="border:1px solid pink;float: left;margin-top: 20px;">
            <?php if($p == 1): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/room_scenery/p/1" style="margin-left: 20px;"><<</a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/room_scenery/p/<?php echo ($p-1); ?>" style="margin-left: 20px;"><<</a></li><?php endif; ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/room_scenery/p/1" style="margin-left: 20px;">首页</a></li>
            <?php $__FOR_START_17410__=1;$__FOR_END_17410__=$page+1;for($i=$__FOR_START_17410__;$i < $__FOR_END_17410__;$i+=1){ ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/room_scenery/p/<?php echo ($i); ?>" style="margin-left: 20px;"><?php echo ($i); ?></a></li><?php } ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/room_scenery/p/<?php echo ($page); ?>" style="margin-left: 20px;">尾页</a></li>
            <?php if($p == $page): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/room_scenery/p/<?php echo ($page); ?>" style="margin-left: 20px;">>></a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/HomeManage/room_scenery/p/<?php echo ($p+1); ?>" style="margin-left: 20px;">>></a></li><?php endif; ?>
            
        </ul><?php endif; ?>
        
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>