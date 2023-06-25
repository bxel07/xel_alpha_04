<?php

namespace devise\Basedata;
use setup\baseclass\BaseData;
//use devise\Devise\BaseConn;
use setup\config\database;
class Model extends BaseData {
    public function index() {
        // $instance = new BaseData();
        // $instance->test();

        $instance = new database();
        $x = $instance->getPDO();
        return $x;
    }
}
