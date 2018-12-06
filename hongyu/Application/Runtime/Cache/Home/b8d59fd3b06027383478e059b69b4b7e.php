<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博越智能家居-全屋集成整装</title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/animate.css" />
	</head>

	<body>
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
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>" target="_blank" class="headCorol"><?php echo ($navs["nav_name"]); ?></a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
				</div>
			</div>
		</header>
		<div class="banner">
			<img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." />
		</div>
		<input type="text" class="nav_id" value="<?php echo ($nav_id); ?>">
		<!--内容-->
		<section>
			<div class="Renovation">
				<div class="aboutTitle">
					<div>Integrated assembly</div>
					<div>全屋集成整装</div>
				</div>
				<div class="style">
					<div class="EuropeanStyle">
						<div class="EuropeanStyle-left show animated bounceInLeft" style="animation-delay: 0.5s">
							<a href="javascript:;">
								<div><img src="/Public/Home/img/img70.png" alt="..." /></div>
								<div class="hide1">欧式</div>
							</a>
						</div>
						<div class="EuropeanStyle-right show">
							<a href="javascript:;" class="animated bounceInDown" style="animation-delay: 1s">
								<div><img src="/Public/Home/img/img71.png" alt="..." /></div>
								<div class="hide1">欧式</div>
							</a>
							<a href="javascript:;" class="animated bounceInUp" style="animation-delay: 1.5s">
								<div><img src="/Public/Home/img/img71.png" alt="..." /></div>
								<div class="hide1">欧式</div>
							</a>
						</div>
					</div>
					<div class="EuropeanStyle" style="animation-delay: 1s">
						<div class="JapaneseStyle_left show">
							<a href="javascript:;" class="animated bounceInDown" style="animation-delay: 2s">
								<div><img src="/Public/Home/img/img71.png" alt="..." /></div>
								<div class="hide1">日式</div>
							</a>
							<a href="javascript:;" class="animated bounceInUp" style="animation-delay: 2.5s">
								<div><img src="/Public/Home/img/img71.png" alt="..." /></div>
								<div class="hide1">日式</div>
							</a>
						</div>
						<div class="JapaneseStyle_right">
							<div class="EuropeanStyle-left show animated bounceInRight" style="animation-delay: 3s">
								<a href="javascript:;">
									<div><img src="/Public/Home/img/img70.png" alt="..." /></div>
									<div class="hide1">日式</div>
								</a>
							</div>
						</div>
					</div>
					<div class="EuropeanStyle">
						<div class="EuropeanStyle-left show animated bounceInLeft" style="animation-delay: 3.5s">
							<a href="javascript:;">
								<div><img src="/Public/Home/img/img70.png" alt="..." /></div>
								<div class="hide1">欧式</div>
							</a>
						</div>
						<div class="EuropeanStyle-right show">
							<a href="javascript:;" class="animated bounceInDown" style="animation-delay: 4s">
								<div><img src="/Public/Home/img/img71.png" alt="..." /></div>
								<div class="hide1">欧式</div>
							</a>
							<a href="javascript:;" class="animated bounceInUp" style="animation-delay: 4.5s">
								<div><img src="/Public/Home/img/img71.png" alt="..." /></div>
								<div class="hide1">欧式</div>
							</a>
						</div>
					</div>
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
		<script src="/Public/Home/js/wow.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				wow = new WOW({
					animateClass: 'animated',
				});
				wow.init();
				$('.hide1').hide();
				$('.show>a').mouseenter(function() {
					$(this).children('.hide1').slideDown();
				})
				$('.show>a').mouseleave(function() {
					$(this).children('.hide1').slideUp();
				})
			});
		</script>
	</body>

</html>