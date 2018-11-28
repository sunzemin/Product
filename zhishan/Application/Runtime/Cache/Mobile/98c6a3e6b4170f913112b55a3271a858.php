<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>人才招聘详情</title>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/index.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>

	<body>
		<!--顶部-->
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
		<!--人才招聘-->
		<div class="manager">
			<div class="manager-top">人才招聘中心 > <?php echo ($company_introduce["ci_name"]); ?>-<?php echo ($job["jname"]); ?></div>
			<div class="manager-bot">
				<div>
					<div>任职要求：</div>
					<div><?php echo ($job["jrequire"]); ?>
					</div>
				</div>
				<div>
					<div>应聘方式：</div>
					<div>
						<?php echo ($job["jmethod"]); ?>
					</div>
				</div>
				<div>
					<div>招聘岗位： <?php echo ($job["jjob"]); ?></div>
					<div><?php echo ($job["jresponsible"]); ?></div>
					<div>招聘人数：<?php echo ($job["jnum"]); ?></div>
					<div>
						<a href="/index.php/Mobile/Index/personnel2/jid/<?php echo ($job["jid"]); ?>/nav_id/<?php echo ($nav_id); ?>">在线应聘此岗位</a>
					</div>
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