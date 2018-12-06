<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Bright2017" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>博越智能家居-品牌简介</title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
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
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>" target="_blank" class="headCorol"><?php echo ($navs["nav_name"]); ?></a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
				</div>
			</div>
		</header>
		<div class="banner">
			<img src="<?php echo ($background_image_data[0]["bi_image"]); ?>" />
		</div>
		<!--内容-->
		<section>
			<div class="aboutTitle">
				<div>about</div>
				<div>博越科技</div>
			</div>
			<div class="introduction">
				<div class="introduction_img"><img src="<?php echo ($company_introduce["ci_image"]); ?>" alt="..." /></div>
				<div class="briefIntroduction">
					<div class="briefIntroduction_top">
						<div><img src="/Public/Home/img/img59.png" alt="..." /></div>
						<div><?php echo ($company_introduce["ci_name"]); ?></div>
					</div>
					<p><?php echo ($company_introduce["ci_content"]); ?>
					</p>
					<div class="aboutBoyue-three">
						<a href="javascript:;">
							<div class="aboutBoyue-top">
								<img src="/Public/Home/img/img4.png" alt="img" />
								<img src="/Public/Home/img/img5.png" alt="img" class="hide" />
							</div>
							<div class="aboutBoyue-bot">一件咨询</div>
						</a>
						<a href="javascript:;">
							<div class="aboutBoyue-top">
								<img src="/Public/Home/img/img6.png" alt="img" />
								<img src="/Public/Home/img/img7.png" alt="img" class="hide" />
							</div>
							<div class="aboutBoyue-bot">联系我们</div>
						</a>
						<a href="javascript:;">
							<div class="aboutBoyue-top">
								<img src="/Public/Home/img/img8.png" alt="img" />
								<img src="/Public/Home/img/img9.png" alt="img" class="hide" />
							</div>
							<div class="aboutBoyue-bot">加入我们</div>
						</a>
					</div>
				</div>
			</div>
			<div class="boddy">
				<div id="wrapper">
					<ul>
						<?php if(is_array($classify_article_res)): $i = 0; $__LIST__ = $classify_article_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classify_article): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($classify_article["ca_image"]); ?>" alt="..." /></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<div id="bth1"><img src="/Public/Home/img/img61.png" alt="..." /></div>
				<div id="bth2"><img src="/Public/Home/img/img60.png" alt="..." /></div>
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
			//					轮播1 
			var timer1 = null; //这里只是给个定义，不让变量是undefind就行，也可以直接赋值
			var speed2 = 4; //速度
			var od1 = document.getElementById("wrapper"); //最外部的div
			var au1 = od1.getElementsByTagName('ul')[0];    
			var ali1 = au1.getElementsByTagName('li');    
			au1.innerHTML = au1.innerHTML + au1.innerHTML; //这里是把ul的内容*2
			au1.style.width = ali1[0].offsetWidth * ali1.length + 'px'; //ul的宽度时多有的li的宽度之和
			timer1 = setInterval(move1, 30); //定时器重复执行move这个函数，每0.3秒执行一次
			function move1() { //这个函数的作用是移动
				// offsetLeft是指当前元素距离左侧的距离
				//       offsetWidth是指对象整体的实际宽度，包滚动条等边线，会随对象显示大小的变化而改变
				if(au1.offsetLeft < -au1.offsetWidth / 2) {
					//     如果ul距离他的父元素wrapper的左侧距离小于ul这个元素整体宽度的一半,就让它的左边距归0
					au1.style.left = '0';     
				}     
				if(au1.offsetLeft > 0) {
					//         如果左边距大于0,那么左边距就等于当前ul的总体宽度除以2
					au1.style.left = -au1.offsetWidth / 2 + 'px';     
				}     
				au1.style.left = au1.offsetLeft + speed2 + 'px';
				//        ul的左边定位left等于ul的左边距+4,加这个4的原因是控制速度，不信你可以更改一下，数值越大速度越快
			}    
			od1.onmouseover = function() { //鼠标进入的时候，停止定时器，让它停下来
				clearInterval(timer1);    
			}    
			od1.onmouseout = function() { //鼠标离开的时候，继续执行定时器，让它继续动
				timer1 = setInterval(move1, 30);    
			}      
			document.getElementById("bth1").onclick = function() {     //速度为-4的时候，就是让它向左边，因为我们是在更改它的定位left,所以负值是左边
				speed2 = -4;    
			}    
			document.getElementById("bth2").onclick = function() {     //速度为4的时候，就是让它向右边，因为我们是在更改它的定位left,所以负值是右边
				speed2 = 4;    
			} 
			$(function() {
				//				鼠标滑过一键联系
				$(".aboutBoyue-three>a").mouseenter(function() {
					$(this).children(".aboutBoyue-top").children("img").eq(1).removeClass("hide").siblings().addClass("hide");
				});
				$(".aboutBoyue-three>a").mouseleave(function() {
					$(this).children(".aboutBoyue-top").children("img").eq(0).removeClass("hide").siblings().addClass("hide");
				});

			});
		</script>
	</body>

</html>