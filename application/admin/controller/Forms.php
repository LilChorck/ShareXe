<?php
namespace app\admin\controller;

use think\Controller;

class Forms extends Controller
{
    public function formele()
    {
        return $this->fetch();
    }

    public function formwizard()
    {
        return $this->fetch();
    }

    public function wysiwyag()
    {
        return $this->fetch();
    }
}
