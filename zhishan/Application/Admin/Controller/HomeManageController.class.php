<?php
namespace Admin\Controller;
use Think\Controller;
class HomeManageController extends CommonController{
	public function left(){
		$this->display();
	}
	//==============================================
	//服务优势
	public function service_advantage(){
		 $p=I('get.p');
		 $this->assign('p',$p);
         $service_advantageM=D('service_advantage');
         $service_advantage_res=$service_advantageM->order('sa_sort desc')->page($p,10)->select();
         $this->assign('service_advantage_res',$service_advantage_res);
         //总页数
         $service_advantage_count=$service_advantageM->order('sa_sort desc')->select();
         $allcount=count($service_advantage_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);

         
         $this->display();
	}
	//=============================================
	//添加服务优势
	public function service_advantage_add(){
		if($_POST){
			$service_advantageM=D('service_advantage');
			$data['sa_advantage_classify']=I('post.sa_advantage_classify');
			$data['sa_advantage_title']=I('post.sa_advantage_title');
			$data['sa_advantage_content']=I('post.sa_advantage_content','',false);
			$data['sa_image']=I('post.sa_image');
			$data['sa_sort']=I('post.sa_sort');
			$addres=$service_advantageM->add($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/service_advantage'));
			}else{
				$this->error('保存失败',U('HomeManage/service_advantage'));
			}
			exit;
		}
		$this->display();
	}
	//=============================================
	//修改服务优势
	public function service_advantage_update(){
		if($_POST){
			$service_advantageM=D('service_advantage');
			$whereBB['sa_id']=I('post.sa_id');
			$data['sa_advantage_classify']=I('post.sa_advantage_classify');
			$data['sa_advantage_title']=I('post.sa_advantage_title');
			$data['sa_advantage_content']=I('post.sa_advantage_content','',false);
			$data['sa_image']=I('post.sa_image');
			$data['sa_sort']=I('post.sa_sort');
			$addres=$service_advantageM->where($whereBB)->save($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/service_advantage'));
			}else{
				$this->error('保存失败',U('HomeManage/service_advantage'));
			}
			exit;
		}
		$service_advantageM=D('service_advantage');
		$whereAA['sa_id']=I('get.sa_id');
		$service_advantage=$service_advantageM->where($whereAA)->find();
		$this->assign('service_advantage',$service_advantage);
		$this->display();
	}
	//================================================
	//删除服务优势
	public function service_advantage_del(){
		$service_advantageM=D('service_advantage');
		$whereAA['sa_id']=I('get.sa_id');
		$delres=$service_advantageM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('HomeManage/service_advantage'));
			}else{
				$this->error('保存失败',U('HomeManage/service_advantage'));
			}
	}
	//============================================================
	//合作企业
	public function cooperate_company(){
		$p=I('get.p');
		$this->assign('p',$p);
		$cooperate_companyM=D('cooperate_company');
		$cooperate_company_res=$cooperate_companyM->order('cc_sort desc')->page($p,10)->select();
		$this->assign('cooperate_company_res',$cooperate_company_res);
		//总页数
		$cooperate_company_count=$cooperate_companyM->order('cc_sort desc')->select();
		$allcount=count($cooperate_company_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);

		$this->display();
	}
	//============================================================
	//添加合作企业
	public function cooperate_company_add(){
		if($_POST){
			$cooperate_companyM=D('cooperate_company');
			$data['cc_name']=I('post.cc_name');
			$data['cc_image']=I('post.cc_image');
			/*$data['cc_author']=I('post.cc_author');
			$data['cc_origin']=I('post.cc_origin');*/
			$data['cc_update']=time();
			$data['cc_sort']=I('post.cc_sort');
			$addres=$cooperate_companyM->add($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/cooperate_company'));
			}else{
				$this->error('保存失败',U('HomeManage/cooperate_company'));
			}
			exit;
		}
		$this->display();
	}
	//=============================================================
	//修改合作企业信息
	public function cooperate_company_update(){
		if($_POST){
			$cooperate_companyM=D('cooperate_company');
			$whereBB['cc_id']=I('post.cc_id');
			$data['cc_name']=I('post.cc_name');
			$data['cc_image']=I('post.cc_image');
			/*$data['cc_author']=I('post.cc_author');
			$data['cc_origin']=I('post.cc_origin');*/
			$data['cc_update']=time();
			$data['cc_sort']=I('post.cc_sort');
			$saveres=$cooperate_companyM->where($whereBB)->save($data);
			if($saveres){
				$this->success('保存成功',U('HomeManage/cooperate_company'));
			}else{
				$this->error('保存失败',U('HomeManage/cooperate_company'));
			}
			exit;
		}
		$cooperate_companyM=D('cooperate_company');
        $whereAA['cc_id']=I('get.cc_id');
		$cooperate_company=$cooperate_companyM->where($whereAA)->find();
		$this->assign('cooperate_company',$cooperate_company);
	    $this->display();
	}
    //========================================================
    //删除合作信息
    public function cooperate_company_del(){
    	$cooperate_companyM=D('cooperate_company');
        $whereAA['cc_id']=I('get.cc_id');
		$delres=$cooperate_companyM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('HomeManage/cooperate_company'));
			}else{
				$this->error('保存失败',U('HomeManage/cooperate_company'));
			}
    }
    
}
?>