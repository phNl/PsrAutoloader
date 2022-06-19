<?php

spl_autoload_register(function($className) {
    include dirname(__DIR__) . "/src/" . str_replace("\\", "/", $className) . ".php";
});

use Test\Test1;
use Test\Test2;
use Test\SubTest\Test3;

$test1 = new Test1();
$test2 = new Test2();
$test3 = new Test3();

$test1->printHello();
$test3->printStr(' ');
$test2->printWorld();
$test3->printStr('!');
