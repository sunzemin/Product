function Collections(id,voteid){  
  $.ajax({
        type: "GET",
        url: "http://yushang.51cloudpay.com.cn/index.php/yushang/votecar/id/"+id+"/voteid/"+voteid,
        dataType: "json",
        success: function(msg) {
           alert("投票成功");
        },
        error: function(msg) {
            alert("投票失败");
        },
        
  });
}