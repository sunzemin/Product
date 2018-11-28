<?php
namespace Admin\Controller;
use Think\Controller;
class NewsInformationController extends CommonController{
	public function left(){
		$this->display();
	}
	//=========================================================
    //新闻分类管理
    public function news_classify(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询分类
    	$news_classifyM=D('news_classify');
		$news_classify_res=$news_classifyM->order('nc_sort desc')->page($p,10)->select();
		$this->assign('news_classify_res',$news_classify_res);
        //查询分页
        $news_classify_count=$news_classifyM->select();
        $allcount=count($news_classify_count);
        $page=ceil($allcount/10);
        //dump($allcount);exit;
        $this->assign('page',$page);

        //查询包含的导航信息
        $navM=D('nav');
        $navarr=array();
        for($i=0;$i<count($news_classify_res);$i++){
            $whereAA['nav_id']=$news_classify_res[$i]['nav_id'];
            $navres=$navM->where($whereAA)->find();
            $navarr[]=$navres;
        }
        $this->assign('navarr',$navarr);

    	$this->display();
    }
    //==========================================================
    //添加新闻分类
    public function news_classify_add(){
    	if($_POST){
    		$news_classifyM=D('news_classify');
    		$data['nc_name']=I('post.nc_name');
    		$data['nc_sort']=I('post.nc_sort');
            $data['nav_id']=I('post.nav_id');
    		$addres=$news_classifyM->add($data);
    		if($addres){
				$this->success('保存成功',U('NewsInformation/news_classify',array('p'=>1)));
			}else{
				$this->error('保存失败',U('NewsInformation/news_classify',array('p'=>1)));
			}
			exit;
    	}
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
    	$this->display();
    }
    //===========================================================
    //删除新闻分类
    public function news_classify_update(){
    	if($_POST){
    		$news_classifyM=D('news_classify');
    		$whereBB['nc_id']=I('post.nc_id');
    		$data['nc_name']=I('post.nc_name');
    		$data['nc_sort']=I('post.nc_sort');
            $data['nav_id']=I('post.nav_id');
            //dump($data);exit;
    		$saveres=$news_classifyM->where($whereBB)->save($data);
    		if($saveres){
                $this->success('保存成功',U('NewsInformation/news_classify',array('p'=>1)));
            }else{
                $this->error('保存失败',U('NewsInformation/news_classify',array('p'=>1)));
            }
			exit;
    	}
    	$news_classifyM=D('news_classify');
    	$whereAA['nc_id']=I('get.nc_id');
    	$news_classify_res=$news_classifyM->where($whereAA)->find();
    	$this->assign('news_classify_res',$news_classify_res);

        //查询修改信息包含的导航
        $navM=D('nav');
        $whereBB['nav_id']=$news_classify_res['nav_id'];
        $navs=$navM->where($whereBB)->find();
        $this->assign('navs',$navs);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
    	$this->display();
    }
    //=======================================================
    //删除分类信息
    public function news_classify_del(){
    	$news_classifyM=D('news_classify');
    	$whereAA['nc_id']=I('get.nc_id');
    	$delres=$news_classifyM->where($whereAA)->delete();
    	if($delres){
                $this->success('保存成功',U('NewsInformation/news_classify',array('p'=>1)));
            }else{
                $this->error('保存失败',U('NewsInformation/news_classify',array('p'=>1)));
            }
    }
    //======================================================
    //新闻文章管理
    public function news_article(){
        //dump(I('get.nc_id'));exit;
        $p=I('get.p');
        $this->assign('p',$p);
        //查询新闻文章
    	$news_articleM=D('news_article');
    	$wherencid['nc_id']=I('get.nc_id');
    	$news_article_res=$news_articleM->where($wherencid)->order('na_sort desc')->page($p,3)->select();
        $nc_id=I('get.nc_id');
    	$this->assign('nc_id',$nc_id);
        //dump($nc_id);exit;
    	$this->assign('news_article_res',$news_article_res);
        //总页数
        $news_article_count=$news_articleM->where($wherencid)->order('na_sort desc')->select();
        $allcount=count($news_article_count);
        $page=ceil($allcount/3);
        $this->assign('page',$page);
    	$this->display();
    }
    //======================================================
    //添加新闻文章
    public function news_article_add(){
    	$nc_id=I('get.nc_id');
        //dump($nc_id);exit;
    	if($_POST){
    		$news_articleM=D('news_article');
    		$data['nc_id']=$nc_id;
    		$data['na_title']=I('post.na_title');
    		
    		$data['na_image']=I('post.na_image');
    		$data['na_content']=I('post.na_content','',false);
    		$data['na_sort']=I('post.na_sort');
    		$data['na_update']=time();
    		$addres=$news_articleM->add($data);
            
    		if($addres){
    			$this->success('保存成功',U('NewsInformation/news_article',array('nc_id'=>$nc_id,'p'=>1)));
    		}else{
    			$this->error('保存失败',U('NewsInformation/news_article',array('nc_id'=>$nc_id,'p'=>1)));
    		}
    		
			exit;
    	}
    	$this->display();
    }
    //==============================================================
    //修改新闻文章信息
    public function news_article_update(){
        $nc_id=I('get.nc_id');
    	if($_POST){
    		$news_articleM=D('news_article');
    		$whereAA['na_id']=I('post.na_id');
    		$data['na_title']=I('post.na_title');
    		
    		$data['na_update']=time();
    		$data['na_image']=I('post.na_image');
    		$data['na_content']=I('post.na_content','',false);
    		$data['na_sort']=I('post.na_sort');
    		$saveres=$news_articleM->where($whereAA)->save($data);
    		if($saveres){
                $this->success('保存失败',U('NewsInformation/news_article',array('nc_id'=>$nc_id,'p'=>1)));
            }else{
                $this->error('保存失败',U('NewsInformation/news_article',array('nc_id'=>$nc_id,'p'=>1)));
            }
			exit;
    	}
    	$news_articleM=D('news_article');
        $whereBB['na_id']=I('get.na_id');
        $news_article=$news_articleM->where($whereBB)->find();
        $this->assign('news_article',$news_article);
        $this->display();
    }
    //===========================================================
    //删除新闻文章
    public function news_article_del(){
        $nc_id=I('get.nc_id');
    	$news_articleM=D('news_article');
        $whereBB['na_id']=I('get.na_id');
        $delres=$news_articleM->where($whereBB)->delete();
       if($delres){
                $this->success('保存失败',U('NewsInformation/news_article',array('nc_id'=>$nc_id,'p'=>1)));
            }else{
                $this->error('保存失败',U('NewsInformation/news_article',array('nc_id'=>$nc_id,'p'=>1)));
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