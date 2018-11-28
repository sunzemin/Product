<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
    	$public=A('Public');
    	//查询导航信息
    	$navres=$public->nav();
    	$this->assign('navres',$navres);
    	//查询轮播信息
    	$lunboData=$public->lunbo(0);
    	$this->assign('lunboData',$lunboData);
    	//查询样片信息
    	$caseM=D('case');
        $p=I('get.p');
        if($p!=null){
            $p=I('get.p');
        }else{
            $p=1;
        }
        $caseData=$caseM->order('sort desc')->page($p,10)->select();
        $this->assign('caseData',$caseData);
        //样片数量
        $casecount=$caseM->order('sort desc')->select();
        $caseallcount=count($casecount);
        $this->assign('caseallcount',$caseallcount);
        //总页数
        $casepage=ceil($caseallcount/10);
        $this->assign('casepage',$casepage);
        //公司简介信息
        $company_introduceM=D('company_introduce');
		$company_introduce=$company_introduceM->find();
		$this->assign('company_introduce',$company_introduce);
		//底部信息
		$footer=$public->footer();
		$this->assign('footer',$footer);
		//背景图片信息
		$background_imageData=$public->background_image(0);
		$this->assign('background_imageData',$background_imageData);
        //dump($background_imageData);
		//底部导航信息
		$footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //薇拉视觉信息
        $viewM=D('view');
	    $view_res=$viewM->order('sort desc')->select();
	    $this->assign('view_res',$view_res);
	    //内景分类信息
	    $room_scenery_classifyM=D('room_scenery_classify');
         $room_scenery_classify_res=$room_scenery_classifyM->order('rsc_sort desc')->select();
         $this->assign('room_scenery_classify_res',$room_scenery_classify_res);
		 //dump($room_scenery_classify_res);
	    //内景内容信息
         $room_sceneryM=D('room_scenery');
		 $wherers11['rs_flag']=1;
	    $room_scenery_res=$room_sceneryM->where($wherers11)->order('rs_sort desc')->select();
         $this->assign('room_scenery_res',$room_scenery_res);
         //dump($room_scenery_res);
         //查询包含的分类信息
         $rscarr=array();
         for($i=0;$i<count($room_scenery_res);$i++){
         	 $whererscid['rsc_id']=$room_scenery_res[$i]['rsc_id'];
         	 $room_scenery_classify123=$room_scenery_classifyM->where($whererscid)->find();
             $rscarr[]=$room_scenery_classify123;
         }
         //dump($rscarr);
         $this->assign('rscarr',$rscarr);
         //新闻动态信息
         $home_newsM=D('home_news');
         $home_news_res=$home_newsM->order('hn_sort desc')->page(1,3)->select();
         $this->assign('home_news_res',$home_news_res);
         //用户数量
        $userM=D('user');
        $userres=$userM->order('sort desc')->select();
        $count11=count($userres);
        $this->assign('count11',$count11);
        //dump($counthomenews);
        //客户评论类型信息
        $custom_word_classifyM=D('custom_word_classify');
		$custom_word_classify_res=$custom_word_classifyM->order('cwc_sort desc')->select();
		$this->assign('custom_word_classify_res',$custom_word_classify_res);
		//查询类型下的内容
		$cwclassify=array();
		$custom_wordM=D('custom_word');
		$custom_imageM=D('custom_image');
		$allcimage=array();
		for($i=0;$i<count($custom_word_classify_res);$i++){
			$wherecwc11['cwc_id']=$custom_word_classify_res[$i]['cwc_id'];
			$custom_word_res=$custom_wordM->where($wherecwc11)->order('cw_sort desc')->select();
			
			$cimagearr=array();
			for($j=0;$j<count($custom_word_res);$j++){
				$whereci['cw_id']=$custom_word_res[$j]['cw_id'];
				$custom_image_res=$custom_imageM->where($whereci)->order('ci_sort desc')->select();
				$cimagearr[]=$custom_image_res;
				//dump($cimagearr);
				
			}
			//dump($allcimage);
			$allcimage[]=$cimagearr;
			
			$cwclassify[]=$custom_word_res;
		}
		$this->assign('cwclassify',$cwclassify);
        $this->assign('allcimage',$allcimage);
        //首页基础信息
         $home_baseM=D('home_base');
         $home_base_res=$home_baseM->order('sort desc')->select();
         $this->assign('home_base_res',$home_base_res);
        //dump($home_base_res);
        //首页精彩花絮
        $jingcaiM=D('jingcai');
        $jingcai=$jingcaiM->order('jc_sort desc')->find();
        $this->assign('jingcai',$jingcai);
        //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/index'</script>";
        }
        $this->display();
    }
    public function aboutUs(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //查询该导航信息
        $navM=D('nav');
        $wherefi['nav_id']=$nav_id;
        $navben=$navM->where($wherefi)->find();
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
		$background_imageData=$public->background_image($nav_id);
		$this->assign('background_imageData',$background_imageData);
		//查询背景信息基础信息
		$basedataM=D('basedata');
		$wherebase['nav_name']="关于薇拉";
		$basedata_res=$basedataM->where($wherebase)->order('sort desc')->find();
		$this->assign('basedata_res',$basedata_res);
		//底部导航信息
		$footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/aboutUs/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function jingcaihuaxu(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //查询该导航信息
        $navM=D('nav');
        $wherefi['nav_id']=$nav_id;
        $navben=$navM->where($wherefi)->find();
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
		//底部导航信息
		$footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //公司简介信息
        $company_introduceM=D('company_introduce');
		$company_introduce=$company_introduceM->find();
		$this->assign('company_introduce',$company_introduce);
		//精彩花絮
        $p=I('get.p');
        if($p!=null){
            $p=I('get.p');
        }else{
            $p=1;
        }
		$short_videoM=D('short_video');
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
        $this->assign('p',$p);
        //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/jingcaihuaxu/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function kehupingjia(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //查询该导航信息
        $navM=D('nav');
        $wherefi['nav_id']=$nav_id;
        $navben=$navM->where($wherefi)->find();
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
		//客户评价分类
		$custom_word_classifyM=D('custom_word_classify');
		$custom_word_classify_res=$custom_word_classifyM->order('cwc_sort desc')->select();
		$this->assign('custom_word_classify_res',$custom_word_classify_res);
        //dump($custom_word_classify_res);
        //底部导航信息
		$footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //公司简介信息
        $company_introduceM=D('company_introduce');
		$company_introduce=$company_introduceM->find();
		$this->assign('company_introduce',$company_introduce);
        //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/kehupingjia/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function keyangxinshang(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //查询该导航信息
        $navM=D('nav');
        $wherefi['nav_id']=$nav_id;
        $navben=$navM->where($wherefi)->find();
        $this->assign('navben',$navben);

    	$public=A('Public');
    	//查询导航信息
    	$navres=$public->nav();
    	$this->assign('navres',$navres);
    	//查询轮播信息
    	$lunboData=$public->lunbo($nav_id);
    	$this->assign('lunboData',$lunboData);
    	//查询样片信息
        $p=I('get.p');
        if($p!=null){
            $p=I('get.p');
        }else{
            $p=1;
        }
    	$caseM=D('case');
        $caseData=$caseM->order('sort desc')->page($p,10)->select();
        $this->assign('caseData',$caseData);
        //样片总数量
        $caseDataall=$caseM->order('sort desc')->select();
        $allcount=count($caseDataall);
        $this->assign('allcount',$allcount);
        //总的页数
        $allpage=ceil($allcount/10);
        $this->assign('allpage',$allpage);
        //第几页
        $this->assign('p',$p);
        //公司简介信息
        $company_introduceM=D('company_introduce');
		$company_introduce=$company_introduceM->find();
		$this->assign('company_introduce',$company_introduce);
		//底部信息
		$footer=$public->footer();
		$this->assign('footer',$footer);
		//底部导航信息
		$footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/keyangxinshang/nav_id/$nav_id'</script>";
        }

        $this->display();
    }
    public function zuixintehui(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
    	//获取导航ID
    	$nav_id=I('get.nav_id');
    	$this->assign('nav_id',$nav_id);
        //查询该导航信息
        $navM=D('nav');
        $wherefi['nav_id']=$nav_id;
        $navben=$navM->where($wherefi)->find();
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
		//最新特惠信息
        $p=I('get.p');
        if($p!=null){
            $p=I('get.p');
        }else{
            $p=1;
        }
		$activeM=D('active');
        $activeData=$activeM->order('asort desc')->page($p,10)->select();
        $this->assign('activeData',$activeData);
        //数量
        $activeDataall=$activeM->order('asort desc')->select();
        $activecount=count($activeDataall);
        $this->assign('activecount',$activecount);
        //总的页数
        $allpage=ceil($activecount/10);
        $this->assign('allpage',$allpage);
        //第几页
        //dump($p);
        $this->assign('p',$p);
        //底部导航信息
		$footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //公司简介信息
        $company_introduceM=D('company_introduce');
		$company_introduce=$company_introduceM->find();
		$this->assign('company_introduce',$company_introduce);
        //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
        $flag=$this->isMobile();
        if($flag){
            echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/zuixintehui/nav_id/$nav_id'</script>";
        }
        $this->display();
    }
    public function Information(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
        $nav_id=I('get.nav_id');
        if(isset($nav_id)){
            $nav_id=I('get.nav_id');
        }else{
            $nav_id=0;
        }
        //查询该导航信息
        $navM=D('nav');
        $wherefi['nav_id']=$nav_id;
        $navben=$navM->where($wherefi)->find();
        $this->assign('navben',$navben);
        $public=A('Public');
        //查询导航信息
        $navres=$public->nav();
        $this->assign('navres',$navres);
        //查询轮播信息
        $lunboData=$public->lunbo($nav_id);
        $this->assign('lunboData',$lunboData);
        //查询样片信息
        $caseM=D('case');
        $id=I('get.id');
        if(isset($id)){
            $wherecase['id']=I('get.id');
            $case=$caseM->where($wherecase)->find();
        }else{
            $case='';
        }
        
        $this->assign('case',$case);
        
        //样片数量
        $casecount=count($caseData);
        $this->assign('casecount',$casecount);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //底部信息
        $footer=$public->footer();
        $this->assign('footer',$footer);
        //背景图片信息
        $background_imageData=$public->background_image(0);
        $this->assign('background_imageData',$background_imageData);
        //底部导航信息
        $footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //查询内景内容
        $rs_id=I('get.rs_id');
        if(isset($rs_id)){
            $room_sceneryM=D('room_scenery');
            $rs_id=I('get.rs_id');
            $wherers_id['rs_id']=$rs_id;
            $room_scenery11=$room_sceneryM->where($wherers_id)->find();   
        }else{
            $room_scenery11='';
        }
         $this->assign('room_scenery11',$room_scenery11);
         //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
        //dump($room_scenery11);
        $flag=$this->isMobile();
        if($flag){
            if($nav_id==0){
               echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/Information/id/$id'</script>"; 
            }else{
                echo "<script type='text/javascript'>location.href='/index.php/Mobile/Index/Information/nav_id/$nav_id/id/$id'</script>";
            }  
        }
        $this->display();
    }
    public function erjifenlei(){
    	$fn_id=I('get.fn_id');
		$footer_navM=D('footer_nav');
		if(isset($fn_id)){
			$fn_id=I('get.fn_id');
			$wherefnurl['fn_id']=$fn_id;
			$footer_nav11=$footer_navM->where($wherefnurl)->find();
			$this->assign('footer_nav11',$footer_nav11);
		}
        $rsc_id=I('get.rsc_id');
        $this->assign('rsc_id',$rsc_id);
        //获取导航ID
        $nav_id=I('get.nav_id');
        $this->assign('nav_id',$nav_id);
        //查询该导航信息
        $navM=D('nav');
        $wherefi['nav_id']=$nav_id;
        $navben=$navM->where($wherefi)->find();
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
        //底部导航信息
        $footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        //底部二级导航
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //公司简介信息
        $company_introduceM=D('company_introduce');
        $company_introduce=$company_introduceM->find();
        $this->assign('company_introduce',$company_introduce);
        //内景分类信息
        $room_scenery_classifyM=D('room_scenery_classify');
         $room_scenery_classify_res=$room_scenery_classifyM->order('rsc_sort desc')->select();
         $this->assign('room_scenery_classify_res',$room_scenery_classify_res);
        //内景内容信息
         $p=I('get.p');
         if(isset($p)){
            $p=I('get.p');
         }else{
            $p=1;
         }
         $room_sceneryM=D('room_scenery');
         $wherersc['rsc_id']=$rsc_id;
		 $wherersc['rs_flag']=0;
        $room_scenery_res=$room_sceneryM->where($wherersc)->order('rs_sort desc')->page($p,10)->select();
         $this->assign('room_scenery_res',$room_scenery_res);
		 //dump($room_scenery_res);
		 
         //内景内容的总数量
         $room_scenery_count=$room_sceneryM->where($wherersc)->order('rs_sort desc')->select();
         $rsallcount=count($room_scenery_count);
         $this->assign('rsallcount',$rsallcount);
         //总页数
         $rspage=ceil($rsallcount/10);
         $this->assign('rspage',$rspage);
         //查询包含的分类信息
         $rscarr=array();
         for($i=0;$i<count($room_scenery_res);$i++){
            $whererscid['rsc_id']=$room_scenery_res[$i]['rsc_id'];
            $room_scenery_classify11=$room_scenery_classifyM->where($whererscid)->find();
            $rscarr[]=$room_scenery_classify11;
         }
         $this->assign('room_scenery_classify11',$rscarr);
         //公众链接
        $home_urlM=D('home_url');
        $home_url=$home_urlM->find();
        $this->assign('home_url',$home_url);
		//包含的内景分类信息
		 $wherersc123['rsc_id']=$rsc_id;
		 $room_scenery_classify11=$room_scenery_classifyM->where($wherersc123)->find();
		 $this->assign('room_scenery_classify11',$room_scenery_classify11);
		// dump($room_scenery_classify11);
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