<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller{
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
        $this->assign('nav_id',$nav_id);
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
        //产品分类
        $product_classifyM=D('product_classify');
		$product_classify_res=$product_classifyM->order('pc_sort desc')->select();
		$this->assign('product_classify_res',$product_classify_res);
		//查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
		$this->display();
		

	}
    public function nav(){
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function pinpaijianjie(){
        //获取导航ID
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航
        $navM=D('nav');
        $wherenavid11['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid11)->find();
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
        //品牌介绍
        $all_classifyM=D('all_classify');
        $wherealid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($wherealid)->find();
        $this->assign('all_classify',$all_classify);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->order('lc_sort desc')->select();
        $this->assign('little_classify_res',$little_classify_res);
        //该二级分类名称
        $this->assign('little_classify12',$little_classify_res[0]);
        //查询文章信息
        $classify_articleM=D('classify_article');
        $wherelcid['lc_id']=$little_classify_res[1]['lc_id'];
        $classify_article_res=$classify_articleM->where($wherelcid)->select();
        $this->assign('classify_article_res',$classify_article_res);
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function pinpairongyu(){
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
        $wherealid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($wherealid)->find();
        $this->assign('all_classify',$all_classify);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->order('lc_sort desc')->select();
        $this->assign('little_classify_res',$little_classify_res);
        //dump($little_classify_res);
        //返回品牌荣誉的分类ID
        $this->assign('lc_id',$little_classify_res[1]['lc_id']);
       //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function anlizhanshi(){
        //获取导航ID
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //dump($nav_id);
        //查询本导航
        $navM=D('nav');
        $wherenavid11['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid11)->find();
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
        //dump($background_image_data);
        //精彩花絮
        $p=I('get.p');
        if($p!=null){
            $p=I('get.p');
        }else{
            $p=1;
        }
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function changjingtiyanzhongxin(){
        $nav_id=I('get.nav_id');
        //dump($nav_id);
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
        //一级分类详情
        $all_classifyM=D('all_classify');
        $whereacid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($whereacid)->find();
        $this->assign('all_classify',$all_classify);
        //头部信息
        $all_head=$public->allhead($nav_id);
        $this->assign('all_head',$all_head);
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function quanwuzhineng(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航
        $navM=D('nav');
        $wherenavid11['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid11)->find();
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
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
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
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function zuixinzixun(){
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航
        $navM=D('nav');
        $wherenavid11['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid11)->find();
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
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        //一级分类
        $all_classifyM=D('all_classify');
        $wherealid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($wherealid)->find();
        $this->assign('all_classify',$all_classify);
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->select();
        $this->assign('little_classify_res',$little_classify_res);
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
        //产品分类信息
        $product_classifyM=D('product_classify');
        $product_classify_res=$product_classifyM->order('pc_sort desc')->select();
         //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->assign('product_classify_res',$product_classify_res);
         //产品分类
        $pcnavid=I('get.snavid');
        $wherepcnavid['nav_id']=$pcnavid;
        $product_classifyben=$product_classifyM->where($wherepcnavid)->find();
        $this->assign('product_classifyben',$product_classifyben);
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
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
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
                break;
            }
            $afterid++;
        }
        //前一个元素
        $preid=I('get.lc_id')-1;
        while($preid>0){
            $wherepre['lc_id']=$preid;
            $wherepre['ac_id']=$all_classify['ac_id'];
            $little_classify12=$little_classifyM->where($wherepre)->find();
            if($little_classify12!=null){
                $this->assign('little_classify12',$little_classify12);
                break;
            }
            $preid--;
        }
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function chanpinxiangqing(){
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
        //产品分类
        $product_classifyM=D('product_classify');
         $product_classify_res=$product_classifyM->order('pc_sort desc')->select();
         $this->assign('product_classify_res',$product_classify_res);
         //该分类信息
         $pc_id=I('get.pc_id');
         $wherepc11['pc_id']=$pc_id;
         $product_classify11=$product_classifyM->where($wherepc11)->find();
         $this->assign('product_classify11',$product_classify11);
         //产品详情
         $productM=D('product');
         $whereAC['pid']=I('get.pid');
         $product11=$productM->where($whereAC)->find();
         $this->assign('product11',$product11);
         //该分类下的所有数据信息
         $wherepcidq['pc_id']=$product_classify11['pc_id'];
         $product_res=$productM->where($whereAC)->select();
         $this->assign('product_res',$product_res); 
         //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function quanwujichengzhengzhuang(){
        //获取导航ID
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询本导航
        $navM=D('nav');
        $wherenavid11['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid11)->find();
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
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        $navarr=$this->selnav();
        $this->assign('navres',$navarr[0]);
        $this->assign('navarr',$navarr[1]);
        $this->display();
    }
    public function xinwenxiangqing(){
    	//dump(I('get.ca_id'));
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
        //dump($little_classify);
        //一级分类详情
        $all_classifyM=D('all_classify');
        $whereacid['ac_id']=$little_classify['ac_id'];
        $all_classify=$all_classifyM->where($whereacid)->find();
        $this->assign('all_classify',$all_classify);
        
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
        //背景图片
        /*$binav=$all_classify['nav_id'];*/
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
        $this->display();
    }
    //查询导航
    public function selnav(){
        $navM=D('nav');
        //查询一级导航
        $wherefid['nav_fid']=0;
        $navres=$navM->where($wherefid)->select();
        //查询二级导航
        $navcount=count($navres);
        $navarr=array();
        for($i=0;$i<$navcount;$i++){
            $wherefid['nav_fid']=$navres[$i]['nav_id'];
            $secondnav=$navM->where($wherefid)->select();
            $navarr[]=$secondnav;
        }
        $navall=array();
        $navall[]=$navres;
        $navall[]=$navarr;
        return $navall;
    }
}
?>