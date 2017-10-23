<?php 
namespace app\home\controller;
use app\common\controller\Homebase;
use think\Request;
use think\Db;

class Index extends Homebase{
	public function index(){
		echo "test";
		return view();
	}
	
}