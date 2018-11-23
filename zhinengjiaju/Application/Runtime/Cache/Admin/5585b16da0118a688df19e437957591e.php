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
<li><a href="#">产品管理</a></li>
<li><a href="#">产品中心</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/Product/product_add/p/<?php echo ($p); ?>/pc_id/<?php echo ($pc_id); ?>">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加文章信息</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>产品图片</th>
            <th>产品名称</th>
            <th>产品价格</th>
            <th>发布时间</th>
            <th>所属分类</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($product_res)): $k = 0; $__LIST__ = $product_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><img src="<?php echo ($vo["pimage"]); ?>" height="40px;"/></td>
                        <td><?php echo ($vo["pname"]); ?></td>
                        <td><?php echo ($vo["pprice"]); ?></td>
                        <td><?php echo (date("Y-m-d",$vo["ptime"])); ?></td>
                        <td><?php echo ($product_classify_res[$k-1]["pc_name"]); ?></td>
                        <td><?php echo ($vo["psort"]); ?></td>
                        <td>
                            <a href="/index.php/Admin/Product/product_update/pid/<?php echo ($vo["pid"]); ?>/pc_id/<?php echo ($pc_id); ?>/p/<?php echo ($p); ?>">修改</a>
                            <a href="/index.php/Admin/Product/product_del/pid/<?php echo ($vo["pid"]); ?>/pc_id/<?php echo ($pc_id); ?>/p/<?php echo ($p); ?>" onclick="return del()">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
        <?php if($page == ''): else: ?>
            <ul class="pageul" style="border:1px solid pink;float: left;margin-top: 20px;">
            <?php if($p == 1): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Product/product/p/1/pc_id/<?php echo ($pc_id); ?>" style="margin-left: 20px;"><<</a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Product/product/pc_id/<?php echo ($pc_id); ?>/p/<?php echo ($p-1); ?>" style="margin-left: 20px;"><<</a></li><?php endif; ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Product/product/pc_id/<?php echo ($pc_id); ?>/p/1" style="margin-left: 20px;">首页</a></li>
            <?php $__FOR_START_5302__=1;$__FOR_END_5302__=$page+1;for($i=$__FOR_START_5302__;$i < $__FOR_END_5302__;$i+=1){ ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Product/product/pc_id/<?php echo ($pc_id); ?>/p/<?php echo ($i); ?>" style="margin-left: 20px;"><?php echo ($i); ?></a></li><?php } ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Product/product/pc_id/<?php echo ($pc_id); ?>/p/<?php echo ($page); ?>" style="margin-left: 20px;">尾页</a></li>
            <?php if($p == $page): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Product/product/pc_id/<?php echo ($pc_id); ?>/p/<?php echo ($page); ?>" style="margin-left: 20px;">>></a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Product/product/pc_id/<?php echo ($pc_id); ?>/p/<?php echo ($p+1); ?>" style="margin-left: 20px;">>></a></li><?php endif; ?>
            
        </ul><?php endif; ?>
        
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>