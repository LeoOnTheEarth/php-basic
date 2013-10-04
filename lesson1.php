<?php

/**
 * PHP basic usage examples.
 * Lesson 1: Hello World!
 */

// 基本輸出，輸出一 single quote 的字串
echo 'hello world';

// PHP 的一些特殊字元，像 \n 代表換行 (new line)，\t 代表 tab 符號
// 這些特殊字元需要用 double quote 包起來才有效
echo "\n";

// 用 single quote 輸出時會變成這樣
echo '\n';
echo ' single quote 不會換行!' . PHP_EOL;

// 基本輸出，輸出一 double quote 的字串
echo "hello world";

// another way to print a new line
echo PHP_EOL;


// 跳脫字元處理
echo 'hello \'world\'' . PHP_EOL;
echo "hello \"world\"" . PHP_EOL;
echo "hello \\'world\\'" . PHP_EOL;

// 另一種輸出方式
print('hello world' . PHP_EOL);

// 字串串接的方式
$str = 'hello' . ' ' . 'world' . PHP_EOL;
echo $str;
// 字串串接的方式 2
echo 'hello' , ' ' , 'world' , PHP_EOL;

// 用 format 的方式組成字串
printf('Lesson %d: Hello %s%s', 1, 'World', PHP_EOL);
// 用 format 的方式組成字串 2
echo sprintf('hello %s%s', 'world', PHP_EOL);

// double quote 內可以接參數
$world = 'world';
echo "hello $world\n";


// SQL Example
$uid = 123456;
$sql = 'SELECT * FROM `members` WHERE uid="%s"';
$sql = sprintf($sql, $uid);
//$row = $db->fetchRow($sql);

?>

<html>
<head>
    <title>title</title>
</head>
<body>
    uid: <?php echo $uid; ?>
</body>
</html>

<?php
// 特殊字串賦值的方式
$multiLineContent = <<<EOF
<html>
    <head>
        <title>title</title>
    </head>
<body>
    uid: $uid
</body>
</html>
EOF;
echo $multiLineContent . PHP_EOL;

// 特殊字串賦值的方式2
echo 'before ob_start()' . PHP_EOL;
ob_start();
?>

<html>
<head>
    <title>title</title>
</head>
<body>
uid: <?php echo $uid; ?>
</body>
</html>

<?php
$content = ob_get_contents();
ob_end_clean();
echo 'after ob_end_clean()' . PHP_EOL;

echo $content . PHP_EOL;

//echo 'Lesson 1 End!' . PHP_EOL;
