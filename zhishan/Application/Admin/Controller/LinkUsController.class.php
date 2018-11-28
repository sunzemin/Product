<?php
namespace Admin\Controller;
use Think\Controller;
class LinkUsController extends CommonController{
	public function left(){
		$this->display();
	}
	//==================================================
	//联系我们
	public function link(){
		$link_usM=D('link_us');
		$link_us_res=$link_usM->order('lu_sort desc')->select();
		$this->assign('link_us_res',$link_us_res);

		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($link_us_res);$i++){
			$whereAA['nav_id']=$link_us_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
			$navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//==================================================
	//添加联系我们
	public function link_add(){
		if($_POST){
			$link_usM=D('link_us');
			$whereAA['lu_id']=1;
			$data['lu_qq']=I('post.lu_qq');
			$data['lu_erweima']=I('post.lu_erweima');
			$data['lu_telephone']=I('post.lu_telephone');
			$data['lu_sort']=I('post.lu_sort');
			$data['lu_map']=I('post.lu_map','',false);
			$data['nav_id']=I('post.nav_id');
			$selres=$link_usM->where($whereAA)->find();
			if($selres){
				$addres=$link_usM->where($whereAA)->save($data);
			}else{
				$data['lu_id']=1;
				$addres=$link_usM->add($data);
			}
			if($addres){
				$this->success('保存成功',U('LinkUs/link'));
			}else{
				$this->error('保存失败',U('LinkUs/link'));
			}
			exit;
		}
		//查询联系我们信息
		$link_usM=D('link_us');
		$whereBB['lu_id']=1;
		$link_us_res=$link_usM->where($whereBB)->find();
		$this->assign('link_us_res',$link_us_res);

		//查询修改信息包含的导航
        $navM=D('nav');
        $whereBB['nav_id']=$link_us_res['nav_id'];
        $navs=$navM->where($whereBB)->find();
        $this->assign('navs',$navs);

		//查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=========================================================
	//修改联系我们的信息
	public function link_update(){
		if($_POST){
			$link_usM=D('link_us');
			$whereAA['lu_id']=1;
			$data['lu_qq']=I('post.lu_qq');
			$data['lu_erweima']=I('post.lu_erweima');
			$data['lu_telephone']=I('post.lu_telephone');
			$data['lu_sort']=I('post.lu_sort');
			$data['lu_map']=I('post.lu_map','',false);
			$data['nav_id']=I('post.nav_id');
			$saveres=$link_usM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('LinkUs/link'));
			}else{
				$this->error('保存失败',U('LinkUs/link'));
			}
			exit;
		}
		//查询联系我们信息
		$link_usM=D('link_us');
		$whereBB['lu_id']=1;
		$link_us_res=$link_usM->where($whereBB)->find();
		$this->assign('link_us_res',$link_us_res);

		//查询修改信息包含的导航
        $navM=D('nav');
        $whereBB['nav_id']=$link_us_res['nav_id'];
        $navs=$navM->where($whereBB)->find();
        $this->assign('navs',$navs);

		//查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=====================================================
	//删除联系我们
	public function link_del(){
		$link_usM=D('link_us');
		$whereBB['lu_id']=1;
		$delres=$link_usM->where($whereBB)->delete();
		if($delres){
				$this->success('保存成功',U('LinkUs/link'));
			}else{
				$this->error('保存失败',U('LinkUs/link'));
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