<?php
namespace Admin\Controller;
use Think\Controller;
class PolicyController extends CommonController{
	public function left(){
		$this->display();
	}
	//===================================================
	//政策法规分类
	public function policy_classify(){
		$p=I('get.p');
		$this->assign('p',$p);
		//查询分类
		$policy_classifyM=D('policy_classify');
		$policy_classify_res=$policy_classifyM->order('pc_sort desc')->page($p,10)->select();
		$this->assign('policy_classify_res',$policy_classify_res);
		//获取总页数
		$policy_classify_count=$policy_classifyM->select();
		$allcount=count($policy_classify_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);

		//查询包含的导航信息
        $navM=D('nav');
        $navarr=array();
        for($i=0;$i<count($policy_classify_res);$i++){
            $whereAA['nav_id']=$policy_classify_res[$i]['nav_id'];
            $navres=$navM->where($whereAA)->find();
            $navarr[]=$navres;
        }
        $this->assign('navarr',$navarr);
		$this->display();
	}
	//===================================================
	//添加政策分类
	public function policy_classify_add(){
		if($_POST){
			$policy_classifyM=D('policy_classify');
			$data['pc_name']=I('post.pc_name');
			$data['pc_sort']=I('post.pc_sort');
			$data['nav_id']=I('post.nav_id');
			$addres=$policy_classifyM->add($data);
			if($addres){
				$this->success('保存成功',U('Policy/policy_classify'));
			}else{
				$this->error('保存失败',U('Policy/policy_classify'));
			}
			exit;
		}
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//====================================================
	//修改政策分类
	public function policy_classify_update(){
		if($_POST){
			$policy_classifyM=D('policy_classify');
			$whereBB['pc_id']=I('post.pc_id');
			$data['pc_name']=I('post.pc_name');
			$data['pc_sort']=I('post.pc_sort');
			$data['nav_id']=I('post.nav_id');
			$saveres=$policy_classifyM->where($whereBB)->save($data);
			if($saveres){
				$this->success('保存成功',U('Policy/policy_classify'));
			}else{
				$this->error('保存失败',U('Policy/policy_classify'));
			}
			exit;
		}
		$policy_classifyM=D('policy_classify');
		$whereAA['pc_id']=I('get.pc_id');
		$policy_classify=$policy_classifyM->where($whereAA)->find();
		$this->assign('policy_classify',$policy_classify);

		//查询修改信息包含的导航
        $navM=D('nav');
        $whereBB['nav_id']=$policy_classify['nav_id'];
        $navs=$navM->where($whereBB)->find();
        $this->assign('navs',$navs);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
		$this->display();
	}
	//======================================================
	//删除政策分类
	public function policy_classify_del(){
		$policy_classifyM=D('policy_classify');
		$whereAA['pc_id']=I('get.pc_id');
		$delres=$policy_classifyM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('Policy/policy_classify'));
			}else{
				$this->error('保存失败',U('Policy/policy_classify'));
			}
	}
	//=====================================================
	//政策文章
	public function policy_article(){
		$p=I('get.p');
		$this->assign('p',$p);
		//查询政策法规
		$policy_articleM=D('policy_article');
		$pc_id=I('get.pc_id');
		$whereAA['pc_id']=I('get.pc_id');
		$policy_article_res=$policy_articleM->where($whereAA)->order('pa_sort desc')->page($p,10)->select();
		$this->assign('pc_id',$pc_id);
        $this->assign('policy_article_res',$policy_article_res);
        //查询总页数
        $policy_article_count=$policy_articleM->where($whereAA)->select();
        $allcount=count($policy_article_count);
        $page=ceil($allcount/10);
        $this->assign('page',$page);

		$this->display();
	}
	//=====================================================
	//添加政策文章
	public function policy_article_add(){
		 $pc_id=I('get.pc_id');
         if($_POST){
			$policy_articleM=D('policy_article');
			$data['pa_title']=I('post.pa_title');
			$data['pa_content']=I('post.pa_content','',false);
			
			$data['pa_update']=time();
			$data['pa_sort']=I('post.pa_sort');
			$data['pc_id']=$pc_id;
			$addres=$policy_articleM->add($data);
			if($addres){
				$this->success('保存成功',U('Policy/policy_article',array('pc_id'=>$pc_id,'p'=>1)));
			}else{
				$this->error('保存失败',U('Policy/policy_article',array('pc_id'=>$pc_id,'p'=>1)));
			}
			exit;
		}
		$this->display();
	}
	//======================================================
	//修改政策文章
	public function policy_article_update(){
		$pc_id=I('get.pc_id');
         if($_POST){
			$policy_articleM=D('policy_article');
			$whereAA['pa_id']=I('post.pa_id');
			$data['pa_title']=I('post.pa_title');
			$data['pa_content']=I('post.pa_content','',false);
			
			$data['pa_update']=time();
			$data['pa_sort']=I('post.pa_sort');
			$data['pc_id']=$pc_id;
			$saveres=$policy_articleM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('Policy/policy_article',array('pc_id'=>$pc_id,'p'=>1)));
			}else{
				$this->error('保存失败',U('Policy/policy_article',array('pc_id'=>$pc_id,'p'=>1)));
			}
			exit;
		}
		$policy_articleM=D('policy_article');
		$whereBB['pa_id']=I('get.pa_id');
		$policy_article=$policy_articleM->where($whereBB)->find();
		$this->assign('policy_article',$policy_article);
		$this->display();
	}
	//============================================================
	//删除政策文章信息
	public function policy_article_del(){
		$pc_id=I('get.pc_id');
		$policy_articleM=D('policy_article');
		$whereBB['pa_id']=I('get.pa_id');
		$delres=$policy_articleM->where($whereBB)->delete();
		if($delres){
				$this->success('保存成功',U('Policy/policy_article',array('pc_id'=>$pc_id,'p'=>1)));
			}else{
				$this->error('保存失败',U('Policy/policy_article',array('pc_id'=>$pc_id,'p'=>1)));
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