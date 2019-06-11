<?php
namespace app\admin\controller;

use think\Controller;

class Error extends Controller
{
    public function err400()
    {
        return $this->fetch();
    }

    public function err401()
    {
        return $this->fetch();
    }

    public function err403()
    {
        return $this->fetch();
    }

    public function err404()
    {
        return $this->fetch();
    }

    public function err500()
    {
        return $this->fetch();
    }

    public function err503()
    {
        return $this->fetch();
    }
}
