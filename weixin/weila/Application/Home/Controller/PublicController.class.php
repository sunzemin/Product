<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function nav(){
		$navM=D('nav');
		$navres=$navM->order('nav_sort desc')->select();
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
    //获取客户评价信息
    public function customspeech($k=0,$p=1){
    	$custom_wordM=D('custom_word');
        if($k==0){
            $custom_word_res=$custom_wordM->order('cw_sort desc')->page($p,10)->select();
			$custom_word_count=$custom_wordM->select();
	        $allcount=count($custom_word_count);
	        $page=ceil($allcount/10);
        }else{
			$whereAA['cwc_id']=$k;
			$custom_word_res=$custom_wordM->where($whereAA)->order('cw_sort desc')->page($p,10)->select();
			$custom_word_count=$custom_wordM->where($whereAA)->select();
	        $allcount=count($custom_word_count);
	        $page=ceil($allcount/10);
        }
        $this->ajaxReturn(array('custom_word_res'=>$custom_word_res,'p'=>$p,'page'=>$page,'allcount'=>$allcount));
    }
    public function selcase($p=1){
    	//查询样片信息
    	$caseM=D('case');
        $caseData=$caseM->order('sort desc')->page($p,10)->select();
        //样片数量
        $casecount=$caseM->order('sort desc')->select();
        $caseallcount=count($casecount);
        //总页数
        $casepage=ceil($caseallcount/10);
        $this->ajaxReturn(array('caseData'=>$caseData,'allcount'=>$caseallcount,'allpage'=>$casepage,'p'=>$p));

    }
    public function selShortVideo($p=1){
        //精彩花絮
        $short_videoM=D('short_video');
        $short_video_Data=$short_videoM->order('sv_sort desc')->page($p,10)->select();
        //花絮数量
        $short_video_count=$short_videoM->select();
        $short_video_allcount=count($short_video_count);
        //总页数
        $allpage=ceil($short_video_allcount/10);
        $this->ajaxReturn(array('short_video_Data'=>$short_video_Data,'allcount'=>$short_video_allcount,'allpage'=>$allpage,'p'=>$p));
    }
    //最新特惠
     public function selactive($p=1){
        $activeM=D('active');
        $activeData=$activeM->order('asort desc')->page($p,10)->select();
        $activecount=$activeM->order('asort desc')->select();
        $activeallcount=count($activecount);
        //总页数
        $activepage=ceil($activeallcount/10);
        $this->ajaxReturn(array('activeData'=>$activeData,'allcount'=>$activeallcount,'allpage'=>$activepage,'p'=>$p));
    }


    
}
?>