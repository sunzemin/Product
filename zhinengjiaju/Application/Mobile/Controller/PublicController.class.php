<?php
namespace Mobile\Controller;
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
}
?>