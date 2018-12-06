<?php
namespace Admin\Controller;
use Think\Controller;
class HomeManageController extends CommonController{
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
    //首页分类信息
    public function home_classify(){
         $p=I('get.p');
         $this->assign('p',$p);
         $home_classifyM=D('home_classify');
         $home_classify_res=$home_classifyM->order('hc_sort desc')->page($p,10)->select();
         $this->assign('home_classify_res',$home_classify_res);
         //总页数
         $home_classify_count=$home_classifyM->order('hc_sort desc')->select();
         $allcount=count($home_classify_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
    }
    //=============================================
    //添加服务优势
    public function home_classify_add(){
        $p=I('get.p');
        if($_POST){
            $home_classifyM=D('home_classify');
            $data['hc_name']=I('post.hc_name');
            $data['hc_titleimage']=I('post.hc_titleimage');
            $data['hc_sort']=I('post.hc_sort');
            $addres=$home_classifyM->add($data);
            if($addres){
                $this->success('保存成功',U('HomeManage/home_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_classify',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //=============================================
    //修改服务优势
    public function home_classify_update(){
        $p=I('get.p');
        if($_POST){
            $home_classifyM=D('home_classify');
            $whereBB['hc_id']=I('post.hc_id');
            $data['hc_name']=I('post.hc_name');
            $data['hc_titleimage']=I('post.hc_titleimage');
            $data['hc_sort']=I('post.hc_sort');
            $saveres=$home_classifyM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('HomeManage/home_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_classify',array('p'=>$p)));
            }
            exit;
        }
        $home_classifyM=D('home_classify');
        $whereAA['hc_id']=I('get.hc_id');
        $home_classify=$home_classifyM->where($whereAA)->find();
        $this->assign('home_classify',$home_classify);
        $this->display();
    }
    //================================================
    //删除服务优势
    public function home_classify_del(){
        $p=I('get.p');
        $home_classifyM=D('home_classify');
        $whereAA['hc_id']=I('get.hc_id');
        $delres=$home_classifyM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('HomeManage/home_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_classify',array('p'=>$p)));
            }
    }
     //首页分类信息
    public function home_little_classify(){
         $p=I('get.p');
         $this->assign('p',$p);
         $home_little_classifyM=D('home_little_classify');
         $home_little_classify_res=$home_little_classifyM->order('hlc_sort desc')->page($p,10)->select();
         $this->assign('home_little_classify_res',$home_little_classify_res);
         //总页数
         $home_little_classify_count=$home_little_classifyM->order('hlc_sort desc')->select();
         $allcount=count($home_little_classify_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         //查询包含的分类信息
         $home_classifyM=D('home_classify');
         $hcarr=array();
         for($i=0;$i<count($home_little_classify_res);$i++){
            $whereAA['hc_id']=$home_little_classify_res[$i]['hc_id'];
            $home_classify=$home_classifyM->where($whereAA)->find();
            $hcarr[]=$home_classify;
         }
         $this->assign('home_classify_res',$hcarr);

         $this->display();
    }
    //=============================================
    //添加服务优势
    public function home_little_classify_add(){
        $p=I('get.p');
        if($_POST){
            $home_little_classifyM=D('home_little_classify');
            $data['hlc_name']=I('post.hlc_name');
            $data['hc_id']=I('post.hc_id');
            $data['hlc_sort']=I('post.hlc_sort');
            $addres=$home_little_classifyM->add($data);
            if($addres){
                $this->success('保存成功',U('HomeManage/home_little_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_little_classify',array('p'=>$p)));
            }
            exit;
        }
        $home_classifyM=D('home_classify');
        $home_classify_res=$home_classifyM->order('hc_sort')->select();
        $this->assign('home_classify_res',$home_classify_res);
        //dump($home_classify_res);
        $this->display();
    }
    //=============================================
    //修改服务优势
    public function home_little_classify_update(){
        $p=I('get.p');
        if($_POST){
            $home_little_classifyM=D('home_little_classify');
            $whereBB['hlc_id']=I('post.hlc_id');
            $data['hlc_name']=I('post.hlc_name');
            $data['hc_id']=I('post.hc_id');
            $data['hlc_sort']=I('post.hlc_sort');
            $saveres=$home_little_classifyM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('HomeManage/home_little_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_little_classify',array('p'=>$p)));
            }
            exit;
        }
        //首页分页信息
        $home_classifyM=D('home_classify');
        $home_classify_res=$home_classifyM->order('hc_sort')->select();
        $this->assign('home_classify_res',$home_classify_res);
        //二级分类信息
        $home_little_classifyM=D('home_little_classify');
        $whereAA['hlc_id']=I('get.hlc_id');
        $home_little_classify=$home_little_classifyM->where($whereAA)->find();
        $this->assign('home_little_classify',$home_little_classify);
        //查询包含的分类信息
        $whereCC['hc_id']=$home_little_classify['hc_id'];
        $home_classify11=$home_classifyM->where($whereCC)->find();
        $this->assign('home_classify11',$home_classify11);
        $this->display();
    }
    //================================================
    //删除服务优势
    public function home_little_classify_del(){
        $p=I('get.p');
        $home_little_classifyM=D('home_little_classify');
        $whereAA['hlc_id']=I('get.hlc_id');
        $delres=$home_little_classifyM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('HomeManage/home_little_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/home_little_classify',array('p'=>$p)));
            }
    }
    public function allhead(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $all_headM=D('all_head');
        $all_head_Data=$all_headM->order('ah_sort desc')->page($p,10)->select();
        $this->assign('all_head_Data',$all_head_Data);
        //轮播总页数
        $all_head_res=$all_headM->order('ah_sort desc')->select();
        $allcount=count($all_head_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加友情链接
    public function allhead_add(){
        $p=I('get.p');
        if($_POST){
            $all_headM=D('all_head');
            $data['ah_title1']=I('post.ah_title1');
            $data['ah_image']=I('post.ah_image');
			$data['ah_hideimage']=I('post.ah_hideimage');
            $data['ah_sort']=I('post.ah_sort');
            $addres=$all_headM->add($data);
            if($addres){
                $this->success('保存成功',U('HomeManage/allhead',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/allhead',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function allhead_update(){
        $p=I('get.p');
        if($_POST){
            $all_headM=D('all_head');
            $whereCC['ah_id']=I('post.ah_id');
            $data['ah_title1']=I('post.ah_title1');
            $data['ah_image']=I('post.ah_image');
			$data['ah_hideimage']=I('post.ah_hideimage');
            $data['ah_sort']=I('post.ah_sort');

            $saveres=$all_headM->where($whereCC)->save($data);
            //dump($saveres);
            if($saveres){
                $this->success('保存成功',U('HomeManage/allhead',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/allhead',array('p'=>$p)));
            }
            exit;
        }
        $all_headM=D('all_head');
        $whereAA['ah_id']=I('get.ah_id');
        $all_head=$all_headM->where($whereAA)->find();
        $this->assign('all_head',$all_head);
        $this->display();
    }
    //==========================================================
    //删除友情链接
    public function allhead_del(){
        $p=I('get.p');
        $all_headM=D('all_head');
        $whereAA['ah_id']=I('get.ah_id');
        $delres=$all_headM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('HomeManage/allhead',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/allhead',array('p'=>$p)));
            }
    }
}
?>