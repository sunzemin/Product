<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>荣誉资质详情</title>
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
		<!--企业概况-->
		<div class="Situation">
			<div class="Situation-top">
				<p><?php echo ($navsecond["nav_name"]); ?></p>
				<p>OMPANY PROFILE</p>
			</div>
			<div class="classification">
				<ul>
					<?php if(is_array($navsecond11)): $k = 0; $__LIST__ = $navsecond11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$second): $mod = ($k % 2 );++$k; if($k == $nav_id): ?><li class="on">
									<a href="<?php echo ($second["nav_url"]); ?>/nav_id/<?php echo ($second["nav_id"]); ?>"><?php echo ($second["nav_name"]); ?></a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo ($second["nav_url"]); ?>/nav_id/<?php echo ($second["nav_id"]); ?>"><?php echo ($second["nav_name"]); ?></a>
								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="Situation-bot">
				<div class="SituationRight-top">
					<span>您当前位置：<a href="/index.php/Mobile/Index/index">首页</a> > <?php echo ($navsecond["nav_name"]); ?> > <?php echo ($navfirst["nav_name"]); ?></span>
					<h1><?php echo ($navfirst["nav_name"]); ?></h1>
				</div>
				<div class="SituationRight-bot questions">
					<div class="questions-top">
						<div><?php echo ($certificateres["title"]); ?></div>
						<div>作者：管理员 文章来源：本站原创 </div>
						<div>更新时间：<?php echo (date("Y-m-d H-i:s",$certificateres["update"])); ?> 点击次数：<span>937</span></div>
					</div>
					<!-- <div class="questions-bot"><img src="<?php echo ($certificateres["image"]); ?>" alt="..." /></div> -->
					<div class="questions-bot"><img src="<?php echo ($certificateres["image"]); ?>" alt="..."/></div>
				</div>
				<div class="questions-tab">
					<?php if($certificate1 == null): ?><a>上一篇: 没有了 </a>
                    	<?php else: ?>
                    	<a href="/index.php/Mobile/Index/qualifications1/nav_id/<?php echo ($navfirst["nav_id"]); ?>/cid/<?php echo ($certificate1["id"]); ?>">上一篇: <?php echo ($certificate1["title"]); ?> </a><?php endif; ?>
					<?php if($certificate2 == null): ?><a>下一篇: 没有了</a>
						<?php else: ?>
						<a href="/index.php/Mobile/Index/qualifications1/nav_id/<?php echo ($navfirst["nav_id"]); ?>/cid/<?php echo ($certificate2["id"]); ?>">下一篇: <?php echo ($certificate2["title"]); ?></a><?php endif; ?>
				</div>
			</div>
		</div>
		<!--底部-->
		<!-- <div class="footer-nav">
	<ul>
		<li>
			<a href="/index.php/Mobile/Index/index">网站首页</a>
		</li>
		<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
			<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>
				
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		// 循环导航菜单样式
				var val=$(".navcss").val();
				console.log("当前页面是:",val);
				var headerLength=$(".nav-center>ul>li").length;
				for(var k=0;k<headerLength;k++){
					var valTxt=$(".nav-center>ul").children("li").eq(k).children("a").text();
					console.log("值",valTxt);
					if(valTxt==val){
					$(".nav-center>ul").children("li").removeClass("nav-centerBack");	
					$(".nav-center>ul").children("li").eq(k).addClass("nav-centerBack");
					}
				}
	})
</script> -->
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
		console.log("当前页面是:", strongeVal);

		var headerLength = $(".nav-center>ul>li").length;
		for(var k = 0; k < headerLength; k++) {
			var valTxt = $(".nav-center>ul").children("li").eq(k).children("a").text();
			console.log("99",valTxt)
			if(valTxt == strongeVal) {
//				alert("进来了");
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
		/*$(".classification>ul").children("li").eq(1).removeClass("on");*/
		/*$(".classification>ul").children("li").eq(0).css('backgroundColor','white');
		var val=$(".navcss").val();*/
		var val=$(".navcss").val();
		var headerLength11=$(".classification>ul>li").length;
				for(var k=0;k<headerLength11;k++){
					var nam=$(".classification>ul").children("li").eq(k).children("a").text();
						
						
					//alert(val);
					if(nam==val){

					$(".classification>ul").children("li").eq(k).addClass("on");
					$(".classification>ul").children("li").eq(k).css('backgroundColor','red');
					}
				}

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