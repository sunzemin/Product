//公共样式
$(function(){
//	下拉菜单
	$(".headerCent-right").click(function(){
		$(".HideDiv").slideDown();
		$(".HideDiv2").slideDown();
	});
	$(".HideDiv2>div").click(function(){
		$(".HideDiv").slideUp();
		$(".HideDiv2").slideUp();
	});

	//	顶部title循环
	var navcssVal=$(".navcss").val();
	var headerLength = $(".MenuCent>a").length;
	for(var k = 0; k < headerLength; k++) {
		var valTxt = $(".MenuCent").children("a").eq(k).text();
		if(valTxt == navcssVal) {
			$(".MenuCent").children("a").eq(k).addClass("orangeCol");
		}
	}
});



























