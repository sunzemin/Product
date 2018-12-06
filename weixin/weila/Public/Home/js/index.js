//index是公共js
$(function() {
//	顶部title循环
	var navcssVal=$(".navcss").val();
	var headerLength = $(".headerCent-right>ul>li").length;
	for(var k = 0; k < headerLength; k++) {
		var valTxt = $(".headerCent-right>ul").children("li").eq(k).children("a").children(".headerCentright").children(".headerCenttop").text();
		if(valTxt == navcssVal) {
			$(".headerCent-right>ul").children("li").eq(k).children("a").children(".headerCentright").addClass("orangeColor");
		}
	}
	var LengthNumber = 4; //默认显示4个
	var length = $(".bottomImages-center>ul>li").length;
	var swiper = new Swiper('.topImagesCaontainer', {
		observer: true,
		observeParents: true,
		spaceBetween: 30,
		centeredSlides: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.topImagesCaontainer .swiper-button-next',
			prevEl: '.topImagesCaontainer .swiper-button-prev',
		},
	});
	//		进入底部轮播时,切换上面的轮播
	$(".bottomImages-center>ul>li").mouseenter(function() {
		var index = $(this).index();
		//		切换上面的轮播
		swiper.slideToLoop(index, 2500, false);
		$(".hideRed").addClass("hide");
		$(".hidetop").removeClass("hide");
		$(".hideRed").eq(index).removeClass("hide");
		$(".hidetop").eq(index).addClass("hide");
	});
	$(".bottomImages .swiper-slide").mouseleave(function() {
		var index = $(this).index();
		$(".hideRed").eq(index).addClass("hide");
		$(".hidetop").eq(index).removeClass("hide");
	});
	//	点击左侧按钮
	$(".bottomImages-left").click(function() {
		var leftNum = $(".bottomImages-center>ul").css("left");
		leftNum = Number(leftNum.replace("px", ""));
		//					如果数量是4则不能向左移动,反之向左移动170px,并且数量加一
		if(LengthNumber == 4) {
			console.log("已经是第一个了,不能向左进行移动");
		} else {
			LengthNumber--;
			var leftNumVal = leftNum + 175;
			$(".bottomImages-center>ul").css("left", leftNumVal);
		}
	});
	//	点击右侧按钮
	$(".bottomImages-right").click(function() {
		var leftNum = $(".bottomImages-center>ul").css("left");
		leftNum = Number(leftNum.replace("px", ""));
		//					如果数量是4则不能向左移动,反之向左移动170px,并且数量加一
		if(LengthNumber == length) {
			console.log("已经是最后一个了,不能向右进行移动");
		} else {
			LengthNumber++;
			var leftNumVal = leftNum - 175;
			$(".bottomImages-center>ul").css("left", leftNumVal);
		}
	});
	//	注册领取
	$(".regist").click(function() {
		var nameVal = $(".GenerousGiftCent-right").children(".GiftCent").eq(0).children("input").val();
		var phoneVal = $(".GenerousGiftCent-right").children(".GiftCent").eq(1).children("input").val();
		var wchatVal = $(".GenerousGiftCent-right").children(".GiftCent").eq(2).children("input").val();
		if(nameVal == "" || nameVal == null) {
			layui.use('layer', function() {
				var layer = layui.layer;
				layer.msg('姓名不能为空!');
			});
			return false;
		}
		if(phoneVal == "" || phoneVal == null) {
			layui.use('layer', function() {
				var layer = layui.layer;
				layer.msg('手机号不能为空!');
			});
			return false;
		} else {
			var testVal = /^\d{11}$/;
			if(testVal.test(phoneVal) == false) {
				layui.use('layer', function() {
					var layer = layui.layer;
					layer.msg('请输入11位的手机号!');
				});
				return false;
			}
		}
		if(wchatVal == "" || wchatVal == null) {
			layui.use('layer', function() {
				var layer = layui.layer;
				layer.msg('请输入微信或者QQ!');
			});
			return false;
		}
		$.ajax({      
			type: 'post',
			url: '/index.php/Home/Public/user1add',
			cache: false,
			data:{
				'name':nameVal,
				'telephone':phoneVal,
				'wechat':wchatVal
			},
			dataType: 'json',
			success: function(data) {       
				console.log("999", data);
				if(data==true){
					layui.use('layer', function() {
						var layer = layui.layer;
						layer.msg('提交成功!');
					});
					$(".GenerousGiftCent-right").children(".GiftCent").eq(0).children("input").val("");
					$(".GenerousGiftCent-right").children(".GiftCent").eq(1).children("input").val("");
					$(".GenerousGiftCent-right").children(".GiftCent").eq(2).children("input").val("");
				}else{
					layui.use('layer', function() {
						var layer = layui.layer;
						layer.msg('提交失败!');
					});
					return false;
				}
			},
			error: function() {       
				alert("获取客户评价请求异常！");      
			}   
		});
	});
});