<?php
namespace app\index\controller;

use think\Controller;

class Features extends Controller
{
    public function post1()
    {
        return $this->fetch();
    }

    public function post2()
    {
        return $this->fetch();
    }

    public function post3()
    {
        return $this->fetch();
    }

    public function audio()
    {
        return $this->fetch();
    }

    public function video()
    {
        return $this->fetch();
    }
}
