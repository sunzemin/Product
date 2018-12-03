<?php
namespace Admin\Controller;
use Think\Controller;
class ShortVideoController extends Controller{
	public function left(){
		$this->display();
	}
	//====================================================
	//精彩花絮信息
	public function shortvideo(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $short_videoM=D('short_video');
        $short_videoData=$short_videoM->order('sv_sort desc')->page($p,10)->select();
        $this->assign('short_videoData',$short_videoData);

        //轮播总页数
        $short_video_res=$short_videoM->order('sv_sort desc')->select();
        $allcount=count($short_video_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加友情链接
    public function shortvideo_add(){
        $p=I('get.p');
        if($_POST){
            $short_videoM=D('short_video');
            $data['sv_title']=I('post.sv_title');
            $data['sv_short_title1']=I('post.sv_short_title1');
            $data['sv_short_title2']=I('post.sv_short_title2');
            $data['sv_time']=time();
            $data['sv_sort']=I('post.sv_sort');
            $data['sv_url']=I('post.sv_url');
            $data['sv_image']=I('post.sv_image');
            $addres=$short_videoM->add($data);
            if($addres){
                $this->success('保存成功',U('ShortVideo/shortvideo',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('ShortVideo/shortvideo',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function shortvideo_update(){
        $p=I('get.p');
        if($_POST){
            $short_videoM=D('short_video');
            $whereBB['sv_id']=I('post.sv_id');
            $data['sv_title']=I('post.sv_title');
            $data['sv_short_title1']=I('post.sv_short_title1');
            $data['sv_short_title2']=I('post.sv_short_title2');
            $data['sv_time']=time();
            $data['sv_sort']=I('post.sv_sort');
            $data['sv_url']=I('post.sv_url');
            $data['sv_image']=I('post.sv_image');
            $saveres=$short_videoM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('ShortVideo/shortvideo',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('ShortVideo/shortvideo',array('p'=>$p)));
            }
            exit;
        }
        $short_videoM=D('short_video');
        $whereAA['sv_id']=I('get.sv_id');
        $short_video=$short_videoM->where($whereAA)->find();
        $this->assign('short_video',$short_video);
        $this->display();
    }
    //==========================================================
    //删除友情链接
    public function shortvideo_del(){
        $p=I('get.p');
        $short_videoM=D('short_video');
        $whereAA['sv_id']=I('get.sv_id');
        $delres=$short_videoM->where($whereAA)->find();
        if($delres){
                $this->success('保存成功',U('ShortVideo/shortvideo',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('ShortVideo/shortvideo',array('p'=>$p)));
            }
    }
}
?>