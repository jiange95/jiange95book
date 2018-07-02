<?php
namespace app\admin\controller;

use app\admin\common\Base;


class Index extends Base
{
    public function index()
    {
        //return 'this is admin';
			       
    	return $this ->fetch('index');


        //return view('index');
    }
    public function welcome()
    {
    	return $this -> fetch('welcome');
    }
}
