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
				<div class="Catalog">
					<a href="javascript:;"><img src="/Public/mobile/img/xian.png" alt="..." /></a>
				</div>
				<div class="logo">
					<div><img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." /></div>
					<div>博越智能家居</div>
				</div>
				<div class="phone">
					<a href="tel:0147-88469258"><img src="/Public/mobile/img/phone.png" alt="..." /></a>
				</div>
			</div>
		</div>
		<div class="nav hide">
			<div class="guanbi"><img src="/Public/mobile/img/close.png" alt="..." /></div>
			<div class="Navigationbar">
				<ul>
					<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k; if($navs["nav_url"] == ''): ?><li>
								<a href="javascript:;"><?php echo ($navs["nav_name"]); ?></a>
								<?php if($navarr[$k-1] == null): else: ?>
									<ul class="Arrow hide">
										<?php if(is_array($navarr[$k-1])): $i = 0; $__LIST__ = $navarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav11): $mod = ($i % 2 );++$i; if($nav11["nav_url"] == ''): ?><li>
													<a href="javascript:;"><?php echo ($nav11["nav_name"]); ?></a>
												</li>
												<?php else: ?>
												<li>
													<a href="<?php echo ($nav11["nav_url"]); ?>/nav_id/<?php echo ($nav11["nav_id"]); ?>"><?php echo ($nav11["nav_name"]); ?></a>
												</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
									</ul>
									<span class="down">
										<img src="/Public/mobile/img/down.png" alt="..."/>
										<img src="/Public/mobile/img/up.png" alt="..." class="hide"/>
									</span><?php endif; ?>
							</li>
							<?php else: ?>
							<li>
								<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>
								<?php if($navarr[$k-1] == null): else: ?>
									<ul class="Arrow hide">
										<?php if(is_array($navarr[$k-1])): $i = 0; $__LIST__ = $navarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav11): $mod = ($i % 2 );++$i; if($nav11["nav_url"] == ''): ?><li>
													<a href="javascript:;"><?php echo ($nav11["nav_name"]); ?></a>
												</li>
												<?php else: ?>
												<li>
													<a href="<?php echo ($nav11["nav_url"]); ?>/nav_id/<?php echo ($nav11["nav_id"]); ?>"><?php echo ($nav11["nav_name"]); ?></a>
												</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
									</ul>
									<span class="down">
									<img src="/Public/mobile/img/img/down.png" alt="..."/>
									<img src="/Public/mobile/img/img/up.png" alt="..." class="hide"/>
								</span><?php endif; ?>
							</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<!--banner图-->
		<div class="banner">
			<img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" />
		</div>
		<div class="JoinIn_title">为什么选择我们？</div>
		<div class="JoinInNumber_right">
			<?php if(is_array($classify_article_res[0])): $i = 0; $__LIST__ = $classify_article_res[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><div>
					<span><img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..."/></span>
					<p><?php echo ($classify_article["ca_title"]); ?></p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="JoinIn_title">加盟政策</div>
		<div class="good">
			<?php if(is_array($classify_article_res[1])): $k = 0; $__LIST__ = $classify_article_res[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($k % 2 );++$k;?><div class="good_Modular">
					<div class="goodModular_title">
						<p><span><?php echo ($k); ?></span><?php echo ($classify_article["ca_title"]); ?></p>
					</div>
					<div class="goodModular_text">
						<?php echo ($classify_article["ca_content"]); ?>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="JoinIn_title">加盟流程</div>
		<div class="JoinInProcess_right">
			<?php if(is_array($classify_article_res[2])): $k = 0; $__LIST__ = $classify_article_res[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($k % 2 );++$k; if($k < 6): if($k == 5): ?><div class="Technological">
							<div>
								<img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..." />
								<img src="<?php echo ($classify_article["ca_hideimage"]); ?>" alt="..." class="hide" />
							</div>
							<div class="change"><?php echo ($classify_article["ca_title"]); ?></div>
						</div>
						<?php else: ?>
						<div class="Technological">
							<div>
								<img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..." style="width: 0.81rem;height: 0.81rem;" />
								<img src="<?php echo ($classify_article["ca_hideimage"]); ?>" alt="..." class="hide" style="width: 0.81rem;height: 0.81rem;" />
							</div>
							<div class="change"><?php echo ($classify_article["ca_title"]); ?></div>
						</div><?php endif; ?>
					<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="JoinIn_title">加盟流程</div>
		<div class="JoinIn_bottom_back">
			<div class="JoinInBottom">
				<div><span>招商电话：</span><?php echo ($footer["telephone"]); ?></div>
				<div>招商邮箱：<?php echo ($footer["email"]); ?></div>
			</div>
			<a href="javascript:;">点击咨询</a>
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
		<script type="text/javascript">
			$(function() {
				$(".Technological").mouseenter(function() {
					$(this).children('div').children("img").eq(1).removeClass("hide").siblings().addClass("hide");
					$(this).children('.change').css({
						'background': '#014a96',
						'color': '#fff'
					})
				});
				$(".Technological").mouseleave(function() {
					$(this).children('div').children("img").eq(0).removeClass("hide").siblings().addClass("hide");
					$(this).children('.change').css({
						'background': '#fff',
						'color': '#000'
					})
				});
				$('.Catalog').click(function() {
					$('.nav').show();
				});
				$('.guanbi').click(function() {
					$('.nav').hide();
				});
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
				var hei = $(window).height();
				console.log('gaodu', hei);
				var nav_hei = $('.nav').height(hei);
			});
		</script>
	</body>

</html>