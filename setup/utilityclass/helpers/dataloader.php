<?php

class dataloader{
    public function value() {
        return require_once __DIR__."/../../../setup/config/config.php";
    }

    public function getkey($key) {
        $data = $this->value();
        if (is_array($data)){
            $net = $data[$key];
            return $net;
        }

       
    }

    public function getvalue($key, $value) {
        $data = $this->getkey($key);

        $net = $data[$value];
        return $net;
       

    }
}
