<?php



namespace app\admin\validate;
use think\Validate;
class Login extends Validate
{
    protected $rule = [
        'name'  	=>  'require|min:2|token',  
        'passwd'	=>	'require|min:4',
        'code'		=>	'require|min:2',
    ];

    protected $message = [
        'name.require'  	=>  '用户名不能为空',
        'name.min'  		=>  '用户名不能小于两个字节',   
        'passwd.min'  		=>  '密码长度不能小于四位',     
        'passwd.require'  	=>  '密码不能为空', 
    ];

	
}