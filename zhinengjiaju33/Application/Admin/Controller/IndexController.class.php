<?php
// +----------------------------------------------------------------------
// | 天骄网站
// +----------------------------------------------------------------------
// | 公共模块控制器  创建:2018/9/29
// +----------------------------------------------------------------------
// | Author: Sun <465450471@qq.com>
// +----------------------------------------------------------------------
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $adminM=D('admin');
        $whereAA['aid']=I('get.aid');
        $aid=I('get.aid');
        $admin=$adminM->where($whereAA)->find();
        //dump($admin);
        $this->assign('aid',$aid);
        $this->assign('admin',$admin);
        $this->display();
    }
    public function btn1(){
        $this->display();
    }
    public function form(){
        $this->display();
    }
    public function table(){
        $this->display();
    }
    //管理员管理
    public function user(){
        $p=I('get.p');
        $this->assign('p',$p);
        $adminM=D('admin');
        $adminres=$adminM->where('aid!=1')->order('asort desc')->page($p,10)->select();
        //总页数
        $admincount=$adminM->where('aid!=1')->order('asort desc')->select();
        $allcount=count($admincount);
        $page=ceil($allcount/10);
        $this->assign('page',$page);

        $this->assign('adminres',$adminres);
        //dump($adminres);
        $this->display();
    }
    //添加管理员
    public function useradd(){
    if($_POST){
        if(I('post.apwd')==I('post.apwdtwo')){
            $adminM=D('admin');
            $data['aname']=I('post.aname');
            $data['apwd']=md5(I('post.apwd'));
            $data['asort']=I('post.asort');
            $data['aip']=get_client_ip();
            $addres=$adminM->add($data);
            if($addres){
                $this->success('保存成功',U('Index/user'));
            }else{
                $this->error('保存失败',U('Index/user'));
            }
            exit;
        } 
    }
    $this->display();
    }
    //管理员信息删除
    public function userdel(){
        $adminM=D('admin');
        $whereAA['aid']=I('get.aid');
        $delres=$adminM->where($whereAA)->delete();
        if($delres){
            $this->success('保存成功',U('Index/user'));
        }else{
            $this->error('保存失败',U('Index/user'));
        }
    }
    //管理员密码管理
    public function password(){
        if($_POST){
            $adminM=D('admin');
            if(I('post.password')==I('post.passwordtwo')){
                $whereapwd['apwd']=I('post.oldpassword');
                $seladmin=$adminM->where($whereapwd)->find();
                //dump($seladmin);
                if($seladmin){
                    $whereaid['aid']=$seladmin['aid'];
                    $data['apwd']=md5(I('post.password'));
                    $saveres=$adminM->where($whereaid)->save($data);
                    if($saveres){
                        $this->success('保存成功',U('Index/password'));
                    }else{
                        $this->error('保存失败',U('Index/password'));
                    }
                }
            }
            exit;
        }
        $adminM=D('admin');
        $whereaid['aid']=I('get.aid');
        $adminsel=$adminM->where($whereaid)->find();
        $this->assign('adminsel',$adminsel);
        $this->display();
    }
    //=======================================================================
    //导航管理
    public function nav(){
        $p=I('get.p');
        $this->assign('p',$p);
        $navM=D('nav');
        $whereAA['nav_fid']=0;
        $navres=$navM->where($whereAA)->page($p,8)->select();
        $this->assign('navres',$navres);
        
        //查询二级导航
        $navcount=count($navres);
        $navarr=array();
        for($i=0;$i<$navcount;$i++){
            $wherefid['nav_fid']=$navres[$i]['nav_id'];
            $secondnav=$navM->where($wherefid)->select();
            $navarr[]=$secondnav;
        }
        $this->assign('navarr',$navarr);
        
        //总页数
         $navres=$navM->where($whereAA)->select();
         $allcount=count($navres);
         $page=ceil($allcount/8);
         $this->assign('page',$page);

        $this->display();
    }
    //===============================================================================
    //添加导航信息
    public function navadd(){
        if($_POST){
            $navM=D('nav');
            $data['nav_name']=I('post.nav_name');
            $data['nav_url']=I('post.nav_url');
            $data['nav_sort']=I('post.nav_sort');
            $data['nav_fid']=I('post.nav_fid');
            $addres=$navM->add($data);
            if($addres){
                        $this->success('保存成功',U('Index/nav'));
                    }else{
                        $this->error('保存失败',U('Index/nav'));
                    }
            exit;
        }
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //===============================================================================
    //修改导航信息
    public function navupdate(){
        if($_POST){
            $navM=D('nav');
            $whereAA['nav_id']=I('post.nav_id');
            $data['nav_name']=I('post.nav_name');
            $data['nav_url']=I('post.nav_url');
            $data['nav_sort']=I('post.nav_sort');
            $data['nav_fid']=I('post.nav_fid');
            $saveres=$navM->where($whereAA)->save($data);
            if($saveres){
                        $this->success('保存成功',U('Index/nav'));
                    }else{
                        $this->error('保存失败',U('Index/nav'));
                    }
            exit;
        }
        //查询修改信息
        $navM=D('nav');
        $whereBB['nav_id']=I('get.nav_id');
        $navdata=$navM->where($whereBB)->find();
        $this->assign('navdata',$navdata);
        //查询父级导航
        $whereCC['nav_id']=$navdata['nav_fid'];
        $parentnav=$navM->where($whereCC)->find();
        $this->assign('parentnav',$parentnav);
        //查询导航信息
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        //$this->display();
        $this->display();
    }
    //================================================================================
    //删除导航信息
    public function navdel(){
        $navM=D('nav');
        $whereBB['nav_id']=I('get.nav_id');
        $delres=$navM->where($whereBB)->delete();
        if($delres){
                        $this->success('保存成功',U('Index/nav'));
                    }else{
                        $this->error('保存失败',U('Index/nav'));
                    }
    }
    //============================================================
    //背景图片
    public function background_image(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $background_imageM=D('background_image');
        $background_image_Data=$background_imageM->order('bi_sort desc')->page($p,10)->select();
        $this->assign('background_image_Data',$background_image_Data);
        //获取里面的导航信息
        $navM=D('nav');
        $navarr=array();
        for($i=0;$i<count($background_image_Data);$i++){
             $wherenav['nav_id']=$background_image_Data[$i]['nav_id'];
             $navs=$navM->where($wherenav)->find();
             $navarr[]=$navs;
        }
        $this->assign('navarr',$navarr);
        //轮播总页数
        $background_image_res=$background_imageM->order('bi_sort desc')->select();
        $allcount=count($background_image_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }

    //===========================================================
    //添加背景图片
    public function background_image_add(){
        $p=I('get.p');
        if($_POST){
            $background_imageM=D('background_image');
            $data['bi_image']=I('post.bi_image');
            $data['nav_id']=I('post.nav_id');
            $data['bi_sort']=I('post.bi_sort');
            $data['bi_title']=I('post.bi_title');
            $addres=$background_imageM->add($data);
            if($addres){
                $this->success('保存成功',U('Index/background_image',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/background_image',array('p'=>$p)));
            }
            exit;
        }
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //========================================================
    //背景图片
    public function background_image_update(){
        $p=I('get.p');
        if($_POST){
            $background_imageM=D('background_image');
            $whereAA['bi_id']=I('post.bi_id');
            $data['bi_image']=I('post.bi_image');
            $data['nav_id']=I('post.nav_id');
            $data['bi_sort']=I('post.bi_sort');
            $data['bi_title']=I('post.bi_title');
            $saveres=$background_imageM->where($whereAA)->save($data);
            if($saveres){
                $this->success('保存成功',U('Index/background_image',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/background_image',array('p'=>$p)));
            }
            exit;
        }
        $background_imageM=D('background_image');
        $whereBB['bi_id']=I('get.bi_id');
        $background_image_res=$background_imageM->where($whereBB)->find();
        $this->assign('background_image_res',$background_image_res);
         
        //查询修改轮播所属的导航
        $navM=D('nav');
        $whereBB['nav_id']= $background_image_res['nav_id'];
        $navdata=$navM->where($whereBB)->find();
        $this->assign('navdata',$navdata);
        //dump($navdata);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //=======================================================
    //删除背景图片
    public function background_image_del(){
        $background_imageM=D('background_image');
        $whereBB['bi_id']=I('get.bi_id');
        $delres=$background_imageM->where($whereBB)->delete();
        if($delres){
                $this->success('保存成功',U('Index/background_image',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/background_image',array('p'=>$p)));
            }
    }
    //=============================================================
    //底部信息
    public function bottom(){
        $footerM=D('footer');
        $footer=$footerM->find();
        $this->assign('footer',$footer);
        $this->display();
    }
    //=============================================================
    //添加底部信息
    public function bottomadd(){
        if($_POST){
            $bottom=D('footer');
            $data['telephone']=I('post.telephone');
            $data['email']=I('post.email');
            $data['wx_erweima']=I('post.wx_erweima');
            $data['wb_erweima']=I('post.wb_erweima');
            $data['address']=I('post.address');
            $data['record']=I('post.record');
            $data['map']=I('post.map','',false);
            $data['copyright']=I('post.copyright');
            $whereAA['id']=1;
            $selres=$bottom->where($whereAA)->find();
            if($selres){
                $addres=$bottom->where($whereAA)->save($data);
            }else{
                $data['id']=1;
                $addres=$bottom->add($data);
            }
            
            if($addres){
                $this->success('保存成功',U('Index/bottom'));
            }else{
                $this->error('保存失败',U('Index/bottom'));
            }
            exit;
        }
        $bottomM=D('footer');
        $whereAA['id']=1;
        $bootom=$bottomM->where($whereAA)->find();
        $this->assign('bootom',$bootom);
        $this->display();
    }
    //==============================================================
    //修改底部信息
    public function bottomupdate(){
        if($_POST){
            $bottom=D('footer');
            $data['telephone']=I('post.telephone');
            $data['email']=I('post.email');
            $data['address']=I('post.address');
            $data['record']=I('post.record');
            $data['wx_erweima']=I('post.wx_erweima');
            $data['wb_erweima']=I('post.wb_erweima');
            $data['map']=I('post.map','',false);
            $data['copyright']=I('post.copyright');
            $whereAA['id']=1;
            $saveres=$bottom->where($whereAA)->save($data);
            if($saveres){
                $this->success('保存成功',U('Index/bottom'));
            }else{
                $this->error('保存失败',U('Index/bottom'));
            }
            exit;
        }
        //查找需要修改的底部信息
        $bottomM=D('footer');
        $whereAA['id']=1;
        $bootom=$bottomM->where($whereAA)->find();
        $this->assign('bootom',$bootom);
        //dump($bootom);
        $this->display();
    }
    //============================================================
    //删除底部信息
    public function bottomdel(){
        $bottomM=D('footer');
        $whereAA['id']=1;
        $delres=$bottomM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Index/bottom'));
            }else{
                $this->error('保存失败',U('Index/bottom'));
            }
    }
     //==============================================================================
    //轮播管理
    public function lunbo(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询轮播信息
        $lunboM=D('lunbo');
        $lunboData=$lunboM->order('lb_sort desc')->page($p,9)->select();
        $this->assign('lunboData',$lunboData);
        //轮播里面所属的导航信息
        $navM=D('nav');
        $navdataarr=array();
        for($i=0;$i<count($lunboData);$i++){
           $whereAA['nav_id']=$lunboData[$i]['nav_id'];
           $navdata=$navM->where($whereAA)->find();
           $navdataarr[]=$navdata;
        }
        $this->assign('navdataarr',$navdataarr);

        //轮播总页数
        $lunbores=$lunboM->order('lb_sort desc')->select();
        $allcount=count($lunbores);
        $page=ceil($allcount/9);
        $this->assign('page',$page);

        $this->display();
    }
    //===============================================================================
    //添加轮播信息
    public function lunboadd(){
        if($_POST){
            $lunboM=D('lunbo');
            $data['lb_image']=I('post.lb_image');
            $data['lb_title']=I('post.lb_title');
            $data['lb_sort']=I('post.lb_sort');
            $data['lb_url']=I('post.lb_url');
            $data['nav_id']=I('post.nav_id');
            $addres=$lunboM->add($data);
            if($addres){
                $this->success('保存成功',U('Index/lunbo'));
            }else{
                $this->error('保存失败',U('Index/lunbo'));
            }
            exit;
        }
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //===============================================================================
    //修改轮播信息
    public function lunboupdate(){
        if($_POST){
            $lunboM=D('lunbo');
            $whereBB['lb_id']=I('post.lb_id');
            $data['lb_image']=I('post.lb_image');
             $data['lb_title']=I('post.lb_title');
            $data['lb_sort']=I('post.lb_sort');
            $data['lb_url']=I('post.lb_url');
            $data['nav_id']=I('post.nav_id');
            $saveres=$lunboM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Index/lunbo'));
            }else{
                $this->error('保存失败',U('Index/lunbo'));
            }
            exit;
        }
        //查询修改的轮播信息
        $lunboM=D('lunbo');
        $whereAA['lb_id']=I('get.lb_id');
        $lunbodata=$lunboM->where($whereAA)->find();
        $this->assign('lunbodata',$lunbodata);
        //查询修改轮播所属的导航
        $navM=D('nav');
        $whereBB['nav_id']=$lunbodata['nav_id'];
        $navdata=$navM->where($whereBB)->find();
        $this->assign('navdata',$navdata);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //===============================================================================
    //轮播删除
    public function lunbodel(){
        $lunboM=D('lunbo');
        $whereAA['lb_id']=I('get.lb_id');
        $delres=$lunboM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Index/lunbo'));
            }else{
                $this->error('保存失败',U('Index/lunbo'));
            }
    }
    public function allhead(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $all_headM=D('all_head');
        $all_head_Data=$all_headM->order('ah_sort desc')->page($p,10)->select();
        $this->assign('all_head_Data',$all_head_Data);
        //查询包含的页面信息
        $navM=D('nav');
        $navarr=array();
        for($i=0;$i<count($all_head_Data);$i++){
             $whereAA['nav_id']=$all_head_Data[$i]['nav_id'];
             $navs=$navM->where($whereAA)->find();
             $navarr[]=$navs;
        }
        $this->assign('navarr',$navarr);
        //轮播总页数
        $all_head_res=$all_headM->order('ah_sort desc')->select();
        $allcount=count($all_head_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加友情链接
    public function allhead_add(){
        $p=I('get.p');
        if($_POST){
            $all_headM=D('all_head');
            $data['ah_title1']=I('post.ah_title1');
            $data['ah_title4']=I('post.ah_title4');
            $data['ah_title2']=I('post.ah_title2');
            $data['ah_title3']=I('post.ah_title3','',false);
            $data['ah_sort']=I('post.ah_sort');
            $data['nav_id']=I('post.nav_id');
            $addres=$all_headM->add($data);
            if($addres){
                $this->success('保存成功',U('Index/allhead',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/allhead',array('p'=>$p)));
            }
            exit;
        }
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function allhead_update(){
        $p=I('get.p');
        if($_POST){
            $all_headM=D('all_head');
            $whereCC['ah_id']=I('post.ah_id');
            $data['ah_title1']=I('post.ah_title1');
            $data['ah_title4']=I('post.ah_title4');
            $data['ah_title2']=I('post.ah_title2');
            $data['ah_title3']=I('post.ah_title3','',false);
            $data['ah_sort']=I('post.ah_sort');
            $data['nav_id']=I('post.nav_id');

            $saveres=$all_headM->where($whereCC)->save($data);
            //dump($saveres);
            if($saveres){
                $this->success('保存成功',U('Index/allhead',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/allhead',array('p'=>$p)));
            }
            exit;
        }
        $all_headM=D('all_head');
        $whereAA['ah_id']=I('get.ah_id');
        $all_head=$all_headM->where($whereAA)->find();
        $this->assign('all_head',$all_head);
        //查询修改轮播所属的导航
        $navM=D('nav');
        $whereBB['nav_id']=$all_head['nav_id'];
        $navdata=$navM->where($whereBB)->find();
        $this->assign('navdata',$navdata);
        //查询导航
        $navall=$this->selnav();
        $this->assign('navres',$navall[0]);
        $this->assign('navarr',$navall[1]);
        $this->display();
    }
    //==========================================================
    //删除友情链接
    public function allhead_del(){
        $p=I('get.p');
        $all_headM=D('all_head');
        $whereAA['ah_id']=I('get.ah_id');
        $delres=$all_headM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Index/allhead',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/allhead',array('p'=>$p)));
            }
    }
    //用户管理
    public function user1(){
        $p=I('get.p');
        $this->assign('p',$p);
        $userM=D('user');
        $userres=$userM->order('sort desc')->page($p,10)->select();
        //dump($userres);
        //总页数
        $usercount=$userM->order('sort desc')->select();
        $allcount=count($usercount);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->assign('userres',$userres);
        $this->display();
    }
    //=========================================================================
    //删除管理员
    public function user1del(){
        $p=I('get.p');
        $userM=D('user');
        $whereAA['id']=I('get.id');
        //dump($whereAA);
        $delres=$userM->where($whereAA)->delete();
        if($delres){
            $this->success('保存成功',U('Index/user1',array('p'=>$p)));
        }else{
            $this->error('保存失败',U('Index/user1',array('p'=>$p)));
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