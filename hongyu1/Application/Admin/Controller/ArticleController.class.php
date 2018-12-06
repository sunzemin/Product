<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController{
	public function left(){
		$this->display();
	}
	public function article(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $articleM=D('article');
        $articleData=$articleM->order('sort desc')->page($p,10)->select();
        $this->assign('articleData',$articleData);

        //轮播总页数
        $article_res=$articleM->order('sort desc')->select();
        $allcount=count($article_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加友情链接
    public function article_add(){
        $p=I('get.p');
        if($_POST){
            $articleM=D('article');
            $data['title']=I('post.title');
            $data['content']=I('post.content','',false);
            $data['sort']=I('post.sort');
            $addres=$articleM->add($data);
            if($addres){
                $this->success('保存成功',U('Article/article',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Article/article',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function article_update(){
        $p=I('get.p');
        if($_POST){
            $articleM=D('article');
            $whereBB['id']=I('post.id');
            $data['title']=I('post.title');
            $data['content']=I('post.content','',false);
            $data['sort']=I('post.sort');
            $saveres=$articleM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Article/article',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Article/article',array('p'=>$p)));
            }
            exit;
        }
        $articleM=D('article');
        $whereAA['id']=I('get.id');
        $article=$articleM->where($whereAA)->find();
        $this->assign('article',$article);
        $this->display();
    }
    //==========================================================
    //删除友情链接
    public function article_del(){
        $p=I('get.p');
        $articleM=D('article');
         $whereAA['id']=I('get.id');
        $delres=$articleM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Article/article',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Article/article',array('p'=>$p)));
            }
    }
}
?>