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

        }else {
            echo "";
            exit;
        }
    }
    
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
    
    public function handleEvent($object)
    {
        $contentStr = "";
        switch ($object->Event)
        {
            case "subscribe":
                $contentStr = "你来关注啦";
                break;
            case "unsubscribe":
                $contentStr = "你真的要走吗?";
                break;
            default :
                $contentStr = "Unknow Event: ".$object->Event;
                break;
        }
        $resultStr = $this->responseText($object, $contentStr);
        if($object->Event=='subscribe'){
           $imageimage=$this->imagetext($object);
        }
        return $resultStr;
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
    
    public function imagetext(){
        $title="这是标题";
        $description="这是图文描述";
        $picurl=""
        $textTpl="<xml>
                  <ToUserName>< ![CDATA[%s] ]></ToUserName>
                  <FromUserName>< ![CDATA[%s] ]></FromUserName>
                  <CreateTime>%s</CreateTime>
                  <MsgType>< ![CDATA[news] ]></MsgType>
                  <ArticleCount>1</ArticleCount>
                  <Articles>
                  <item>
                  <Title>< ![CDATA[$title] ]></Title>
                  <Description>< ![CDATA[description1] ]></Description>
                  <PicUrl>< ![CDATA[picurl] ]></PicUrl>
                  <Url>< ![CDATA[url] ]></Url>
                  </item>
                  </Articles>
                  </xml>";
        $resultStr = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content);
      
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

?>