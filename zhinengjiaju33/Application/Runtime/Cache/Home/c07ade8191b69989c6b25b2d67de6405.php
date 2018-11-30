<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>最新特惠</title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
	    <link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css"/>
		<link rel="stylesheet" type="text/css" href="layui//Public/Home/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/certify.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css"/>
	</head>
	<body>
		<!--公共头部-->
		<header>
			<div class="headerCent">
				<div class="headerCent-left">
					<img src="/Public/Home/img/img1.png" alt="logo"/>
				</div>
				<div class="headerCent-right">
	<ul>
		<li>
			<a href="/index.php/Home/Index/index" target="_blank">
				<div class="headerCentleft hide"></div>
				<div class="headerCentright orangeColor">
					<div class="headerCenttop">首页</div>
					<div class="headerCentbot">home</div>
				</div>
			</a>
		</li>
		<?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navs): $mod = ($i % 2 );++$i;?><li>
				<a href="<?php echo ($navs["nav_url"]); ?>/nav_id/<?php echo ($navs["nav_id"]); ?>" target="_blank">
					<div class="headerCentleft"></div>
					<div class="headerCentright">
						<div class="headerCenttop"><?php echo ($navs["nav_name"]); ?></div>
						<div class="headerCentbot"><?php echo ($navs["nav_english_name"]); ?></div>
					</div>
				</a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
			</div>
		</header>
		<!--内容区域-->
		<section>
			<!--轮播-->
			<div class="Demo">
				<div class="swiper-container topImagesCaontainer">
				    <div class="swiper-wrapper">
				    	<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
						      	<img src="<?php echo ($lunbo["lb_image"]); ?>" alt="..."/>
						      </div><?php endforeach; endif; else: echo "" ;endif; ?>
				    </div>
				    <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div>
				</div>		
				 <!--底部轮播-->
			    <div class="bottomImages">
			    	<div class="bottomImages-left">
			    		<img src="/Public/Home/img/img7.png" alt="left"/>
			    	</div>
			    	<div class="bottomImages-center">
			    		<ul>
			    			<?php if(is_array($lunboData)): $i = 0; $__LIST__ = $lunboData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?><li>
				    				<div class="hidetop"></div>
					      			<div class="hideRed hide">
					      				<div class="hideRed-top"><?php echo ($lunbo["lb_title"]); ?></div>
					      				<div class="hideRed-bot"><?php echo (date("Y-m-d",$lunbo["lb_time"])); ?></div>
					      			</div>	
				    			</li><?php endforeach; endif; else: echo "" ;endif; ?>
			    		</ul>
			    	</div>
			    	<div class="bottomImages-right">
			    		<img src="/Public/Home/img/img8.png" alt="right"/>
			    	</div>
			    </div>
			</div>
			<!--最新特惠-->
			<div class="PublicCall">
				<img src="/Public/Home/img/img56.png" alt="img"/>
			</div>
			<div class="Preferential">
				<?php if(is_array($activeData)): $i = 0; $__LIST__ = $activeData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($i % 2 );++$i;?><a href="javascript:;" target="_blank" class="PreferentialData">
						<img src="<?php echo ($active["aimage"]); ?>" alt="..."/>
						<div class="PreferentialCent">
							<div class="Preferential-one">
								<div>CONTENT:</div>
								<div>TIME:<?php echo (date("Y-m-d",$active["atime"])); ?></div>
							</div>
							<div class="Preferential-two">
								<?php echo ($active["acontent"]); ?>
							</div>
							<div class="Preferential-three">
								<?php echo ($active["atitle"]); ?>
							</div>
						</div>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
				<!--分页-->
				<div class="StyleSample-bot">
					总共<?php echo ($activecount); ?>条  总共<?php echo ($allpage); ?>页  第<?php echo ($p); ?>页
					<div class="numPage"><i><?php echo ($activecount); ?></i>条</div>
					<div id="demo1"></div>
				</div>				
			</div>
			<!--公司地址-->			
			<div class="cityAdress">
				<img src="/Public/Home/img/img41.png" alt="..."/>
				<div class="AdressData">
					<div class="cityAdressData">
						<div class="cityAdressData-top">
							<div class="cityAdressData-left">
								<div class="AdressData-one">
									our position
								</div>
								<div class="AdressData-two">
									<?php echo ($footer["address"]); ?>
								</div>
								<div class="AdressData-three">
									hotline
								</div>
								<div class="AdressData-four">
									<?php echo ($footer["telephone"]); ?>
								</div>
							</div>
						</div>
						<div class="cityAdressData-bot">
							<!-- <div class="cityAdressData-one">
								welcome to communicate with us
							</div> -->
							
							<div class="cityAdressData-two">
								<?php echo ($company_introduce["ci_content_english"]); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--超值送大礼-->
			<div class="GenerousGift">
				<div class="GenerousGiftCent">
					<div class="GenerousGiftCent-left">
						<div class="Generou-left">
							<img src="/Public/Home/img/img42.png" alt="img"/>
						</div>
						<div class="Generou-right">
							<div class="Generou-top">新人注册送超值大礼！</div>
							<div class="Generou-bot">Newcomers register for a great gift</div>
						</div>
					</div>
					<div class="GenerousGiftCent-right">
						<div class="GiftCent">
							<div class="GiftCent">姓名:</div>
							<input type="text" class="GiftCent-right"/>
						</div>
						<div class="GiftCent">
							<div class="GiftCent">手机:</div>
							<input type="text" class="GiftCent-right"/>
						</div>
						<div class="GiftCent">
							<div class="GiftCent">微信QQ:</div>
							<input type="text" class="GiftCent-right"/>
						</div>
						<div class="regist">
							<div>注册领取</div>
							<img src="/Public/Home/img/img43.png" alt="img"/>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!--公共底部-->
		<footer>
	<div class="footerCenter">
		<div class="footerCenter-top">
			<div class="footerCenter-left">
				<div class="footerCenterLeft-one">
					<img src="/Public/Home/img/img44.png" alt="img"/>
					<div>最新主题作品</div>
				</div>
				<div class="footerCenterLeft-one">
					<img src="/Public/Home/img/img45.png" alt="img"/>
					<div>快速扫描二维码</div>
				</div>
				<div class="footerCenterLeft-two">
					<div class="footerCode">
						<div class="footerCode-top">
							<img src="<?php echo ($footer["wx_erweima"]); ?>" alt="img"/>
						</div>
						<div class="footerCode-bot">官方微信</div>
					</div>
					<div class="footerCode">
						<div class="footerCode-top">
							<img src="<?php echo ($footer["wb_erweima"]); ?>" alt="img"/>
						</div>
						<div class="footerCode-bot">官方微博</div>
					</div>
				</div>
			</div>
			<div class="footerCenter-right">
				<?php if(is_array($footer_navres)): $k = 0; $__LIST__ = $footer_navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$footer_nav): $mod = ($k % 2 );++$k;?><div>
						<div class="CenterRight-top">
							<div><?php echo ($footer_nav["fn_nav_name"]); ?></div>
							<div><?php echo ($footer_nav["fn_english_name"]); ?></div>
						</div>
						<div class="CenterRight-bot">
							<ul>
								<?php if(is_array($navfooterarr[$k-1])): $i = 0; $__LIST__ = $navfooterarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navfooter): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($navfooter["fn_url"]); ?>" target="_blank"><?php echo ($navfooter["fn_nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>					
		</div>
		<div class="footerCenter-bot">
			<div><?php echo ($footer["copyright"]); ?></div>
			<div><?php echo ($footer["copyright_english"]); ?></div>
			<div><?php echo ($footer["record"]); ?>      技术支持：泰雁科技</div>
		</div>
	</div>		
