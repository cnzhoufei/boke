<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\View;

class Common extends Controller
{
	protected $beforeActionList = [
        'init',
        // 'second' =>  ['except'=>'index'],//不使用前置操作
        // 'three'  =>  ['only'=>'test'],//使用前置操作
    ];


    //前置操作
    public function init()
    {
    	if(!session('AdminUser')){$this->redirect('/Admin/login/index', [], 302, ['data' => $_SERVER['PHP_SELF']]);}
    }

    //空操作
    public function _empty()
    {
        $view = new View();
        // return $view->fetch('common/404');
    	
    }

   
}
