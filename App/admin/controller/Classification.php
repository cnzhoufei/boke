<?php

namespace app\admin\controller;
use app\admin\model\Classification as ClassModel;
use think\View;

class Classification extends Common
{
	
	public function index()
	{
		$data = db('classification')->order("concat(`path`,`sorting`)")->select();
		$this->assign('data',$data);
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
			$res = $model->add($_POST);
			if($res){
				$this->success('添加成功',url('/admin/classification/index'));
			}else{
				$this->error('添加失败');
			}
		}else{


			$classlist = db('classification')->order('path')->select();
			$this->assign('list',$classlist);
			return view();
		}

	}

	//修改
	public function change()
	{
		if(request()->isPost()){
			$input = input('post.');
			$validate = $this->validate($input,'Classification');//验证数据
			if($validate !== true){
				$this->error($validate);
			}
			$model = new ClassModel('classification');
			$res = $model->change($input);
			if($res){
				$this->success('修改成功',url('/admin/classification/index'));
			}else{
				$this->error('修改失败');
			}

		}else{
			$id = input('id');
			$model = model('classification');	
			$data = $model->where('id',$id)->find();
			if(!$data){$this->error('非法操作');}
			$this->assign('data',$data);
			$classlist = $model->where('id','neq',$data['id'])->order('path')->select();
			$this->assign('list',$classlist);
			return view();
		}
	}

	//排序
	public function sorting()
	{
		if(request()->isAjax()){
			$input = input('post.');
			$res = db('classification')->where('id', (int)$input['id'])
		    ->update(['sorting' => $input['sorting']]);
		    if($res){
		    	return ['res'=>1,'msg'=>'更新成功'];
		    }else{
		    	return ['res'=>0,'msg'=>'更新失败'];
		    }
			
		}else{
			$this->error('非法操作');
		}
	}


	//删除
	public function delete()
	{
		if(request()->isAjax()){
			$input = input('post.');
			$result = $this->validate(	['id' => $input['id'],'__token__'=>$input['__token__']], ['id' => 'integer|token',]);
			if(true !== $result){return ['res'=>0,'msg'=>'非法操作'];}

			$data = db('classification')->where('pid',$input['id'])->value('id');
			if($data){return ['res'=>0,'msg'=>'有子级分类,不可删除！'];}

			$res = db('classification')->where('id',$input['id'])->delete();
			if($res){
				return ['res'=>1,'msg'=>'删除成功','token'=>Request()->token()];
			}else{
				return ['res'=>0,'msg'=>'删除失败'];
			}

		}else{

			$this->error('非法操作');
		}
	}

	
	 // public function __destruct()
  //   {
  //       dump(db());exit;
  //   }

	



}
