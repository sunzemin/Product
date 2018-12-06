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
		<!--活动策划案例-->
		<div class="case">
			<div class="content-five">
				<ul class="contentbox-five ul_five">
					<li class="con-five five">
						<img class="conimg con" src="/Public/mobile/img/img11.png" alt="..." />
						<div class="txt-five">
							<h3>FAD会议策划</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/mobile/img/img12.png" alt="..." />
						<div class="txt-five">
							<h3>大唐芙蓉园冰激凌节</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/mobile/img/img13.png" alt="..." />
						<div class="txt-five">
							<h3>地产活动</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/mobile/img/img14.png" alt="..." />
						<div class="txt-five">
							<h3>封顶仪式</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/mobile/img/img15.png" alt="..." />
						<div class="txt-five">
							<h3>高信隆西安分公司开业</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/mobile/img/img17.png" alt="..." />
						<div class="txt-five">
							<h3>婚礼</h3>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div id="demo4"></div>
		<!--底部-->
		<input type="hidden" value="<?php echo ($nav_id); ?>" class="nav_id" />
		<div class="footer" style="background: url(/Public/mobile/img/img43.png)no-repeat center center;background-size: cover;">
	<div>联系电话：<?php echo ($footer["telephone"]); ?></div>
	<div>我们的地址：<?php echo ($footer["address"]); ?></div>
	<div><?php echo ($footer["copyright"]); ?> <?php echo ($footer["record"]); ?> 技术支持：泰雁科技</div>
</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/mobile/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				$('.top_left').click(function() {
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
				/*鼠标悬停图片放大*/
				$(".con-five").hover(function() {
					$(this).find(".conimg").stop().animate({
						"width": 200,
						"height": 150
					});
				}, function() {
					$(this).find(".conimg").stop().animate({
						"width": 185,
						"height": 132
					});
				});
//				ajax动态加载
				var p = 1;
				var nav_id = $('.nav_id').val();
				$.ajax({
					url: '/index.php/Home/Public/selAllData',
					dataType: 'json',
					type: 'post',
					data: {
						'p': p,
						'nav_id': nav_id
					},
					success: function(data) {
						console.log('数据', data);
						//分页方法
						layui.use(['laypage', 'layer'], function() {
							var laypage = layui.laypage,
								layer = layui.layer;
							//完整功能
							laypage.render({
								count: data.allpage,
								elem: 'demo4',
								first: false,
								last: false,
								theme: '#e60012',
								limit: 1,
								jump: function(obj, first) {
									var ind = $('#demo4>div>a').length;
									var len = $('#demo4>div>span').length;
									for(var k = 0; k < ind; k++) {
										var hhh = $('#demo4>div').children('a').eq(k - 1).outerWidth(true);
									}
									for(var i = 0; i < len; i++) {
										var sss = $('#demo4>div').children('span').eq(i - 1).outerWidth(true);
									}
									var kkk = hhh * ind;
									var ooo = sss * len;
									var wid = kkk + ooo;
									var widt = $("#demo4").width(wid + 80);
									$('#demo4').css({
										'margin': '0 auto'
									});
									$.ajax({
										url: '/index.php/Home/Public/selAllData',
										dataType: 'json',
										type: 'post',
										data: {
											'p': obj.curr,
											'nav_id': nav_id
										},
										success: function(data) {
											$('.contentbox-five').children().remove();
											for(var i = 0; i < data.classify_article_res.length; i++) {
												var con = '<li class="con-five five"><img class="conimg con" src="' +
													data.classify_article_res[i].ca_image +
													'" alt="..." /><div class="txt-five"><h3>' +
													data.classify_article_res[i].ca_title + '</h3></div></li>';
												$('.contentbox-five').append(con);
											}

										},
										error: function() {
											alert('hghfhhhffh');
										}
									})
								}
							});
						});
					},
					error: function() {
						alert('desrtg');
					}
				});
			})
		</script>
	</body>

</html>