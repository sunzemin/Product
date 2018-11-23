<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends CommonController{
	//=============================================
	//内景分类信息
    public function product_classify(){
         $p=I('get.p');
         $this->assign('p',$p);
         $product_classifyM=D('product_classify');
         $product_classify_res=$product_classifyM->order('pc_sort desc')->page($p,10)->select();
         $this->assign('product_classify_res',$product_classify_res);
         //dump($product_classify_res);
         //总页数
         $product_classify_count=$product_classifyM->order('pc_sort desc')->select();
         $allcount=count($product_classify_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
    }
    //=============================================
    //添加服务优势
    public function product_classify_add(){
        $p=I('get.p');
        if($_POST){
            $product_classifyM=D('product_classify');
            $data['pc_name']=I('post.pc_name');
            $data['pc_sort']=I('post.pc_sort');
            $addres=$product_classifyM->add($data);
            if($addres){
                $this->success('保存成功',U('Product/product_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Product/product_classify',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //=============================================
    //修改服务优势
    public function product_classify_update(){
        $p=I('get.p');
        if($_POST){
            $product_classifyM=D('product_classify');
            $whereBB['pc_id']=I('post.pc_id');
            $data['pc_name']=I('post.pc_name');
            $data['pc_sort']=I('post.pc_sort');
            $saveres=$product_classifyM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Product/product_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Product/product_classify',array('p'=>$p)));
            }
            exit;
        }
        $product_classifyM=D('product_classify');
        $whereAA['pc_id']=I('get.pc_id');
        $product_classify=$product_classifyM->where($whereAA)->find();
        $this->assign('product_classify',$product_classify);
        $this->display();
    }
    //================================================
    //删除服务优势
    public function product_classify_del(){
        $p=I('get.p');
        $product_classifyM=D('product_classify');
        $whereAA['pc_id']=I('get.pc_id');
        //dump($whereAA);
        $delres=$product_classifyM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Product/product_classify',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Product/product_classify',array('p'=>$p)));
            }
    }
    
    //=============================================
	//内景分类信息
    public function product(){
         $p=I('get.p');
         $pc_id=I('get.pc_id');
         $this->assign('pc_id',$pc_id);
         $this->assign('p',$p);
         $productM=D('product');
         $whereAC['pc_id']=$pc_id;
         $product_res=$productM->where($whereAC)->order('psort desc')->page($p,10)->select();
         $this->assign('product_res',$product_res);
         //查询所属分类信息
         $product_classifyM=D('product_classify');
         $pcarr=array();
         for($i=0;$i<count($product_res);$i++){
         	 $whereAA['pc_id']=$product_res[$i]['pc_id'];
         	 $product_classify=$product_classifyM->where($whereAA)->find();
         	 $pcarr[]=$product_classify;
         }
         $this->assign('product_classify_res',$pcarr);
         //dump($product_res);
         //总页数
         $product_count=$productM->order('psort desc')->select();
         $allcount=count($product_count);
         $page=ceil($allcount/10);
         $this->assign('page',$page);
         $this->display();
    }
    //=============================================
    //添加服务优势
    public function product_add(){
        $p=I('get.p');
        $pc_id=I('get.pc_id');
        if($_POST){
            $productM=D('product');
            $data['pimage']=I('post.pimage');
            $data['pname']=I('post.pname');
            $data['ptime']=time();
            $data['pprice']=I('post.pprice');
            $data['pintroduce']=I('post.pintroduce');
            $data['pc_id']=$pc_id;
            $data['psort']=I('post.psort');
            $addres=$productM->add($data);
            if($addres){
                $this->success('保存成功',U('Product/product',array('p'=>$p,'pc_id'=>$pc_id)));
            }else{
                $this->error('保存失败',U('Product/product',array('p'=>$p,'pc_id'=>$pc_id)));
            }
            exit;
        }
        $this->display();
    }
    //=============================================
    //修改服务优势
    public function product_update(){
        $p=I('get.p');
        $pc_id=I('get.pc_id');
        if($_POST){
            $productM=D('product');
            $whereBB['pid']=I('post.pid');
            $data['pimage']=I('post.pimage');
            $data['pname']=I('post.pname');
            $data['ptime']=time();
            $data['pprice']=I('post.pprice');
            $data['pintroduce']=I('post.pintroduce');
            $data['pc_id']=$pc_id;
            $data['psort']=I('post.psort');
            $saveres=$productM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Product/product',array('p'=>$p,'pc_id'=>$pc_id)));
            }else{
                $this->error('保存失败',U('Product/product',array('p'=>$p,'pc_id'=>$pc_id)));
            }
            exit;
        }
        $productM=D('product');
        $whereAA['pid']=I('get.pid');
        $product=$productM->where($whereAA)->find();
        $this->assign('product',$product);
        $this->display();
    }
    //================================================
    //删除服务优势
    public function product_del(){
    	$pc_id=I('get.pc_id');
        $p=I('get.p');
        $productM=D('product');
        $whereAA['pid']=I('get.pid');
        $delres=$productM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Product/product',array('p'=>$p,'pc_id'=>$pc_id)));
            }else{
                $this->error('保存失败',U('Product/product',array('p'=>$p,'pc_id'=>$pc_id)));
            }
    }
}
   
?>
	