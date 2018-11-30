<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title><?php if($case != null): echo ($case["title"]); ?>
				<?php else: endif; ?>
			<?php if($little_classify != null): echo ($little_classify["lc_name"]); ?>
				<?php else: endif; ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/layui-v2.4.5/layui/layui.css" />
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
		<!--新闻详情-->
		<div class="NewsDetail">
			<?php if($classify_article != null): ?><div class="IntelligentLock_top">
					<span>当前位置&nbsp;:</span>
					<span><a href="/index.php/Home/Index/index">首页</a></span>
					<span>></span>
					<span><a href="javascript:;"><?php echo ($all_classify["ac_name"]); ?></a></span>
					<span>></span>
					<span><?php echo ($little_classify["lc_name"]); ?></span>
				</div>
				<div class="NewsDetail_title">
					<div><?php echo ($classify_article["ca_title"]); ?></div>
					<div>日期:<?php echo (date("Y-m-d H:i:s",$classify_article["ca_time"])); ?></div>
					<div>
						<?php echo ($classify_article["ca_content"]); ?>
					</div>
					<!--<div><img src="/Public/mobile/img/img56.png" alt="..." /></div>
				<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气.问 答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容和视频通话功能。据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通 智能音箱的基础上增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容和视频通话功能。
				</div>-->
				</div><?php endif; ?>
			<?php if($case != null): echo ($case["content"]); ?>
				<?php else: endif; ?>
		</div>
		<div class="lastOne">
			<?php if($classify_article != null): if($classify_article12 == null): ?><div>
						<a>上一篇：无</a>
					</div>
					<?php else: ?>
					<div>
						<a href="/index.php/Mobile/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article12["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>">上一篇：<?php echo ($classify_article12["ca_title"]); ?></a>
					</div><?php endif; ?>
				<?php if($classify_article11 == null): ?><div>
						<a>下一篇：无</a>
					</div>
					<?php else: ?>
					<div>
						<!--/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article11["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>-->
						
						<a href="/index.php/Mobile/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article11["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>">下一篇：<?php echo ($classify_article11["ca_title"]); ?></a>
					</div><?php endif; ?>
				<?php else: endif; ?>
			<?php if($case != null): if($preid == 0): ?><div>
						<a>上一篇：无</a>
					</div>
					<?php else: ?>
					<div>
						<a href="/index.php/Mobile/Index/xinwenxiangqing/id/<?php echo ($precase["id"]); ?>/nav_id/<?php echo ($nav_id); ?>">上一篇：<?php echo ($precase["title"]); ?></a>
					</div><?php endif; ?>
				<?php if($nextid == 0): ?><div>
						<a>下一篇：无</a>
					</div>
					<?php else: ?>
					<div>
						<a href="/index.php/Mobile/Index/xinwenxiangqing/id/<?php echo ($nextcase["id"]); ?>/nav_id/<?php echo ($nav_id); ?>">下一篇：<?php echo ($nextcase["title"]); ?></a>
					</div><?php endif; ?>
				<?php else: endif; ?>
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
		<script src="/Public/Mobile/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
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
			})
		</script>
	</body>

</html>