<?php if (!defined('THINK_PATH')) exit();?>


<html>

	<head>
		<meta charset="UTF-8">
		<title><?php echo ($company_introduce["ci_name"]); ?></title>
		<link rel="icon" href="/Public/Home/images/ic.ico" type="image/x-icon" />
   		<link rel="shortcut icon" href="/Public/Home/images/ic.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />



	</head>

	<body>
		<!--顶部-->
		<div class="header">
			<div class="welcome">
				<div class="welcome-left">您好！欢迎访问<?php echo ($company_introduce["ci_name"]); ?>!</div>
			</div>
			<div class="logo">
				<div class="logo-center">
					<div class="logo-left">
						<a href="javascript;"><img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." /></a>
					</div>
					<div class="logo-right">
						<div><img src="/Public/Home/images/rexian.png" alt="..." /><span><?php echo ($company_introduce["ci_telephone"]); ?></span></div>
					</div>
				</div>
			</div>
			<div class="nav">
		<div class="nav-center">
			<ul>
				<li>
					<a href="/index.php/Home/Index/index" target="__parent__" >网站首页</a>
				</li>
				
				 <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
					<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>
						<ul class="hide">
						<?php if(is_array($navarr[$k-1])): $i = 0; $__LIST__ = $navarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo ($vo["nav_url"]); ?>/nav_id/<?php echo ($vo["nav_id"]); ?>"><?php echo ($vo["nav_name"]); ?></a>
							    </li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	<input type="hidden" class="navcss" value="<?php echo ($navfirst["nav_name"]); ?>">
		</div>
		<!--轮播图-->
		<div class="banner">
			<div class="flexslider">
				<ul class="slides">
					<?php if(is_array($lunboData)): $k = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($k % 2 );++$k;?><li>
						<a href="<?php echo ($lunbo["lb_url"]); ?>" target="_blank" title=""><img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." /><?php echo ($primary_work_classify_res[$k-1]["pwc_name"]); ?></a>
					    </li><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
			</div>
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
						<a href="<?php echo ($navsecnav[$m-1]["nav_url"]); ?>/nav_id/<?php echo ($navsecnav[$m-1]["nav_id"]); ?>" target="__parent__">
							<div><img src="<?php echo ($primary_works["pw_image"]); ?>" alt="..." /></div>
							<div class="classification-bot">
								<div><?php echo ($primary_works["pw_name"]); ?></div>
								<div>了解更多</div>
							</div>
						</a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<!--  -->
			</div>
		</div>
		<!--适用行业-->
		<div class="industry">
			<div class="industry-center">
				<div class="industry-title">
					<a href="javascript;">适用行业</a>
				</div>
				<div id="colee_left" style="overflow:hidden;width:1102px; height:360px;">
					<div id="colee_left1">
						<div class="sycs_list">
							 <?php if(is_array($proper_bussiness_res)): $i = 0; $__LIST__ = $proper_bussiness_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$proper_bussiness): $mod = ($i % 2 );++$i;?><dl>
									<dt><a href=""><img src="<?php echo ($proper_bussiness["pb_image"]); ?>" /></a></dt>
									<dd>
										<h3><a href=""><?php echo ($proper_bussiness["pb_name"]); ?></a></h3></dd>
								</dl><?php endforeach; endif; else: echo "" ;endif; ?> 
							
							
						</div>
					</div>
				</div>
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
				<div class="advantage-content" style="background: url(<?php echo ($background_image_Data[0]["bi_image"]); ?>)no-repeat center center;width: 1120px;height: 1430px;margin: 0 auto;">
					<?php if(is_array($service_advantage_res)): $i = 0; $__LIST__ = $service_advantage_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$service_advantage): $mod = ($i % 2 );++$i;?><div class="advantage-content1">
							<div class="con-title">
								<div><?php echo ($service_advantage["sa_advantage_classify"]); ?></div>
								<div><?php echo ($service_advantage["sa_advantage_title"]); ?></div>
							</div>
							<div><?php echo ($service_advantage["sa_advantage_content"]); ?></div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<!--插图-->
		<div class="picture"><img src="<?php echo ($background_image_Data[1]["bi_image"]); ?>" alt="..." /></div>
		<!--关于我们-->
		<div class="about" style="background: #ededed url(<?php echo ($background_image_Data[2]["bi_image"]); ?>) no-repeat center top;height: 560px;margin-top: 15px;">
			<div class="about-center">
				<div class="about-title">
					<a href="<?php echo ($cinav["nav_url"]); ?>/nav_id/<?php echo ($cinav["nav_id"]); ?>" target="__parent__">关于我们</a>
				</div>
				<div class="about_txt">
					<!-- <p> --><?php echo ($company_introduce["ci_content"]); ?>
					<!-- </p> -->

					<div class="about_btn">
						<a href="<?php echo ($cinav["nav_url"]); ?>/nav_id/<?php echo ($cinav["nav_id"]); ?>" target="__black"><img src="/Public/Home/images/more.png" /></a>
					</div>
				</div>
			</div>
		</div>
		<!--合作单位-->
		<div class="cont_hzdw">
			<h2 class="title"><a href="" style="color:#FFF">合作单位</a></h2>
			<div class="boddy">
				<div id="wrapper">
					<ul>
						<?php if(is_array($cooperate_company_res)): $i = 0; $__LIST__ = $cooperate_company_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cooperate_company): $mod = ($i % 2 );++$i;?><li>
								<a href="javascript:;">
									<div><img src="<?php echo ($cooperate_company["cc_image"]); ?>" alt="..." /></div>
									<div><?php echo ($cooperate_company["cc_name"]); ?></div>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?> 
					</ul>
				</div>
				<div id="bth1"><img src="/Public/Mobile/images/btn.png" alt="..." /></div>
				<div id="bth2"><img src="/Public/Mobile/images/btn.png" alt="..." /></div>
			</div>
		</div>
		<div class="gray_bg"></div>
		<!--客户见证和荣誉资质-->
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
									<a href="/index.php/Home/Index/Science/ct_id/<?php echo ($company_team["ct_id"]); ?>/nav_id/<?php echo ($company_team["nav_id"]); ?>" target="__parent__"><img src="<?php echo ($company_team["ct_image"]); ?>" alt="..."></a>
								</div>
								<div>
									<a  href="/index.php/Home/Index/Science/ct_id/<?php echo ($company_team["ct_id"]); ?>/nav_id/<?php echo ($company_team["nav_id"]); ?>" target="__parent__">
									<?php echo ($company_team["ct_title"]); ?></a>
									<div>
									<?php echo ($company_team["nav_id"]); ?>//<?php echo ($company_team["ct_content"]); ?></div>
									<a  href="/index.php/Home/Index/Science/ct_id/<?php echo ($company_team["ct_id"]); ?>/nav_id/<?php echo ($company_team["nav_id"]); ?>" target="__parent__">【详情】</a>
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
							<?php if(is_array($certificate_res)): $i = 0; $__LIST__ = $certificate_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$certificate): $mod = ($i % 2 );++$i;?><li>
									<a href="/index.php/Home/Index/DetailsOf/nav_id/<?php echo ($certificate["nav_id"]); ?>/cid/<?php echo ($certificate["id"]); ?>"><img src="<?php echo ($certificate["image"]); ?>" height="362" width="257" /></a>
									<a href="/index.php/Home/Index/DetailsOf/nav_id/<?php echo ($certificate["nav_id"]); ?>/cid/<?php echo ($certificate["id"]); ?>" class="text"><?php echo ($certificate["title"]); ?></a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							

						</ul>

					</div>

				</div>
			</div>
		</div>
		<div class="img-bg"><img src="<?php echo ($background_image_Data[3]["bi_image"]); ?>" alt="..." /></div>
		<!--新闻和常见问题-->
		<div class="cont_two">
			<div class="cont_news">
				<div class="i-title2 cont_news_tit"><span class="on"><?php echo ($news_classify_res[0]["nc_name"]); ?></span><span><?php echo ($news_classify_res[1]["nc_name"]); ?></span>
					<a href="/index.php/Home/Index/news/nav_id/<?php echo ($fidnav["nav_id"]); ?>" class="more" target="__parent__">更多+</a>
				</div>

				<div class="news-li-box" style="display:block;">
					<dl>
						<dt><a href="/index.php/Home/Index/industry/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>/na_id/<?php echo ($news_article_res[0][0]["na_id"]); ?>" ><img src="<?php echo ($news_article_res[0][0]["na_image"]); ?>" /></a></dt>
						<dd>
							<h4><a href="/index.php/Home/Index/industry/na_id/<?php echo ($news_article_res[0][0]["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>" target="_blank"><?php echo ($news_article_res[0][0]["na_title"]); ?></a></h4>
							<p class="text"><?php echo ($news_article_res[0][0]["na_content"]); ?></p>
							<p class="btn">
								<a href="/index.php/Home/Index/industry/na_id/<?php echo ($news_article_res[0][0]["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>" target="_blank">【详情内容】</a>
							</p>
						</dd>
						
					</dl>

					<ul>
						<?php if(is_array($news_article_res[0])): $k = 0; $__LIST__ = $news_article_res[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_article): $mod = ($k % 2 );++$k; if($k == 1): else: ?>
								<li><span class="date">[<?php echo (date("Y-m-d",$news_article["na_update"])); ?>]</span>
									<a href="/index.php/Home/Index/industry/na_id/<?php echo ($news_article["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[0]["nav_id"]); ?>" target="_blank"><?php echo ($news_article["na_title"]); ?></a>
								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<div class="news-li-box">
					<dl>
						<dt><a href="/index.php/Home/Index/industry/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>/na_id/<?php echo ($news_article_res[1][0]["na_id"]); ?>" target="_blank"><img src="<?php echo ($news_article_res[1][0]["na_image"]); ?>" /></a></dt>
						<dd>
							<h4><a href="/index.php/Home/Index/industry/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>/na_id/<?php echo ($news_article_res[1][0]["na_id"]); ?>" target="_blank"><?php echo ($news_article_res[1][0]["na_title"]); ?></a></h4>
							<p class="text"><?php echo ($news_article_res[1][0]["na_content"]); ?></p>
							<p class="btn">
								<a href="/index.php/Home/Index/industry/na_id/<?php echo ($news_article_res[1][0]["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>" target="_blank">【详情内容】</a>
							</p>
						</dd>
						<div class="clear"></div>
					</dl>

					<ul>
						<?php if(is_array($news_article_res[1])): $k = 0; $__LIST__ = $news_article_res[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_article): $mod = ($k % 2 );++$k; if($k == 1): else: ?>
								<li><span class="date">[<?php echo (date("Y-m-d",$news_article["na_update"])); ?>]</span>
									<a href="/index.php/Home/Index/industry/na_id/<?php echo ($news_article["na_id"]); ?>/nav_id/<?php echo ($news_classify_res[1]["nav_id"]); ?>" target="_blank"><?php echo ($news_article["na_title"]); ?></a>
								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="news_right">
				<div class="i-title2"><span class="on"><?php echo ($policy_classify_res["pc_name"]); ?></span>
					<a href="/index.php/Home/Index/questions1/nav_id/<?php echo ($policy_classify_res["nav_id"]); ?>" class="more">更多+</a>
				</div>
				<div class="mews_wt">
					<div id="scrollDiv">
						<ul>
							<?php if(is_array($policy_article_res)): $i = 0; $__LIST__ = $policy_article_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$policy_article): $mod = ($i % 2 );++$i;?><li>
									<dl>
										<dt><a href="/index.php/Home/Index/questions/pa_id/<?php echo ($policy_article["pa_id"]); ?>/nav_id/<?php echo ($policy_classify_res["nav_id"]); ?>" target="_blank"><?php echo ($policy_article["pa_title"]); ?></a></dt>
										<dd>
											<p class="text"><?php echo ($policy_article["pa_content"]); ?></p>
											<p class="btn">
												<a href="/index.php/Home/Index/questions/pa_id/<?php echo ($policy_article["pa_id"]); ?>/nav_id/<?php echo ($policy_classify_res["nav_id"]); ?>" target="_blank">【详情内容】</a>
											</p>
										</dd>
									</dl>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							
						</ul>

					</div>
					<!--滚动结束-->
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--友情链接-->
		<div class="link">
			<div class="link-top">友情链接<span>/FRFRIEND LINKS</span></div>
			<div class="boddy1">
				<div id="wrapper1">
					<ul>
						<?php if(is_array($friend_urlData)): $i = 0; $__LIST__ = $friend_urlData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$friend_url): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo ($friend_url["fu_url"]); ?>">
									<div><img src="<?php echo ($friend_url["fu_image"]); ?>" alt="..." /></div>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						
						
					</ul>
				</div>
			</div>
		</div>
		<!--公司地址-->
		<div class="footer-nav">
	<ul>
		<li>
			<a href="/index.php/Home/Index/index">网站首页</a>
		</li>
		<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>

			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(".nav-center>ul").children("li").removeClass("nav-centerBack");
		$(".sub-nav>ul").children("li").removeClass("on");
		// 循环导航菜单样式
		var val = $(".navcss").val();
		var headerLength = $(".nav-center>ul>li").length;
		for(var k = 0; k < headerLength; k++) {
			var valTxt = $(".nav-center>ul").children("li").eq(k).children("a").text();
			if(valTxt == val) {
				$(".nav-center>ul").children("li").eq(k).addClass("nav-centerBack");
			}
		}
		var headerLength11 = $(".sub-nav>ul>li").length;
		for(var k = 0; k < headerLength; k++) {
			var nam = $(".sub-nav>ul").children("li").eq(k).children("a").text();
			if(nam == val) {
				$(".sub-nav>ul").children("li").eq(k).addClass("on");
				$(".sub-nav>ul").children("li").eq(k).children("a").css('color', 'red');
			}
		}
	})
