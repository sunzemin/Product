<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>新闻资讯</title>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
	</head>

	<body>
		<div class="header">
			<div class="welcome">
				<div class="welcome-left">您好！<?php echo ($company_introduce["ci_name"]); ?>!</div>
				<div class="welcome-right">
					<a href="/">中&nbsp;&nbsp;文</a>
				</div>
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
							<a href="/index.php/Home/Index/index">网站首页</a>
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
		</div>
		<!--图片-->
		<div class="exclusive" style="background: url(<?php echo ($background_image_Data[0]["bi_image"]); ?>)no-repeat top center;height: 300px;"></div>
		<!--企业概况-->
		<div class="Situation">
			<div class="leftbox">
				<div class="sub-nav">
					<div class="nav-title">
						<h3>N</h3>
						<h1><?php echo ($navfid["nav_name"]); ?></h1>
						<h2>NEWS</h2>
					</div>
					<ul>
						<?php if(is_array($navsecond)): $k = 0; $__LIST__ = $navsecond;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$second): $mod = ($k % 2 );++$k; if($k == 1): ?><li class="on">
									<a ><?php echo ($second["nav_name"]); ?></a><b>&gt;</b>
								</li>
								<?php else: ?>
								<li>
									<a ><?php echo ($second["nav_name"]); ?></a><b>&gt;</b>
								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						
					</ul>

				</div>
				<div class="message_l"><img src="/Public/Home/images/dh.jpg" width="251" height="60" />

				</div>
			</div>
			<div class="Situation-right">
				
				<div>
						<div class="SituationRight-top">
							<span>您当前位置：<a href="/index.php/Home/Index/index">首页</a> > <?php echo ($navfid["nav_name"]); ?> > <?php echo ($navben["nav_name"]); ?></span>
							<h1><?php echo ($navben["nav_name"]); ?></h1>
						</div>
						<div class="SituationRight-bot">
							<?php if(is_array($news_article_res)): $m = 0; $__LIST__ = $news_article_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_article): $mod = ($m % 2 );++$m; if($m < 10): ?><div class="news">
									<div class="news-left">
										<div>0<?php echo ($m); ?></div>
										<div><?php echo (date("Y-m",$news_article["na_update"])); ?></div>
									</div>
									<div class="news-right">
										<div><a href="/index.php/Home/Index/enterprise/na_id/<?php echo ($news_article["na_id"]); ?>/nav_id/<?php echo ($news_classify_res["nav_id"]); ?>/nc_id/<?php echo ($news_classify_res["nc_id"]); ?>"><?php echo ($news_article["na_title"]); ?></a></div>
										<div><?php echo ($news_article["na_content"]); ?></div>
									</div>
									<?php else: ?>
									<div class="news">
										<div class="news-left">
											<div><?php echo ($m); ?></div>
											<div><?php echo (date("Y-m",$news_article["na_update"])); ?></div>
										</div>
										<div class="news-right">
											<div><a href="/index.php/Home/Index/enterprise/na_id/<?php echo ($news_article["na_id"]); ?>/nav_id/<?php echo ($news_classify_res["nav_id"]); ?>/nc_id/<?php echo ($news_classify_res["nc_id"]); ?>"><?php echo ($news_article["na_title"]); ?></a></div>
										<div><?php echo ($news_article["na_content"]); ?></div>
										</div>
									</div><?php endif; ?>
								
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
				</div>
				
				</volist>
				
			</div>
		</div>
			<!--公司地址-->
		<div class="footer-nav">
			<ul>
				<li>
					<a href="/index.php/Home/Index/index">网站首页</a>
				</li>
				<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
					<a href="<?php echo ($navs["nav_url"]); ?>"><?php echo ($navs["nav_name"]); ?></a>
						
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="address">
			<div class="address-center">
				<div><img src="<?php echo ($background_image_Data[1]["bi_image"]); ?>" alt="..."  style="width: 425px;height: 66px;" /></div>
				<div>
					<div>服务热线：<span><?php echo ($footer["ftelephone"]); ?></span></div>
					<div>地址：<?php echo ($footer["faddress"]); ?></div>
					<div>传真：<?php echo ($footer["ffax"]); ?></div>
					<div>邮箱：<?php echo ($footer["femail"]); ?></div>
					<div>备案号： <?php echo ($footer["frecord"]); ?></div>
					<div>技术支持：泰雁科技</div>
				</div>
				<div><img src="<?php echo ($footer["ferweima"]); ?>" alt="..." style="width: 130px;height:130px;"/></div>
			</div>
		</div>
		<div class="tb"><img src="/Public/Home/images/TB.png" alt="..." /></div>
		<div class="bg"></div>
		<div class="Sidebar">
			<div>
				<a href="javascript;"></a>
			</div>
			<div class="code"><img src="/Public/Home/images/ewm.png" alt="..." /></div>
			<div class="phone">
				<a href="javascript;">029-86353092</a>
			</div>
			<div>
				<a href="javascript;"></a>
			</div>
			<div class="top" style="display: none;">

			</div>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
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
				
				//企业概况切换
				$('.sub-nav>ul>li').click(function(){
					var ind = $(this).index();
					console.log('下标为',ind);
					$('.Situation-right').children('div').eq(ind).show().siblings().hide();
				});
				$(window).on('scroll', function() {
					var scrollTop = $(this).scrollTop();
					console.log(scrollTop);
					if($(window).scrollTop() >= 500) {
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
				})
			})
		</script>
	</body>

</html>