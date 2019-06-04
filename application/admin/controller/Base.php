<?php

/**
 * @Author: renakeji
 * @Date:   2019-06-03 19:45:46
 * @Last Modified by:   renakeji
 * @Last Modified time: 2019-06-04 20:29:25
 */
namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    protected $beforeActionList = [
        'adminview',
    ];

    public function _initialize()
    {
        parent::_initialize();
    }

    protected function adminview()
    {
        // echo 'first<br/>';
    }
}
