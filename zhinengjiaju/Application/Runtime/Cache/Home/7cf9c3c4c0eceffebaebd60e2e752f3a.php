<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博越智能家居-品牌荣誉</title>
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
		<div class="NavigationBack">
			<ul>
				<?php if(is_array($little_classify_res)): $k = 0; $__LIST__ = $little_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$little_classify): $mod = ($k % 2 );++$k; if($k == 1): ?><li>
							<a href="/index.php/Home/Index/pinpaijianjie/nav_id/<?php echo ($nav_id); ?>"><?php echo ($little_classify["lc_name"]); ?></a><input type="hidden" class="lc_id" value="<?php echo ($little_classify["lc_id"]); ?>" />
						</li>
						<?php else: ?>
						<li>
							<a href="/index.php/Home/Index/pinpairongyu/nav_id/<?php echo ($nav_id); ?>/lc_id/<?php echo ($little_classify["lc_id"]); ?>"><?php echo ($little_classify["lc_name"]); ?></a><input type="hidden" class="lc_id" value="<?php echo ($little_classify["lc_id"]); ?>" />
						</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="banner"><img src="/Public/Home/img/banner.png" alt="..." /></div>
		<!--内容-->
		<input type="text" class="lc_id" value="<?php echo ($lc_id); ?>" />
		<section>
			<div class="brandHonor">
				<div class="aboutTitle">
					<div>honor</div>
					<div>品牌荣誉</div>
				</div>
				<div class="brandHonor_img">
				</div>
				<div id="demo2"></div>
			</div>
		</section>
        <input type="hidden" class="erjiname" value="<?php echo ($little_classify12["lc_name"]); ?>"/>
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
//				二级导航改变样式
				var len = $('.NavigationBack>ul>li').length;
				console.log('你电脑',len);
				var data = $('.erjiname').val();
				for(var i = 0; i < len; i++) {
					var cont = $('.NavigationBack>ul').children('li').eq(i).children('a').text();
					if(data == cont) {
						$('.NavigationBack>ul').children('li').eq(i).children('a').addClass('headCorol');
					}
				}
				var lc = $('.lc_id').eq(1).val();
				console.log('id', lc);
				$.ajax({
					url: '/index.php/Home/Public/newsdata',
					dataType: 'json',
					type: 'post',
					data: {
						'lc_id': lc,
						'p': 1
					},
					success: function(data) {
						console.log('就感觉房管局', data);
						layui.use(['laypage', 'layer'], function() {
							var laypage = layui.laypage,
								layer = layui.layer;
							//完整功能
							laypage.render({
								elem: 'demo2',
								count: data.allcount,
								theme: '#024b97',
								limit: 1,
								jump: function(obj, first) {
									console.log('回复哈哈哈', obj);
									var ind = $('#demo2>div>a').length;
									var len = $('#demo2>div>span').length;
									for(var k = 0; k < ind; k++) {
										var hhh = $('#demo2>div').children('a').eq(k - 1).outerWidth(true);
									}
									for(var i = 0; i < len; i++) {
										var sss = $('#demo2>div').children('span').eq(i - 1).outerWidth(true);
									}
									var kkk = hhh * ind;
									var ooo = sss * len;
									var wid = kkk + ooo;
									var widt = $("#demo2").width(wid + 80);
									$('#demo2').css({
										'margin': '0 auto'
									});
									$.ajax({
										url: '/index.php/Home/Public/newsdata',
										type: 'post',
										data:{
											'lc_id':lc,
											'p':1
										},
										dataType: 'json',
										success: function(data) {
											$(".brandHonor_img").children().remove();
											for(var i = 0; i < data.classify_article_res.length; i++) {
												var con = '<a href="javascript:;" class="animated fadeInDown"><div class="brandHonorImg"><div><img src="' +
													data.classify_article_res[i].ca_image +
													'" alt="..." /></div></div><div class="brandHonorImg_bot">' + data.classify_article_res[i].ca_title + '</div></a>';
												$('.brandHonor_img').append(con);
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
						alert('hghfhhhffh');
					}
				})
				$('.headCorol').mouseenter(function(){
					$('.NavigationBack').slideDown();
				});
			});
		</script>
	</body>

</html>