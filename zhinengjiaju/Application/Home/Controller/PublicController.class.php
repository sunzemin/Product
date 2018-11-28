<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function nav(){
		$navM=D('nav');
        $wherefid['nav_fid']=0;
		$navres=$navM->where($wherefid)->order('nav_sort desc')->select();
		return $navres;
	}
	public function lunbo($k=0){
		$lunboM=D('lunbo');
		$whereAA['nav_id']=$k;
		$lunboData=$lunboM->where($whereAA)->order('lb_sort desc')->select();
		return $lunboData;
	}
	public function footer(){
		$footerM=D('footer');
		$footer=$footerM->find();
		return $footer;
	}
    //头部信息
    public function allhead($nav_id){
        $all_headM=D('all_head');
        $whereAA['nav_id']=$nav_id;
        $all_head_Data=$all_headM->where($whereAA)->find();
        return $all_head_Data;
    }
	public function background_image($k){
		$background_imageM=D('background_image');
		$whereAA['nav_id']=$k;
		$background_imageData=$background_imageM->where($whereAA)->order('bi_sort desc')->select();
		return $background_imageData;
	}
	public function user1add(){
        $userM=D('user');
        $data['name']=I('post.name');
        $data['QQ']=I('post.QQ');
        $data['sort']=I('post.sort');
        $data['wechat']=I('post.wechat');
        $data['telephone']=I('post.telephone');
        $addres=$userM->add($data);
        if($addres){
        	$this->ajaxReturn(true);
        }else{
            $this->ajaxReturn(false);
        }
    }
    //查询产品分类、二级分类、文章想抢
    public function sel_product_date($lc_id){
        $classify_articleM=D('classify_article');
        $wherelc['lc_id']=$lc_id;
        $classify_article_res=$classify_articleM->where($wherelc)->order('ca_sort desc')->select();
        $this->ajaxReturn($classify_article_res);
    }
    //获取案例信息
    public function selcase($p=1){
    	$caseM=D('case');
        $caseData=$caseM->order('sort desc')->page($p,1)->select();
        $this->assign('caseData',$caseData);

        //轮播总页数
        $case_res=$caseM->order('sort desc')->select();
        $allcount=count($case_res);
        $page=ceil($allcount/1);
        $this->assign('page',$page);
        $this->ajaxReturn(array('caseData'=>$caseData,'allcount'=>$allcount,'page'=>$page,'p'=>$p));
    }
    //全屋集成整装数据接口
    public function selAllData($nav_id,$p=1){
        //品牌介绍
        $all_classifyM=D('all_classify');
        $wherealid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($wherealid)->find();
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->page($p,1)->select();
        //查询文章信息
        $classify_articleM=D('classify_article');
        $caarr=array();
        for($i=0;$i<count($little_classify_res);$i++){
            $wherelcid['lc_id']=$little_classify_res[$i]['lc_id'];
            $classify_article=$classify_articleM->where($wherelcid)->find();
            $caarr[]=$classify_article;
        }
        //二级分类总个数
        $little_classify_count=$little_classifyM->where($whereacid)->select();
        //dump($little_classify_count);exit;
        $little_classify_allcount=count($little_classify_count);
        //二级分类总页数
        $little_classify_allpage=ceil($little_classify_allcount/1);
        $this->ajaxReturn(array('little_classify_res'=>$little_classify_res,'classify_article_res'=>$caarr,'allcount'=>$little_classify_allcount,'allpage'=>$little_classify_allpage));
    }
    //二级分类接口
    public function selnewser($nav_id,$p=1){
        //品牌介绍
        $all_classifyM=D('all_classify');
        $wherealid['nav_id']=$nav_id;
        
        $all_classify=$all_classifyM->where($wherealid)->find();
        //二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->select();
        $this->ajaxReturn(array('little_classify_res'=>$little_classify_res));
    }
    //二级下面的文章信息
    public function newsdata($lc_id,$p=1){
        //品牌介绍
        $classify_articleM=D('classify_article');
        $wherecaid['lc_id']=$lc_id;
        $classify_article_res=$classify_articleM->where($wherecaid)->order('ca_sort desc')->page($p,10)->select();
        //数据的总条数
        $classify_article_count=$classify_articleM->where($wherecaid)->order('ca_sort desc')->select();
        $allcount=count($classify_article_count);
        //总页数
        $allpage=ceil($allcount/10);
        
        
        //查询分类名称
        $little_classifyM=D('little_classify');
        $whereAA['lc_id']=$lc_id;
        $litteryRes=$little_classifyM->where($whereAA)->find();

        $this->ajaxReturn(array('classify_article_res'=>$classify_article_res,'allcount'=>$allcount,'allpage'=>$allpage,'p'=>$p,'litteryRes'=>$litteryRes));
    }
    //添加用户信息接口
    public function adduser(){
        $userM=D('user');
        $data['name']=I('post.name');
        $data['telephone']=I('post.telephone');
        $data['sort']=I('post.sort');
        $data['content']=I('post.content','',false);
        $addres=$userM->add($data);
        if($addres){
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn(false);
        }
    }
    public function useradd(){
        $userM=D('user');
        $data['name']=I('post.name');
        $data['telephone']=I('post.telephone');
        $data['sort']=I('post.sort');
        $data['content']=I('post.content','',false);
        $addres=$userM->add($data);
        if($addres){
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn(false);
        }
    }
    public function selquanwu($nav_id,$p=1){
    	//查询一级分类信息
    	$all_classifyM=D('all_classify');
        $wherealid['nav_id']=$nav_id;
        $all_classify=$all_classifyM->where($wherealid)->find();
        
        //查询二级分类信息
        $little_classifyM=D('little_classify');
        $whereacid['ac_id']=$all_classify['ac_id'];
        $little_classify_res=$little_classifyM->where($whereacid)->page($p,9)->select();
        
        $classify_articleM=D('classify_article');
        $caarr=array();
        for($i=0;$i<count($little_classify_res);$i++){
            $wherelcid['lc_id']=$little_classify_res[$i]['lc_id'];
            $classify_article=$classify_articleM->where($wherelcid)->find();
            $caarr[]=$classify_article;
        }
        $lcarr1=array();
        $lcarr2=array();
        $lcarr3=array();
        $lcarr1=array(
        array('little_classify_res'=>$little_classify_res[0],'classify_article'=>$caarr[0]),
        array('little_classify_res'=>$little_classify_res[1],'classify_article'=>$caarr[1]),
        array('little_classify_res'=>$little_classify_res[2],'classify_article'=>$caarr[2]));
        $lcarr2=array(
        array('little_classify_res'=>$little_classify_res[3],'classify_article'=>$caarr[3]),
        array('little_classify_res'=>$little_classify_res[4],'classify_article'=>$caarr[4]),
        array('little_classify_res'=>$little_classify_res[5],'classify_article'=>$caarr[5]));
        $lcarr3=array(
        array('little_classify_res'=>$little_classify_res[6],'classify_article'=>$caarr[6]),
        array('little_classify_res'=>$little_classify_res[7],'classify_article'=>$caarr[7]),
        array('little_classify_res'=>$little_classify_res[8],'classify_article'=>$caarr[8]));
        $allarr=array();
        $allarr[]=$lcarr1;
        $allarr[]=$lcarr2;
        $allarr[]=$lcarr3;
        //dump($allarr);exit;
        $this->ajaxReturn(array('alldatall'=>$allarr));
        
    }
    public function selproductclassify(){
    	 $product_classifyM=D('product_classify');
		 $product_classify_res=$product_classifyM->order('pc_sort desc')->select();
		 $this->ajaxReturn(array('product_classify_res'=>$product_classify_res));
    }
    public function selproduct($pc_id,$p=1){
    	 $productM=D('product');
         $whereAC['pc_id']=$pc_id;
         $product_res=$productM->where($whereAC)->order('psort desc')->page($p,10)->select();
         //数据总数
         $procount=$productM->where($whereAC)->order('psort desc')->select();
         $allcount=count($procount);
         $allpage=ceil($allcount/10);
         //包含的分类信息
         $product_classifyM=D('product_classify');
         $whereAA['pc_id']=$pc_id;
		 $product_classify123=$product_classifyM->where($whereAA)->find();
         $this->ajaxReturn(array('product_res'=>$product_res,'p'=>$p,'allcount'=>$allcount,'allpage'=>$allpage,'product_classify123'=>$product_classify123));
    }
}
?>