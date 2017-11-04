<?php

/*
*文章model
*/

namespace app\admin\model;
use think\Model;
class Article extends Model
{
	//添加文章
	public function add($data)
	{
		
		$this->data = $data;
		return $this->allowField(true)->save();

	}
}