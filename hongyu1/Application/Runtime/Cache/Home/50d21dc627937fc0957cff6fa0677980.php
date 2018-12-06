<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title><?php echo ($navben["nav_name"]); ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
		<link rel="shortcut icon" href="/Public/Home/img/ic.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/layui-v2.4.5/layui/css/layui.css" />
		<script src="/Public/Home/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
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
		<!--banner-->
		<div class="banner"><img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" alt="..." /></div>
		<!--活动策划案例-->
		<div class="case">
			<div class="content-five">
				<ul class="contentbox-five ul_five">
					<!--<li class="con-five">
						<img class="conimg" src="<?php echo ($classify_article["ca_image"]); ?>" alt="..." />
						<div class="txt-five">
							<h3><?php echo ($little_classify["lc_name"]); ?></h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/Home/img/img11.png" alt="..." />
						<div class="txt-five">
							<h3>FAD会议策划</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/Home/img/img12.png" alt="..." />
						<div class="txt-five">
							<h3>大唐芙蓉园冰激凌节</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/Home/img/img13.png" alt="..." />
						<div class="txt-five">
							<h3>地产活动</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/Home/img/img14.png" alt="..." />
						<div class="txt-five">
							<h3>封顶仪式</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/Home/img/img15.png" alt="..." />
						<div class="txt-five">
							<h3>高信隆西安分公司开业</h3>
						</div>
					</li>
					<li class="con-five five">
						<img class="conimg con" src="/Public/Home/img/img17.png" alt="..." />
						<div class="txt-five">
							<h3>婚礼</h3>
						</div>
					</li>-->
				</ul>
			</div>
		</div>
		<input type="hidden" value="<?php echo ($nav_id); ?>" class="nav_id" />
		<div id="demo4"></div>
		<!--底部-->
		<div class="footer">
	<div><?php echo ($footer["introduce"]); ?></div>
	<div>|  
		<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i; echo ($navs["nav_name"]); ?>  |<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
	<div><?php echo ($footer["copyright"]); ?> <?php echo ($footer["record"]); ?> 技术支持：泰雁科技</div>
</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/Home/layui-v2.4.5/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				/*鼠标悬停图片放大*/
				$(document).on('mouseenter','.five',function(){
					$(this).find(".con").stop().animate({
						"width": 450,
						"height": 293
					});
				});
				$(document).on('mouseleave','.five',function(){
					$(this).find(".con").stop().animate({
						"width": 390,
						"height": 283
					});
				});

				//				导航二级菜单
				$('.activity').mouseenter(function() {
					$('.nav_ul').show();
				});
				$('.activity').mouseleave(function() {
					$('.nav_ul').hide();
				});

				var p = 1;
				var nav_id = $('.nav_id').val();
				$.ajax({
					url: '/index.php/Home/Public/selAllData',
					dataType: 'json',
					type: 'post',
					data: {
						'p': p,
						'nav_id': nav_id
					},
					success: function(data) {
						console.log('数据', data);
						//分页方法
						layui.use(['laypage', 'layer'], function() {
							var laypage = layui.laypage,
								layer = layui.layer;
							//完整功能
							laypage.render({
								count: data.allpage,
								elem: 'demo4',
								first: false,
								last: false,
								theme: '#e60012',
								limit: 1,
								jump: function(obj, first) {
									var ind = $('#demo4>div>a').length;
									var len = $('#demo4>div>span').length;
									for(var k = 0; k < ind; k++) {
										var hhh = $('#demo4>div').children('a').eq(k - 1).outerWidth(true);
									}
									for(var i = 0; i < len; i++) {
										var sss = $('#demo4>div').children('span').eq(i - 1).outerWidth(true);
									}
									var kkk = hhh * ind;
									var ooo = sss * len;
									var wid = kkk + ooo;
									var widt = $("#demo4").width(wid + 80);
									$('#demo4').css({
										'margin': '0 auto'
									});
									$.ajax({
										url: '/index.php/Home/Public/selAllData',
										dataType: 'json',
										type: 'post',
										data: {
											'p': obj.curr,
											'nav_id': nav_id
										},
										success: function(data) {
											$('.contentbox-five').children().remove();
											for(var i = 0; i < data.classify_article_res.length; i++) {
												var con = '<li class="con-five five"><img class="conimg con" src="' +
													data.classify_article_res[i].ca_image +
													'" alt="..." /><div class="txt-five"><h3>' +
													data.classify_article_res[i].ca_title + '</h3></div></li>';
												$('.contentbox-five').append(con);
											}

										},
										error: function() {
											alert('hghfhhhffh');
										}
									})
								}
							});
						});
					},
					error: function() {
						alert('desrtg');
					}
				});
			});
		</script>
	</body>

</html>