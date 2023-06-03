<?php

namespace devise\Service;
use devise\Basedata\Model;
use setup\baseclass\BaseData;

class Service{ 
    public function index() {
       //parrent class model 
       $instance = new BaseData();
       echo $instance->test()."echo from parrent class";

       //form model
    }
}