<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>
	<body>
		<!--头部-->
		<div class="top_big">
	<div class="top">
		<div class="top_left"><img src="/Public/mobile/img/xian.png" alt="..." /></div>
		<div class="logo">
			<img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." />
		</div>
		<div class="phone">
			<a href="tel:029-82095999"><img src="/Public/mobile/img/phone.png" alt="..." /></a>
		</div>
	</div>
</div>
<div class="nav hide">
	<div class="guanbi"><img src="/Public/mobile/img/close.png" alt="..." /></div>
	<div class="Navigationbar">
		<ul>
			<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navfirst): $mod = ($k % 2 );++$k; if($navsec[$k-1] == ''): ?><li>
						<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
							<?php else: ?>
							<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
					</li>
					<?php else: ?>
					<li class="activity">
						<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
							<?php else: ?>
							<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
						<ul class="Arrow hide">
						<?php if(is_array($navsec[$k-1])): $i = 0; $__LIST__ = $navsec[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navsecond): $mod = ($i % 2 );++$i;?><li>
								<?php if($navsecond["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navsecond["nav_name"]); ?></a>
								    <?php else: ?>
								    <a href="<?php echo ($navsecond["nav_url"]); ?>/nav_id/<?php echo ($navsecond["nav_id"]); ?>"><?php echo ($navsecond["nav_name"]); ?></a><?php endif; ?>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<?php if($navsec[$k-1] == null): else: ?>
							<span class="down">
								<img src="/Public/mobile/img/down.png" alt="..."/>
								<img src="/Public/mobile/img/up.png" alt="..." class="hide"/>
							</span><?php endif; ?>
					</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
		
		<div class="content">
			<div class="content_title"><?php echo ($articleData["title"]); ?></div>
			<div class="content_text"><?php echo ($articleData["content"]); ?></div>
		</div>
		<div class="footer" style="background: url(/Public/mobile/img/img43.png)no-repeat center center;background-size: cover;">
	<div>联系电话：<?php echo ($footer["telephone"]); ?></div>
	<div>我们的地址：<?php echo ($footer["address"]); ?></div>
	<div><?php echo ($footer["copyright"]); ?> <?php echo ($footer["record"]); ?> 技术支持：泰雁科技</div>
</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.top_left').click(function(){
					$('.nav').show();
				})
				var toggle = true;
				$(".down").click(function() {
					if(toggle) {
						$(this).children("img").attr("src", "/Public/mobile/img/up.png");
						toggle = false;
						$(this).siblings('ul').show();
					} else {
						$(this).children("img").attr("src", "/Public/mobile/img/down.png");
						toggle = true;
						$(this).siblings('ul').hide();
					}
				});
				$('.guanbi').click(function() {
										$('.nav').hide();
				});
				var hei = $(window).height();
				console.log('gaodu', hei);
				var nav_hei = $('.nav').height(hei);
			})
		</script>
	</body>
</html>