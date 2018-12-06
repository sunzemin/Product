<?php
namespace Test\Controller;
use Think\Controller;
class IndexController extends Controller{
	public function index(){
		$redis=new \Redis();
		$result=$redis->connect('127.0.0.1',6379);
		//$redis->set('myname','sunzemin');
		//$redis->set('shename','honghong');
		//echo $redis->get('myname');
		//$redis->delete('myname');
		//$redis->setnx('myname','honghong');
		//echo $redis->get('myname');
		//dump($redis->incr("myname"));  //结果：int(124)  
        //dump($redis->incr("myname"));  //结果：int(125)
		//dump($result);
		
	    $namearr=$redis->getMultiple(array('myname','shename'));
	    //$redis->lpush("tutorial-list", "Redis");
	    //$redis->lpush("tutorial-list", "Mongodb");
	    //$redis->lpush("tutorial-list", "Mysql");
	    //$arList = $redis->lrange("tutorial-list", 0 ,2);
	    // echo "Stored string in redis:: ";
        //dump($arList);
        //$redis->lpush("haha","111");   //结果：int(1)  
        //$redis->lpush("haha","222");
        //$redis->rpush("haha","333");   //结果：int(1)  
        //$redis->rpush("haha","444");
        //var_dump($redis->lpop('haha'));
        //var_dump($redis->llen("haha"));
       // var_dump($redis->lset('haha',3,'123'));
        //var_dump($redis->lget('haha',3));
        dump($redis->lgetrange('haha',0,3));
        //dump($redis->lremove('haha','',0));
        //dump($redis->lsize('haha'));
        //var_dump($redis->sadd('testname','哈哈哈'));
        //var_dump($redis->sadd('halou','333'));
        //var_dump($redis->sremove('halou','333'));
        /*var_dump($redis->sremove('test','111')); */ 
        //var_dump($redis->get('halou'));
        //var_dump($redis->delete(testname));
        //dump($redis->sadd('testname1','我是测试名称1'));
        //dump($redis->sadd('testname2','我是测试名称2'));
        var_dump($redis->smove('testname1','testname2','我是测试名称1'));
        //echo $redis->get('testname1');

	}
}
?>