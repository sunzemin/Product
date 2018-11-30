<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo ($product_classify11["pc_name"]); ?></title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
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
			<div class="NavigationBack hide">
				<ul style="margin-left: 748px;">
					<?php if(is_array($product_classify_res)): $i = 0; $__LIST__ = $product_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product_classify): $mod = ($i % 2 );++$i; if($k == 1): ?><li><a href="javascript:;" class="lanse"><?php echo ($product_classify["pc_name"]); ?></a><input type="hidden" class="pc_id" value="<?php echo ($product_classify["pc_id"]); ?>"/></li>
							<?php else: ?>
							<li><a href="javascript:;"><?php echo ($product_classify["pc_name"]); ?></a><input type="hidden" class="pc_id" value="<?php echo ($product_classify["pc_id"]); ?>"/></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</header>
		<div class="banner"><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
		<!--内容-->
		<section>
			<div class="IntelligentLock">
				<div class="IntelligentLock_top">
					<span>当前位置&nbsp;:</span>
					<span><a href="/index.php/Home/Index/index/nav_id/<?php echo ($navres[0]["nav_id"]); ?>">首页</a></span>
					<span>></span>
					<span><a href="<?php echo ($navben["nav_url"]); ?>/nav_id/<?php echo ($navben["nav_id"]); ?>"><?php echo ($navben["nav_name"]); ?></a></span>
					<span>></span>
					<span><?php echo ($product_classify11["pc_name"]); ?></span>
				</div>
				<div class="IntelligentLock_title"><?php echo ($product11["pname"]); ?></div>
				<div class="IntelligentLock_img">
					<div class="IntelligentLockImg_top">
						<div class="IntelligentLockImg_top_left">
							<div><img src="<?php echo ($product11["pimage"]); ?>" alt="..." /></div>
							<?php if(is_array($product_res)): $i = 0; $__LIST__ = $product_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?><div class="hide"><img src="<?php echo ($product["pimage"]); ?>" alt="..." /></div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div>
							<p>所属分类：<?php echo ($product_classify11["pc_name"]); ?></p>
							<p>产品名称：<?php echo ($product11["pname"]); ?></p>
							<p>发布日期：<?php echo (date("Y-m-d",$product11["ptime"])); ?></p>
							<a href="javascript:;"><?php echo ($product11["pprice"]); ?></a>
						</div>
					</div>
					<div class="wapperBig">
						<div id="main">
							<div id="warpper">
								<div id="inner">
									<?php if(is_array($product_res)): $i = 0; $__LIST__ = $product_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?><div><img src="<?php echo ($product["pimage"]); ?>" alt="..." /></div><?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
						</div>
						<div id="optrbtn">
							<span class="btnleft"><img src="/Public/Home/img/zuo.png" alt="..."/></span>
							<span class="btnright"><img src="/Public/Home/img/you.png" alt="..."/></span>
						</div>
					</div>
				</div>
				<div class="Detailed">详细介绍</div>
				<div class="Detailed_text">
					<?php echo ($product11["pintroduce"]); ?>
				</div>
				<div class="fingerprint"><img src="<?php echo ($product11["pimage"]); ?>" alt="..." /></div>
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
				var swiper = new Swiper('.swiper-container', {
					slidesPerView: 3,
					spaceBetween: 30,
					slidesPerGroup: 3,
					//					loop: true,
					loopFillGroupWithBlank: true,
					navigation: {
						nextEl: '.swiper-button-next1',
						prevEl: '.swiper-button-prev1',
					},
				});

				var curNum = 0;
				var count = $("#inner").children('div').length;
				//左滑动
				$(".btnleft").click(function() {
					//如果到了最后一个元素 停止
					if((count - curNum) <= 3) {
						return false;
					}
					curNum += 1;
					$("#inner").animate({
						left: '-=162'
					}, 500, function() {
					});
				});
				//右滑动
				$(".btnright").click(function() {
					//如果到了第一个元素 停止
					if(curNum <= 0) {
						return false;
					}
					curNum -= 1;

					$("#inner").animate({
						left: '+=162'
					}, 500, function() {
						//curNum-=1;    //写在这里同样问题

					});
				});
				$('#inner>div').click(function(){
					var ind=$(this).index();
					$('.IntelligentLockImg_top_left').children('div').eq(ind).show().siblings().hide();
				});
				
				$('.headCorol').mouseenter(function(){
					$('.NavigationBack').slideDown();
				});
			});
		</script>
	</body>

</html>