<?php

namespace app\index\controller;

use think\Controller;

/**
 *
 */
class Shop extends Controller
{
    public function cart()
    {
        return $this->fetch();
    }

    public function checkout()
    {
        return $this->fetch();
    }

    public function shop()
    {
        return $this->fetch();
    }

    public function shopSin()
    {
        return $this->fetch();
    }
}
