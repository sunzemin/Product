<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		
		<title><?php echo ($navres[0]["nav_name"]); ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
		<link rel="shortcut icon" href="/Public/Home/img/ic.ico" type="image/x-icon" />
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=UoZYbubqTRqPAY6ptP4Hs5TcyciLHxYN"></script>
	</head>

	<body>
		<!--头部-->
		<div class="top">
	<div class="logo">
		<img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." />
	</div>
	<div class="contact">
		<div class="service">服务热线:</div>
		<div class="Telephone">
			<div><?php echo ($footer["telephone"]); ?></div>
			<div><?php echo ($footer["telephone1"]); ?></div>
		</div>
		<div class="Telephone">
			<div><?php echo ($footer["mobile"]); ?></div>
			<div><?php echo ($footer["mobile1"]); ?></div>
		</div>
	</div>
</div>
<div class="nav">
	<ul>
		<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navfirst): $mod = ($k % 2 );++$k; if($navsec[$k-1] == null): ?><li>
					<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
						<?php else: ?>
						<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
				</li>
				<?php else: ?>
				<li class="activity">
					<?php if($navfirst["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navfirst["nav_name"]); ?></a>
						<?php else: ?>
						<a href="<?php echo ($navfirst["nav_url"]); ?>/nav_id/<?php echo ($navfirst["nav_id"]); ?>"><?php echo ($navfirst["nav_name"]); ?></a><?php endif; ?>
					<ul class="nav_ul">
					<?php if(is_array($navsec[$k-1])): $i = 0; $__LIST__ = $navsec[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navsecond): $mod = ($i % 2 );++$i;?><li>
							<?php if($navsecond["nav_url"] == ''): ?><a href="javascript:;"><?php echo ($navsecond["nav_name"]); ?></a>
							    <?php else: ?>
							    <a href="<?php echo ($navsecond["nav_url"]); ?>/nav_id/<?php echo ($navsecond["nav_id"]); ?>"><?php echo ($navsecond["nav_name"]); ?></a><?php endif; ?>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<input type="hidden" value="<?php echo ($navben["nav_name"]); ?>" class="nav_name"/>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var len=$('.nav>ul>li').length;
		var nav_name=$('.nav_name').val();
		for(var i=0;i<len;i++){
			var cont=$('.nav>ul').children('li').eq(i).children('a').text();
			if(nav_name==cont){
				$('.nav>ul').children('li').eq(i).children('a').addClass('headCorol');
			}
			
		}
	})
