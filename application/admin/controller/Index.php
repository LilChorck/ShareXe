<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;

class Index extends Controller
{
    protected function _initialize()
    {
        // 后端全局判断是否为登录态,不是的话跳转到登录页面
        $username = Session::get('username');
        if (!isset($username)) {
            $this->error('管理员未登录,请先登录', 'admin/user/login');
        }
    }

    public function index()
    {
        return $this->fetch();
    }

    public function index1()
    {
        return $this->fetch();
    }

    public function index2()
    {
        return $this->fetch();
    }

    public function index3()
    {
        return $this->fetch();
    }

    public function index4()
    {
        return $this->fetch();
    }

    public function index5()
    {
        return $this->fetch();
    }

    public function index6()
    {
        return $this->fetch();
    }
}
