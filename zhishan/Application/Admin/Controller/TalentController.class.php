<?php
namespace Admin\Controller;
use Think\Controller;
class TalentController extends CommonController{
	public function left(){
       $this->display();
	}
	//==========================================
	//招聘职位信息
	public function job(){
		$p=I('get.p');
		$this->assign('p',$p);
		//查询招聘职位
		$jobM=D('job');
		$job_res=$jobM->order('jsort desc')->page($p,10)->select();
        $this->assign('job_res',$job_res);

        //求取导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($job_res);$i++){
			$whereAA['nav_id']=$job_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
            $navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);

        //查询总页数
        $job_count=$jobM->select();
        $allcount=count($job_count);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
		$this->display();
	}
	//==========================================
	//添加信息
	public function jobadd(){
		$p=I('get.p');
		
		if($_POST){
			$jobM=D('job');
			$data['jjob']=I('post.jjob');
			$data['jname']=I('post.jname');
			$data['jnum']=I('post.jnum');
			$data['jrequire']=I('post.jrequire','',false);
			$data['jmethod']=I('post.jmethod','',false);
			$data['jresponsible']=I('post.jresponsible','',false);
			$data['jsort']=I('post.jsort');
			$data['nav_id']=I('post.nav_id');
			$addres=$jobM->add($data);
			if($addres){
				$this->success('保存成功',U('Talent/job',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('Talent/job',array('p'=>$p)));
			}
			exit;
		}
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=================================================
	//修改所需职位信息
	public function jobupdate(){
		$p=I('get.p');
		if($_POST){
			$jobM=D('job');
			$whereAA['jid']=I('post.jid');
			$data['jname']=I('post.jname');
			$data['jjob']=I('post.jjob');
			$data['jnum']=I('post.jnum');
			$data['jrequire']=I('post.jrequire','',false);
			$data['jmethod']=I('post.jmethod','',false);
			$data['jresponsible']=I('post.jresponsible','',false);
			$data['jsort']=I('post.jsort');
			$data['nav_id']=I('post.nav_id');
			$saveres=$jobM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('Talent/job',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('Talent/job',array('p'=>$p)));
			}
			exit;
		}
		//查询所修改的职位信息
		$jobM=D('job');
		$whereBB['jid']=I('get.jid');
		$job=$jobM->where($whereBB)->find();
		$this->assign('job',$job);

		//所包含的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$job['nav_id'];
		$nav=$navM->where($whereCC)->find();
		$this->assign('nav',$nav);
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//删除所招职位信息
	public function jobdel(){
		$p=I('get.p');
		$jobM=D('job');
		$whereBB['jid']=I('get.jid');
		$delres=$jobM->where($whereBB)->delete();
		if($delres){
				$this->success('保存成功',U('Talent/job',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('Talent/job',array('p'=>$p)));
			}
	}
	//=========================================
	//简历回收
	public function employee(){
		$p=I('get.p');
		$this->assign('p',$p);
		//查询招聘职位
		$employeeM=D('employee');
		$employee_res=$employeeM->order('tsort desc')->page($p,10)->select();
        $this->assign('employee_res',$employee_res);

        //求取导航信息
		$navM=D('nav');
		$navarr=array();
		for($i=0;$i<count($employee_res);$i++){
			$whereAA['nav_id']=$employee_res[$i]['nav_id'];
			$navres=$navM->where($whereAA)->find();
            $navarr[]=$navres;
		}
		$this->assign('navarr',$navarr);

        //查询总页数
        $employee_count=$employeeM->select();
        $allcount=count($employee_count);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
		$this->display();
		
	}
	//================================================
	//添加简历回收信息
	public function employee_add(){
		$jid=I('get.jid');
		
		if($_POST){
			$employeeM=D('employee');
			$data['tname']=I('post.tname');
			$data['tage']=I('post.tage');
			$data['ttelephone']=I('post.ttelephone');
			$data['tsex']=I('post.tsex');
			$data['temail']=I('post.temail');
			$data['taddress']=I('post.taddress');
			$data['teducation']=I('post.teducation','',false);
			$data['tworking']=I('post.tworking','',false);
			$data['tmessage']=I('post.tmessage','',false);
			$data['tsort']=I('post.tsort');
			$data['nav_id']=I('post.nav_id');
			//dump(I('post.tsex'));exit;
			$addres=$employeeM->add($data);
			if($addres){
				$this->success('保存成功',U('Home/Index/recruit1',array('jid'=>$jid)));
			}else{
				$this->error('保存失败',U('Home/Index/recruit1',array('jid'=>$jid)));
			}
			exit;
		}
	}
	//================================================
	//修改简历回收信息
	public function employee_update(){
		$p=I('get.p');
		if($_POST){
			$employeeM=D('employee');
			$whereAA['tid']=I('post.tid');
			$data['tname']=I('post.tname');
			$data['tage']=I('post.tage');
			$data['tsex']=I('post.tsex');
			$data['ttelephone']=I('post.ttelephone');
			$data['temail']=I('post.temail');
			$data['taddress']=I('post.taddress');
			$data['teducation']=I('post.teducation','',false);
			$data['tworking']=I('post.tworking','',false);
			$data['tmessage']=I('post.tmessage','',false);
			$data['tsort']=I('post.tsort');
			$data['nav_id']=I('post.nav_id');
			$saveres=$employeeM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('Talent/employee',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('Talent/employee',array('p'=>$p)));
			}
			exit;
		}
		//查询所修改的职位信息
		$employeeM=D('employee');
		$whereBB['tid']=I('get.tid');
		$employee=$employeeM->where($whereBB)->find();
		$this->assign('employee',$employee);

		//所包含的导航信息
		$navM=D('nav');
		$whereCC['nav_id']=$employee['nav_id'];
		$nav=$navM->where($whereCC)->find();
		$this->assign('nav',$nav);
		//查询导航信息
		$navall=$this->selnav();
		$this->assign('navres',$navall[0]);
		$this->assign('navarr',$navall[1]);
		$this->display();
	}
	//=================================================
	//删除简历回收信息
	public function employee_del(){
		$employeeM=D('employee');
		$whereBB['tid']=I('get.tid');
		$delres=$employeeM->where($whereBB)->delete();
		if($delres){
				$this->success('保存成功',U('Talent/employee',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('Talent/employee',array('p'=>$p)));
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