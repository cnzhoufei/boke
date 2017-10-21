<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Login extends Controller
{
    public function index()
    {
        if(session('AdminUser')){
            $this->redirect('/Admin/index/index', ['cate_id' => 2], 302);
        }
    	if(request()->isPost()){
    		$input = input('post.');
			$validate = $this->validate($input,'Login');//验证数据
			if($validate !== true){
				return (['res'=>'0','msg'=>$validate,'token'=>Request()->token()]);
			}

            if(!captcha_check($input['code'])){
             //验证失败
                return (['res'=>'2','msg'=>'验证码错误！','token'=>Request()->token()]);
            }

             $admin = Db::name('admin')->where('admin_name','eq',$input['name'])->find();
             $pas = decryption($admin['admin_passwd'],$admin['admin_secret']);//解密
             if($pas == $input['passwd']){
                session('AdminUser',$admin['admin_id']);
                return (['res'=>1,'msg'=>'登录成功']);
             }else{
                return (['res'=>0,'msg'=>'用户名或密码错误','token'=>Request()->token()]);
             }

    	}else{
          
 
	    	return view();
    	}
    }


    public function unLogin()
    {
        session('AdminUser',null);
        if(!session('AdminUser')){$this->redirect('/Admin/login/index', ['cate_id' => 2], 302);}

    }


    public function code()
    {
        $captcha = new \think\captcha\Captcha();
        $captcha->fontSize = 30;
        $captcha->length   = 3;
        $captcha->useNoise = false;
        return $captcha->entry();
    }

    
}
