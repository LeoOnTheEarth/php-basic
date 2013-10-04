<?php

/**
 * PHP basic usage examples.
 * Lesson 2: Array
 */

$basicArray = array(1, 23, 4, 5, 6, 789);

$keyValueArray = array(
    'key' => 'value',
    'foo' => array(
        'bar' => '123456',
        'xxx' => 123456,
    ),
);

$keyValueArray = array();
$keyValueArray['key'] = 'value';
$keyValueArray['foo'] = array();
$keyValueArray['foo']['bar'] = '123456';
$keyValueArray['foo']['xxx'] = 123456;

if (in_array(1, $basicArray)) {
    echo 'in_array' . PHP_EOL;
}

if (is_array($basicArray)) {
    echo 'is array' . PHP_EOL;
}

if (array_key_exists('foo', $keyValueArray)) {
    echo 'key exists' . PHP_EOL;
}
if (isset($keyValueArray['foo'])) {
    echo 'key exists' . PHP_EOL;
}

// PHP5.4 新語法
$newArray = [6, 1, 2, 3, 4, 5];
$newArray = [1, 'foo' => 'bar', 'key' => [1, 3, 4]];

// sort (call by reference)
// 小到大排序
sort($newArray);
// 大到小排序
rsort($newArray);
// 自訂排序
usort($newArray, function ($left, $right) {
    if ($left == $right) {
        return 0;
    }

    return ($left > $right) ? -1 : 1;
});

echo '<pre>';
var_dump($newArray);
print_r($newArray, false); // $str = print_r($newArray, true);
echo '</pre>';
