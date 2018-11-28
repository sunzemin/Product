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
<li><a href="#">背景图片管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/index/background_image_add/p/1">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加背景</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>背景图片</th>
            <th>所示页面</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($background_image_Data)): $k = 0; $__LIST__ = $background_image_Data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><img src="<?php echo ($vo["bi_image"]); ?>" height="40px;"></td>
                        <td>
                            
                            <?php if($vo["bi_flag"] == 0): ?>首页
                                <?php elseif($vo["bi_flag"] == 2): ?>
                                关于我们
                                <?php elseif($vo["bi_flag"] == 3): ?>
                                主营业务
                                <?php elseif($vo["bi_flag"] == 4): ?>
                                劳务派遣
                                <?php elseif($vo["bi_flag"] == 5): ?>
                                招聘外包
                                <?php elseif($vo["bi_flag"] == 6): ?>
                                社保代理
                                <?php elseif($vo["bi_flag"] == 7): ?>
                                企业培训
                                <?php elseif($vo["bi_flag"] == 8): ?>
                                新闻资讯
                                <?php elseif($vo["bi_flag"] == 9): ?>
                                政策法规
                                <?php elseif($vo["bi_flag"] == 10): ?>
                                人才招聘
                                <?php elseif($vo["bi_flag"] == 11): ?>
                                联系我们<?php endif; ?>
                        </td>
                        <td><?php echo ($vo["bi_sort"]); ?></td>
                        <td>
	                        <a href="/index.php/Admin/index/background_image_update/bi_id/<?php echo ($vo["bi_id"]); ?>/p/1">修改</a>
	                        <a href="/index.php/Admin/index/background_image_del/bi_id/<?php echo ($vo["bi_id"]); ?>/p/1" onclick="return del()">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
        <?php if($page == ''): else: ?>
            <ul class="pageul" style="border:1px solid pink;float: left;margin-top: 20px;">
            <?php if($p == 1): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/background_image/p/1" style="margin-left: 20px;"><<</a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/background_image/p/<?php echo ($p-1); ?>" style="margin-left: 20px;"><<</a></li><?php endif; ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/background_image/p/1" style="margin-left: 20px;">首页</a></li>
            <?php $__FOR_START_31318__=1;$__FOR_END_31318__=$page+1;for($i=$__FOR_START_31318__;$i < $__FOR_END_31318__;$i+=1){ ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/background_image/p/<?php echo ($i); ?>" style="margin-left: 20px;"><?php echo ($i); ?></a></li><?php } ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/background_image/p/<?php echo ($page); ?>" style="margin-left: 20px;">尾页</a></li>
            <?php if($p == $page): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/background_image/p/<?php echo ($page); ?>" style="margin-left: 20px;">>></a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/background_image/p/<?php echo ($p+1); ?>" style="margin-left: 20px;">>></a></li><?php endif; ?>
            
        </ul><?php endif; ?>
        
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>