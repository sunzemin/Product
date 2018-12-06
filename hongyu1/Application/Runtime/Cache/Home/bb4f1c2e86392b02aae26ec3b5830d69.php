<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博越智能家居-新闻资讯</title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/animate.css"/>
		<!--[if IE]>
			<script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<header>
			<div class="hraderCent">
				<div class="hraderCent-left">
					<img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="img" />
				</div>
				<div class="hraderCent-right">
					<div class="hraderCent-top">
						<div class="search">
							<input type="text" placeholder="请输入您要搜索的内容" />
							<img src="/Public/Home/img/img1.png" alt="img" />
						</div>
					</div>
					<div class="hraderCent-bot">
	<ul>
		<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i;?><li>
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>" target="_blank" class="headCorol"><?php echo ($navs["nav_name"]); ?></a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
				</div>
			</div>
		</header>
		<div class="banner"><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
		<!--内容-->
		<section>
			<div class="information">
				<div class="aboutTitle">
					<div>about</div>
					<div>博越资讯</div>
				</div>
				<div class="dynamic">
					<div class="dynamic_title">
						<div>
							<a href="javascript:;">企业动态</a>
						</div>
						<div>
							<a href="javascript:;">行业新闻</a>
						</div>
					</div>
					<div class="dynamic_content">
						<div class="dynamicCon">
							<a href="javascript:;" class=" animated fadeInUp" style="animation-delay: 0.5s;">
								<div class="trend_left"><img src="/Public/Home/img/img56.png" alt="..." /></div>
								<div class="trend-right">
									<div>智能家居引领触控显示技术产品新趋势</div>
									<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
									</div>
									<div>查看详情<span>>></span></div>
								</div>
							</a>
							<a href="javascript:;" class=" animated fadeInUp" style="animation-delay: 1s;">
								<div class="trend_left"><img src="/Public/Home/img/img56.png" alt="..." /></div>
								<div class="trend-right">
									<div>智能家居引领触控显示技术产品新趋势</div>
									<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
									</div>
									<div>查看详情<span>>></span></div>
								</div>
							</a>
							<a href="javascript:;" class=" animated fadeInUp" style="animation-delay: 1.5s;">
								<div class="trend_left"><img src="/Public/Home/img/img56.png" alt="..." /></div>
								<div class="trend-right">
									<div>智能家居引领触控显示技术产品新趋势</div>
									<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
									</div>
									<div>查看详情<span>>></span></div>
								</div>
							</a>
						</div>
						<div class="dynamicCon hide">
							<a href="javascript:;" class=" animated fadeInUp" style="animation-delay: 0.5s;">
								<div class="trend_left"><img src="/Public/Home/img/img56.png" alt="..." /></div>
								<div class="trend-right">
									<div>123456</div>
									<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
									</div>
									<div>查看详情<span>>></span></div>
								</div>
							</a>
							<a href="javascript:;" class=" animated fadeInUp" style="animation-delay: 1s;">
								<div class="trend_left"><img src="/Public/Home/img/img56.png" alt="..." /></div>
								<div class="trend-right">
									<div>智能家居引领触控显示技术产品新趋势</div>
									<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
									</div>
									<div>查看详情<span>>></span></div>
								</div>
							</a>
							<a href="javascript:;" class=" animated fadeInUp" style="animation-delay: 1.5s;">
								<div class="trend_left"><img src="/Public/Home/img/img56.png" alt="..." /></div>
								<div class="trend-right">
									<div>智能家居引领触控显示技术产品新趋势</div>
									<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
									</div>
									<div>查看详情<span>>></span></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!--公共底部-->
		<footer>
	<div class="footerEnd">
		<div class="footerEnd-top">
			<div class="footerEnd-left">
				<div class="footerEndLeft-one">全国统一联系热线</div>
				<div class="footerEndLeft-two"><?php echo ($footer["telephone"]); ?></div>
				<div class="footerEndLeft-three">地址：<?php echo ($footer["address"]); ?></div>
				<div class="footerEndLeft-four">
					<div>
						<img src="<?php echo ($footer["wx_erweima"]); ?>" alt="img" />
						<div>官方微信</div>
					</div>
					<div>
						<img src="<?php echo ($footer["wb_erweima"]); ?>" alt="img" />
						<div>官方微博</div>
					</div>
				</div>
			</div>
			<div class="footerEnd-right">
				<form>
					<div>
						<div>姓名</div>
						<input type="text" placeholder="请输入您的姓名" />
					</div>
					<div>
						<div>电话</div>
						<input type="text" placeholder="请输入您的电话" />
					</div>
					<div>
						<div>备注</div>
						<textarea placeholder="备注内容"></textarea>
					</div>
					<input type="button" value="提交" class="subMit" />
				</form>
			</div>
		</div>
		<div class="footerEnd-bot">
			<?php echo ($footer["copyright"]); ?> <?php echo ($footer["record"]); ?> &nbsp;&nbsp;&nbsp;&nbsp; 技术支持：泰雁科技
		</div>
	</div>
</footer>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/Home/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				$('.dynamic_title>div').mouseenter(function(){
					$(this).css({
						'background':'#014a96',
						'color':'#fff'
					})
					var ind=$(this).index();
					console.log('下标为',ind);
					$('.dynamic_content').children('div').eq(ind).show().siblings().hide();
				})
				$('.dynamic_title>div').mouseleave(function(){
					$(this).css({
						'background':'#fff',
						'color':'#000'
					})
 				})
			});
		</script>
	</body>

</html>