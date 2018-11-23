<?php
namespace Admin\Controller;
use Think\Controller;
class AboutUsController extends CommonController{
	
    //================================================================
	//公司简介
	public function company_introduce(){
		$company_introduceM=D('company_introduce');
		$company_introduce_res=$company_introduceM->select();
		$this->assign('company_introduce_res',$company_introduce_res);
		$this->display();
	}
	//================================================================
	//公司简介添加
	public function company_introduce_add(){
		if($_POST){
			$company_introduceM=D('company_introduce');
			$whereci['ci_id']=1;
			$selres=$company_introduceM->where($whereci)->find();
			$data['ci_name']=I('post.ci_name');
			$data['ci_image']=I('post.ci_image');
			$data['ci_title']=I('post.ci_title');
			$data['ci_content']=I('post.ci_content','',false);
			$data['ci_logo']=I('post.ci_logo');
			if($selres){
                $addres=$company_introduceM->where($whereci)->save($data);
			}else{
				$data['ci_id']=1;
				$addres=$company_introduceM->add($data);
			}
			if($addres){
				$this->success('保存成功',U('AboutUs/company_introduce'));
			}else{
				$this->error('保存失败',U('AboutUs/company_introduce'));
			}
			exit;
		}
		$this->display();
	}
	//================================================================
	//修改公司简介信息
	public function company_introduce_update(){
		if($_POST){
			$company_introduceM=D('company_introduce');
			$whereAA['ci_id']=1;
			$data['ci_name']=I('post.ci_name');
			$data['ci_image']=I('post.ci_image');
			$data['ci_title']=I('post.ci_title');
			$data['ci_content']=I('post.ci_content','',false);
			$data['ci_logo']=I('post.ci_logo');
			$addres=$company_introduceM->where($whereAA)->save($data);
			if($addres){
				$this->success('保存成功',U('AboutUs/company_introduce'));
			}else{
				$this->error('保存失败',U('AboutUs/company_introduce'));
			}
			exit;
		}
		$company_introduceM=D('company_introduce');
		$whereci['ci_id']=1;
		$company_introduce=$company_introduceM->where($whereci)->find();
		$this->assign('company_introduce',$company_introduce);
		$this->display();
	}
	//================================================================
	//删除公司简介信息
	public function company_introduce_del(){
		$company_introduceM=D('company_introduce');
		$whereci['ci_id']=1;
		$delres=$company_introduceM->where($whereci)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/company_introduce'));
			}else{
				$this->error('保存失败',U('AboutUs/company_introduce'));
			}
	}
    //查询导航
    public function selnav(){
        $navM=D('nav');
        //查询一级导航
        $wherefid['nav_fid']=0;
        $navres=$navM->where($wherefid)->select();
        //$this->assign('navres',$navres);
        //查询二级导航
        $navcount=count($navres);
        $navarr=array();
        for($i=0;$i<$navcount;$i++){
            $wherefid['nav_fid']=$navres[$i]['nav_id'];
            $secondnav=$navM->where($wherefid)->select();
            $navarr[]=$secondnav;
        }
        //$this->assign('navarr',$navarr);
        $navall=array();
        $navall[]=$navres;
        $navall[]=$navarr;
        return $navall;
    }
}
?>