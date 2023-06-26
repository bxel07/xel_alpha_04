<?php
$arg = $argv[1];
$output = shell_exec("php vendor/bin/phpunit setup/tests/$arg.php");
echo "<pre>$output</pre>";