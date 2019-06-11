<?php
namespace app\admin\controller;

use think\Controller;

class Widgets extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
