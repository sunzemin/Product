<?php
namespace Home\Controller;
use Think\Controller;
class RedisllController extends Controller{
	public function test(){
		//连接本地的 Redis 服务
	   $redis = new \Redis();
	   $redis->connect('127.0.0.1', 6379);
	   echo $redis->get('name');
	   $time=$redis->time();
	   dump($time);
	}
}
?>