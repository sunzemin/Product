<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title><?php echo ($navben["nav_name"]); ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/layui-v2.4.5/layui/css/layui.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>
	<body>
		<!--头部-->
		<div class="top_big">
	<div class="top">
		<div class="top_left"><img src="/Public/mobile/img/xian.png" alt="..." /></div>
		<div class="logo">
			<img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." />
		</div>
		<div class="phone">
			<a href="tel:029-82095999"><img src="/Public/mobile/img/phone.png" alt="..." /></a>
		</div>
	</div>
</div>
<div class="nav hide">
	<div class="guanbi"><img src="/Public/mobile/img/close.png" alt="..." /></div>
	<div class="Navigationbar">
		<ul>
			<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navfirst): $mod = ($k % 2 );++$k; if($navsec[$k-1] == ''): ?><li>
						<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
							<?php else: ?>
							<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
					</li>
					<?php else: ?>
					<li class="activity">
						<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
							<?php else: ?>
							<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
						<ul class="Arrow hide">
						<?php if(is_array($navsec[$k-1])): $i = 0; $__LIST__ = $navsec[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navsecond): $mod = ($i % 2 );++$i;?><li>
								<?php if($navsecond["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navsecond["nav_name"]); ?></a>
								    <?php else: ?>
								    <a href="<?php echo ($navsecond["nav_url"]); ?>/nav_id/<?php echo ($navsecond["nav_id"]); ?>"><?php echo ($navsecond["nav_name"]); ?></a><?php endif; ?>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<?php if($navsec[$k-1] == null): else: ?>
							<span class="down">
								<img src="/Public/mobile/img/down.png" alt="..."/>
								<img src="/Public/mobile/img/up.png" alt="..." class="hide"/>
							</span><?php endif; ?>
					</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
		<!--banner-->
		<div class="banner"><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
		<!--活动策划资讯-->
		<div class="activity">
			<div class="case_top top_padding">
				<span>新闻中心  </span>
				<span>news</span>
			</div>
			<div class="information">
				<?php if(is_array($little_classify_res)): $i = 0; $__LIST__ = $little_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($i % 2 );++$i;?><div><?php echo ($little_classify["lc_name"]); ?><input type="hidden" class="lc_id" value="<?php echo ($little_classify["lc_id"]); ?>"/></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="activityBot_lft">
				<div class="swiper-container1 swiper-container">
					<div class="swiper-wrapper1 swiper-wrapper">
						<div class="swiper-slide1 swiper-slide"><img src="/Public/mobile/img/img36.png" alt="..." />
							<div class="slide_bot">高信隆西安分公司开业高信隆西安分公司开业...</div>
						</div>
						<div class="swiper-slide1 swiper-slide"><img src="/Public/mobile/img/img36.png" alt="..." />
							<div class="slide_bot">高信隆西安分公司开业高信隆西安分公司开业...</div>
						</div>
						<div class="swiper-slide1 swiper-slide"><img src="/Public/mobile/img/img36.png" alt="..." />
							<div class="slide_bot">高信隆西安分公司开业高信隆西安分公司开业...</div>
						</div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination1 swiper-pagination"></div>
					<!-- Add Arrows -->
				</div>
			</div>
			<div class="activityBot_center">
				<a href="javascript:;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</a>
				<a href="javascript:;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</a>
				<a href="javascript:;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</a>
				<a href="javascript:;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</a>
				<a href="javascript:;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</a>
				<a href="javascript:;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</a>
			</div>
			<div class="activityBot_right">
				<div class="Celebrate_top">
					<img src="/Public/mobile/img/img37.png" alt="..." />
				</div>
				<div class="Celebrate_bot">
					<a href="javascript:;">大唐芙蓉园冰激凌节大唐芙蓉园冰...<span>[11-14]</span></a>
					<a href="javascript:;">大唐芙蓉园冰激凌节大唐芙蓉园冰...<span>[11-14]</span></a>
					<a href="javascript:;">大唐芙蓉园冰激凌节大唐芙蓉园冰...<span>[11-14]</span></a>
					<a href="javascript:;">大唐芙蓉园冰激凌节大唐芙蓉园冰...<span>[11-14]</span></a>
				</div>
			</div>
		</div>
		<div class="demo4"></div>
		<div class="footer" style="background: url(/Public/mobile/img/img43.png)no-repeat center center;background-size: cover;">
	<div>联系电话：<?php echo ($footer["telephone"]); ?></div>
	<div>我们的地址：<?php echo ($footer["address"]); ?></div>
	<div><?php echo ($footer["copyright"]); ?> <?php echo ($footer["record"]); ?> 技术支持：泰雁科技</div>
</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/mobile/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/mobile/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				$('.top_left').click(function(){
					$('.nav').show();
				})
				var toggle = true;
				$(".down").click(function() {
					if(toggle) {
						$(this).children("img").attr("src", "/Public/mobile/img/up.png");
						toggle = false;
						$(this).siblings('ul').show();
					} else {
						$(this).children("img").attr("src", "/Public/mobile/img/down.png");
						toggle = true;
						$(this).siblings('ul').hide();
					}
				});
				$('.guanbi').click(function() {
										$('.nav').hide();
				});
				var hei = $(window).height();
				console.log('gaodu', hei);
				var nav_hei = $('.nav').height(hei);
					//				活动策划轮播
				var swiper = new Swiper('.swiper-container1', {
					spaceBetween: 30,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					pagination: {
						el: '.swiper-pagination1',
						clickable: true,
					},
				});
				//				导航二级菜单
				$('.activity').mouseenter(function() {
					$('.nav_ul').show();
				});
				$('.activity').mouseleave(function() {
					$('.nav_ul').hide();
				});
				
				$('.information>div').click(function(){
					$(this).addClass('info').siblings().removeClass();
				})
				
				
				//				活动策划资讯
					var lc_id = $('.lc_id').val();
				
				$.ajax({
					type: "post",
					url: "/index.php/Home/Public/newsdata",
					async: true,
					data: {
						'lc_id': lc_id,
						'p': 1
					},
					success: function(data) {
						console.log('uuuuu', data.classify_article_res[0]);
						$('.activityBot_lft').children().remove();
						$('.activityBot_center').children().remove();
						$('.activityBot_right').children().remove();

						for(var i = 0; i < data.classify_article_res.length; i++) {
							var con = '<div class="swiper-container1 swiper-container"><div class="swiper-wrapper1 swiper-wrapper"><div class="swiper-slide1 swiper-slide"><img src="' +
								data.classify_article_res[i].ca_image +
								'" alt="..." /><div class="slide_bot">' +
								data.classify_article_res[i].ca_title +
								'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
								data.classify_article_res[i].ca_image +
								'" alt="..." /><div class="slide_bot">' +
								data.classify_article_res[i].ca_title +
								'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
								data.classify_article_res[i].ca_image +
								'" alt="..." /><div class="slide_bot">' +
								data.classify_article_res[i].ca_title +
								'</div></div></div><div class="swiper-pagination1 swiper-pagination"></div></div>';
						}
						$('.activityBot_lft').append(con);
						for(var i = 0; i < data.classify_article_res.length; i++) {
							var con = '<a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'</a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'</a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'</a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'</a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'</a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'</a>';
						}
						$('.activityBot_center').append(con);
						for(var i = 0; i < data.classify_article_res.length; i++) {
							var con = '<div class="Celebrate_top"><img src="' +
								data.classify_article_res[i].ca_image +
								'" alt="..." /></div><div class="Celebrate_bot"><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'<span>' +
								data.classify_article_res[i].ca_time +
								'</span></a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'<span>' +
								data.classify_article_res[i].ca_time +
								'</span></a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'<span>' +
								data.classify_article_res[i].ca_time +
								'</span></a><a href="javascript:;">' +
								data.classify_article_res[i].ca_title +
								'<span>' +
								data.classify_article_res[i].ca_time +
								'</span></a></div>';
						}
						$('.activityBot_right').append(con);

						var swiper = new Swiper('.swiper-container1', {
							spaceBetween: 30,
							centeredSlides: true,
							autoplay: {
								delay: 2500,
								disableOnInteraction: false,
							},
							pagination: {
								el: '.swiper-pagination1',
								clickable: true,
							},
						});

					},
					error: function() {
						alert('yy');
					}
				});
				//				点击ajax加载
				$('.information>div').click(function() {
					var lc_id = $(this).children('input').val();
					$.ajax({
						type: "post",
						url: "/index.php/Home/Public/newsdata",
						async: true,
						data: {
							'lc_id': lc_id,
							'p': 1
						},
						success: function(data) {
							console.log('uuuuu', data.classify_article_res[0]);
							$('.activityBot_lft').children().remove();
							$('.activityBot_center').children().remove();
							$('.activityBot_right').children().remove();

							for(var i = 0; i < data.classify_article_res.length; i++) {
								var con = '<div class="swiper-container1 swiper-container"><div class="swiper-wrapper1 swiper-wrapper"><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div></div><div class="swiper-pagination1 swiper-pagination"></div></div>';
							}
							$('.activityBot_lft').append(con);
							for(var i = 0; i < data.classify_article_res.length; i++) {
								var con = '<a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'</a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'</a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'</a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'</a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'</a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'</a>';
							}
							$('.activityBot_center').append(con);
							for(var i = 0; i < data.classify_article_res.length; i++) {
								var con = '<div class="Celebrate_top"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /></div><div class="Celebrate_bot"><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'<span>' +
									data.classify_article_res[i].ca_time +
									'</span></a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'<span>' +
									data.classify_article_res[i].ca_time +
									'</span></a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'<span>' +
									data.classify_article_res[i].ca_time +
									'</span></a><a href="javascript:;">' +
									data.classify_article_res[i].ca_title +
									'<span>' +
									data.classify_article_res[i].ca_time +
									'</span></a></div>';
							}
							$('.activityBot_right').append(con);

							var swiper = new Swiper('.swiper-container1', {
								spaceBetween: 30,
								centeredSlides: true,
								autoplay: {
									delay: 2500,
									disableOnInteraction: false,
								},
								pagination: {
									el: '.swiper-pagination1',
									clickable: true,
								},
							});

						},
						error: function() {
							alert('yy');
						}
					});
				});
			})
			
		</script>
	</body>
</html>