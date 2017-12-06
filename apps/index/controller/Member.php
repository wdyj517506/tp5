<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Member extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
	
    public function profile()
    {
        return $this->fetch();
    }
}
