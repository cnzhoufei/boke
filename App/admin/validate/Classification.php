<?php



namespace app\admin\validate;
use think\Validate;
class Classification extends Validate
{
    protected $rule = [
        'name'  	=>  'require|min:2|token',  
        'pid'       =>  'integer',
        'sorting'	=>	'integer',
    ];

    protected $message = [
        'name.require'  	   =>  '分类名称不能为空',
        'pid.integer'  		   =>  '上级分类id必须是数字',   
        'sorting.integer'  	   =>  '排序必须是数字',     
    ];

	
}