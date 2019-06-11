<?php
namespace app\admin\controller;

use think\Controller;

class Maps extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
