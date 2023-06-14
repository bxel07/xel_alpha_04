<?php

namespace devise\Basedata;
use setup\baseclass\BaseData;
use devise\Devise\BaseConn;

class Model extends BaseData {
    public function index() {
        // $instance = new BaseData();
        // $instance->test();

        $instance = new BaseConn();
        $x = $instance->getPDO();
        return $x;
    }
}
