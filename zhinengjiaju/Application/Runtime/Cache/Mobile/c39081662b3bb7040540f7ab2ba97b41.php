<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title><?php echo ($navben["nav_name"]); echo ($pcnavid); ?></title>
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
		<!--产品中心-->
		<div class="ProductCenter">
			<div class="ProductCenter-top">
				<div><img src="/Public/mobile/img/img58.png" alt="..." /></div>
				<div>
					<?php if($product_classifyben == null): echo ($product_classify_res[0]["pc_name"]); ?><input type="hidden" value="<?php echo ($product_classify_res[0]["pc_id"]); ?>" class="pc_id"/>
						<?php else: ?>
						<?php echo ($product_classifyben["pc_name"]); ?><input type="hidden" value="<?php echo ($product_classifyben["pc_id"]); ?>" class="pc_id"/><?php endif; ?>
			</div>
			<div class="lock">
			</div>
			
		</div>
		<div id="demo1"></div>
		<input type="hidden" value="<?php echo ($nav_id); ?>" class="nav_id" />
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
				var nav_id = $('.nav_id').val();
				var p = 1;
				$.ajax({
					type: "post",
					url: "/index.php/Mobile/Public/productdata",
					async: true,
					data: {
						'nav_id': nav_id,
						'p': p
					},
					success: function(data) {
						layui.use(['laypage', 'layer'], function() {
							var laypage = layui.laypage,
								layer = layui.layer;
							//完整功能
							laypage.render({
								elem: 'demo1',
								count: data.allcount,
								theme: '#024b97',
								limit: 1,
								jump: function(obj, first) {
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
									var widt = $("#demo1").width(wid + 10);
									$('#demo1').css({
										'margin': '0 auto'
									});
									$.ajax({
										url: '/index.php/Mobile/Public/productdata',
										dataType: 'json',
										type: 'post',
										data: {
											'nav_id': nav_id,
											'p': p
										},
										success: function(data) {
											$(".lock").children().remove();
											for(var i = 0; i < data.product_res.length; i++) {
												var con = '<a href="javascript:;"><div class="lockDisplay"><div><div><img src="' + data.product_res[i].pimage + '" alt="..." /></div></div><div>' + data.product_res[i].pname + '</div></div></a>';
												$('.lock').append(con);
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
						alert('ffff');
					}
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
			})
		</script>
	</body>

</html>