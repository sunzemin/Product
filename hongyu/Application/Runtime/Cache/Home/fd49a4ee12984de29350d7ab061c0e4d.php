<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博越智能家居</title>
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
					<img src="/Public/Home/img/logo.png" alt="img" />
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
		<div class="banner"><img src="/Public/Home/img/banner2.png" alt="..." /></div>
		<!--内容-->
		<section>
			<div class="Bedroom">
				<div class="Bedroom-top">
					<div style="background: url(/Public/Home/img/img73.png)no-repeat center center;">卧室</div>
				</div>
				<div class="n_content_right_m">
					<div id="pro_view" class="pro_view">
						<div class="prod_big"></div>
						<div id="xn_c_prodv_4_wrap" class="xn_c_prodv_4_wrap">
							<div class="xn_c_prodv_4_neirong">
								<span id='ShoveWebControl_Texttestcon11'></span>
							</div>
						</div>
						<div id="xn_c_prodv_66_wrap" class="xn_c_prodv_66_wrap">
							<div class="xn_c_prodv_66_inner">
								<div class="xn_c_prodv_66_left">
									<a href="javascript:;"></a>
								</div>
								<div class="xn_c_prodv_66_flzz"></div>
								<ul class="xn_c_prodv_66_ul">
									<li>
										<div class="xn_c_prodv_66_cont">
											<img src='/Public/Home/img/img101.png' alt='...' />
										</div>
									</li>
									<li>
										<div class="xn_c_prodv_66_cont">
											<img src='/Public/Home/img/img24.png' alt='...' />
										</div>
									</li>
									<li>
										<div class="xn_c_prodv_66_cont">
											<img src='/Public/Home/img/img41.png' alt='...' />
										</div>
									</li>
									<li>
										<div class="xn_c_prodv_66_cont">
											<img src='/Public/Home/img/img51.png' alt='...' />
										</div>
									</li>
								</ul>
								<div class="xn_c_prodv_66_frzz"></div>
								<div class="xn_c_prodv_66_right">
									<a href="javascript:;"></a>
								</div>
							</div>
							<div class="xn_c_prodv_66_min_img"></div>
						</div>
						<div class="cle"></div>
					</div>
				</div>
				<div class="Returnlist"><a href="javascript:;">返回列表</a></div>
				<div class="lastOne lastmeun">
				<div><a href="javascript:;">上一篇：客厅</a></div>
				<div><a href="javascript:;">下一篇：无</a></div>
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
		<script type="text/javascript">
			$(function() {
				//点击左边滚动
				function prevImg() {
					cul.find("li:first").stop(true, false).animate({
						"margin-left": -(imgw + marw * 2)
					}, sp, function() {
						$(this).css("margin-left", 0).appendTo(cul);
					});
				};

				//点击右边滚动
				function nextImg() {
					cul.find("li:last").prependTo(cul);
					cul.find("li:first").css("margin-left", -(gdw + zzw + marw)).animate({
						"margin-left": 0
					}, sp);
				};
				var autoquee = false; //是否自动滚动
				var sp = 600; //切换速度
				var cont = $(".xn_c_prodv_66_inner");
				var cul = $(".xn_c_prodv_66_ul");
				var cli = $(".xn_c_prodv_66_ul li");
				var minc = $(".xn_c_prodv_66_min_img");
				var size = cli.length;
				var maxwin = cont.width(); //取得盒子宽度
				var zzw = $(".xn_c_prodv_66_flzz").outerWidth(); //取得遮罩层的宽度
				console.log('zhehzaoceng', zzw)
				var marw = cli.outerWidth(true) - cli.outerWidth()
				var limw = cli.outerWidth(true) - cli.outerWidth(); //取得li的maring-right宽度
				console.log('宽度为', limw)
				var imgw = maxwin - (2 * (zzw + limw)); //得出li的宽度
				var gdw = imgw - zzw; //ul滚动宽度
				var imgratio = 0.7; //图片约束比例
				//将所有图片添加到小图显示区
				var minhtml = "";
				var htmlli = "";
				cli.each(function(fst, element) {
					$(this).attr("index", fst);
					htmlli = $(this).find(".xn_c_prodv_66_cont").html();
					minhtml = minhtml + ("<li>" + htmlli + "</li>");
				});
				minc.css("width", imgw).html("<ul>" + minhtml + "</ul>");
				minc.find("li:first").addClass("min_current");
				//设置大图
				cli.css("width", imgw);
				cul.find("li:last").prependTo(cul);
				cul.css("left", -gdw);
				cli.css("max-height", parseInt(imgw * imgratio));
				//设置小图
				var minlim = minc.find("li").outerWidth(true) - minc.find("li").outerWidth();
				var minlin = imgw - size * minlim - minlim - 5;
				var minliw = parseInt(minlin / size);
				minc.find("li").css("width", minliw);
				minc.find("li").css("max-height", parseInt(minliw * imgratio)); //约束高度
				var auto, time;
				if(autoquee) {
					auto = function() {
						prevImg();
					};
					time = setInterval(auto, 3000);
					cul.onmouseover = function() {
						clearInterval(time);
					};
					cul.onmouseout = function() {
						time = setInterval(auto, 3000);
					};
				}
				$(".xn_c_prodv_66_left,.xn_c_prodv_66_right,#xn_c_prodv_66_inner").hover(function() {
					clearInterval(time);
				}, function() {
					time = setInterval(auto, 3000);
				});

				$(".xn_c_prodv_66_right").click(function() {
					prevImg();
				});
				$(".xn_c_prodv_66_left").click(function() {
					nextImg();
				});
				//点击左边滚动
				function prevImg() {
					cul.find("li:first").stop(true, false).animate({
						"margin-left": -(imgw + limw * 2)
					}, sp, function() {
						$(this).css("margin-left", 0).appendTo(cul);
						cul.find("li").eq(1).addClass("current").siblings().removeClass("current");
						var mincur = $(".current").attr("index");
						minprev(mincur);
					});
				};
				//点击右边滚动
				function nextImg() {
					cul.find("li:last").prependTo(cul);
					cul.find("li:first").css("margin-left", -(gdw + zzw + limw)).animate({
						"margin-left": 0
					}, sp, function() {
						cul.find("li").eq(1).addClass("current").siblings().removeClass("current");
						var mincur = $(".current").attr("index");
						minprev(mincur);
					})
				};
				minc.find("li").click(function() {
					var curli = minc.find(".min_current").index();
					var maxcur = $(this).index();
					var marq;
					if(maxcur > curli) {
						marq = maxcur - curli;
						for(var i = 0; i < marq; i++) {
							cul.find("li:first").appendTo(cul);
							minprev(maxcur);
						}
					} else {
						marq = curli - maxcur;
						for(var i = 0; i < marq; i++) {
							cul.find("li:last").prependTo(cul);
							minprev(maxcur);
						}
					}
				});
				function minprev(mincur) {
					minc.find("li").eq(mincur).addClass("min_current").siblings().removeClass("min_current");
				};
			});
		</script>
	</body>

</html>