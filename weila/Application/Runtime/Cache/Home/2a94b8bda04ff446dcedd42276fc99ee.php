<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>薇拉摄影</title>
		<link rel="icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
	    <link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Home/layui/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/certify.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css"/>
	</head>
	<body>
		<!--公共头部-->
		<header>
			<div class="headerCent">
				<div class="headerCent-left">
					<img src="<?php echo ($company_introduce["ci_logo"]); ?>" alt="logo"/>
				</div>
				<div class="headerCent-right">
	<ul>
		<li>
			<a href="/index.php/Home/Index/index" target="_blank">
				<div class="headerCentleft hide"></div>
				<div class="headerCentright">
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
<?php if($navben == null): ?><input type="hidden" class="navcss" value="首页">
	<?php else: ?>
	<input type="hidden" class="navcss" value="<?php echo ($navben["nav_name"]); ?>"><?php endif; ?>
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
			<!--最新活动-->
			<div class="PublicCall">
				<img src="/Public/Home/img/img19.png" alt="img"/>
			</div>
			<!--图片-->
			<img src="<?php echo ($background_imageData[0]["bi_image"]); ?>" alt="..." class="publicImages"/>
			<div class="PublicCall">
				<img src="/Public/Home/img/img20.png" alt="img"/>
			</div>
			<!--风格样片-->
			<div class="StyleSample">
				<div class="StyleSample-top"></div>
				<div class="StyleSample-bot">
					<div class="numPage"><i><?php echo ($caseallcount); ?></i>条</div>
					<div id="demo1"></div>
				</div>
			</div>
			<!--薇拉视觉-->
			<div class="PublicCall">
				<img src="/Public/Home/img/img21.png" alt="img"/>
			</div>
			<div id="certify">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php if(is_array($view_res)): $i = 0; $__LIST__ = $view_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$view): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="<?php echo ($view["image"]); ?>" alt="img"/></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
			<!--薇拉内景-->
			<div class="PublicCall">
				<img src="/Public/Home/img/img22.png" alt="img"/>
			</div>
			<div class="vrerInterior">
				<div class="vrerInterior-top">
					<?php if(is_array($room_scenery_classify_res)): $k = 0; $__LIST__ = $room_scenery_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery_classify): $mod = ($k % 2 );++$k; if($k == 1): ?><a href="/index.php/Home/Index/erjifenlei/rsc_id/<?php echo ($room_scenery_classify["rsc_id"]); ?>" target="_blank" class="orangeColor"><?php echo ($room_scenery_classify["rsc_name"]); ?></a>
							<?php else: ?>
							<a href="/index.php/Home/Index/erjifenlei/rsc_id/<?php echo ($room_scenery_classify["rsc_id"]); ?>" target="_blank"><?php echo ($room_scenery_classify["rsc_name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="vrerInterior-bot">
					<div class="vrerInterior-left">
						<img src="<?php echo ($room_scenery_res[0]["rs_image"]); ?>" alt="img"/>
					</div>
					<div class="vrerInterior-right">
						<ul>
							<?php if(is_array($room_scenery_res)): $k = 0; $__LIST__ = $room_scenery_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room_scenery): $mod = ($k % 2 );++$k;?><li>
									<a href="javascript:;" target="_blank">
										<img src="<?php echo ($room_scenery["rs_image"]); ?>" alt="img"/>
										<div class="vrerInteriorCent">
											<h3><?php echo ($k); ?>R</h3>
											<h4><?php echo ($rscarr[$k-1]["rsc_name"]); ?></h4>
										</div>
									</a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>				
			</div>
			<!--动态新闻-->
			<div class="PublicCall">
				<img src="/Public/Home/img/img23.png" alt="img"/>
			</div>
			<div class="newsImages">
			 	<div class="swiper-container">
				    <div class="swiper-wrapper">
				    	<?php if(is_array($home_news_res)): $i = 0; $__LIST__ = $home_news_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$home_news): $mod = ($i % 2 );++$i;?><div class="swiper-slide" style="background-image:url(<?php echo ($home_news["hn_image"]); ?>)"></div><?php endforeach; endif; else: echo "" ;endif; ?>
				    </div>
			  	</div>
			</div>
			<div class="newsImagesBottom">
				<?php if(is_array($home_news_res)): $k = 0; $__LIST__ = $home_news_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$home_news): $mod = ($k % 2 );++$k;?><a href="javascript:;" target="_blank" class="newsImagesCenter">
						<div class="newsImages-one">
							<div class="newsImagesOne-top">vera</div>
							<div class="newsImagesOne-bot">
								<div>Mansion-</div>
								<div>youyue</div>
							</div>
						</div>
						<div class="newsImages-two">
							<?php echo ($home_news["hn_title"]); ?>
						</div>					
						<div class="newsImages-three">
							<div class="newsImagesThree-top">.0<?php echo ($k); ?></div>
							<div class="newsImagesThree-bot">
								<div><?php echo ($home_news["hn_short_title1"]); ?></div>
								<div><?php echo ($home_news["hn_short_title2"]); ?></div>
								<div><?php echo ($home_news["hn_short_title3"]); ?></div>
							</div>
						</div>					
						<div class="newsImages-four">
							<div class="newsImagesFour-left"><?php echo ($company_introduce["ci_logotitle"]); ?>/</div>
							<div class="newsImagesFour-right"><?php echo ($company_introduce["ci_logotitle_english"]); ?></div>
						</div>					
						<div class="newsImages-five">
							<img src="/Public/Home/img/img33.png" alt="img"/>
						</div>					
					</a>
					<div class="borderLeft"></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!--倒计时-->
			<div class="CountDown">
				<div class="CountDownCent">
					<?php if(is_array($home_base_res)): $k = 0; $__LIST__ = $home_base_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$home_base): $mod = ($k % 2 );++$k; if($k == 2): ?><div>
								<div class="CountDown-top">
									<div class="CountDown-left" id="count"><?php echo ($home_base["title1"]); ?></div>
									<div class="CountDown-right"><?php echo ($home_base["title2"]); ?></div>						
								</div>
								<div class="CountDown-bot">
									<?php echo ($home_base["title3"]); ?>
								</div>
							</div>
							<div class="boxShow">
								<img src="/Public/Home/img/img34.png" alt="img"/>
							</div>
							<?php else: ?>
							<div>
								<div class="CountDown-top">
									<div class="CountDown-left"><?php echo ($home_base["title1"]); ?></div>
									<div class="CountDown-right"><?php echo ($home_base["title2"]); ?></div>						
								</div>
								<div class="CountDown-bot">
									<?php echo ($home_base["title3"]); ?>
								</div>
							</div>
							<div class="boxShow">
								<img src="/Public/Home/img/img34.png" alt="img"/>
							</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<!--精彩花絮-->
			<div class="PublicCall PublicCall2">
				<img src="/Public/Home/img/img25.png" alt="img"/>
			</div>
			<div id="video">
				<video id="video1" width="100%" height="500" autoplay="autoplay" loop playsinline="true" poster webkit-playsinline="true" muted x-webkit-airplay="allow" x5-video-player-fullscreen="true" x5-video-player-type="h5">
				    <source src="<?php echo ($jingcai["jc_url"]); ?>" type="video/mp4">
				    	
					    您的浏览器不支持 HTML5 video 标签。
				</video>
				<div class="hideVideo"></div>
				<div class="hideVideo2"></div>
				<div class="hideVideo3"></div>
			    <div class="videoCent">
					<div class="videoCent-top">
						<?php echo ($jingcai["jc_title"]); ?>
					</div>
					<div class="videoCent-bot">
						<?php echo ($jingcai["jc_title_english"]); ?>
					</div>  	
			    </div>
			    <a href="/index.php/Home/Index/jingcaihuaxu" target="_blank" class="videoCentImages">
				    <img src="/Public/Home/img/img35.png" alt="img"/>
			    </a>
			    <a href="/index.php/Home/Index/jingcaihuaxu" target="_blank" class="videoCentCheack">点击查看更多精彩花絮</a>
			</div>
			<!--客户真实评价-->
			<div class="PublicCall PublicCall3">
				<img src="/Public/Home/img/img24.png" alt="img"/>
			</div>
			<div class="evaluate">
				<div class="evaluate-top">
					<div class="evaluate-one">三大平台	实时点评</div>
					<div class="evaluate-two"></div>
				</div>
				<div class="evaluate-bot">
					<?php if(is_array($custom_word_classify_res)): $k = 0; $__LIST__ = $custom_word_classify_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$custom_word_classify): $mod = ($k % 2 );++$k;?><div class="evaluatePhone">
						<img src="/Public/Home/img/img37.png" alt="img"/>
						<div class="evaluateData">
							<?php if(is_array($cwclassify[$k-1])): $m = 0; $__LIST__ = $cwclassify[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$custom_word): $mod = ($m % 2 );++$m;?><div class="evaluateCentData">
								<div class="evaluateCentData-top">
									<div class="evaluateCentData-left">
										<img src="<?php echo ($custom_word["cw_image"]); ?>" alt="img"/>
									</div>
									<div class="evaluateCentData-right">
										<div class="evaluateCentData-one">
											<div><?php echo ($custom_word["cw_name"]); ?></div>
											<div><?php echo ($custom_word["cw_user_rank"]); ?></div>
											<div>
												<?php if($custom_word["cw_flag"] == 0): else: ?>
													 VIP<?php endif; ?>
											</div>
										</div>
										<div class="evaluateCentData-Images">
											<?php $__FOR_START_6464__=1;$__FOR_END_6464__=$custom_word["cw_word_rank"];for($i=$__FOR_START_6464__;$i < $__FOR_END_6464__;$i+=1){ ?><img src="/Public/Home/img/img40.png" alt="img"/><?php } ?>
										</div>
										<div class="evaluateCentData-two">
											<div class="evaluateCentDataTwo-top">
												<?php echo ($custom_word["cw_content"]); ?>
											</div>
											<div class="evaluateCentDataTwo-bot">
												<?php if(is_array($allcimage[$k-1][$m-1])): $i = 0; $__LIST__ = $allcimage[$k-1][$m-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$custom_image): $mod = ($i % 2 );++$i;?><img src="<?php echo ($custom_image["ci_name"]); ?>" alt="img"/><?php endforeach; endif; else: echo "" ;endif; ?>
											</div>
										</div>
										<div class="evaluateCentData-three">
											<?php echo (date("Y-m-d",$custom_word["cw_time"])); ?>来自<?php echo ($custom_word["cw_kind"]); ?>
										</div>
									</div>
								</div>
								<div class="evaluateCentData-bot">
									<div>收藏</div>
									<div>转发</div>
									<div>评论</div>
									<div>
										<img src="/Public/Home/img/img38.png" alt="img"/>
									</div>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="evaluateName"><?php echo ($custom_word_classify["cwc_name"]); ?></div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
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
		<input type="hidden" class="footername" value="<?php echo ($footer_nav11["fn_nav_name"]); ?>">
		<!--公共底部-->
		<footer>
	<div class="footerCenter">
		<div class="footerCenter-top">
			<div class="footerCenter-left">
				<div class="footerCenterLeft-one">
					<img src="/Public/Home/img/img44.png" alt="img"/>
					<a href="<?php echo ($home_url["hu_producturl"]); ?>">最新主题作品</a>
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
						<?php if($navfooter["fn_url"] == ''): ?><a href="javascript:;" class="CenterRight-top">
							<div><?php echo ($footer_nav["fn_nav_name"]); ?></div>
							<div><?php echo ($footer_nav["fn_english_name"]); ?></div>
						</a>
						<?php else: ?>
						<a href="<?php echo ($footer_nav["fn_url"]); ?>/fn_id/<?php echo ($footer_nav["fn_id"]); ?>" class="CenterRight-top">
							<div><?php echo ($footer_nav["fn_nav_name"]); ?></div>
							<div><?php echo ($footer_nav["fn_english_name"]); ?></div>	
						</a><?php endif; ?>
						<div class="CenterRight-bot">
							<ul>
								<?php if(is_array($navfooterarr[$k-1])): $i = 0; $__LIST__ = $navfooterarr[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navfooter): $mod = ($i % 2 );++$i; if($navfooter["fn_url"] == ''): ?><li><a href="javascript:;" target="_blank"><?php echo ($navfooter["fn_nav_name"]); ?></a></li>
										<?php else: ?>
										<li><a href="<?php echo ($navfooter["fn_url"]); ?>/fn_id/<?php echo ($navfooter["fn_id"]); ?>" target="_blank"><?php echo ($navfooter["fn_nav_name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
<div class="returnTop">
	<img src="/Public/Home/img/img69.png" alt="img">
	<div>返回顶部</div>
</div>
		<!--固定浮窗-->
		<div class="EdnFot"></div>
<div class="EdnFot2">
	<div class="EdnFotData">
		<a href="<?php echo ($home_url["hu_wburl"]); ?>">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img65.png" alt="img" />
			</div>
			<div class="EdnFotData-right">
				weibo官方微博
			</div>
		</a>
		<a href="<?php echo ($home_url["hu_telephone"]); ?>">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img66.png" alt="img" />
			</div>
			<div class="EdnFotData-right">
				advisory在线咨询
			</div>
		</a>
		<a href="javascript:;" class="wxCode">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img67.png" alt="img" />
			</div>
			<div class="EdnFotData-right">
				WINXIN官方微信
			</div>
			<!-- <div class="wxCodeImages">
				<img src="<?php echo ($home_url["hu_wxerweima"]); ?>" alt="img" />
			</div> -->
		</a>
		<a href="<?php echo ($home_url["hu_gifurl"]); ?>">
			<div class="EdnFotData-left">
				<img src="/Public/Home/img/img68.png" alt="img" />
			</div>
			<div class="EdnFotData-right">
				gift优惠礼包
			</div>
		</a>
	</div>
</div>
<div class="wxCodeImages hide">
	<img src="<?php echo ($home_url["hu_wxerweima"]); ?>" alt="img" />
</div>

		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="//api.html5media.info/1.2.2/html5media.min.js"></script>
		<script src="/Public/Home/js/swiper.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/js/count.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Home/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
//				风格样片
				$(document).on("mouseenter", ".StyleSampleImages", function(){ 
					$(this).children(".StyleSampleImages-top").children(".hideDiv").animate({top:'0px'},"slow");
					$(this).children(".StyleSampleImages-top").children(".hideDiv2").animate({top:'0px'},"slow");
				});
				$(document).on("mouseleave", ".StyleSampleImages", function(){ 
					$(this).children(".StyleSampleImages-top").children(".hideDiv").animate({top:'537px'},"slow");
					$(this).children(".StyleSampleImages-top").children(".hideDiv2").animate({top:'537px'},"slow");
				});
//				分页
				var requestId = 0; //默认请求id
				ajaxData(1);
				function ajaxData( page) {
					$.ajax({      
						type: 'get',
						url: '/index.php/Home/Public/selcase/p/' + page,
						cache: false,
						dataType: 'json',
						success: function(data) {     
							console.log("成功",data);  
							//	页面默认加载分页数据
							var pageVal = 0;
							layui.use('laypage', function() {
								var laypage = layui.laypage;
								laypage.render({
									elem: 'demo1',
									count: data.allcount, //数据总数
									jump: function(obj) {
										$(".RealEvaluation-bot").children().remove();
										$.ajax({      
											type: 'get',
											url: '/index.php/Home/Public/selcase/p/' + obj.curr,
											cache: false,
											dataType: 'json',
											success: function(data) {       
												$(".numPage").children("i").text(data.allcount);
												    var ci_logotitle=data.company_introduce.ci_logotitle;
													var ci_url=data.company_introduce.ci_url;
													var ci_logotitle_english=data.company_introduce.ci_logotitle_english;

												for(var g=0;g<data.caseData.length;g++){

													var author=data.caseData[g].author;
													var c_content=data.caseData[g].c_content;
													var id=data.caseData[g].id;
													var caseimage=data.caseData[g].image;
													var imagetitle=data.caseData[g].imagetitle;
													var title=data.caseData[g].title;
													var strCent='<a href="/index.php/Home/Index/Information/id/'
													+ id +'" target="_blank" class="StyleSampleImages"><div class="StyleSampleImages-top"><img src="'
													+ caseimage +'" alt="img"/><div class="hideDiv"></div><div class="hideDiv2"><div><div class="hideDiv2-top"><div>'
													+ ci_logotitle_english +'</div><div>'
													+ imagetitle +'</div></div><div class="hideDiv2-bot"><div><img src="/Public/Home/img/img18.png" alt="img"/><div>'
													+ ci_logotitle +'</div></div><div>'
													+ author +'</div><div>'
													+ ci_url +'</div></div></div></div></div><div class="StyleSampleImages-bot"><div>'
													+ title +'</div><div>'+ author +'</div></div></a>';
													$(".StyleSample-top").append(strCent);
												}
											},
											error: function(err) { 
												console.log(err);      
												alert("获取风样数据请求异常！");      
											}   
										});
										var leng = $("#demo1>div").children().length;
										for(var k = 0; k < leng; k++) {
											var valLeng = $("#demo1>div").children().eq(k).outerWidth(true);
											pageVal += Number(valLeng);
										}
										var endVal = pageVal + 100;
										$(".StyleSample-bot").css("width", endVal);
										pageVal = 0;
									}
								});
							});
						},
						error: function() {    
							alert("获取风样数据请求异常！");      
						}   
					});
				}
//				============================
//				维拉视觉轮播图
				var certifySwiper = new Swiper('#certify .swiper-container', {
					observer:true,
			    	observeParents:true,
					watchSlidesProgress: true,
					slidesPerView: 'auto',
					centeredSlides: true,
					loop: true,
					loopedSlides: 3,//slide个数
					autoplay: true,
					navigation: {
						nextEl: '#certify .swiper-button-next',
						prevEl: '#certify .swiper-button-prev',
					},
					pagination: {
						el: '#certify .swiper-pagination',
						clickable: true,
					},
					on: {
						progress: function(progress) {
							for (i = 0; i < this.slides.length; i++) {
								var slide = this.slides.eq(i);
								var slideProgress = this.slides[i].progress;
								modify = 1;
								if (Math.abs(slideProgress) > 1) {
									modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
								}
								translate = slideProgress * modify * 260 + 'px';
								scale = 1 - Math.abs(slideProgress) / 5;
								zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
								slide.transform('translateX(' + translate + ') scale(' + scale + ')');
								slide.css('zIndex', zIndex);
								slide.css('opacity', 1);
								if (Math.abs(slideProgress) > 3) {
									slide.css('opacity', 0);
								}
							}
						},
						setTransition: function(transition) {
							for (var i = 0; i < this.slides.length; i++) {
								var slide = this.slides.eq(i)
								slide.transition(transition);
							}
						}
					}
				});
//				薇拉内景图片切换
				$(".vrerInterior-right>ul>li").mouseenter(function(){
					var index=$(this).index();
					var imgsrc=$(this).children("a").children("img").attr("src");
					$(this).children("a").children(".vrerInteriorCent").show();
					$(".vrerInterior-left").children("img").attr("src",imgsrc);
				});
				$(".vrerInterior-right>ul>li").mouseleave(function(){
					var index=$(this).index();
					$(this).children("a").children(".vrerInteriorCent").hide();
				});
//				动态新闻轮播图
				var swiper2 = new Swiper('.newsImages .swiper-container', {
			        spaceBetween: 30,
			        effect: 'fade',
			        observer:true,
			    	observeParents:true,
			        spaceBetween: 30,
			        centeredSlides: true,
			        autoplay: {
			        	delay: 2500,
			        	disableOnInteraction: false,
			        },
			    });
//			          滚动到数字部分
				var active=1;
				var active2=1;
				var myVideo=document.getElementById("video1"); 
			    $(window).on('scroll',function(){     
			    	var b=$(window).scrollTop();
			    	//获取滚动的高度    
			    	var a=$(".CountDown").offset().top;
			    	//获取元素距离顶部的距离    
			    	var c=a-400;      
			    	if(c<b && active==1){      
						addNumber();
						active++;
			    	}
//				           滚动到视频播放部分
					var d=$("#video").offset().top;
			    	//获取元素距离顶部的距离    
			    	var e=d-400;   
			    	if(e<b && active2==1){      
						myVideo.play(); 
						active2++;
			    	}
			    });
//				判断是否播放结束,循环播放
			    myVideo.addEventListener('ended', function(){
					play();
				});  
	//			数字增加
				function addNumber(){
					$("#count").numberRock({
						lastNumber:178236,
						duration:3000,
						easing:'swing',  //慢快慢
					});
				}
	//			播放视频
				function play() {
	                myVideo.load();   
	                myVideo.play();  
	            }  
			});
		</script>
	</body>
</html>