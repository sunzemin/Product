<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>行车路线</title>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/index.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
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
				<p><?php echo ($navben["nav_name"]); ?></p>
				<p>CONTACT US</p>
			</div>
			<div class="classification">
				<ul>
					<li>
						<a href="/index.php/Mobile/Index/contact/nav_id/<?php echo ($navben["nav_id"]); ?>">联系方式</a>
					</li>
					<li>
						<a href="/index.php/Mobile/Index/Route/nav_id/<?php echo ($navben["nav_id"]); ?>">行车路线</a>
					</li>
				</ul>
			</div>
			<div class="Situation-bot">
				<div class="SituationRight-top">
					<span>您当前位置：<a href="/index.php/Mobile/Index/index">首页</a> > <?php echo ($navfirst["nav_name"]); ?> > 行车路线</span>
					<h1>行车路线</h1>
				</div>
				<div class="SituationRight-bot">
					<div class="map">
						<div class="map-top">地图名片</div>
						<div class="map-addrees">
							<p>名称：<?php echo ($company_introduce["ci_name"]); ?></p>
							<p>地址：<?php echo ($footer["faddress"]); ?></p>
							<p>电话：<?php echo ($footer["ftelephone"]); ?></p>
							<p>传真号：<?php echo ($footer["ffax"]); ?></p>
							<p>email：<?php echo ($footer["femail"]); ?></p>
							<p>简介：<?php echo ($company_introduce["ci_content"]); ?></p>
						</div>
						<div style="width:100%;height:460px;border:#ccc solid 1px;">
							<?php echo ($link_us["lu_map"]); ?>
						</div>
						<!-- <div class="Bus">
							<div class="Bus-top">附近公交/地铁</div>
							<div>公交：公交公交公交公交公交公交公交公交</div>
							<div>地铁：地铁地铁地铁地铁地铁地铁地铁地铁</div>
						</div> -->
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
		<script type="text/javascript">
			//创建和初始化地图函数：
			function initMap() {
				createMap(); //创建地图
				setMapEvent(); //设置地图事件
				addMapControl(); //向地图添加控件
			}

			//创建地图函数：
			function createMap() {
				var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
				var point = new BMap.Point(108.953683, 34.298217); //定义一个中心点坐标
				map.centerAndZoom(point, 12); //设定地图的中心点和坐标并将地图显示在地图容器中
				window.map = map; //将map变量存储在全局
			}

			//地图事件设置函数：
			function setMapEvent() {
				map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
				map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
				map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
				map.enableKeyboard(); //启用键盘上下左右键移动地图
			}

			//地图控件添加函数：
			function addMapControl() {
				//向地图中添加缩放控件
				var ctrl_nav = new BMap.NavigationControl({
					anchor: BMAP_ANCHOR_TOP_LEFT,
					type: BMAP_NAVIGATION_CONTROL_LARGE
				});
				map.addControl(ctrl_nav);
				//向地图中添加缩略图控件
				var ctrl_ove = new BMap.OverviewMapControl({
					anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
					isOpen: 1
				});
				map.addControl(ctrl_ove);
				//向地图中添加比例尺控件
				var ctrl_sca = new BMap.ScaleControl({
					anchor: BMAP_ANCHOR_BOTTOM_LEFT
				});
				map.addControl(ctrl_sca);
			}

			initMap(); //创建和初始化地图
		</script>
	</body>

</html>