<?php
namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;

class Admin extends Base
{
    public function index()
    {
        //return 'this is admin';
			       
    	return $this ->fetch('admin_list');


        //return view('index');
    }
    public function admin_del()
    {
    	return $this -> fetch('admin_del');
    }
    public function admin_role()
    {
        return $this -> fetch('admin_role');
    }
    public function admin_cate()
    {
        return $this -> fetch('admin_cate');
    }
    public function admin_rule()
    {
        return $this -> fetch('admin_rule');
    }

}
