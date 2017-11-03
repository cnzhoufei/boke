<?php


namespace app\admin\validate;
use think\Validate;
class Article extends Validate
{
    protected $rule = [
        'name'  	=>  'require|token',  
        'title'	    =>	'require',
    ];

    protected $message = [
        'name.require'  	=>  '文章名不能为空',
        'title.require'  	=>  '文章标题不能为空', 
    ];


    public function add($input)
    {
        $this->save($input);
    }

	
}