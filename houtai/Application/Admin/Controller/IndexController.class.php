<?php
// +----------------------------------------------------------------------
// | 天骄网站
// +----------------------------------------------------------------------
// | 公共模块控制器  创建:2018/9/29
// +----------------------------------------------------------------------
// | Author: Sun <465450471@qq.com>
// +----------------------------------------------------------------------
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $adminM=D('admin');
        $whereAA['aid']=session('adminid');
        $admin=$adminM->where($whereAA)->find();
        $this->assign('admin',$admin);
        $this->display();
    }
    public function btn1(){
        $this->display();
    }
    public function form(){
        $this->display();
    }
    public function table(){
        $this->display();
    }
    //管理员管理
    public function user(){
        $p=I('get.p');
        $this->assign('p',$p);
        $adminM=D('admin');
        $adminres=$adminM->where('aid!=1')->order('asort desc')->page($p,10)->select();
        //总页数
        $admincount=$adminM->where('aid!=1')->order('asort desc')->select();
        $allcount=count($admincount);
        $page=ceil($allcount/10);
        $this->assign('page',$page);

        $this->assign('adminres',$adminres);
        //dump($adminres);
        $this->display();
    }
    //添加管理员
    public function useradd(){
    if($_POST){
        if(I('post.apwd')==I('post.apwdtwo')){
            $adminM=D('admin');
            $data['aname']=I('post.aname');
            $data['apwd']=md5(I('post.apwd'));
            $data['asort']=I('post.asort');
            $data['aip']=get_client_ip();
            $addres=$adminM->add($data);
            if($addres){
                $this->success('保存成功',U('Index/user'));
            }else{
                $this->error('保存失败',U('Index/user'));
            }
            exit;
        } 
    }
    $this->display();
    }
    //管理员信息删除
    public function userdel(){
        $adminM=D('admin');
        $whereAA['aid']=I('get.aid');
        $delres=$adminM->where($whereAA)->save($data);
        if($delres){
            $this->success('保存成功',U('Index/user'));
        }else{
            $this->error('保存失败',U('Index/user'));
        }
    }
    //管理员密码管理
    public function password(){
        if($_POST){
            $adminM=D('admin');
            if(I('post.password')==I('post.passwordtwo')){
                $whereapwd['apwd']=I('post.oldpassword');
                $seladmin=$adminM->where($whereapwd)->find();
                //dump($seladmin);
                if($seladmin){
                    $whereaid['aid']=$seladmin['aid'];
                    $data['apwd']=md5(I('post.password'));
                    $saveres=$adminM->where($whereaid)->save($data);
                    if($saveres){
                        $this->success('保存成功',U('Index/password'));
                    }else{
                        $this->error('保存失败',U('Index/password'));
                    }
                }
            }
            exit;
        }
        $adminM=D('admin');
        $whereaid['aid']=session('adminid');
        $adminsel=$adminM->where($whereaid)->find();
        $this->assign('adminsel',$adminsel);
        $this->display();
    }
}