<?php
namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;

class unicode extends Base
{
    public function index()
    {
        //return 'this is admin';
			       
    	return $this ->fetch('unicode');


        //return view('index');
    }

}
