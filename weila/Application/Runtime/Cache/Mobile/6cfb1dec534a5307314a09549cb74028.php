<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="bright" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>薇拉摄影</title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/layui/css/layui.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>

	<body>
		<header>
			<div class="headerCent">
				<div><?php echo ($company_introduce["ci_logotitle"]); ?></div>
				<div><?php echo ($company_introduce["ci_logotitle_english"]); ?> </div>
			</div>
			<img src="/Public/mobile/img/img1.png" alt="img" class="headerCent-right" />
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
	<a href="/index.php/Mobile/Index/index">首页</a>
	<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i;?><a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php if($navben == null): ?><input type="hidden" class="navcss" value="首页">
	<?php else: ?>
	<input type="hidden" class="navcss" value="<?php echo ($navben["nav_name"]); ?>"><?php endif; ?>
		<div class="bannerImages">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
							<div class="bannerImages-top">
								<img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." />
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
			<img src="/Public/mobile/img/img10.png" alt="img" />
		</div>
		<div class="Preferential"></div>
		<div class="StyleSample-bot">
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
					<?php echo ($company_introduce["ci_content_english"]); ?>
				</div>
			</div>
		</div>
	</div>
</div>
		<!--公共底部-->
		<footer>
	<div class="MenuCent footer-one">
		<a href="/index.php/Mobile/Index/index">首页</a>
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
			<a href="<?php echo ($home_url["hu_telephone"]); ?>">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img19.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					在线咨询
				</div>
			</a>
		
			<a target="_blank" href="tel:<?php echo ($footer["telephone"]); ?>">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img20.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					免费通话
				</div>
			</a>


			<a href="<?php echo ($home_url["hu_gifurl"]); ?>">
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
		<script src="/Public/Home/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/mobile/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
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
				//				分页
				var requestId = 0; //默认请求id
				ajaxData(1);

				function ajaxData(page) {
					$.ajax({      
						type: 'get',
						url: '/index.php/Home/Public/selactive/p/' + page,
						cache: false,
						dataType: 'json',
						success: function(data) {       
							//	页面默认加载分页数据
							var pageVal = 0;
							layui.use('laypage', function() {
								var laypage = layui.laypage;
								laypage.render({
									elem: 'demo1',
									count: data.allcount, //数据总数
									groups: 2,
									limit: 10,
									jump: function(obj) {
										$(".RealEvaluation-bot").children().remove();
										$.ajax({      
											type: 'post',
											url: '/index.php/Home/Public/selactive/p/' + obj.curr,
											cache: false,
											dataType: 'json',
											success: function(data) {       
												$(".numPage").children("i").text(data.allcount);
												for(var g = 0; g < data.activeData.length; g++) {
													var aid = data.activeData[g].aid;
													var aimage = data.activeData[g].aimage;
													var atime = data.activeData[g].atime;
													var secondsTime = atime * 1000;
													var dateTimes = new Date(secondsTime);
													var youwant = dateTimes.getFullYear() + '-' + (dateTimes.getMonth() + 1) + '-' + dateTimes.getDate() + ' ' + dateTimes.getHours() + ':' + dateTimes.getMinutes() + ':' + dateTimes.getSeconds();
													var acontent = data.activeData[g].acontent;
													var atitle = data.activeData[g].atitle;
													var strCent = '<a href="/index.php/Mobile/Index/Information/id/' +
														aid + '" target="_blank" class="PreferentialData"><img src="' +
														aimage + '" alt="..."/><div class="PreferentialCent"><div class="Preferential-one"><div>CONTENT:</div><div>TIME:' +
														youwant + '</div></div><div class="Preferential-two">' +
														acontent + '</div><div class="Preferential-three">' +
														atitle + '</div></div></a>';
													$(".Preferential").append(strCent);
												}
											},
											error: function() {       
												alert("获取最新特惠请求异常！");      
											}   
										});
										var leng = $("#demo1>div").children().length;
										for(var k = 0; k < leng; k++) {
											var valLeng = $("#demo1>div").children().eq(k).outerWidth(true);
											pageVal += Number(valLeng);
										}
										var endVal = pageVal + 100;
										$(".StyleSample-bot").css("width", endVal);
										pageVal = 0;
									}
								});
							});
						},
						error: function() {       
							alert("获取客户评价请求异常！");      
						}   
					});
				}
			});
		</script>
	</body>

</html>