<?php

spl_autoload_register(function($className) {
    include dirname(__DIR__) . "/src/" . str_replace("\\", "/", $className) . ".php";
});

use Test\Test1;
use Test\Test2;

$test1 = new Test1();
$test2 = new Test2();
$test1->printHello();
echo ' ';
$test2->printWorld();
echo '!';
