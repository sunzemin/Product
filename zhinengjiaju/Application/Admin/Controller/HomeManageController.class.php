<?php
namespace Admin\Controller;
use Think\Controller;
class HomeManageController extends CommonController{
	//============================================================
    //背景图片
    public function scene(){
        if($p==null){
        	$p=1;
        }else{
        	$p=I('get.p');
        }
        $this->assign('p',$p);
        //查询链接信息
        $sceneM=D('scene');
        $scene_Data=$sceneM->order('sort desc')->page($p,10)->select();
        $this->assign('scene_Data',$scene_Data);
        //轮播总页数
        $scene_res=$sceneM->order('sort desc')->select();
        $allcount=count($scene_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }

    //===========================================================
    //添加背景图片
    public function scene_add(){
        $p=I('get.p');
        if($_POST){
            $sceneM=D('scene');
            $data['image']=I('post.image');
            $data['sort']=I('post.sort');
            $addres=$sceneM->add($data);
            if($addres){
                $this->success('保存成功',U('HomeManage/scene',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/scene',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //========================================================
    //背景图片
    public function scene_update(){
        $p=I('get.p');
        if($_POST){
            $sceneM=D('scene');
            $whereAA['id']=I('post.id');
            $data['image']=I('post.image');
            $data['sort']=I('post.sort');
            $saveres=$sceneM->where($whereAA)->save($data);
            if($saveres){
                $this->success('保存成功',U('HomeManage/scene',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/scene',array('p'=>$p)));
            }
            exit;
        }
        $sceneM=D('scene');
        $whereBB['id']=I('get.id');
        $scene_res=$sceneM->where($whereBB)->find();
        $this->assign('scene_res',$scene_res);
        //dump($scene_res);
        $this->display();
    }
    //=======================================================
    //删除背景图片
    public function scene_del(){
        $sceneM=D('scene');
        $whereBB['id']=I('get.id');
        $delres=$sceneM->where($whereBB)->delete();
        if($delres){
                $this->success('保存成功',U('HomeManage/scene',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/scene',array('p'=>$p)));
            }
    }
    public function home_decorate_title(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $home_decorate_titleM=D('home_decorate_title');
        $home_decorate_titleData=$home_decorate_titleM->order('hdt_sort desc')->page($p,10)->select();
        $this->assign('home_decorate_titleData',$home_decorate_titleData);

        //轮播总页数
        $home_decorate_title_res=$home_decorate_titleM->order('hdt_sort desc')->select();
        $allcount=count($home_decorate_title_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    public function home_decorate_title_add(){
        $p=I('get.p');
        if($_POST){
            $home_decorate_titleM=D('home_decorate_title');
            $data['hdt_image']=I('post.hdt_image');
            $data['hdt_title']=I('post.hdt_title');
            $data['hdt_sort']=I('post.hdt_sort');
            $addres=$home_decorate_titleM->add($data);
            if($addres){
                $this->success('保存成功',U('HomeManage/home_decorate_title',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_decorate_title',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    public function home_decorate_title_update(){
        $p=I('get.p');
        if($_POST){
            $home_decorate_titleM=D('home_decorate_title');
            $whereAA['hdt_id']=I('post.hdt_id');
            $data['hdt_image']=I('post.hdt_image');
            $data['hdt_title']=I('post.hdt_title');
            $data['hdt_sort']=I('post.hdt_sort');
            $saveres=$home_decorate_titleM->where($whereAA)->save($data);
            if($saveres){
                $this->success('保存成功',U('HomeManage/home_decorate_title',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_decorate_title',array('p'=>$p)));
            }
            exit;
        }
        //需要修改的信息
        $home_decorate_titleM=D('home_decorate_title');
        $whereBB['hdt_id']=I('get.hdt_id');
        $home_decorate_title=$home_decorate_titleM->where($whereBB)->find();
        $this->assign('home_decorate_title',$home_decorate_title);
        $this->display();
    }
    public function home_decorate_title_del(){
        $home_decorate_titleM=D('home_decorate_title');
        $whereBB['hdt_id']=I('get.hdt_id');
        $delres=$home_decorate_titleM->where($whereBB)->delete();
        if($delres){
                $this->success('保存成功',U('HomeManage/home_decorate_title',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_decorate_title',array('p'=>$p)));
            }
    }
}
?>