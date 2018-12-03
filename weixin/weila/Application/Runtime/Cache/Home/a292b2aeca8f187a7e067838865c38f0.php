<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>在线应聘</title>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
	</head>

	<body>
		<!--顶部-->
		<div class="header">
			<div class="welcome">
				<div class="welcome-left">您好！<?php echo ($company_introduce["ci_name"]); ?>!</div>
			</div>
			<div class="logo">
				<div class="logo-center">
					<div class="logo-left">
						<a href="javascript;"><img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." /></a>
					</div>
					<div class="logo-right">
						<div><img src="/Public/Home/images/rexian.png" alt="..." /><span><?php echo ($company_introduce["ci_telephone"]); ?></span></div>
					</div>
				</div>
			</div>
			<div class="nav">
		<div class="nav-center">
			<ul>
				<li>
					<a href="/index.php/Home/Index/index" target="__parent__" >网站首页</a>
				</li>
				
				 <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
					<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>
						<ul class="hide">
						<?php if(is_array($navarr[$k-1])): $i = 0; $__LIST__ = $navarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo ($vo["nav_url"]); ?>/nav_id/<?php echo ($vo["nav_id"]); ?>"><?php echo ($vo["nav_name"]); ?></a>
							    </li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	<input type="hidden" class="navcss" value="<?php echo ($navfirst["nav_name"]); ?>">
		</div>
		<!--图片-->
		<div class="exclusive" style="background: url(<?php echo ($background_image_Data[0]["bi_image"]); ?>)no-repeat top center;height: 300px;background-size: 100% 100%;width:100%;"></div>
		<!--在线应聘-->
		<div class="line">在线应聘</div>
		<!--应聘信息-->
		<!-- /index.php/Admin/Talent/employee_add/jid/<?php echo ($job["jid"]); ?> -->
		<div class="information">
			<div class="information-top">您应聘的是：<span><?php echo ($company_introduce["ci_name"]); ?>-<?php echo ($job["jname"]); ?>-<?php echo ($job["jjob"]); ?></span>，请填写以下资料后提交您的应聘信息。</div>
			<form action="" method="post" id="into">
				<div><span>姓名：</span><input type="text" value="" name="tname" class="nameVal" /><span><span style="color: #FF0000;">*</span>如：王先生</span>
				</div>
				<div>
					<div><span>年龄：</span><input type="text" value="" name="tage" /></div>
					<div>性别：<input type="radio" name="tsex" checked="checked" value="0" />男&nbsp;&nbsp;&nbsp;<input type="radio" name="tsex" value="1" />女</div>
				</div>
				<div><span>电话：</span><input type="text" value="" name="ttelephone" class="phoneVal" /><span><span style="color: #FF0000;">*</span>11位手机或座机</span>
				</div>
				<div><span>邮箱：</span><input type="text" name="temail" /></div>
				<div><span>地址：</span><input type="text" value="" name="taddress" class="adres" /><span><span style="color: #FF0000;">*</span>您的详细通讯地址</span>
				</div>
				<div class="text">
					<div>
						<p>教育</p>
						<p>经历：</p>
					</div>
					<textarea name="teducation" rows="10" cols="45">
					</textarea>
					<span> 最多可输入256个字</span>
				</div>
				<div class="text">
					<div>
						<p>工作</p>
						<p>经历：</p>
					</div>
					<textarea name="tworking" rows="10" cols="45">
					</textarea>
					<span> 最多可输入256个字</span>
				</div>
				<div class="text">
					<div>
						<p>其他</p>
						<p>信息：</p>
					</div>
					<textarea name="tmessage" rows="10" cols="45">
					</textarea>
					<span> 最多可输入256个字</span>
				</div>
				<input type="hidden" class="jjob" value="<?php echo ($job["jid"]); ?>">
				<div><input type="button" name="" id="btn" value="提交您的应聘信息" /></div>
			</form>
		</div>
		<!--公司地址-->
		<div class="footer-nav">
	<ul>
		<li>
			<a href="/index.php/Home/Index/index">网站首页</a>
		</li>
		<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>

			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(".nav-center>ul").children("li").removeClass("nav-centerBack");
		$(".sub-nav>ul").children("li").removeClass("on");
		// 循环导航菜单样式
		var val = $(".navcss").val();
		var headerLength = $(".nav-center>ul>li").length;
		for(var k = 0; k < headerLength; k++) {
			var valTxt = $(".nav-center>ul").children("li").eq(k).children("a").text();
			if(valTxt == val) {
				$(".nav-center>ul").children("li").eq(k).addClass("nav-centerBack");
			}
		}
		var headerLength11 = $(".sub-nav>ul>li").length;
		for(var k = 0; k < headerLength; k++) {
			var nam = $(".sub-nav>ul").children("li").eq(k).children("a").text();
			if(nam == val) {
				$(".sub-nav>ul").children("li").eq(k).addClass("on");
				$(".sub-nav>ul").children("li").eq(k).children("a").css('color', 'red');
			}
		}
	})
