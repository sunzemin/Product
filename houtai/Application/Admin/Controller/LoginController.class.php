<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class LoginController extends Controller {
    public function login(){
        if($_POST){
            $code=I('post.code');
            $verify = new \Think\Verify();
            $res = $verify->check($code, '');
            if($res){
                //echo $res;
                $adminM=D('admin');
                $where['aname']=I('post.aname');
                $adminRes=$adminM->where($where)->find();
                if($adminRes){
                    if($adminRes['apwd']==md5(I('post.apwd'))){
                        $ip = get_client_ip();
                        session('adminid',$adminRes['aid']);
                        session('ip',$ip);
                        $data['aip']=$ip;
                        $adminsaveRes=$adminM->where($where)->save($data);
                        $admin_configM=D('admin_config');
                        $dataAA['ac_name']=$adminRes['aname'];
                        $dataAA['ac_ip']=$ip;
                        $dataAA['ac_time']=time();
                        $res=$admin_configM->add($dataAA);
                        $this->success("登陆成功",U('Index/index'));
                    }else{
                        $this->error("登陆失败",U('Login/login'));
                    }
                }else{
                    $this->error("登陆失败",U('Login/login'));
                }
                exit();
            }else{
                echo "<script type='text/javascript'>alert('验证码错误');location.href='/index.php/Admin/Login/login';</script>";
            }
        }
        $this->display();
    }
    public function loginout(){
        session(null);
        $this->error("退出成功",U('Login/login'));
    }
    public function register(){
        $this->display();
    }
    public function verify()
    {
        $config =    array(
            'fontSize'    =>    19,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify = new Verify($config);
        $Verify->entry();
    }
    /* 验证码校验 */
    public function check_verify($code, $id = '')
   {
       $verify = new \Think\Verify();
       $res = $verify->check($code, $id);
       $this->ajaxReturn($res, 'json');
   }



}