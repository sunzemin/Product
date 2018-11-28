<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
    	if($_POST){
    		$adminM=D('admin');
    		$where['username']=I('post.username');
    		$adminRes=$adminM->where($where)->find();
    		if($adminRes){
    			if($adminRes['apwd']==md5(I('post.userpwd'))){
    				$ip = get_client_ip();
    				session('adminid',$adminRes['aid']);
    				session('ip',$ip);
    				$data['aip']=$ip;
    				$adminsaveRes=$adminM->where($where)->save($data);

    				$admin_configM=D('admin_config');
    				$dataAA['ac_aid']=$adminRes['aid'];
    				$dataAA['ac_name']=$adminRes['aname'];
    				$dataAA['ac_ip']=$ip;
    				$dataAA['ac_time']=time();
    				$res=$admin_configM->add($dataAA);
    				$this->success("登陆成功",U('Index/index'));
    			}else{
    				$this->error("登陆失败",U('Login/login'));
    			}
    		}else{
    			$this->error("登陆失败",U('Login/login'));
    		}
    		exit();
    	}
        $this->display();
    }
    public function loginout(){
        session(null);
        $this->error("退出成功",U('Login/login'));
    }
}