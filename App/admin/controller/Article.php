<?php
namespace app\admin\controller;
use app\admin\model\Article as ArticleModel;

class Article extends Common
{

    //文章列表
    public function index()
    {
        $articleData = db('article')->order('sorting,id desc')->select();
        $this->assign('data',$articleData);

        $classData = db('classification')->order('path')->select();
        $this->assign('classData',$classData);
    	return view();
    }


    //添加文章
    public function add()
    {
        if(request()->isPost()){
    		$input = input('post.');
    		$validate = $this->validate($input,'article');//验证
    		if($validate !== true){
    			$this->error($validate);//返回错误信息
    		}

    		$model = new ArticleModel('article');
    		$res = $model->add($input);
    		if($res){
    			$this->success('添加成功');
    		}else{
    			$this->error('添加失败');
    		}



    	}else{

            //查询分类
            $classModel = db('Classification');
            $classdata = $classModel->field('name,id,layer')->order('path')->select();
            $this->assign('classdata',$classdata);
    		return view();
    	}
    }



    public function change()
    {
        if(requerst()->isPost()){


        }else{

            return view();
        }

    }

   
}
