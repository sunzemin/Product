<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>公司与团队详情</title>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/index.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>

	<body>
		<!--顶部-->
		<div class="header">
			<div class="welcome">
				<div class="welcome-left">您好！<?php echo ($company_introduce["ci_name"]); ?>!</div>
			</div>
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
		<!--图片-->
		<div class="exclusive" style="background: url(<?php echo ($background_image_Data[0]["bi_image"]); ?>)no-repeat top center;height: 300px;"></div>
		<!--企业概况-->
		<div class="Situation">
			<div class="Situation-top">
				<p><?php echo ($navfrist["nav_name"]); ?></p>
				<p>OMPANY PROFILE</p>
			</div>
			<div class="classification">
				<ul>
					<?php if(is_array($navseconds)): $i = 0; $__LIST__ = $navseconds;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navsecond): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo ($navsecond["nav_url"]); ?>/nav_id/<?php echo ($navsecond["nav_id"]); ?>"><?php echo ($navsecond["nav_name"]); ?></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
					<!-- <li>
						<a href="Culture.html">企业文化</a>
					</li>
					<li>
						<a href="Qualifications.html">荣誉资质</a>
					</li>
					<li>
						<a href="Speech.html">领导致词</a>
					</li>
					<li>
						<a href="advantage.html">服务优势</a>
					</li>
					<li>
						<a href="contact.html">联系我们</a>
					</li>
					<li class="on">
						<a href="team.html">公司与团队</a>
					</li> -->
				</ul>
			</div>
			<div class="Situation-bot">
				<div class="SituationRight-top">
					<span>您当前位置：<a href="/index.php/Mobile/Index/index">首页</a> > <?php echo ($navfrist["nav_name"]); ?> > <?php echo ($navben["nav_name"]); ?></span>
					<h1><?php echo ($navben["nav_name"]); ?></h1>
				</div>
				<div class="SituationRight-bot questions">
					<div class="questions-top">
						<div><?php echo ($company_team["ct_title"]); ?></div>
						<div>作者：管理员 文章来源：本站原创 </div>
						<div>更新时间：<?php echo (date("Y-m-d H:i:s",$company_team["ct_update"])); ?> 点击次数：<span>937</span></div>
					</div>
					<div class="questions-bot"><img src="<?php echo ($company_team["ct_image"]); ?>" alt="..." /></div>
				</div>
				<div class="questions-tab">
					<?php if($company_teams1 == null): ?><a>上一篇: 没有了 </a>
						<?php else: ?>
						<a href="/index.php/Mobile/Index/team1/nav_id/<?php echo ($navben["nav_id"]); ?>/ct_id/<?php echo ($company_teams1["ct_id"]); ?>">上一篇: <?php echo ($company_teams1["ct_title"]); ?> </a><?php endif; ?>
					<?php if($company_teams2 == null): ?><a>下一篇: 没有了 </a>
						<?php else: ?>
						<a href="/index.php/Mobile/Index/team1/nav_id/<?php echo ($navben["nav_id"]); ?>/ct_id/<?php echo ($company_teams2["ct_id"]); ?>">下一篇: <?php echo ($company_teams2["ct_title"]); ?> </a><?php endif; ?>
				</div>
			</div>
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
				<div><img src="<?php echo ($footer["ferweima"]); ?>" alt="..." style="width: 130px;height:130px;"/></div>
			</div>
		</div>
	</body>

</html>