<?php

/**
 * PHP basic usage examples.
 * Lesson 6: Misc
 */

$variable = array(1, 2, 3, 4, 5, 6);

var_dump($variable);
print_r($variable);

// throw new Exception(); is better than exit;

// http://localhost/index.php?foo=bar
/**
 * <form method="GET">
 *  <input type="text" name="foo" value="bar" />
 *  <input type="submit" value="submit" />
 * </form>
 */
var_dump($_GET['foo']);
/**
 * <form method="POST">
 *  <input type="text" name="foo" value="bar" />
 *  <input type="submit" value="submit" />
 * </form>
 */
var_dump($_POST['foo']);

// 檔案上傳
var_dump($_FILES);
// http://www.w3schools.com/php/php_file_upload.asp

// check a value is exists
if (isset($_POST['foo'])) {
    echo '$_POST["foo"] is exists';
}

// 寫文件
// http://www.phpdoc.org/docs/latest/index.html
/**
 * Class DocumentExample
 *
 * Description
 *
 * @author Leo <leo@bm-sms.com.tw>
 */
class DocumentExample
{
    /**
     * 這是存一個矩陣資料的屬性
     *
     * 下面是屬性的格式範例
     * <code>
     * array(
     *     'foo' => 'bar',
     *     'abc/ => 123,
     * )
     * </code>
     *
     * @var $foo array
     */
    protected $foo;

    /**
     * 建購子
     */
    public function __construct()
    {

    }

    /**
     * 設定 foo 的值
     *
     * @param array $foo foo 的值
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;
    }

    /**
     * 取得 foo 的值
     *
     * @return array 回傳值為矩陣
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * 檢查是否有 foo 的值
     *
     * @return bool 如果 foo 有值回傳 true, 反之回傳 false
     */
    public function hasFoo()
    {
        return false;
    }
}

/**
 * Class Bar
 */
class Bar
{
    /**
     * 文件範例
     *
     * @var $bar DocumentExample
     */
    protected $bar;

    /**
     * 給定一個文件範例物件
     *
     * @param DocumentExample $bar 文件範例物件
     */
    public function setBar($bar)
    {
        $this->bar = $bar;
    }
}


// anonymous function 匿名函式
$function = function ($year, $month) {
    printf('this month is %s-%s', $year, $month);
};
$function(2013, 10);
echo "\n";

$myArgumentUseInAnonymousFunction = '2013-10-04';
$function2 = function () use ($myArgumentUseInAnonymousFunction) {
    printf('the date is %s', $myArgumentUseInAnonymousFunction);
};
$function2();
echo "\n";

function test() {
    $func = function () {
        echo 'test';

    };

    $func();
}