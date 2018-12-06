<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysql',         // 数据库类型
    'DB_HOST'               =>  '127.0.0.1',     // 服务器地址
    'DB_NAME'               =>  'hongyu',       // 数据库名
    'DB_USER'               =>  'root',          // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',          // 端口
    'DB_PREFIX'             =>  'hy_',           // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',          // 数据库编码默认采用utf8
    'DB_PARAMS'             =>  array(),         // 数据库连接参数    
    'DB_DEBUG'              =>  TRUE,            // 数据库调试模式 开启后可以记录SQL日志
    'URL_MODEL'             =>  1,

    'DATA_CACHE_PREFIX' => 'Redis_',//缓存前缀
    'DATA_CACHE_TYPE'=>'Redis',//默认动态缓存为Redis
    'REDIS_RW_SEPARATE' => true, //Redis读写分离 true 开启
    'REDIS_HOST'=>'127.0.0.1', //redis服务器ip，多台用逗号隔开；读写分离开启时，第一台负责写，其它[随机]负责读；
    'REDIS_PORT'=>6379,//端口号
    'REDIS_TIMEOUT'=>'300',//超时时间
    'REDIS_PERSISTENT'=>false,//是否长连接 false=短连接
    'REDIS_AUTH'=>'',//AUTH认证密码

);