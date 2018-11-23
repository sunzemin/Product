<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo ($navben["nav_name"]); ?></title>
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
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>" target="_blank"><?php echo ($navs["nav_name"]); ?></a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<input type="hidden" id="btn" value="<?php echo ($nav_id); ?>" />
<input type="hidden" class="nav_name" value="<?php echo ($navben["nav_name"]); ?>" />

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var len=$('.hraderCent-bot>ul>li').length;
		var data=$('.nav_name').val();
		for(var i=0;i<len;i++){
			var cont=$('.hraderCent-bot>ul').children('li').eq(i).children('a').text();
			if(data==cont){
				$('.hraderCent-bot>ul').children('li').eq(i).children('a').addClass('headCorol');
			}
		}
	})
</script>
				</div>
			</div>
		</header>
		<!--内容-->
		<section>
			<div class="Furnishing">
				<div><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
				<div>
					<span><?php echo ($all_head["ah_title1"]); ?></span>
					<span><?php echo ($all_head["ah_title2"]); ?></span>
				</div>
				<p><?php echo ($all_head["ah_title3"]); ?></p>
			</div>
			<div class="room">
				<?php if(is_array($little_classify_res)): $k = 0; $__LIST__ = $little_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if(($mod) == "0"): ?><div class="roomDetails wow bounceInLeft" data-wow-duration="<?php echo ($classify_article_res[$k-1]["ca_min"]); ?>">
							<div class="roomDetails_left">
								<div><img src="<?php echo ($classify_article_res[$k-1]["ca_image"]); ?>" alt="..." /></div>
								<div></div>
								<div class="roomDetailsLeft-eng">
									<p><?php echo ($classify_article_res[$k-1]["ca_title"]); ?></p>
									<p>Intelligent</p>
								</div>
							</div>
							<div class="roomDetails_right">
								<div>全屋智能—<?php echo ($vo["lc_name"]); ?></div>
								<div class="roomDetailsRight_text">
									<?php echo ($classify_article_res[$k-1]["ca_content"]); ?>
								</div>
							</div>
						</div><?php endif; ?>
					<?php if(($mod) == "1"): ?><div class="roomDetails wow bounceInRight" data-wow-duration="<?php echo ($classify_article_res[$k-1]["ca_min"]); ?>">
							<div class="KitchenDetails_left">
								<div>全屋智能—<?php echo ($vo["lc_name"]); ?></div>
								<div class="KitchenDetailsRight_text">
									<?php echo ($classify_article_res[$k-1]["ca_content"]); ?>
								</div>
							</div>
							<div class="KitchenDetails_right">
								<div><img src="<?php echo ($classify_article_res[$k-1]["ca_image"]); ?>" alt="..." /></div>
								<div></div>
								<div class="KitchenDetails-eng">
									<p><?php echo ($classify_article_res[$k-1]["ca_title"]); ?></p>
									<p>Intelligent</p>
								</div>
							</div>
						</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
			});
		</script>
	</body>

</html>