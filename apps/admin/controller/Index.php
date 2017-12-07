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
		$this->assign('name', $name);
        return $this->fetch('index/'.$name);
    }
}
