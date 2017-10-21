<?php

namespace app\admin\controller;
use app\admin\model\Classification as ClassModel;

class Classification extends Common
{
	// public function init()
	// {
	// 	parent::init();
	// }
	public function index()
	{
		return view();
	}



	//添加分类
	public function add()
	{
		if(request()->isPost()){
			$input = input('post.');
			$validate = $this->validate($input,'Classification');//验证数据
			if($validate !== true){
				$this->error($validate);
			}

			$model = new ClassModel('Classification');
			dump($model->add());






		}else{


			return view();
		}

	}
}