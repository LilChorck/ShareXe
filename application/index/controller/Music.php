<?php
namespace app\index\controller;

use think\Controller;

class Music extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

}
