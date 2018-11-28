<?php
namespace Mobile\Controller;
use Think\Controller;
class PublicController extends Controller{
	//查询导航信息
	public function nav(){
		//查询一级导航
		$navM=D('nav');
		$whereAA['fid']=0;
		$navres=$navM->where($whereAA)->select();

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

	//查询轮播信息
	public function lunbo($k){
		$lunboM=D('lunbo');
		$whereAA['nav_id']=$k;
		$lunboRes=$lunboM->where($whereAA)->select();
		return $lunboRes;
	}

	//查询底部信息
	public function footer(){
		$footerM=D('footer');
		$footerres=$footerM->order('fsort desc')->select();
		return $footerres;
	}

	//查询公司简介
	public function company_introduce(){
		$company_introduceM=D('company_introduce');
		$company_introduce_res=$company_introduceM->order('ci_sort desc')->find();
		return $company_introduce_res;
	}
	
}
?>