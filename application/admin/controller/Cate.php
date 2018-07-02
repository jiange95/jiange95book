<?php
namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;

class Cate extends Base
{
    public function index()
    {
        //return 'this is admin';
			       
    	return $this ->fetch('cate');


        //return view('index');
    }
    public function welcome()
    {
    	return $this -> fetch('article_list');
    }
}
