<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="bright"/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>薇拉摄影</title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css"/>
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>
	<body>
		<header>
			<div class="headerCent">
				<div><?php echo ($company_introduce["ci_logotitle"]); ?></div>
				<div><?php echo ($company_introduce["ci_logotitle_english"]); ?> </div>
			</div>
			<img src="/Public/mobile/img/img1.png" alt="img" class="headerCent-right"/>
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
	<a href="/index.php/Mobile/Index/index" class="orangeCol">首页</a>
	<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i;?><a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
		
		
		<div class="bannerImages">
			<div class="swiper-container">
			    <div class="swiper-wrapper">
			    	<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
				      		<div class="bannerImages-top">
					      		<img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..."/>
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
			<img src="/Public/mobile/img/img7.png" alt="img"/>
		</div>
		<img src="<?php echo ($background_imageData[0]["bi_image"]); ?>" alt="img" class="Imgbanner"/>
		<!--爱就要放肆-->
		<a href="/index.php/Home/Index/zuixintehui" class="Wanton">
			<div class="Wanton-left">国庆 | 爱就要放肆</div>
			<div class="Wanton-right">点击进入活动</div>
		</a>
		<!--标题-->
		<div class="PublicCall">
			<img src="/Public/mobile/img/img8.png" alt="img"/>
		</div>
		<!--风格样片-->
		<div class="StyleSample">
			<?php if(is_array($caseData)): $i = 0; $__LIST__ = $caseData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$case): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/Information/id/<?php echo ($case["id"]); ?>">
				<img src="<?php echo ($case["image"]); ?>" alt="img"/>
				<div class="StyleSampleCent">
					<div class="StyleSampleCent-top">
						<?php echo ($case["title"]); ?>
					</div>
					<div class="StyleSampleCent-bot">
						<?php echo ($case["author"]); ?>
					</div>
				</div>
			</a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!--查看更多-->
		<a href="/index.php/Mobile/Index/keyangxinshang" class="enjoyMore">+ enjoy more</a>
		<!--标题-->
		<div class="PublicCall">
			<img src="/Public/mobile/img/img9.png" alt="img"/>
		</div>
		<!--层叠轮播-->
		<div id="certify">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php if(is_array($view_res)): $i = 0; $__LIST__ = $view_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$view): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="<?php echo ($view["image"]); ?>" alt="img"/></div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<!--查看更多-->
		<!-- <a href="javascript:" class="enjoyMore">+ enjoy more</a> -->
		<!--标题-->
		<div class="PublicCall">
			<img src="/Public/mobile/img/img10.png" alt="img"/>
		</div>
		<!--分类-->
		<div class="Interior">
			<?php if(is_array($room_scenery_classify_res)): $i = 0; $__LIST__ = $room_scenery_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery_classify): $mod = ($i % 2 );++$i;?><a href="/index.php/Mobile/Index/erjifenlei/rsc_id/<?php echo ($room_scenery_classify["rsc_id"]); ?>"><?php echo ($room_scenery_classify["rsc_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!--轮播-->
		<!-- <div class="newsImages">
		 	<div class="swiper-container">
			    <div class="swiper-wrapper">
			    	<?php if(is_array($room_scenery_res)): $k = 0; $__LIST__ = $room_scenery_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery): $mod = ($k % 2 );++$k;?><div class="swiper-slide" style="background:url(<?php echo ($room_scenery["rs_image"]); ?>) no-repeat;background-size: 100%;"></div><?php endforeach; endif; else: echo "" ;endif; ?>
			    </div>
		  	</div>
		</div> -->
		<!--城市旅拍-->
		<div class="CityTour">
			<?php if(is_array($room_scenery_res111)): $i = 0; $__LIST__ = $room_scenery_res111;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery): $mod = ($i % 2 );++$i;?><a href="/index.php/Mobile/Index/Information/rs_id/<?php echo ($room_scenery["rs_id"]); ?>">
					<div class="CityTour-top">
						<div class="CityTour-left">
							<?php echo ($room_scenery["rs_name"]); ?>
						</div>
						<div class="CityTour-right">
							<img src="/Public/mobile/img/img13.png" alt="img"/>
						</div>
					</div>
					<img src="<?php echo ($room_scenery["rs_image"]); ?>" alt="img" class="CityTour-bot"/>
				</a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!--查看更多-->
		<a href="/index.php/Mobile/Index/erjifenlei/rsc_id/<?php echo ($room_scenery_classify123["rsc_id"]); ?>" class="enjoyMore">+ enjoy more</a>
		<!--img-->
		<div class="Artwork">
			<img src="/Public/mobile/img/img16.png" alt="img"/>
			<div class="ArtworkCent">
				<div class="Artwork-top">
					Vera Mansion
				</div>
				<div class="Artwork-bot">
					每一张照片都是艺术品，我们坚持用客片说话
				</div>
			</div>
		</div>
		<!--预约报名-->
		<div class="signUp">
			<div>在线预约报名</div>
			<form>
				<input type="text" placeholder="您的姓名" />
				<input type="text" placeholder="您的手机" />
				<input type="text" placeholder="您的微信/QQ" />
				<textarea placeholder="您的备注"></textarea>
				<input type="button" value="提交" class="submitVal"/>
			</form>
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
					welcome to communicate with us
				</div>
			</div>
		</div>
	</div>
