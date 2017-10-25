<?php 
namespace app\home\controller;
use app\common\controller\HomeBase;
use think\Db;

class Index extends HomeBase{
	public function index(){
		return view();
	}
	
}