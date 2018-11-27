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
<li><a href="#">合作企业管理</a></li>
</ul>
</div>
<div class="index-right">
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
                <a href="/index.php/Admin/HomeManage/news_article_add/nc_id/<?php echo ($nc_id); ?>">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加新闻</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>标题</th>
            <th>作者</th>
            <th>来源</th>
            <th>更新时间</th>
            <th>点击数</th>
            <th>排序</th>
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
                <?php if(is_array($news_article_res)): $k = 0; $__LIST__ = $news_article_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><?php echo ($vo["na_title"]); ?></td>
                        <td><?php echo ($vo["na_author"]); ?></td>
                        <td><?php echo ($vo["na_origin"]); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$vo["na_update"])); ?></td>
                        <td><?php echo ($vo["na_click"]); ?></td>
                        <td><?php echo ($vo["nc_sort"]); ?></td>
                        <td>
                            <a href="/index.php/Admin/HomeManage/news_article_update/na_id/<?php echo ($vo["na_id"]); ?>/nc_id/<?php echo ($nc_id); ?>">修改</a>
                            <a href="/index.php/Admin/HomeManage/news_article_del/na_id/<?php echo ($vo["na_id"]); ?>/nc_id/<?php echo ($nc_id); ?>" onclick="return del()">删除</a>
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