<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="flexible" content="initial-dpr=2" />
		<title>在线应聘</title>
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Mobile/css/index.css" />
		<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	</head>

	<body>
		<!--顶部-->
		<div class="header">
			<div class="welcome">
				<div class="welcome-left">您好！<?php echo ($company_introduce["ci_name"]); ?>!</div>
				<div class="welcome-right">
					<a href="/">中&nbsp;&nbsp;文</a>
				</div>
			</div>
			<div class="logo">
				<div class="logo-center">
					<div class="logo-left">
						<a href="javascript;"><img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="..." /></a>
					</div>
					<div class="logo-right">
						<div><img src="/Public/Mobile/images/rexian.png" alt="..." /><span><?php echo ($company_introduce["ci_telephone"]); ?></span></div>
					</div>
				</div>
			</div>
			<!-- <div class="nav">
				<div class="nav-center">
					<ul>
						<li>
							<a href="/index.php/Mobile/Index/index" target="__parent__" >网站首页</a>
						</li>
						
						 <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
							<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>
								
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<input type="text" class="navcss" value="<?php echo ($navben["nav_name"]); ?>"> -->
<div class="nav">
	<div class="nav-center">
		<ul>
			<li>
				<a class="clickMenu" >
				网站首页
				
			</a>
			<input type="hidden" value="/index.php/Mobile/Index/index">
			</li>
			
			 <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
				<a class="clickMenu"><?php echo ($navs["nav_name"]); ?>
					
				</a>
				<input type="hidden" value="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>">
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
 <input type="hidden" class="navcss" value="<?php echo ($navben["nav_name"]); ?>"> 
		</div>
		<!--图片-->
		<div class="exclusive" style="background: url(<?php echo ($background_image_Data[0]["bi_image"]); ?>)no-repeat top center;height: 300px;"></div>
		<!--在线应聘-->
		<div class="line">在线应聘</div>
		<!--应聘信息-->
		<div class="information">
			<div class="information-top">您应聘的是：<span><?php echo ($job["jjob"]); ?></span>，请填写以下资料后提交您的应聘信息。</div>
			<form action="/index.php/Admin/Talent/employee_add/jid/<?php echo ($job["jid"]); ?>" method="post" id="into">
				<div><span>姓名：</span><input type="text" value="" name="tname" placeholder="*如：王先生" class="nameVal" />
				</div>
				<div>
					<div><span>年龄：</span><input type="text" value="" name="tage"/></div>
					<div>性别：&nbsp;&nbsp;&nbsp;<input type="radio" name="tsex" checked="checked" />男&nbsp;&nbsp;&nbsp;<input type="radio" name="tsex" />女</div>
				</div>
				<div><span>电话：</span><input type="text" value="" name="ttelephone" placeholder="*11位手机或座机" class="phoneVal" />
				</div>
				<div><span>邮箱：</span><input type="text" name="temail" /></div>
				<div><span>地址：</span><textarea name="taddress" rows="5" cols="40" class="adres"></textarea><span><span style="color: #FF0000;">*</span>您的详细通讯地址</span>
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
				<input type="text" class="jjob" value="<?php echo ($job["jid"]); ?>">
				<input type="text" class="navid" value="<?php echo ($navben["nav_id"]); ?>"/>
				<div><input type="button" name="" id="btn" value="提交您的应聘信息" /></div>
			</form>
		</div>
		<!--公司地址-->
		
<div class="footer-nav">
	<ul>
		<li>
			<a href="/index.php/Mobile/Index/index">网站首页</a>
		</li>
		<?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($k % 2 );++$k;?><li>
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>"><?php echo ($navs["nav_name"]); ?></a>

			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<!-- <input type="text" class="navcss" value="<?php echo ($navben["nav_name"]); ?>">	 -->
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(".nav-center>ul").children("li").removeClass("nav-centerBack");
		$(".sub-nav>ul").children("li").removeClass("on");
		var strongeVal = localStorage.sitename;
		var headerLength = $(".nav-center>ul>li").length;
		for(var k = 0; k < headerLength; k++) {
			var valTxt = $(".nav-center>ul").children("li").eq(k).children("a").text();
			if(valTxt == strongeVal) {
				$(".nav-center>ul").children("li").eq(k).addClass("nav-centerBack");
			}
		}
		$(".clickMenu").click(function(event) {
			var txt = $(this).text();
			var hrefVal = $(this).next().val();
			// 设置h5储存
			localStorage.sitename = txt;
			window.location.href = hrefVal;
		});
	})
</script>
		<div class="address">
			<div class="address-center">
				<!-- <div>
					<div>服务热线：<span>029-86353092</span></div>
					<div>地址：西安市龙首北路东段宫园壹号4号楼</div>
					<div>传真：029-86353092</div>
					<div>邮箱：dalabor@shieldun.com</div>
					<div>备案号： 陕ICP备16010527号</div>
					<div>技术支持：无忧互联</div>
				</div> -->
				<!-- <div><img src="/Public/Mobile/images/1471514984722.jpg" alt="..." /></div> -->
			</div>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/Public/Mobile/js/slider.js" type="text/javascript" charset="utf-8"></script>

		<script type="text/javascript">
			$("#btn").click(function() {
					/*var Name = $(".nameVal").val();
					var adres = $(".adres").val();
					var Phone = $(".phoneVal").val();
					if(Name == "" || Name == null) {
						alert('姓名不能为空!');
						return false;
					}else{
						var textVal= /^[\u4E00-\u9FA5]{2,4}$/;
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
					}*/
					var navid=$('.navid').val();
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
								/*/index.php/Mobile/Index/personnel1/jid/1/nav_id/10*/
								window.location.href="/index.php/Mobile/Index/personnel1/jid/"+jid11+'/nav_id/'+navid;
							}else{
								alert('申请失败');
								window.location.href="/index.php/Mobile/Index/personnel1/jid/"+jid11+'/nav_id/'+navid;
							}
							
						}
					});
				});
		</script>
	</body>

</html>