</script>
		<div class="address">
			<div class="address-center">
				<div><img src="<?php echo ($background_image_Data[1]["bi_image"]); ?>" alt="..." style="width: 425px;height: 66px;" /></div>
				<div>
					<div>服务热线：<span><?php echo ($footer["ftelephone"]); ?></span></div>
					<div>地址：<?php echo ($footer["faddress"]); ?></div>
					<div>传真：<?php echo ($footer["ffax"]); ?></div>
					<div>邮箱：<?php echo ($footer["femail"]); ?></div>
					<div>备案号： <?php echo ($footer["frecord"]); ?></div>
					<div>技术支持：泰雁科技</div>
				</div>
				<div><img src="<?php echo ($footer["ferweima"]); ?>" alt="..." style="width: 130px;height:130px;" /></div>
			</div>
		</div>
		<div class="tb"><img src="/Public/Home/images/TB.png" alt="..." /></div>
		<div class="bg"></div>
		<div class="Sidebar">
			<div>
				<a href="javascript;"></a>
			</div>
			<div class="code"><img src="/Public/Home/images/ewm.png" alt="..." /></div>
			<div class="phone">
				<a href="javascript;">029-86353092</a>
			</div>
			<div class="top" style="display: none;">

			</div>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<!--<script src="js/slider.js" type="text/javascript" charset="utf-8"></script>-->
		<script type="text/javascript">
			$(function() {
				$(window).on('scroll', function() {
					var scrollTop = $(this).scrollTop();
					if($(window).scrollTop() >= 300) {
						$('.top').show();
					} else if(scrollTop == 0) {
						$('.top').hide();
					}
				});
				$('.top').click(function() {
					$('html,body').animate({
						scrollTop: 0
					});
				});
				$("#btn").click(function() {
					var Name = $(".nameVal").val();
					var adres = $(".adres").val();
					var Phone = $(".phoneVal").val();
					if(Name == "" || Name == null) {
						alert('姓名不能为空!');
						return false;
					}else{
						var textVal= /^[\u4E00-\u9FA5]{2,10}$/;
						if(textVal.test(Name)==false){
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
					if(adres == "" || adres == null) {
						alert('地址不能为空!');
						return false;
					}else{
						var textVal= /^[\u4E00-\u9FA5]$/;
						if(textVal.test(adres)==false){
							alert('地址格式不正确!');
							return false;
						}
					}
					var jid11 = $('.jjob').val();
					var tname = $('input[name="tname"]').val();
					var tage = $('input[name="tage"]').val();
					var tsex = $('input[name="tsex"]').val();
					var ttelephone = $('input[name="ttelephone"]').val();
					var temail = $('input[name="temail"]').val();
					var taddress = $('input[name="taddress"]').val();
					var teducation = $('input[name="teducation"]').val();
					var tworking = $('input[name="tworking"]').val();
					var tmessage = $('input[name="tmessage"]').val();
					$.ajax({
						url: '/index.php/Home/Public/bbb/jid'+jid11,
						type: 'post',
						data: {
							tname: tname,
							tage: tage,
							tsex: tsex,
							ttelephone: ttelephone,
							temail: temail,
							taddress: taddress,
							teducation: teducation,
							tworking: tworking,
							tmessage: tmessage
						},
						success: function(data) {
							console.log(jid11);
							if(data==true){
								alert('申请成功');
								window.location.href="/index.php/Home/Index/recruit1/jid/"+jid11;
							}else{
								alert('申请失败');
								window.location.href="/index.php/Home/Index/recruit1/jid/"+jid11;
							}
							
						}
					})
				})
			})
		</script>
	</body>
</html>