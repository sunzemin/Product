<?php
namespace Admin\Controller;
use Think\Controller;
class ClassifyController extends CommonController{
	//=============================================
	//内景分类信息
    public function all_classify(){
         $p=I('get.p');
         $this->assign('p',$p);
         $all_classifyM=D('all_classify');
         $all_classify_res=$all_classifyM->order('ac_sort desc')->page($p,10)->select();
         $this->assign('all_classify_res',$all_classify_res);
         //总页数
         $all_classify_count=$all_classifyM->order('ac_sort desc')->select();
         $allcount=count($all_classify_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
    }
    //=============================================
    //添加服务优势
    public function all_classify_add(){
        $p=I('get.p');
        if($_POST){
            $all_classifyM=D('all_classify');
            $data['ac_name']=I('post.ac_name');
            $data['ac_flag']=I('post.ac_flag');
            $data['nav_id']=I('post.nav_id');
            $data['ac_sort']=I('post.ac_sort');
            $data['ac_content']=I('post.ac_content','',false);
            $addres=$all_classifyM->add($data);
            if($addres){
                $this->success('保存成功',U('Classify/all_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Classify/all_classify',array('p'=>$p)));
            }
            exit;
        }
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //=============================================
    //修改服务优势
    public function all_classify_update(){
        $p=I('get.p');
        if($_POST){
            $all_classifyM=D('all_classify');
            $whereBB['ac_id']=I('post.ac_id');
            $data['ac_flag']=I('post.ac_flag');
            $data['ac_name']=I('post.ac_name');
            $data['ac_sort']=I('post.ac_sort');
            $data['ac_content']=I('post.ac_content','',false);
            $saveres=$all_classifyM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Classify/all_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Classify/all_classify',array('p'=>$p)));
            }
            exit;
        }
        $all_classifyM=D('all_classify');
        $whereAA['ac_id']=I('get.ac_id');
        $all_classify=$all_classifyM->where($whereAA)->find();
        $this->assign('all_classify',$all_classify);
        //查询修改轮播所属的导航
        $navM=D('nav');
        $whereCC['nav_id']= $all_classify['nav_id'];
        $navdata=$navM->where($whereCC)->find();
        $this->assign('navdata',$navdata);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //================================================
    //删除服务优势
    public function all_classify_del(){
        $p=I('get.p');
        $all_classifyM=D('all_classify');
        $whereAA['ac_id']=I('get.ac_id');
        $delres=$all_classifyM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Classify/all_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Classify/all_classify',array('p'=>$p)));
            }
    }
    //=============================================
	//小分类信息
    public function little_classify(){
    	 $ac_id=I('get.ac_id');
    	 $this->assign('ac_id',$ac_id);
         $p=I('get.p');
         $this->assign('p',$p);
         $little_classifyM=D('little_classify');
         $whereAA['ac_id']=$ac_id;
         $little_classify_res=$little_classifyM->where($whereAA)->order('lc_sort desc')->page($p,10)->select();
         //dump($little_classify_res);
         $this->assign('little_classify_res',$little_classify_res);
         //总页数
         $little_classify_count=$little_classifyM->where($whereAA)->order('lc_sort desc')->select();
         $allcount=count($little_classify_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         //查询包含的二级导航信息
         $navM=D('nav');
         $navarr=array();
         for($i=0;$i<count($little_classify_res);$i++){
             $wherelcna['nav_id']=$little_classify_res[$i]['nav_id'];
             $nav11=$navM->where($wherelcna)->find();
             $navarr[]=$nav11;
         }
         $this->assign('navarr',$navarr);
         $this->display();
    }
    //=============================================
    //添加服务优势
    public function little_classify_add(){
    	$ac_id=I('get.ac_id');
        $p=I('get.p');
        if($_POST){
            $little_classifyM=D('little_classify');
            $data['lc_name']=I('post.lc_name');
            $data['ac_id']=$ac_id;
            $data['lc_sort']=I('post.lc_sort');
            $data['nav_id']=I('post.nav_id');
            $addres=$little_classifyM->add($data);
            if($addres){
                $this->success('保存成功',U('Classify/little_classify',array('p'=>$p,'ac_id'=>$ac_id)));
            }else{
                $this->error('保存失败',U('Classify/little_classify',array('p'=>$p,'ac_id'=>$ac_id)));
            }
            exit;
        }
        //总分类信息
	     $all_classifyM=D('all_classify');
	     $all_classify_res=$all_classifyM->order('ac_sort desc')->page($p,10)->select();
	     $this->assign('all_classify_res',$all_classify_res);
         //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //=============================================
    //修改服务优势
    public function little_classify_update(){
    	$ac_id=I('get.ac_id');
        $p=I('get.p');
        if($_POST){
            $little_classifyM=D('little_classify');
            $whereBB['lc_id']=I('post.lc_id');
            $data['ac_id']=$ac_id;
            $data['lc_name']=I('post.lc_name');
            $data['lc_sort']=I('post.lc_sort');
            $data['nav_id']=I('post.nav_id');
            $saveres=$little_classifyM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Classify/little_classify',array('p'=>$p,'ac_id'=>$ac_id)));
            }else{
                $this->error('保存失败',U('Classify/little_classify',array('p'=>$p,'ac_id'=>$ac_id)));
            }
            exit;
        }
        $little_classifyM=D('little_classify');
        $whereAA['lc_id']=I('get.lc_id');
        $little_classify=$little_classifyM->where($whereAA)->find();
        $this->assign('little_classify',$little_classify);
        $all_classifyM=D('all_classify');
        //查询包含分类信息
        $whereac['ac_id']=$little_classify['ac_id'];
        $all_classify11=$all_classifyM->where($whereac)->find();
        $this->assign('all_classify11',$all_classify11);
        //dump($all_classify11);
        //总分类信息
         $all_classify_res=$all_classifyM->order('ac_sort desc')->page($p,10)->select();
         $this->assign('all_classify_res',$all_classify_res);
         $this->assign('all_classify',$all_classify);
        //查询所属导航
        $navM=D('nav');
        $whereCC['nav_id']= $little_classify['nav_id'];
        $navdata=$navM->where($whereCC)->find();
        $this->assign('navdata',$navdata);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        //dump($navall);
        $this->display();
    }
    //================================================
    //删除服务优势
    public function little_classify_del(){

    	$ac_id=I('get.ac_id');
        $p=I('get.p');
        $little_classifyM=D('little_classify');
        $whereAA['lc_id']=I('get.lc_id');

        $delres=$little_classifyM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Classify/little_classify',array('p'=>$p,'ac_id'=>$ac_id)));
            }else{
                $this->error('保存失败',U('Classify/little_classify',array('p'=>$p,'ac_id'=>$ac_id)));
            }
    }
    //=============================================
	//内景分类信息
    public function classify_article(){
         $p=I('get.p');
         $this->assign('p',$p);
         $lc_id=I('get.lc_id');
         //dump($lc_id);
         $this->assign('lc_id',$lc_id);
         $classify_articleM=D('classify_article');
         $whereAA['lc_id']=$lc_id;
         $classify_article_res=$classify_articleM->where($whereAA)->order('ca_sort desc')->page($p,10)->select();
         $this->assign('classify_article_res',$classify_article_res);
         //总页数
         $classify_article_count=$classify_articleM->where($whereAA)->order('ca_sort desc')->select();
         $allcount=count($classify_article_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         //查询包含的二级分类信息
         $lcarray=array();
         $little_classifyM=D('little_classify');
         for($i=0;$i<count($classify_article_res);$i++){
         	$whereBB['lc_id']=$classify_article_res[$i]['lc_id'];
            $little_classify=$little_classifyM->where($whereBB)->find();
            $lcarray[]=$little_classify;
         }
         //dump($lcarray);
         $this->assign('lcarray',$lcarray);
         $this->display();
    }
    //=============================================
    //添加服务优势
    public function classify_article_add(){
    	$lc_id=I('get.lc_id');
    	//dump($lc_id);
        $p=I('get.p');
        if($_POST){
            $classify_articleM=D('classify_article');
            $data['ca_image']=I('post.ca_image');
            $data['ca_hideimage']=I('post.ca_hideimage');
            $data['ca_title']=I('post.ca_title');
            $data['ca_min']=I('post.ca_min');
            $data['ca_sort']=I('post.ca_sort');
            $data['ca_time']=time();
            $data['ca_content']=I('post.ca_content','',false);
            $data['lc_id']=$lc_id;
            $addres=$classify_articleM->add($data);
            if($addres){
                $this->success('保存成功',U('Classify/classify_article',array('p'=>$p,'lc_id'=>$lc_id)));
            }else{
                $this->error('保存失败',U('Classify/classify_article',array('p'=>$p,'lc_id'=>$lc_id)));
            }
            exit;
        }
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //=============================================
    //修改服务优势
    public function classify_article_update(){
    	$lc_id=I('get.lc_id');
        $p=I('get.p');
        if($_POST){
            $classify_articleM=D('classify_article');
            $whereBB['ca_id']=I('post.ca_id');
            $data['ca_image']=I('post.ca_image');
            $data['ca_hideimage']=I('post.ca_hideimage');
            $data['ca_title']=I('post.ca_title');
            $data['ca_min']=I('post.ca_min');
            $data['ca_time']=time();
            $data['ca_sort']=I('post.ca_sort');
            $data['ca_content']=I('post.ca_content','',false);
            $data['lc_id']=$lc_id;
            $saveres=$classify_articleM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Classify/classify_article',array('p'=>$p,'lc_id'=>$lc_id)));
            }else{
                $this->error('保存失败',U('Classify/classify_article',array('p'=>$p,'lc_id'=>$lc_id)));
            }
            exit;
        }
        $classify_articleM=D('classify_article');
        $whereAA['ca_id']=I('get.ca_id');
        $classify_article=$classify_articleM->where($whereAA)->find();
        $this->assign('classify_article',$classify_article);
        //查询修改二级分类信息
         $little_classifyM=D('little_classify');
         $whereBB['lc_id']= $classify_article['lc_id'];
         $little_classify=$little_classifyM->where($whereBB)->find();
         $this->assign('little_classify',$little_classify);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //================================================
    //删除服务优势
    public function classify_article_del(){
    	$lc_id=I('get.lc_id');
        $p=I('get.p');
        $classify_articleM=D('classify_article');
        $whereAA['ca_id']=I('get.ca_id');
        $delres=$classify_articleM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Classify/classify_article',array('p'=>$p,'lc_id'=>$lc_id)));
            }else{
                $this->error('保存失败',U('Classify/classify_article',array('p'=>$p,'lc_id'=>$lc_id)));
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