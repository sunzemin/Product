<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller{
	public function index(){
        $public=A('Public');
        //查询导航信息
        $navall=$public->nav();
        $this->assign('navres',$navall[0]);
        $this->assign('navsec',$navall[1]);
        //该导航ID
        $nav_id=I('get.nav_id');
        if(isset($nav_id)){
            $nav_id=I('get.nav_id');
        }
        $nav_id=$navall[0][0]['nav_id'];
        $this->assign('nav_id',$nav_id);
		//dump($nav_id);
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
		//首页分类信息
		$home_classifyM=D('home_classify');
	    $home_classify_res=$home_classifyM->order('hc_sort desc')->select();
	    $this->assign('home_classify_res',$home_classify_res);
		//首页二级分类
		$home_little_classifyM=D('home_little_classify');
		$hlcarr=array();
		for($i=0;$i<count($home_classify_res);$i++){
			$wherehc['hc_id']=$home_classify_res[$i]['hc_id'];
			$home_little_classify11=$home_little_classifyM->where($wherehc)->order('hlc_sort desc')->select();
		    $hlcarr[]=$home_little_classify11;
		}
        $this->assign('home_little_classify_res',$hlcarr);
		//推荐到首页的分类信息
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
            $little_classify_res=$little_classifyM->where($whereal)->page(1,12)->select();
            $licount=count($little_classify_res);
            //查询所有二级分类下面的文章信息
            $caarray=array();
            for($j=0;$j<count($little_classify_res);$j++){
                $wherelc['lc_id']=$little_classify_res[$j]['lc_id'];
                $classify_article_res=$classify_articleM->where($wherelc)->find();
                $caarray[]=$classify_article_res;
            }
            $littlearray[]=$little_classify_res;
            $littlelength[]=$licount;
            $allcaarr[]=$caarray;
        }
        $this->assign('classify_article_res',$allcaarr);
        $this->assign('little_classify_count',$littlelength);
        $this->assign('little_classify_res',$littlearray);
		//dump($littlearray);
		//我们的优势
		$all_headM=D('all_head');
        $all_head_Data=$all_headM->order('ah_sort desc')->page(1,3)->select();
        $this->assign('all_head_Data',$all_head_Data);
		//新闻信息
		$wherenews['lc_id']=$littlearray[0][0]['lc_id'];
		$classify_article_res123=$classify_articleM->where($wherenews)->order('ca_sort desc')->page(1,3)->select();
		$this->assign('classify_article_res123',$classify_article_res123);
		//地图信息
		$mapM=D('map');
		$whereid['id']=1;
		$map=$mapM->where($whereid)->find();
		$this->assign('map',$map);
		//dump($map);
        $this->display();
    }
    public function huodongcehua(){
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //本导航信息
		$navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
		$public=A('Public');
        //查询导航信息
        $navall=$public->nav();
        $this->assign('navres',$navall[0]);
        $this->assign('navsec',$navall[1]);
		
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
        $this->display();
    }
	public function lianxiwomen(){
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //本导航信息
		$navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
		
		$public=A('Public');
        //查询导航信息
        $navall=$public->nav();
        $this->assign('navres',$navall[0]);
        $this->assign('navsec',$navall[1]);
		
		//底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
		//地图信息
		$mapM=D('map');
		$whereid['id']=1;
		$map=$mapM->where($whereid)->find();
		$this->assign('map',$map);
		//背景图片
        $background_image_data=$public->background_image($nav_id);
        $this->assign('background_image_data',$background_image_data);
		
        $this->display();
    }
	public function xinwen(){
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
		//本导航信息
		$navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
        
		$public=A('Public');
        //查询导航信息
        $navall=$public->nav();
        $this->assign('navres',$navall[0]);
        $this->assign('navsec',$navall[1]);
		
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
        $whereflag['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($whereflag)->find();
        $this->assign('all_classify',$all_classify);
		//二级分类信息
		$little_classifyM=D('little_classify');
		$whereacid['ac_id']=$all_classify['ac_id'];
		$little_classify_res=$little_classifyM->where($whereacid)->order('lc_sort desc')->select();
		$this->assign('little_classify_res',$little_classify_res);
        $this->display();
    }
public function text(){
    	$nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
		//查询本导航信息
        $navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
    	$public=A('Public');
        //查询导航信息
        $navall=$public->nav();
        $this->assign('navres',$navall[0]);
        $this->assign('navsec',$navall[1]);
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
		//文章信息
        $articleM=D('article');
        $articleData=$articleM->order('sort desc')->find();
        $this->assign('articleData',$articleData);
        $this->display();
    }
    public function wenyiyanchu(){
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //本导航信息
		$navM=D('nav');
        $wherenavid['nav_id']=$nav_id;
        $navben=$navM->where($wherenavid)->find();
        $this->assign('navben',$navben);
		$public=A('Public');
        //查询导航信息
        $navall=$public->nav();
        $this->assign('navres',$navall[0]);
        $this->assign('navsec',$navall[1]);
		
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
        
        $this->display();
    }
}
?>