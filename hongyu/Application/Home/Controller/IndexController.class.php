<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);

        //该导航ID
        $nav_id=I('get.nav_id');
        if(isset($nav_id)){
            $nav_id=I('get.nav_id');
        }
        $nav_id=$navres[0]['nav_id'];
        //dump($nav_id);
        $this->assign('nav_id',$nav_id);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //dump($lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //产品中心数据
        $all_classifyM=D('all_classify');
        $whereflag['ac_flag']=1;
        $all_classify_res=$all_classifyM->where($whereflag)->select();
        $this->assign('all_classify_res',$all_classify_res);
        //查询二级分类信息
        $littlearray=array();
        $little_classifyM=D('little_classify');
        $classify_articleM=D('classify_article');
        $allcaarr=array();
        $littlelength=array();
        for($i=0;$i<count($all_classify_res);$i++){
            $whereal['ac_id']=$all_classify_res[$i]['ac_id'];
            $little_classify_res=$little_classifyM->where($whereal)->select();
            $licount=count($little_classify_res);
            //查询所有二级分类下面的文章信息
            $caarray=array();
            for($j=0;$j<count($little_classify_res);$j++){
                $wherelc['lc_id']=$little_classify_res[$j]['lc_id'];
                $classify_article_res=$classify_articleM->where($wherelc)->select();
                $caarray[]=$classify_article_res;
            }
            $littlearray[]=$little_classify_res;
            $littlelength[]=$licount;
            $allcaarr[]=$caarray;
        }
        $this->assign('classify_article_res',$allcaarr);
        $this->assign('little_classify_count',$littlelength);
        $this->assign('little_classify_res',$littlearray);
        //场景信息
        $sceneM=D('scene');
        $scene_Data=$sceneM->order('sort desc')->select();
        $this->assign('scene_Data',$scene_Data);
        //案例信息查询
        $caseM=D('case');
        $caseData=$caseM->order('sort desc')->page(1,5)->select();
        $this->assign('caseData',$caseData);
        //图标信息
        $home_decorate_titleM=D('home_decorate_title');
        $home_decorate_titleData=$home_decorate_titleM->order('hdt_sort desc')->page(1,6)->select();
        $this->assign('home_decorate_titleData',$home_decorate_titleData);
        //一级分类信息
        //$all_classifyM=D('all_classify');
        $wherenavid['nav_id']=$nav_id;
        $all_classify11=$all_classifyM->where($wherenavid)->find();
        $this->assign('all_classify11',$all_classify11);
        //查询二级分类信息
        $wherelc11['ac_id']=$all_classify11['ac_id'];
        $little_classify_res11=$little_classifyM->where($wherelc11)->page(1,3)->select();
        $this->assign('little_classify_res11',$little_classify_res11);
        //二级分类下面的文章信息
        $caarr11=array();
        for($k=0;$k<count($little_classify_res11);$k++){
            $wherelcid1['lc_id']=$little_classify_res11[$k]['lc_id'];
            $classify_article_res11=$classify_articleM->where($wherelcid1)->page(1,3)->select();
            $caarr11[]=$classify_article_res11;
        }
        $this->assign('classify_article_res11',$caarr11);
        //头部信息
        $all_headM=D('all_head');
        $whereahnav['nav_id']=$nav_id;
        $all_head_Data=$all_headM->where($whereahnav)->find();
        $this->assign('all_head_Data',$all_head_Data);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/aboutUs/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function anlizhanshi(){
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);

    	$public=A('Public');
    	//查询导航信息
    	$navres=$public->nav();
    	$this->assign('navres',$navres);
    	//查询轮播信息
    	$lunboData=$public->lunbo($nav_id);
    	$this->assign('lunboData',$lunboData);
    	//底部信息
		$footer=$public->footer();
		$this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
		$company_introduce=$company_introduceM->find();
		$this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
		//精彩花絮
        $p=I('get.p');
        if($p!=null){
            $p=I('get.p');
        }else{
            $p=1;
        }
		/*$short_videoM=D('short_video');
        $short_videoData=$short_videoM->order('sv_sort desc')->page($p,10)->select();
        $this->assign('short_videoData',$short_videoData);
        //精彩花絮数据个数
        $svallcount=$short_videoM->order('sv_sort desc')->select();
        $short_videocount=count($svallcount);
        $this->assign('short_videocount',$short_videocount);
        //总页数
        $allpage=ceil($short_videocount/10);
        $this->assign('allpage',$allpage);
        //第几页
        $this->assign('p',$p);*/
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/jingcaihuaxu/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function pinpaijianjie(){
    	//获取导航ID
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);

        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        //品牌介绍
        $all_classifyM=D('all_classify');
        $wherealid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($wherealid)->find();
        $this->assign('all_classify',$all_classify);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->select();
        $this->assign('little_classify_res',$little_classify_res);
        //查询文章信息
        $classify_articleM=D('classify_article');
        $wherelcid['lc_id']=$little_classify_res[1]['lc_id'];
        $classify_article_res=$classify_articleM->where($wherelcid)->select();
        $this->assign('classify_article_res',$classify_article_res);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/kehupingjia/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function quanwujichengzhengzhuang(){
    	//获取导航ID
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);

        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/keyangxinshang/nav_id/$nav_id'</script>";
        }

        $this->display();
    }
    public function zuixinzixun(){
    	$nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);

        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/zuixintehui/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function quanwuzhineng(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);

        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        //全屋智能数据
        //品牌介绍
        $all_classifyM=D('all_classify');
        $wherealid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($wherealid)->find();
        $this->assign('all_classify',$all_classify);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->select();
        $this->assign('little_classify_res',$little_classify_res);
        //二级分类个数
        $little_classify_count=count($little_classify_res);
        $this->assign('allcount',$little_classify_count);
        $caarr=array();
        $classify_articleM=D('classify_article');
        for($i=0;$i<count($little_classify_res);$i++){
            $wherelcid['lc_id']=$little_classify_res[$i]['lc_id'];
            $classify_article=$classify_articleM->where($wherelcid)->find();
            $caarr[]=$classify_article;
        }
        $this->assign('classify_article_res',$caarr);
        //头部信息
        $all_head=$public->allhead($nav_id);
        $this->assign('all_head',$all_head);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/zuixintehui/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function xinwenxiangqing(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        
        //新闻详情
        $classify_articleM=D('classify_article');
        $whereacid['ca_id']=I('get.ca_id');
        $classify_article=$classify_articleM->where($whereacid)->find();
        $this->assign('classify_article',$classify_article);
        //dump($classify_article);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $wherelcid['lc_id']=$classify_article['lc_id'];
        $little_classify=$little_classifyM->where($wherelcid)->find();
        $this->assign('little_classify',$little_classify);
        
        //一级分类详情
        $all_classifyM=D('all_classify');
        $whereacid['ac_id']=$little_classify['ac_id'];
        $all_classify=$all_classifyM->where($whereacid)->find();
        $this->assign('all_classify',$all_classify);
        //背景图片
        $binav=$all_classify['nav_id'];
        $background_image_data=$public->background_image($binav);
        $this->assign('background_image_data',$background_image_data);
        //数据数量
        $wherelcid11['lc_id']=$little_classify['lc_id'];
        $classify_article_count=$classify_articleM->where($wherelcid11)->select();
        $caallcount=count($classify_article_count);
        //dump($classify_article_count);
        //最后一个数据
        $endcaid=$classify_article_count[$caallcount-1]['ca_id'];
        $aftercaid=I('get.ca_id')+1;
        //$this->assign('aftercaid',$aftercaid);
        $lc_id=$classify_article['lc_id'];
        while($aftercaid<=$endcaid){
            $whereend['ca_id']=$aftercaid;
            $whereend['lc_id']=$lc_id;
            $classify_article11=$classify_articleM->where($whereend)->find();
            if($classify_article11!=null){
                $this->assign('classify_article11',$classify_article11);
                break;
            }
            $aftercaid++;
        }
        //前一个数据
        $precaid=I('get.ca_id')-1;
        while($precaid>0){
            $wherepre['ca_id']=$precaid;
            $wherepre['lc_id']=$lc_id;
            $classify_article12=$classify_articleM->where($wherepre)->find();
            if($classify_article12!=null){
                $this->assign('classify_article12',$classify_article12);
                break;
            }
            $precaid--;
        }
        //查询案例详情
        $id=I('get.id');
        $caseM=D('case');
        $wherecaid['id']=$id;
        $case=$caseM->where($wherecaid)->find();
        $this->assign('case',$case);
        //案例总数
        $caseall=$caseM->select();
        $caseallcount=count($caseall);
        //最后一个案例信息
        $endcaseid=$caseall[$caseallcount-1]['id'];
        //前一个案例数据
        $preid=$id-1;
        if($preid>0){
            $this->assign('preid',$preid);
            $wherepre['id']=$preid;
            $precase=$caseM->where($wherepre)->find();
            $this->assign('precase',$precase);
        }else{
            $this->assign('preid',0);
        }
        //$this->assign('preid',$preid);
        //后一个案例数据
        $nextid=$id+1;
        if($nextid<=$endcaseid){
            $this->assign('nextid',$nextid);
            $wherenext['id']=$nextid;
            $nextcase=$caseM->where($wherenext)->find();
            $this->assign('nextcase',$nextcase);
        }else{
            $this->assign('nextid',0);
        }
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/erjifenlei/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function lianxiwomen(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/erjifenlei/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function changjingtiyanzhongxin(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/erjifenlei/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function chanpinzhongxin(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/erjifenlei/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function jiamengzhongxin(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        //一级分类信息
        $all_classifyM=D('all_classify');
        $whereacnav['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($whereacnav)->find();
        $this->assign('all_classify',$all_classify);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->select();
        //二级分类下的文章信息
        $classify_articleM=D('classify_article');
        $caarr=array();
        for($i=0;$i<count($little_classify_res);$i++){
            $wherelcid['lc_id']=$little_classify_res[$i]['lc_id'];
            $classify_article_res=$classify_articleM->where($wherelcid)->select();
            $caarr[]=$classify_article_res;
        }
        $this->assign('classify_article_res',$caarr);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/erjifenlei/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function quanwujichengxiangqing(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        $navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        //一级分类信息
        $all_classifyM=D('all_classify');
        $whereacnav['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($whereacnav)->find();
        $this->assign('all_classify',$all_classify);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['lc_id']=I('get.lc_id');
        $little_classify=$little_classifyM->where($whereacid)->find();
        $this->assign('little_classify',$little_classify);
        //二级分类下的文章信息
        $classify_articleM=D('classify_article');
        $wherelcid['lc_id']=$little_classify['lc_id'];
        $classify_article_res=$classify_articleM->where($wherelcid)->select();
        $this->assign('classify_article_res',$classify_article_res);
        //最后一个分类的信息
        $wherelcnav['ac_id']=$all_classify['ac_id'];
        $little_classify_allres=$little_classifyM->where($wherelcnav)->select();
        $lcallcount=count($little_classify_allres);
        //最后二级分类的id
        $endlcid=$little_classify_allres[$lcallcount-1]['lc_id'];
        $afterid=I('get.lc_id')+1;
        while($afterid<=$endlcid){
            $whereafter['lc_id']=$afterid;
            $whereafter['ac_id']=$all_classify['ac_id'];
            $little_classify11=$little_classifyM->where($whereafter)->find();
            if($little_classify11!=null){
                $this->assign('little_classify11',$little_classify11);
            }
            $afterid++;
        }
        //前一个元素
        $preid=I('get.lc_id')-1;
        while($preid>0){
            $wherepre['lc_id']=$preid;
            $wherepre['ac_id']=$all_classify['ac_id'];
            $little_classify12=$little_classifyM->where($whereafter)->find();
            if($little_classify12!=null){
                $this->assign('little_classify12',$little_classify12);
            }
            $preid++;
        }
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/erjifenlei/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    function isMobile()
    { 
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        {
            return true;
        } 
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA']))
        { 
            // 找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        } 
        // 脑残法，判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT']))
        {
            $clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
                ); 
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            {
                return true;
            } 
        } 
        // 协议法，因为有可能不准确，放到最后判断
        if (isset ($_SERVER['HTTP_ACCEPT']))
        { 
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
            {
                return true;
            } 
        }   
        return false;
    } 


}