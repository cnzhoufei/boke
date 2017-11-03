<?php


namespace app\admin\model;
use think\Model;
class Classification extends Model
{
	public function add($data)
	{
		// 处理链接
		if(!preg_match('/https?/', $data['external']) && !empty($data['external'])){
			$data['external'] = 'http://'.$data['external'];
		}

		//处理分类path
		$tablename = config('database.prefix').'classification';
		$sql = "SHOW TABLE STATUS where name = '{$tablename}'";
		$id = $this->query($sql)[0]['Auto_increment'];//预自增id
		if($data['pid']){
			$data['path'] = $this->where('id',$data['pid'])->value('path').'_'.$id;
		}else{
			$data['path'] = '0_'.$id;
		}

		//层级
		$data['layer'] = $this->where('id',$data['pid'])->value('layer') + 1;
		//转换拼音
		if(!$data['url']){
			$data['url'] = pinyin($data['name']);
		}

		$data['time'] = time();
		$this->data = $data;
		$res = $this->allowField(true)->save();
		return $res;
	}

	//更新
	public function change($data)
	{
		// 处理链接
		if(!preg_match('/https?/', $data['external']) && !empty($data['external'])){
			$data['external'] = 'http://'.$data['external'];
		}

		//处理路径
		$data['path'] = $this->where('id',$data['pid'])->value('path').'_'.$data['id'];
		$data['layer'] = $this->where('id',$data['pid'])->value('layer') + 1;
		// $this->data = $data;
		unset($data['__token__']);
		return $this->where('id',$data['id'])->update($data);
	}
}