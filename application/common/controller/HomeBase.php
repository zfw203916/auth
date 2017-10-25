<?php

namespace app\common\controller;
/**
*home 基类控制器
**/

class HomeBase extends Base{
	
	public function _initialize(){
		parent::_initialize();
	}
	public function demo1(){
		//返回定义该方法的类名
		return get_class();
	}

	public static function demo2(){
		//返回定义该方法的类名
		return get_class();
	}
}