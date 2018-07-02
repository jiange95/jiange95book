<?php
namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;
use app\admin\model\Admin;

class Login extends Base
{
    //渲染登录界面
    public function index()
    {
        //return 'this is admin';
			       
    	return $this ->fetch('login');


        //return view('index');
    }
    //验证用户身份
    public function check(Request $request)
    {
        //设置status
        $status =0;
        //获取一下表单提交的数据，并保存在变量中
        $data = $request -> param();
        $userName = $data['username'];
        $password = md5($data['password']);
        //在admin表中进行查询：以用户为条件
        $map = ['username'=>$userName];
        $admin =Admin::get($map);
        //将用户名和密码分开验证
    	
        //如果没有查到该用户
        if (is_null($admin)) {
            //设置返回信息
            $message ='用户名不能为空';
        }elseif ($admin->password != $password) {
            //设置密码不正确的返回信息
            $message ='密码不正确';
        }else{
            //如果用户名和密码都通过了验证，该用户为合法用户
            //修改返回信息
            $status = 1;
            $message ='验证通过，请点击确定进入后台';
            //更新用户的登录次数和最后登录时间
            $admin -> setInc('login_count');
            $admin -> save(['last_time'=>time()]);
            //将用户的登录信息保存到session中，为其它控制器提供登陆信息
            Session::set('user_id', $userName);
            Session::set('user_info', $data);
        }
        return ['status'=>$status,'message'=>$message];

    }
    //退出登录
    public function save(Request $request)
    {
        
    }
   

}
