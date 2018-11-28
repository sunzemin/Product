<?php
namespace Admin\Controller;
use Think\Controller;
class HomeManageController extends CommonController{
	public function left(){
		$this->display();
	}
	//薇拉视觉信息
	public function view(){
		 $p=I('get.p');
		 $this->assign('p',$p);
         $viewM=D('view');
         $view_res=$viewM->order('sort desc')->page($p,10)->select();
         $this->assign('view_res',$view_res);
         //总页数
         $view_count=$viewM->order('sort desc')->select();
         $allcount=count($view_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
	}
	//=============================================
	//添加薇拉视觉信息
	public function view_add(){
		$p=I('get.p');
		if($_POST){
			$viewM=D('view');
			$data['image']=I('post.image');
			$data['sort']=I('post.sort');
			$addres=$viewM->add($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/view',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/view',array('p'=>$p)));
			}
			exit;
		}
		$this->display();
	}
	//=============================================
	//修改薇拉视觉信息
	public function view_update(){
		$p=I('get.p');
		if($_POST){
			$viewM=D('view');
			$whereBB['id']=I('post.id');
			
			$data['image']=I('post.image');
			$data['sort']=I('post.sort');
			$addres=$viewM->where($whereBB)->save($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/view',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/view',array('p'=>$p)));
			}
			exit;
		}
		$viewM=D('view');
		$whereAA['id']=I('get.id');
		$view=$viewM->where($whereAA)->find();
		$this->assign('view',$view);
		$this->display();
	}
	//================================================
	//删除薇拉视觉信息
	public function view_del(){
		$p=I('get.p');
		$viewM=D('view');
		$whereAA['id']=I('get.id');
		$delres=$viewM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('HomeManage/view',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/view',array('p'=>$p)));
			}
	}
	//内景分类信息
	public function room_scenery_classify(){
		 $p=I('get.p');
		 $this->assign('p',$p);
         $room_scenery_classifyM=D('room_scenery_classify');
         $room_scenery_classify_res=$room_scenery_classifyM->order('rsc_sort desc')->page($p,10)->select();
         $this->assign('room_scenery_classify_res',$room_scenery_classify_res);
         //总页数
         $room_scenery_classify_count=$room_scenery_classifyM->order('rsc_sort desc')->select();
         $allcount=count($room_scenery_classify_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
	}
	//=============================================
	//添加服务优势
	public function room_scenery_classify_add(){
		$p=I('get.p');
		if($_POST){
			$room_scenery_classifyM=D('room_scenery_classify');
			$data['rsc_name']=I('post.rsc_name');
			$data['rsc_sort']=I('post.rsc_sort');
			$addres=$room_scenery_classifyM->add($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/room_scenery_classify',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/room_scenery_classify',array('p'=>$p)));
			}
			exit;
		}
		$this->display();
	}
	//=============================================
	//修改服务优势
	public function room_scenery_classify_update(){
		$p=I('get.p');
		if($_POST){
			$room_scenery_classifyM=D('room_scenery_classify');
			$whereBB['rsc_id']=I('post.rsc_id');
			
			$data['rsc_name']=I('post.rsc_name');
			$data['rsc_sort']=I('post.rsc_sort');
			$addres=$room_scenery_classifyM->where($whereBB)->save($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/room_scenery_classify',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/room_scenery_classify',array('p'=>$p)));
			}
			exit;
		}
		$room_scenery_classifyM=D('room_scenery_classify');
		$whereAA['rsc_id']=I('get.rsc_id');
		$room_scenery_classify=$room_scenery_classifyM->where($whereAA)->find();
		$this->assign('room_scenery_classify',$room_scenery_classify);
		$this->display();
	}
	//================================================
	//删除服务优势
	public function room_scenery_classify_del(){
		$p=I('get.p');
		$room_scenery_classifyM=D('room_scenery_classify');
		$whereAA['rsc_id']=I('get.rsc_id');
		$delres=$room_scenery_classifyM->where($whereAA)->delete();
		if($delres){
				$this->success('保存成功',U('HomeManage/room_scenery_classify',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/room_scenery_classify',array('p'=>$p)));
			}
	}
	//内景文章管理
	public function room_scenery(){
		$p=I('get.p');
		 $this->assign('p',$p);
         $room_sceneryM=D('room_scenery');
         $room_scenery_res=$room_sceneryM->order('rs_sort desc')->page($p,10)->select();
         $this->assign('room_scenery_res',$room_scenery_res);
         //总页数
         $room_scenery_count=$room_sceneryM->order('rs_sort desc')->select();
         $allcount=count($room_scenery_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         //查询包含内景分类信息
         $room_scenery_classifyM=D('room_scenery_classify');
         $rscarray=array();
         for($i=0;$i<count($room_scenery_res);$i++){
              $wherersc['rsc_id']=$room_scenery_res[$i]['rsc_id'];
              $room_scenery_classify=$room_scenery_classifyM->where($wherersc)->find();
              $rscarray[]=$room_scenery_classify;
         }
         $this->assign('room_scenery_classify_res',$rscarray);
         $this->display();
	}
	//============================================
	//内景内容添加
	public function room_scenery_add(){
		$p=I('get.p');
		if($_POST){
			$room_sceneryM=D('room_scenery');
			$data['rs_name']=I('post.rs_name');
			$data['rs_sort']=I('post.rs_sort');
			$data['rsc_id']=I('post.rsc_id');
			$data['rs_image']=I('post.rs_image');
			$data['rs_introduce']=I('post.rs_introduce');
			$data['rs_score']=I('post.rs_score');
			$data['rs_blacktitle1']=I('post.rs_blacktitle1');
			$data['rs_blackauthor']=I('post.rs_blackauthor');
			$data['rs_flag']=I('post.rs_flag');
			$addres=$room_sceneryM->add($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/room_scenery',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/room_scenery',array('p'=>$p)));
			}
			exit;
		}
		//查询内景分类信息
         $room_scenery_classifyM=D('room_scenery_classify');
         $room_scenery_classify_res=$room_scenery_classifyM->order('rsc_sort desc')->select();
         $this->assign('room_scenery_classify_res',$room_scenery_classify_res);
		$this->display();
	}
	//================================================
	//内景内容修改
	public function room_scenery_update(){
		$p=I('get.p');
		if($_POST){
			$room_sceneryM=D('room_scenery');
			$whereAA['rs_id']=I('post.rs_id');
			$data['rs_name']=I('post.rs_name');
			$data['rs_sort']=I('post.rs_sort');
			$data['rsc_id']=I('post.rsc_id');
			$data['rs_image']=I('post.rs_image');
			$data['rs_introduce']=I('post.rs_introduce');
			$data['rs_score']=I('post.rs_score');
			$data['rs_blacktitle1']=I('post.rs_blacktitle1');
			$data['rs_blackauthor']=I('post.rs_blackauthor');
			$data['rs_flag']=I('post.rs_flag');
			$saveres=$room_sceneryM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('HomeManage/room_scenery',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/room_scenery',array('p'=>$p)));
			}
			exit;
		}
		//查询内景分类信息
         $room_scenery_classifyM=D('room_scenery_classify');
         $room_scenery_classify_res=$room_scenery_classifyM->order('rsc_sort desc')->select();
         $this->assign('room_scenery_classify_res',$room_scenery_classify_res);
         //查询需要修改的信息
         $room_sceneryM=D('room_scenery');
         $whereBB['rs_id']=I('get.rs_id');
         $room_scenery=$room_sceneryM->where($whereBB)->find();
         $this->assign('room_scenery',$room_scenery);
         //查询包含的分类信息
         $whereCC['rsc_id']=$room_scenery['rsc_id'];
         $room_scenery_classify11=$room_scenery_classifyM->where($whereCC)->find();
         $this->assign('room_scenery_classify11',$room_scenery_classify11);
		 $this->display();
	}
	//====================================================
	//删除内景内容
	public function room_scenery_del(){
		 $p=I('get.p');
		 $room_sceneryM=D('room_scenery');
	     $whereBB['rs_id']=I('get.rs_id');
	     $delres=$room_sceneryM->where($whereBB)->delete();
	     if($delres){
				$this->success('保存成功',U('HomeManage/room_scenery',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/room_scenery',array('p'=>$p)));
			}
	}
	//==========================================
	//内景文章管理
	public function home_news(){
		$p=I('get.p');
		 $this->assign('p',$p);
         $home_newsM=D('home_news');
         $home_news_res=$home_newsM->order('hn_sort desc')->page($p,10)->select();
         $this->assign('home_news_res',$home_news_res);
         //总页数
         $home_news_count=$home_newsM->order('hn_sort desc')->select();
         $allcount=count($home_news_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
	}
	//============================================
	//内景内容添加
	public function home_news_add(){
		$p=I('get.p');
		if($_POST){
			$home_newsM=D('home_news');
			$data['hn_title']=I('post.hn_title');
			$data['hn_short_title1']=I('post.hn_short_title1');
			$data['hn_short_title2']=I('post.hn_short_title2');
			$data['hn_short_title3']=I('post.hn_short_title3');
			
			$data['hn_image']=I('post.hn_image');
			$data['hn_sort']=I('post.hn_sort');
			$addres=$home_newsM->add($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/home_news',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/home_news',array('p'=>$p)));
			}
			exit;
		}
		
		$this->display();
	}
	//================================================
	//内景内容修改
	public function home_news_update(){
		$p=I('get.p');
		if($_POST){
			$home_newsM=D('home_news');
			$whereAA['hn_id']=I('post.hn_id');
			$data['hn_title']=I('post.hn_title');
			$data['hn_short_title1']=I('post.hn_short_title1');
			$data['hn_short_title2']=I('post.hn_short_title2');
			$data['hn_short_title3']=I('post.hn_short_title3');
			
			$data['hn_image']=I('post.hn_image');
			$data['hn_sort']=I('post.hn_sort');
			$saveres=$home_newsM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('HomeManage/home_news',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/home_news',array('p'=>$p)));
			}
			exit;
		}
         //查询需要修改的信息
         $home_newsM=D('home_news');
         $whereBB['hn_id']=I('get.hn_id');
         $home_news=$home_newsM->where($whereBB)->find();
         $this->assign('home_news',$home_news);
		 $this->display();
	}
	//====================================================
	//删除内景内容
	public function home_news_del(){
		 $p=I('get.p');
		 $home_newsM=D('home_news');
         $whereBB['hn_id']=I('get.hn_id');
         $delres=$home_newsM->where($whereBB)->delete();
	     if($delres){
				$this->success('保存成功',U('HomeManage/home_news',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/home_news',array('p'=>$p)));
			}
	}
	//==============================================
	//基础信息
	public function home_base(){
		$p=I('get.p');
		 $this->assign('p',$p);
         $home_baseM=D('home_base');
         $home_base_res=$home_baseM->order('sort desc')->page($p,10)->select();
         $this->assign('home_base_res',$home_base_res);
         //总页数
         $home_base_count=$home_baseM->order('sort desc')->select();
         $allcount=count($home_base_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
	}
	//============================================
	//内景内容添加
	public function home_base_add(){
		$p=I('get.p');
		if($_POST){
			$home_baseM=D('home_base');
			$data['title1']=I('post.title1');
			$data['title2']=I('post.title2');
			$data['title3']=I('post.title3');
			$data['sort']=I('post.sort');
			$addres=$home_baseM->add($data);
			if($addres){
				$this->success('保存成功',U('HomeManage/home_base',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/home_base',array('p'=>$p)));
			}
			exit;
		}
		
		$this->display();
	}
	//================================================
	//内景内容修改
	public function home_base_update(){
		$p=I('get.p');
		if($_POST){
			$home_baseM=D('home_base');
			$whereAA['id']=I('post.id');
			
			$data['title1']=I('post.title1');
			$data['title2']=I('post.title2');
			$data['title3']=I('post.title3');
			$data['sort']=I('post.sort');
			$saveres=$home_baseM->where($whereAA)->save($data);
			if($saveres){
				$this->success('保存成功',U('HomeManage/home_base',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/home_base',array('p'=>$p)));
			}
			exit;
		}
         //查询需要修改的信息
         $home_baseM=D('home_base');
         $whereBB['id']=I('get.id');
         $home_base=$home_baseM->where($whereBB)->find();
         $this->assign('home_base',$home_base);
		 $this->display();
	}
	//====================================================
	//删除内景内容
	public function home_base_del(){
		 $p=I('get.p');
		 $home_baseM=D('home_base');
         $whereBB['id']=I('get.id');
         $delres=$home_baseM->where($whereBB)->delete();
	     if($delres){
				$this->success('保存成功',U('HomeManage/home_base',array('p'=>$p)));
			}else{
				$this->error('保存失败',U('HomeManage/home_base',array('p'=>$p)));
			}
	}
	//====================================================
	//精彩花絮信息
	public function jingcai(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $jingcaiM=D('jingcai');
        $jingcaiData=$jingcaiM->order('jc_sort desc')->page($p,10)->select();
        $this->assign('jingcaiData',$jingcaiData);

        //轮播总页数
        $jingcai_res=$jingcaiM->order('jc_sort desc')->select();
        $allcount=count($jingcai_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加友情链接
    public function jingcai_add(){
        $p=I('get.p');
        if($_POST){
            $jingcaiM=D('jingcai');
            $data['jc_title']=I('post.jc_title');
            $data['jc_title_english']=I('post.jc_title_english');
            $data['jc_sort']=I('post.jc_sort');
            $data['jc_url']=I('post.jc_url');
            $addres=$jingcaiM->add($data);
            if($addres){
                $this->success('保存成功',U('HomeManage/jingcai',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/jingcai',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function jingcai_update(){
        $p=I('get.p');
        if($_POST){
            $jingcaiM=D('jingcai');
            $whereBB['jc_id']=I('post.jc_id');
            $data['jc_title']=I('post.jc_title');
            $data['jc_title_english']=I('post.jc_title_english');
            $data['jc_sort']=I('post.jc_sort');
            $data['jc_url']=I('post.jc_url');
            $saveres=$jingcaiM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('HomeManage/jingcai',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/jingcai',array('p'=>$p)));
            }
            exit;
        }
        $jingcaiM=D('jingcai');
        $whereAA['jc_id']=I('get.jc_id');
        $jingcai=$jingcaiM->where($whereAA)->find();
        $this->assign('jingcai',$jingcai);
        $this->display();
    }
    //==========================================================
    //删除友情链接
    public function jingcai_del(){
        $p=I('get.p');
        $jingcaiM=D('jingcai');
        $whereAA['jc_id']=I('get.jc_id');
        $delres=$jingcaiM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('HomeManage/jingcai',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('HomeManage/jingcai',array('p'=>$p)));
            }
    }


}
?>