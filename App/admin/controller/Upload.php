<?php
namespace app\admin\controller;
use app\admin\model\Article as ArticleModel;

class Upload extends Common
{

    //单文件上传
   public function uploadOne()
   {
        if(request()->isPost()){
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('img');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                // $info = $file->move(ROOT_PATH . 'public' . DS . 'upload');
                $info = $file->validate(['size'=>200048,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'upload');
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 jpg
                    // echo $info->getExtension();
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $path = '/upload/'.str_replace('\\', '/', $info->getSaveName());
                    $this->assign('path',$path);

                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getFilename(); 
                }else{
                    // 上传失败获取错误信息
                    $error = $file->getError();
                    $this->assign('error',$error);
                }
            }

        }

            return view();
   }

   
}
