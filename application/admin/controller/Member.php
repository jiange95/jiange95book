<?php
namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;

class Member extends Base
{
    public function index()
    {
        //return 'this is admin';
			       
    	return $this ->fetch('member_list');


        //return view('index');
    }
    public function member_del()
    {
    	return $this -> fetch('member_del');
    }
}
