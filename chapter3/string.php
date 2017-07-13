<?php

$string1 = 'this is string';
$string2 = "this is string";
$string3 = 'hi, $string2 \n';
$string4 = "hi, $string2 \n";

echo $string3;
echo $string4;

$age = 15;

// echo "$ageyears old", PHP_EOL;
echo "${age}years old.", PHP_EOL;

$foo = <<<EOI
ヒアドキュメントでは、このように、
複数行に渡る文章をそのまま表記することができます。

tom の年齢は $age 歳です
EOI;

$foo = <<<'EOI'
Nowdoc では、終端識別子をシングルクォートで囲みます。
複数行にわたる文章をそのままh表記することができます。

Tom の年齢は $age 歳です。
この $age は展開されず、 $age のまま出力されます。
EOI;

class NowDocTest
{
    const DOCUMENT1 = <<<'EOI'
変数やエスケープ文字を展開しないため、文字列がパースされません。
このため、constに指定できます。
EOI;

    const DOCUMENT2 = <<<EOI
PHP 5.3 からは、変数を含まない、または、ドル文字が適切にエスケープ
されていれば、ヒアドキュメントも const に指定できます。
ドルを含んだ文章は、\$fooのようにドル文字をエスケープします。
EOI;
}

echo 15.0;  // implicit cast to string
printf('%.1f', 15.0);   // explicit output


?>

