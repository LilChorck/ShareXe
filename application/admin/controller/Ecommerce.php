<?php
namespace app\admin\controller;

use think\Controller;

class Ecommerce extends Controller
{
    public function cart()
    {
        return $this->fetch();
    }

    public function shop()
    {
        return $this->fetch();
    }

    public function shopdescription()
    {
        return $this->fetch();
    }
}