</script>
		<!--轮播-->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..." /></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
		<!--场景布置-->
		<div class="scene">
			<?php if(is_array($home_classify_res)): $k = 0; $__LIST__ = $home_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$home_classify): $mod = ($k % 2 );++$k;?><div class="scene_classification">
					<div class="scene_img"><img src="<?php echo ($home_classify["hc_titleimage"]); ?>" alt="..." /></div>
					<div class="Plan"><?php echo ($home_classify["hc_name"]); ?></div>
					<ul>
						<?php if(is_array($home_little_classify_res[$k-1])): $i = 0; $__LIST__ = $home_little_classify_res[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$home_little_classify): $mod = ($i % 2 );++$i;?><li><?php echo ($home_little_classify["hlc_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!--活动策划案例-->
		<div class="case">
			<div class="case_top">
				<span><?php echo ($all_classify_res[1]["ac_name"]); ?></span>
				<span>show case</span>
			</div>
			<div class="content-five">
				<ul class="contentbox-five">
					<?php if(is_array($little_classify_res[1])): $k = 0; $__LIST__ = $little_classify_res[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($k % 2 );++$k;?><li class="con-five">
							<img class="conimg" src="<?php echo ($classify_article_res[1][$k-1]["ca_image"]); ?>" alt="..." />
							<div class="txt-five">
								<h3><?php echo ($little_classify["lc_name"]); ?></h3>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<!--我们不是大牌  但我们创造大牌-->
		<div class="create">
			<div class="create_top">
				<div>我们不是大牌 但我们创造大牌</div>
			</div>
			<div class="advantage">
				<div class="advantage_title">
					<span>我们的优势</span>
					<span>advantages</span>
				</div>
				<div class="Technological">
					<?php if(is_array($all_head_Data)): $i = 0; $__LIST__ = $all_head_Data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$all_head): $mod = ($i % 2 );++$i;?><div class="Technological_div">
							<div class="Technological_img"><img src="<?php echo ($all_head["ah_image"]); ?>" alt="..." /><img src="<?php echo ($all_head["ah_hideimage"]); ?>" alt="..." class="hide" /></div>
							<div class="Technological_text"><?php echo ($all_head["ah_title1"]); ?></div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<!--活动现场  -->
		<div class="case">
			<div class="case_top top_padding">
				<span><?php echo ($all_classify_res[2]["ac_name"]); ?></span>
				<span>Activity scene</span>
			</div>
			<div class="content-five">
				<ul class="contentbox-five">
					<?php if(is_array($little_classify_res[2])): $k = 0; $__LIST__ = $little_classify_res[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($k % 2 );++$k;?><li class="con-five">
							<img class="conimg" src="<?php echo ($classify_article_res[2][$k-1]["ca_image"]); ?>" alt="..." />
							<div class="txt-five">
								<h3><?php echo ($little_classify["lc_name"]); ?></h3>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<!--关于我们-->
		<div class="about_us">
			<div class="case_top top_padding">
				<span>关于我们</span>
				<span>About us</span>
			</div>
			<div class="aboutUs_content">
				<div class="aboutUsContent_left">
					<?php if(is_array($classify_article_res123)): $i = 0; $__LIST__ = $classify_article_res123;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article123): $mod = ($i % 2 );++$i;?><a href="javascript:;">
							<div class="festival"><img src="<?php echo ($classify_article123["ca_image"]); ?>" alt="..." /></div>
							<div class="festival_right">
								<div><?php echo ($classify_article123["ca_title"]); ?></div>
								<div><?php echo ($classify_article123["ca_content"]); ?>
								</div>
							</div>
						</a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="aboutUsContent_center">
					<p>
						<?php echo ($company_introduce["ci_content"]); ?>
					</p>
				</div>
				<div class="aboutUsContent_right">
					<img src="<?php echo ($company_introduce["ci_image"]); ?>" alt="..." />
				</div>
			</div>
		</div>
		<!--活动策划资讯-->
		<div class="activity">
			<div class="case_top top_padding">
				<span>活动策划资讯  </span>
				<span>news</span>
			</div>
			<div class="information">
				<?php if(is_array($little_classify_res[0])): $i = 0; $__LIST__ = $little_classify_res[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($i % 2 );++$i;?><div><?php echo ($little_classify["lc_name"]); ?><input type="hidden" class="lc_id" value="<?php echo ($little_classify["lc_id"]); ?>" /></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="activity_bot">
			</div>
		</div>
		<!--联系我们-->
		<div class="Contact">
			<div class="Contact-left">
				<div id="allmap"></div>
				<input type="hidden" class="heng" value="<?php echo ($map["heng"]); ?>" />
				<input type="hidden" class="zong" value="<?php echo ($map["zong"]); ?>" />
				<div class="adree"><?php echo ($company_introduce["ci_name"]); ?></div>
				<div class="fillIn">
					<div class="fillIn_title">填写您的项目</div>
					<div class="fillIn_input">
						<input type="text" placeholder="您的姓名" class="nameVal"/>
						<input type="text" placeholder="您的电话" class="phoneVal"/>
						<input type="text" placeholder="您的微信" class="weixin"/>
						<input type="text" placeholder="您的邮箱" class="youxiang"/>
						<textarea placeholder="留言备注"></textarea>
						<input type="button" value="提交" class="subMit"/>
					</div>
				</div>
			</div>
			<div class="Contact-right">
				<div class="ContactR_title">联系<span>我们</span></div>
				<div>庆典专家精心为您服务！</div>
				<div class="ContactR_bot">
					<div class="ContactRbot_left">
						<div class="ContactRbot_left_top">
							<div><img src="/Public/Home/img/img38.png" alt="..." /><span>服务热线:</span></div>
							<div><?php echo ($footer["telephone"]); ?></div>
							<div><?php echo ($footer["telephone1"]); ?></div>
						</div>
						<div class="ContactRbot_left_top">
							<div><img src="/Public/Home/img/img40.png" alt="..." class="img1" /><span>QQ:</span></div>
							<div><?php echo ($footer["qq"]); ?>（客服1）</div>
							<div><?php echo ($footer["qq1"]); ?>（客服1）</div>
						</div>
					</div>
					<div class="ContactRbot_left">
						<div class="ContactRbot_left_top">
							<div><img src="/Public/Home/img/img39.png" alt="..." class="img2" /><span>服务热线:</span></div>
							<div><?php echo ($footer["mobile"]); ?></div>
							<div><?php echo ($footer["mobile1"]); ?></div>
						</div>
						<div class="ContactRbot_left_top">
							<div><img src="/Public/Home/img/img41.png" alt="..." class="img3" /><span>地址:</span></div>
							<div><?php echo ($footer["address"]); ?></div>
						</div>
					</div>
					<div class="WeChat">
						<div class="WeChat_top"><img src="<?php echo ($footer["wx_erweima"]); ?>" alt="..." /></div>
						<div>官方微信</div>
					</div>
				</div>
			</div>
		</div>
		<!--底部-->
		<div class="footer">
	<div><?php echo ($footer["introduce"]); ?></div>
	<div>|  
		<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i; echo ($navs["nav_name"]); ?>  |<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
	<div><?php echo ($footer["copyright"]); ?> <?php echo ($footer["record"]); ?> 技术支持：泰雁科技</div>
</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/Home/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				var heng = $('.heng').val();
				var zong = $('.zong').val();
				//				轮播图
				var swiper = new Swiper('.swiper-container', {
					pagination: {
						el: '.swiper-pagination',
					},
				});
				$('.information>div').click(function(){
					$(this).addClass('info').siblings().removeClass();
				})
				//				活动策划轮播
//				var swiper = new Swiper('.swiper-container1', {
//					spaceBetween: 30,
//					centeredSlides: true,
//					autoplay: {
//						delay: 2500,
//						disableOnInteraction: false,
//					},
//					pagination: {
//						el: '.swiper-pagination1',
//						clickable: true,
//					},
//				});
				//				导航二级菜单
				$('.activity').mouseenter(function() {
					$('.nav_ul').show();
				});
				$('.activity').mouseleave(function() {
					$('.nav_ul').hide();
				});

				/*鼠标悬停图片放大*/
				$(".con-five").hover(function() {
					$(this).find(".conimg").stop().animate({
						"width": 310,
						"height": 240
					});
				}, function() {
					$(this).find(".conimg").stop().animate({
						"width": 297,
						"height": 240
					});
				});
				//				我们的优势滑过图片改变
				$('.Technological_div').mouseenter(function() {
					$(this).children('.Technological_img').children('img').eq(1).show().siblings().hide();
				});
				$('.Technological_div').mouseleave(function() {
					$(this).children('.Technological_img').children('img').eq(0).show().siblings().hide();
				});
				// 百度地图API功能
				var map = new BMap.Map("allmap");
				var point = new BMap.Point(heng, zong);
				map.centerAndZoom(point, 15);

				var marker = new BMap.Marker(new BMap.Point(heng, zong)); // 创建点	
				//添加覆盖物

				map.addOverlay(marker); //增加点

				//清除覆盖物
				
				$('.information>div').click(function(){
					$(this).addClass('info').siblings().removeClass();
				});

				//				活动策划资讯
					var lc_id = $('.lc_id').val();
				
				$.ajax({
						type: "post",
						url: "/index.php/Home/Public/newsdata",
						async: true,
						data: {
							'lc_id': lc_id,
							'p': 1
						},
						success: function(data) {
							console.log('uuuuu', data.classify_article_res[0]);
							$('.activity_bot').children().remove();
							for(var i = 0; i < data.classify_article_res.length; i++) {
								var con = '<div class="activityBot_lft"><div class="swiper-container1 swiper-container"><div class="swiper-wrapper1 swiper-wrapper"><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div></div><div class="swiper-pagination1 swiper-pagination"></div></div></div><div class="activityBot_center"><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a></div><div class="activityBot_right"><div class="Celebrate_top"><img src="'+
									data.classify_article_res[i].ca_image+
									'" alt="..." /></div><div class="Celebrate_bot"><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a></div></div>';

							}
								$('.activity_bot').append(con);
							
							var swiper = new Swiper('.swiper-container1', {
								spaceBetween: 30,
								centeredSlides: true,
								autoplay: {
									delay: 2500,
									disableOnInteraction: false,
								},
								pagination: {
									el: '.swiper-pagination1',
									clickable: true,
								},
							});

						},
						error: function() {
							alert('yy');
						}
					});
				$('.information>div').click(function() {
					var lc_id = $(this).children('input').val();
					$.ajax({
						type: "post",
						url: "/index.php/Home/Public/newsdata",
						async: true,
						data: {
							'lc_id': lc_id,
							'p': 1
						},
						success: function(data) {
							console.log('uuuuu', data.classify_article_res[0]);
							$('.activity_bot').children().remove();
							for(var i = 0; i < data.classify_article_res.length; i++) {
								var con = '<div class="activityBot_lft"><div class="swiper-container1 swiper-container"><div class="swiper-wrapper1 swiper-wrapper"><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_title +
									'</div></div><div class="swiper-slide1 swiper-slide"><img src="' +
									data.classify_article_res[i].ca_image +
									'" alt="..." /><div class="slide_bot">' +
									data.classify_article_res[i].ca_image +
									'</div></div></div><div class="swiper-pagination1 swiper-pagination"></div></div></div><div class="activityBot_center"><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'</a></div><div class="activityBot_right"><div class="Celebrate_top"><img src="'+
									data.classify_article_res[i].ca_image+
									'" alt="..." /></div><div class="Celebrate_bot"><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a><a href="javascript:;">'+
									data.classify_article_res[i].ca_title+
									'<span>'+data.classify_article_res[i].ca_time+
									'</span></a></div></div>';

							}
								$('.activity_bot').append(con);
							
							var swiper = new Swiper('.swiper-container1', {
								spaceBetween: 30,
								centeredSlides: true,
								autoplay: {
									delay: 2500,
									disableOnInteraction: false,
								},
								pagination: {
									el: '.swiper-pagination1',
									clickable: true,
								},
							});

						},
						error: function() {
							alert('yy');
						}
					});
				});
				$(".subMit").click(function() {
						var Name = $(".nameVal").val();
						var Phone = $(".phoneVal").val();
						var weixin=$('.weixin').val();
						var youxiang=$('.youxiang').val();
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
						if(weixin == "" || Phone == null){
							alert('号码不能为空');
							return false;
						}
						if(youxiang == "" || Phone == null){
							alert('号码不能为空');
							return false;
						}else{
							var eamil=/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
							if(eamil.test(youxiang)==false){
								alert('邮箱格式不正确!');
								return false;
							}
						}
				});
			})
		</script>
	</body>

</html>