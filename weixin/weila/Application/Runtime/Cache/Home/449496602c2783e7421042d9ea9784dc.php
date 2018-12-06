<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>人才招聘</title>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
	</head>

	<body>
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
		<!--图片-->
		<div class="exclusive" style="background: url(<?php echo ($background_image_Data[0]["bi_image"]); ?>)no-repeat top center;height: 300px;background-size: 100% 100%;width:100%;"></div>
		<!--人才招聘中心-->
		<div class="recruit">
			<div class="recruit-top">人才招聘中心</div>
			<div class="recruit_classification">
				<div class="recruit_table">
					<?php if(is_array($job11_res)): $i = 0; $__LIST__ = $job11_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$job): $mod = ($i % 2 );++$i;?><table width="1120" border="1" cellspacing="0" cellpadding="0" class="tab_b">
							<tr>
								<td width="450">
									<p>&nbsp;&nbsp;&nbsp;<strong><?php echo ($company_introduce["ci_name"]); ?>-<?php echo ($job["jname"]); ?></strong></p>
								</td>
								<td width="70" align="center">招聘岗位：</td>
								<td width="550">&nbsp;&nbsp;
									<strong><?php echo ($job["jjob"]); ?> | ...</strong>
								</td>
								<td width="70" align="center">招聘人数：</td>
								<td width="80">&nbsp;&nbsp;<strong><?php echo ($job["jnum"]); ?></strong></td>
								<td width="100" align="center">
									<a href="/index.php/Home/Index/recruit1/jid/<?php echo ($job["jid"]); ?>/nav_id/<?php echo ($nav_id); ?>" style="font-size:16px; color:#FE0000; text-decoration:none">查看详情</a>
								</td>
							</tr>
							<tr>
								<td colspan="6" style="padding:12px" align="left"><span style="color:#666666; text-align:left">	任职要求：	<?php echo ($job["jrequire"]); ?>...</span></td>
							</tr>
					</table><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="fy">
					<form method="get" class="/index.php/Home/Index/recruit">
						<a href="/index.php/Home/Index/recruit/p/1">首页&nbsp;</a> <a href="/index.php/Home/Index/recruit/p/<?php echo ($p1); ?>">上一页&nbsp;</a><a href="/index.php/Home/Index/recruit/p/<?php echo ($p2); ?>">下一页&nbsp;</a> <a href="/index.php/Home/Index/recruit/p/<?php echo ($page); ?>">尾页&nbsp;</a>&nbsp;页次：
						<strong><font color=red><?php echo ($p); ?></font>/<?php echo ($page); ?></strong>页 &nbsp;共<b><font color='#FF0000'><?php echo ($allcount); ?></font></b>条记录  <!-- <b>10</b>条记录/页 --> 转到：<input type='uname' size=4 name="p">
						<input class=input type='submit' value=' Goto '> </span>
					</form>
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
				$('.sub-nav>ul>li').click(function() {
					var ind = $(this).index();
					console.log('下标为', ind);
					$('.Situation-right').children('div').eq(ind).show().siblings().hide();
				});
				$(window).on('scroll', function() {
					var scrollTop = $(this).scrollTop();
					console.log(scrollTop);
					if($(window).scrollTop() >= 500) {
						$('.top').show();
					} else if(scrollTop == 0) {
						$('.top').hide();
					}
				});
				$('.top').click(function() {
					$('html,body').animate({
						scrollTop: 0
					});
				});

				$('.code').mouseenter(function() {
					$(this).children('img').fadeIn();
				});
				$('.code').mouseleave(function() {
					$(this).children('img').fadeOut();
				});
				$('.phone').mouseenter(function() {
					$(this).children('a').fadeIn();
				});
				$('.phone').mouseleave(function() {
					$(this).children('a').fadeOut();
				})
			})
		</script>
	</body>

</html>