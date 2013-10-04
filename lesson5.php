<?php

/**
 * PHP basic usage examples.
 * Lesson 5: Exception
 */

//throw new Exception('this is a exception');

/*
try {
    if (1 != '1') {
        throw new Exception('this is a exception');
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
*/

/*
class MyException extends Exception
{

}
try {
    //throw new Exception('this is a exception');
    throw new MyException('this is my exception');
} catch (MyException $e) {
    echo '#2 ' . $e->getMessage();
} catch (Exception $e) {
    echo '#1 ' . $e->getMessage();
}
*/

// 基本實作可能的情形
class ShitException extends Exception
{

}
function test() {
    $test = 'a typhoon on weekend!?';

    if ($test !== 'no typhoon on weekend!?') {
        throw new ShitException();
    }

    echo 'happy weekend!!' . PHP_EOL;
};

try {
    test();
} catch (ShitException $e) {
    echo $e->getLine();
    echo $e->getMessage();
}
