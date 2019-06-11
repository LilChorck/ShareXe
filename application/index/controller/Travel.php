<?php
namespace app\index\controller;

use think\Controller;

class Travel extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
