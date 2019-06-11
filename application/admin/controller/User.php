<?php
namespace app\admin\controller;

use app\admin\model\User as UserModel;
use think\Controller;
use think\Request;
use think\Session;

class User extends Controller
{
    public function login()
    {
        // 判断当前操作的请求类型
        // 如果为get类型,则显示登录页面
        // 如果为post类型,则为验证登录操作
        if (Request::instance()->isGet()) {
            return $this->fetch();
        }
        if (Request::instance()->isPost()) {
            $username = $_POST['username'];
            $pwd      = md5($_POST['password']);
            $res      = db('user')->where(['username' => $username, 'password' => $pwd])->find();
            if ($res) {
                Session::set('username', $username);
                $this->success('登录成功!', 'admin/index/index');
            } else {
                $this->error('登录失败,请重新登录!', 'admin/user/login');
            }
        }

    }

    // 新用户注册
    public function register()
    {
        // 判断当前操作的请求类型
        // 如果为get类型,则显示注册页面
        // 如果为post类型,则为验证注册操作
        if (Request::instance()->isGet()) {
            return $this->fetch();
        }
        if (Request::instance()->isPost()) {
            // 获取注册页面form表单传递过来的参数
            $arr      = $_POST;
            $username = $arr['username'];
            $email    = $arr['email'];
            $password = $arr['password'];

            // 验证用户名,邮箱,密码
            $result = $this->validate([
                'username' => $username,
                'email'    => $email,
                'password' => $password,
            ],
                [
                    'username' => 'require|length:6,30',
                    'email'    => 'email',
                    'password' => 'length:6,20',
                ]);

            //判断验证结果是否为true,否的话输出错误信息
            if ($result !== true) {
                dump($result);
                die;
            }

            // 验证成功,密码使用md5方式加密,存储进数据库
            $password = md5($password);
            $user     = new UserModel;

            //批量赋值
            $user->data([
                'username' => $username,
                'email'    => $email,
                'password' => $password,
            ]);
            $res = $user->save();
            if ($res) {
                $this->success('注册成功!', 'admin/user/login');
            } else {
                $this->error('注册失败,请重新注册!', 'admin/user/register');
            }
        }

    }

    public function forgotpwd()
    {
        return $this->fetch();
    }

    public function lockscreen()
    {
        return $this->fetch();
    }

    function empty() {
        return $this->fetch();
    }
    // 用户列表
    public function datatable()
    {
        // 查询所有的用信息
        $arr = db('user')->select();
        // var_dump($arr);
        // die;
        $this->assign('arr', $arr);
        return $this->fetch();
    }
    // 添加用户
    public function add()
    {
        if (request()->isGet()) {
            return $this->fetch();
        }

        if (request()->isPost()) {
            $username = $_POST['username'];
            $pwd      = $_POST['password'];
            $repwd    = $_POST['rePwd'];
            if ($pwd !== $repwd) {
                $this->error('两次密码输入不一致!', 'user/add');
            }
            $email = $_POST['email'];
            $data  = [
                'username' => $username,
                'password' => md5($pwd),
                'email'    => $email,
            ];
            $res = db('user')->insert($data);
            if ($res) {
                $this->success('添加用户成功!', 'user/datatable');
            } else {
                $this->error('用户添加失败,请重新添加!', 'user/add');
            }
        }

    }
}
