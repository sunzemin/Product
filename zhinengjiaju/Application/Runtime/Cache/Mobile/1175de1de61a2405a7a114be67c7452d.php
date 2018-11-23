<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title><?php echo ($navben["nav_name"]); ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/layui-v2.4.5/layui/css/layui.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>

	<body>
		<!--头部-->
		<div class="top">
			<div class="Catalog">
				<a href="/index.php/Mobile/Index/nav"><img src="/Public/mobile/img/xian.png" alt="..." /></a>
			</div>
			<div class="logo">
				<div><img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." /></div>
				<div>博越智能家居</div>
			</div>
			<div class="phone">
				<a href="tel:0147-88469258"><img src="/Public/mobile/img/phone.png" alt="..." /></a>
			</div>
		</div>
		<!--banner图-->
		<div class="banner">
			<img src="/Public/mobile/img/banner1.png" />
		</div>
		<!--案例展示-->
		<div class="About_title">
			<div>博越客户案例</div>
			<div></div>
			<div>Customer case</div>
		</div>
		<div class="case">
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
			<a href="javascript:;">
				<div>
					<div><img src="/Public/mobile/img/img42.png" alt="..." /></div>
					<div>案例名称案例名称</div>
				</div>
			</a>
		</div>
		<!--底部-->
		<div class="footer">
	<div class="gray">全国统一联系热线</div>
	<div><?php echo ($footer["telephone"]); ?></div>
	<div class="gray">我们的地址</div>
	<div><?php echo ($footer["address"]); ?></div>
	<div class="Scavenging">
		<div class="Scavenging_left">
			<div><img src="<?php echo ($footer["wx_erweima"]); ?>" alt="..." /></div>
			<div>官方微信</div>
		</div>
		<div class="Scavenging_left">
			<div><img src="<?php echo ($footer["wb_erweima"]); ?>" alt="..." /></div>
			<div>官方微博</div>
		</div>
	</div>
	<div class="gray last"><?php echo ($footer["copyright"]); ?></div>
	<div class="gray last"><?php echo ($footer["record"]); ?>&nbsp;&nbsp;&nbsp;技术支持：泰雁科技</div>
</div>

	</body>

</html>