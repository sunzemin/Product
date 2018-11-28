<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller{
	public function index(){
		$public=A('Public');
    	//公司简介信息
    	$company_introduce=$public->company_introduce();
    	$this->assign('company_introduce',$company_introduce);

        //查询导航信息
        $navM=D('nav');
        $wherecinav['nav_id']=$company_introduce['nav_id'];
    	$cinav=$navM->where($wherecinav)->find();
        $this->assign('cinav',$cinav);

    	//查询导航信息
    	$nav=$public->nav();
    	$this->assign('navres',$nav[0]);
    	$this->assign('navarr',$nav[1]);
    	
    	//查询轮播信息
    	$lunboData=$public->lunbo(0);
    	$this->assign('lunboData',$lunboData);

    	//查询主营业务
    	$primary_work_classify=D('primary_work_classify');
    	$primary_work_classify_res=$primary_work_classify->order('pwc_sort desc')->select();
    	$this->assign('primary_work_classify_res',$primary_work_classify_res);
        //dump($primary_work_classify_res);
        //查询链接
        
        $navurlarr=array();
        for($i=0;$i<count($primary_work_classify_res);$i++){
            $whereurl['nav_id']=$primary_work_classify_res[$i]['nav_id'];
            $navlls=$navM->where($whereurl)->find();
            $navurlarr[]=$navlls;
        }
        //dump($navurlarr);
        $this->assign('nav_classify_res',$navurlarr);

    	//查询主营业务文章
    	$primary_workM=D('primary_work');
		$wherewpc['pw_flag']=1;
		$primary_works=$primary_workM->where($wherewpc)->select();
    	$this->assign('primary_works_res',$primary_works);
       
       //查询分类信息
        $primary_work_classify_secarr=array();
        for($j=0;$j<count($primary_works);$j++){
            $wherese['pwc_id']=$primary_works[$j]['pwc_id'];
            $primary_work_classify_sec=$primary_work_classify->where($wherese)->find();
            $primary_work_classify_secarr[]=$primary_work_classify_sec;
        }
        $navsecarr=array();
        for($k=0;$k<count($primary_work_classify_secarr);$k++){
            $wheresecnav['nav_id']=$primary_work_classify_secarr[$k]['nav_id'];
            $navsec=$navM->where($wheresecnav)->find();
            $navsecarr[]=$navsec;
        }
        $this->assign('navsecnav',$navsecarr);
        
        //适合行业信息
    	$proper_bussinessM=D('proper_bussiness');
		$proper_bussiness_res=$proper_bussinessM->order('pb_sort desc')->select();
		$this->assign('proper_bussiness_res',$proper_bussiness_res);

		//服务优势
		$service_advantageM=D('service_advantage');
		$service_advantage_res=$service_advantageM->order('sa_sort desc')->select();
		$this->assign('service_advantage_res',$service_advantage_res);

		//合作企业
		$cooperate_companyM=D('cooperate_company');
		$cooperate_company_res=$cooperate_companyM->order('cc_sort desc')->select();
		$this->assign('cooperate_company_res',$cooperate_company_res);

		//公司与团队信息
		$company_teamM=D('company_team');
		$company_team_res=$company_teamM->order('ct_sort desc')->select();
		$this->assign('company_team_res',$company_team_res);


		//查询资质荣誉
		$certificateM=D('certificate');
		$certificate_res=$certificateM->order('sort desc')->select();
		$this->assign('certificate_res',$certificate_res);

		//查询链接信息
        $friend_urlM=D('friend_url');
        $friend_urlData=$friend_urlM->order('fu_sort desc')->select();
        $this->assign('friend_urlData',$friend_urlData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);
        
        //查询新闻分类信息
        $news_classifyM=D('news_classify');
        $news_classify_res=$news_classifyM->order('nc_sort desc')->page(1,2)->select();
        $this->assign('news_classify_res',$news_classify_res);

        //新闻所属导航
        $wherenew['nav_id']=$news_classify_res[0]['nav_id'];
        $newnav=$navM->where($wherenew)->find();

        //新闻所属父级导航
        $wherefidnew['nav_id']=$newnav['fid'];
        $newfid=$navM->where($wherefidnew)->find();
        $this->assign('fidnav',$newfid);
        //dump($newfid);

        //查询新闻文章
        $news_articleM=D('news_article');
        $news_article_arr=array();
        for($i=0;$i<count($news_classify_res);$i++){
            $wherenc['nc_id']=$news_classify_res[$i]['nc_id'];
            $news_article_res=$news_articleM->where($wherenc)->order('na_sort desc')->select();
            $news_article_arr[]=$news_article_res;
        }
        $this->assign('news_article_res',$news_article_arr);

        //查询分类
        $policy_classifyM=D('policy_classify');
        $wherepcname['pc_name']='常见问题';
        $policy_classify_res=$policy_classifyM->where($wherepcname)->find();
        $this->assign('policy_classify_res',$policy_classify_res);

        //查询政策法规
        $policy_articleM=D('policy_article');
        $wherepcid['pc_id']=$policy_classify_res['pc_id'];
        $policy_article_res=$policy_articleM->where($wherepcid)->order('pa_sort desc')->select();
        $this->assign('policy_article_res',$policy_article_res);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=0;
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
	}
	public function AboutUs(){
        //查询二级导航
        $nav_id=I('get.nav_id');
        $navM=D('nav');

        
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenavid['fid']=$nav_id;
        $navsecond=$navM->where($wherenavid)->select();
        $this->assign('navsecond',$navsecond);
        //dump($navsecond[0]['nav_name']);exit;
        //查询一级导航
        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst); 

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);
        //dump($lunboData);
        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //荣誉资质
        $certificateM=D('certificate');
        $certificateres=$certificateM->order('sort desc')->select();
        $this->assign('certificateres',$certificateres);

        //领导致辞
        $leader_speechM=D('leader_speech');
        $leader_speechres=$leader_speechM->order('ls_sort desc')->find();
        $this->assign('leader_speechres',$leader_speechres);

        //企业文化
        $company_cultureM=D('company_culture');
        $company_cultureres=$company_cultureM->order('cc_sort desc')->find();
        $this->assign('company_cultureres',$company_cultureres);

        //服务优势
        $service_advantageM=D('service_advantage');
        $service_advantageres=$service_advantageM->order('sa_sort desc')->select();
        $this->assign('service_advantage_res',$service_advantageres);
        //dump($service_advantageres);exit;

        //公司与团队
        $company_teamM=D('company_team');
        $company_team_res=$company_teamM->order('ct_sort desc')->select();
        $this->assign('company_team_res',$company_team_res);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$nav_id;
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    //===================================================
    //服务优势
    public function advantage(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        $navM=D('nav');
        
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst); 
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);
        //dump($navsecond11);exit;

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //服务优势
        $service_advantageM=D('service_advantage');
        $service_advantageres=$service_advantageM->order('sa_sort desc')->select();
        $this->assign('service_advantage_res',$service_advantageres);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    //=========================================================
    //企业文化
    public function Culture(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        
        $navM=D('nav');
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);

        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);
        //dump($navsecond11);exit;

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //企业文化
        $company_cultureM=D('company_culture');
        $company_cultureres=$company_cultureM->order('cc_sort desc')->find();
        $this->assign('company_cultureres',$company_cultureres);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);

        $this->display();
    }
    //==============================================================
    //荣誉资质
    public function Qualifications(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        $navM=D('nav');

       
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);
        //dump($navfirst);exit;
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);
        //dump($navsecond11);exit;

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //荣誉资质
        $certificateM=D('certificate');
        $certificateres=$certificateM->order('sort desc')->select();
        $this->assign('certificateres',$certificateres);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);

        $this->display();
    }
    //领导致辞
    public function Speech(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        $navM=D('nav');
        
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);
        
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);
        
        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);
        //dump($navsecond11);exit;

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //领导致辞
        $leader_speechM=D('leader_speech');
        $leader_speechres=$leader_speechM->order('ls_sort desc')->find();
        $this->assign('leader_speechres',$leader_speechres);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        //dump($leader_speechres);exit;
        $this->display();
    }
     //公司与团队
    public function team(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        $navM=D('nav');
        
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);
        //dump($navfirst);exit;
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);
        //dump($navsecond11);exit;

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //公司与团队信息
        $company_teamM=D('company_team');
        $company_team_res=$company_teamM->order('ct_sort desc')->select();
        $this->assign('company_team_res',$company_team_res);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    public function business(){
        $nav_id=I('get.nav_id');

        $this->assign('nav_id',$nav_id);

        //查询该导航ID
        $navM=D('nav');
        $whereben['nav_id']=$nav_id;
        $navben=$navM->where($whereben)->find();
        $this->assign('navben',$navben);

        //查询父级导航
        $wherefid['nav_id']=$navben['fid'];
        $fnav=$navM->where($wherefid)->find();
        $this->assign('fnav',$fnav);

        //查询该分类信息
        $primary_work_classifyM=D('primary_work_classify');
        $wherenavp['nav_id']=$nav_id;
        $primary_work_classify_res=$primary_work_classifyM->where($wherenavp)->find();
        $this->assign('primary_work_classify_res',$primary_work_classify_res);
        //dump($primary_work_classify_res);
        //查询该分类的文章信息
        $primary_workM=D('primary_work');
        $wherepwc['pwc_id']=$primary_work_classify_res['pwc_id'];
        $primary_work_res=$primary_workM->where($wherepwc)->select();
        $this->assign('primary_work_res',$primary_work_res);
        
        $wherepwc11['pw_id']=I('get.pw_id');
        $primary_work_res11=$primary_workM->where($wherepwc11)->find();
        $this->assign('primary_work_res11',$primary_work_res11);
        //dump($primary_work_res);
        $primary_articleM=D('primary_article');
        $wherepwa['pw_id']=I('get.pw_id');
        $primary_articles=$primary_articleM->where($wherepwa)->select();
        $primary_articlearr[]=$primary_articles;
        $this->assign('primary_article_res',$primary_articlearr);
        //dump($primary_articlearr);
        $wherepwa11['pw_id']=$primary_work_res[0]['pw_id'];
        $primary_articles11=$primary_articleM->where($wherepwa11)->select();
        $this->assign('primary_articles11',$primary_articles11);
        //dump($primary_articles11);
        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$fnav['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    public function lianxi(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        $navM=D('nav');

        
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);
        //dump($navfirst);exit;
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    public function team1(){
        $navM=D('nav');
        $nav_id=I('get.nav_id');

        //查询该导航信息
        $whereben['nav_id']=$nav_id;
        $navben=$navM->where($whereben)->find();
        $this->assign('navben',$navben);
        //dump($navben);
        
        //查询一级导航
        $wherefirst['nav_id']=$navben['fid'];
        $navfrist=$navM->where($wherefirst)->find();
        $this->assign('navfrist',$navfrist);

        //查询二级导航
        $wherefid['fid']=$navfrist['nav_id'];
        $navseconds=$navM->where($wherefid)->select();
        $this->assign('navseconds',$navseconds);
        
        //查询团队信息与公司信息
        $company_teamM=D('company_team');
        $wherectid['ct_id']=I('get.ct_id');
        $company_team=$company_teamM->where($wherectid)->find();
        $this->assign('company_team',$company_team);

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);
 
        
        $company_team_count=$company_teamM->select();
        $ctcount=count($company_team_count);

        //最后元素的na_id
        $endna_id=$company_team_count[$ctcount-1]['ct_id'];

        $k=I('get.ct_id');
        $w=$k;
        //查找前一个
        while(($k-1)>0){
            $wherenaid1['ct_id']=$k-1;
            //$wherenaid1['pc_id']=$policy_classify['pc_id'];
            $company_teams1=$company_teamM->where($wherenaid1)->find();
            if($company_teams1!=''){
                $this->assign('company_teams1',$company_teams1);
                break;
            }else{
                $k--;
            }
        }
        //dump($company_teams1);
        //下一个信息

        while(($w+1)<=$endna_id){
            $wherenaid2['ct_id']=$w+1;
            //$wherenaid2['pc_id']=$company_team['pc_id'];
            $company_teams2=$company_teamM->where($wherenaid2)->find();
            if($company_teams2!=''){
                $this->assign('company_teams2',$company_teams2);
                break;
            }else{
                $w++;
            }
        }
        //dump($company_teams2);
        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navfrist['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);

        $this->display();
    }
    //荣誉资质详情
    public function qualifications1(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        $navM=D('nav');

        
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);
        //dump($navfirst);exit;
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //荣誉资质
        $certificateM=D('certificate');
        $wherecid['id']=I('get.cid');
        $certificateres=$certificateM->where($wherecid)->find();
        $this->assign('certificateres',$certificateres);

        //前一个荣誉资质
        $wherecid1['id']=I('get.cid')-1;
        $certificate1=$certificateM->where($wherecid1)->find();
        $this->assign('certificate1',$certificate1);
        //dump($certificate1);

        //后一个荣誉资质
        $wherecid2['id']=I('get.cid')+1;
        $certificate2=$certificateM->where($wherecid2)->find();
        $this->assign('certificate2',$certificate2);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    public function news(){
        //查询二级导航
        $nav_id=I('get.nav_id');
        
        //查询一级导航
        $navM=D('nav');
        $wherenid['nav_id']=$nav_id;
        $navben=$navM->where($wherenid)->find();
        $this->assign('navben',$navben);
        //查询文章分类
        $news_classifyM=D('news_classify');
        $news_classify_res11=$news_classifyM->order('nc_sort desc')->select();
        $this->assign('news_classify_res11',$news_classify_res11);

        if($navben['fid']==0){
            $wherenid11['nav_id']=$nav_id;
            $navfirst=$navM->where($wherenid11)->find();
            $this->assign('navfirst',$navfirst);

            $wherenavid['fid']=$nav_id;
            $navsecond=$navM->where($wherenavid)->select();
            $this->assign('navsecond',$navsecond);
            $nc_id=$news_classify_res11[0]['nc_id'];
            $whereflag['bi_flag']=$nav_id;
        }else{

            //查询父级导航
            $wherenid11['nav_id']=$navben['fid'];
            $navfirst=$navM->where($wherenid11)->find();
            $this->assign('navfirst',$navfirst);

            //查询二级导航
            $wherenavid['fid']=$navfirst['nav_id'];
            $navsecond=$navM->where($wherenavid)->select();
            $this->assign('navsecond',$navsecond);
            $nc_id=I('get.nc_id');
            $whereflag['bi_flag']=$navfirst['nav_id'];
            
        }

        //查询文章分类
        $wherenc11['nc_id']=$nc_id;
        $news_classify_res=$news_classifyM->where($wherenc11)->find();
        $this->assign('news_classify_res',$news_classify_res);

         //查询文章内容信息
        $news_articleM=D('news_article');
        $wherepwa['nc_id']=$news_classify_res['nc_id'];
        $news_articles=$news_articleM->where($wherepwa)->select();
        $this->assign('news_article_res',$news_articles);
        //dump($news_articles);

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //查询背景图片
        $background_imageM=D('background_image');
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    //行业新闻
    public function news1(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航导航
        $navM=D('nav');

        
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=$nav_id;
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);
        //dump($navfirst);exit;
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);
        
        //行业信息
        $news_articleM=D('news_article');
        $wherenaid['na_id']=I('get.na_id');
        $news_articles=$news_articleM->where($wherenaid)->find();
        $this->assign('news_articles',$news_articles);

        //查询文章分类
        $news_classifyM=D('news_classify');
        $wherenc11['nc_id']=$news_articles['nc_id'];
        $news_classify_res=$news_classifyM->where($wherenc11)->find();
        $this->assign('news_classify_res',$news_classify_res);
        
        $wherealln['nc_id']=$news_articles['nc_id'];
        $news_article_count=$news_articleM->where($wherealln)->select();
        $countnew=count($news_article_count);
        //查询所有文章
       
        $news_articles_res=$news_articleM->where($wherealln)->select();
        $this->assign('news_articles_res',$news_articles_res);

        $endna_id=$news_articles_res[$countnew-1]['na_id'];
        //求最后夜歌
        $k=I('get.na_id');
        $w=$k;
        //查找前一个
        while(($k-1)>0){
            $wherenaid1['na_id']=$k-1;
            //$wherenaid1['nc_id']=$news_classify_res['nc_id'];
            $wherenaid1['nc_id']=$news_articles['nc_id'];
            $news_articles1=$news_articleM->where($wherenaid1)->find();
            if($news_articles1!=''){
                $this->assign('news_articles1',$news_articles1);
                break;
            }else{
                $k--;
            }
        }
        //下一个信息
        //dump($news_articles1);
        while(($w+1)<=$endna_id){
            $wherenaid2['na_id']=$w+1;
            $wherenaid2['nc_id']=$news_articles['nc_id'];
            $news_articles2=$news_articleM->where($wherenaid2)->find();
            if($news_articles2!=''){
                $this->assign('news_articles2',$news_articles2);
                break;
            }else{
                $w++;
            }
        }
        //dump($news_articles2);
        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    //政策法规
    public function policy(){
        //==========================
        //查询二级导航
        $nav_id=I('get.nav_id');
        
        //查询一级导航
        $navM=D('nav');
        $wherenid['nav_id']=$nav_id;
        $navben=$navM->where($wherenid)->find();
        $this->assign('navben',$navben);
        //查询文章分类
        $policy_classifyM=D('policy_classify');
        $policy_classify_res11=$policy_classifyM->order('pc_sort desc')->select();
        $this->assign('policy_classify_res11',$policy_classify_res11);

        if($navben['fid']==0){
            $wherenid11['nav_id']=$nav_id;
            $navfirst=$navM->where($wherenid11)->find();
            $this->assign('navfirst',$navfirst);

            $wherenavid['fid']=$nav_id;
            $navsecond=$navM->where($wherenavid)->select();
            $this->assign('navsecond',$navsecond);
            $whereflag['bi_flag']=$nav_id;
            $wherepc_id['pc_id']=$policy_classify_res11[0]['pc_id'];
        }else{

            //查询父级导航
            $wherenid11['nav_id']=$navben['fid'];
            $navfirst=$navM->where($wherenid11)->find();
            $this->assign('navfirst',$navfirst);

            //查询二级导航
            $wherenavid['fid']=$navfirst['nav_id'];
            $navsecond=$navM->where($wherenavid)->select();
            $this->assign('navsecond',$navsecond);
            $whereflag['bi_flag']=$navfirst['nav_id'];
            $wherepc_id['pc_id']=I('get.pc_id');
            
        }
        //======================

        //查询文章分类
        $policy_classify_res=$policy_classifyM->where($wherepc_id)->find();
        $this->assign('policy_classify_res',$policy_classify_res);
        //dump($policy_classify_res);
        //查询文章内容信息
        $policy_articleM=D('policy_article');
        
        $wherepwa['pc_id']=$policy_classify_res['pc_id'];
        $policy_articles=$policy_articleM->where($wherepwa)->select();
        
        $this->assign('policy_article_res',$policy_articles);
        //dump($policy_articles);
        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

         //查询背景图片
        $background_imageM=D('background_image');
        //$whereflag['bi_flag']=$nav_id;
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        
        $this->display();
    }
     //政策法规常见问题
    public function problem(){
        //==========================
        //查询二级导航
        $nav_id=I('get.nav_id');
        
        //查询一级导航
        $navM=D('nav');
        $wherenid['nav_id']=$nav_id;
        $navben=$navM->where($wherenid)->find();
        $this->assign('navben',$navben);
        //查询文章分类
        $policy_classifyM=D('policy_classify');
        $policy_classify_res11=$policy_classifyM->order('pc_sort desc')->select();
        $this->assign('policy_classify_res11',$policy_classify_res11);

        if($navben['fid']==0){
            $wherenid11['nav_id']=$nav_id;
            $navfirst=$navM->where($wherenid11)->find();
            $this->assign('navfirst',$navfirst);

            $wherenavid['fid']=$nav_id;
            $navsecond=$navM->where($wherenavid)->select();
            $this->assign('navsecond',$navsecond);
            $whereflag['bi_flag']=$nav_id;
            $wherepc_id['pc_id']=$policy_classify_res11[0]['pc_id'];
        }else{

            //查询父级导航
            $wherenid11['nav_id']=$navben['fid'];
            $navfirst=$navM->where($wherenid11)->find();
            $this->assign('navfirst',$navfirst);

            //查询二级导航
            $wherenavid['fid']=$navfirst['nav_id'];
            $navsecond=$navM->where($wherenavid)->select();
            $this->assign('navsecond',$navsecond);
            $whereflag['bi_flag']=$navfirst['nav_id'];
            $wherepc_id['pc_id']=I('get.pc_id');
            
        }
        //======================

        //查询文章分类
        $policy_classify_res=$policy_classifyM->where($wherepc_id)->find();
        $this->assign('policy_classify_res',$policy_classify_res);
        //dump($policy_classify_res);
        //查询文章内容信息
        $policy_articleM=D('policy_article');
        
        $wherepwa['pc_id']=$policy_classify_res['pc_id'];
        $policy_articles=$policy_articleM->where($wherepwa)->select();
        
        $this->assign('policy_article_res',$policy_articles);
        //dump($policy_articles);
        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

         //查询背景图片
        $background_imageM=D('background_image');
        //$whereflag['bi_flag']=$nav_id;
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        
        $this->display();
    }
    public function problem1(){
         //查询本导航导航
        $navM=D('nav');

        $nav_id=I('get.nav_id');
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $wherenid['nav_id']=I('get.nav_id');
        $navfirst=$navM->where($wherenid)->find();
        $this->assign('navfirst',$navfirst);
        //dump($navfirst);
        
        //查询一级导航
        $wherenavid['nav_id']=$navfirst['fid'];
        $navsecond=$navM->where($wherenavid)->find();
        $this->assign('navsecond',$navsecond);

        //查询二级导航
        $wherenaverid['fid']=$navsecond['nav_id'];
        $navsecond11=$navM->where($wherenaverid)->select();
        $this->assign('navsecond11',$navsecond11);
        //查询文章详情
        $policy_articleM=D('policy_article');
        $pa_id['pa_id']=I('get.pa_id');
        $policy_article=$policy_articleM->where($pa_id)->find();
        $this->assign('policy_article',$policy_article);
        //dump($policy_article);
        //查询分类情况
        $policy_classifyM=D('policy_classify');

        
        $policy_classify11=$policy_classifyM->order('pc_sort desc')->select();
        $this->assign('policy_classify11',$policy_classify11);

        $wherepcid['pc_id']=$policy_article['pc_id'];
        $policy_classify=$policy_classifyM->where($wherepcid)->find();
        $this->assign('policy_classify',$policy_classify);

        //查询

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        $wherealln['pc_id']=$policy_classify['pc_id'];
        $policy_article_count=$policy_articleM->where($wherealln)->select();
        $countnew=count($policy_article_count);
        //查询所有文章
       
        $policy_article_res=$policy_articleM->where($wherealln)->select();
        $this->assign('$policy_article_res',$policy_article_res);

        //最后元素的na_id
        $endna_id=$policy_article_res[$countnew-1]['pa_id'];

        $k=I('get.pa_id');
        $w=$k;
        //查找前一个
        while(($k-1)>0){
            $wherenaid1['pa_id']=$k-1;
            $wherenaid1['pc_id']=$policy_classify['pc_id'];
            $policy_articles1=$policy_articleM->where($wherenaid1)->find();
            if($policy_articles1!=''){
                $this->assign('policy_articles1',$policy_articles1);
                break;
            }else{
                $k--;
            }
        }
        //dump($policy_articles1);
        //下一个信息

        while(($w+1)<=$endna_id){
            $wherenaid2['pa_id']=$w+1;
            $wherenaid2['pc_id']=$policy_classify['pc_id'];
            $policy_articles2=$policy_articleM->where($wherenaid2)->find();
            if($policy_articles2!=''){
                $this->assign('policy_articles2',$policy_articles2);
                break;
            }else{
                $w++;
            }
        }
        //dump($policy_articles2);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=$navsecond['nav_id'];
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    public function personnel(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $navM=D('nav');
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //查询发布的职位
        $jobM=D('job');
        //总的条数
        $job_res=$jobM->order('jsort desc')->select();
        $allcount=count($job_res);
        $this->assign('allcount',$allcount);
        
        if(I('get.p')==''){
            $p=1;
        }else{
            $p=I('get.p');
        }
        
        $this->assign('p',$p);
        //总页数
        $job11_res=$jobM->order('jsort desc')->page($p,10)->select();
        $this->assign('job11_res',$job11_res);

        $page=ceil($allcount/10);
        $this->assign('page',$page);
        if($p==1){
            $p1=1;
        }else{
            $p1=$p-1;
        }
        $this->assign('p1',$p1);
        if($p==$page){
            $p2=$page;
        }else{
            $p2=$p+1;
        }
        $this->assign('p2',$p2);
        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=I('get.nav_id');
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        
        $this->display();
    }
    public function personnel1(){

        $navM=D('nav');
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //查询发布的职位
        $jobM=D('job');
        $wherejid['jid']=I('get.jid');
        $job=$jobM->where($wherejid)->find();
        $this->assign('job',$job);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=I('get.nav_id');
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        
        $this->display();
    }
    public function personnel2(){
        $nav_id=I('get.nav_id');
        
        $navM=D('nav');
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //查询发布的职位
        $jobM=D('job');
        $wherejid['jid']=I('get.jid');
        $job=$jobM->where($wherejid)->find();
        $this->assign('job',$job);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=I('get.nav_id');
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    public function contact(){
        $nav_id=I('get.nav_id');
        $navM=D('nav');
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //联系我们
        $link_usM=D('link_us');
        $link_us=$link_usM->order('lu_sort desc')->find();
        $this->assign('link_us',$link_us);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=I('get.nav_id');
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }
    public function Route(){
        $nav_id=I('get.nav_id');
        $navM=D('nav');
        $wherenav['nav_id']=$nav_id;
        $navben=$navM->where($wherenav)->find();
        $this->assign('navben',$navben);

        $public=A('Public');
        //公司简介信息
        $company_introduce=$public->company_introduce();
        $this->assign('company_introduce',$company_introduce);
        
        //查询导航信息
        $nav=$public->nav();
        $this->assign('navres',$nav[0]);
        $this->assign('navarr',$nav[1]);
        //dump($nav);exit;
        
        //查询轮播信息
        $lunboData=$public->lunbo(1);
        $this->assign('lunboData',$lunboData);

        //底部信息
        $footerM=D('footer');
        $footer=$footerM->order('fsort desc')->find();
        $this->assign('footer',$footer);

        //联系我们
        $link_usM=D('link_us');
        $link_us=$link_usM->order('lu_sort desc')->find();
        $this->assign('link_us',$link_us);

        //查询背景图片
        $background_imageM=D('background_image');
        $whereflag['bi_flag']=I('get.nav_id');
        $background_image_Data=$background_imageM->where($whereflag)->order('bi_sort desc')->select();
        //dump($background_image_Data);
        $this->assign('background_image_Data',$background_image_Data);
        $this->display();
    }

}
?>