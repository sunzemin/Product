<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title><?php echo ($company_introduce["ci_name"]); ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/index.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>

	<body>
		<!--顶部-->
		<div class="header">
			
			<div class="logo">
				<div class="logo-center">
					<div class="logo-left">
						<a href="javascript;"><img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." /></a>
					</div>
					<div class="logo-right">
						<div><img src="/Public/Mobile/images/rexian.png" alt="..." />
							<div><?php echo ($company_introduce["ci_telephone"]); ?></div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="nav">
				<div class="nav-center">
					<ul>
						<li>
							<a href="/index.php/Mobile/Index/index" target="__parent__" >网站首页</a>
						</li>
						
						 <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
							<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>
								
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<input type="text" class="navcss" value="<?php echo ($navben["nav_name"]); ?>"> -->
<div class="nav">
	<div class="nav-center">
		<ul>
			<li>
				<a class="clickMenu" >
				网站首页
				
			</a>
			<input type="hidden" value="/index.php/Mobile/Index/index">
			</li>
			
			 <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
				<a class="clickMenu"><?php echo ($navs["nav_name"]); ?>
					
				</a>
				<input type="hidden" value="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>">
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
 <input type="hidden" class="navcss" value="<?php echo ($navben["nav_name"]); ?>"> 
		</div>
		<!--轮播图-->
		<div id="content_slider" class="swipslider">
			<ul class="sw-slides">
				<?php if(is_array($lunboData)): $k = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($k % 2 );++$k;?><li class="sw-slide">
						<div class="wanted sw-content">
							<img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." style="width: 100%;height: 5rem;">
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				
				
			</ul>
		</div>
		<!--八大服务-->
		<div class="service">
			<div class="service-title">
				<a href="javascript;">八大服务</a>
			</div>
			<div class="classification">
				<?php if(is_array($primary_work_classify_res)): $k = 0; $__LIST__ = $primary_work_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$primary_work_classify): $mod = ($k % 2 );++$k;?><div>
						<a href="<?php echo ($nav_classify_res[$k-1]["nav_url"]); ?>/nav_id/<?php echo ($nav_classify_res[$k-1]["nav_id"]); ?>">
							<div><img src="<?php echo ($primary_work_classify["pwc_image"]); ?>" alt="..." /></div>
							<div class="classification-bot">
								<div><?php echo ($primary_work_classify["pwc_name"]); ?></div>
								<div>了解更多</div>
							</div>
						</a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
				
				<?php if(is_array($primary_works_res)): $m = 0; $__LIST__ = $primary_works_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$primary_works): $mod = ($m % 2 );++$m;?><div>
						<a href="<?php echo ($navsecnav[$m-1]["nav_url"]); ?>/nav_id/<?php echo ($navsecnav[$m-1]["nav_id"]); ?>">
							<div><img src="<?php echo ($primary_works["pw_image"]); ?>" alt="..." /></div>
							<div class="classification-bot">
								<div><?php echo ($primary_works["pw_name"]); ?></div>
								<div>了解更多</div>
							</div>
						</a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
			</div>
		</div>
		<!--适用行业-->
		<div class="industry">
			<div class="industry-center">
				<div class="industry-title">
					<a href="javascript;">适用行业</a>
				</div>
				<div id="demo3">
					<div id="indemo4">
						<div id="demo5">
							<ul>
								<?php if(is_array($proper_bussiness_res)): $i = 0; $__LIST__ = $proper_bussiness_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$proper_bussiness): $mod = ($i % 2 );++$i;?><li>
										<a href="javascript;">
											<img src="<?php echo ($proper_bussiness["pb_image"]); ?>" alt="..." />
											<p><?php echo ($proper_bussiness["pb_name"]); ?></p>
										</a>
									</li><?php endforeach; endif; else: echo "" ;endif; ?> 
								
								
								
							</ul>
						</div>
						<div id="demo6"></div>
					</div>
				</div>
				<script>
					var speed = 20; //数字越大速度越慢 
					var tab3 = document.getElementById("demo3");
					var tab4 = document.getElementById("demo5");
					var tab5 = document.getElementById("demo6");
					tab5.innerHTML = tab4.innerHTML;

					function Marquee() {
						if(tab3.scrollLeft <= 0)
							tab3.scrollLeft += tab5.offsetWidth
						else {
							tab3.scrollLeft--
						}
					}
					var MyMar = setInterval(Marquee, speed);
					tab3.onmouseover = function() {
						clearInterval(MyMar)
					};
					tab3.onmouseout = function() {
						MyMar = setInterval(Marquee, speed)
					};
				</script>

			</div>
		</div>
		<!--四大优势-->
		<div class="advantage">
			<div class="advantage-center">
				<div class="advantage-title">
					<div>FOUR BIG ADVANTAGE</div>
					<div><span>选择至善</span><span>四大优势</span></div>
					<div></div>
				</div>
				<div class="advantage-content">
					<?php if(is_array($service_advantage_res)): $k = 0; $__LIST__ = $service_advantage_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$service_advantage): $mod = ($k % 2 );++$k;?><div class="advantage-content1">
							<div><img src="/Public/Mobile/images/1470902996811.jpg" alt="..." /></div>
							<div>
								<div class="con-title">
									<div><span>01</span><?php echo ($service_advantage["sa_advantage_classify"]); ?></div>
									<div><?php echo ($service_advantage["sa_advantage_title"]); ?></div>
								</div>
								<div><?php echo ($service_advantage["sa_advantage_content"]); ?></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					
					
					
				</div>
			</div>

		</div>
		<!--插图-->
		<div class="picture"><img src="<?php echo ($background_image_Data[1]["bi_image"]); ?>" alt="..." /></div>
		<!--关于我们-->
		<div class="about">
			<div class="about-center">
				<div class="about-title">
					<a href="javascript;">关于我们</a>
				</div>
				<div class="about_txt">
					<div><img src="/Public/Mobile/images/1470986740159.jpg" alt="..." /></div>
					<div>
						<div>
							<?php echo ($company_introduce["ci_content"]); ?>
						</div>
						<div class="about_btn">
							<a href="<?php echo ($cinav["nav_url"]); ?>/nav_id/<?php echo ($cinav["nav_id"]); ?>"><img src="/Public/Mobile/images/more.png" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--合作单位-->
		<div class="cont_hzdw">
			<h2 class="title"><a href="javascript;" style="color:#FFF">合作单位</a></h2>
			<div id="demo7">
				<div id="indemo8">
					<div id="demo9">
						<ul>
							<?php if(is_array($cooperate_company_res)): $i = 0; $__LIST__ = $cooperate_company_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cooperate_company): $mod = ($i % 2 );++$i;?><li>
									<a href="javascript;">
										<img src="<?php echo ($cooperate_company["cc_image"]); ?>" alt="..." />
										<p><?php echo ($cooperate_company["cc_name"]); ?></p>
									</a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?> 
							
							
						</ul>
					</div>
					<div id="demo10"></div>
				</div>
			</div>
			<script>
				var speed = 20; //数字越大速度越慢 
				var demo7 = document.getElementById("demo7");
				var demo9 = document.getElementById("demo9");
				var demo10 = document.getElementById("demo10");
				demo10.innerHTML = demo9.innerHTML;

				function Marquee() {
					if(demo7.scrollLeft <= 0)
						demo7.scrollLeft += demo10.offsetWidth
					else {
						demo7.scrollLeft--
					}
				}
				var MyMar = setInterval(Marquee, speed);
				demo7.onmouseover = function() {
					clearInterval(MyMar)
				};
				demo7.onmouseout = function() {
					MyMar = setInterval(Marquee, speed)
				};
			</script>
		</div>
		<!--公司与团队-->
		<div class="customer">
			<div class="customer-center">
				<div class="customer-left">
					<div class="witness">
						<span>公司与团队</span>
						<a href="/index.php/Home/Index/team/nav_id/<?php echo ($company_team_res[0]["nav_id"]); ?>">更多+</a>
					</div>
					<div class="witness-bot">
						<?php if(is_array($company_team_res)): $i = 0; $__LIST__ = $company_team_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$company_team): $mod = ($i % 2 );++$i;?><div class="witnessBot-date">
								<div>
									
									<a href="/index.php/Mobile/Index/team1/ct_id/<?php echo ($company_team["ct_id"]); ?>/nav_id/<?php echo ($company_team["nav_id"]); ?>"><img src="<?php echo ($company_team["ct_image"]); ?>" alt="..."></a>
									
								</div>
								<div>
									<a href="/index.php/Mobile/Index/team1/ct_id/<?php echo ($company_team["ct_id"]); ?>/nav_id/<?php echo ($company_team["nav_id"]); ?>"><?php echo ($company_team["ct_title"]); ?></a>
									<div><?php echo ($company_team["ct_content"]); ?></div>
									<a href="/index.php/Mobile/Index/team1/ct_id/<?php echo ($company_team["ct_id"]); ?>/nav_id/<?php echo ($company_team["nav_id"]); ?>">【详情】</a>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						
						
					</div>
				</div>
				<div class="honor">
					<div class="witness">
						<span>荣誉资质</span>
						<a href="/index.php/Home/Index/Qualifications/nav_id/<?php echo ($certificate_res[0]["nav_id"]); ?>" class="more">更多+</a>
					</div>
					<div class="h_cont">
						<ul class="rslides f426x240">
							<?php if(is_array($certificate_res)): $i = 0; $__LIST__ = $certificate_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$certificate): $mod = ($i % 2 );++$i;?><li style="margin-left: 25px;">
									<a href="/index.php/Mobile/Index/qualifications1/nav_id/<?php echo ($certificate["nav_id"]); ?>/cid/<?php echo ($certificate["id"]); ?>"><img src="<?php echo ($certificate["image"]); ?>" alt="..." /></a>
									<a href="/index.php/Mobile/Index/qualifications1/nav_id/<?php echo ($certificate["nav_id"]); ?>/cid/<?php echo ($certificate["id"]); ?>" class="text"><?php echo ($certificate["title"]); ?></a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="img-bg"><img src="<?php echo ($background_image_Data[3]["bi_image"]); ?>" alt="..." /></div>
		<!--新闻-->
		<div class="cont_news">
			<div class="contnews_top">
				<span class="on"><?php echo ($news_classify_res[0]["nc_name"]); ?></span><span><?php echo ($news_classify_res[1]["nc_name"]); ?></span>
				<a href="/index.php/Home/Index/news/nav_id/<?php echo ($fidnav["nav_id"]); ?>" class="more">更多+</a>
			</div>
			<div class="news-li-box" style="display:block;">
				<dl>
					<dt><a href="/index.php/Mobile/Index/news1/na_id/<?php echo ($news_article_res[0][0]["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>" ><img src="<?php echo ($news_article_res[0][0]["na_image"]); ?>" /></a></dt>
					<dd>
						<h4><a href="/index.php/Mobile/Index/news1/na_id/<?php echo ($news_article_res[0][0]["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>" ><?php echo ($news_article_res[0][0]["na_title"]); ?></a></h4>
						<p class="text"><?php echo ($news_article_res[0][0]["na_content"]); ?></p>
						<p class="btn">
							
							<a href="/index.php/Mobile/Index/news1/na_id/<?php echo ($news_article_res[0][0]["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>" >【详情内容】</a>
						</p>
					</dd>
					<div class="clear"></div>
				</dl>
				<ul>
					<?php if(is_array($news_article_res[0])): $k = 0; $__LIST__ = $news_article_res[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_article): $mod = ($k % 2 );++$k; if($k == 1): else: ?>
								<li><span class="date">[<?php echo (date("Y-m-d",$news_article["na_update"])); ?>]</span>
									<a href="/index.php/Mobile/Index/news1/na_id/<?php echo ($news_article["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>" ><?php echo ($news_article["na_title"]); ?></a>
								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					
					
					
				</ul>
			</div>
			<div class="news-li-box">
				
				<dl>
					<dt><a href="/index.php/Mobile/Index/news1/na_id/<?php echo ($news_article_res[1][0]["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>" ><img src="<?php echo ($news_article_res[1][0]["na_image"]); ?>" /></a></dt>
					<dd>
						<h4><a href="/index.php/Mobile/Index/news1/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>/na_id/<?php echo ($news_article_res[1][0]["na_id"]); ?>" ><?php echo ($news_article_res[1][0]["na_title"]); ?></a></h4>
						<p class="text"><?php echo ($news_article_res[1][0]["na_content"]); ?></p>
						<p class="btn">
							<a href="/index.php/Mobile/Index/news1/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>/na_id/<?php echo ($news_article_res[1][0]["na_id"]); ?>">【详情内容】</a>
						</p>
					</dd>
					<div class="clear"></div>
				</dl>
				<ul>
					<?php if(is_array($news_article_res[1])): $k = 0; $__LIST__ = $news_article_res[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_article): $mod = ($k % 2 );++$k; if($k == 1): else: ?>
								<li><span class="date">[<?php echo (date("Y-m-d",$news_article["na_update"])); ?>]</span>
									<a href="/index.php/Mobile/Index/news1/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>/na_id/<?php echo ($news_article["na_id"]); ?>" ><?php echo ($news_article["na_title"]); ?></a>
								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					
					
				</ul>
			</div>
		</div>
		<!--常见问题-->
		<div class="news_right">
			<div class="i-title2"><span class="on"><?php echo ($policy_classify_res["pc_name"]); ?></span>
                
				<a href="/index.php/Mobile/Index/problem/nav_id/<?php echo ($policy_classify_res["nav_id"]); ?>/pc_id/<?php echo ($policy_classify_res["pc_id"]); ?>" class="more">更多+</a>

			</div>

			<div class="mews_wt">
				<div id="scrollDiv">
					<ul>
						<?php if(is_array($policy_article_res)): $i = 0; $__LIST__ = $policy_article_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$policy_article): $mod = ($i % 2 );++$i;?><li>
								<dl>
									<!-- /index.php/Mobile/Index/problem1/pa_id/4/nav_id/25 -->
									<dt><a href="/index.php/Mobile/Index/problem1/nav_id/<?php echo ($policy_classify_res["nav_id"]); ?>/pa_id/<?php echo ($policy_article["pa_id"]); ?>" ><?php echo ($policy_article["pa_title"]); ?></a></dt>
									<dd>
										<p class="text"><?php echo ($policy_article["pa_content"]); ?></p>
										<p class="btn">
											<a href="/index.php/Mobile/Index/problem1/nav_id/<?php echo ($policy_classify_res["nav_id"]); ?>/pa_id/<?php echo ($policy_article["pa_id"]); ?>" ></a>
										</p>
									</dd>
								</dl>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>
				</div>
				<!--滚动结束-->
			</div>
		</div>
		<!--友情链接-->
		<div class="link">
			<div class="link-top">友情链接<span>/FRFRIEND LINKS</span></div>
			<div id="demo">
				<div id="indemo">
					<div id="demo1">
						<?php if(is_array($friend_urlData)): $i = 0; $__LIST__ = $friend_urlData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$friend_url): $mod = ($i % 2 );++$i;?><a href="<?php echo ($friend_url["fu_url"]); ?>"><img src="<?php echo ($friend_url["fu_image"]); ?>" alt="..." /></a><?php endforeach; endif; else: echo "" ;endif; ?>
						
						<!-- <a href="#"><img src="/Public/Mobile/images/2017410174834423.png" alt="..." /></a> -->
						
					</div>
					<div id="demo2"></div>
				</div>
			</div>
			<script>
				var speed = 20; //数字越大速度越慢 
				var tab = document.getElementById("demo");
				var tab1 = document.getElementById("demo1");
				var tab2 = document.getElementById("demo2");
				tab2.innerHTML = tab1.innerHTML;

				function Marquee() {
					if(tab2.offsetWidth - tab.scrollLeft <= 0)
						tab.scrollLeft -= tab1.offsetWidth
					else {
						tab.scrollLeft++;
					}
				}
				var MyMar = setInterval(Marquee, speed);
				tab.onmouseover = function() {
					clearInterval(MyMar)
				};
				tab.onmouseout = function() {
					MyMar = setInterval(Marquee, speed)
				};
			</script>

		</div>
		<!--底部-->
		
