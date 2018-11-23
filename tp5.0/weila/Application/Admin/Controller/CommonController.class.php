<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-Type:text/html; charset=utf8");
class CommonController extends Controller {
//+---------------------------------------------------------------------------------------------
    public function _initialize(){                                           // 判断用户是否登录
        if (session("adminid") == null || session("adminid") == "" || session("adminid") <=0) {
            session(null);
            $this->error('对不起,您还没有登录,正跳转至登录页面...', U('Login/login'), 3);
        }else{
            $adminconfigM=D('admin_config');
            $where['ac_aid']=session("adminid");
            $conRes=$adminconfigM->where($where)->order('ac_id desc')->find();
            if($conRes['ac_ip']==null || $conRes['ac_ip']=="" || $conRes['ac_ip']!=session("ip")){
                session(null);
                $this->error('已在另一设备登陆', U('Login/login'), 3);
            }
        }
    }
}