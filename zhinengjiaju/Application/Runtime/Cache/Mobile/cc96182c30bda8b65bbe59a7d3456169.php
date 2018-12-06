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
			<img src="/Public/mobile/img/banner1.png" />
		</div>
		<!--博越资讯-->
		<div class="About_title">
			<div>博越资讯</div>
			<div></div>
			<div>about</div>
		</div>
		<div class="dynamic">
			<div class="dynamic_title">
				<?php if(is_array($little_classify_res)): $i = 0; $__LIST__ = $little_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($i % 2 );++$i;?><div>
						<a href="javascript:;"><?php echo ($little_classify["lc_name"]); ?><input type="hidden" value="<?php echo ($little_classify["lc_id"]); ?>" class="lc_id" /></a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="dynamic_content">
				<div class="dynamicCon">
					<a href="javascript:;">
						<div class="trend-right">
							<div>智能家居引领触控显示技术产品新趋势</div>
							<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
							</div>
							<div>查看详情<span>>></span></div>
						</div>
					</a>
					<a href="javascript:;">
						<div class="trend-right">
							<div>智能家居引领触控显示技术产品新趋势</div>
							<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
							</div>
							<div>查看详情<span>>></span></div>
						</div>
					</a>
					<a href="javascript:;">
						<div class="trend-right">
							<div>智能家居引领触控显示技术产品新趋势</div>
							<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
							</div>
							<div>查看详情<span>>></span></div>
						</div>
					</a>
				</div>
				<div class="dynamicCon hide">
					<a href="javascript:;">
						<div class="trend-right">
							<div>123456</div>
							<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
							</div>
							<div>查看详情<span>>></span></div>
						</div>
					</a>
					<a href="javascript:;">
						<div class="trend-right">
							<div>智能家居引领触控显示技术产品新趋势</div>
							<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
							</div>
							<div>查看详情<span>>></span></div>
						</div>
					</a>
					<a href="javascript:;">
						<div class="trend-right">
							<div>智能家居引领触控显示技术产品新趋势</div>
							<div>据悉,社交网络巨头Facebook将推出一款名为“Portal”的AI视频聊天设备,这款设备亮点之处在于在普通智能音箱的基础上 增加了屏幕和摄像头,不但可以实现智能音箱查看新闻、天气、问答和播放音乐以及控制智能家居产品等常规功能外,还能提供视频内容 和视频通话功能。
							</div>
							<div>查看详情<span>>></span></div>
						</div>
					</a>
				</div>
			</div>
			<div id="demo1"></div>
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
			$(function() {
				$('.dynamic_title>div').mouseenter(function() {
					$(this).children('a').css({
						'background': '#014a96',
						'color': '#fff'
					})
					var ind = $(this).index();
					console.log('下标为', ind);
//					$('.dynamic_content').children('div').eq(ind).show().siblings().hide();

				})
				$('.dynamic_title>div').mouseleave(function() {
					$(this).children('a').css({
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
				var nav_hei = $('.nav').height(hei);
				
				
				var lc_id=$('.lc_id').val();
				$.ajax({
					type: "post",
					url: "/index.php/Mobile/Public/newsdata",
					async: true,
					data: {
						'lc_id': lc_id,
						'p': 1
					},
					success: function(data) {
						console.log('uuu', data);
						layui.use(['laypage', 'layer'], function() {
							var laypage = layui.laypage,
								layer = layui.layer;
							//完整功能
							laypage.render({
								elem: 'demo1',
								count: data.allpage,
								theme: '#024b97',
								limit: 1,
								jump: function(obj, first) {
									console.log('回复哈哈哈', obj);
									var ind = $('#demo1>div>a').length;
									var len = $('#demo1>div>span').length;
									for(var k = 0; k < ind; k++) {
										var hhh = $('#demo1>div').children('a').eq(k - 1).outerWidth(true);
									}
									for(var i = 0; i < len; i++) {
										var sss = $('#demo1>div').children('span').eq(i - 1).outerWidth(true);
									}
									var kkk = hhh * ind;
									var ooo = sss * len;
									var wid = kkk + ooo;
									var widt = $("#demo1").width(wid + 2);
									$('#demo1').css({
										'margin': '0 auto'
									});
									$.ajax({
										url: '/index.php/Mobile/Public/newsdata',
										type: 'post',
										data: {
											'lc_id': lc_id,
											'p': obj.curr
										},
										dataType: 'json',
										success: function(data) {
											$(".dynamicCon").children().remove();
											for(var i = 0; i < data.classify_article_res.length; i++) {
												var con = '<a href="/index.php/Mobile/Index/xinwenxiangqing/ca_id/'+data.classify_article_res[i].ca_id+'/nav_id/<?php echo ($nav_id); ?>"><div class="trend-right"><div>' +
													data.classify_article_res[i].ca_title +
													'</div><div>' + data.classify_article_res[i].ca_content +
													'</div><div>查看详情<span>>></span></div></div></a>';
												$('.dynamicCon').append(con);
											}
										},
										error: function() {
											alert('请求异常！');
										}
									})
								}
							});
						});
					},
					error: function() {
						alert('pppppp');
					}
				});
				$('.dynamic_title>div>a').click(function() {
					var lc_id = $(this).children('input').val();
					console.log('oooo', lc_id);
					$.ajax({
						type: "post",
						url: "/index.php/Mobile/Public/newsdata",
						async: true,
						data: {
							'lc_id': lc_id,
							'p': 1
						},
						success: function(data) {
							console.log('uuu', data);
							layui.use(['laypage', 'layer'], function() {
								var laypage = layui.laypage,
									layer = layui.layer;
								//完整功能
								laypage.render({
									elem: 'demo1',
									count: data.allpage,
									theme: '#024b97',
									limit: 1,
									jump: function(obj, first) {
										console.log('回复哈哈哈', obj);
										var ind = $('#demo1>div>a').length;
										var len = $('#demo1>div>span').length;
										for(var k = 0; k < ind; k++) {
											var hhh = $('#demo1>div').children('a').eq(k - 1).outerWidth(true);
										}
										for(var i = 0; i < len; i++) {
											var sss = $('#demo1>div').children('span').eq(i - 1).outerWidth(true);
										}
										var kkk = hhh * ind;
										var ooo = sss * len;
										var wid = kkk + ooo;
										var widt = $("#demo1").width(wid + 2);
										$('#demo1').css({
											'margin': '0 auto'
										});
										$.ajax({
											url: '/index.php/Mobile/Public/newsdata',
											type: 'post',
											data: {
												'lc_id': lc_id,
												'p': obj.curr
											},
											dataType: 'json',
											success: function(data) {
												$(".dynamicCon").children().remove();
												for(var i = 0; i < data.classify_article_res.length; i++) {
													var con = '<a href="/index.php/Mobile/Index/xinwenxiangqing/ca_id/'+data.classify_article_res[i].ca_id+'/nav_id/<?php echo ($nav_id); ?>"><div class="trend-right"><div>' +
														data.classify_article_res[i].ca_title +
														'</div><div>' + data.classify_article_res[i].ca_content +
														'</div><div>查看详情<span>>></span></div></div></a>';
													$('.dynamicCon').append(con);
												}
											},
											error: function() {
												alert('请求异常！');
											}
										})
									}
								});
							});
						},
						error: function() {
							alert('pppppp');
						}
					});
				})

			})
		</script>
	</body>

</html>