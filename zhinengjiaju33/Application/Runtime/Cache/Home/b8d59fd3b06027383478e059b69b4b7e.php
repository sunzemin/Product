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
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/animate.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/layui.css" />
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
					<!--<div class="EuropeanStyle">
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
					</div>-->
				</div>
				<div id="demo1"></div>
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
		<script src="/Public/Home/js/wow.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				wow = new WOW({
					animateClass: 'animated',
				});
				wow.init();
				$('.hide1').hide();
				$(document).on('mouseenter', '.show>a', function() {
					$(this).children('.hide1').slideUp();
				})
				$(document).on('mouseleave', '.show>a', function() {
					$(this).children('.hide1').slideDown();
				})

				var nav = $('.nav_id').val();
				$.ajax({
					type: "post",
					url: "/index.php/Home/Public/selquanwu",
					async: true,
					data: {
						'nav_id': nav,
						'p': 1
					},
					success: function(data) {
						layui.use(['laypage', 'layer'], function() {
							var laypage = layui.laypage,
								layer = layui.layer;
							//完整功能
							laypage.render({
								elem: 'demo1',
								count: data.allcount,
								theme: '#024b97',
								limit: 1,
								jump: function(obj, first) {
									//									console.log('哦哦哦', obj);
									var ind = $('#demo1>div>a').length;
									var len = $('#demo1>div>span').length;
									for(var k = 0; k < ind; k++) {
										var hhh = $('#demo1>div').children('a').eq(k - 1).outerWidth(true);
									}
									for(var i = 0; i < len; i++) {
										var sss = $('#demo1>div').children('span').eq(i - 1).outerWidth(true);
									}
									var kkk = hhh * ind;
									var ooo = sss * len;
									var wid = kkk + ooo;
									var widt = $("#demo1").width(wid + 80);
									$('#demo1').css({
										'margin': '0 auto',
										'text-align':'center'
									});
									$.ajax({
										url: '/index.php/Home/Public/selquanwu',
										dataType: 'json',
										type: 'post',
										data: {
											'nav_id': nav,
											'p': 1
										},
										success: function(data) {
											console.log("数据", data);
											$(".style").children().remove();
											for(var i = 0; i < data.alldatall.length; i++) {
												console.log('pppppp',i);
												if(i == 1) {
													$(".style").children().eq(1).remove();
													var cont = '<div class="EuropeanStyle"><div class = "EuropeanStyle-right show"><a href = "/index.php/Home/Index/quanwujichengxiangqing/lc_id/'+data.alldatall[1][0].classify_article.lc_id+'/nav_id/<?php echo ($nav_id); ?>" class = "animated bounceInDown"><div><img src = "' +
														data.alldatall[1][0].classify_article.ca_image +
														'" alt = "..." /></div><div class = "hide1">' +
														data.alldatall[1][0].little_classify_res.lc_name +
														'</div></a><a href = "/index.php/Home/Index/quanwujichengxiangqing/lc_id/'+data.alldatall[1][1].classify_article.lc_id+'/nav_id/<?php echo ($nav_id); ?>" class ="animated bounceInUp"><div><img src = "' +
														data.alldatall[1][1].classify_article.ca_image +
														'"alt = "..." /></div><div class = "hide1">' +
														data.alldatall[1][1].little_classify_res.lc_name +
														'</div></a></div><div class = "EuropeanStyle-left show animated bounceInLeft"><a href = "/index.php/Home/Index/quanwujichengxiangqing/lc_id/'+data.alldatall[1][2].classify_article.lc_id+'/nav_id/<?php echo ($nav_id); ?>"><div><img src = "' +
														data.alldatall[1][2].classify_article.ca_image +
														'" alt = "..." /></div><div class = "hide1">' +
														data.alldatall[1][2].little_classify_res.lc_name +
														'</div></a></div></div>';
													$('.style').append(cont);
												}else{
													var con = '<div class = "EuropeanStyle" ><div class = "EuropeanStyle-left show animated bounceInLeft" ><a href = "/index.php/Home/Index/quanwujichengxiangqing/lc_id/'+data.alldatall[i][0].classify_article.lc_id+'/nav_id/<?php echo ($nav_id); ?>"><div><img src = "' +
													data.alldatall[i][0].classify_article.ca_image +
													'" alt = "..." /></div><div class = "hide1">' +
													data.alldatall[i][0].little_classify_res.lc_name +
													'</div></a></div><div class = "EuropeanStyle-right show"><a href = "/index.php/Home/Index/quanwujichengxiangqing/lc_id/'+data.alldatall[i][1].classify_article.lc_id+'/nav_id/<?php echo ($nav_id); ?>" class = "animated bounceInDown"><div><img src = "' +
													data.alldatall[i][1].classify_article.ca_image +
													'" alt = "..." / ></div><div class = "hide1">' +
													data.alldatall[i][1].little_classify_res.lc_name +
													'</div></a><a href = "/index.php/Home/Index/quanwujichengxiangqing/lc_id/'+data.alldatall[i][2].classify_article.lc_id+'/nav_id/<?php echo ($nav_id); ?>" class ="animated bounceInUp"><div><img src = "' +
													data.alldatall[i][2].classify_article.ca_image +
													'"alt = "..." /></div><div class = "hide1">' +
													data.alldatall[i][2].little_classify_res.lc_name +
													'</div></a></div></div>';
													$('.style').append(con);
												}
											}
										},
										error: function() {
											alert('hghfhhhffh');
										}
									});
								}
							});
						});
					},
					error: function() {
						alert('bgfdhgrhr');
					}
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