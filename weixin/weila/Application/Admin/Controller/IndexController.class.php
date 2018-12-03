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
        $this->display();
    }
    public function top(){
        $adminM=D('admin');
        $whereaid['aid']=session('adminid');

        $adminsel=$adminM->where($whereaid)->find();
        //dump($adminsel);exit;
        $this->assign('adminsel',$adminsel);
        $this->display();
    }
    public function left(){
        $this->display();
    }
    public function footer(){
        $this->display();
    }
    public function login(){
        $this->display();
    }
    //=====================================================================
    //管理员密码管理
    public function password(){
        if($_POST){
            $adminM=D('admin');

            if(I('post.password')==I('post.passwordtwo')){
                $whereapwd['apwd']=I('post.oldpassword');
                $seladmin=$adminM->where($whereapwd)->find();
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
        $whereaid['aid']=session('adminid');
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
        $whereAA['fid']=0;
        $navres=$navM->where($whereAA)->page($p,8)->select();
        $this->assign('navres',$navres);
        
        //查询二级导航
        $navcount=count($navres);
        $navarr=array();
        for($i=0;$i<$navcount;$i++){
            $wherefid['fid']=$navres[$i]['nav_id'];
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
            $data['nav_english_name']=I('post.nav_english_name');
            $data['fid']=I('post.fid');
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
            $data['nav_english_name']=I('post.nav_english_name');
            $data['fid']=I('post.fid');
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
        $whereCC['nav_id']=$navdata['fid'];
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
    //=========================================================================
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
    //=========================================================================
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
    //=========================================================================
    //删除管理员
    public function userdel(){
        $adminM=D('admin');
        $whereAA['aid']=I('get.adminid');
        $delres=$adminM->where($whereAA)->delete();
        if($delres){
            $this->success('保存成功',U('Index/user'));
        }else{
            $this->error('保存失败',U('Index/user'));
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
            $data['lb_time']=time();
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
           $data['lb_time']=time();
            $data['nav_id']=I('post.nav_id');
            //dump($data);
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
    //===============================================================================
    //底部信息
    public function bottom(){
        $footerM=D('footer');
        $footer=$footerM->find();
        $this->assign('footer',$footer);
        $this->display();
    }
    //===============================================================================
    //添加底部信息
    public function bottomadd(){
        if($_POST){
            $bottom=D('footer');
            $data['telephone']=I('post.telephone');
            $data['address']=I('post.address');
            $data['record']=I('post.record');
            $data['wx_erweima']=I('post.wx_erweima');
            $data['wb_erweima']=I('post.wb_erweima');
            $data['copyright']=I('post.copyright');
            $data['copyright_english']=I('post.copyright_english');
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
    //================================================================================
    //修改底部信息
    public function bottomupdate(){
        if($_POST){
            $bottom=D('footer');
            $data['telephone']=I('post.telephone');
            $data['address']=I('post.address');
            $data['record']=I('post.record');
            $data['wx_erweima']=I('post.wx_erweima');
            $data['wb_erweima']=I('post.wb_erweima');
            $data['copyright']=I('post.copyright');
            $data['copyright_english']=I('post.copyright_english');
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
        $this->display();
    }
    //===============================================================================
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
    //===============================================================
    public function friend_url(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询链接信息
        $friend_urlM=D('friend_url');
        $friend_urlData=$friend_urlM->order('fu_sort desc')->page($p,10)->select();
        $this->assign('friend_urlData',$friend_urlData);

        //轮播总页数
        $friend_url_res=$friend_urlM->order('fu_sort desc')->select();
        $allcount=count($friend_url_res);
        $page=ceil($allcount/10);
        $this->assign('page',$page);
        $this->display();
    }
    //==============================================================
    //添加友情链接
    public function friend_url_add(){
        $p=I('get.p');
        if($_POST){
            $friend_urlM=D('friend_url');
            $data['fu_image']=I('post.fu_image');
            $data['fu_url']=I('post.fu_url');
            $data['fu_sort']=I('post.fu_sort');
           
            $addres=$friend_urlM->add($data);
            if($addres){
                $this->success('保存成功',U('Index/friend_url',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/friend_url',array('p'=>$p)));
            }
            exit;
        }
        $this->display();
    }
    //==============================================================
    //修改导航信息
    public function friend_url_update(){
        $p=I('get.p');
        if($_POST){
            $friend_urlM=D('friend_url');
            $whereBB['fu_id']=I('post.fu_id');
            $data['fu_image']=I('post.fu_image');
            $data['fu_url']=I('post.fu_url');
            $data['fu_sort']=I('post.fu_sort');
           
            $saveres=$friend_urlM->where($whereBB)->save($data);
            if($saveres){
                $this->success('保存成功',U('Index/friend_url',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/friend_url',array('p'=>$p)));
            }
            exit;
        }
        $friend_urlM=D('friend_url');
        $whereAA['fu_id']=I('get.fu_id');
        $friend_url=$friend_urlM->where($whereAA)->find();
        $this->assign('friend_url',$friend_url);
        $this->display();
    }
    //==========================================================
    //删除友情链接
    public function friend_url_del(){
        $p=I('get.p');
        $friend_urlM=D('friend_url');
        $whereAA['fu_id']=I('get.fu_id');
        $delres=$friend_urlM->where($whereAA)->delete();
        if($delres){
                $this->success('保存成功',U('Index/friend_url',array('p'=>$p)));
            }else{
                $this->error('保存失败',U('Index/friend_url',array('p'=>$p)));
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
        //dump($navdata);exit;
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
        //dump($adminres);
        $this->display();
    }
    //=========================================================================
    //添加管理员
    public function user1add(){
        if($_POST){
            
                $userM=D('user');
                $data['name']=I('post.name');
                $data['QQ']=I('post.QQ');
                $data['sort']=I('post.sort');
                $data['wechat']=I('post.wechat');
                $data['telephone']=I('post.telephone');
                $addres=$userM->add($data);
                if($addres){
                    $this->success('保存成功',U('Index/user1'));
                }else{
                    $this->error('保存失败',U('Index/user1'));
                }
                exit;
           
        }
        $this->display();
    }
    //=========================================================================
    //删除管理员
    public function user1del(){
        $userM=D('user');
        $whereAA['id']=I('get.id');
        $delres=$userM->where($whereAA)->delete();
        if($delres){
            $this->success('保存成功',U('Index/user1'));
        }else{
            $this->error('保存失败',U('Index/user1'));
        }
    }
    //===========================================================
    //底部导航管理
     public function footer_nav(){
        $p=I('get.p');
        $this->assign('p',$p);
        //查询底部父级导航信息
        $footer_navM=D('footer_nav');
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->page($p,8)->select();
        $this->assign('footer_navres',$footer_navres);
        
        $navfooterarr=array();
        for($i=0;$i<count($footer_navres);$i++){
            $wherefid['fn_fid']=$footer_navres[$i]['fn_id'];
            $secondnav=$footer_navM->where($wherefid)->select();
            $navfooterarr[]=$secondnav;
        }
        $this->assign('navfooterarr',$navfooterarr);
        //dump($navfooterarr);
        //总页数
         $footer_navres=$footer_navM->where($whereAA)->select();
         $allcount=count($footer_navres);
         $page=ceil($allcount/8);
         $this->assign('page',$page);
        $this->display();
    }
    //===============================================================================
    //添加导航信息
    public function footer_nav_add(){
        $footer_navM=D('footer_nav');
        if($_POST){
            $data['fn_nav_name']=I('post.fn_nav_name');
            $data['fn_url']=I('post.fn_url');
            $data['fn_english_name']=I('post.fn_english_name');
            $data['fn_sort']=I('post.fn_sort');
            $data['fn_fid']=I('post.fn_fid');
            $addres=$footer_navM->add($data);
            if($addres){
                        $this->success('保存成功',U('Index/footer_nav'));
                    }else{
                        $this->error('保存失败',U('Index/footer_nav'));
                    }
            exit;
        }
        $whereAA['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        $this->display();
    }
    //===============================================================================
    //修改导航信息
    public function footer_nav_update(){
        $footer_navM=D('footer_nav');
        if($_POST){
            $whereAA['fn_id']=I('post.fn_id');
            $data['fn_nav_name']=I('post.fn_nav_name');
            $data['fn_english_name']=I('post.fn_english_name');
            $data['fn_url']=I('post.fn_url');
            $data['fn_sort']=I('post.fn_sort');
            $data['fn_fid']=I('post.fn_fid');
            //dump( $data);exit;
            $saveres=$footer_navM->where($whereAA)->save($data);
            if($saveres){
                        $this->success('保存成功',U('Index/footer_nav'));
                    }else{
                        $this->error('保存失败',U('Index/footer_nav'));
                    }
            exit;
        }
        //查询修改信息
        $whereBB['fn_id']=I('get.fn_id');
        $footer_navdata=$footer_navM->where($whereBB)->find();
        $this->assign('footer_navdata',$footer_navdata);
        //dump($footer_navdata);
        //查询父级导航
        $whereCC['fn_id']=$footer_navdata['fn_fid'];
        $parentnav=$footer_navM->where($whereCC)->find();
        //dump($parentnav);
        $this->assign('parentnav',$parentnav);
        //查询底部父级导航信息
        $whereDD['fn_fid']=0;
        $footer_navres=$footer_navM->where($whereAA)->select();
        $this->assign('footer_navres',$footer_navres);
        
        $this->display();
    }
    //================================================================================
    //删除底部导航信息
    public function footer_nav_del(){
        $footer_navM=D('footer_nav');
        $whereBB['fn_id']=I('get.fn_id');
        $delres=$footer_navM->where($whereBB)->delete();
        if($delres){
                        $this->success('保存成功',U('Index/footer_nav'));
                    }else{
                        $this->error('保存失败',U('Index/footer_nav'));
                    }
    }

    //================================================================================
    //导航
    public function selnav(){
        $navM=D('nav');
        //查询一级导航
        $wherefid['fid']=0;
        $navres=$navM->where($wherefid)->select();
        //$this->assign('navres',$navres);
        //查询二级导航
        $navcount=count($navres);
        $navarr=array();
        for($i=0;$i<$navcount;$i++){
            $wherefid['fid']=$navres[$i]['nav_id'];
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