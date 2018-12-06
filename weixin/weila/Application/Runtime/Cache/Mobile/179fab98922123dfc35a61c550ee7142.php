<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="bright"/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>薇拉摄影</title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css"/>
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>
	<body>
		<header>
			<div class="headerCent">
				<div><?php echo ($company_introduce["ci_logotitle"]); ?></div>
				<div><?php echo ($company_introduce["ci_logotitle_english"]); ?> </div>
			</div>
			<img src="/Public/mobile/img/img1.png" alt="img" class="headerCent-right"/>
		</header>
		<!--菜单下拉框-->
		<div class="HideDiv"></div>
<div class="HideDiv2">
	<div>
		<img src="/Public/mobile/img/img2.png" alt="img"/>
	</div>
	<ul>
		<li>
			<a href="/index.php/Mobile/Index/index" target="_blank">
				<span>返回首页</span>HOME
			</a>
		</li>
		<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i;?><li>
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>" target="_blank">
					<span><?php echo ($navs["nav_name"]); ?></span><?php echo ($navs["nav_english_name"]); ?>
				</a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		
	</ul>
</div>
<!--菜单-->
<div class="MenuCent">
	<a href="/index.php/Mobile/Index/index" class="orangeCol">首页</a>
	<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i;?><a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php if($navben == null): ?><input type="hidden" class="navcss" value="首页">
	<?php else: ?>
	<input type="hidden" class="navcss" value="<?php echo ($navben["nav_name"]); ?>"><?php endif; ?>
		<!--详情内容-->
		<div class="Indormationcentdata">
			<!--这里后台放编辑器，行内的div都可以删掉-->
			<?php if($case == ''): else: ?>
				<div style="font-size: 16px;color: #666666;text-align: left;line-height: 2;text-indent: 2em;">
					<?php echo ($case["c_content"]); ?>
				</div><?php endif; ?>
			<?php if($room_scenery11 == ''): else: ?>
				 <div style="font-size: 16px;color: #666666;text-align: left;line-height: 2;text-indent: 2em;">
					<?php echo ($room_scenery11["rs_introduce"]); ?>
				</div><?php endif; ?>
		</div>
		<!--公司地址-->			
		<div class="cityAdress">
	<img src="/Public/mobile/img/img17.jpg" alt="..."/>
	<div class="AdressData">
		<div class="cityAdressData">
			<div class="cityAdressData-top">
				<div class="cityAdressData-left">
					<div class="AdressData-one">
						our position
					</div>
					<div class="AdressData-two">
						<?php echo ($footer["address"]); ?>
					</div>
					<div class="AdressData-three">
						hotline
					</div>
					<div class="AdressData-four">
						<?php echo ($footer["telephone"]); ?>
					</div>
				</div>
			</div>
			<div class="cityAdressData-bot">
				<div class="cityAdressData-one">
					welcome to communicate with us
				</div>
			</div>
		</div>
	</div>
</div>
		<!--公共底部-->
		<footer>
	<div class="MenuCent footer-one">
		<a href="/index.php/Mobile/Index/index" class="orangeCol">首页</a>
		<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i;?><a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="footer-two">
		免费咨询热线
	</div>	
	<div class="footer-three">
		<?php echo ($footer["telephone"]); ?>
	</div>	
	<div class="footer-two">
		我们的地址
	</div>	
	<div class="footer-three">
		<?php echo ($footer["address"]); ?>
	</div>	
	<div class="footer-four">
		<div class="footer-left">
			<img src="<?php echo ($footer["wx_erweima"]); ?>" alt="img"/>
			<div>官方微信</div>
		</div>
		<div class="footer-left">
			<img src="<?php echo ($footer["wb_erweima"]); ?>" alt="img"/>
			<div>官方微博</div>
		</div>
	</div>	
	<div class="footer-five">
		<?php echo ($footer["copyright"]); ?>
	</div>	
	<div class="footer-six">
		<span><?php echo ($footer["record"]); ?></span>
		<span>技术支持：泰雁科技</span>
	</div>	
</footer>
		<!--固定浮窗-->
		<div class="EdnFotData">
			<a href="javascript:;">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img19.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					在线咨询
				</div>
			</a>
			<a href="javascript:;">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img20.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					免费通话
				</div>
			</a>
			<a href="javascript:;">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img21.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					优惠礼包
				</div>
			</a>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/mobile/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/mobile/js/index.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>