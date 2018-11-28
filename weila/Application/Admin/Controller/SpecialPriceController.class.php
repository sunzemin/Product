<?php
namespace Admin\Controller;
use Think\Controller;
class SpecialPriceController extends CommonController{
	public function left(){
		$this->display();
	}
	//添加最新特惠
	public function newactive(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $activeM=D('active');
        $activeData=$activeM->order('asort desc')->page($p,10)->select();
        $this->assign('activeData',$activeData);

        //轮播总页数
        $active_res=$activeM->order('asort desc')->select();
        $allcount=count($active_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加最新特惠
    public function newactive_add(){
        $p=I('get.p');
        if($_POST){
            $activeM=D('active');
            $data['aimage']=I('post.aimage');
            $data['acontent']=I('post.acontent');
            $data['atitle']=I('post.atitle');
            $data['atime']=time();
            $data['asort']=I('post.asort');
            $addres=$activeM->add($data);
            if($addres){
                $this->success('保存成功',U('SpecialPrice/newactive',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('SpecialPrice/newactive',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function newactive_update(){
        $p=I('get.p');
        if($_POST){
            $activeM=D('active');
            $whereBB['aid']=I('post.aid');
            $data['aimage']=I('post.aimage');
            $data['acontent']=I('post.acontent');
            $data['atitle']=I('post.atitle');
            $data['atime']=time();
            $data['asort']=I('post.asort');
            $saveres=$activeM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('SpecialPrice/newactive',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('SpecialPrice/newactive',array('p'=>$p)));
            }
            exit;
        }
        $activeM=D('active');
        $whereAA['aid']=I('get.aid');
        $active=$activeM->where($whereAA)->find();
        $this->assign('active',$active);
        $this->display();
    }
    //==========================================================
    //删除最新特惠
    public function newactive_del(){
        $p=I('get.p');
        $activeM=D('active');
        $whereAA['aid']=I('get.aid');
        $delres=$activeM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('SpecialPrice/newactive',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('SpecialPrice/newactive',array('p'=>$p)));
            }
    }
	//查询导航
	public function selnav(){
		$navM=D('nav');
		//查询一级导航
		$whereAA['fid']=0;
		$navres=$navM->where($whereAA)->order('nav_sort')->select();
        
        //查询二级导航
        $navarr=array();
        for($i=0;$i<count($navres);$i++){
        	$whereBB['fid']=$navres[$i]['nav_id'];
        	$navsecond=$navM->where($whereBB)->select();
        	$navarr[]=$navsecond;
        }
        $navall=array();
        $navall[]=$navres;
        $navall[]=$navarr;
        return $navall;
	}

}
?>