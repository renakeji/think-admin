<?php

/**
 * @Author: renakeji
 * @Date:   2019-06-03 19:45:54
 * @Last Modified by:   renakeji
 * @Last Modified time: 2019-06-03 20:02:58
 */
namespace app\admin\controller;

class Index extends Base
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        return $this->fetch();
    }
}