</footer>
		<!--固定浮窗-->
		<div class="EdnFot"></div>
<div class="EdnFot2">
	<div class="EdnFotData">
		<a href="javascript:;">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img65.png" alt="img"/>
			</div>
			<div class="EdnFotData-right">
				weibo官方微博
			</div>
		</a>
		<a href="javascript:;">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img66.png" alt="img"/>
			</div>
			<div class="EdnFotData-right">
				advisory在线咨询
			</div>
		</a>
		<a href="javascript:;">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img67.png" alt="img"/>
			</div>
			<div class="EdnFotData-right">
				WINXIN官方微信
			</div>
		</a>
		<a href="javascript:;">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img68.png" alt="img"/>
			</div>
			<div class="EdnFotData-right">
				gift优惠礼包
			</div>
		</a>
	</div>
</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="//api.html5media.info/1.2.2/html5media.min.js"></script>
		<script src="/Public/Home/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/js/count.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
//				分页
				var pageVal=0;
				layui.use('laypage', function(){
    				var laypage = layui.laypage;
				    laypage.render({
					    elem: 'demo1'
					    ,count: 170 //数据总数
					    ,jump: function(obj){
					        var leng=$("#demo1>div").children().length;
					        for(var k=0;k<leng;k++){
						       var valLeng=$("#demo1>div").children().eq(k).outerWidth(true);
					      	   pageVal+=Number(valLeng);
					        }
					        var endVal=pageVal+100;
					        $(".StyleSample-bot").css("width",endVal);
							pageVal=0;
					    }
					});
				});
			});
		</script>
	</body>
</html>