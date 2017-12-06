<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
}