<div class="footer-nav">
	<ul>
		<li>
			<a href="/index.php/Mobile/Index/index">网站首页</a>
		</li>
		<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>

			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<!-- <input type="text" class="navcss" value="<?php echo ($navben["nav_name"]); ?>">	 -->
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(".nav-center>ul").children("li").removeClass("nav-centerBack");
		$(".sub-nav>ul").children("li").removeClass("on");
		var strongeVal = localStorage.sitename;
		var headerLength = $(".nav-center>ul>li").length;
		for(var k = 0; k < headerLength; k++) {
			var valTxt = $(".nav-center>ul").children("li").eq(k).children("a").text();
			if(valTxt == strongeVal) {
				$(".nav-center>ul").children("li").eq(k).addClass("nav-centerBack");
			}
		}
		$(".clickMenu").click(function(event) {
			var txt = $(this).text();
			var hrefVal = $(this).next().val();
			// 设置h5储存
			localStorage.sitename = txt;
			window.location.href = hrefVal;
		});
	})
</script>
		<div class="address">
			<div class="address-center">
				<div>
					<div>服务热线：<span><?php echo ($footer["ftelephone"]); ?></span></div>
					<div>地址：<?php echo ($footer["faddress"]); ?></div>
					<div>传真：<?php echo ($footer["ffax"]); ?></div>
					<div>邮箱：<?php echo ($footer["femail"]); ?></div>
					<div>备案号： <?php echo ($footer["frecord"]); ?></div>
					<div>技术支持：泰雁科技</div>
				</div>
				<div><img src="<?php echo ($footer["ferweima"]); ?>" alt="..." style="width: 100px;height:100px;" /></div>
			</div>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/Mobile/js/slider.js" type="text/javascript" charset="utf-8"></script>

		<script src="/Public/Mobile/js/honor.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Mobile/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Mobile/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {

				 localStorage.sitename = "网站首页";


				$('#content_slider').swipeslider({
					transitionDuration: 600,
					autoPlayTimeout: 10000,
					//					sliderHeight: '300px'
				});
				//				适用行业
				var num = 0;

				function goLeft() {
					//750是根据你给的尺寸，可变的
					if(num == -300) {
						num = 0;
					}
					num -= 1;
					$(".sycs_list").css({
						left: num
					})
				}
				//设置滚动速度
				var timer = setInterval(goLeft, 20);
				//设置鼠标经过时滚动停止
				$(".sycs_list>dl").hover(function() {
						clearInterval(timer);
					},
					function() {
						timer = setInterval(goLeft, 20);
					});
				//					新闻切换
				$('.contnews_top span').click(function() {
					$('.contnews_top span').removeClass()
					$(this).attr("class", "on")
					$(".cont_news .news-li-box").hide()
					$(".cont_news .news-li-box").eq($(this).index()).show()
				});
				//				常见问题滚动
				$("#scrollDiv").Scroll({
					line: 1,
					speed: 500,
					timer: 3000,
					up: "but_up",
					down: "but_down"
				});
			});
		</script>
	</body>

</html>