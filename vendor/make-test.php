<?php
$arg1 = $argv[1];

$myfile = fopen("setup/tests/" .$arg1. ".php", "w") or die("cant create file");

$text = "<?php

namespace setup\config;

use PHPUnit\Framework\TestCase;

class $arg1 extends TestCase
{
    public function test(){
        
    }
}
";

fwrite($myfile, $text);
fclose($myfile);


