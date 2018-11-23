<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博越智能家居</title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
	</head>

	<body>
		<div class="whole">
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
<input type="text" id="btn" value="<?php echo ($nav_id); ?>" />
					</div>
				</div>
			</header>
			<!--内容-->
			<section>
				<!--主页轮播-->
				<div class="swiperImages">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
									<?php if($lunbo["nav_url"] == ''): ?><a href="javascript:;">
											<img src="<?php echo ($lunbo["lb_image"]); ?>" alt="img" />
										</a>
										<?php else: ?>
										<a href="<?php echo ($lunbo["lb_url"]); ?>">
											<img src="<?php echo ($lunbo["lb_image"]); ?>" alt="img" />
										</a><?php endif; ?>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="swiperClick">
						<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div>
								<div class="swiperClick-top swiperBack2"></div>
								<div class="swiperClick-bot swiperBack">
									<?php echo ($lunbo["lb_title"]); ?>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<div class="swiperClick2"></div>
				</div>
		</div>

		<!--关于博越科技-->
		<div class="aboutTitle">
			<div>about</div>
			<div>博越科技</div>
		</div>
		<div class="aboutBoyue">
			<div class="aboutBoyue-left">
				<img src="/Public/Home/img/img3.png" alt="img" />
			</div>
			<div class="aboutBoyue-right">
				<div class="aboutBoyue-one">
					<?php echo ($company_introduce["ci_title"]); ?>
				</div>
				<div class="aboutBoyue-two">
					<?php echo ($company_introduce["ci_content"]); ?>
				</div>
				<div class="aboutBoyue-three">
					<a href="javascript:;">
						<div class="aboutBoyue-top">
							<img src="/Public/Home/img/img4.png" alt="img" />
							<img src="/Public/Home/img/img5.png" alt="img" class="hide" />
						</div>
						<div class="aboutBoyue-bot">一件咨询</div>
					</a>
					<a href="javascript:;">
						<div class="aboutBoyue-top">
							<img src="/Public/Home/img/img6.png" alt="img" />
							<img src="/Public/Home/img/img7.png" alt="img" class="hide" />
						</div>
						<div class="aboutBoyue-bot">联系我们</div>
					</a>
					<a href="javascript:;">
						<div class="aboutBoyue-top">
							<img src="/Public/Home/img/img8.png" alt="img" />
							<img src="/Public/Home/img/img9.png" alt="img" class="hide" />
						</div>
						<div class="aboutBoyue-bot">加入我们</div>
					</a>
				</div>
			</div>
		</div>
		<div class="aboutTitle">
			<div>Product display</div>
			<div>博越产品展示</div>
		</div>
		<div class="CentMenu">
			<a href="javascript:;" class="MenuBackColo">智能锁</a>
			<a href="javascript:;">智能灯泡</a>
			<a href="javascript:;">云门铃</a>
			<a href="javascript:;">智慧生活</a>
			<a href="javascript:;">智慧家电</a>
		</div>
		<div class="MenuDataCent">
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img10.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">家用防盗门锁</div>
			</a>
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img11.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">密码锁指纹锁</div>
			</a>
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img12.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">家用智能锁</div>
			</a>
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img13.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">指纹智能锁</div>
			</a>
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img14.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">电子智能锁</div>
			</a>
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img15.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">智能锁</div>
			</a>
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img16.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">家用防盗门锁</div>
			</a>
			<a href="javascript:;">
				<div class="MenuDataCent-top">
					<img src="/Public/Home/img/img17.png" alt="img" />
				</div>
				<div class="MenuDataCent-bot">家用智能防盗</div>
			</a>
		</div>
		<!--更多-->
		<a href="javascript:;" class="MenuMore">more</a>
		<div class="aboutTitle">
			<div>Intelligent scene</div>
			<div>博越智能场景</div>
		</div>
		<!--动画开灯-->
		<div class="animationDemo">
			<div>
				<img src="/Public/Home/img/img20.jpg" alt="img" />
			</div>
			<div>
				<img src="/Public/Home/img/img19.png" alt="img" />
			</div>
			<div>
				<img src="/Public/Home/img/img18.jpg" alt="img" />
			</div>
			<div>
				<img src="/Public/Home/img/img21.png" alt="img" />
			</div>
		</div>
		<div class="aboutTitle">
			<div>Intelligent self-assembly</div>
			<div>博越全屋智能整装</div>
		</div>
		<!--客户满意是我们的追求-->
		<div class="CustomerSatisfaction">
			<div class="CustomerSatisfaction-top">客户的满意是我们较大的追求</div>
			<div class="CustomerSatisfaction-data">
				我们不断对家装行业进行探索与尝试，解决行业弊端和消费者痛点，是 我们前进的本质。我们始终秉承“爱与责任”的核心理念，以“健康生活服务商“为品牌定位，共筑生 活家高品质健康整装体系。我们进行产品升级，努力把健康做到更佳，为更多人打造健康的环境，让每个人都享受健康家居。
			</div>
		</div>
		<div class="Intelligence">
			<div class="Intelligence-top">
				<a href="javascript:;" class="ColorMenus">舒适卧室</a>
				<a href="javascript:;">简约客厅</a>
				<a href="javascript:;">开放厨房</a>
			</div>
			<div class="Intelligence-bot">
				<div class="Intelligence-left">
					<div class="Img1">
						<div class="swiper-container Img1-1">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="/Public/Home/img/img24.png" alt="..." />
								</div>
								<div class="swiper-slide">
									<img src="/Public/Home/img/img25.jpg" alt="..." />
								</div>
								<div class="swiper-slide">
									<img src="/Public/Home/img/img26.jpg" alt="..." />
								</div>
							</div>
							<div class="swiper-button-next Img1-3"></div>
							<div class="swiper-button-prev Img1-4"></div>
						</div>
					</div>
					<div class="Img2 hiddenHide">
						<div class="swiper-container Img2-1">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="/Public/Home/img/img27.jpg" alt="..." />
								</div>
								<div class="swiper-slide">
									<img src="/Public/Home/img/img28.jpg" alt="..." />
								</div>
								<div class="swiper-slide">
									<img src="/Public/Home/img/img29.jpg" alt="..." />
								</div>
							</div>
							<div class="swiper-button-next Img2-3"></div>
							<div class="swiper-button-prev Img2-4"></div>
						</div>
					</div>
					<div class="Img3 hiddenHide">
						<div class="swiper-container Img3-1">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="/Public/Home/img/img30.jpg" alt="..." />
								</div>
								<div class="swiper-slide">
									<img src="/Public/Home/img/img31.jpg" alt="..." />
								</div>
								<div class="swiper-slide">
									<img src="/Public/Home/img/img32.jpg" alt="..." />
								</div>
							</div>
							<div class="swiper-button-next Img3-3"></div>
							<div class="swiper-button-prev Img3-4"></div>
						</div>
					</div>
				</div>
				<div class="Intelligence-right">
					<div class="Intelligence-title">全屋智能整装</div>
					<div class="Intelligence-img">
						<a href="javascript:;">
							<div class="IntelligenceImg-top">
								<img src="/Public/Home/img/img33.png" alt="img" />
							</div>
							<div class="IntelligenceImg-bot">硬装</div>
						</a>
						<a href="javascript:;">
							<div class="IntelligenceImg-top">
								<img src="/Public/Home/img/img34.png" alt="img" />
							</div>
							<div class="IntelligenceImg-bot">硬装</div>
						</a>
						<a href="javascript:;">
							<div class="IntelligenceImg-top">
								<img src="/Public/Home/img/img35.png" alt="img" />
							</div>
							<div class="IntelligenceImg-bot">硬装</div>
						</a>
						<a href="javascript:;">
							<div class="IntelligenceImg-top">
								<img src="/Public/Home/img/img36.png" alt="img" />
							</div>
							<div class="IntelligenceImg-bot">硬装</div>
						</a>
						<a href="javascript:;">
							<div class="IntelligenceImg-top">
								<img src="/Public/Home/img/img37.png" alt="img" />
							</div>
							<div class="IntelligenceImg-bot">硬装</div>
						</a>
						<a href="javascript:;">
							<div class="IntelligenceImg-top">
								<img src="/Public/Home/img/img38.png" alt="img" />
							</div>
							<div class="IntelligenceImg-bot">硬装</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="aboutTitle">
			<div>Customer case</div>
			<div>博越客户案例</div>
		</div>
		<div class="CustomerCase" style="background: url(/Public/Home/img/img39.png) no-repeat;background-size: 100% 100%;">
			<div class="CustomerCaseCent">
				<a href="javascript:;" target="_blank">
					<div class="CustomerCase-top"></div>
					<div class="CustomerCase-cent">
						<div class="caseCent">
							案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例
						</div>
					</div>
					<div class="CustomerCase-bot"></div>
					<div class="CustomerCaseImg">
						<img src="/Public/Home/img/img40.png" alt="img" />
					</div>
				</a>
				<a href="javascript:;" target="_blank">
					<div class="CustomerCase-top"></div>
					<div class="CustomerCase-cent">
						<div class="caseCent">
							案例案例案例案例案例案例案例案
						</div>
					</div>
					<div class="CustomerCase-bot"></div>
					<div class="CustomerCaseImg">
						<img src="/Public/Home/img/img40.png" alt="img" />
					</div>
				</a>
				<a href="javascript:;" target="_blank">
					<div class="CustomerCase-top"></div>
					<div class="CustomerCase-cent">
						<div class="caseCent">
							案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例案例
						</div>
					</div>
					<div class="CustomerCase-bot"></div>
					<div class="CustomerCaseImg">
						<img src="/Public/Home/img/img40.png" alt="img" />
					</div>
				</a>
				<a href="javascript:;" target="_blank">
					<div class="CustomerCase-top"></div>
					<div class="CustomerCase-cent">
						<div class="caseCent">
							案例案
						</div>
					</div>
					<div class="CustomerCase-bot"></div>
					<div class="CustomerCaseImg">
						<img src="/Public/Home/img/img40.png" alt="img" />
					</div>
				</a>
				<a href="javascript:;" target="_blank">
					<div class="CustomerCase-top"></div>
					<div class="CustomerCase-cent">
						<div class="caseCent">
							例案例案例案例案例案例案例案例案例案例案例案例案例
						</div>
					</div>
					<div class="CustomerCase-bot"></div>
					<div class="CustomerCaseImg">
						<img src="/Public/Home/img/img40.png" alt="img" />
					</div>
				</a>
			</div>
		</div>
		<div class="aboutTitle">
			<div>News</div>
			<div>博越资讯</div>
		</div>
		<div class="news">
			<div class="news-left">
				<img src="/Public/Home/img/img41.png" alt="img" />
			</div>
			<div class="news-right">
				<div class="newsCent">
					<div class="news-top">
						<div class="newsCentColor">
							企业动态
						</div>
					</div>
					<div class="news-bot">
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
							</div>
						</a>
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
							</div>
						</a>
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
							</div>
						</a>
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
							</div>
						</a>
					</div>
				</div>
				<div class="newsCent">
					<div class="news-top">
						<div>
							企业动态
						</div>
					</div>
					<div class="news-bot">
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
							</div>
						</a>
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
							</div>
						</a>
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
							</div>
						</a>
						<a href="javascript:;">
							<div class="newsCent-left">
								企业动态企业动态企业动态企业动态企业动态企业动态
							</div>
							<div class="newsCent-right">
								2018-10-16
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
						<div class="footerEndLeft-two">029-81707767</div>
						<div class="footerEndLeft-three">地址：陕西省西安市浐灞生态区欧亚大道西段欧亚国际A座1227</div>
						<div class="footerEndLeft-four">
							<div>
								<img src="/Public/Home/img/img24.png" alt="img" />
								<div>官方微信</div>
							</div>
							<div>
								<img src="/Public/Home/img/img24.png" alt="img" />
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
					Copyright 2018 版权所有：博越智能科技 陕ICP备12007852号-2 &nbsp;&nbsp;&nbsp;&nbsp; 技术支持：泰雁科技
				</div>
			</div>
		</footer>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/Home/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				//				轮播
				var mySwiper = new Swiper('.swiperImages .swiper-container', {
					loop: true,
				});
				$('.swiperClick>div').click(function() {
					var index = $(this).index();
					$(this).children(".swiperClick-top").addClass("swiperBack2").parent().siblings().children(".swiperClick-top").removeClass("swiperBack2");
					$(this).children(".swiperClick-bot").addClass("swiperBack").parent().siblings().children(".swiperClick-bot").removeClass("swiperBack");
					mySwiper.slideToLoop(index, 1000, false);
				});
				//				鼠标滑过一键联系
				$(".aboutBoyue-three>a").mouseenter(function() {
					$(this).children(".aboutBoyue-top").children("img").eq(1).removeClass("hide").siblings().addClass("hide");
				});
				$(".aboutBoyue-three>a").mouseleave(function() {
					$(this).children(".aboutBoyue-top").children("img").eq(0).removeClass("hide").siblings().addClass("hide");
				});
				//				菜单
				$(".CentMenu>a").click(function() {
					$(this).addClass("MenuBackColo").siblings().removeClass("MenuBackColo");
				});
				//				改变鼠标样式
				$('.animationDemo').css('cursor', 'url(/Public/Home/img/img1.ico), move');
				//				动画
				$(".animationDemo>div:nth-child(4)").click(function() {
					$(".animationDemo>div:nth-child(2)").fadeToggle(2000);
					$(".animationDemo>div:nth-child(3)").fadeToggle(2000);
				});
				$(".animationDemo>div:nth-child(2)").click(function() {
					$(".animationDemo>div:nth-child(2)").fadeToggle(2000);
					$(".animationDemo>div:nth-child(3)").fadeToggle(2000);
				});
				var hei = $(window).height();//屏幕高度
				var divhei = $('.swiperImages');//轮播高度
				var divhei1 = $('.hraderCent');//导航高度
				var whole=$('.whole');//整体高度
				hei=whole;
