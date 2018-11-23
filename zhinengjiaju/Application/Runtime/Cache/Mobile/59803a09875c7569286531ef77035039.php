<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>首页</title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/layui-v2.4.5/layui/css/layui.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>

	<body>
		<!--头部-->
		<div class="top">
			<div class="Catalog">
				<a href="/index.php/Mobile/Index/nav"><img src="/Public/mobile/img/xian.png" alt="..." /></a>
			</div>
			<div class="logo">
				<div><img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." /></div>
				<!-- <?php echo ($company_introduce["ci_name"]); ?> -->
				<div>博越智能家居</div>
			</div>
			<div class="phone">
				<a href="tel:0147-88469258"><img src="/Public/mobile/img/phone.png" alt="..." /></a>
			</div>
		</div>
		<!--轮播-->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
						<?php if($k == 1): if($lunbo["nav_url"] == ''): ?><div class="swiper-slide">
										<a href="javascript:;"><img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." /></a>
									</div>
									
									<?php else: ?>
									<div class="swiper-slide">
										<a href="<?php echo ($lunbo["lb_url"]); ?>"><img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." /></a>
									</div><?php endif; ?>
								<?php else: ?>
								<?php if($lunbo["nav_url"] == ''): ?><div class="swiper-slide hide">
										<a href="javascript:;"><img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." /></a>
									</div>
									
									<?php else: ?>
									<div class="swiper-slide hide">
										<a href="<?php echo ($lunbo["lb_url"]); ?>"><img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." /></a>
									</div><?php endif; endif; ?>
						
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<!--关于我们-->
		<div class="About">
			<div class="About_title">
				<div>关于我们</div>
				<div></div>
				<div>about</div>
			</div>
			<div class="About_text">
				<div class="backimg"><img src="<?php echo ($company_introduce["ci_image"]); ?>" alt="..." /></div>
				<div class="introduce">
					<p><?php echo ($company_introduce["ci_content"]); ?>
					</p>
					<div>
						<a href="javascript:;">了解详情</a>
					</div>
				</div>
			</div>
		</div>
		<!--产品中心-->
		<div class="product">
			<div class="About_title">
				<div>产品中心</div>
				<div></div>
				<div>product</div>
			</div>

			<div class="CentMenu">
				<?php if(is_array($product_classify_res)): $i = 0; $__LIST__ = $product_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product_classify): $mod = ($i % 2 );++$i;?><a href="javascript:;"><?php echo ($product_classify["pc_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				<!--<a href="javascript:;">智能锁</a>
				<a href="javascript:;">智能灯泡</a>
				<a href="javascript:;">云门铃</a>
				<a href="javascript:;">智慧生活</a>
				<a href="javascript:;">智慧家电</a>-->
				<!--<a href="javascript:;">智慧家电</a>-->
			</div>
			<div class="MenuDataCent">
				<a href="javascript:;">
					<div class="MenuDataCent-top">
						<img src="/Public/mobile/img/img10.png" alt="img" />
					</div>
					<div class="MenuDataCent-bot">家用防盗门锁</div>
				</a>
				<a href="javascript:;">
					<div class="MenuDataCent-top">
						<img src="/Public/mobile/img/img10.png" alt="img" />
					</div>
					<div class="MenuDataCent-bot">家用防盗门锁</div>
				</a>
				<a href="javascript:;">
					<div class="MenuDataCent-top">
						<img src="/Public/mobile/img/img10.png" alt="img" />
					</div>
					<div class="MenuDataCent-bot">家用防盗门锁</div>
				</a>
				<a href="javascript:;">
					<div class="MenuDataCent-top">
						<img src="/Public/mobile/img/img10.png" alt="img" />
					</div>
					<div class="MenuDataCent-bot">家用防盗门锁</div>
				</a>
			</div>
			<a href="javascript:;" class="MenuMore">More</a>
		</div>
		<!--全屋智能整装-->
		<div class="Integrate">
			<div class="About_title">
				<div>全屋智能整装</div>
				<div></div>
				<div>Wholesale</div>
			</div>
			<div class="classification">
				<div class="Intelligence-top">
					<?php if(is_array($little_classify_res11)): $i = 0; $__LIST__ = $little_classify_res11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify11): $mod = ($i % 2 );++$i; if($k == 1): ?><a href="javascript:;" class="ColorMenus"><?php echo ($little_classify11["lc_name"]); ?></a>
							<?php else: ?>
							<a href="javascript:;"><?php echo ($little_classify11["lc_name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="Intelligence-left">
					<?php if(is_array($little_classify_res11)): $k = 0; $__LIST__ = $little_classify_res11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify11): $mod = ($k % 2 );++$k; if($k == 1): ?><div class="Img<?php echo ($k); ?>">
								<div class="swiper-container Img1-1">
									<div class="swiper-wrapper" style="height: 225px;">
										<?php if(is_array($classify_article_res11[$k-1])): $i = 0; $__LIST__ = $classify_article_res11[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article11): $mod = ($i % 2 );++$i;?><div class="swiper-slide" style="height: 225px;">
												<img src="<?php echo ($classify_article11["ca_image"]); ?>" alt="..." />
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
									<div class="swiper-button-next Img1-3"></div>
									<div class="swiper-button-prev Img1-4"></div>
								</div>
							</div>
							<?php else: ?>
							<div class="Img<?php echo ($k); ?> hiddenHide">
								<div class="swiper-container Img2-1">
									<div class="swiper-wrapper">
										<?php if(is_array($classify_article_res11[$k-1])): $i = 0; $__LIST__ = $classify_article_res11[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article11): $mod = ($i % 2 );++$i;?><div class="swiper-slide" style="height: 225px;">
												<img src="<?php echo ($classify_article11["ca_image"]); ?>" alt="..." />
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
									<div class="swiper-button-next Img2-3"></div>
									<div class="swiper-button-prev Img2-4"></div>
								</div>
							</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="Intelligence-img">
					<?php if(is_array($home_decorate_titleData)): $i = 0; $__LIST__ = $home_decorate_titleData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$home_decorate_title): $mod = ($i % 2 );++$i;?><a href="javascript:;">
							<div class="IntelligenceImg-top">
								<img src="<?php echo ($home_decorate_title["hdt_image"]); ?>" alt="img" />
							</div>
							<div class="IntelligenceImg-bot"><?php echo ($home_decorate_title["hdt_title"]); ?></div>
						</a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<!--客户案例-->
		<div class="case">
			<div class="About_title">
				<div>客户案例</div>
				<div></div>
				<div>case</div>
			</div>
			<div class="Exhibition">
				<?php if(is_array($caseData)): $i = 0; $__LIST__ = $caseData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$case): $mod = ($i % 2 );++$i; if($case["url"] == ''): ?><div class="Exhibition_wapper">
							<a href="javascript:;">
								<div><img src="<?php echo ($case["productimage"]); ?>" alt="..." /></div>
								<div class="transparent hide"></div>
								<div class="transparent_text hide"><?php echo ($case["title"]); ?></div>
							</a>
							<div class="Exhibition_wapper_bot"><?php echo ($case["title"]); ?></div>
						</div>
						
						<?php else: ?>
						<div class="Exhibition_wapper">
							<a href="<?php echo ($case["url"]); ?>">
								<div><img src="<?php echo ($case["productimage"]); ?>" alt="..." /></div>
								<div class="transparent hide"></div>
								<div class="transparent_text hide"><?php echo ($case["title"]); ?></div>
							</a>
							<div class="Exhibition_wapper_bot"><?php echo ($case["title"]); ?></div>
						</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				<a href="javascript:;" class="MenuMore">More</a>
			</div>
		</div>
		<!--新闻资讯-->
		<div class="news">
			<div class="About_title">
				<div>新闻资讯</div>
				<div></div>
				<div>news</div>
			</div>
			<div class="news_content">
				<div class="news_top">
					<?php if(is_array($little_classify_res[1])): $k = 0; $__LIST__ = $little_classify_res[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($k % 2 );++$k;?><div><?php echo ($little_classify["lc_name"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="news_big">
					<?php if(is_array($little_classify_res[1])): $k = 0; $__LIST__ = $little_classify_res[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($k % 2 );++$k; if($k == 1): ?><div class="details">
								<?php if(is_array($classify_article_res[1][$k-1])): $i = 0; $__LIST__ = $classify_article_res[1][$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>" class="details_news">
									<div class="details_yuan">
										<img src="/Public/mobile/img/yuan.png" alt="..." />
										<img src="/Public/mobile/img/img2.jpg" alt="..." class="hide" />
									</div>
									<div class="details_center"><?php echo ($classify_article["ca_title"]); ?></div>
									<div class="details_time"><?php echo (date("Y-m-d",$classify_article["ca_time"])); ?></div>
								</a><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							<?php else: ?>
							<div class="details hide">
								<?php if(is_array($classify_article_res[1][$k-1])): $i = 0; $__LIST__ = $classify_article_res[1][$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>" class="details_news">
									<div class="details_yuan">
										<img src="/Public/mobile/img/yuan.png" alt="..." />
										<img src="/Public/mobile/img/img2.jpg" alt="..." class="hide" />
									</div>
									<div class="details_center"><?php echo ($classify_article["ca_title"]); ?></div>
									<div class="details_time"><?php echo (date("Y-m-d",$classify_article["ca_time"])); ?></div>
								</a><?php endforeach; endif; else: echo "" ;endif; ?>
							</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<a href="javascript:;" class="MenuMore more">More</a>
			</div>
		</div>
		<!--个人信息-->
		<div class="information">
			<div class="information_title">
				<span>......</span>
				<div>填写您的信息</div>
				<span>......</span>
			</div>
			<div class="footerEnd-right">
				<form>
					<div>
						<input type="text" placeholder="请输入您的姓名" />
					</div>
					<div>
						<input type="text" placeholder="请输入您的电话" />
					</div>
					<div>
						<textarea placeholder="备注留言"></textarea>
					</div>
					<input type="button" value="点击提交" class="subMit" />
				</form>
			</div>
		</div>
		<!--底部-->
		<div class="footer">
	<div class="gray">全国统一联系热线</div>
	<div><?php echo ($footer["telephone"]); ?></div>
	<div class="gray">我们的地址</div>
	<div><?php echo ($footer["address"]); ?></div>
	<div class="Scavenging">
		<div class="Scavenging_left">
			<div><img src="<?php echo ($footer["wx_erweima"]); ?>" alt="..." /></div>
			<div>官方微信</div>
		</div>
		<div class="Scavenging_left">
			<div><img src="<?php echo ($footer["wb_erweima"]); ?>" alt="..." /></div>
			<div>官方微博</div>
		</div>
	</div>
	<div class="gray last"><?php echo ($footer["copyright"]); ?></div>
	<div class="gray last"><?php echo ($footer["record"]); ?>&nbsp;&nbsp;&nbsp;技术支持：泰雁科技</div>
</div>

		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/mobile/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/mobile/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				//			banner图轮播
//				var pppp=$(window).width();
//			alert($(window).width());
				var swiper = new Swiper('.swiper-container', {
					pagination: {
						el: '.swiper-pagination',
					},
				});
				//全屋集成整装轮播
				var swiper = new Swiper('.Img1-1', {
					spaceBetween: 10,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					navigation: {
						nextEl: '.Img1-3',
						prevEl: '.Img1-4',
					},
				});
				var swiper2 = new Swiper('.Img2-1', {
					spaceBetween: 10,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					navigation: {
						nextEl: '.Img2-3',
						prevEl: '.Img2-4',
					},
				});
				var swiper3 = new Swiper('.Img3-1', {
					spaceBetween: 10,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					navigation: {
						nextEl: '.Img3-3',
						prevEl: '.Img3-4',
					},
				});
				//				点击切换
				$(".Intelligence-top>a").click(function() {
					var index = $(this).index();
					$(".Intelligence-left").children("div").eq(index).removeClass("hiddenHide").siblings().addClass("hiddenHide");
					$(this).addClass("ColorMenus").siblings().removeClass("ColorMenus");
				});
				$(".Intelligence-left").mouseenter(function() {
					$(".Intelligence-left .swiper-button-next").show();
					$(".Intelligence-left .swiper-button-prev").show();
				});
				$(".Intelligence-left").mouseleave(function() {
					$(".Intelligence-left .swiper-button-next").hide();
					$(".Intelligence-left .swiper-button-prev").hide();
				});
				//				案例展示鼠标滑过
				$(".Exhibition_wapper").children("a").mouseenter(function() {
					$(this).children(".transparent").slideDown();
					$(this).children(".transparent_text").slideDown();
				});
				$(".Exhibition_wapper").children("a").mouseleave(function() {
					$(this).children(".transparent").slideUp();
					$(this).children(".transparent_text").slideUp();
				});
				//新闻资讯切换
				$('.news_top>div').click(function() {
					var ind = $(this).index();
					$('.news_top').children('div').eq(ind).addClass('blue').siblings().removeClass();
					$('.news_big').children('div').eq(ind).show().siblings().hide();
				});
				$('.details>a').mouseenter(function() {
					$(this).children('.details_yuan').children('img').eq(1).show().siblings().hide();
					$(this).children('.details_center').css({
						'color': '#014a96'
					});
					$(this).children('.details_time').css({
						'color': '#014a96'
					});
				});
				$('.details>a').mouseleave(function() {
					$(this).children('.details_yuan').children('img').eq(0).show().siblings().hide();
					$(this).children('.details_center').css({
						'color': '#000'
					});
					$(this).children('.details_time').css({
						'color': '#767575'
					});
				});
				$('.CentMenu>a').mouseenter(function() {
					var inde = $(this).index();
					$('.CentMenu').children('a').eq(inde).css({
						'background': '#014a96',
						'color': '#fff',
						'border': 'none'
					});
				})
				$('.CentMenu>a').mouseleave(function() {
					var inde = $(this).index();
					$('.CentMenu').children('a').eq(inde).css({
						'background': '#fff',
						'color': '#000',
						'border': '1px solid #999999'
					});
				});
				var len = $('.CentMenu>a').length;
				console.log('llllllllllll', len);
				if(len == 5) {
					$('.CentMenu>a:first-child').css({
						'margin-left': '1.483rem',
						'margin-right': '1.3rem',
						'margig-bottom': '10px'
					})
					$('.CentMenu>a:nth-child(2)').css({
						'margin-right': '1.377 rem',
						'margin-bottom': '10px'
					})
				}
				if(len !== 5) {
					$('.CentMenu>a').css({
						'margin-right': '10px',
						'margig-bottom': '10px'
					});
					$('.CentMenu>a:first-child').css({
						'margin-left': '0',
						'margig-bottom': '10px'
					});
					$('.CentMenu>a:nth-child(3n)').css({
						'margin-right': '0'
						//						'margig-bottom':'10px'
					});
					var wid = $('.CentMenu>a').outerWidth(true);
					console.log('oooooo', wid);
					var widts = wid * len;
					var widt = $('.CentMenu').outerWidth(widts);
					$('.CentMenu').css({
						'margin': '0 auto'
					})
				}

			});
		</script>
	</body>

</html>