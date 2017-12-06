<?php
namespace app\admin\controller;

use think\Controller;
// use think\Db;

class Index extends Controller
{
    public function index($name='index')
    {
		// $member = Db::name('member')->find();
		// $this->assign('member', $member);
        return $this->fetch('index/'.$name);
    }
}