</script>
		<div class="address">
			<div class="address-center">
				<div><img src="<?php echo ($background_image_Data[4]["bi_image"]); ?>" alt="..."  style="width: 425px;height: 66px;" /></div>
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
		<div class="tb"><img src="/Public/Home/images/TB.png" alt="..." /></div>
		<div class="bg"></div>
		<div class="Sidebar">
			<div>
				<a target="__blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($link_us["lu_qq"]); ?>&site=qq&menu=yes"></a>
			</div>
			<div class="code"><img src="<?php echo ($link_us["lu_erweima"]); ?>" alt="..." /></div>
			<div class="phone">
				<a><?php echo ($link_us["lu_telephone"]); ?></a>
			</div>
			<div class="top" style="display: none;">

			</div>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/Home/js/slider.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="/Public/Home/js/honor.js"></script>
		<script type="text/javascript">
			$(function() {
				//				导航下拉列表
				$('.nav-center>ul>li').hover(function() {
					$(this).addClass("hover");
					$(this).children("ul").slideDown();
				}, function() {
					$(this).removeClass("hover");
					$(this).children("ul").slideUp();
				});
				//				轮播
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider) {
						$('body').removeClass('loading');
					}
				});
				//				新闻切换
				$('.cont_news_tit span').hover(function() {
					$('.cont_news_tit span').removeClass()
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

				//				侧边栏效果
				//			1.获取滚动条到顶部的距离   当滚动条到顶部的距离为0时下面侧边栏的箭头隐藏   当滚动条大于某个高度时,箭头消失,
				//			2.点击箭头时滚动条到顶部的距离为0
				$(window).on('scroll', function() {
					var scrollTop = $(this).scrollTop();
					console.log(scrollTop);
					if($(window).scrollTop() >= 300) {
						$('.top').show();
					}else if(scrollTop==0){
						$('.top').hide();
					}
				});
				$('.top').click(function() {
					$('html,body').animate({
						scrollTop: 0
					});
				});
				
				$('.code').mouseenter(function(){
					$(this).children('img').fadeIn();
				});
				$('.code').mouseleave(function(){
					$(this).children('img').fadeOut();
				});
				$('.phone').mouseenter(function(){
					$(this).children('a').fadeIn();
				});
				$('.phone').mouseleave(function(){
					$(this).children('a').fadeOut();
				});
				var num = 0;

				function goLeft() {
					//750是根据你给的尺寸，可变的
					if(num == -750) {
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
					})
				var timer1 = null; //这里只是给个定义，不让变量是undefind就行，也可以直接赋值
					    
					var speed2 = 4; //速度
					    
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
						au1.style.left = au1.offsetLeft + speed + 'px';
						//        ul的左边定位left等于ul的左边距+4,加这个4的原因是控制速度，不信你可以更改一下，数值越大速度越快
						    
					}    
					od1.onmouseover = function() { //鼠标进入的时候，停止定时器，让它停下来
						     
						clearInterval(timer1);    
					}    
					od1.onmouseout = function() { //鼠标离开的时候，继续执行定时器，让它继续动
						     
						timer1 = setInterval(move1, 30);    
					}      
					document.getElementById("bth1").onclick = function() {     //速度为-4的时候，就是让它向左边，因为我们是在更改它的定位left,所以负值是左边
						     
						speed1 = -4;    
					}    
					document.getElementById("bth2").onclick = function() {     //速度为4的时候，就是让它向右边，因为我们是在更改它的定位left,所以负值是右边
						     
						speed1 = 4;    
					}   
//					轮播2 
					var timer = null; //这里只是给个定义，不让变量是undefind就行，也可以直接赋值
					var speed = 3; //速度
					    
					var od = document.getElementById("wrapper1"); //最外部的div
					    
					var au = od.getElementsByTagName('ul')[0];    
					var ali = au.getElementsByTagName('li');    
					au.innerHTML = au.innerHTML + au.innerHTML; //这里是把ul的内容*2
					    
					au.style.width = ali[0].offsetWidth * ali.length + 'px'; //ul的宽度时多有的li的宽度之和
					    
					timer = setInterval(move, 30); //定时器重复执行move这个函数，每0.3秒执行一次
					    
					function move() { //这个函数的作用是移动
						// offsetLeft是指当前元素距离左侧的距离
						//       offsetWidth是指对象整体的实际宽度，包滚动条等边线，会随对象显示大小的变化而改变
						     
						if(au.offsetLeft < -au.offsetWidth / 2) {
							//     如果ul距离他的父元素wrapper的左侧距离小于ul这个元素整体宽度的一半,就让它的左边距归0
							    
							au.style.left = '0';     
						}     
						if(au.offsetLeft > 0) {
							//         如果左边距大于0,那么左边距就等于当前ul的总体宽度除以2
							      
							au.style.left = -au.offsetWidth / 2 + 'px';     
						}     
						au.style.left = au.offsetLeft + speed + 'px';
						//        ul的左边定位left等于ul的左边距+4,加这个4的原因是控制速度，不信你可以更改一下，数值越大速度越快
						    
					}    
					od.onmouseover = function() { //鼠标进入的时候，停止定时器，让它停下来
						     
						clearInterval(timer);    
					}    
					od.onmouseout = function() { //鼠标离开的时候，继续执行定时器，让它继续动
						     
						timer = setInterval(move, 30);    
					}   
			});
			// var speed = 32 //速度数值越大速度越慢
			// var colee_left2 = document.getElementById("colee_left2");
			// var colee_left1 = document.getElementById("colee_left1");
			// var colee_left = document.getElementById("colee_left");
			// colee_left2.innerHTML = colee_left1.innerHTML

			// function Marquee3() {
			// 	if(colee_left2.offsetWidth - colee_left.scrollLeft <= 0) //offsetWidth 是对象的可见宽度
			// 		colee_left.scrollLeft -= colee_left1.offsetWidth //scrollWidth 是对象的实际内容的宽，不包边线宽度
			// 	else {
			// 		colee_left.scrollLeft++
			// 	}
			// }
			// var MyMar3 = setInterval(Marquee3, speed)
			// colee_left.onmouseover = function() {
			// 	clearInterval(MyMar3)
			// }
			// colee_left.onmouseout = function() {
			// 	MyMar3 = setInterval(Marquee3, speed)
			// }


		</script>
	</body>

</html>