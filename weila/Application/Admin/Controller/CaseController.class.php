<?php
namespace Admin\Controller;
use Think\Controller;
class CaseController extends CommonController{
	public function left(){
		$this->display();
	}
	public function casewatch(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $caseM=D('case');
        $caseData=$caseM->order('sort desc')->page($p,10)->select();
        $this->assign('caseData',$caseData);

        //轮播总页数
        $case_res=$caseM->order('sort desc')->select();
        $allcount=count($case_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加友情链接
    public function casewatch_add(){
        $p=I('get.p');
        if($_POST){
            $caseM=D('case');
            $data['image']=I('post.image');
            $data['author']=I('post.author');
            $data['title']=I('post.title');
            $data['c_content']=I('post.c_content','',false);
            $data['sort']=I('post.sort');
            $data['imagetitle']=I('post.imagetitle');
            $addres=$caseM->add($data);
            if($addres){
                $this->success('保存成功',U('Case/casewatch',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Case/casewatch',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function casewatch_update(){
        $p=I('get.p');
        if($_POST){
            $caseM=D('case');
            $whereBB['id']=I('post.id');
            $data['image']=I('post.image');
            $data['author']=I('post.author');
            $data['title']=I('post.title');
            //dump(I('post.c_content','',flase));die();
            $data['c_content']=I('post.c_content','',false);
            $data['sort']=I('post.sort');
            $data['imagetitle']=I('post.imagetitle');
            //dump($data);exit;
            $saveres=$caseM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Case/casewatch',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Case/casewatch',array('p'=>$p)));
            }
            exit;
        }
        $caseM=D('case');
        $whereAA['id']=I('get.id');
        $case=$caseM->where($whereAA)->find();
        $this->assign('case',$case);
        $this->display();
    }
    //==========================================================
    //删除友情链接
    public function casewatch_del(){
        $p=I('get.p');
        $caseM=D('case');
         $whereAA['id']=I('get.id');
        $delres=$caseM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Case/casewatch',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Case/casewatch',array('p'=>$p)));
            }
    }
}
?>