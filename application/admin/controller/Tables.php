<?php
namespace app\admin\controller;

use think\Controller;

class Tables extends Controller
{
    public function tables()
    {
        return $this->fetch();
    }

    public function datatable()
    {
        return $this->fetch();
    }
}