//				alert(whole.height());
				//				alert($(window).height());
				//				alert($(window).width());
				//				Tab切换轮播图
				var swiper = new Swiper('.Img1-1', {
					spaceBetween: 10,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					navigation: {
						nextEl: '.Img1-3',
						prevEl: '.Img1-4',
					},
				});
				var swiper2 = new Swiper('.Img2-1', {
					spaceBetween: 10,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					navigation: {
						nextEl: '.Img2-3',
						prevEl: '.Img2-4',
					},
				});
				var swiper3 = new Swiper('.Img3-1', {
					spaceBetween: 10,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					navigation: {
						nextEl: '.Img3-3',
						prevEl: '.Img3-4',
					},
				});
				$(".Intelligence-top>a").click(function() {
					var index = $(this).index();
					$(".Intelligence-left").children("div").eq(index).removeClass("hiddenHide").siblings().addClass("hiddenHide");
					$(this).addClass("ColorMenus").siblings().removeClass("ColorMenus");
				});
				$(".Intelligence-left").mouseenter(function() {
					$(".Intelligence-left .swiper-button-next").show();
					$(".Intelligence-left .swiper-button-prev").show();
				});
				$(".Intelligence-left").mouseleave(function() {
					$(".Intelligence-left .swiper-button-next").hide();
					$(".Intelligence-left .swiper-button-prev").hide();
				});
				//				客户案例,保持垂直居中
				for(var k = 0; k < $(".CustomerCaseCent").children("a").length; k++) {
					var alength = $(".CustomerCaseCent").children("a").eq(k).children(".CustomerCase-cent").children(".caseCent").height();
					var newHeight = (390 - alength) / 2;
					$(".CustomerCaseCent").children("a").eq(k).children(".CustomerCase-cent").children(".caseCent").css("top", newHeight);
				}
				$(".CustomerCaseCent").children("a").mouseenter(function() {
					$(this).children(".CustomerCase-bot").show();
					$(this).children(".CustomerCaseImg").show();
				});
				$(".CustomerCaseCent").children("a").mouseleave(function() {
					$(this).children(".CustomerCase-bot").hide();
					$(this).children(".CustomerCaseImg").hide();
				});
			});
		</script>
	</body>

</html>