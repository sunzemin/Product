<?php
namespace app\index\controller;
/**
  * wechat php test
  */

//define your token
define("TOKEN", "sunzemin");//定义常量,储存TOKEN
//$wechatObj = new wechatCallbackapiTest();//实例化对象
//$wechatObj->valid();//调用验证服务器地址的有效性的方法
//定义类
class Index
{
    public function valid()
    {
        $this->responseMsg();
        $this->createmenu();
        exit;
        //获取微信服务器GET请求的参数
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    public function responseMsg()
    {
        //post数据,可能是由于不同的环境
        //$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];//①
        
        $postStr = file_get_contents('php://input');

        //提取post数据
        if (!empty($postStr)){
                libxml_disable_entity_loader(true);//②
                //得到了数据之后，然后我们就是要解析微信服务器发送过来的xml数据包了
                $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                
                $RX_TYPE = trim($postObj->MsgType);

                switch($RX_TYPE)
                {
                    case "text":
                        $resultStr = $this->handleText($postObj);
                        break;
                    case "event":
                        $resultStr = $this->handleEvent($postObj);
                        break;
                    default:
                        $resultStr = "Unknow msg type: ".$RX_TYPE;
                        break;
                }
                echo $resultStr;
               //关注事件
                if($RX_TYPE=="event"&&$postObj->Event=="subscribe"){
               
                    $title="这是标题";
                    $description="这是图文描述";
                    $picurl="http://1.weixintest.applinzi.com/tp5.0/public/static/images/img1.jpg";
                    $url="https://www.baidu.com/";
                    $msgType1="news";
                    $count="1";
                    $time = time();
                    $textTpl1 = "<xml>
                                    <ToUserName><![CDATA[%s]]></ToUserName>
                                    <FromUserName><![CDATA[%s]]></FromUserName>
                                    <CreateTime>%s</CreateTime>
                                    <MsgType><![CDATA[%s]]></MsgType>
                                    <ArticleCount><![CDATA[%s]]></ArticleCount>
                                    <Articles>
                                        <item>
                                            <Title><![CDATA[%s]]></Title> 
                                            <Description><![CDATA[%s]]></Description>
                                            <PicUrl><![CDATA[%s]]></PicUrl>
                                            <Url><![CDATA[%s]]></Url>
                                        </item>                               
                                    </Articles>
                                    </xml>";                                       
                    $resultStrimg = sprintf($textTpl1,$postObj->FromUserName,$postObj->ToUserName,$time,$msgType1,$count,$title,$description
                                , $picurl, $url);
                    echo  $resultStrimg;  
               }

        }else {
            echo "";
            exit;
        }
    }
    //处理文本
    public function handleText($postObj)
    {
        $fromUsername = $postObj->FromUserName;
        $toUsername = $postObj->ToUserName;
        $keyword = trim($postObj->Content);
        $time = time();
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    <FuncFlag>0</FuncFlag>
                    </xml>";             
        if(!empty( $keyword ))
        {
                 $msgType = "text";
                 $contentStr = "Welcome to wechat world!";
                 $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                 echo $resultStr;
            
        }else{
            echo "Input something...";
        }
    }
    //处理事件
    public function handleEvent($object)
    { 
       
            if($object->Event=="subscribe"){
                   $textarr=array(
                       array(
                             'title'=>'美人天下','description'=>'宫斗剧主场',
                             'picurl'=>'http://1.weixintest.applinzi.com/tp5.0/public/static/images/img1.jpg',
                             'url'=>'https://www.baidu.com/'
                            ),
                       array(
                           'title'=>'尼姑庵',
                           'description'=>'宫斗剧主场',
                           'picurl'=>'http://1.weixintest.applinzi.com/tp5.0/public/static/images/img1.jpg',
                           'url'=>'https://www.baidu.com/'
                          )
                    );
                    $title="这是标题";
                    $description="这是图文描述";
                    $picurl="http://1.weixintest.applinzi.com/tp5.0/public/static/images/img1.jpg";
                    $url="https://www.baidu.com/";
                    $msgType1="news"; 
                    $count=count($textarr);
                    $time = time();
                    $textTpl1 = "<xml>
                                    <ToUserName><![CDATA[%s]]></ToUserName>
                                    <FromUserName><![CDATA[%s]]></FromUserName>
                                    <CreateTime>%s</CreateTime>
                                    <MsgType><![CDATA[%s]]></MsgType>
                                    <ArticleCount><![CDATA[%s]]></ArticleCount>
                                    <Articles>";
                  
                   for($i=0;$i<count($textarr);$i++){
                         $textTpl1.=" <item>
                                            <Title><![CDATA[{$textarr[$i]['title']}]]></Title> 
                                            <Description><![CDATA[{$textarr[$i]['description']}]]></Description>
                                            <PicUrl><![CDATA[{$textarr[$i]['picurl']}]]></PicUrl>
                                            <Url><![CDATA[{$textarr[$i]['url']}]]></Url>
                                        </item>    ";
                   
                   }
                                                                  
                                   $textTpl1.=" </Articles>
                                    </xml>"; 
            
                
                    $resultStr = sprintf($textTpl1,$object->FromUserName,$object->ToUserName,$time,$msgType1,$count);
                   
               }
               if($object->Event=="CLICK"){
                     $contentStr = "";
                     switch($object->EventKey)
                         {
                             case "CE":
                                 return $this->clickeventtext($object);
                                 break;
                             case "wzcx":
                                 $contentStr="兰兰";
                                 break;
                             case "bycx":
                                 $contentStr="天秀";
                                 break;
                             default:
                                 break;

                         }
                   $resultStr = $this->responseText($object, $contentStr);
               
               }
            return $resultStr; 
    }
    
    public function clickeventtext($object){
                    $title="这是标题";
                    $description="这是图文描述";
                    $picurl="http://1.weixintest.applinzi.com/tp5.0/public/static/images/img1.jpg";
                    $url="https://www.baidu.com/";
                    $msgType1="news";
                    
                    $count="1";
                    $time = time();
                    $textTpl1 = "<xml>
                                    <ToUserName><![CDATA[%s]]></ToUserName>
                                    <FromUserName><![CDATA[%s]]></FromUserName>
                                    <CreateTime>%s</CreateTime>
                                    <MsgType><![CDATA[%s]]></MsgType>
                                    <ArticleCount><![CDATA[%s]]></ArticleCount>
                                    <Articles>
                                        <item>
                                            <Title><![CDATA[%s]]></Title> 
                                            <Description><![CDATA[%s]]></Description>
                                            <PicUrl><![CDATA[%s]]></PicUrl>
                                            <Url><![CDATA[%s]]></Url>
                                        </item>                               
                                    </Articles>
                                    </xml>";                                       
                    $resultStrimg = sprintf($textTpl1,$object->FromUserName,$object->ToUserName,$time,$msgType1,$count,$title,$description
                                , $picurl, $url);
                    return  $resultStrimg; 
        
    }
    
    public function responseText($object, $content, $flag=0)
    {
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[text]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    <FuncFlag>%d</FuncFlag>
                    </xml>";
        $resultStr = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content, $flag);
        return $resultStr;
    }

