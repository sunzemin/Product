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
		<div class="banner banner1"><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
		<!--内容-->
		<section class="JoinIn1">
			<div class="JoinIn">
				<div class="JoinIn_title animated slideInDown" style="animation-delay: 0.5s;">为什么选择我们？</div>
				<div class="JoinIn_line7"></div>
			</div>
			<div class="JoinIn_number_big">
				<div class="JoinIn_number">
					<div class="JoinInNumber_left animated fadeInLeft" style="animation-delay: 1s;"><img src="<?php echo ($background_image_data[1]["bi_image"]); ?>" alt="..." /></div>
					<div class="JoinInNumber_right">
						<?php if(is_array($classify_article_res[0])): $i = 0; $__LIST__ = $classify_article_res[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><div class="animated fadeInDown" style="animation-delay: <?php echo ($classify_article["ca_min"]); ?>;">
								<span><img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..."/></span>
								<p><?php echo ($classify_article["ca_title"]); ?></p>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>

			<div class="JoinIn_line1">
				<div class="circular"></div>
				<div class="circular1"></div>
			</div>
			<div class="JoinIn_title animated slideInDown" style="animation-delay: 3.5s;">加盟政策</div>
			<div class="JoinIn_line2"></div>
			<div class="good">
				<?php if(is_array($classify_article_res[1])): $k = 0; $__LIST__ = $classify_article_res[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($k % 2 );++$k;?><div class="good_Modular animated fadeInRight" style="animation-delay: <?php echo ($classify_article["ca_min"]); ?>;">
						<div class="goodModular_title">
							<div class="goodModular_frame">
								<span><?php echo ($k); ?></span>
								<p><?php echo ($classify_article["ca_title"]); ?></p>
							</div>
						</div>
						<div class="goodModular_text">
							<?php echo ($classify_article["ca_content"]); ?>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="JoinIn_line3">
				<div class="circular2"></div>
				<div class="circular3"></div>
			</div>
			<div class="JoinIn_title animated slideInDown" style="animation-delay: 5.5s;">加盟流程</div>
			<div class="JoinIn_line"></div>
			<div class="JoinIn_process">
				<div class="JoinInProcess_center">
					<div class="JoinInProcess_right">
					    <?php if(is_array($classify_article_res[2])): $k = 0; $__LIST__ = $classify_article_res[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($k % 2 );++$k; if($k < 6): if($k == 5): ?><div class="Technological animated fadeInUp" style="animation-delay: <?php echo ($classify_article["ca_min"]); ?>;">
										<div>
											<img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..." style="width: 60px;height: 60px;" />
											<img src="<?php echo ($classify_article["ca_hideimage"]); ?>" alt="..." class="hide" style="width: 60px;height: 60px;" />
										</div>
										<div class="change"><?php echo ($classify_article["ca_title"]); ?></div>
									</div>
									<?php else: ?>
									    <div class="Technological animated fadeInUp" style="animation-delay: <?php echo ($classify_article["ca_min"]); ?>;">
											<div>
												<img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..." />
												<img src="<?php echo ($classify_article["ca_hideimage"]); ?>" alt="..." class="hide" />
											</div>
											<div class="change"><?php echo ($classify_article["ca_title"]); ?></div>
										</div><?php endif; ?>
					    		<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			<div class="JoinIn_line1 JoinIn_line4">
				<div class="circular"></div>
				<div class="circular1"></div>
			</div>
			<div class="JoinIn_title animated slideInDown" style="animation-delay: 8.5s;">加盟流程</div>
			<div class="JoinIn_line2 JoinIn_line5"></div>
			<div class="JoinIn_bottom">
				<div class="JoinIn_bottom_back" style="background: url(<?php echo ($background_image_data[2]["bi_image"]); ?>)no-repeat center center;padding: 36px 0 12px 244px;">
					<div class="JoinInBottom">
						<div><span>招商电话：</span><?php echo ($footer["telephone"]); ?></div>
						<div>招商邮箱：<?php echo ($footer["email"]); ?></div>
					</div>
					<a href="javascript:;">点击咨询</a>
				</div>
			</div>
			<div class="JoinIn_line6">
				<div class="circular4"></div>
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
						<input type="text" placeholder="请输入您的姓名" class="nameVal"/>
					</div>
					<div>
						<div>电话</div>
						<input type="text" placeholder="请输入您的电话" class="phoneVal"/>
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
				$(".Technological").mouseenter(function() {
					$(this).children('div').children("img").eq(1).removeClass("hide").siblings().addClass("hide");
					$(this).children('.change').css({
						'background': '#014a96',
						'color': '#fff'
					})
				});
				$(".Technological").mouseleave(function() {
					$(this).children('div').children("img").eq(0).removeClass("hide").siblings().addClass("hide");
					$(this).children('.change').css({
						'background': '#fff',
						'color': '#000'
					})
				});
				
				$(".subMit").click(function() {
						var Name = $(".nameVal").val();
						var Phone = $(".phoneVal").val();
						if(Name == "" || Name == null) {
							alert('姓名不能为空!');
							return false;
						} else {
							var textVal = /^[\u4E00-\u9FA5]{2,10}$/;
							if(textVal.test(Name) == false) {
								alert('姓名格式不正确!');
								return false;
							}
						}
						if(Phone == "" || Phone == null) {
							alert('手机号不能为空!');
							return false;
						} else {
							var valTxt = /^\d{11}$/;
							if(valTxt.test(Phone) == false) {
								alert('手机号格式不正确!');
								return false;
							}
						}
						$.ajax({
							type:"post",
							url:"/index.php/Home/Public/adduse",
							async:true,
							success:function(data){
								return true;
							},
							error:function(){
								return false;
							}
						});
				});
			});
		</script>
	</body>

</html>