</div>
		<!--公共底部-->
		<footer>
	<div class="MenuCent footer-one">
		<a href="/index.php/Mobile/Index/index" class="orangeCol">首页</a>
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
			<a href="javascript:;">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img19.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					在线咨询
				</div>
			</a>
			<a href="javascript:;">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img20.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					免费通话
				</div>
			</a>
			<a href="javascript:;">
				<div class="EdnFotData-left">
					<img src="/Public/mobile/img/img21.png" alt="img"/>
				</div>
				<div class="EdnFotData-right">
					优惠礼包
				</div>
			</a>
		</div>
		<!--广告红包-->
		<div class="RedEnvelopes">
			<div class="RedEnvelopes-top">
				<img src="/Public/mobile/img/img4.png" alt="img"/>
			</div>
			<div class="RedEnvelopes-bot">
				薇拉婚纱摄影
			</div>
		</div>
		<img src="/Public/mobile/img/img22.png" alt="x" class="close"/>
		<div class="HideDiv3"></div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/mobile/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/mobile/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
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
//				层叠轮播图
				var certifySwiper = new Swiper('#certify .swiper-container', {
					observer:true,
			    	observeParents:true,
					watchSlidesProgress: true,
					slidesPerView: 'auto',
					centeredSlides: true,
					loop: true,
					loopedSlides: 3,//slide个数
					autoplay: true,
					pagination: {
						el: '#certify .swiper-pagination',
						clickable: true,
					},
					on: {
						progress: function(progress) {
							for (i = 0; i < this.slides.length; i++) {
								var slide = this.slides.eq(i);
								var slideProgress = this.slides[i].progress;
								modify = 1;
								if (Math.abs(slideProgress) > 1) {
									modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
								}
								translate = slideProgress * modify * 260 + 'px';
								scale = 1 - Math.abs(slideProgress) / 5;
								zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
								slide.transform('translateX(' + translate + ') scale(' + scale + ')');
								slide.css('zIndex', zIndex);
								slide.css('opacity', 1);
								if (Math.abs(slideProgress) > 3) {
									slide.css('opacity', 0);
								}
							}
						},
						setTransition: function(transition) {
							for (var i = 0; i < this.slides.length; i++) {
								var slide = this.slides.eq(i)
								slide.transition(transition);
							}
						}
					}
				});
//				薇拉内景轮播
				var swiper2 = new Swiper('.newsImages .swiper-container', {
			        spaceBetween: 30,
			        effect: 'fade',
			        observer:true,
			    	observeParents:true,
			        spaceBetween: 30,
			        centeredSlides: true,
			        autoplay: {
			        	delay: 2500,
			        	disableOnInteraction: false,
			        },
			    });
//			    js取消分类的下边框
//				拿到总长度
				var leng=$(".Interior>a").length;
//				向下取整,拿到保留下边框的行数和个数
				var valNumber= Math.floor(Number(leng/3));
				var num=valNumber*3;
//				需要去除边框的个数
				var splictNum=Number(leng-num);
//				去除最后一行的下边框
				if(splictNum==0){
					$(".Interior").children("a").eq(leng-1).addClass("hideBorder");
					$(".Interior").children("a").eq(leng-2).addClass("hideBorder");
					$(".Interior").children("a").eq(leng-3).addClass("hideBorder");
				}
				if(splictNum==1){
					$(".Interior").children("a").eq(leng-1).addClass("hideBorder");
				}
				if(splictNum==2){
					$(".Interior").children("a").eq(leng-1).addClass("hideBorder");
					$(".Interior").children("a").eq(leng-2).addClass("hideBorder");
				}
//				js设置红包垂直居中和定时显示
				var widt=$(".RedEnvelopes").outerWidth(true);
				var hegt=$(".RedEnvelopes").outerHeight(true);
				var windowWid=$(window).width();
				var windowheg=$(window).height();
				var lft=Number((windowWid-widt)/2);
				var ght=Number((windowheg-hegt)/2);
				$(".RedEnvelopes").css("left",lft);
				$(".RedEnvelopes").css("top",ght);
				var widt2=$(".close").outerWidth(true);
				var hegt2=$(".close").outerHeight(true);
				var lft2=Number((windowWid-widt2)/2);
				var ght2=Number((windowheg-hegt)/2)+hegt+20;
				$(".close").css("left",lft2);
				$(".close").css("top",ght2);
//				关闭红包
				$(".close").click(function(){
					$(".RedEnvelopes").css("display","none");
					$(".close").css("display","none");
					$(".HideDiv3").css("display","none");
				});
//				定时器
				var t1 = window.setInterval("redBage()",30000); 
			});
			function redBage(){
				$(".RedEnvelopes").css("display","block");
				$(".close").css("display","block");
				$(".HideDiv3").css("display","block");
			}
		</script>
	</body>
</html>