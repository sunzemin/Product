<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=QOZWOd8ibC5ycpFhge8oVux01j6KbmAE"></script>
	<title>单击获取点击的经纬度</title>
</head>
<body>
	<div>
		<form method="post" action="">
			横坐标：<input type="text" name="heng" class="heng" value="<?php echo ($map["heng"]); ?>" />&nbsp;纵坐标：<input type="text" name="zong" class="zong" value="<?php echo ($map["zong"]); ?>" />&nbsp;<input type="submit" class="button" value="确认保存" />
		</form>
	</div>
	<div id="allmap" style="width: 800px;height: 600px;"></div>
</body>
</html>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");            
	map.centerAndZoom("西安市",12);
	var heng=$(".heng").val();
	var zong=$(".zong").val();
	var point = new BMap.Point(heng,zong);	 
	var marker = new BMap.Marker(new BMap.Point(heng,zong));
	map.addOverlay(marker);
			 
	//单击获取点击的经纬度
	map.addEventListener("click",function(e){
		map.clearOverlays();
		//alert(e.point.lng + "," + e.point.lat);
		$(".heng").val(e.point.lng);
		$(".zong").val(e.point.lat);
		
		// 百度地图API功能
		var point = new BMap.Point(e.point.lng,e.point.lat);
		
		var marker = new BMap.Marker(new BMap.Point(e.point.lng,e.point.lat)); // 创建点
		//添加覆盖物
		
			map.addOverlay(marker);            //增加点
		
		
	});
	
	
</script>