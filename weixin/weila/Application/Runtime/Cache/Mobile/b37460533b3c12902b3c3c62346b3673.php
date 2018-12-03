<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="bright"/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>薇拉摄影</title>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/swiper.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/index.css"/>
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>
	<body>
		<header>
			<div class="headerCent">
				<div><?php echo ($company_introduce["ci_logotitle"]); ?></div>
				<div><?php echo ($company_introduce["ci_logotitle_english"]); ?> </div>
			</div>
			<img src="/Public/Mobile/img/img1.png" alt="img" class="headerCent-right"/>
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
		<div class="bannerImages">
			<div class="swiper-container">
			    <div class="swiper-wrapper">
			        <?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
				      		<div class="bannerImages-top">
					      		<img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..."/>
				      		</div>
				      		<div class="bannerImages-bot">
				      			<div class="bannerImg">
				      				<div class="bannerImg-top"></div>
				      				<div class="bannerImg-bot">
										<?php echo ($lunbo["lb_title"]); ?>
				      				</div>
				      			</div>
				      		</div>
				        </div><?php endforeach; endif; else: echo "" ;endif; ?>
			    </div>
			    <div class="swiper-pagination"></div>
			</div>	
		</div>
		<!--标题-->
		<div class="PublicCall">
			<img src="/Public/Mobile/img/img7.png" alt="img"/>
		</div>
		<!--分类-->
		<div class="Interior">
			<?php if(is_array($room_scenery_classify_res)): $i = 0; $__LIST__ = $room_scenery_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery_classify): $mod = ($i % 2 );++$i;?><a href="/index.php/Mobile/Index/erjifenlei/rsc_id/<?php echo ($room_scenery_classify["rsc_id"]); ?>"><?php echo ($room_scenery_classify["rsc_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!--风格样片-->
		<div class="StyleSample">
			<?php if(is_array($room_scenery_res)): $k = 0; $__LIST__ = $room_scenery_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery): $mod = ($k % 2 );++$k;?><a href="/index.php/Mobile/Index/Information/rs_id/<?php echo ($room_scenery["rs_id"]); ?>">
					<img src="<?php echo ($room_scenery["rs_image"]); ?>" alt="img"/>
					<div class="StyleSampleCent">
						<div class="StyleSampleCent-top">
							<?php echo ($room_scenery["rs_name"]); ?>
						</div>
						<div class="StyleSampleCent-bot">
							<?php echo ($room_scenery_classify11[$k-1]["rsc_name"]); ?>
						</div>
					</div>
				</a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="StyleSample-bot">
			总共有<?php echo ($rspage); ?>页
			<div class="numPage"><i><?php echo ($rsallcount); ?></i>条</div>
			<div id="demo1"></div>
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
		<script src="/Public/Mobile/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Mobile/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
//				轮播图
				var swiper = new Swiper('.bannerImages .swiper-container', {
					spaceBetween: 20,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					pagination: {
						el: '.bannerImages .swiper-pagination',
						clickable: true,
					},
				});
//			    js取消分类的下边框
//				拿到总长度
				var leng=$(".Interior>a").length;
//				向下取整,拿到保留下边框的行数和个数
				var valNumber= Math.floor(Number(leng/3));
				var num=valNumber*3;
//				需要去除边框的个数
				var splictNum=Number(leng-num);
//				去除最后一行的下边框
				if(splictNum==0){
					$(".Interior").children("a").eq(leng-1).addClass("hideBorder");
					$(".Interior").children("a").eq(leng-2).addClass("hideBorder");
					$(".Interior").children("a").eq(leng-3).addClass("hideBorder");
				}
				if(splictNum==1){
					$(".Interior").children("a").eq(leng-1).addClass("hideBorder");
				}
				if(splictNum==2){
					$(".Interior").children("a").eq(leng-1).addClass("hideBorder");
					$(".Interior").children("a").eq(leng-2).addClass("hideBorder");
				}
			});
		</script>
	</body>
</html>