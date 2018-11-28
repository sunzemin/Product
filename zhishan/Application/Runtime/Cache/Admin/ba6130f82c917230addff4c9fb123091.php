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
                <a href="/index.php/Admin/Index/navadd">
                <li class="click"><span><img src="/Public/admin/images/pic/t01.png" /></span>添加导航</li>
                </a>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
            <tr>
            <th>编号</th>
            <th>导航名称</th>
            <th>排序</th>
            <th>链接</th>
            <!-- <th>是否推荐</th> -->
            <th>操作</th>
            </tr>
            </thead>

            <tbody>
            <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
            <td><?php echo ($k); ?></td>
            <td><?php echo ($vo["nav_name"]); ?></td>
            <td><?php echo ($vo["nav_sort"]); ?></td>
            <td><?php echo ($vo["nav_url"]); ?></td>
            <!-- <td>
                <?php if($vo["nav_state"] == 0): ?><b style="color: blue">不推荐</b>
                    <?php else: ?>
                   
                    <b style="color: red">推荐</b><?php endif; ?>
            </td> -->
            <td>
                <a href="/index.php/Admin/Index/navupdate/nav_id/<?php echo ($vo["nav_id"]); ?>">修改</a>
                <a href="/index.php/Admin/Index/navdel/nav_id/<?php echo ($vo["nav_id"]); ?>" onclick="return del()">删除</a>
            </td>
            </tr>
	            <?php if(is_array($navarr[$k-1])): $i = 0; $__LIST__ = $navarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><tr>
		            <td><span style="color: red;">***</span></td>
		            <td><?php echo ($vos["nav_name"]); ?></td>
		            <td><?php echo ($vos["nav_sort"]); ?></td>
		            <td><?php echo ($vos["nav_url"]); ?></td>
                    <!-- <td>
                        <?php if($vos["nav_state"] == 0): ?><b style="color: blue">不推荐</b>
                            <?php else: ?>
                           
                            <b style="color: red">推荐</b><?php endif; ?>
                    </td> -->
		            <td>
		                <a href="/index.php/Admin/Index/navupdate/nav_id/<?php echo ($vos["nav_id"]); ?>">修改</a>
		                <a href="/index.php/Admin/Index/navdel/nav_id/<?php echo ($vos["nav_id"]); ?>" onclick="return del()">删除</a>
		            </td>
		            </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </tbody> 
        </table>
        <?php if($page == ''): else: ?>
            <ul class="pageul" style="border:1px solid pink;float: left;margin-top: 20px;">
            <?php if($p == 1): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/nav/p/1" style="margin-left: 20px;"><<</a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/nav/p/<?php echo ($p-1); ?>" style="margin-left: 20px;"><<</a></li><?php endif; ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/nav/p/1" style="margin-left: 20px;">首页</a></li>
            <?php $__FOR_START_7839__=1;$__FOR_END_7839__=$page+1;for($i=$__FOR_START_7839__;$i < $__FOR_END_7839__;$i+=1){ ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/nav/p/<?php echo ($i); ?>" style="margin-left: 20px;"><?php echo ($i); ?></a></li><?php } ?>
            
            <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/nav/p/<?php echo ($page); ?>" style="margin-left: 20px;">尾页</a></li>
            
            <?php if($p == $page): ?><li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/nav/p/<?php echo ($page); ?>" style="margin-left: 20px;">>></a></li>
                <?php else: ?>
                <li style="float: left;list-style: none;width:50px;height: 30px;border: 1px solid black;text-decoration: center;line-height: 30px;"><a href="/index.php/Admin/Index/nav/p/<?php echo ($p+1); ?>" style="margin-left: 20px;">>></a></li><?php endif; ?>
        </ul><?php endif; ?>
        <table class="tablelist">
            <tr>
                <th>导航名称</th>
                <th>导航链接</th>
                <th>父级导航名称</th>
            </tr>
            <tr>
                <td>关于我们</td>
                <td>/index.php/Home/Index/aboutUs</td>
                <td>无</td>
            </tr>
            <tr>
                <td>公司简介</td>
                <td>/index.php/Home/Index/introduction</td>
                <td>关于我们</td>
            </tr>
            <tr>
                <td>企业文化</td>
                <td>/index.php/Home/Index/Culture</td>
                <td>关于我们</td>
            </tr>
            <tr>
                <td>资质荣誉</td>
                <td>/index.php/Home/Index/Qualifications</td>
                <td>关于我们</td>
            </tr>
            <tr>
                <td>领导致辞</td>
                <td>/index.php/Home/Index/Speech</td>
                <td>关于我们</td>
            </tr>
            <tr>
                <td>服务优势</td>
                <td>/index.php/Home/Index/advantage</td>
                <td>关于我们</td>
            </tr>
            <tr>
                <td>联系我们</td>
                <td>/index.php/Home/Index/lianxi</td>
                <td>关于我们</td>
            </tr>
            <tr>
                <td>公司与团队</td>
                <td>/index.php/Home/Index/team</td>
                <td>关于我们</td>
            </tr>
            <tr>
                <td>主营业务</td>
                <td>/index.php/Home/Index/primarywork</td>
                <td>无</td>
            </tr>
            <tr>
                <td>人力资源外包</td>
                <td>/index.php/Home/Index/business</td>
                <td>主营业务</td>
            </tr>
            <tr>
                <td>人事代理</td>
                <td>/index.php/Home/Index/business</td>
                <td>主营业务</td>
            </tr>
            <tr>
                <td>业务流程外包</td>
                <td>/index.php/Home/Index/business</td>
                <td>主营业务</td>
            </tr>
            <tr>
                <td>企业培训</td>
                <td>/index.php/Home/Index/business</td>
                <td>主营业务</td>
            </tr>
            <tr>
                <td>劳务派遣</td>
                <td>/index.php/Home/Index/business</td>
                <td>无</td>
            </tr>
            <tr>
                <td>招聘外包</td>
                <td>/index.php/Home/Index/business</td>
                <td>无</td>
            </tr>
            <tr>
                <td>社保代理</td>
                <td>/index.php/Home/Index/business</td>
                <td>无</td>
            </tr>
            <tr>
                <td>企业培训</td>
                <td>/index.php/Home/Index/business</td>
                <td>无</td>
            </tr>
            <tr>
                <td>新闻资讯</td>
                <td>/index.php/Home/Index/news</td>
                <td>无</td>
            </tr>
            <tr>
                <td>行业资讯</td>
                <td>/index.php/Home/Index/news</td>
                <td>新闻资讯</td>
            </tr>
            <tr>
                <td>企业新闻</td>
                <td>/index.php/Home/Index/news</td>
                <td>新闻资讯</td>
            </tr>
            <tr>
                <td>政策法规</td>
                <td>/index.php/Home/Index/policy</td>
                <td>无</td>
            </tr>
            <tr>
                <td>政策法规</td>
                <td>/index.php/Home/Index/questions2</td>
                <td>政策法规</td>
            </tr>
            <tr>
                <td>常见问题</td>
                <td>/index.php/Home/Index/questions1</td>
                <td>政策法规</td>
            </tr>
            <tr>
                <td>人才招聘</td>
                <td>/index.php/Home/Index/recruit</td>
                <td>无</td>
            </tr>
            <tr>
                <td>联系我们</td>
                <td>/index.php/Home/Index/contact</td>
                <td>无</td>
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