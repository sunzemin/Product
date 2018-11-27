<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博越智能家居-新闻详情</title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/animate.css"/>
		<!--[if IE]>
			<script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
		<![endif]-->
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
		<div class="banner"><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
		<!--内容-->
		<section>
			<div class="NewsDetail">
				<?php if($classify_article != null): ?><div class="IntelligentLock_top">
					<span>当前位置&nbsp;:</span>
					<span><a href="javascript:;"><?php echo ($navben["nav_name"]); ?></a></span>
					<span>></span>
					<span><a href="javascript:;"><?php echo ($all_classify["ac_name"]); ?></a></span>
					<span>></span>
					<span><?php echo ($little_classify["lc_name"]); ?></span>
				</div>
				<div class="NewsDetail_title">
					<div class="animated pulse" style="animation-delay: 0.5s;"><?php echo ($classify_article["ca_title"]); ?></div>
					<div>日期:<?php echo (date("Y-m-d H:i:s",$classify_article["ca_time"])); ?></div>
					<div class="animated bounceInLeft" style="animation-delay: 1s;"><?php echo ($classify_article["ca_content"]); ?>
					</div>
				</div>
				<?php else: endif; ?>
				<?php if($case != null): echo ($precase["content"]); ?>
					<?php else: endif; ?>
			</div>
			<div class="lastOne">
				<?php if($classify_article != null): if($classify_article12 == null): ?><div><a>上一篇：无</a></div>
					<?php else: ?>
					<div><a href="/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article12["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>">上一篇：<?php echo ($classify_article12["ca_title"]); ?></a></div><?php endif; ?>
				<?php if($classify_article11 == null): ?><div><a>下一篇：无</a></div>
					<?php else: ?>
					<div><a href="/index.php/Home/Index/xinwenxiangqing/ca_id/<?php echo ($classify_article11["ca_id"]); ?>/nav_id/<?php echo ($nav_id); ?>">上一篇：<?php echo ($classify_article11["ca_title"]); ?></a></div><?php endif; ?>
				<?php else: endif; ?>
				<?php if($case != null): if($preid == 0): ?><div><a>上一篇：无</a></div>
					<?php else: ?>
					<div><a href="/index.php/Home/Index/xinwenxiangqing/id/<?php echo ($precase["id"]); ?>/nav_id/<?php echo ($nav_id); ?>">上一篇：<?php echo ($precase["title"]); ?></a></div><?php endif; ?>
				<?php if($nextid == 0): ?><div><a>下一篇：无</a></div>
					<?php else: ?>
					<div><a href="/index.php/Home/Index/xinwenxiangqing/id/<?php echo ($nextcase["id"]); ?>/nav_id/<?php echo ($nav_id); ?>">上一篇：<?php echo ($nextcase["title"]); ?></a></div><?php endif; ?>
				<?php else: endif; ?>
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
		<script type="text/javascript">
			$(function() {

			});
		</script>
	</body>

</html>