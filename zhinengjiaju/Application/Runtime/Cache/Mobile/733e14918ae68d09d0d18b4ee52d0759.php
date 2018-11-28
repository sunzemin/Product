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
		<!--博越科技-->
		<div class="About_title">
			<div>关于我们</div>
			<div></div>
			<div>about</div>
		</div>
		<div class="About_text">
			<div class="backimg"><img src="/Public/mobile/img/img2.png" alt="..." /></div>
			<div class="introduce1">
				<div class="introduce_title">
					<div><img src="/Public/mobile/img/g2.png" alt="..." /></div>
					<div><?php echo ($company_introduce["ci_name"]); ?></div>
				</div>
				<div class="introduce_text"><?php echo ($company_introduce["ci_content"]); ?>
				</div>
			</div>
		</div>
		<div class="aboutBoyue-three">
			<a href="javascript:;">
				<div class="aboutBoyue-top">
					<img src="/Public/mobile/img/g3.png" alt="img" />
					<img src="/Public/mobile/img/g4.png" alt="img" class="hide" />
				</div>
				<div class="aboutBoyue-bot">一件咨询</div>
			</a>
			<a href="javascript:;">
				<div class="aboutBoyue-top">
					<img src="/Public/mobile/img/g7.png" alt="img" />
					<img src="/Public/mobile/img/g6.png" alt="img" class="hide" />
				</div>
				<div class="aboutBoyue-bot">联系我们</div>
			</a>
			<a href="javascript:;">
				<div class="aboutBoyue-top">
					<img src="/Public/mobile/img/g5.png" alt="img" />
					<img src="/Public/mobile/img/g1.png" alt="img" class="hide" />
				</div>
				<div class="aboutBoyue-bot">加入我们</div>
			</a>
		</div>
		<!--轮播-->
		<div class="boddy">
			<div id="wrapper">
				<ul>
					<?php if(is_array($classify_article_res)): $i = 0; $__LIST__ = $classify_article_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..." /></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div id="bth1"><img src="/Public/mobile/img/img/img22.png" alt="..." /></div>
			<div id="bth2"><img src="/Public/mobile/img/img/img23.png" alt="..." /></div>
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
			//					轮播1 
			var timer1 = null; //这里只是给个定义，不让变量是undefind就行，也可以直接赋值
			var speed2 = 3; //速度
			var od1 = document.getElementById("wrapper"); //最外部的div
			var au1 = od1.getElementsByTagName('ul')[0];    
			var ali1 = au1.getElementsByTagName('li');    
			au1.innerHTML = au1.innerHTML + au1.innerHTML; //这里是把ul的内容*2
			au1.style.width = ali1[0].offsetWidth * ali1.length + 'px'; //ul的宽度时多有的li的宽度之和
			timer1 = setInterval(move1, 30); //定时器重复执行move这个函数，每0.3秒执行一次
			function move1() { //这个函数的作用是移动
				// offsetLeft是指当前元素距离左侧的距离
				//       offsetWidth是指对象整体的实际宽度，包滚动条等边线，会随对象显示大小的变化而改变
				if(au1.offsetLeft < -au1.offsetWidth / 2) {
					//     如果ul距离他的父元素wrapper的左侧距离小于ul这个元素整体宽度的一半,就让它的左边距归0
					au1.style.left = '0';     
				}     
				if(au1.offsetLeft > 0) {
					//         如果左边距大于0,那么左边距就等于当前ul的总体宽度除以2
					au1.style.left = -au1.offsetWidth / 2 + 'px';     
				}     
				au1.style.left = au1.offsetLeft + speed2 + 'px';
				//        ul的左边定位left等于ul的左边距+4,加这个4的原因是控制速度，不信你可以更改一下，数值越大速度越快
			}    
			od1.onmouseover = function() { //鼠标进入的时候，停止定时器，让它停下来
				clearInterval(timer1);    
			}    
			od1.onmouseout = function() { //鼠标离开的时候，继续执行定时器，让它继续动
				timer1 = setInterval(move1, 30);    
			}      
			document.getElementById("bth1").onclick = function() {     //速度为-4的时候，就是让它向左边，因为我们是在更改它的定位left,所以负值是左边
				speed2 = -3;    
			}    
			document.getElementById("bth2").onclick = function() {     //速度为4的时候，就是让它向右边，因为我们是在更改它的定位left,所以负值是右边
				speed2 = 3;    
			} 
			//				鼠标滑过一键联系
			$(function() {
				$(".aboutBoyue-three>a").mouseenter(function() {
					$(this).children(".aboutBoyue-top").children("img").eq(1).removeClass("hide").siblings().addClass("hide");
					$(this).children('.aboutBoyue-bot').css({
						'color': '#014a96'
					})
				});
				$(".aboutBoyue-three>a").mouseleave(function() {
					$(this).children(".aboutBoyue-top").children("img").eq(0).removeClass("hide").siblings().addClass("hide");
					$(this).children('.aboutBoyue-bot').css({
						'color': '#000'
					});

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