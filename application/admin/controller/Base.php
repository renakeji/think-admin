<?php

/**
 * @Author: renakeji
 * @Date:   2019-06-03 19:45:46
 * @Last Modified by:   renakeji
 * @Last Modified time: 2019-06-03 21:15:46
 */
namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    protected $beforeActionList = [
        'first',
    ];

    public function _initialize()
    {
        parent::_initialize();
    }

    protected function first()
    {
        echo 'first<br/>';
    }
}
