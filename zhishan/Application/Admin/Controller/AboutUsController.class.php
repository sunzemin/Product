<?php
namespace Admin\Controller;
use Think\Controller;
class AboutUsController extends CommonController{
	public function left(){
		$this->display();
	}
	//================================================================
	//公司简介
	public function company_introduce(){
		$company_introduceM=D('company_introduce');
		$company_introduce_res=$company_introduceM->order('ci_sort desc')->select();
		$this->assign('company_introduce_res',$company_introduce_res);
		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($company_introduce_res);$i++){
            $whereAA['nav_id']=$company_introduce_res[$i]['nav_id'];
            $navres=$navM->where($whereAA)->find();
            $navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
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
			$data['ci_content']=I('post.ci_content','',false);
			$data['ci_sort']=I('post.ci_sort');
			$data['ci_logo']=I('post.ci_logo');
			$data['ci_telephone']=I('post.ci_telephone');
			$data['nav_id']=I('post.nav_id');
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
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//================================================================
	//修改公司简介信息
	public function company_introduce_update(){
		if($_POST){
			$company_introduceM=D('company_introduce');
			$whereAA['ci_id']=1;
			$data['ci_name']=I('post.ci_name');
			$data['ci_content']=I('post.ci_content','',false);
			$data['ci_sort']=I('post.ci_sort');
			$data['ci_logo']=I('post.ci_logo');
			$data['ci_telephone']=I('post.ci_telephone');
			$data['nav_id']=I('post.nav_id');
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
        
        //查询修改信息包含的导航
        $navM=D('nav');
        $whereBB['nav_id']=$company_introduce['nav_id'];
        $navs=$navM->where($whereBB)->find();
        $this->assign('navs',$navs);
        //dump($navs);exit;
		//查询导航
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
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
	//=================================================================
	//企业文化
	public function company_culture(){
		$company_cultureM=D('company_culture');
		$company_culture_res=$company_cultureM->order('cc_sort desc')->select();
		$this->assign('company_culture_res',$company_culture_res);
		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($company_culture_res);$i++){
			$whereAA['nav_id']=$company_culture_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
			$navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//==================================================================
	//添加企业文化
	public function company_culture_add(){
		if($_POST){
			$company_cultureM=D('company_culture');
			$wherecc['cc_id']=1;
			$selres=$company_cultureM->where($wherecc)->find();
			$data['cc_content']=I('post.cc_content','',false);
			$data['cc_sort']=I('post.cc_sort');
			$data['nav_id']=I('post.nav_id');
			if($selres){
                $addres=$company_cultureM->where($wherecc)->save($data);
			}else{
				$data['cc_id']=1;
				$addres=$company_cultureM->add($data);
			}
			if($addres){
				$this->success('保存成功',U('AboutUs/company_culture'));
			}else{
				$this->error('保存失败',U('AboutUs/company_culture'));
			}
			exit;
		}
		$company_cultureM=D('company_culture');
		$whereBB['cc_id']=1;
		$company_culture=$company_cultureM->where($whereBB)->find();
		//dump($company_culture);exit;
		$this->assign('company_culture',$company_culture);
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=========================================================
	//修改企业文化
	public function company_culture_update(){
		if($_POST){
			$company_cultureM=D('company_culture');
			$whereAA['cc_id']=1;
			$data['cc_content']=I('post.cc_content','',false);
			$data['cc_sort']=I('post.cc_sort');
			$data['nav_id']=I('post.nav_id');
			$saveres=$company_cultureM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('AboutUs/company_culture'));
			}else{
				$this->error('保存失败',U('AboutUs/company_culture'));
			}
			exit;
		}
		$company_cultureM=D('company_culture');
		$whereci['cc_id']=1;
		$company_culture=$company_cultureM->where($whereci)->find();
		$this->assign('company_culture',$company_culture);
		//查询修改信息包含的导航
		$navM=D('nav');
		$whereBB['nav_id']=$company_culture['nav_id'];
		$navs=$navM->where($whereBB)->find();
		$this->assign('navs',$navs);
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=======================================================
	//删除企业分化
	public function company_culture_del(){
		$company_cultureM=D('company_culture');
		$whereci['cc_id']=1;
		$delres=$company_cultureM->where($whereci)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/company_culture'));
			}else{
				$this->error('保存失败',U('AboutUs/company_culture'));
			}
	}
	//======================================================
	//荣誉资质
	public function certificate(){
		$p=I('get.p');
		$this->assign('p',$p);
		//查询资质荣誉
		$certificateM=D('certificate');
		$certificate_res=$certificateM->order('sort desc')->page($p,10)->select();
		$this->assign('certificate_res',$certificate_res);
		//获取总页数
		$certificate_count=$certificateM->order('sort desc')->select();
		$allcount=count($certificate_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);
		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($certificate_res);$i++){
			$whereAA['nav_id']=$certificate_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
			$navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//======================================================
	//添加荣誉资质
	public function certificate_add(){
		if($_POST){
			$certificateM=D('certificate');
			$data['title']=I('post.title');
			$data['image']=I('post.image');
			
			$data['update']=time();
			$data['sort']=I('post.sort');
			$data['nav_id']=I('post.nav_id');
			$addres=$certificateM->add($data);
			if($addres){
				$this->success('保存成功',U('AboutUs/certificate'));
			}else{
				$this->error('保存失败',U('AboutUs/certificate'));
			}
			exit;
		}
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//========================================================
	//修改荣誉资质
	public function certificate_update(){
		if($_POST){
			$certificateM=D('certificate');
			$whereBB['id']=I('post.id');
			$data['title']=I('post.title');
			$data['image']=I('post.image');
			
			$data['update']=time();
			$data['sort']=I('post.sort');
			$data['nav_id']=I('post.nav_id');
			$selres=$certificateM->where($whereBB)->save($data);
			if($selres){
				$this->success('保存成功',U('AboutUs/certificate'));
			}else{
				$this->error('保存失败',U('AboutUs/certificate'));
			}
			exit;
		}
		$certificateM=D('certificate');
		$whereAA['id']=I('get.id');
		$certificate=$certificateM->where($whereAA)->find();
		$this->assign('certificate',$certificate);
		
		//查询修改信息包含的导航
		$navM=D('nav');
		$whereCC['nav_id']=$certificate['nav_id'];
		$navs=$navM->where($whereCC)->find();
		$this->assign('navs',$navs);

		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//========================================================
	//删除荣誉资质
	public function certificate_del(){
		$certificateM=D('certificate');
		$whereAA['id']=I('get.id');
		$delres=$certificateM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/certificate'));
			}else{
				$this->error('保存失败',U('AboutUs/certificate'));
			}
	}
	//========================================================
	//领导致辞
	public function speech(){
		$leader_speechM=D('leader_speech');
		$leader_speech_res=$leader_speechM->order('ls_sort desc')->select();
		$this->assign('leader_speech_res',$leader_speech_res);
		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($leader_speech_res);$i++){
			$whereAA['nav_id']=$leader_speech_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
			$navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//==========================================================
	//添加领导致辞
	public function speech_add(){
		if($_POST){
			$leader_speechM=D('leader_speech');
			$wherecc['ls_id']=1;
			$selres=$leader_speechM->where($wherecc)->find();
			$data['ls_content']=I('post.ls_content','',false);
			$data['ls_sort']=I('post.ls_sort');
			$data['nav_id']=I('post.nav_id');
			if($selres){
                $addres=$leader_speechM->where($wherecc)->save($data);
			}else{
				$data['ls_id']=1;
				$addres=$leader_speechM->add($data);
			}
			if($addres){
				$this->success('保存成功',U('AboutUs/speech'));
			}else{
				$this->error('保存失败',U('AboutUs/speech'));
			}
			exit;
		}
		$leader_speechM=D('leader_speech');
		$whereBB['ls_id']=1;
		$leader_speech=$leader_speechM->where($whereBB)->find();
		$this->assign('leader_speech',$leader_speech);

		//查询包含的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$leader_speech['nav_id'];
		$navs=$navM->where($whereCC)->find();
		$this->assign('navs',$navs);

		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//============================================================
	//修稿冷到致辞
	public function speech_update(){
		if($_POST){
			$leader_speechM=D('leader_speech');
			$whereAA['ls_id']=1;
			$data['ls_content']=I('post.ls_content','',false);
			$data['ls_sort']=I('post.ls_sort');
			$data['nav_id']=I('post.nav_id');
			$saveres=$leader_speechM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('AboutUs/speech'));
			}else{
				$this->error('保存失败',U('AboutUs/speech'));
			}
			exit;
		}
		$leader_speechM=D('leader_speech');
		$whereBB['ls_id']=1;
		$leader_speech=$leader_speechM->where($whereBB)->find();
		$this->assign('leader_speech',$leader_speech);

		//查询包含的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$leader_speech['nav_id'];
		$navs=$navM->where($whereCC)->find();
		$this->assign('navs',$navs);
		
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//====================================================
	//删除领导致辞
	public function speech_del(){
		//dump('123');exit;
		$leader_speechM=D('leader_speech');
		$whereBB['ls_id']=I('get.ls_id');
		$delres=$leader_speechM->where($whereBB)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/speech'));
			}else{
				$this->error('保存失败',U('AboutUs/speech'));
			}
	}
	//==========================================================
	//适合行业
	public function proper_bussiness(){
		$p=I('get.p');
		$this->assign('p',$p);
		$proper_bussinessM=D('proper_bussiness');
		$proper_bussiness_res=$proper_bussinessM->order('pb_sort desc')->page($p,10)->select();
		$this->assign('proper_bussiness_res',$proper_bussiness_res);

		//获取总页数
		$proper_bussiness_count=$proper_bussinessM->order('pb_sort desc')->select();
		$allcount=count($proper_bussiness_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);

		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($proper_bussiness_res);$i++){
			$whereAA['nav_id']=$proper_bussiness_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
			$navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//===========================================================
	//添加适合行业
	public function proper_bussiness_add(){
		$p=I('get.p');
		if($_POST){
			$proper_bussinessM=D('proper_bussiness');
			//$whereBB['id']=I('post.id');
			$data['pb_name']=I('post.pb_name');
			$data['pb_image']=I('post.pb_image');
			$data['pb_sort']=I('post.pb_sort');
			$data['pb_name']=I('post.pb_name');
			$data['nav_id']=I('post.nav_id');
			$addres=$proper_bussinessM->add($data);
			if($addres){
				$this->success('保存成功',U('AboutUs/proper_bussiness',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/proper_bussiness',array('p'=>$p)));
			}
			exit;
		}
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=============================================================
	//修改适合行业信息
	public function proper_bussiness_update(){
		$p=I('get.p');
		if($_POST){
			$proper_bussinessM=D('proper_bussiness');
			$whereBB['pb_id']=I('post.pb_id');
			$data['pb_name']=I('post.pb_name');
			$data['pb_image']=I('post.pb_image');
			$data['pb_sort']=I('post.pb_sort');
			$data['nav_id']=I('post.nav_id');
			$saveres=$proper_bussinessM->where($whereBB)->save($data);
			if($saveres){
				$this->success('保存成功',U('AboutUs/proper_bussiness',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/proper_bussiness',array('p'=>$p)));
			}
			exit;
		}
		$proper_bussinessM=D('proper_bussiness');
		$whereAA['pb_id']=I('get.pb_id');
		$selres=$proper_bussinessM->where($whereAA)->find();
		$this->assign('proper_bussiness',$selres);	

		//查询包含的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$selres['nav_id'];
		$navs=$navM->where($whereCC)->find();
		$this->assign('navs',$navs);
		
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);	
		$this->display();
	}
	//============================================================
	//适合行业信息删除
	public function proper_bussiness_del(){
		$p=I('get.p');
		$proper_bussinessM=D('proper_bussiness');
		$whereAA['pb_id']=I('get.pb_id');
		$delres=$proper_bussinessM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/proper_bussiness',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/proper_bussiness',array('p'=>$p)));
			}
	}

	//==========================================================
	//适合行业
	public function company_team(){
		$p=I('get.p');
		$this->assign('p',$p);
		$company_teamM=D('company_team');
		$company_team_res=$company_teamM->order('ct_sort desc')->page($p,10)->select();
		$this->assign('company_team_res',$company_team_res);

		//获取总页数
		$company_team_count=$company_teamM->order('ct_sort desc')->select();
		$allcount=count($company_team_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);

		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($company_team_res);$i++){
			$whereAA['nav_id']=$company_team_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
			$navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//===========================================================
	//添加适合行业
	public function company_team_add(){
		$p=I('get.p');
		if($_POST){
			$company_teamM=D('company_team');
			//$whereBB['id']=I('post.id');
			$data['ct_content']=I('post.ct_content','',false);
			$data['nav_id']=I('post.nav_id');
			$data['ct_sort']=I('post.ct_sort');
			$data['ct_image']=I('post.ct_image');
			$data['ct_title']=I('post.ct_title');
			$addres=$company_teamM->add($data);
			if($addres){
				$this->success('保存成功',U('AboutUs/company_team',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/company_team',array('p'=>$p)));
			}
			exit;
		}
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=============================================================
	//修改适合行业信息
	public function company_team_update(){
		$p=I('get.p');
		if($_POST){
			$company_teamM=D('company_team');
			$whereBB['ct_id']=I('post.ct_id');
			$data['ct_content']=I('post.ct_content','',false);
			$data['nav_id']=I('post.nav_id');
			$data['ct_sort']=I('post.ct_sort');
			$data['ct_image']=I('post.ct_image');
			$data['ct_title']=I('post.ct_title');
			$saveres=$company_teamM->where($whereBB)->save($data);
			if($saveres){
				$this->success('保存成功',U('AboutUs/company_team',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/company_team',array('p'=>$p)));
			}
			exit;
		}
		$company_teamM=D('company_team');
		$whereAA['ct_id']=I('get.ct_id');
		$selres=$company_teamM->where($whereAA)->find();
		$this->assign('company_team',$selres);

		//查询包含的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$selres['nav_id'];
		$navs=$navM->where($whereCC)->find();
		$this->assign('navs',$navs);
		
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);	
		$this->display();
	}
	//============================================================
	//适合行业信息删除
	public function company_team_del(){
		$p=I('get.p');
		$company_teamM=D('company_team');
		$whereAA['ct_id']=I('get.ct_id');
		$delres=$company_teamM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/company_team',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/company_team',array('p'=>$p)));
			}
	}
	//分类管理
	public function about_classify(){
		$p=I('get.p');
		$this->assign('p',$p);
		$about_us_classifyM=D('about_us_classify');
		$about_us_classify_res=$about_us_classifyM->order('auc_sort desc')->page($p,10)->select();
		$this->assign('about_us_classify_res',$about_us_classify_res);

		//获取总页数
		$about_us_classify_count=$about_us_classifyM->order('auc_sort desc')->select();
		$allcount=count($about_us_classify_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);

		//查询包含的导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($about_us_classify_res);$i++){
			$whereAA['nav_id']=$about_us_classify_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
			$navarr[]=$navres;
		}
		//dump($navarr);exit;
		$this->assign('navarr',$navarr);
		$this->display();
	}
	//============================================================
	//添加分类
	public function about_classify_add(){
		$p=I('get.p');
		if($_POST){
			$about_us_classifyM=D('about_us_classify');
			//$whereBB['id']=I('post.id');
			
			$data['nav_id']=I('post.nav_id');
			$data['auc_sort']=I('post.auc_sort');
			$data['auc_name']=I('post.auc_name');
			//dump($data);exit;
			$addres=$about_us_classifyM->add($data);
			//
			if($addres){
				$this->success('保存成功',U('AboutUs/about_classify',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/about_classify',array('p'=>$p)));
			}
			exit;
		}
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//==============================================================
	//分类修改
    public function about_classify_update(){
    	$p=I('get.p');
		if($_POST){
			$about_us_classifyM=D('about_us_classify');
			$whereBB['auc_id']=I('post.auc_id');
			
			$data['nav_id']=I('post.nav_id');
			$data['auc_sort']=I('post.auc_sort');
			$data['auc_name']=I('post.auc_name');
			//dump()
			$saveres=$about_us_classifyM->where($whereBB)->save($data);
			if($saveres){
				$this->success('保存成功',U('AboutUs/about_classify',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/about_classify',array('p'=>$p)));
			}
			exit;
		}
		$about_us_classifyM=D('about_us_classify');
		$whereAA['auc_id']=I('get.auc_id');
		$selres=$about_us_classifyM->where($whereAA)->find();
		$this->assign('about_us_classify',$selres);

		//查询包含的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$selres['nav_id'];
		$navs=$navM->where($whereCC)->find();
		$this->assign('navs',$navs);
		
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
    }
    //=========================================================
    public function  about_classify_del(){
    	$p=I('get.p');
    	$about_us_classifyM=D('about_us_classify');
		$whereAA['auc_id']=I('get.auc_id');
		$delres=$about_us_classifyM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/about_classify',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/about_classify',array('p'=>$p)));
			}
    }
    //=========================================================
    /*public function about_article(){
    	$p=I('get.p');
		$this->assign('p',$p);
		$about_articleM=D('about_article');
		$about_article_res=$about_articleM->order('aa_sort desc')->page($p,10)->select();
		$this->assign('about_article_res',$about_article_res);

		//获取总页数
		$about_article_count=$about_articleM->order('aa_sort desc')->select();
		$allcount=count($about_article_count);
		$page=ceil($allcount/10);
		$this->assign('page',$page);

		//查询包含的分类信息
		$about_us_classifyM=D('about_us_classify');
		$about_us_classify_arr=array();
		for($i=0;$i<count($about_article_res);$i++){
			$whereAA['auc_id']=$about_article_res[$i]['auc_id'];
			$about_us_classify_res=$about_us_classifyM->where($whereAA)->find();
			$about_us_classify_arr[]=$about_us_classify_res;
		}
		$this->assign('about_us_classify_res',$about_us_classify_arr);
		$this->display();
    }*/
    //============================================================
    //添加文章信息
    /*public function about_article_add(){
    	$p=I('get.p');
		if($_POST){
			$about_articleM=D('about_article');
			
			$data['aa_name']=I('post.aa_name');
			$data['aa_name1']=I('post.aa_name1');
			$data['aa_name2']=I('post.aa_name2');
			$data['aa_image']=I('post.aa_image');
			$data['aa_image1']=I('post.aa_image1');
			$data['aa_image2']=I('post.aa_image2');
			$data['aa_sort']=I('post.aa_sort');
			$data['aa_content']=I('post.aa_content','',false);
			$data['auc_id']=I('post.auc_id');
			
			//dump($data);exit;
			$addres=$about_articleM->add($data);
			//
			if($addres){
				$this->success('保存成功',U('AboutUs/about_article',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/about_article',array('p'=>$p)));
			}
			exit;
		}
		$about_us_classifyM=D('about_us_classify');
		$about_us_classify_res=$about_us_classifyM->order('auc_sort desc')->select();
		$this->assign('about_us_classify_res',$about_us_classify_res);
		$this->display();
    }*/

    /*public function about_article_update(){
    	$p=I('get.p');
		if($_POST){
			$about_articleM=D('about_article');
			$whereBB['aa_id']=I('post.aa_id');
			$data['aa_name']=I('post.aa_name');
			$data['aa_name1']=I('post.aa_name1');
			$data['aa_name2']=I('post.aa_name2');
			$data['aa_image']=I('post.aa_image');
			$data['aa_image1']=I('post.aa_image1');
			$data['aa_image2']=I('post.aa_image2');
			$data['aa_sort']=I('post.aa_sort');
			$data['aa_content']=I('post.aa_content','',false);
			$data['auc_id']=I('post.auc_id');
			
			//dump($data);exit;
			$saveres=$about_articleM->where($whereBB)->save($data);
			//
			if($saveres){
				$this->success('保存成功',U('AboutUs/about_article',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/about_article',array('p'=>$p)));
			}
			exit;
		}
		//查询分类
		$about_us_classifyM=D('about_us_classify');
		$about_us_classify_res=$about_us_classifyM->order('auc_sort desc')->select();
		$this->assign('about_us_classify_res',$about_us_classify_res);

		//查询修改文章
		$about_articleM=D('about_article');
		$whereBB['aa_id']=I('get.aa_id');
		$about_article=$about_articleM->where($whereBB)->find();
		$this->assign('about_article',$about_article)
		$this->display();
    }
     //==========================================================
     //删除文章信息
     public function about_article_del(){
     	$about_articleM=D('about_article');
		$whereBB['aa_id']=I('get.aa_id');
		$delres=$about_articleM->where($whereBB)->delete();
		if($delres){
				$this->success('保存成功',U('AboutUs/about_article',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('AboutUs/about_article',array('p'=>$p)));
			}
     }*/



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