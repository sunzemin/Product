<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
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
        $this->assign('navben',$navall[0][0]);
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
		//dump($classify_article_res123);
		//地图信息
		$mapM=D('map');
		$whereid['id']=1;
		$map=$mapM->where($whereid)->find();
		$this->assign('map',$map);
		//dump($map);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/index/nav_id/$nav_id'</script>";
        }
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
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/huodongcehua/nav_id/$nav_id'</script>";
        }
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
		
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/lianxiwomen/nav_id/$nav_id'</script>";
        }
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
        
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/wenyiyanchu/nav_id/$nav_id'</script>";
        }

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
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/xinwen/nav_id/$nav_id'</script>";
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
        //新闻详情
        $classify_articleM=D('classify_article');
        $whereacid['ca_id']=I('get.ca_id');
        $classify_article=$classify_articleM->where($whereacid)->find();
        $this->assign('classify_article',$classify_article);
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
        $binav=$nav_id;
        $background_image_data=$public->background_image($binav);
        $this->assign('background_image_data',$background_image_data);
        //数据数量
        $wherelcid11['lc_id']=$little_classify['lc_id'];
        $classify_article_count=$classify_articleM->where($wherelcid11)->select();
        $caallcount=count($classify_article_count);
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
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/erjifenlei/nav_id/$nav_id'</script>";
        }
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
		$flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/text/nav_id/$nav_id'</script>";
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