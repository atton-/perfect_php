<?php

$foo = 1;

function some_function() {
    global $foo;
    echo $foo, PHP_EOL;
}

some_function();

?>

