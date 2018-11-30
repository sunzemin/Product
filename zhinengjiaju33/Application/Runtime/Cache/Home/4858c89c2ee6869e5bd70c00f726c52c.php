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
		<div class="NavigationBack hide">
			<ul style="margin-left: 748px;">
				<?php if(is_array($product_classify_res)): $i = 0; $__LIST__ = $product_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product_classify): $mod = ($i % 2 );++$i;?><li>
						<?php echo ($product_classify["pc_name"]); ?><input type="hidden" class="pc_id" value="<?php echo ($product_classify["pc_id"]); ?>" />
						<input type="hidden" class="pc_name" value="<?php echo ($product_classify["pc_name"]); ?>" />
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="banner">
			<img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." />
		</div>
		<!--内容-->
		<section>
			<div class="ProductCenter">
				<div class="ProductCenter-top">
					<div><img src="/Public/Home/img/img58.png" alt="..." /></div>
					<div>智能锁</div>
				</div>
				<div class="lock">
				</div>
				<div id="demo2"></div>
			</div>
		</section>
		<input type="hidden" class="nav_id" value="<?php echo ($nav_id); ?>" />
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
		<script src="/Public/Home/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				var allcontent = 0;
				//				二级导航改变样式
				$('.NavigationBack>ul>li').click(function() {
					var ind = $(this).index();
					$('.NavigationBack>ul').children('li').eq(ind).addClass('headCorol').siblings().removeClass('headCorol');
				});
				//				鼠标滑过事件
				$(document).on('mouseenter', '.lockDisplay', function() {
					$(this).children('div').eq(1).removeClass().addClass("blue");
				});
				$(document).on('mouseleave', '.lockDisplay', function() {
					$(this).children('div').eq(1).removeClass().addClass("black");
				});

				var p = 1;
				var btn = Number($('#btn').val());
				var leng = $('.NavigationBack>ul>li').length;
				for(var t = 0; t < leng; t++) {
					var lc = $('.NavigationBack>ul>li').eq(t).children('input').val();
				}
				//页面初始化加载默认分类内容
				//获取默认第一个分类ID
				var nav_id=$('.nav_id').val();
				var pc_id = $('.pc_id').val();
				var pc_name = $('.pc_name').val();
				//获取页面默认数据总数	
				$.ajax({
					url: '/index.php/Home/Public/selproductclassify',
					type: 'get',
					success: function(data) {
						allcontent = data.allcount;
						layui.use(['laypage', 'layer'], function() {
							var laypage = layui.laypage,
								layer = layui.layer;
							//完整功能
							laypage.render({
								elem: 'demo2',
								count: allcontent,
								theme: '#024b97',
								limit: 1,
								jump: function(obj, first) {
									$pageid = obj.curr;
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
										type: "post",
										url: "/index.php/Home/Public/selproduct",
										data: {
											'p': 1,
											'pc_id': pc_id
										},
										async: true,
										success: function(data) {
											$(".lock").children().remove();
											for(var n = 0; n < data.product_res.length; n++) {
												var con = '<a href="/index.php/Home/Index/chanpinxiangqing/nav_id/'+nav_id+'/pc_id/'+pc_id+'/pid/'+data.product_res[n].pid+'"><div class = "lockDisplay"><div><div><img src = "' +
													data.product_res[n].pimage +
													'"alt = "..." /></div></div><div>' +
													data.product_res[n].pname +
													'</div></div></a>';
												$('.lock').append(con);
											}
										},
										error: function() {
											alert('请求异常！');
										}
									});
								}
							});
						});
					},
					error: function() {
						alert('hghfhhhffh');
					}
				})
				var pc_id = $('.pc_id').val();
				//				点击事件加载
				$(".NavigationBack>ul>li").click(function() {
					var pc_id = $(this).children('.pc_id').val();
					$.ajax({
						url: '/index.php/Home/Public/selproduct',
						dataType: 'json',
						type: 'post',
						data: {
							'p': 1,
							'pc_id': pc_id
						},
						success: function(data) {
							if(pc_id == data.product_classify123.pc_id) {
								$(".ProductCenter-top").children("div").eq(1).text(data.product_classify123.pc_name);
							}

						},
						error: function() {
							alert('hghfhhhffh');
						}
					});
					$.ajax({
						type: "post",
						url: "/index.php/Home/Public/selproduct",
						data: {
							'p': 1,
							'pc_id': pc_id
						},
						async: true,
						success: function(data) {
							allcontent = data.allcount;
							layui.use(['laypage', 'layer'], function() {
								var laypage = layui.laypage,
									layer = layui.layer;
								//完整功能
								laypage.render({
									elem: 'demo2',
									count: allcontent,
									theme: '#024b97',
									limit: 1,
									jump: function(obj, first) {
										$pageid = obj.curr;
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
											type: "post",
											url: "/index.php/Home/Public/selproduct",
											async: true,
											data: {
												'p': 1,
												'pc_id': pc_id
											},
											success: function(data) {
												$(".lock").children().remove();
												for(var n = 0; n < data.product_res.length; n++) {
													var con = '<a href="/index.php/Home/Index/chanpinxiangqing/nav_id/'+nav_id+'/pc_id/'+pc_id+'/pid/'+data.product_res[n].pid+'"><div class = "lockDisplay"><div><div><img src = "' +
														data.product_res[n].pimage +
														'"alt = "..." /></div></div><div>' +
														data.product_res[n].pname +
														'</div></div></a>';
													$('.lock').append(con);
												}
											},
											error: function() {
												alert('m,,,,');
											}
										});
									}
								});
							});
						},
						error: function() {
							alert('mmmmmm');
						}
					});
				})

				$('.headCorol').mouseenter(function(){
					$('.NavigationBack').slideDown();
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