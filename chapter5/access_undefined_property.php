<?php

class Employee
{
    public $name;
    private $state = 'working';
}

$yamada = new Employee();
$yamada->name = '山田';
$yamada->job = 'プログラマ';

var_dump($yamada);
var_dump(new Employee());

?>

