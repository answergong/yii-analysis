<?php
/**
 * Created by PhpStorm.
 * User: gxz
 * Date: 2018/12/19
 * Time: 17:24
 */

namespace frontend\components;
use frontend\components\gxz\T;


class Test
{
    public $name;
    private $_age;
    private $_t;

    public function __construct($age, T $t)
    {
        $this->_t = $t;
        $this->_age = $age;
    }

}