<?php
namespace Admin\Controller;
use Think\Controller;
class PrimaryWorkController extends CommonController{
	public function left(){
		$this->display();
	}
	//===================================================
	//主营业务分类管理
	public function primary_work_classify(){
		$p=I('get.p');
		$this->assign('p',$p);
		//查询主营业务分类
		$primary_work_classifyM=D('primary_work_classify');
		$primary_work_classify_res=$primary_work_classifyM->order('pwc_sort desc')->page($p,10)->select();
		$this->assign('primary_work_classify_res',$primary_work_classify_res);
		//查询总页数
		$primary_work_classify_count=$primary_work_classifyM->select();
		$allcount=count($primary_work_classify_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);
		//求取导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($primary_work_classify_res);$i++){
			$whereAA['nav_id']=$primary_work_classify_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
            $navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//===================================================
	//主营业务分类添加
	public function primary_work_classify_add(){
		if($_POST){
			$primary_work_classifyM=D('primary_work_classify');
			$data['pwc_name']=I('post.pwc_name');
			$data['pwc_image']=I('post.pwc_image');
			$data['pwc_sort']=I('post.pwc_sort');
			$data['nav_id']=I('post.nav_id');
			$addres=$primary_work_classifyM->add($data);
			if($addres){
				$this->success('保存成功',U('PrimaryWork/primary_work_classify'));
			}else{
				$this->error('保存失败',U('PrimaryWork/primary_work_classify'));
			}
			exit;
		}
		$navall=$this->selnav();
		//dump($navall);exit;
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//===================================================
	//主营业务的修改
	public function primary_work_classify_update(){
		if($_POST){
			$primary_work_classifyM=D('primary_work_classify');
			$whereBB['pwc_id']=I('post.pwc_id');
			$data['pwc_name']=I('post.pwc_name');
			$data['pwc_image']=I('post.pwc_image');
			$data['pwc_sort']=I('post.pwc_sort');
			$data['nav_id']=I('post.nav_id');
			$addres=$primary_work_classifyM->where($whereBB)->save($data);
			if($addres){
				$this->success('保存成功',U('PrimaryWork/primary_work_classify'));
			}else{
				$this->error('保存失败',U('PrimaryWork/primary_work_classify'));
			}
			exit;
		}
		$primary_work_classifyM=D('primary_work_classify');
		$whereAA['pwc_id']=I('get.pwc_id');
		$primary_work_classify=$primary_work_classifyM->where($whereAA)->find();
		$this->assign('primary_work_classify',$primary_work_classify);

		//查询所包含该的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$primary_work_classify['nav_id'];
		$navs=$navM->where($whereCC)->find();
		$this->assign('navs',$navs);
		//查询导航
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=================================================
	//主营业务的删除
	public function primary_work_classify_del(){
		$primary_work_classifyM=D('primary_work_classify');
		$whereAA['pwc_id']=I('get.pwc_id');
		$delres=$primary_work_classifyM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('PrimaryWork/primary_work_classify'));
			}else{
				$this->error('保存失败',U('PrimaryWork/primary_work_classify'));
			}
	}
	//=================================================
	//主营业务
	public function primary_work(){
		$p=I('get.p');
		$this->assign('p',$p);
		//查询主营工作
		$primary_workM=D('primary_work');
		$primary_work_res=$primary_workM->order('pw_sort desc')->page($p,10)->select();
		$primary_work_classifyM=D('primary_work_classify');
		$classify=array();
		for($i=0;$i<count($primary_work_res);$i++){
            $wherepwc['pwc_id']=$primary_work_res[$i]['pwc_id'];
            $primary_work_classify=$primary_work_classifyM->where($wherepwc)->find();
            $classify[]=$primary_work_classify;

		}
		//dump($classify);exit;
		$this->assign('primary_work_classify_res',$classify);
		$this->assign('primary_work_res',$primary_work_res);
		//查询总页数
        $primary_work_count=$primary_workM->select();
        $allcount=count($primary_work_count);
        $page=ceil($allcount/10);
        $this->assign('page',$page);

		$this->display();
	}
	//=================================================
	//添加主页营业务
	public function primary_work_add(){
		if($_POST){	
				$primary_workM=D('primary_work');
				$data['pw_name']=I('post.pw_name');
				$data['pw_image']=I('post.pw_image');
				$data['pw_flag']=I('post.pw_flag');
				$data['pw_sort']=I('post.pw_sort');
				$data['pwc_id']=I('post.pwc_id');
				$addres=$primary_workM->add($data);
				if($addres){
					$this->success('保存成功',U('PrimaryWork/primary_work'));
				}else{
					$this->error('保存失败',U('PrimaryWork/primary_work'));
				}	
			exit;
		}
		$primary_work_classify_res=$this->selectprimaryclassify();
		$this->assign('primary_work_classify_res',$primary_work_classify_res);
		$this->display();
	}
	//===================================================
	//主营业务的修改
	public function primary_work_update(){
		if($_POST){	
				$primary_workM=D('primary_work');
				$whereAA['pw_id']=I('post.pw_id');
				$data['pw_name']=I('post.pw_name');
				$data['pw_image']=I('post.pw_image');
				$data['pw_flag']=I('post.pw_flag');
				$data['pw_sort']=I('post.pw_sort');
				$data['pwc_id']=I('post.pwc_id');
				$saveres=$primary_workM->where($whereAA)->save($data);
				if($saveres){
					$this->success('保存成功',U('PrimaryWork/primary_work'));
				}else{
					$this->error('保存失败',U('PrimaryWork/primary_work'));
				}	
			exit;
		}
		//查询修改的主营业务
		$primary_workM=D('primary_work');
		$whereBB['pw_id']=I('get.pw_id');
		$primary_work=$primary_workM->where($whereBB)->find();
		$this->assign('primary_work',$primary_work);
        
        //查询修改业务中的分类
        $primary_work_classifyM=D('primary_work_classify');
		$whereBB['pwc_id']=$primary_work['pwc_id'];
		$primary_work_classify=$primary_work_classifyM->where($whereBB)->find();
		$this->assign('primary_work_classify',$primary_work_classify);

		//查询分类信息
		$primary_work_classify_res=$this->selectprimaryclassify();
		$this->assign('primary_work_classify_res',$primary_work_classify_res);
		$this->display();
	}
	//=======================================================
	//业务文章删除
	public function primary_work_del(){
		$primary_workM=D('primary_work');
		$whereBB['pw_id']=I('get.pw_id');
		$delres=$primary_workM->where($whereBB)->delete();
		if($delres){
					$this->success('保存成功',U('PrimaryWork/primary_work'));
				}else{
					$this->error('保存失败',U('PrimaryWork/primary_work'));
				}
	}
	//======================================================
	//文章内容管理
	public function primary_article(){
		$p=I('get.p');
		$this->assign('p',$p);
		//获取文章id
		$pw_id=I('get.pw_id');
		$this->assign('pw_id',$pw_id);
		//查询文章内容信息
		$primary_articleM=D('primary_article');
		$wherepw['pw_id']=$pw_id;
		$primary_article_res=$primary_articleM->where($wherepw)->order('pa_sort desc')->page($p,10)->select();
		$this->assign('primary_article_res',$primary_article_res);
        //dump($pw_id);exit;
		//查询包含的文章信息
		$primary_workM=D('primary_work');
		$pwarr=array();
		for($i=0;$i<count($primary_article_res);$i++){
			$whereBB['pw_id']=$primary_article_res[$i]['pw_id'];
			$primary_work=$primary_workM->where($whereBB)->find();
			$pwarr[]=$primary_work;
		}
		$this->assign('primary_work',$pwarr);
		//查询总页数
        $primary_article_count=$primary_articleM->select();
        $allcount=count($primary_article_count);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
		$this->display();
	}
	//========================================================
	//添加文章内容信息
	public function primary_article_add(){
		$p=I('get.p');
		$pw_id=I('get.pw_id');
		if($_POST){
			$primary_articleM=D('primary_article');
			$data['pa_content']=I('post.pa_content','',false);
			$data['pa_sort']=I('post.pa_sort');
			$data['pw_id']=$pw_id;
			$addres=$primary_articleM->add($data);
			if($addres){
				$this->success('保存成功',U('PrimaryWork/primary_article',array('pw_id'=>$pw_id,'p'=>$p)));
			}else{
				$this->error('保存失败',U('PrimaryWork/primary_article',array('pw_id'=>$pw_id,'p'=>$p)));
			}
			exit;
		}
		$this->display();
	}
	//======================================================
	//修改文章内容信息
	public function primary_article_update(){
		$p=I('get.p');
		$pw_id=I('get.pw_id');
		if($_POST){
			$primary_articleM=D('primary_article');
			$whereBB['pa_id']=I('post.pa_id');
			$data['pa_content']=I('post.pa_content','',false);
			$data['pa_sort']=I('post.pa_sort');
			$data['pw_id']=$pw_id;
			$saveres=$primary_articleM->where($whereBB)->save($data);
			if($saveres){
				$this->success('保存成功',U('PrimaryWork/primary_article',array('pw_id'=>$pw_id,'p'=>$p)));
			}else{
				$this->error('保存成功',U('PrimaryWork/primary_article',array('pw_id'=>$pw_id,'p'=>$p)));
			}
			exit;
		}
		//查询需要修改的信息
		$primary_articleM=D('primary_article');
		$whereAA['pa_id']=I('get.pa_id');
		$primary_article=$primary_articleM->where($whereAA)->find();
		$this->assign('primary_article',$primary_article);
		$this->display();
	}
	//=================================================================
	//删除文章内容信息
	public function primary_article_del(){
		$p=I('get.p');
		$pw_id=I('get.pw_id');
		//查询需要修改的信息
		$primary_articleM=D('primary_article');
		$whereAA['pa_id']=I('get.pa_id');
		$delres=$primary_articleM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('PrimaryWork/primary_article',array('pw_id'=>$pw_id,'p'=>$p)));
			}else{
				$this->error('保存成功',U('PrimaryWork/primary_article',array('pw_id'=>$pw_id,'p'=>$p)));
			}
	}
	//查询分类信息
	public function selectprimaryclassify(){
		$primary_work_classifyM=D('primary_work_classify');
		$primary_work_classify_res=$primary_work_classifyM->order('pwc_sort desc')->select();
		return $primary_work_classify_res;
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