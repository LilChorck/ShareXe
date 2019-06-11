<?php

namespace app\admin\controller;

use think\Controller;

/**
 *
 */
class Article extends Controller
{
    // 文章列表
    function list() {
        $arr = db('article')->select();
        $this->assign('arr', $arr);
        return $this->fetch();
    }
    // 添加文章
    public function add()
    {
        if (request()->isGet()) {
            return $this->fetch();
        }
        if (request()->isPost()) {
            $title   = $_POST['title'];
            $pic     = $_FILES;
            $cat_id  = $_POST['cat_id'];
            $content = $_POST['content'];
            $au_id   = 1;
            $data    = [
                'title'   => $title,
                'pic'     => $pic,
                'cat_id'  => $cat_id,
                'content' => $content,
                'au_id'   => $au_id,
            ];
            $res = db('article')->insert($data);
            if ($res) {
                $this->success('文章添加成功!', 'article/list');
            } else {
                $this->error('文章添加失败,请重新添加!', 'article/add');
            }
        }
    }
}
