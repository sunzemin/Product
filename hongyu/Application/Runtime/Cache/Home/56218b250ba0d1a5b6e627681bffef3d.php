<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title><?php echo ($navben["nav_name"]); ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
		<link rel="shortcut icon" href="/Public/Home/img/ic.ico" type="image/x-icon" />
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=UoZYbubqTRqPAY6ptP4Hs5TcyciLHxYN"></script>
	</head>

	<body>
		<!--头部-->
		<div class="top">
	<div class="logo">
		<img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." />
	</div>
	<div class="contact">
		<div class="service">服务热线:</div>
		<div class="Telephone">
			<div><?php echo ($footer["telephone"]); ?></div>
			<div><?php echo ($footer["telephone1"]); ?></div>
		</div>
		<div class="Telephone">
			<div><?php echo ($footer["mobile"]); ?></div>
			<div><?php echo ($footer["mobile1"]); ?></div>
		</div>
	</div>
</div>
<div class="nav">
	<ul>
		<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navfirst): $mod = ($k % 2 );++$k; if($navsec[$k-1] == null): ?><li>
					<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
						<?php else: ?>
						<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
				</li>
				<?php else: ?>
				<li class="activity">
					<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
						<?php else: ?>
						<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
					<ul class="nav_ul">
					<?php if(is_array($navsec[$k-1])): $i = 0; $__LIST__ = $navsec[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navsecond): $mod = ($i % 2 );++$i;?><li>
							<?php if($navsecond["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navsecond["nav_name"]); ?></a>
							    <?php else: ?>
							    <a href="<?php echo ($navsecond["nav_url"]); ?>/nav_id/<?php echo ($navsecond["nav_id"]); ?>"><?php echo ($navsecond["nav_name"]); ?></a><?php endif; ?>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<input type="hidden" value="<?php echo ($navben["nav_name"]); ?>" class="nav_name"/>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var len=$('.nav>ul>li').length;
		var nav_name=$('.nav_name').val();
		for(var i=0;i<len;i++){
			var cont=$('.nav>ul').children('li').eq(i).children('a').text();
			if(nav_name==cont){
				$('.nav>ul').children('li').eq(i).children('a').addClass('headCorol');
			}
			
		}
	})
</script>
		<!--地图-->
		<div class="maps">
			<!--"-->
			<div  class="map" id="allmap"></div>
			<div class="adree addree"><?php echo ($company_introduce["ci_name"]); ?></div>
			<input type="hidden" class="heng" value="<?php echo ($map["heng"]); ?>" />
			<input type="hidden" class="zong" value="<?php echo ($map["zong"]); ?>" />
		</div>
		<!--底部-->
		<div class="footer">
	<div><?php echo ($footer["introduce"]); ?></div>
	<div>|  
		<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i; echo ($navs["nav_name"]); ?>  |<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
	<div><?php echo ($footer["copyright"]); ?> <?php echo ($footer["record"]); ?> 技术支持：泰雁科技</div>
</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				var heng=$('.heng').val();
				var zong=$('.zong').val();
				// 百度地图API功能
				var map = new BMap.Map("allmap");
				var point = new BMap.Point(heng, zong);
				map.centerAndZoom(point, 15);

				var marker = new BMap.Marker(new BMap.Point(heng, zong)); // 创建点	
				//添加覆盖物

				map.addOverlay(marker); //增加点

				//清除覆盖物
				
				//				导航二级菜单
				$('.activity').mouseenter(function() {
					$('.nav_ul').show();
				});
				$('.activity').mouseleave(function() {
					$('.nav_ul').hide();
				});
			})
		</script>
	</body>

</html>