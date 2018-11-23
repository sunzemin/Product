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
		<div class="banner"><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
		<!--内容-->
		<section>
			<div class="information">
				<div class="aboutTitle">
					<div>about</div>
					<div>博越资讯</div>
				</div>
				<div class="dynamic">
					<div class="dynamic_title">
						<div>
							<a href="javascript:;">企业动态</a>
						</div>
						<div>
							<a href="javascript:;">行业新闻</a>
						</div>
					</div>
					<div class="dynamic_content">
						<div class="dynamicCon hide"></div>
						<div class="dynamicCon"></div>
					</div>
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
		<script src="/Public/Home/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				$('.dynamic_title>div').mouseenter(function() {
					$(this).css({
						'background': '#014a96',
						'color': '#fff'
					});
					var ind = $(this).index();
					console.log('下标为', ind);
					$('.dynamic_content').children('div').eq(ind).show().siblings().hide();
				});
				$('.dynamic_title>div').mouseleave(function() {
					$(this).css({
						'background': '#fff',
						'color': '#000'
					});
				});

				//				分页ajax
				var lc = $('#btn').val();
				console.log('id', lc);
				$.ajax({
					type: "post",
					url: "/index.php/Home/Public/newsdata",
					async: true,
					dataType: 'json',
					data: {
						'lc_id': lc,
						'p': 1
					},
					success: function(data) {
						console.log('数据为', data);
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
									console.log('回复哈哈哈', obj);
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
										'margin': '0 auto'
									});
									$.ajax({
										url: '/index.php/Home/Public/newsdata',
										type: 'post',
										data: {
											'lc_id': lc,
											'p': 1
										},
										dataType: 'json',
										success: function(data) {
											console.log('还是得好好说说', data.classify_article_res);
											$(".dynamicCon").children().remove();
											for(var i = 0; i < data.classify_article_res.length; i++) {
												var con = '<a href="/index.php/Home/Index/xinwenxiangqing/ca_id/7/nav_id/<?php echo ($nav_id); ?>" class=" animated fadeInUp"><div class="trend_left"><img src="'+
												data.classify_article_res[i].ca_image+
												'" alt="..." /></div><div class="trend-right"><div>'+
												data.classify_article_res[i].ca_title+
												'</div><div>'+
												data.classify_article_res[i].ca_content+
												'</div><div>查看详情<span>>></span></div></div></a>';
												$('.dynamicCon').append(con);
											}
										},
										error: function() {
											alert('请求异常！');
										}
									})
								}
							});
						});
					},
					error: function() {
						alert('请求异常');
					}
				});
			});
		</script>
	</body>

</html>