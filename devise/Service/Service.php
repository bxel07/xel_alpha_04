<?php

namespace devise\Service;
use devise\Basedata\Model;
use setup\baseclass\BaseData;


class Service{ 
    public function index() {
       //parrent class model 
       $instance = new Model();
       $instance->index();
       echo "Note Other things";
       //form model
    }

    public function test() {
        $instance = new BaseData();
        echo $instance->test() . "<br />";
        echo "testing result";
    }
}