<?php


$foo = 1;

function some_function() {
    $foo = 100;
    $bar = 20;
}

some_function();

echo $foo, PHP_EOL; // 1
echo $bar, PHP_EOL; // Undefined variable:bar
?>

