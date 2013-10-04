<?php

/**
 * PHP basic usage examples.
 * Lesson 3: Basic Logical Operations
 */

// Basic if statement
$test = 1;
if (1 == $test) {
    echo 'print this' . PHP_EOL;
}

// Basic if...else statement
$test = 2;
if (1 == $test) {
    echo 'this line won\'t show' . PHP_EOL;
} else {
    echo 'print else statement content' . PHP_EOL;
}

// Basic if...elseif...else statement
// else if 在 PHP 有兩種用法: "else if" 和 "elseif"
$test = 2;
if (1 == $test) {
    echo 'this line won\'t show' . PHP_EOL;
} else if (2 === $test) {
    echo 'print this line' . PHP_EOL;
} elseif (3 === $test) {
    echo 'this line won\'t show #3' . PHP_EOL;
} else {
    echo 'this line won\'t show #else' . PHP_EOL;
}

// == vs ===
if (1 == '1') {
    echo 'true' . PHP_EOL;
}
if (1 === '1') {
    echo 'false'. PHP_EOL;
} else if (1 === 1) {
    echo 'true'. PHP_EOL;
}

// instanceof
class FooBar {}
class FooBar2 {}
class FooBar3 extends FooBar {}
$test = new FooBar();
if ($test instanceof FooBar) {
    echo '$test is a instanceof FooBar object' . PHP_EOL;
}
$test = new FooBar3();
if ($test instanceof FooBar) {
    echo '$test is a instanceof FooBar object' . PHP_EOL;
} else if ($test instanceof FooBar2) {
    echo '$test is a instanceof FooBar2 object' . PHP_EOL;
} else {
    echo '通通都沒有!' . PHP_EOL;
}

// for loop
for ($i = 0; $i < 5; ++$i) {
    echo '$i=' . $i . PHP_EOL;
}

// while loop
$i = 0;
while ($i < 5) {
    echo '$i=' . $i . PHP_EOL;
    ++$i;
}

// do while loop
$i = 0;
do {
    echo '$i=' . $i . PHP_EOL;
    ++$i;
} while ($i < 5);

// foreach #1
$pureArray = array(1, 2, 'str3', 4, 'str5');
foreach ($pureArray as $element) {
    echo $element . PHP_EOL;
}

// foreach #2
$keyValueArray = array(
    'foo' => 123,
    'bar' => 'xxx',
    'foobar' => 'abc',
);
foreach ($keyValueArray as $key => $value) {
    echo '$key: ' . $key . ', $value:' . $value . PHP_EOL;
}

// foreach #3
$keyValueArray2 = array(
    'foo' => 123,
    'bar' => array(),
    'foobar' => 'abc',
);
foreach ($keyValueArray2 as $key => &$value) {
    if ('foo' === $key) {
        //$keyValueArray2[$key] = 'value';
        $value = 'replace by reference';
    }
}
var_dump($keyValueArray2);
