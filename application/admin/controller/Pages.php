<?php
namespace app\admin\controller;

use think\Controller;

class Pages extends Controller
{
    public function about()
    {
        return $this->fetch();
    }

    public function blog()
    {
        return $this->fetch();
    }

    public function companyhistory()
    {
        return $this->fetch();
    }

    public function construction()
    {
        return $this->fetch();
    }

    public function editprofile()
    {
        return $this->fetch();
    }

    public function email()
    {
        return $this->fetch();
    }

    public function emailservices()
    {
        return $this->fetch();
    }

    function empty() {
        return $this->fetch();
    }

    public function faq()
    {
        return $this->fetch();
    }

    public function gallery()
    {
        return $this->fetch();
    }

    public function invoice()
    {
        return $this->fetch();
    }

    public function pricing()
    {
        return $this->fetch();
    }

    public function profile()
    {
        return $this->fetch();
    }

    public function services()
    {
        return $this->fetch();
    }

    public function terms()
    {
        return $this->fetch();
    }
}