    public function getAccesstoken(){
         $appid="wx2ede70c97a1b1cc3";
         $appsecret="6c14c6e462f3abe31d24022d7b9afe75";
         $posturl="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
         $resstring1=file_get_contents($posturl);
        
         $cont = json_decode($resstring1);
         return $cont->access_token;

         
    }
    public function createmenu(){
        $accesstoken=$this->getAccesstoken();
        //echo $accesstoken."<br/><br/><br/>";
        $posturl="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$accesstoken;
       // echo $posturl;
        $xjson = '{"button":[
          {
           "name":"新手上到",
           "sub_button":[
              {
               "type":"view",
               "name":"PHP中文网",
               "url":"http://www.php.cn/php/php-tutorial.html"
              },
              {
                "type":"view",
                "name":"W3Cschool",
                "url":"https://www.w3cschool.cn/"
               }
             ]
           },
           {
                "name":"老手讲道",
                 "sub_button":[
                            {
                            "type":"click",
                            "name":"点击事件",
                            "key":"CE"
                            },
                            {
                            "type":"click",
                            "name":"违章查询",
                            "key":"wzcx"
                            },
                            {
                            "type":"click",
                            "name":"保养查询",
                            "key":"bycx""
                            }
                         ]
                    }]
            }'; 
            $curl = curl_init(); 

            curl_setopt($curl, CURLOPT_URL, $posturl); 

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); 

            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE); 

             curl_setopt($curl, CURLOPT_POST, 1); 

             curl_setopt($curl, CURLOPT_POSTFIELDS, $xjson); 

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

            $output = curl_exec($curl); 

            curl_close($curl); 
            echo $output; 
    }
    public function uploadimage(){
              $accesstoken=$this->getAccesstoken();

              $posturl="https://api.weixin.qq.com/cgi-bin/media/upload?access_token=$accesstoken&type=image";
        
              $imgUrl="http://1.weixintest.applinzi.com/tp5.0/public/static/images/img1.jpg";

             
        
              $data=array('media'=>'@'.$imgUrl);

             // $result = $this->curl_post($URL,$data);
              
             //创建一个新cURL资源

             $curl = curl_init();

             //设置URL和相应的选项 

             curl_setopt($curl, CURLOPT_URL,$posturl);

              curl_setopt($curl, CURLOPT_POST, 1);

              curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

             curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

             //执行curl，抓取URL并把它传递给浏览器

             $output = curl_exec($curl);

             //关闭cURL资源，并且释放系统资源

             curl_close($curl);

             //return $output;

              $datal = json_decode($output,true);
             
              return $datal;

           
    }
            public function uploadImg(){

              $accesstoken=$this->getAccesstoken();

              $posturl="https://api.weixin.qq.com/cgi-bin/media/upload?access_token=$accesstoken&type=image";
        
              $imgUrl="http://1.weixintest.applinzi.com/tp5.0/public/static/images/img1.jpg";

             

              $data = array('media_id'=>'@'.$imgUrl);

              $result = $this->curl_post($posturl,$data);

              $data = json_decode($result,true);



              return $data;

             }

            function curl_post($url, $data = null)

            {

             //创建一个新cURL资源

             $curl = curl_init();

             //设置URL和相应的选项 

             curl_setopt($curl, CURLOPT_URL, $url);

             if (!empty($data)){

              curl_setopt($curl, CURLOPT_POST, 1);

              curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

             }

             curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

             //执行curl，抓取URL并把它传递给浏览器

             $output = curl_exec($curl);

             //关闭cURL资源，并且释放系统资源

             curl_close($curl);

             return $output;

            }
  


    private function checkSignature()
    {
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
        //抛出异常
            throw new Exception('TOKEN is not defined!');
        }
        //获取微信服务器GET请求的参数
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
        sort($tmpArr, SORT_STRING);//③
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );//④
        //开发者获得加密后的字符串可与signature对比，标识该请求来源于微信
        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    
}