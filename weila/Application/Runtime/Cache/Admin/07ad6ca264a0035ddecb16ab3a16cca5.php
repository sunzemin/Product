<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图文列表</title>
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
<!-- <li><a href="#">内容管理</a></li> -->
<li><a href="#">导航管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/Index/footer_nav_add">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加导航</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>导航名称</th>  
            <th>英文名称</th>
            <th>链接</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
            <?php if(is_array($footer_navres)): $k = 0; $__LIST__ = $footer_navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
            <td><?php echo ($k); ?></td>
            <td><?php echo ($vo["fn_nav_name"]); ?></td>
            <td><?php echo ($vo["fn_english_name"]); ?></td>
            <td><?php echo ($vo["fn_url"]); ?></td>
            <td><?php echo ($vo["fn_sort"]); ?></td>
            <td>
                <a href="/index.php/Admin/Index/footer_nav_update/fn_id/<?php echo ($vo["fn_id"]); ?>">修改</a>
                <a href="/index.php/Admin/Index/footer_nav_del/fn_id/<?php echo ($vo["fn_id"]); ?>" onclick="return del()">删除</a>
            </td>
            </tr>
	            <?php if(is_array($navfooterarr[$k-1])): $i = 0; $__LIST__ = $navfooterarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><tr>
		            <td><span style="color: red;">***</span></td>
		            <td><?php echo ($vos["fn_nav_name"]); ?></td>
                    <td><?php echo ($vos["fn_english_name"]); ?></td>
                    <td><?php echo ($vos["fn_url"]); ?></td>
		            <td><?php echo ($vos["fn_sort"]); ?></td>
		            <td>
		                <a href="/index.php/Admin/Index/footer_nav_update/fn_id/<?php echo ($vos["fn_id"]); ?>">修改</a>
                        <a href="/index.php/Admin/Index/footer_nav_del/fn_id/<?php echo ($vos["fn_id"]); ?>" onclick="return del()">删除</a>
		            </td>
		            </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
        <?php if($page == ''): else: ?>
            <ul class="pageul" style="border:1px solid pink;float: left;margin-top: 20px;">
            <?php if($p == 1): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/footer_nav/p/1" style="margin-left: 20px;"><<</a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/footer_nav/p/<?php echo ($p-1); ?>" style="margin-left: 20px;"><<</a></li><?php endif; ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/footer_nav/p/1" style="margin-left: 20px;">首页</a></li>
            <?php $__FOR_START_10663__=1;$__FOR_END_10663__=$page+1;for($i=$__FOR_START_10663__;$i < $__FOR_END_10663__;$i+=1){ ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/footer_nav/p/<?php echo ($i); ?>" style="margin-left: 20px;"><?php echo ($i); ?></a></li><?php } ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/footer_nav/p/<?php echo ($page); ?>" style="margin-left: 20px;">尾页</a></li>
            
            <?php if($p == $page): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/footer_nav/p/<?php echo ($page); ?>" style="margin-left: 20px;">>></a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/footer_nav/p/<?php echo ($p+1); ?>" style="margin-left: 20px;">>></a></li><?php endif; ?>
        </ul><?php endif; ?>
         <table class="tablelist">
            <tr>
                <th>导航名称</th>
                <th>导航链接</th>
                <th>父级导航名称</th>
            </tr>
            <tr>
                <td>薇拉公馆</td>
                <td>/index.php/Home/Index/index</td>
                <td>无</td>
            </tr>
            <tr>
                <td>客样欣赏</td>
                <td>/index.php/Home/Index/keyangxinshang</td>
                <td>薇拉公馆</td>
            </tr>
            <tr>
                <td>最新特惠</td>
                <td>/index.php/Home/Index/zuixintehui</td>
                <td>薇拉公馆</td>
            </tr>
            <tr>
                <td>精彩花絮</td>
                <td>/index.php/Home/Index/jingcaihuaxu</td>
                <td>薇拉公馆</td>
            </tr>
            <tr>
                <td>客户评价</td>
                <td>/index.php/Home/Index/kehupingjia</td>
                <td>薇拉公馆</td>
            </tr>
            <tr>
                <td>作品展示</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>内景作品</td>
                <td></td>
                <td>作品展示</td>
            </tr>
            <tr>
                <td>外景作品</td>
                <td></td>
                <td>作品展示</td>
            </tr>
            <tr>
                <td>关于我们</td>
                <td>/index.php/Home/Index/aboutUs</td>
                <td></td>
            </tr>
        </table> 
        
        <table class="tablelist">
            <tbody>
	            
            </tbody> 
        </table>
        <div class="Paginationn"><?php echo ($page); ?></div>
    </div><!-- formbody结束 -->
</div>
<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>

</html>