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
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>" target="_blank"><?php echo ($navs["nav_name"]); ?></a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<input type="hidden" id="btn" value="<?php echo ($nav_id); ?>" />
<input type="hidden" class="nav_name" value="<?php echo ($navben["nav_name"]); ?>" />

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var len=$('.hraderCent-bot>ul>li').length;
		var data=$('.nav_name').val();
		for(var i=0;i<len;i++){
			var cont=$('.hraderCent-bot>ul').children('li').eq(i).children('a').text();
			if(data==cont){
				$('.hraderCent-bot>ul').children('li').eq(i).children('a').addClass('headCorol');
			}
		}
	})
</script>
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
				<img src="<?php echo ($company_introduce["ci_image"]); ?>" alt="img" />
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
			<?php if(is_array($little_classify_res[0])): $k = 0; $__LIST__ = $little_classify_res[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($k % 2 );++$k; if($k == 1): ?><a href="javascript:;" class="MenuBackColo"><?php echo ($little_classify["lc_name"]); ?>
                    <input type="hidden" class="lc_id" value="<?php echo ($little_classify["lc_id"]); ?>">
					</a>
					<?php else: ?>
					<a href="javascript:;">
					<?php echo ($little_classify["lc_name"]); ?>
					<input type="hidden" class="lc_id" value="<?php echo ($little_classify["lc_id"]); ?>">
				    </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="MenuDataCent">
			<?php if(is_array($classify_article_res[0][0])): $i = 0; $__LIST__ = $classify_article_res[0][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article["ca_id"]); ?>/nav_id/<?php echo ($all_classify_res[0]["nav_id"]); ?>">
						<div class="MenuDataCent-top">
							<img src="<?php echo ($classify_article["ca_image"]); ?>" alt="img" />
						</div>
						<div class="MenuDataCent-bot"><?php echo ($classify_article["ca_title"]); ?></div>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!--更多-->
		<a href="/index.php/Home/Index/chanpinzhongxin/nav_id/<?php echo ($all_classify_res[0]["nav_id"]); ?>" class="MenuMore">more</a>
		<div class="aboutTitle">
			<div>Intelligent scene</div>
			<div>博越智能场景</div>
		</div>
		<!--动画开灯-->
		<div class="animationDemo">
			<?php if(is_array($scene_Data)): $i = 0; $__LIST__ = $scene_Data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$scene): $mod = ($i % 2 );++$i;?><div>
					<img src="<?php echo ($scene["image"]); ?>" alt="img" />
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="aboutTitle">
			<div><?php echo ($all_head_Data["ah_title4"]); ?></div>
			<div><?php echo ($all_head_Data["ah_title1"]); ?></div>
		</div>
		<!--客户满意是我们的追求-->
		<div class="CustomerSatisfaction">
			<div class="CustomerSatisfaction-top"><?php echo ($all_head_Data["ah_title2"]); ?></div>
			<div class="CustomerSatisfaction-data">
				<?php echo ($all_head_Data["ah_title3"]); ?>
			</div>
		</div>
		<div class="Intelligence">
			<div class="Intelligence-top">
				<?php if(is_array($little_classify_res11)): $i = 0; $__LIST__ = $little_classify_res11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify11): $mod = ($i % 2 );++$i; if($k == 1): ?><a href="javascript:;" class="ColorMenus"><?php echo ($little_classify11["lc_name"]); ?></a>
						<?php else: ?>
						<a href="javascript:;"><?php echo ($little_classify11["lc_name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="Intelligence-bot">
				<div class="Intelligence-left">
					<?php if(is_array($little_classify_res11)): $k = 0; $__LIST__ = $little_classify_res11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify11): $mod = ($k % 2 );++$k; if($k == 1): ?><div class="Img<?php echo ($k); ?>">
								<div class="swiper-container Img1-1">
									<div class="swiper-wrapper">
										<?php if(is_array($classify_article_res11[$k-1])): $i = 0; $__LIST__ = $classify_article_res11[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article11): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
												<img src="<?php echo ($classify_article11["ca_image"]); ?>" alt="..." />
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
									<div class="swiper-button-next Img1-3"></div>
									<div class="swiper-button-prev Img1-4"></div>
								</div>
							</div>
							<?php else: ?>
							<div class="Img<?php echo ($k); ?> hiddenHide">
								<div class="swiper-container Img2-1">
									<div class="swiper-wrapper">
										<?php if(is_array($classify_article_res11[$k-1])): $i = 0; $__LIST__ = $classify_article_res11[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article11): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
												<img src="<?php echo ($classify_article11["ca_image"]); ?>" alt="..." />
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
									<div class="swiper-button-next Img2-3"></div>
									<div class="swiper-button-prev Img2-4"></div>
								</div>
							</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="Intelligence-right">
					<div class="Intelligence-title">全屋智能整装</div>
					<div class="Intelligence-img">
						<?php if(is_array($home_decorate_titleData)): $i = 0; $__LIST__ = $home_decorate_titleData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$home_decorate_title): $mod = ($i % 2 );++$i;?><a href="javascript:;">
								<div class="IntelligenceImg-top">
									<img src="<?php echo ($home_decorate_title["hdt_image"]); ?>" alt="img" />
								</div>
								<div class="IntelligenceImg-bot"><?php echo ($home_decorate_title["hdt_title"]); ?></div>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>
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
				<?php if(is_array($caseData)): $i = 0; $__LIST__ = $caseData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$case): $mod = ($i % 2 );++$i; if($case["url"] == ''): ?><a href="javascript:;" target="_blank">
							<div class="CustomerCase-top"></div>
							<div class="CustomerCase-cent">
								<div class="caseCent">
									<?php echo ($case["title"]); ?>
								</div>
							</div>
							<div class="CustomerCase-bot"></div>
							<div class="CustomerCaseImg">
								<img src="<?php echo ($case["image"]); ?>" alt="img" />
							</div>
						</a>
						<?php else: ?>
                        <a href="<?php echo ($case["url"]); ?>" target="_blank">
							<div class="CustomerCase-top"></div>
							<div class="CustomerCase-cent">
								<div class="caseCent">
									<?php echo ($case["title"]); ?>
								</div>
							</div>
							<div class="CustomerCase-bot"></div>
							<div class="CustomerCaseImg">
								<img src="<?php echo ($case["image"]); ?>" alt="img" />
							</div>
						</a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="aboutTitle">
			<div>News</div>
			<div>博越资讯</div>
		</div>
		<div class="news">
			<div class="news-left">
				<img src="<?php echo ($classify_article_res[0][0][0]["ca_image"]); ?>" alt="img" />
			</div>
			<div class="news-right">
				<?php if(is_array($little_classify_res[0])): $k = 0; $__LIST__ = $little_classify_res[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($k % 2 );++$k; if($k < 5): if($k == 1): ?><div class="newsCent">
						<div class="news-top">
							<div>
								<?php echo ($little_classify["lc_name"]); ?>
							</div>
						</div>
						<div class="news-bot">
							<?php if(is_array($classify_article_res[0][$k-1])): $i = 0; $__LIST__ = $classify_article_res[0][$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>">
									<div class="newsCent-left">
										<?php echo ($classify_article["ca_title"]); ?>
									</div>
									<div class="newsCent-right">
										<?php echo (date("Y-m-d",$classify_article["ca_time"])); ?>
									</div>
								</a><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<?php else: ?>
					<div class="newsCent">
						<div class="news-top">
							<div>
								<?php echo ($little_classify["lc_name"]); ?>
							</div>
						</div>
						<div class="news-bot">
							<?php if(is_array($classify_article_res[0][$k-1])): $i = 0; $__LIST__ = $classify_article_res[0][$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>">
									<div class="newsCent-left">
										<?php echo ($classify_article["ca_title"]); ?>
									</div>
									<div class="newsCent-right">
										<?php echo (date("Y-m-d",$classify_article["ca_time"])); ?>
									</div>
								</a><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
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
				$('.CentMenu>a').click(function(){
					var lc_id=$(this).children('input').val();
					$.ajax({
						type:'post',
						data:{
							lc_id:lc_id
						},
						dataType:'json',
						url:'/index.php/Home/Public/sel_product_date',
						success:function(data){
							$('.MenuDataCent').html('');
							 var datalen=data.length;
                             var string='';
                             for(var i=0;i<datalen;i++){
                             	string+='<a href="javascript:;"><div class="MenuDataCent-top"><img src="'+data[i]['ca_image']+'" alt="img" /></div><div class="MenuDataCent-bot">'+data[i]['ca_title']+'</div></a>';
                             }
                             $('.MenuDataCent').html(string);
						}
					})

				})
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
					$(this).children('.aboutBoyue-bot').css({
						'color':'#014a96'
					});
				});
				$(".aboutBoyue-three>a").mouseleave(function() {
					$(this).children(".aboutBoyue-top").children("img").eq(0).removeClass("hide").siblings().addClass("hide");
					$(this).children('.aboutBoyue-bot').css({
						'color':'#000'
					});
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